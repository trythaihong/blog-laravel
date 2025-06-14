<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
   @include('home.css')
  <style>
    .div{
        padding: 20px
        margin: auto;
       
        text-align: center;
        background-color:gray
    }
    .img{
        width: 250px;
        height:150px;
        margin: auto
    }
    label{
        width: 200px;
        font-size: 18px;
        font-weight: bold;
        color: rgb(25, 24, 24)
    }
    input{
        width: 200px
        ;padding: 10px
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
        <div class="div">
            <h1 class="h1" style="color: white">Update post</h1>
            <form action="{{url('update_post_data',$data->id)}}" align="center" method="post" enctype="multipart/form-data">
                @csrf
                <div>
                    <label for="">Title</label>
                    <input type="text" name='title' value="{{$data->title}}">
                </div>
                <div>
                    <label for="">Des</label>
                    <textarea name='des'>{{$data->des}}</textarea>
                </div>
                <div>
                    <label for="">Current image</label>

                    <img class="img"  src="/postimage/{{$data->image}}" alt="">
                </div>
                <div>
                    <label for="">Change image</label>
                    <input type="file" name="image">
                </div>
                <div>
                    <input type="submit" class="btn btn-success" >
                </div>
            </form>
        </div>
   
    <!-- footer section end -->
    <!-- copyright section start -->
   
   @include('home.script')
  </body>
</html>
