@extends('layouts.frontend')
@section('pageTitle')
{{ env('APP_NAME')}} - Home
@endsection
@section('content')
<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap-theme.min.css">
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="https://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
<script type="text/javascript"> 
    //Call the method on pageload
    $(window).load(function(){
        //Disply the modal popup
        $('#myModal').modal('show');
    });
</script>
<style>
    .popsignup {background: transparent; width: 100px; height: 20px; position: absolute; bottom: 75px; right: 110px;}
</style>
<!--Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body" style="text-align: center;">
                <img src="{{ asset('images/Delaypost.png')}}" alt="" width="500px" height="500px">
                
                <a  href="/designerReg" ><div class="popsignup" ></div></a>                                       
            </div>
        </div>
    </div>
</div>

<div class="fullwidthdiv" id="content">        
<script>
  "use strict";
  !function() {
    var t = window.driftt = window.drift = window.driftt || [];
    if (!t.init) {
      if (t.invoked) return void (window.console && console.error && console.error("Drift snippet included twice."));
      t.invoked = !0, t.methods = [ "identify", "config", "track", "reset", "debug", "show", "ping", "page", "hide", "off", "on" ], 
        t.factory = function(e) {
        return function() {
          var n = Array.prototype.slice.call(arguments);
          return n.unshift(e), t.push(n), t;
        };
      }
        , t.methods.forEach(function(e) {
        t[e] = t.factory(e);
      }), t.load = function(t) {
        var e = 3e5, n = Math.ceil(new Date() / e) * e, o = document.createElement("script");
        o.type = "text/javascript", o.async = !0, o.crossorigin = "anonymous", o.src = "https://js.driftt.com/include/" + n + "/" + t + ".js";
        var i = document.getElementsByTagName("script")[0];
        i.parentNode.insertBefore(o, i);
      };
    }
  }
  ();
  drift.SNIPPET_VERSION = '0.3.1';
  drift.load('ndbnnw497nwy');
</script>
<!--Section One-->
<div class="HomeSeachMainDiv">
  @php
      $pic = App\Homepage::first()->hm_image;
      $heading = App\Homepage::first()->hm_heading;
      $subheading = App\Homepage::first()->hm_sub_heading;
  @endphp
  <style>
        * {
            box-sizing: border-box;
        }

        #myUL {
             position: absolute;
            list-style-type: none;
            padding: 0;
            margin-top:-12px;
            margin-left:15px;
            width: 150px;
            z-index: 1;
        }
        #myUL li a {
            border: 1px solid #ddd;
            margin-top: -1px; /* Prevent double borders */
            background-color: white;
            padding: 12px;
            text-decoration: none;
            font-size: 18px;
            color: black;
            display: block
        }
        #myUL li a:hover:not(.header) {
            background-color: #eee;
        }
        li{
            display: none;
        }
    </style>
  <div class="HomeSeachMainDivInner" style="background:url({{ asset("images/1535491764.jpg")}})">
    <div class="SerachFormDiv">
      <form method="post" action="/design-ideas/search">
        {{ csrf_field() }}
        <h1 class="wow fadeInDown" style="visibility: visible; animation-name: fadeInDown;">{{ $heading }}
        </h1>
        <div class="SerachFormDivInner wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
          <input type="text" name="s_l" id="myInput" onkeyup="myFunction()" placeholder="Search : Designers, Design Style and more!" autocomplete="off" value="">
          <button type="submit">
            <img src="{{ asset('images/searchIcon.png')}}" alt="">
          </button>
        </div>
         <ul id="myUL">
             @foreach($categories as $category)
              <li ><a onclick="select(this)">{{ $category->category_title }}</a></li>
             @endforeach
            
        </ul>
        <div style="font-size: 20px;color: white;">
            <p>Popular Tags:</p>
             
             @php
                 $i=0;
                 foreach($categories as $category){
                 $i=$i+1;
                 if($i<5){
                     
                    echo("<a href='/category/".$category->category_title."_".base64_encode($category->id)."' style='font-size: 20px;color: white;'>".$category->category_title."/</a>") ;
                    }
                   
                 }
            @endphp
        </div>
      
        <script>
            function myFunction() {
                var input, filter, ul, li, a, i;
                input = document.getElementById("myInput");
                filter = input.value.toUpperCase();
        
                ul = document.getElementById("myUL");
                li = ul.getElementsByTagName("li");
                for (i = 0; i < li.length; i++) {
                    a = li[i].getElementsByTagName("a")[0];
                    if(filter==''){
                        li[i].style.display = "none";
                    }
                    else{
                        if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
                            li[i].style.display = "block";
                        } else {
                            li[i].style.display = "none";
                        }
                    }
        
                }
            }
            function select(e){
                var content=e.innerHTML;
                var input = document.getElementById("myInput");
                ul = document.getElementById("myUL");
                li = ul.getElementsByTagName("li");
                input.value=content;
                for (i = 0; i < li.length; i++) {
                    li[i].style.display = "none";
                }
                input.focus();
        
            }
        
        
        
        </script>
        <h2 class="wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">{{ $subheading }}
        </h2>
      </form>
    </div>
  </div>
</div>
<!--Section One Ends-->
<!--Browse Section-->
<div class="browseMainSection">
  <div class="homeContainer">
    <h1 class="browseHeading wow fadeInDown" style="visibility: visible; animation-name: fadeInDown;">Browse
    </h1>
    <div class="homeCatMainDiv wow fadeInDown" style="visibility: visible; animation-name: fadeInDown;">
      @foreach($categories as $category)
      <a href="/category/{{ $category->category_title.'_'.base64_encode($category->id) }}" class="homeCatDiv">
        <div class="homeCatDivImg" style="background:url({{ asset("images/category-images/thumb/$category->category_image")}})">
          <div class="homeCatDivImgInner">
            <h1>{{ $category->category_title }}
            </h1>
          </div>
        </div>
      </a>
      @endforeach
    </div>
  </div>
</div>
<!--Browse Section-->
<!--Treding Now Section-->
<div class="TredingNowSection">
  <div class="homeContainer">
    <h1 class="browseHeading wow fadeInLeft" style="visibility: visible; animation-name: fadeInLeft;">Trending Now
    </h1>
    
    <div class="trendingContentMainDiv">
      @foreach($trendings as $trending)
      <div class="trendingContentDiv wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
        <div class="trendingContentImgDiv">
          @if($trending->p_user_id == 1)
          <img src="{{ asset("images/portfolio_images/A_CM_$trending->p_user_id/thumb/$trending->p_image_name")}}" alt="">
          @else
          <img src="{{ asset("images/portfolio_images/CM_$trending->p_user_id/thumb/$trending->p_image_name")}}" alt="">
          @endif
          <?php 
            $trend_url = base64_encode($trending->p_image_name.'_'.$trending->id);
          ?>
          <a href="/design/sub/{{ $trend_url }}" class="trendingContentImgHoverDiv">
          </a>
          <div class="trendingImgBtnDiv">   
              @guest
                @php
                $query = '?a_q='.base64_encode('home');
                @endphp

                <a href="/sign-in/fav/{{ $query }}" id="portSave_{{ $trending->p_portfolio_id }}" class="portSaveBtn">+&nbsp;&nbsp;Save</a>
                <a href="/sign-in/like/{{ $query }}" id="portLike_{{ $trending->p_portfolio_id }}" class="portLikeBtn"><i class="fa fa-heart" aria-hidden="true"></i>&nbsp;&nbsp;Like</a>
              @else
                @php
                $query = '?a_q='.base64_encode($trending->id.','.Auth::user()->id.',home');
                  $favorite = \App\Favourite::getfavourite(Auth::user()->id, $trending->p_portfolio_id);
                  $like = \App\Likedportfolios::getLike(Auth::user()->id, $trending->p_portfolio_id);
                @endphp

                @if(count($favorite) > 0)
                  <a id='portSave_{{ $trending->p_portfolio_id }}' class='portSaveBtn portActive' onclick="addToFav({{ $trending->p_portfolio_id }})">+&nbsp;&nbsp;Saved</a>;
                @else
                  <a id='portSave_{{ $trending->p_portfolio_id }}' class=''  onclick="addToFav({{ $trending->p_portfolio_id }})">+&nbsp;&nbsp;Save</a>;
                @endif
                <!-- href="/addToFav/<?=$query; ?> a href="/login/<?php echo base64_encode('addfav/'.$trending->id); ?>" id='portSave/{{ $trending->id }}' class='portSaveBtn'>+&nbsp;&nbsp;Save</a-->;

                @if(count($like) > 0)
                  <a id="portLike_{{ $trending->p_portfolio_id }}" class="portLikeBtn portActive" onclick="addToLike({{ $trending->p_portfolio_id }})">
                    <i class="fa fa-heart" aria-hidden="true">
                    </i>&nbsp;&nbsp;Liked
                  </a>
                @else
                  <a id="portLike_{{ $trending->p_portfolio_id }}" class="portLikeBtn " onclick="addToLike({{ $trending->p_portfolio_id }})">
                    <i class="fa fa-heart" aria-hidden="true">
                    </i>&nbsp;&nbsp;Like
                </a>
                @endif
              @endguest
          </div>
        </div>
        <div class="trendingContentDescDiv wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
          <a href="/design/sub/{{ $trend_url }}">{{ $trending->portfolio_title }}
          </a>
          <span>{{ $trending->portfolio_location }}
          </span>
          <p>.
          </p>
        </div>
      </div>
      @endforeach
    </div>
    
  </div>
</div>

<!--Subscribe newsletter Section-->
<div class="bodyContainer">
  <div class="newsLetterMainDiv" style="background-image: url({{ asset('images/subscribeBg.jpg') }});">
    <div class="col-md-5 p0 hiddenMd">
    </div>
    <div class="col-md-7 p0">
      <div class="skewOuterDiv">
        <div class="SubscribeFormDiv Overflow">
          <div class="SubscribeFormDivInner">
            <h1>Sign up now
            </h1>
              <a href="/register"><button type="submit" class="nlBtn">Create Account    
              </button></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--Subscribe Section ends-->
</div>

@endsection
