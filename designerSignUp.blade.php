@extends('layouts.frontend')
@section('pageTitle')
{{ env('APP_NAME')}} - Designer Sign Up
@endsection
@section('content')

<style>
@font-face { font-family: "Graphik"; src: url('images/Font/Graphik-Light.otf') format("opentype"); } 
.form-group input[type=radio], .form-group  input[type=checkbox] { border: 1px solid #fff; padding: 0.5em; cursor: pointer; -webkit-appearance: none;}
.form-group input[type=radio]:checked, .form-group input[type=checkbox]:checked { background: url(data:image/gif;base64,R0lGODlhAQABAPAAAP///////yH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==) no-repeat center center; background-size: 9px 9px;}
.form-group input[type=radio]:focus,  .form-group input[type=checkbox]:focus { outline-color: transparent;}
.form-group li {font-style:none; text-decoration: none; display: inline; margin-right: 20px;}
.sign-up { padding-top: 5rem; padding-bottom: 9rem;background-color: #f4c441; font-family: "Graphik";}
.pre-form { font-size: 2.5rem; text-align: center; text-decoration: underline;}
.form-group {font-size: 1.8rem; margin-left:33%; margin-right:30%; margin-top: 5%;}
.typeform input {width: 100%; max-width: 480px; font-size: 1.1rem; margin-top:10px ; padding: 5px;}
.radioform label {margin-right: 20px; }
.form-group .submit { text-align: center; margin: 20px;}
.submit-button { background-color: black; color: white; border: none; font-size: 1.5rem; padding: 8px 20px;}
.submit-button:hover, .submit-button:active {background-color: #FF7F00; cursor: pointer;}
</style>

<div class="sign-up">
    <div class="pre-form">
        <div><img src="{{ asset('images/Durrows.png')}}"  alt=""  width="380px" height="120px"/></div>
        SIGN UP FORM
    </div>
    <form id="validate" enctype="application/x-www-form-urlencoded" role="form" class="profile_form" novalidate="novalidate" method="post" >
    @csrf
    <div class="form-group">
        <div class="typeform">
        <div>PERSONAL INFORMATION</div>
        <input type="text" name="guest_name" id="guest_name" class="form-control required" placeholder="NAME">
        <input type="text" name="guest_phone" id="guest_phone" class="form-control required" placeholder="MOBILE"  onkeypress="return ValidateNumber(event)" >
        <input type="email" name="guest_email" id="guest_email" class="form-control required" placeholder="EMAIL">
        <input type="text" name="guest_company" id="guest_company" class="form-control required" placeholder="COMPANY">
        <input type="text" name="guest_address" id="guest_address" class="form-control required" placeholder="ADDRESS">
        <div style="height:  20px"></div>

        <div>EXPERIENCE</div>
        <input type="text"  name="exp_project" id="exp_project" class="form-control required" placeholder="Number of projects completed">
        <input type="text"  name="exp_years" id="exp_years" class="form-control required" placeholder="Number of years as Interior Designer">
        <div style="height:  20px"></div>
        </div>
        <div class="radioform">
        <div>What is the best way for us to stay in touch?</div>
        <li><input type="radio" name="intouch" value="contact_email"/> Email</li>
        <li><input type="radio" name="intouch" value="contact_msg"/> SMS/ WhatsApp</li>
        <li><input type="radio" name="intouch" value="contact_meetup"/> Meet Up</li>
        <div style="height:  20px"></div>
        </div>

        <div class="checkform">
        <div class="checkbox-button">
            <input type="checkbox" class="checkbox-button__input" id="discount" name="discount">
            <span class="checkbox-button__control"></span>
            <span class="checkbox-button__label">Please send me discounts and offers from suppliers!</span>
        </div>
        <div class="checkbox-button">
            <input type="checkbox" class="checkbox-button__input" id="profile_create" name="profile_create">
            <span class="checkbox-button__control"></span>
            <span class="checkbox-button__label">I agree to have my proffesional profile created for me</span>
        </div>
        <div class="checkbox-button">
            <input type="checkbox" class="checkbox-button__input" id="newsletter_sub" name="newsletter_sub">
            <span class="checkbox-button__control"></span>
            <span class="checkbox-button__label">I would like to subscribe to Durrow's newsletters!</span>
        </div>
        <div style="height:  20px"></div>
        <div class="g-recaptcha" data-callback="correctCaptcha" data-sitekey="{{ env('GOOGLE_RECAPTCHA_SITEKEY')}}" style="transform:scale(0.77);-webkit-transform:scale(0.77);transform-origin:0 0;-webkit-transform-origin:0 0;" ></div>
        </div>
        <div class="submit"> <button name="contactsubmit" id="contactsubmit" type="submit" value="Send message"  class="submit-button" action="{{ action('frontend\ContactusController@save') }}">Submit</button></div>
    </div>
    </form>
</div>

<script src='https://www.google.com/recaptcha/api.js'></script>
<script>
 var siteLat = '36.778259';
 var siteLong =  '-119.417931';
 
 var correctCaptcha = function(response) {
    if (response.length == 0) {}
    else {$('#hiddenRecaptcha').removeClass('required');
    $('span[for="hiddenRecaptcha"]').remove();
    }
 };
 
 if(window.innerWidth > 2500){
   var Height = window.innerHeight;
   Height = Height - 112;
   $('.contactRelativeDiv').css('min-height',Height+'px');
   $('.contactMainBg').css('background-position','center');
 }
 
</script>

<div class="fullwidthdiv" id="footer">
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet"/>
  <div class="FooterDivMain">
     <div class="homeContainer">
        <div class="footerInnerDiv">
           <div class="col-lg-7 p0">
              <div class="footerPageLinks wow fadeInDown">
                 <ul>
                    <li><a class="" href="/about-us">About Direct Id</a></li>
                    <li><a class="" href="/design-ideas" >Design Ideas</a></li>
                    <li><a class=""  href="/faq">FAQs</a></li>
                    <li><a class="current"  href="/contact-us">Contact us</a></li>
                    <li><a class=""  href="/terms-of-service" >Terms & conditions</a></li>
                    <li>
                       <div>
                          <label for="inputmail ">Subscribe to our mailing list</label>
                          <form method="POST" action="?=$this->url(array(),'subscribe')?" class="form-inline">
                             <div class="input-group">
                                <input type="email" class="form-control  wow fadeInUp"  id="email"  name="email" placeholder="email@mail.com"> 
                                <div class="input-group-btn">
                                   <!--{{csrf_field() }}-->
                                   <button type="submit" class="btn btn-default btn wow fadeInUp">Join</button>
                                </div>
                             </div>
                          </form>
                       </div>
                    </li>
                 </ul>
              </div>
           </div>
           <div class="col-lg-3 p0_mdresp">
              <div class="footerSocialLinks wow fadeInDown">
                 <ul>
                    <li><a class="FBlink" href="https://www.facebook.com/durrows" target="_blank" ><i class="fa fa-facebook"></i></a></li>
                    <li><a class="TWlink" href="https://www.instagram.com/durrows/" target="_blank" ><i class="fa fa-instagram"></i></a></li>
                    <li><a class="GPlink" href="https://plus.google.com/108386054371818339911" target="_blank" ><i class="fa fa-google-plus"></i></a></li>
                    <li><a class="INlink" href="https://www.linkedin.com/company/durrows/" target="_blank" ><i class="fa fa-linkedin"></i></a></li>
                 </ul>
              </div>
           </div>
           <div class="col-lg-2 p0">
              <div class="footerCopyright wow fadeInDown">
                 Durrows &copy; 2018                
              </div>
           </div>
        </div>
     </div>
  </div>
  <!--Start of Zendesk Chat Script-->
  <!--End of Zendesk Chat Script-->
</div>
     
     @endsection