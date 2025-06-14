<div class="header_main">
    <div class="mobile_menu">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <!-- <div class="logo_mobile"><a href="{{url('home')}}"><img src="images/logo.png"></a></div> -->
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="/">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('aboutpage')}}">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('servicepage')}}">Services</a>
            </li>
          
            <li class="nav-item">
              <a class="nav-link" href="{{url('contact')}}">Contact</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
    <div class="container-fluid">
      <div class="logo">
        {{-- <a href="{{url('home')}}"><img src="images/logo.png" /></a> --}}
      </div>
      <div class="menu_main">
        <ul>
          <li class="active"><a href="{{url('home')}}">Home</a></li>
          <li><a href="{{url('aboutpage')}}">About</a></li>
          <li><a href="{{url('servicepage')}}">Services</a></li>
          {{-- <li><a href="{{url('blog')}}">Blog</a></li> --}}
          <li><a href="{{url('contact')}}">Contact us</a></li>
          @if (Route::has('login'))
          @auth
          <li ><a href="{{url('create_post')}}">Create post</a></li>
          <li>
            <x-app-layout>
            </x-app-layout>
          </li>
          <li ><a href="{{url('my_post')}}">My post</a></li>
          
          @else
          <li><a href="{{route('login')}}">login </a></li>
          <li><a href="{{route('register')}}">register </a></li>
          @endauth
          @endif
        </ul>
      </div>
    </div>
  </div>