<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Shop Coffee</title>

  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,700' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Damion' rel='stylesheet' type='text/css'>
  <link href="{{asset('public/Page/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('public/Page/css/font-awesome.min.css')}}" rel="stylesheet">
  <link href="{{asset('public/Page/css/templatemo-style.css')}}" rel="stylesheet">
  <link rel="shortcut icon" href="{{asset('public/Page/img/favicon.ico')}}" type="image/x-icon" />

 

  </head>
  <body>
    <!-- Preloader -->
    <!-- <div id="loader-wrapper">
      <div id="loader"></div>
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
    </div> -->
    <!-- End Preloader -->
    <div class="tm-top-header " >
      <div class="container">
        <div class="row">
          <div class="tm-top-header-inner ">
            <div class="tm-logo-container">
              <img src="{{('public/Page/img/logo.png')}}" alt="Logo" class="tm-site-logo">
              <h1 class="tm-site-name tm-handwriting-font">Cafe House</h1>
            </div>
            <div class="mobile-menu-icon">
              <i class="fa fa-bars"></i>
            </div>
            <nav class="tm-nav " >
              <ul>
                <li><a href="{{URL::to('/trang-chu')}}" class="active">TRANG CHỦ</a></li>
                <li><a href="{{URL::to('/menu')}}">MENU</a></li>
                <li><a href="{{URL::to('/gio-hang')}}">GIỎ HÀNG</a></li>
                <li><a href="{{URL::to('/lien-he')}}">LIÊN HỆ</a></li>
                <li><a href="{{URL::to('/dang-nhap')}}">ĐĂNG NHẬP</a></li>
                <li>
                 <form class="form-inline " style="margin-top: 10px;">
                  <input class="form-control mr-sm-2 "  type="search" placeholder="Nhập nội dung..." aria-label="Search">
                  <button class="btn btn-outline-success my-2 my-sm-0" style="background-color:#140718" type="submit">Tìm kiếm</button>
                </form>
              </li>
              </ul>
            </nav>   
          </div>           
        </div>    
      </div>
    </div>
    <section class="tm-welcome-section">
      <div class="container tm-position-relative">
        <div class="tm-lights-container">
          <img src="{{('public/Page/img/light.png')}}" alt="Light" class="light light-1">
          <img src="{{('public/Page/img/light.png')}}" alt="Light" class="light light-2">
          <img src="{{('public/Page/img/light.png')}}" alt="Light" class="light light-3">  
        </div>        
        <div class="row tm-welcome-content">
          <h2 class="white-text tm-handwriting-font tm-welcome-header"><img src="{{('public/Page/img/header-line.png')}}" alt="Line" class="tm-header-line">&nbsp;Welcome To&nbsp;&nbsp;<img src="{{('public/Page/img/header-line.png')}}" alt="Line" class="tm-header-line"></h2>
          <h2 class="gold-text tm-welcome-header-2">Shop Coffee</h2>
          <p class="gray-text tm-welcome-description">Cafe House template is a mobile-friendly responsive <span class="gold-text">Bootstrap v3.3.5</span> layout by <span class="gold-text">templatemo</span>. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculusnec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</p>
          <a href="#main" class="tm-more-button tm-more-button-welcome">Details</a>      
        </div>
        <img src="{{('public/Page/img/table-set.png')}}" alt="Table Set" class="tm-table-set img-responsive">             
      </div>      
    </section>

      @yield('content')
    
    <footer>
      <div class="tm-black-bg">
        <div class="container">
          <div class="row margin-bottom-60">
            <nav class="col-lg-3 col-md-3 tm-footer-nav tm-footer-div">
              <h3 class="tm-footer-div-title">Main Menu</h3>
              <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Directory</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Our Services</a></li>
              </ul>
            </nav>
            <div class="col-lg-5 col-md-5 tm-footer-div">
              <h3 class="tm-footer-div-title">About Us</h3>
              <p class="margin-top-15">Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet.</p>
              <p class="margin-top-15">Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus.</p>
            </div>
            <div class="col-lg-4 col-md-4 tm-footer-div">
              <h3 class="tm-footer-div-title">Get Social</h3>
              <p>Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante.</p>
              <div class="tm-social-icons-container">
                <a href="#" class="tm-social-icon"><i class="fa fa-facebook"></i></a>
                <a href="#" class="tm-social-icon"><i class="fa fa-twitter"></i></a>
                <a href="#" class="tm-social-icon"><i class="fa fa-linkedin"></i></a>
                <a href="#" class="tm-social-icon"><i class="fa fa-youtube"></i></a>
                <a href="#" class="tm-social-icon"><i class="fa fa-behance"></i></a>
              </div>
            </div>
          </div>          
        </div>  
      </div>      
      <div>
        <div class="container">
          <div class="row tm-copyright">
           <p class="col-lg-12 small copyright-text text-center">Copyright &copy; 2084 Your Cafe House</p>
         </div>  
       </div>
     </div>
   </footer> <!-- Footer content-->  
   <!-- JS -->
   <script type="text/javascript" src="{{asset('public/Page/js/jquery-1.11.2.min.js')}}"></script>      <!-- jQuery -->
   <script type="text/javascript" src="{{asset('public/Page/js/templatemo-script.js')}}"></script>      <!-- Templatemo Script -->

 </body>
 </html>