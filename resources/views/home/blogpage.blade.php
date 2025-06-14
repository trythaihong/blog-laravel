<!DOCTYPE html>
<html lang="en">
  <head>
    
   @include('home.css')
  
  </head>
  <body>
    <!-- header section start -->
    <div class="header_section">
        @include('home.header')
      <!-- banner section start -->
       
    </div>
    <!-- blog section start -->
    {{-- <div class="blog_section layout_padding margin_top_90">
        <div class="container">
           <h1 class="blog_taital">See Our  Video</h1>
           <p class="blog_text">many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which</p>
           <div class="play_icon_main">
              <div class="play_icon"><a href="#"><img src="images/play-icon.png"></a></div>
           </div>
        </div>
     </div> --}}
     <!-- blog section end -->
    <!-- footer section start -->
   @include('home.footer')
    <!-- footer section end -->
    <!-- copyright section start -->
    <div class="copyright_section">
      <div class="container">
        <p class="copyright_text">
          2020 All Rights Reserved. Design by
          <a href="https://html.design">Free html Templates</a>
        </p>
      </div>
    </div>
   @include('home.script')
  </body>
</html>
