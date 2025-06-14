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
                    <th>title</th>
                    <th>des</th>
                    <th>image</th>
                    <th>delete</th>
                    <th>edit</th>
                    
            
                </tr>
                @foreach ($data as $data)
                    <tr align="center" align="center">
                        <td>{{$data->title}}</td>
                        <td>{{$data->des}}</td>
                        <td><img style="width: 50px;height:50px" src="aboutimage/{{$data->image}}" alt=""></td>
                        <td><a href="{{url('delete_about',$data->id)}}" onclick="return confirm('are you sure')"  class="btn btn-danger">remove</a></td>
                        <td><a href="{{url('update_about',$data->id)}}"   class="btn btn-danger">edit</a></td>
                      
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