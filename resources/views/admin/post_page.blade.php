<!DOCTYPE html>
<html>
  <head> 
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
        input{
            width: 200px
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
                <h1>Add Post</h1>
                <div class="div">
                    <form action="{{url('add_post')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="divv">
                            <label for="">post title</label>
                            <input type="text" name="title">
                        </div>
                        <div class="divv">
                            <label for="">post des</label>
                            <textarea name="des" id=""></textarea>
                        </div>
                        <div class="divv">
                            <label for="">post image</label>
                            <input type="file" name="image">
                        </div>
                        <div class="divv">
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