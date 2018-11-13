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
@php
$id=Auth::user()->id;
$client_company_name=Auth::user()->client_company_name;
$client_company_address=Auth::user()->client_company_address;
$client_inspiration=Auth::user()->client_inspiration;
$client_role_model=Auth::user()->client_role_model;
$client_first_project=Auth::user()->client_first_project;
$client_project_completed=Auth::user()->client_project_completed;
$client_url=Auth::user()->client_url;

$userProfile = DB::table('user_profile')
    ->where('cilent_email',Auth::user()->email)
    ->first();
@endphp
<div class="col-lg-3 col-md-4 col-sm-5 p0 leftDivProfile">
    &nbsp;
</div>
<div class="col-lg-9 col-md-8 col-sm-7 rightDivProfile">
    <div class="profilePageMainContent">
            <h1 class="profilePageHeading">Profile Settings</h1>
            <div style="margin-bottom:170px;"></div>
@if($userProfile == NULL)

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
@endif
        <div class="white-box profileFormCustom profileSettingForm Overflow">
            <form action="/profile/profile_seting/{{$id}}" enctype="multipart/form-data" class="profile_form" role="form" method="post">
                {{ csrf_field() }}
                @if (Auth::user()->client_plan_type == 'premium')
                <div class="col-md-12 p0" style="margin-bottom:20px;">
                    <div class=" form-group "><label for="client_company_name" class="optional" aria-required="true">Current URL</label><br>
                        https://durrows.com/profile/
                        <input type="text" name="client_url" id="client_url" value="{{$client_url}}"  style="padding: 6px 10px; width: 79%" autocomplete="off" placeholder="{{ $id }}" aria-required="true">
                        
                    </div>
                </div>
                @endif
                <div class="col-md-12 p0 ">
                    <div class="col-md-6 PL0 p0_smresp">
                        <div class=" form-group "><label for="client_email" class="optional">Email</label>
                            <input type="text" name="client_email" id="client_email" value="{{$userProfile->cilent_email }}" class="form-control" autocomplete="off" placeholder="email">
                        </div>
                    </div>
                    <div class="col-md-6 PR0 p0_smresp">
                        <div class=" form-group "><label for="client_country" class="optional">Country</label>
                         @php $usercountry=explode(" - ",$userProfile->client_country); @endphp
                            <select name="client_country" id="client_country" value="{{$usercountry[1]}}" class="form-control " aria-required="true">
                                <option value="" selected="selected">{{$usercountry[1]}}</option>
                                @foreach ($countries as $country)
                                    <option value="{{ $country->id }}" @if( $usercountry[1] == $country->id) selected @endif>{{ $country->country_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 p0 ">
                    <div class=" form-group "><label for="client_email" class="optional">Accomplishments</label>
                        <input type="text" name="client_email" id="client_email" value="{{$userProfile->client_accomplishment }}" class="form-control" autocomplete="off" >
                    </div>
                </div>
                <div class="col-md-12 p0 ">
                    <div class="col-md-6 PL0 p0_smresp">
                        <div class=" form-group "><label for="client_firstproj" class="optional">First Project Date</label>
                            <input type="date" name="client_firstproj" id="client_firstproj" value="{{$userProfile->client_first_project }}" class="form-control" autocomplete="off">
                        </div>
                    </div>
                    <div class="col-md-6 PR0 p0_smresp">
                        <div class=" form-group "><label for="client_totalproj" class="optional">Total Projects Completed</label>
                            <input type="text" name="client_totalproj" id="client_totalproj" value="{{$userProfile->client_total_project }}" class="form-control" autocomplete="off">
                        </div>
                    </div>
                </div>
                <div class="col-md-12 p0 ">
                    <div class="col-md-6 PL0 p0_smresp">
                        <div class=" form-group "><label for="enjoy_design" class="optional">How many hours would you prefer to spend on designing work? (1=10%, 10=100%)</label>
                            <select name="enjoy_design" id="enjoy_design" value="{{$userProfile->enjoy_design}}" class="form-control " >
                                <option value="" selected="selected">{{$userProfile->enjoy_design}}</option>
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
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 PR0 p0_smresp">
                        <div class=" form-group "><label for="enjoy_manage" class="optional">How many hours would you prefer to spend on project management tasks? (1=10%, 10=100%)</label>
                            <select name="enjoy_manage" id="enjoy_manage" value="{{$userProfile->enjoy_manage}}" class="form-control ">
                                <option value="" selected="selected">{{$userProfile->enjoy_manage}}</option>
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
                            </select>
                        </div>
                    </div>
                </div>
                                <div class="col-md-12 p0 ">
                    <div class="col-md-6 PL0 p0_smresp">
                        <div class=" form-group "><label for="enjoy_style" class="optional">How many hours would you prefer to spend on Interior Styling? (1=10%, 10=100%)</label>
                            <select name="enjoy_style" id="enjoy_style" value="{{$userProfile->enjoy_style}}" class="form-control ">
                                <option value="" selected="selected">{{$userProfile->enjoy_style}}</option>
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
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 p0 ">
                    <div class="UserAccomplishments ratingsDiv">
                        @foreach($skills as $skill)

                            @php
                                $subskills = $skill->getSubCategory();
                                if(count($subskills) == 0) continue;
                             @endphp 
                            <div class="ind_main ">
                                <label class="skillCat" for="Design_Package">Design Package</label></label>
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
                    </div>
                </div>
                <!--
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
                </div>-->
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