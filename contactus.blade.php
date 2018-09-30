@extends('layouts.frontend')
@section('pageTitle')
{{ env('APP_NAME')}} - Contact Us
@endsection
@section('content')

<div class="fullwidthdiv" id="content">
  <div class="contactRelativeDiv">
     <div class="contactMainBg">
     </div>
     <div class="ContactDetailForm">
        <div class="container">
           <div class="contactFormInnerDiv">
              <p>&nbsp;</p>
              <div class="col-lg-7 col-md-7 col-sm-8 p0">
                 <div class="contactinfoDiv">
                    <div class="contactinfoDivInner">
                       <h2>Give Us A Shout</h2>
                       <p>We are here to provide more information or answer any questions you may have and uncover the best interior designers. </p>
                    </div>
                    <div class="col-sm-12 p0 Overflow">
                       <div class="wow fadeIn col-md-4 col-sm-6  PL0 p0_resp contactInfoDetail">
                          <label>Email Address</label>
                          <span>bunny@durrows.com</span>
                       </div>
                       <div class="wow fadeIn col-md-4 col-sm-6 PR0 p0_resp contactInfoDetail">
                          <label>Social Media</label>
                          <ul class="socialUl">
                             <li><a href="https://www.facebook.com/durrows" target="_blank" ><img src="{{ asset('images/fbIcon.png')}}" alt="" /></a></li>
                             <li><a href="https://www.instagram.com/durrows/" target="_blank" ><img src="{{ asset('images/instaIcon.png')}}" alt="" /></a></li>
                             <li><a href="https://www.linkedin.com/company/durrows/" target="_blank"><img src="{{ asset('images/linkdedIcon.png')}}" alt="" /></a></li>
                          </ul>
                       </div>
                    </div>
                 </div>
                 <div class="p0_mdresp contactFormDiv Overflow clear">
                    <h1 class="wow fadeInDown" >Send Message</h1>
                    <form id="validate" enctype="application/x-www-form-urlencoded" role="form" class="profile_form" novalidate="novalidate" method="post">
                      @csrf
                       <div class="col-sm-12 p0">
                          <div class="col-sm-6 col-md-4 p0 p0_resp">
                             <div class=" form-group ">
                                <input type="text" name="guest_name" id="guest_name" value="" class="form-control required" placeholder="Name" autocomplete="off">
                             </div>
                          </div>
                          <div class="col-sm-6 col-md-8 PR0 p0_resp">
                             <div class=" form-group ">
                                <input type="text" name="guest_email" id="guest_email" value="" class="form-control required email" autocomplete="off" placeholder="Email">
                             </div>
                          </div>
                       </div>
                       <div class="col-sm-12 p0">
                          <div class="col-sm-6 col-md-4 p0 p0_resp">
                             <div class=" form-group ">
                                <input type="text" name="guest_phone" id="guest_phone" value="" class="form-control  middle-element required" autocomplete="off" onkeypress="return ValidateNumber(event)" placeholder="Mobile">
                             </div>
                          </div>
                          <div class="col-sm-6 col-md-8 PR0 p0_resp">
                             <div class=" form-group ">
                                <input type="text" name="guest_subject" id="guest_subject" value="" class="form-control required" autocomplete="off" placeholder="Subject">
                             </div>
                          </div>
                       </div>
                       <div class="col-sm-12 p0">
                          <div class=" form-group ">
                             <textarea name="guest_message" id="guest_message" class="form-control bottom-element required" rows="10" placeholder="Message" cols="80"></textarea>
                          </div>
                          <div class="g-recaptcha" data-callback="correctCaptcha" data-sitekey="{{ env('GOOGLE_RECAPTCHA_SITEKEY')}}" style="transform:scale(0.77);-webkit-transform:scale(0.77);transform-origin:0 0;-webkit-transform-origin:0 0;" ></div>
                          <input type="hidden" class="hiddenRecaptcha required" name="hiddenRecaptcha" id="hiddenRecaptcha">
                          <button name="contactsubmit" id="contactsubmit" type="submit" value="Send message" class="btn contactBtn btn wow fadeInUp">Submit</button>
                       </div>
                    </form>
                    <p class="hidden-xs">&nbsp;</p>
                 </div>
              </div>
           </div>
        </div>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
     </div>
     <div class="contactText hidden-xs">
        Contact Us
     </div>
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
</div>
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