<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Countries;
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
        $countries = Countries::all();
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
            'accomplishs' => $accomplishs,
            'countries' => $countries
        ]);
    }

    public function profileSettings()
    {
        $styles = Dresstylepreferences::all();
        $skills = Skillscategory::all();
        $custom_skills = Skillssubcategory::where('ssc_user_id',Auth::user()->id)->get();
        $countries = Countries::all();
            
        return view('./frontend/test', [
            'styles' => $styles,
            'skills' => $skills,
            'custom_skills' => $custom_skills,
            'countries' => $countries
        ]);
    }
    public function remove_customeskill($id){
        $skill = Skillssubcategory::find($id);
        // dd($skill);
        if($skill) $skill->delete();
        return 1;
    }
    public function profileSave(Request $request, $id){

        $userProfile=[
        "cilent_email" => $request->cilent_email,
        "client_country" => $request->client_country,
        "client_accomplishments" => $request->client_accomplishments,
        "client_first_project" => $request->client_firstproj,
        "client_total_project" => $request->client_totalproj,
        "enjoy_design" => $request->enjoy_design,
        "enjoy_manage" => $request->enjoy_manage,
        "enjoy_style" => $request->enjoy_style      
            ];
        $user = User::find(Auth::user()->id);
        $user->client_url = $request->client_url;
        
        // dd($user);
        if($request->skills)
        {
            foreach ($request->skills as  $skill){
                $skills.=$skill.';';
            }
            $userProfile->client_skills = "a:".count($request->skills).":{".$skills."}";
        }
        else{
            $userProfile->client_skills = '';
        }


         DB::table('user_profile') 
        ->where('cilent_email', Auth::user()->email)
        ->update($userProfile);
        $user->save();
        return redirect()->back()->with('message','Profile Settings Updated');
        
     
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
