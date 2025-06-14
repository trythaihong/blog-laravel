<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
   @include('home.css')
  </head>
  <body>
    <!-- header section start -->
    <div class="header_section">
        @include('home.header')
      <!-- banner section start -->
     
      <!-- banner section end -->
    </div>
    <div class="col-md-12" style="">
        <div  style="display: block"  align="center">
         
        <div style="width:50%"><img style="padding:20px"  src="/postimage/{{$post->image}}" class="services_img" /></div>
       
          <div style="width: 50%">
              <div>
                  <h3><b>{{$post->title}}</b></h3>
                  <h4>{{$post->des}}</h4>
                  <p>Post by <b>{{$post->name}}</b></p>
              </div>
              <div class="btn_main"><a href="{{url('post_detail',$post->id)}}">Readmore</a></div>
          </div>
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
