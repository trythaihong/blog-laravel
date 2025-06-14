<!DOCTYPE html>
<html lang="en">
  <head>
   @include('home.css')
    <style>
        label{
            width: 200px;
            color:white
        }
        input{
            width: 200px;
            color: black
        }
    </style>
  </head>
  <body>
    <!-- header section start -->
    <div class="header_section">
        @if (session()->has('message'))
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-hideen="true">X</button>
            {{session()->get('message')}}
        </div>
            
        @endif
        @include('home.header')
      <!-- banner section start -->
    
     <div style="padding:20px" align="center">
        <h3 style="color: white;font-size:20px">Add Post</h3>
         <form action="{{url('user_post')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div style="padding: 20px">

                <label>Title</label>
                <input type="text" name="title" placeholder="input title">
            </div>
        <div style="padding: 20px">
            <label for="">des</label>
            <textarea name="des"></textarea>
        </div>
        <div style="padding: 20px">
            <label for="">Add image</label>
            <input type="file" name=" image" >
        </div>
        <div style="padding: 20px">
            <input class="btn btn-success" type="submit" value="add post" >
        </div>
    </form>
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
