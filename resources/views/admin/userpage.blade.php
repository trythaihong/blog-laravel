<!DOCTYPE html>
<html>
  <head> 
   @include('admin.css')
   <style>
    th{
        padding: 20px;
        color:white
    }
    td{
        padding: 20px
    }
    .div{
        margin-top: 30px
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
        <div class="div">
            <table style="padding: 20px" align="center" class="container-k" >
                <tr style="background-color: tomato" align="center">
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Usertype</th>
                    <th>delete</th>
                    <th>edit</th>
                    
            
                </tr>
                @foreach ($data as $data)
                    <tr align="center" align="center">
                        <td>{{$data->name}}</td>
                        <td>{{$data->email}}</td>
                        <td>{{$data->phone}}</td>
                        <td>{{$data->usertype}}</td>
                        <td><a href="{{url('delete_user',$data->id)}}" onclick="return confirm('are you sure')" class="btn btn-danger">remove</a></td>
                        <td><a href="{{url('update_user',$data->id)}}"  class="btn btn-primary">update</a></td>
            
            
                    </tr>
                @endforeach
            </table>
        </div>

      </div>
       @include('admin.footer')
      </div>
    </div>
    @include('admin.script')
  </body>
</html>