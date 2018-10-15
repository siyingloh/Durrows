@extends('layouts.profile')
@section('content')
<script type="text/javascript" defer="defer" src="./js/initial.min.js"></script>
<div class="col-lg-3 col-md-4 col-sm-5 p0 leftDivProfile">
   &nbsp;
</div>
<div class="col-lg-9 col-md-8 col-sm-7 rightDivProfile">
   <div class="profilePageMainContent myFavouritesSection">
      <h1 class="profilePageHeading">My Favourites</h1>
      <div class="white-box profileFormCustom Overflow">
          @foreach ($favourites as $favorite)
              
          


         <div class="trendingContentDiv wow fadeIn" id="trendingContentDiv_{{ $favorite->getPortfolio()->id }}" style="visibility: visible; animation-name: fadeIn;">
            <div class="trendingContentImgDiv">
                @php
                    $image = $favorite->getPortfolio()->firstImage();
                    
                @endphp
                @if ($favorite->getPortfolio()->portfolio_user_id == 1)
                <img src="http://direct-id.sg/portfolio-images/A_CM_{{ $favorite->getPortfolio()->portfolio_user_id }}/thumb/{{ $image }}" alt="">
                @else
                <img src="http://direct-id.sg/portfolio-images/CM_{{ $favorite->getPortfolio()->portfolio_user_id }}/thumb/{{ $image }}" alt="">
                @endif
               
               <a href="/design/Nordic_Forest_by_Wesley_Liu-MTAy" class="trendingContentImgHoverDiv">
               </a>
               <div class="trendingImgBtnDiv">
                  <a id="portSave_{{ $favorite->getPortfolio()->id }}" class="portSaveBtn removePort" onclick="removeFav({{ $favorite->getPortfolio()->id }})"><i class="fa fa-times" aria-hidden="true"></i>&nbsp;&nbsp;Remove</a>
               </div>
            </div>
            <div class="trendingContentDescDiv wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
               <a href="/design/Nordic_Forest_by_Wesley_Liu-MTAy">{{ $favorite->getPortfolio()->portfolio_title }}</a>
            </div>
         </div>
         @endforeach
         @foreach ($likes as $like)
              
          
         <div class="trendingContentDiv wow fadeIn" id="trendingLikeContentDiv_{{ $like->getPortfolio()->id }}" style="visibility: visible; animation-name: fadeIn;">
            <div class="trendingContentImgDiv">
                @php
                    $image = $like->getPortfolio()->firstImage();
                    
                @endphp
                @if ($like->getPortfolio()->portfolio_user_id == 1)
                <img src="http://direct-id.sg/portfolio-images/A_CM_{{ $like->getPortfolio()->portfolio_user_id }}/thumb/{{ $image }}" alt="">
                @else
                <img src="http://direct-id.sg/portfolio-images/CM_{{ $like->getPortfolio()->portfolio_user_id }}/thumb/{{ $image }}" alt="">
                @endif
               
               <a href="/design/Nordic_Forest_by_Wesley_Liu-MTAy" class="trendingContentImgHoverDiv">
               </a>
               <div class="trendingImgBtnDiv">
                  <a id="portSave_{{ $like->getPortfolio()->id }}" class="portSaveBtn removePort" onclick="removeLike({{ $like->getPortfolio()->id }})"><i class="fa fa-times" aria-hidden="true"></i>&nbsp;&nbsp;Remove</a>
                <a href="/design/Nordic_Forest_by_Wesley_Liu-MTAy">{{ $like->getPortfolio()->portfolio_title }}</a>
               </div>
            </div>
            <div class="trendingContentDescDiv wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
               <a href="/design/Nordic_Forest_by_Wesley_Liu-MTAy">{{ $like->getPortfolio()->portfolio_title }}</a>
            </div>
         </div>
         @endforeach
         <p>&nbsp;</p>
      </div>
   </div>
</div>
</div>
</div>
</div>
<script src="./js/js(1)"></script>
<script src="./js/jquery.geocomplete.js"></script>
<script>
$(function () {  
 $("#client_address")
     .geocomplete()
     .bind("geocode:result", function (event, result) {  
         $("#client_lat").val(result.geometry.location.lat());
         $("#client_long").val(result.geometry.location.lng());
 });
});
</script>
</div>
@endsection