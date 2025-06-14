<nav id="sidebar">
    <!-- Sidebar Header-->
    <div class="sidebar-header d-flex align-items-center">
      {{-- <div class="avatar"><img src="img/avatar-6.jpg" alt="..." class="img-fluid rounded-circle"></div> --}}
      <div class="title">
        <h1 class="h5">Admin Dashboard</h1>
        <p>welcome </p>
      </div>
    </div>
    <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
    <ul class="list-unstyled">
            <li class="active"><a href="{{url('home')}}"> <i class="icon-home"></i>Home </a></li>
            <li><a href="{{url('userpage')}}"> <i class="icon-grid"></i>View user </a></li>
            <li><a href="{{url('post_page')}}"> <i class="icon-grid"></i>Add post </a></li>
            <li><a href="{{url('/show_post')}}"> <i class="fa fa-bar-chart"></i>Show post </a></li>
            <li><a href="{{url('/show_message')}}"> <i class="fa fa-bar-chart"></i>Show Message </a></li>
            <li><a href="{{url('/about_post')}}"> <i class="fa fa-bar-chart"></i>About post </a></li>
            <li><a href="{{url('show_about')}}"> <i class="fa fa-bar-chart"></i>show About  </a></li>
           
    </ul><span class="heading">Extras</span>
   
  </nav>