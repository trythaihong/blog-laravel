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
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Message</th>
                    <th>Action</th>
            
                </tr>
                @foreach ($data as $data)
                    <tr align="center" align="center">
                        <td>{{$data->name}}</td>
                        <td>{{$data->phone}}</td>
                        <td>{{$data->email}}</td>
                        <td>{{$data->message}}</td>
                        <td><a onclick="return confirm('Are you sure to delete this')" href="{{url('delete_message',$data->id)}}" class="btn btn-danger">delete</a></td>
            
            
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