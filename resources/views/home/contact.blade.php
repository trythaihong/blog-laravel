<!DOCTYPE html>
<html lang="en">
  <head>
   @include('home.css')
  
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
      
    </div>
    <div class="contact_section layout_padding">
        <div class="container">
          <h1 class="contact_taital">Request A Call Back</h1>
          <div class="email_text">
            <form action="{{ url('/send_message') }}" method="POST">
              @csrf
              <div class="form-group">
                  <input type="text" class="email-bt" placeholder="Name" name="name" required>
              </div>
              <div class="form-group">
                  <input type="number" class="email-bt" placeholder="Phone number" name="phone" required>
              </div>
              <div class="form-group">
                  <input type="email" class="email-bt" placeholder="Email" name="email" required>
              </div>
              <div class="form-group">
                  <textarea class="massage-bt" placeholder="Message" rows="5" id="comment" name="message" required></textarea>
              </div>
              <div class="send_btn">
                  <input class="btn btn-success" type="submit" value="Send">
              </div>
          </form>
          
          </div>
        </div>
      </div>
    <!-- footer section start -->
   @include('home.footer')
    <!-- footer section end -->
    <!-- copyright section start -->
    <div class="copyright_section">
      <div class="container">
        <p class="copyright_text">
          2020 All Rights Reserved. Design by
          <a href="https://html.design">Free html Templates</a>
        </p>
      </div>
    </div>
   @include('home.script')
  </body>
</html>
