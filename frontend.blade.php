<!DOCTYPE html>

<html lang="en">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
      <meta name="keywords" content="Durrows Pte Ltd">
      <meta name="description" content="We Promote Interior Designers!">
      <meta name="google-site-verification" content="aGZ2AW5hD5F2lPx20WYWipjoun3VD8hJoQjjIXPH05I" />

      <meta name="csrf-token" content="{{ csrf_token() }}">
      <title>@yield('pageTitle')</title>
      <link href="{{ asset('css/bootstrap.min.css')}}" media="screen" rel="stylesheet" type="text/css">
      <link href="{{ asset('css/animate_wow.css')}}" media="screen" rel="stylesheet" type="text/css">
      <link href="{{ asset('css/style_custom.css')}}" media="screen" rel="stylesheet" type="text/css">
      <link href="{{ asset('css/animate.css')}}" media="screen" rel="stylesheet" type="text/css">
      <link href="{{ asset('css/owl.carousel.css')}}" media="screen" rel="stylesheet" type="text/css">
      <link href="{{ asset('css/animate_wow.css')}}" media="screen" rel="stylesheet" type="text/css">
      <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/fav.png')}}">
      <link rel="stylesheet" href="{{ asset('js/vendors/sweetalert/sweetalert.css')}}">
     
      @yield('css')
      <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!--[if lt IE 9]>
      <script src="/assets/js/html5shiv.js"></script>
      <script src="/assets/js/respond.min.js"></script>
      <![endif]-->
      <script type="text/javascript" async="" src="{{ asset('js/analytics.js')}}"></script>
      <script async="" src="{{ asset('js/fbevents.js')}}"></script>
      <script src="{{ asset('js/web.min.js')}}"></script>
      <script type="text/javascript" src="{{ asset('js/webmig.min-3.js')}}"></script>
      <script>
         var baseUrl = APPURL = SITE_URL = '';
         var moduleName = '';
         var controllerName  = 'static';
         var actionName = Actionname = 'index';
         var routeName = '';
         var SITENAME = 'Direct ID';
         var t_p ='';
      </script>
      <style type="text/css">.fb_hidden{
         position:absolute;
         top:-10000px;
         z-index:10001}
         .fb_reposition{
         overflow:hidden;
         position:relative}
         .fb_invisible{
         display:none}
         .fb_reset{
         background:none;
         border:0;
         border-spacing:0;
         color:#000;
         cursor:auto;
         direction:ltr;
         font-family:"lucida grande", tahoma, verdana, arial, sans-serif;
         font-size:11px;
         font-style:normal;
         font-variant:normal;
         font-weight:normal;
         letter-spacing:normal;
         line-height:1;
         margin:0;
         overflow:visible;
         padding:0;
         text-align:left;
         text-decoration:none;
         text-indent:0;
         text-shadow:none;
         text-transform:none;
         visibility:visible;
         white-space:normal;
         word-spacing:normal}
         .fb_reset>div{
         overflow:hidden}
         .fb_link img{
         border:none}
         @keyframes fb_transform{
         from{
         opacity:0;
         transform:scale(.95)}
         to{
         opacity:1;
         transform:scale(1)}
         }
         .fb_animate{
         animation:fb_transform .3s forwards}
         .fb_dialog{
         background:rgba(82, 82, 82, .7);
         position:absolute;
         top:-10000px;
         z-index:10001}
         .fb_reset .fb_dialog_legacy{
         overflow:visible}
         .fb_dialog_advanced{
         padding:10px;
         border-radius:8px}
         .fb_dialog_content{
         background:#fff;
         color:#333}
         .fb_dialog_close_icon{
         background:url(https://static.xx.fbcdn.net/rsrc.php/v3/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 0 transparent;
         cursor:pointer;
         display:block;
         height:15px;
         position:absolute;
         right:18px;
         top:17px;
         width:15px}
         .fb_dialog_mobile .fb_dialog_close_icon{
         top:5px;
         left:5px;
         right:auto}
         .fb_dialog_padding{
         background-color:transparent;
         position:absolute;
         width:1px;
         z-index:-1}
         .fb_dialog_close_icon:hover{
         background:url(https://static.xx.fbcdn.net/rsrc.php/v3/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 -15px transparent}
         .fb_dialog_close_icon:active{
         background:url(https://static.xx.fbcdn.net/rsrc.php/v3/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 -30px transparent}
         .fb_dialog_loader{
         background-color:#f5f6f7;
         border:1px solid #606060;
         font-size:24px;
         padding:20px}
         .fb_dialog_top_left,.fb_dialog_top_right,.fb_dialog_bottom_left,.fb_dialog_bottom_right{
         height:10px;
         width:10px;
         overflow:hidden;
         position:absolute}
         .fb_dialog_top_left{
         background:url(https://static.xx.fbcdn.net/rsrc.php/v3/ye/r/8YeTNIlTZjm.png) no-repeat 0 0;
         left:-10px;
         top:-10px}
         .fb_dialog_top_right{
         background:url(https://static.xx.fbcdn.net/rsrc.php/v3/ye/r/8YeTNIlTZjm.png) no-repeat 0 -10px;
         right:-10px;
         top:-10px}
         .fb_dialog_bottom_left{
         background:url(https://static.xx.fbcdn.net/rsrc.php/v3/ye/r/8YeTNIlTZjm.png) no-repeat 0 -20px;
         bottom:-10px;
         left:-10px}
         .fb_dialog_bottom_right{
         background:url(https://static.xx.fbcdn.net/rsrc.php/v3/ye/r/8YeTNIlTZjm.png) no-repeat 0 -30px;
         right:-10px;
         bottom:-10px}
         .fb_dialog_vert_left,.fb_dialog_vert_right,.fb_dialog_horiz_top,.fb_dialog_horiz_bottom{
         position:absolute;
         background:#525252;
         filter:alpha(opacity=70);
         opacity:.7}
         .fb_dialog_vert_left,.fb_dialog_vert_right{
         width:10px;
         height:100%}
         .fb_dialog_vert_left{
         margin-left:-10px}
         .fb_dialog_vert_right{
         right:0;
         margin-right:-10px}
         .fb_dialog_horiz_top,.fb_dialog_horiz_bottom{
         width:100%;
         height:10px}
         .fb_dialog_horiz_top{
         margin-top:-10px}
         .fb_dialog_horiz_bottom{
         bottom:0;
         margin-bottom:-10px}
         .fb_dialog_iframe{
         line-height:0}
         .fb_dialog_content .dialog_title{
         background:#6d84b4;
         border:1px solid #365899;
         color:#fff;
         font-size:14px;
         font-weight:bold;
         margin:0}
         .fb_dialog_content .dialog_title>span{
         background:url(https://static.xx.fbcdn.net/rsrc.php/v3/yd/r/Cou7n-nqK52.gif) no-repeat 5px 50%;
         float:left;
         padding:5px 0 7px 26px}
         body.fb_hidden{
         -webkit-transform:none;
         height:100%;
         margin:0;
         overflow:visible;
         position:absolute;
         top:-10000px;
         left:0;
         width:100%}
         .fb_dialog.fb_dialog_mobile.loading{
         background:url(https://static.xx.fbcdn.net/rsrc.php/v3/ya/r/3rhSv5V8j3o.gif) white no-repeat 50% 50%;
         min-height:100%;
         min-width:100%;
         overflow:hidden;
         position:absolute;
         top:0;
         z-index:10001}
         .fb_dialog.fb_dialog_mobile.loading.centered{
         width:auto;
         height:auto;
         min-height:initial;
         min-width:initial;
         background:none}
         .fb_dialog.fb_dialog_mobile.loading.centered #fb_dialog_loader_spinner{
         width:100%}
         .fb_dialog.fb_dialog_mobile.loading.centered .fb_dialog_content{
         background:none}
         .loading.centered #fb_dialog_loader_close{
         color:#fff;
         display:block;
         padding-top:20px;
         clear:both;
         font-size:18px}
         #fb-root #fb_dialog_ipad_overlay{
         background:rgba(0, 0, 0, .45);
         position:absolute;
         bottom:0;
         left:0;
         right:0;
         top:0;
         width:100%;
         min-height:100%;
         z-index:10000}
         #fb-root #fb_dialog_ipad_overlay.hidden{
         display:none}
         .fb_dialog.fb_dialog_mobile.loading iframe{
         visibility:hidden}
         .fb_dialog_mobile .fb_dialog_iframe{
         position:-webkit-sticky;
         top:0}
         .fb_dialog_content .dialog_header{
         -webkit-box-shadow:white 0 1px 1px -1px inset;
         background:-webkit-gradient(linear, 0% 0%, 0% 100%, from(#738ABA), to(#2C4987));
         border-bottom:1px solid;
         border-color:#1d4088;
         color:#fff;
         font:14px Helvetica, sans-serif;
         font-weight:bold;
         text-overflow:ellipsis;
         text-shadow:rgba(0, 30, 84, .296875) 0 -1px 0;
         vertical-align:middle;
         white-space:nowrap}
         .fb_dialog_content .dialog_header table{
         -webkit-font-smoothing:subpixel-antialiased;
         height:43px;
         width:100%}
         .fb_dialog_content .dialog_header td.header_left{
         font-size:12px;
         padding-left:5px;
         vertical-align:middle;
         width:60px}
         .fb_dialog_content .dialog_header td.header_right{
         font-size:12px;
         padding-right:5px;
         vertical-align:middle;
         width:60px}
         .fb_dialog_content .touchable_button{
         background:-webkit-gradient(linear, 0% 0%, 0% 100%, from(#4966A6), color-stop(.5, #355492), to(#2A4887));
         border:1px solid #29487d;
         -webkit-background-clip:padding-box;
         -webkit-border-radius:3px;
         -webkit-box-shadow:rgba(0, 0, 0, .117188) 0 1px 1px inset, rgba(255, 255, 255, .167969) 0 1px 0;
         display:inline-block;
         margin-top:3px;
         max-width:85px;
         line-height:18px;
         padding:4px 12px;
         position:relative}
         .fb_dialog_content .dialog_header .touchable_button input{
         border:none;
         background:none;
         color:#fff;
         font:12px Helvetica, sans-serif;
         font-weight:bold;
         margin:2px -12px;
         padding:2px 6px 3px 6px;
         text-shadow:rgba(0, 30, 84, .296875) 0 -1px 0}
         .fb_dialog_content .dialog_header .header_center{
         color:#fff;
         font-size:16px;
         font-weight:bold;
         line-height:18px;
         text-align:center;
         vertical-align:middle}
         .fb_dialog_content .dialog_content{
         background:url(https://static.xx.fbcdn.net/rsrc.php/v3/y9/r/jKEcVPZFk-2.gif) no-repeat 50% 50%;
         border:1px solid #555;
         border-bottom:0;
         border-top:0;
         height:150px}
         .fb_dialog_content .dialog_footer{
         background:#f5f6f7;
         border:1px solid #555;
         border-top-color:#ccc;
         height:40px}
         #fb_dialog_loader_close{
         float:left}
         .fb_dialog.fb_dialog_mobile .fb_dialog_close_button{
         text-shadow:rgba(0, 30, 84, .296875) 0 -1px 0}
         .fb_dialog.fb_dialog_mobile .fb_dialog_close_icon{
         visibility:hidden}
         #fb_dialog_loader_spinner{
         animation:rotateSpinner 1.2s linear infinite;
         background-color:transparent;
         background-image:url(https://static.xx.fbcdn.net/rsrc.php/v3/yD/r/t-wz8gw1xG1.png);
         background-repeat:no-repeat;
         background-position:50% 50%;
         height:24px;
         width:24px}
         @keyframes rotateSpinner{
         0%{
         transform:rotate(0deg)}
         100%{
         transform:rotate(360deg)}
         }
         .fb_iframe_widget{
         display:inline-block;
         position:relative}
         .fb_iframe_widget span{
         display:inline-block;
         position:relative;
         text-align:justify}
         .fb_iframe_widget iframe{
         position:absolute}
         .fb_iframe_widget_fluid_desktop,.fb_iframe_widget_fluid_desktop span,.fb_iframe_widget_fluid_desktop iframe{
         max-width:100%}
         .fb_iframe_widget_fluid_desktop iframe{
         min-width:220px;
         position:relative}
         .fb_iframe_widget_lift{
         z-index:1}
         .fb_hide_iframes iframe{
         position:relative;
         left:-10000px}
         .fb_iframe_widget_loader{
         position:relative;
         display:inline-block}
         .fb_iframe_widget_fluid{
         display:inline}
         .fb_iframe_widget_fluid span{
         width:100%}
         .fb_iframe_widget_loader iframe{
         min-height:32px;
         z-index:2;
         zoom:1}
         .fb_iframe_widget_loader .FB_Loader{
         background:url(https://static.xx.fbcdn.net/rsrc.php/v3/y9/r/jKEcVPZFk-2.gif) no-repeat;
         height:32px;
         width:32px;
         margin-left:-16px;
         position:absolute;
         left:50%;
         z-index:4}
         .fb_customer_chat_bounce_in_v2{
         animation-duration:300ms;
         animation-name:fb_bounce_in_v2;
         transition-timing-function:ease-in}
         .fb_customer_chat_bounce_out_v2{
         animation-duration:300ms;
         animation-name:fb_bounce_out_v2;
         transition-timing-function:ease-in}
         .fb_customer_chat_bounce_in_v2_mobile_chat_started{
         animation-duration:300ms;
         animation-name:fb_bounce_in_v2_mobile_chat_started;
         transition-timing-function:ease-in}
         .fb_customer_chat_bounce_out_v2_mobile_chat_started{
         animation-duration:300ms;
         animation-name:fb_bounce_out_v2_mobile_chat_started;
         transition-timing-function:ease-in}
         .fb_customer_chat_bubble_pop_in{
         animation-duration:250ms;
         animation-name:fb_customer_chat_bubble_bounce_in_animation}
         .fb_customer_chat_bubble_animated_no_badge{
         box-shadow:0 3px 12px rgba(0, 0, 0, .15);
         transition:box-shadow 150ms linear}
         .fb_customer_chat_bubble_animated_no_badge:hover{
         box-shadow:0 5px 24px rgba(0, 0, 0, .3)}
         .fb_customer_chat_bubble_animated_with_badge{
         box-shadow:-5px 4px 14px rgba(0, 0, 0, .15);
         transition:box-shadow 150ms linear}
         .fb_customer_chat_bubble_animated_with_badge:hover{
         box-shadow:-5px 8px 24px rgba(0, 0, 0, .2)}
         .fb_invisible_flow{
         display:inherit;
         height:0;
         overflow-x:hidden;
         width:0}
         .fb_mobile_overlay_active{
         background-color:#fff;
         height:100%;
         overflow:hidden;
         position:fixed;
         visibility:hidden;
         width:100%}
         @keyframes fb_bounce_in_v2{
         0%{
         opacity:0;
         transform:scale(0, 0);
         transform-origin:bottom right}
         50%{
         transform:scale(1.03, 1.03);
         transform-origin:bottom right}
         100%{
         opacity:1;
         transform:scale(1, 1);
         transform-origin:bottom right}
         }
         @keyframes fb_bounce_in_v2_mobile_chat_started{
         0%{
         opacity:0;
         top:20px}
         100%{
         opacity:1;
         top:0}
         }
         @keyframes fb_bounce_out_v2{
         0%{
         opacity:1;
         transform:scale(1, 1);
         transform-origin:bottom right}
         100%{
         opacity:0;
         transform:scale(0, 0);
         transform-origin:bottom right}
         }
         @keyframes fb_bounce_out_v2_mobile_chat_started{
         0%{
         opacity:1;
         top:0}
         100%{
         opacity:0;
         top:20px}
         }
         @keyframes fb_customer_chat_bubble_bounce_in_animation{
         0%{
         bottom:6pt;
         opacity:0;
         transform:scale(0, 0);
         transform-origin:center}
         70%{
         bottom:18pt;
         opacity:1;
         transform:scale(1.2, 1.2)}
         100%{
         transform:scale(1, 1)}
         }
         
      </style>
   </head>
   <body>
      <style type="text/css">
         .preloader{
         padding-top: 100px;
         position: fixed;
         width: 100%;
         height: 100%;
         min-height: 610px;
         z-index: 99990!important;
         top: 0;
         opacity: 1;
         color: #FFF!important;
         transition:none;
         background:#fff !important;
         left:0px;
         text-align:center;
         }
         .preloader label{
         display: block;
         text-align: center;
         font-size: 37px;
         color: #fff;
         font-weight: 500;
         letter-spacing: 2px;
         margin-bottom:25px;
         }
         .preloader label span{
         color: #e84c3d;
         }
         .preloader label img{
         max-width:200px;
         }
         #wrap .Loader span {
         text-transform: uppercase;
         font-weight: 700;
         color: #ffffff;
         position:relative;
         line-height: 34px;
         display: inline-block;
         }
         #wrap .Loader span img{
         max-width:150px;
         }
         #wrap .loaderAbDiv{
         content: attr(data-text);
         position: absolute;
         overflow: hidden;
         max-width: 150px;
         white-space: nowrap;
         margin:0 auto;
         left: -1px;
         animation-name: loading;
         animation-duration: 3s;
         animation-timing-function: linear;
         animation-delay: 0s;
         animation-iteration-count: infinite;
         -webkit-animation-name:loading;
         -webkit-animation-duration: 3s;
         -webkit-animation-timing-function:linear;
         -webkit-animation-delay: 0;
         -webkit-animation-iteration-count: infinite;
         -moz-animation-name: loading;
         -moz-animation-duration: 3s;
         -moz-animation-timing-function:linear;
         -moz-animation-delay: 0;
         -moz-animation-iteration-count: infinite;
         -o-animation-name: loading;
         -o-animation-duration: 3s;
         -o-animation-timing-function: linear;
         -o-animation-delay: 0;
         -o-animation-iteration-count: infinite;
         }
         @keyframes loading {
         0% {
         max-width: 0;
         }
         }
         @-webkit-keyframes loading {
         0% {
         max-width: 0;
         }
         }
         @-moz-keyframes loading {
         0% {
         max-width: 0;
         }
         }
         #wrap .loaderAbDiv{
         position: absolute;
         white-space: nowrap;
         left: 0px;
         animation-delay: 0s;
         animation-name: loading;
         animation-duration: 3s;
         animation-timing-function: linear;
         animation-iteration-count: infinite;
         overflow: hidden;
         margin: 0px auto;
         top: 0px;
         }
      </style>
      <style>
        /* STYLES SPECIFIC TO FOOTER  */
        .footer {
          width: 100%;
          position: relative;
          height: auto;
          background-color: #000;
        }
        .footer .footer_col {
          color: #dbdbdb;
          font-size: 12px;
          font-family: inherit;
          width: 200px;
          height: auto;
          float: left;
          box-sizing: border-box;
          -webkit-box-sizing: border-box;
          -moz-box-sizing: border-box;
          padding: 20px 20px 20px 20px;
        }
        .footer .footer_col ul {
          list-style-type: none;
          margin: 0;
          padding: 0;
        }
        .footer .footer_col ul li {
          padding: 5px 0px 5px 0px;
          cursor: pointer;
          transition: .2s;
          -webkit-transition: .2s;
          -moz-transition: .2s;
        }
        .footer .footer_col ul li a {
            color: #dbdbdb;
        }
        .footer .footer_col ul li a:hover,
        .footer .footer_col ul li a:active {
            color: #fff;
        }
        .mailing {
          margin-left: 100px;
        }
        .mailing .mailing_sub {
          margin-top: 10px;
          padding: 5px 10px;
        }
        .footer .footer_col ul li:hover {
          color: #ffffff;
          transition: .1s;
          -webkit-transition: .1s;
          -moz-transition: .1s;
        }
        .clearfix {
          clear: both;
        }
        .copyright {
          padding: 20px 20px;
          color: #bbb;
        }
        @media only screen and (min-width: 1280px) {
          .footer_contain {
            width: 1200px;
          }
          .mailing_sub {
            width: 480px;
          }
        }
        @media only screen and (max-width: 1139px) {
          .footer_contain .mailing {
            width: 1000px;
            display: block;
          }
          .mailing {
            margin-left: 0px;
          }
          .mailing_sub {
            width: 400px;
          }
        }
        @media only screen and (max-width: 950px) {
          .footer .footer_col {
            width: 33%;
          }
          .footer .footer_col ul li {
            font-size: 13px;
          }
          .mailing_sub {
            width: 460px;
          }
        }
        @media only screen and (max-width: 500px) {
            .footer .footer_col {
              width: 50%;
            }
            .footer .footer_col ul li {
              font-size: 13px;
            }
        }
        @media only screen and (max-width: 340px) {
          .footer .footer_col {
            width: 100%;
          }
        }
          
      </style>
      <div class="preloader" style="display: none;">
         <label>
         <img src="{{ asset('images/headerLogo.png')}}" alt="">
         </label>
         <div id="wrap" class="text-center">
            <div class="Loader">
               <span>
                  <img src="{{ asset('images/loading1.png')}}" alt="">
                  <p class="loaderAbDiv">
                     <img src="{{ asset('images/loading2.png')}}" alt="">
                  </p>
               </span>
            </div>
         </div>
      </div>
      <div id="wrapper">
         <div class="fullwidthdiv" id="header">
            <header>
               <!-- Facebook Pixel Code -->
               <script>
                  !function(f,b,e,v,n,t,s)
                  {
                    if(f.fbq)return;
                    n=f.fbq=function(){
                      n.callMethod?
                        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
                    if(!f._fbq)f._fbq=n;
                    n.push=n;
                    n.loaded=!0;
                    n.version='2.0';
                    n.queue=[];
                    t=b.createElement(e);
                    t.async=!0;
                    t.src=v;
                    s=b.getElementsByTagName(e)[0];
                    s.parentNode.insertBefore(t,s)}
               </script>
               <!-- End Facebook Pixel Code -->
               <div class="HeaderMainDiv">
                  <div class="HeaderMainDivInner bodyContainer">
                     <div class="headerLeft wow fadeInDown" style="visibility: visible; animation-name: fadeInDown;">
                        <a href="/home">
                        <img src="{{ asset('images/Durrows.png')}}" alt="">
                        </a>
                     </div>
                     <div class="headerRight">
                        <button type="button" onclick="openNavBar()" class="visibleMd navButton">
                        <span class="sr-only">Toggle navigation
                        </span>
                        <span class="icon-bar">
                        </span>
                        <span class="icon-bar">
                        </span>
                        <span class="icon-bar">
                        </span>
                        </button>
                        <div class="p0 hiddenMd naveBarCollapse">
                           <ul class="nav navbar-nav wow fadeInDown" style="visibility: visible; animation-name: fadeInDown;">
                              <li>
                                 <a class="{{ Request::is('about*') ? 'current' : ''  }}" href="/about" >About
                                 </a>
                              </li>
                            
                              <li>
                                 <a class="{{ Request::is('contactus*') ? 'current' : ''  }}" href="/contactus">Contact Us
                                 </a>
                              </li>
                              <li>
                                 <a class="{{ Request::is('blog*') ? 'current' : ''  }}" href="/blog">News
                                 </a>
                              </li>
                              <li>
                                 
                                 <li class="hSignUp loggdUser">
                                  
                                    @guest
                                      <a class="nav-link" href="{{ route('login') }}">sign in</a>
                                    @else
                                    <a href="/profile">
                                      @if($image = Auth::user()->client_picture)
                                        <img src="{{ asset("/images/profile_images/$image") }}" class="thumb-lg img-circle" alt="img">
                                      @else
                                        <img src="{{ asset('/images/profile_images/default.png') }}" class="thumb-lg img-circle" alt="img">
                                      @endif
                                      <span>{{ Auth::user()->name }} </span>
                                      </a>
                                    @endguest
                                  </a>
                                </li>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
               <meta name="p:domain_verify" content="c3512e3871a732f22780d9db0e91d820">
               <script>
                  function openNavBar(){
                    $('.naveBarCollapse').slideToggle('slow');
                  }
               </script>
               <!-- Global site tag (gtag.js) - Google Analytics -->
               <script async="" src="{{ asset('js/js')}}"></script>
               <script>
                  window.dataLayer = window.dataLayer || [];
                  function gtag(){
                    dataLayer.push(arguments);
                  }
                  gtag('js', new Date());
                  gtag('config', 'UA-122840215-1');
               </script>    
            </header>
         </div>
         @yield('content')
        <!-- FOOTER START -->
        <div class="footer">
            <div class="footer_contain">
                <div class="footer_col">
                    <ul>
                    <li><a class="" href="/about" >About</a></li>
                    <li>News</li>
                    <li>Projects</li>
                    </ul>
                </div>
                <div class="footer_col">
                    <ul>
                    <li>Directory</li>
                    <li>Support</li>
                    <li><a class="" href="/faq">FAQ</a></li>
        
                    </ul>
                </div>
                <div class="footer_col">
                    <ul>
                    <li><a class="" href="/sitemap.xml" >XML Sitemap</a></li>
                    <li><a class="" href="/sitemap.html" >HTML Sitemap</a></li>
                    <li><a class="" href="/terms_of_use">Legal</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer_col mailing">
                <div>Sign up for our newsletter</div>
                <input type="text" class="mailing_sub" placeholder="Email Address">
            </div>
            <div class="clearfix"></div>
            <div class="copyright">
                copyright 2018 Durrows Pte Ltd
            </div>
            </div>
        </div>
        <!-- END OF FOOTER -->
            <!--Start of Zendesk Chat Script-->
            <!--End of Zendesk Chat Script-->
         </div>
      </div>
      <input type="hidden" id="Hguy5FSr" value="2275678072657979">

      <script type="text/javascript" defer="defer" src="{{ asset('js/jquery-ui.min.js')}}"></script>
      <script type="text/javascript" defer="defer" src="{{ asset('js/mousetrap.min.js')}}"></script>
      <script type="text/javascript" defer="defer" src="{{ asset('js/vanilla.idle.js')}}"></script>
      <script type="text/javascript" defer="defer" src="{{ asset('js/bootstrap.min.js')}}"></script>
      <script type="text/javascript" defer="defer" src="{{ asset('js/jquery.validate.min.js')}}"></script>
      <script type="text/javascript" defer="defer" src="{{ asset('js/additional-methods.min.js')}}"></script>
      <script type="text/javascript" defer="defer" src="{{ asset('js/vendors/sweetalert/sweetalert.min.js')}}"></script>
      <script type="text/javascript" defer="defer" src="{{ asset('js/initial.min.js')}}"></script>
      <script type="text/javascript" defer="defer" src="{{ asset('js/mask.js')}}"></script>
      <script type="text/javascript" defer="defer" src="{{ asset('js/bootstrap-notify.js')}}"></script>
      <script type="text/javascript" defer="defer" src="{{ asset('js/wow.js')}}"></script>
      <script type="text/javascript" defer="defer" src="{{ asset('js/app-util.js')}}"></script>
      <script type="text/javascript" defer="defer" src="{{ asset('js/custom.js')}}"></script> 
      <script type="text/javascript" defer="defer" src="{{ asset('js/owl.carousel.min.js')}}"></script> 
      <script type="text/javascript" defer="defer" src="{{ asset('js/jquery.zoom.js')}}"></script>  
      <!-- Global site tag (gtag.js) - Google Analytics -->
      <script async src="https://www.googletagmanager.com/gtag/js?id=UA-126101655-1"></script>
       <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
    
        gtag('config', 'UA-126101655-1');
      </script>

      @yield('js')
      <div class="modal fade" id="module_model" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
         <div class="modal-dialog">
            <div class="modal-content uhs-modal">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×
                  </span>
                  </button>
                  <h3 class="text-left uhs-modal-heading margin-0">
                  </h3>
               </div>
               <div class="modal-body">
               </div>
            </div>
         </div>
      </div>
      <div id="fb-root" class=" fb_reset">
         <div style="position: absolute; top: -10000px; height: 0px; width: 0px;">
            <div>
               <iframe name="fb_xdm_frame_https" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" id="fb_xdm_frame_https" aria-hidden="true" title="Facebook Cross Domain Communication Frame" tabindex="-1" src="./out/QX17B8fU-Vm.html" style="border: none;">
               </iframe>
            </div>
         </div>
         <div style="position: absolute; top: -10000px; height: 0px; width: 0px;">
            <div>
            </div>
         </div>
      </div>
   </body>
</html>