<div class="about_section layout_padding">
    <div class="container-fluid">
      @foreach ($about as $about)
          
      <div class="row">
        <div class="col-md-6">
          <div class="about_taital_main">
            <h1 class="about_taital">{{$about->title}}</h1>
            <p class="about_text">
              {{$about->des}}
            </p>
            <div class="readmore_bt"><a href="#">Read More</a></div>
          </div>
        </div>
        <div class="col-md-6 padding_right_0">
          <div><img style=""  src="aboutimage/{{$about->image}}" class="about_img" /></div>
        </div>
      </div>
      @endforeach
    </div>
  </div>