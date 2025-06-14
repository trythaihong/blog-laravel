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
      
      <!-- banner section end -->
    </div>
    <div class="about_section layout_padding">
        <div class="container-fluid">
          @foreach ($about as $about)
              
          <div class="row">
            <div class="col-md-6">
                 <div class="about_taital_main">
                    <h1 class="about_taital">{{$about->name}}</h1>
                    <p class="about_text">{{$about->des}}</p>
                    <div class="readmore_bt"><a href="#">Read More</a></div>
                  </div>
              </div>
              <div class="col-md-6 padding_right_0">
                <div><img src="aboutimage/{{$about->image}}" class="about_img"></div>
              </div>
            </div>
            @endforeach
        </div>
     </div>
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
