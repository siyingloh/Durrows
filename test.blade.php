@extends('layouts.profile')
@section('pageTitle')
{{ env('APP_NAME')}} - Profile Settings
@endsection
@section('content')
<script>
    $(document).ready(function(e){
    	$('a[data-title="d_profile_settings"]').addClass("active");
    	
    });
    $(window).load(function(e) {
    	 if($(".deimg").length>0){
    		$('.deimg').initial(); 
    	 } 
    });
    
</script> 
<?php $id=Auth::user()->id ?>
<?php $client_company_name=Auth::user()->client_company_name ?>
<?php $client_company_address=Auth::user()->client_company_address ?>
<?php $client_inspiration=Auth::user()->client_inspiration ?>
<?php $client_role_model=Auth::user()->client_role_model ?>
<?php $client_first_project=Auth::user()->client_first_project ?>
<?php $client_project_completed=Auth::user()->client_project_completed ?>
<?php $client_url=Auth::user()->client_url ?>
<?php
        $userProfile = DB::table('user_profile')
            ->select('cilent_email')
            ->where('cilent_email',Auth::user()->email)
            ->get();
?>

<div class="col-lg-3 col-md-4 col-sm-5 p0 leftDivProfile">
    &nbsp;
</div>
<div class="col-lg-9 col-md-8 col-sm-7 rightDivProfile">
    <div class="profilePageMainContent">
            <h1 class="profilePageHeading">Profile Settings</h1>
            <div style="margin-bottom:170px;"></div>
   
    <div class="typeform-widget" data-url="https://durrows.typeform.com/to/x4vn0j" style="width: 100%; height: 500px;">
        <div class="css-1o3fej e12baen60">
            <div class="css-1dhiiz4 e12baen62">
                <div></div>
            </div>
            <div class="css-w5pcnp e12baen61" open="true"><iframe width="100%" height="100%" frameborder="0" src="./profile3_files/x4vn0j.html" data-qa="iframe" style="border: 0px;"></iframe></div>
        </div>
    </div>
    <script> (function() { var qs,js,q,s,d=document, gi=d.getElementById, ce=d.createElement, gt=d.getElementsByTagName, id="typef_orm", b="https://embed.typeform.com/"; if(!gi.call(d,id)) { js=ce.call(d,"script"); js.id=id; js.src=b+"embed.js"; q=gt.call(d,"script")[0]; q.parentNode.insertBefore(js,q) } })() </script> 
    <div style="font-family: Sans-Serif;font-size: 12px;color: #999;opacity: 0.5; padding-top: 5px;"> powered by <a href="https://admin.typeform.com/signup?utm_campaign=x4vn0j&amp;utm_source=typeform.com-12313579-Basic&amp;utm_medium=typeform&amp;utm_content=typeform-embedded-poweredbytypeform&amp;utm_term=EN" style="color: #999" target="_blank">Typeform</a> </div>
    

        <div class="white-box profileFormCustom profileSettingForm Overflow">
            <form action="/profile/profile_seting/{{$id}}" enctype="multipart/form-data" class="profile_form" novalidate="novalidate" role="form" method="post">
                {{ csrf_field() }}
                @if (Auth::user()->client_plan_type == 'premium')
                <div class="col-md-12 p0" style="margin-bottom:20px;">
                    <div class=" form-group "><label for="client_company_name" class="required" aria-required="true">Current URL</label><br>
                        <div>https://durrows.com/profile/
                        <input type="text" name="client_url" id="client_url" value="{{$client_url}}" class=" required" style="padding: 6px 10px; width: 79%" autocomplete="off" placeholder="{{ $id }}" aria-required="true">
                        </div>
                    </div>
                </div>
                @endif
                <div class="col-md-12 p0 ">
                    <div class="col-md-6 PL0 p0_smresp">
                        <div class=" form-group "><label for="client_company_name" class="required" aria-required="true">Company Name</label>
                            <input type="text" name="client_company_name" id="client_company_name" value="{{$client_company_name}}" class="form-control required avoidDupeSel" autocomplete="off" placeholder="Company Name" aria-required="true">
                        </div>
                    </div>
                    <div class="col-md-6 PR0 p0_smresp">
                        <div class=" form-group "><label for="client_company_address" class="optional">Company Address</label>
                            <input type="text" name="client_company_address" id="client_company_address" value="{{$client_company_address}}" class="form-control" autocomplete="off" placeholder="Company Address">
                        </div>
                    </div>
                </div>
                <div class="col-md-12 p0 ">
                    <div class="col-md-6 PL0 p0_smresp">
                        <div class=" form-group "><label for="client_inspiration" class="optional">Inspiration</label>
                            <input type="text" name="client_inspiration" id="client_inspiration" value="{{$client_inspiration}}" class="form-control" autocomplete="off" placeholder="Inspiration">
                        </div>
                    </div>
                    <div class="col-md-6 PR0 p0_smresp">
                        <div class=" form-group "><label for="client_role_model" class="optional">Role Model</label>
                            <input type="text" name="client_role_model" id="client_role_model" value="{{$client_role_model}}" class="form-control" autocomplete="off" placeholder="Role Model">
                        </div>
                    </div>
                </div>
                <div class="col-md-12 p0 ">
                    <div class="col-md-6 PL0 p0_smresp">
                        <div class=" form-group "><label for="client_first_project" class="required" aria-required="true">First project was in</label>
                            <input type="text" name="client_first_project" id="client_first_project" value="{{$client_first_project}}" class="form-control required" autocomplete="off" placeholder="First project was in (example : 2017)" aria-required="true">
                        </div>
                    </div>
                    <div class="col-md-6 PR0 p0_smresp">
                        <div class=" form-group">
                            <label for="client_project_completed" class="optional"><label for="client_project_completed" class="required" aria-required="true">Number of Projects Completed to date</label>
                            </label>
                            <div class="inputSelectBox">
                                <select class="form-control" onchange="changeInputValue(this.value,&#39;client_project_completed&#39;);">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                    <option value="13">13</option>
                                    <option value="14">14</option>
                                    <option value="15">15</option>
                                    <option value="16">16</option>
                                    <option value="17">17</option>
                                    <option value="18">18</option>
                                    <option value="19">19</option>
                                    <option value="20">20</option>
                                    <option value="21">21</option>
                                    <option value="22">22</option>
                                    <option value="23">23</option>
                                    <option value="24">24</option>
                                    <option value="25">25</option>
                                    <option value="26">26</option>
                                    <option value="27">27</option>
                                    <option value="28">28</option>
                                    <option value="29">29</option>
                                </select>
                                <input type="text" name="client_project_completed" id="client_project_completed" value="{{$client_project_completed}}" class="form-control required" autocomplete="off" placeholder="eg.: 20" aria-required="true">                                            
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 p0 ">
                    <div class="col-md-6 PL0 p0_smresp">
                        <div class=" form-group "><label for="client_e" class="optional">Email</label>
                            <input type="text" name="client_e" id="client_e" value="{{$userProfile }}" class="form-control" autocomplete="off" placeholder="Inspiration">
                            <?php var_dump($userProfile) ?>
                        </div>
                    </div>
                    <div class="col-md-6 PR0 p0_smresp">

                    </div>
                </div>
                
                <div class="col-md-12 p0 ">
                    <div class="UserAccomplishments">
                        <h1>Accomplishments</h1>
                        <div class="pickUpLocationDiv col-sm-12 p0">
                            <div class="row m0" style="margin-bottom:20px;">
                                <button type="button" class="btn btn-info" name="addmore" id="addmore" onclick="addmoreAccomplishments()">Add More Accomplishments</button>
                                <input type="hidden" id="countLang" value="1">
                            </div>
                            @foreach (Auth::user()->getAccomplishments() as $accomplishment)
                              <div class="pickupLocations col-sm-4 p0" id="divId_0">
                                <div class="">
                                    <div class="removebtn" onclick="removediv({{ $accomplishment->id }})"><i class="fa fa-trash-o"></i></div>
                                    <div class="singleLocDiv row m0">
                                        <div class="col-md-12 ">
                                            <div class="form-group">
                                                <label>Certification Name</label>
                                                <input type="text" name="da_certification_name[{{ $accomplishment->id }}]" id="da_certification_name_0" value="{{ $accomplishment->da_certification_name }}" class="form-control d" placeholder="eg.: renovation for public housing">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Certification Authority</label>
                                                <input type="text" name="da_certification_authority[{{ $accomplishment->id }}]" id="da_certification_authority_0" value="{{ $accomplishment->da_certification_authority }}" class="form-control" placeholder="eg.: BCA Singapore">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Year Certified</label>
                                                <input type="text" name="da_certification_timeperiod[{{ $accomplishment->id }}]" id="da_certification_timeperiod_0" value="{{ $accomplishment->da_certification_timeperiod }}" class="form-control" placeholder="eg.: 2010">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Certification No. (if any) </label>
                                                <input type="text" name="da_certification_number[{{ $accomplishment->id }}]" id="dda_certification_number_0" value="{{ $accomplishment->da_certification_number }}" class="form-control " placeholder="Certification No. ">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>  
                            @endforeach
                            
                        </div>
                    </div>
                </div>
                <p>&nbsp;</p>
                <div class="col-md-12 p0 ">
                    <div class="UserAccomplishments ratingsDiv">
                        <h1>Featured Skills </h1>
                        @foreach($skills as $skill)

                            @php
                                $subskills = $skill->getSubCategory();
                                if(count($subskills) == 0) continue;
                             @endphp 
                            <div class="ind_main ">
                                <label class="skillCat" for="productOtions_{{ $skill->id }}">{{ $skill->sc_title }}</label>
                                @foreach ($subskills as $subskill)
                                <div class="skillSubcatDiv">
                                    <div class="customCheck">
                                        <div class="form-group m0 Overflow clear">
                                            <label class="control control--checkbox" for="suboption_{{ $subskill->id }}">
                                                {{ $subskill->ssc_parent_title }}                                                    
                                                <input type="checkbox" class="checkClass" onchange="checkSkillCount('a','suboption_{{ $subskill->id }}')" name="skills[{{ $subskill->id }}]" id="suboption_{{ $subskill->id }}" value="i:{{ $skill->id }};s:l:{{ $subskill->id }}" @if(Auth::user()->hasSkill($subskill->id)) checked @endif>
                                                <div class="control__indicator"></div>
                                            </label>
                                        </div>
                                    </div>
                                    
                                </div>
                                @endforeach
                            </div>
                        @endforeach
                        
                        
                        <div class="customSkillsDivMainDiv">
                            <button class="addSkillBtn btn btn-info" type="button" onclick="addSkills(&#39;a&#39;)">Add your skills</button>
                            <div class="errorMsg">You can have only a skills</div>
                            <div class="customSkillsDiv">
                            
                                @foreach ($custom_skills as $custome_skill)
                                    <div class="col-md-4 customSkillVal" id="customSkillsDivInner_{{ $custome_skill->id }}">
                                        <button type="button" class="removebtn" onclick="removeCstmSkill({{ $custome_skill->id }})">
                                            <i class="fa fa-minus-circle"></i>
                                        </button>
                                        <div class="form-group">
                                            <label>Skill Name</label>
                                            <input type="text" name="client_custom_skill[{{ $custome_skill->id }}]" id="client_custom_skill_{{ $custome_skill->id }}" class="form-control required" placeholder="Skill Name" value="{{  $custome_skill->ssc_parent_title }} "></div></div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="clear">
                <div class="col-sm-12 p0">
                    <div class="UserAccomplishments">
                        <h1>Style Specialty</h1>
                        <div class="col-md-6 PL0 p0_smresp">
                            <div class=" form-group ">
                                <label for="client_style_one" class="optional">1st Choice</label>
                                <select name="client_style_one" id="client_style_one" class="form-control styleDropDown">
                                    <option value="">select style</option>
                                    @foreach($styles as $style)
                                        
                                            
                                       
                                        <option value="{{ $style->id }}" @if ($style->id == Auth::user()->client_style_one) selected @endif>{{ $style->sp_title }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 PL0 p0_smresp">
                            <div class=" form-group ">
                                <label for="client_style_two" class="optional">2nd Choice</label>
                                <select name="client_style_two" id="client_style_two" class="form-control styleDropDown">
                                    <option value="">select style</option>
                                    @foreach($styles as $style)
                                        <option value="{{ $style->id }}" @if ($style->id == Auth::user()->client_style_two) selected @endif>{{ $style->sp_title }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <p>&nbsp;</p>
                        <div class="col-md-6 PL0 p0_smresp">
                            <div class=" form-group ">
                                <label for="client_style_three" class="optional">3rd Choice</label>
                                <select name="client_style_three" id="client_style_three" class="form-control styleDropDown">
                                    <option value="">select style</option>
                                    @foreach($styles as $style)
                                        <option value="{{ $style->id }}" @if ($style->id == Auth::user()->client_style_three) selected @endif>{{ $style->sp_title }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 p0 clientCoverDiv">
                    <div class=" form-group "><label for="client_cover_img" class="optional">Cover Image (Minimum Size 900*371)</label>
                        <input type="hidden" name="MAX_FILE_SIZE" value="268435456" id="MAX_FILE_SIZE">
                        <input type="file" name="client_cover_img" id="client_cover_img" class="default input-file" accept="image/*">
                    </div>
                </div>
                <div class="">
                    <button name="bttnsubmit" id="bttnsubmit" type="submit" value="
                        Save" class="site_Form_button btn btn-default">
                    Save</button>
                </div>
            </form>
            <p>&nbsp;</p>
        </div>
        
    </div>
    
</div>
</div>
</div>
</div>
<script>
    var TotalCusSkill = '0'
    $(document).ready(function(e) {
    	var addmore ='0';
    	if(addmore=='0'){ 
    		addmoreAccomplishments();
    	}
    });
</script></div>
@endsection