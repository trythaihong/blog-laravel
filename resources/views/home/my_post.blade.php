<!DOCTYPE html>
<html lang="en">
  <head>
   @include('home.css')
    <style>
        .conta{
            padding: 30px;
            text-align: center;
            background-color: rgb(69, 69, 69)
        }
        .h4{
            font-size: 30px;
            font-weight: bold;
            padding: 15px;
            color: white
        }
        .p{
            font-size: 15px;
            color: white
        }
        .img{
            height:200px;
            width: 300px;
            padding: 20px;
            margin: auto
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
     
      <!-- banner section end -->
    </div>
    @foreach ($data as $data)
          
    <div class="conta">
        <img class="img" src= "/postimage/{{$data->image}}" alt="">
        <h4 class="h4">{{$data->title}}</h4>
        <p class="p"> {{$data->des}}</p>
        <a onclick="return confirm('Are you sure to delete this')" href="{{url('delete_post_user',$data->id)}}" class="btn btn-danger">delete</a>
        <a  href="{{url('update_post_user',$data->id)}}" class="btn btn-primary">update</a>
      </div>
      @endforeach
    <!-- footer section start -->
 
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
