<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Illuminate\Support\Facades\DB;
use App\Dresstylepreferences;
use App\Skillscategory;
use App\Designeraccomplishments;
use App\Skillssubcategory;
use Hash;
use App\Favourite;
use App\Likedportfolios;

class TestController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userid = Auth::user()->id;
        $user = User::find($userid);

        $styles = array();
        if($user->client_style_one != null)
            $styles[] = DB::table('dres_style_preferences')->where('id', $user->client_style_one)->first()->sp_title;
        if($user->client_style_two != null)
            $styles[] = DB::table('dres_style_preferences')->where('id', $user->client_style_two)->first()->sp_title;
        if($user->client_style_three != null)
            $styles[] = DB::table('dres_style_preferences')->where('id', $user->client_style_three)->first()->sp_title;

        $accomplishs = DB::table('designer_accomplishments')->where('da_user_id', $userid)->orderBy('da_certification_timeperiod', 'DESC')->get();

        return view('/frontend/MyProfile', [
            'user' => $user,
            'styles' => $styles,
            'accomplishs' => $accomplishs
        ]);
    }

    public function profileSettings()
    {
        $styles = Dresstylepreferences::all();
        $skills = Skillscategory::all();
        $custom_skills = Skillssubcategory::where('ssc_user_id',Auth::user()->id)->get();
        
            
        return view('./frontend/test', [
            'styles' => $styles,
            'skills' => $skills,
            'custom_skills' => $custom_skills
        ]);
    }
    public function remove_customeskill($id){
        $skill = Skillssubcategory::find($id);
        // dd($skill);
        if($skill) $skill->delete();
        return 1;
    }
    public function profileSave(Request $request, $id){
        $user = User::find(Auth::user()->id);
        // dd($user);
        // dd(count($request->skills));
        $user->client_first_project = $request->client_first_project;
        $user->client_project_completed = $request->client_project_completed;
        $user->client_company_name = $request->client_company_name;
        $user->client_company_address = $request->client_company_address;
        $user->client_inspiration = $request->client_inspiration;
        $user->client_role_model = $request->client_role_model;
        $user->client_style_one = $request->client_style_one;
        $user->client_style_two = $request->client_style_two;
        $user->client_style_three = $request->client_style_three;
        $skills = '';
        // dd($user);
        if($request->skills)
        {
            foreach ($request->skills as  $skill){
                $skills.=$skill.';';
            }
            $user->client_skills = "a:".count($request->skills).":{".$skills."}";
        }
        else{
            $user->client_skills = '';
        }
        // dd($request);
        // dd($skills);
        
        // dd($user);
        $accomplishiments = Designeraccomplishments::where('da_user_id',Auth::user()->id)->delete();
        $da_certification_names = $request->da_certification_name;
        if($request->client_custom_skill){
            foreach($request->client_custom_skill as $key => $custom_skill){
               
                if($skill = Skillssubcategory::find($key)){

                }
                else{
                    $skill = new Skillssubcategory;
                }
                $skill->ssc_parent_title = $custom_skill;
                $skill->ssc_parent_id = 0;
                $skill->ssc_date_added = date('Y-m-d H:i:s');
                $skill->ssc_type = 'custom';
                $skill->ssc_user_id = Auth::user()->id;
                $skill->save();
            }
        }
        if($da_certification_names){
            foreach($da_certification_names as $key => $value){

                
                if(Designeraccomplishments::find($key)){
                    $accomplishiments = Designeraccomplishments::find($key);
                    $accomplishiments->da_certification_name = $value.'';
                    $accomplishiments->da_certification_authority = $request->da_certification_authority[$key].'';
                    $accomplishiments->da_certification_timeperiod = $request->da_certification_timeperiod[$key].'';
                    $accomplishiments->da_certification_number = $request->da_certification_number[$key].'';
                    $accomplishiments->da_user_id = Auth::user()->id;
                    $accomplishiments -> save();
                }else{
                    $accomplishiments = new Designeraccomplishments;
                    if($value)    {
                        $accomplishiments->da_certification_name = $value.'';
                        $accomplishiments->da_certification_authority = $request->da_certification_authority[$key].'';
                        $accomplishiments->da_certification_timeperiod = $request->da_certification_timeperiod[$key].'';
                        $accomplishiments->da_certification_number = $request->da_certification_number[$key].'';
                        $accomplishiments->da_user_id = Auth::user()->id;
                        $accomplishiments -> save();
                    }
                }
                    
                   
                
                
            }
        }
        
        if( $uploadimage= $request->file('client_cover_img')) {
            $file_name = time() . Auth::user()->id.'.' . $uploadimage->getClientOriginalExtension();
            $url = ('/images/user_cover_image/') . $file_name;
            $uploadimage->move(public_path('images/user_cover_image'), $file_name);
            $user->client_cover_img = $file_name;
            $flag = 1;
        }
        $user->save();
        
        return redirect()->back()->with('message','Profile Settings Updated');
        
     
    }

    public function removeaccomplishment($id){
        if($accomplish = Designeraccomplishments::find($id)){
            $accomplish->delete();
            return 1;
        }
        return 1;
    }
    public function addmore($id)
    {
        echo '<div class="pickupLocations col-sm-4 p0" id="divId_'.$id.'_new'.'">
        <div class="">
            <div class="removebtn" onclick="removediv(\''.$id.'_new'.'\')"><i class="fa fa-trash-o"></i></div>
            <div class="singleLocDiv row m0">
                <div class="col-md-12 ">
                     <div class="form-group">
                        <label >Certification Name</label>
                        <input type="text" name="da_certification_name[\''.$id.'_new'.'\']" id="da_certification_name_'.$id.'_new'.'" class="form-control d" placeholder="eg.: renovation for public housing" />
                    </div>
                </div>
                <div class="col-md-12">
                     <div class="form-group">
                        <label >Certification Authority</label>
                        <input type="text" name="da_certification_authority[\''.$id.'_new'.'\']" id="da_certification_authority_'.$id.'_new'.'" class="form-control" placeholder="eg.: BCA Singapore"  />
                    </div>
                </div>
                <div class="col-md-12">
                     <div class="form-group">
                        <label >Year Certified</label>
                        <input type="text" name="da_certification_timeperiod[\''.$id.'_new'.'\']" id="da_certification_timeperiod_'.$id.'_new'.'" class="form-control"  placeholder="eg.: 2010" />
                    </div>
                </div>
                 <div class="col-md-12">
                     <div class="form-group">
                        <label >Certification No. (if any) </label>
                        <input type="text" name="da_certification_number[\''.$id.'_new'.'\']" id="dda_certification_number_'.$id.'_new'.'" class="form-control " placeholder="Certification No. " />
                    </div>
                </div>
        </div>
    </div>';
    }

    public function profilechangepassword()
        {
            return view('./frontend/Changepassword');
        }
    public function changepassword(Request $request){
        
        
            
        if($request->client_old_password == null || $request->password == null || $request->client_rpassword == null){ 
            return redirect('/profile/changepassword')->with('message','dashboard.password.noinput');
        }
        // dd($request);
        if($request->password != $request->client_rpassword){
            return redirect('/profile/changepassword')->with('message','dashboard.password.nomatch'); 
        }
        $user=User::find(Auth::user()->id); 
            if(Hash::check($request->client_old_password, $user->password))
        {
        $user->password=bcrypt($request->input('password')); $user->save(); 
            return redirect('/profile/changepassword')->with('message','dashboard.password.success'); 
        } 
        else{
            return redirect('/profile/changepassword')->with('message','dashboard.password.incorrect_current_password'); 
        }
                     
    }

    public function favourite(){
        $favourites = Favourite::where('fav_user_id', Auth::user()->id)->get();
        
        $likes = Likedportfolios::where('like_user_id', Auth::user()->id)->get();
        // dd($likes);
        return view('frontend.favourite',compact('favourites','likes'));
    }
}
