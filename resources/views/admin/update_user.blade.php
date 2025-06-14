<!DOCTYPE html>
<html>
  <head> 
    <base href="/public">
   @include('admin.css')
   <style>
    h1{
        font-size: 20px;
        font-weight: bold;
        text-align: center;
        color: white
    }
    .form-group{
        text-align: center;
        padding: 20px;
        background-color: transparent

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
    input{
        width: 200px;
        padding: 10px
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
                <h1>Update Post</h1>
                <form action="{{url('edit_userid',$data->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="">name</label>
                        <input type="text"class="form-control" name="name" value="{{$data->name}}">
                    </div>
                    <div class="form-group">
                        <label for="">email</label>
                        <input type="text"class="form-control" name="email" value="{{$data->email}}">
                    </div>
                    <div class="form-group">
                        <label for="">phone</label>
                        <input type="text"class="form-control" name="phone" value="{{$data->phone}}">
                    </div>
                    <div class="form-group">
                        <label for="">usertype</label>
                        <textarea name="usertype" id="" class="form-control">{{$data->usertype}}</textarea>
                    </div>
                   
                    <div class="form-group">
                        <input type="submit" class="btn btn-success" >
                    </div>
                </form>
            </div>
        </div>
      </div>
       @include('admin.footer')
      </div>
    </div>
    @include('admin.script')
   
  </body>
</html>