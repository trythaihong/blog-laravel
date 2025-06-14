<!DOCTYPE html>
<html lang="en">
  <head>
   @include('home.css')
  
  </head>
  <body>
    <!-- header section start -->
    <div class="header_section">
        @include('home.header')
    
    </div>
    <div class="services_section_2">
        <div class="row" >
          @foreach ($post as $post)
              
          <div class="col-md-4" style="padding-bottom: 20px">
            <div align="center">
              <div><img style="height:250px" src="/postimage/{{$post->image}}" class="services_img" /></div>
              <h4>{{$post->title}}</h4>
              <p>Post by <b>{{$post->des}}</b></p>
              <div class="btn_main"><a href="{{url('post_detail',$post->id)}}">Readmore</a></div>
                        </div>
            </div>
          @endforeach
         
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
