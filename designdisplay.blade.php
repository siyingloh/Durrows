@extends('layouts.frontend')
@section('pageTitle')
{{ env('APP_NAME')}} - Design Test
@endsection
@section('content')
<div class="fullwidthdiv" id="content">
   <div class="searchHeadingDiv">
      <div class="designIdeaHeadings">
         <h1>Design Ideas</h1>
         <button type="button" onclick="toggleFilter()" class="filterBtn">
         Filters
         </button>
      </div>
      <div class="searchMainDiv">
         <div class="searchMainDivForm">
            <div class="container">
               <form method="post" action="/design-ideas/search">
                {{ csrf_field() }}
                  <div id="sKeyword">	
                     <input type="text" value="" placeholder="eg. Bathrooms, industrial, designer name" name="s_l" class="form-control">
                  </div>
                  <div id="sCat">
                     <select name="s_c" class="form-control" onchange="getScategories(this.value)">
                        <option value="">Select Category</option>
                        @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->category_title }}</option>
                        @endforeach
                        <option value="0">Others</option>
                     </select>
                  </div>

                  <div class="srchBtnDiv">
                     <button class="srchBtn" type="submit">
                     <img draggable="false" src="{{ asset('images/search.png') }}" alt=""></button>
                     <button class="srchBtn yellowBtn" type="reset" onclick="window.location.href='/design-ideas'"><img draggable="false" src="{{ asset('images/reset.png') }}" alt=""></button>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
   <div class="portFoliosMainDiv">
      <div class="container">
         <p>&nbsp;</p>
         <div class="portFoliosInnerDiv">
           @foreach($results as $result)
            <div class="trendingContentDiv wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
               <div class="trendingContentImgDiv">
                  <?php 
                    $url = base64_encode($result->p_image_name.'_'.$result->id);
                  ?>
                    @php $pimage = $result->p_image_name; @endphp
                    @if ($result->p_user_id == 1)
                    <img draggable="false" src="{{ asset("images/portfolio_images/A_CM_$result->p_user_id/1080/$pimage") }}" alt="">
                    {{-- <img class="img-responsive" src="{{ asset("images/portfolio_images/A_CM_$mainimg->p_user_id/$pimage") }}"> --}}
                    @else    
                    <img draggable="false" src="{{ asset("images/portfolio_images/CM_$result->p_user_id/1080/$pimage") }}" alt="">
                    {{-- <img class="img-responsive" src="{{ asset("images/portfolio_images/CM_$mainimg->p_user_id/$pimage") }}"> --}}
                    @endif
                  {{-- <img draggable="false" src="{{ asset("/images/portfolio_images/CM_$result->p_user_id/1080/$result->p_image_name") }}" alt=""> --}}
                  <a href="/design/sub/{{ $url }}" class="trendingContentImgHoverDiv">
                  </a>
                  <div class="trendingImgBtnDiv ">
                       
                    @guest
                        @php
                        $query = '?a_q='.base64_encode('design-ideas/search');
                        @endphp

                      <a href="/sign-in/fav/{{ $query }}" id="portSave_{{ $result->id }}" class="portfave">+&nbsp;&nbsp;</a>
                      @else
                        @php
                          $favorite = \App\Favourite::getfavourite(Auth::user()->id, $result->id);
                        @endphp
                        @if(count($favorite) > 0)
                          <a id='portSave_{{ $result->p_portfolio_id }}' class='portfave portActive' onclick="addToFav({{ $result->p_portfolio_id }})">+&nbsp;&nbsp;</a>
                        @else
                          <a id='portSave_{{ $result->p_portfolio_id }}' class=''  onclick="addToFav({{ $result->p_portfolio_id }})">+&nbsp;&nbsp;</a>
                        @endif
                    @endguest
                    <div class="trendingContentDescDiv wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
                      <a href="https://www.pinterest.com/pin/create/button/"  data-pin-round =true data-pin-do="buttonBookmark"></a>
                      <a href="/profile/{{ $result->portfolio_user_id  }}">{{ $result->portfolio_user_id }}</a>
                      <a href="/design/sub/{{ $url }}">{{ $result->portfolio_title }}</a>
                      <div style="margin-top:50px;"></div>
                      <a href="/design/sub/{{ $url }}">{{  $result->portfolio_category }}</a>
                  </div>     
                  </div>
         


               </div>
            </div>
            @endforeach
         </div>
      </div>
      <div class="SearchPaginationDiv clear col-sm-12">
         <style type="text/css">
            .PaginationControl ul{list-style:none; padding:0px;overflow:hidden; margin-bottom:0px;}
            .PaginationControl ul li{display:inline-block;font-size: 12px;margin-right: 5px; margin-left:5px;background-color:#b9b9b9;}
            .PaginationControl .pagination>.active>span,.PaginationControl .pagination>.active>span:hover{background-color:#ff9d3d;color:#ffffff;padding: 5px 10px;display: block;min-width: 34px;text-align:center;}
            .PaginationControl .pagination>li>a{color:#ffffff; background-color:#cccccc;}
         </style>
         <div class="row m0">
            <div class="pagingMainDiv PaginationControl">
               <div class="">
                 
               </div>
               <div class="clearfix"></div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection

@section('js')
<script
type="text/javascript"
async defer
src="//assets.pinterest.com/js/pinit.js"
></script>
@endsection