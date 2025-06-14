<!DOCTYPE html>
<html>
  <head> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
   @include('admin.css')
   <style>
    h1{
        font-size: 30px;
        font-weight: bold;
        text-align: center;
        color: white
    }
    .divv{
        text-align: center;
        padding: 20px

    }
    label{
        width: 200px;
        display: inline-block
    }
    th{
        padding: 10px;
        color:white
    }
    td{
        padding: 10px
    }
    .container-k{
        text-align: center;
        margin-top: 20px
    }
    .img{
        height: 100px;
        width: 100px;
    }
</style>
  </head>
  <body>
    @include('admin.header')
    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
     @include('admin.sidebar')
      <!-- Sidebar Navigation end-->
      <div class="page-content">
        @if (session()->has('message'))
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-hideen="true">X</button>
            {{session()->get('message')}}
        </div>
            
        @endif
        
            <div style="margin-top: 70px">
                
                    <h1>Show post</h1>
                    <table style="padding: 20px" align="center" class="container-k">
                        <tr style="background-color: tomato">
                            <th>Post title</th>
                            <th>Des</th>
                            <th>post by</th>
                            <th>post status</th>
                            <th>usertype</th>
                            <th>image</th>
                            <th>Delete</th>
                            <th>Update</th>
                            <th>Status Accept</th>
                            <th>Status reject</th>
                        </tr>
                        @foreach ($post as $post)
                            <tr align="center">
                                <td>{{$post->title}}</td>
                                <td>{{$post->des}}</td>
                                <td>{{$post->name}}</td>
                                <td>{{$post->post_status}}</td>
                                <td>{{$post->usertype}}</td>
                                <td><img  class="img" src="/postimage/{{$post->image}}" alt=""></td>
                                <td><a onclick="return confirm('Are you sure?')" href="{{url('delete_post',$post->id)}}" class="btn btn-danger">delete</a></td>
                                <td><a  href="{{url('update_post',$post->id)}}" class="btn btn-success">edit</a></td>
                                <td ><a onclick="return confirm('Are you sure')"  href="{{url('accept_post',$post->id)}}" class="btn btn-primary">Accept</a></td>
                                <td><a onclick="return confirm('Are you sure')" href="{{url('reject_post',$post->id)}}" class="btn btn-warning">reject</a></td>
                               
                            </tr>
                        @endforeach
                    </table>
            </div>
        </div>
      </div>
       @include('admin.footer')
      </div>
    </div>
    @include('admin.script')
   
  </body>
</html>