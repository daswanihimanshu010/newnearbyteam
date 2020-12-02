<!DOCTYPE html>
<html>

<head>
    <!-- <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1"> -->

        <title>{{ config('constants.site_title','Moob Urban') }}</title>
<!-- 
        <meta name="description" content="">
        <meta name="author" content=""> -->
    <link rel="shortcut icon" href="{{ config('constants.site_icon') }}" type="image/x-icon"> 
    <!-- Bulma Version 0.8.x-->
    <!-- <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/landing.css"> -->
    <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="{{asset('new-design/css/style.css')}}" >
      <link rel="stylesheet" type="text/css" href="{{asset('new-design/css/responsive.css')}}" >
      <script type="text/javascript" src="{{asset('new-design/js/main.js')}}"></script>
      <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
      <script src="https://code.jquery.com/jquery-latest.js"></script>
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
      <title>Join</title>
    @yield('styles')
</head>

<body>
      <!-- Header start from here-->
      <section id="section2">
         <nav class="navbar-nav navbar-expand-lg navbar-fixed-top" role="navigation">
            <div class="container-fluid">
               <div class="row">
                  <a class="navbar-brand">
                     <div class="form-group has-search">
                        <span class="fa fa-search form-control-feedback"></span>
                        <input type="text" class="form-control" placeholder="Search for a service">
                     </div>
                  </a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                     <ul class="grid-nav ml-auto">
                     @php 
                      $limit = 1;
                     @endphp
                     @foreach($services as $service)
                        <li class="grid-item">
                           <a  href="{{url('dashboard')}}?service={{$service->id}}">
                              <img src="{{$service->image}}">
                              <h5>{{$service->name}}</h5>
                           </a>
                        </li>
                        @php 
                          if($limit++ == 6) {
                              break;
                          }
                        @endphp
                     @endforeach
                        <!-- <li class="grid-item">
                           <a  href="#">
                              <img src="{{asset('new-design/images/icon/fe.png')}}">
                              <h5>Salon at Home</h5>
                           </a>
                        </li>
                        <li class="grid-item">
                           <a  href="#">
                              <img src="{{asset('new-design/images/icon/category_1312fb60.png')}}">
                              <h5>Massage For Women</h5>
                           </a>
                        </li>
                        <li class="grid-item">
                           <a  href="#">
                              <img src="{{asset('new-design/images/icon/category_07f29980-removebg-preview.png')}}">
                              <h5>Electricians</h5>
                           </a>
                        </li>
                        <li class="grid-item">
                           <a  href="#">
                              <img src="{{asset('new-design/images/icon/category_6fbad370.png')}}">
                              <h5>Plumbers </h5>
                           </a>
                        </li>
                        <li class="grid-item">
                           <a  href="#">
                              <img src="{{asset('new-design/images/icon/category_7258d6e0.png')}}">
                              <h5>Painters</h5>
                           </a>
                        </li>
                        <li class="grid-item">
                           <a  href="#">
                              <div class="lst_item">+6</div>
                           </a>
                        </li> -->
                     </ul>
                  </div>
               </div>
            </div>
         </nav>
      </section>
      <section class="header bg-img" id="section1">
         <div class="container-fluid">
            <div class="row pt-3">
               <div class="col-lg-4 col-md-5">
                  <div class="top_logo">
                     <a href="<?= url('/') ?>">
                     <img src="{{asset('logo.png')}}" class="img-fluid">
                     </a>
                  </div>
               </div>
               <div class="col-lg-8 col-md-7">
                  @if(empty(Auth::user()->id))
                  <ul class="top_list">
                     <li><a href="#"></a></li>
                     <li><a href="Join.html"><u class="br">Register as a Professional</u></a></li>
                     <li><a href="#"><span onclick="openNav()"> Login/Sign Up</span></a></li>
                     <div id="mySidenav" class="sidenav">
                        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;<span>Please login to continue</span></a>
                        <div class="side_list">
                           <!-- <form class="form-horizontal" style="max-width:450px;">
                              <div class="form-group">
                                 <div class="col-sm-12">
                                    <div class="phone-list">
                                       <div class="input-group phone-input">
                                          <span class="input-group-btn">
                                             <button type="button" class="btn btn-default dropdown-toggle btn-sd" data-toggle="dropdown" aria-expanded="false"><span class="type-text">
                                             <img src="{{asset('new-design/images/country/Flag_of_India_28Dec2017-1.jpg')}}">
                                             <span>+91</span>
                                             </span> <span class="caret"></span></button>
                                             <ul class="dropdown-menu" role="menu">
                                                <li><a class="changeType" href="javascript:;" data-type-value="phone">Phone</a></li>
                                                <li><a class="changeType" href="javascript:;" data-type-value="fax">Fax</a></li>
                                                <li><a class="changeType" href="javascript:;" data-type-value="mobile">Mobile</a></li>
                                             </ul>
                                          </span>
                                          <input type="tel"  class="form-control fo-pd" placeholder="Your phone number" />
                                       </div>
                                    </div>
                                    <button type="button" class=" btn-add-phone"></span> Add Phone</button>
                                 </div>
                              </div>
                           </form> -->
                                <form  class="form-horizontal" style="max-width:450px;" role="form" method="POST" action="{{ url('/login') }}"> 
                                {{ csrf_field() }}                      
                                    <div class="form-group col-md-12">
                                        <input id="email" type="email" class="form-control padding-left-15" placeholder="Email Address" name="email" value="{{ old('email') }}" required autofocus>

                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    
                                    <div class="form-group col-md-12">
                                        <input id="password" type="password" class="form-control padding-left-15" placeholder="Password" name="password" required>

                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <div class="form-group col-md-12">
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : ''}}><span> Remember Me</span>
                                    </div>
                                
                                    <div class="form-group col-md-12">
                                        <button type="submit" class="btn-add-phone">LOGIN</button>
                                    </div>
                                </form>     

                                <div class="col-md-12">
                                    <p class="helper"> <a href="{{ url('/password/reset') }}">Forgot Password</a></p>   
                                </div>
                        </div>
                     </div>
                  </ul>
                  @else
                  <ul class="top_list">
                    <li><a class="navbar-item" href="{{url('trips')}}">@lang('user.my_trips')</a></li>
                    <li><a class="navbar-item" href="{{url('profile')}}">@lang('user.profile.profile')</a></li>
                    <li><a class="navbar-item" href="{{url('change/password')}}">@lang('user.profile.change_password')</a></li>
                    <hr class="navbar-divider">
                    <li><a class="navbar-item" href="{{ url('/logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">@lang('user.profile.logout')</a></li>
                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                  @endif
               </div>
            </div>
            <div class="container">
               <div class="row justify-content-center">
                  <div class="col-lg-10 col-12 text-center">
                     <div class="head_title">
                        <p><a href="home.html">Home/indore</a></p>
                        <h1>Home services, on demand.</h1>
                        <div class="country_iso">
                           <div class="row">
                              <div class="col-lg-3">
                                 <div class="btn-group">
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img src="{{asset('new-design/images/country/Flag_of_India_28Dec2017-1.jpg')}}">
                                    <span>  Indore
                                    </span>
                                    </button>
                                    <ul class="dropdown-menu">
                                       <li>
                                          <a href="#" title="Select this card">Surat</a>
                                       </li>
                                       <li>
                                          <a href="#" title="Select this card">Bhubaneswar</a>
                                       </li>
                                       <li>
                                          <a href="#" title="Select this card">Lucknow</a>
                                       </li>
                                       <li>
                                          <a href="#" title="Select this card">Vadodara</a>
                                       </li>
                                       <li>
                                          <a href="#" title="Select this card">Visakhapatnam</a>
                                       </li>
                                       <li>
                                          <a href="#" title="Select this card">Ludhiana</a>
                                       </li>
                                       <li>
                                          <a href="#" title="Select this card">Nagpur</a>
                                       </li>
                                       <li>
                                          <a href="#" title="Select this card">Pune</a>
                                       </li>
                                       <li>
                                          <a href="#" title="Select this card">Mumbai</a>
                                       </li>
                                       <li>
                                          <a href="#" title="Select this card">Kolkata</a>
                                       </li>
                                       <li>
                                          <a href="#" title="Select this card">Hyderabad</a>
                                       </li>
                                       <li>
                                          <a href="#" title="Select this card">Jaipur</a>
                                       </li>
                                       <li>
                                          <a href="#" title="Select this card">Chandigarh Tricity</a>
                                       </li>
                                       <li>
                                          <a href="#" title="Select this card">Delhi NCR</a>
                                       </li>
                                       <li>
                                          <a href="#" title="Select this card">Chennai</a>
                                       </li>
                                    </ul>
                                 </div>
                              </div>
                              <div class="col-lg-7">
                                 <div class="form-group har-search">
                                    <span class="fa fa-search form-control-feedback"></span>
                                    <input type="text" class="form-control" placeholder="Search for a service">
                                 </div>
                                 <div class="se_list">
                                    <ul id="menu">
                                       <li><a href="">  Carpenters</li>
                                       </a> 
                                       <li><a href="">Massage For Men</li>
                                       </a> 
                                       <li><a href="">Pest Control</li>
                                       </a> 
                                       <li><a href="">etc</li>
                                       </a> 
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Header end from here-->

                @yield('content')
                
        <!-- footer start from here--> 
        <section class="footer">
            <div class="container-fluid">
                <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="footer_list">
                        <ul>
                            <li target="_blank"><a href="contact.html">Contact us</li>
                            <li target="_blank"><a href="privacy.html">Privacy Policy</li>
                                <li target="_blank"><a href="terms.html">Terms & Conditions</li>
                                    <li target="_blank"><a href="about.html">About us</li>
                            </a>
                        </ul>
                    </div>
                    <div class="footer_social">
                        <div class="row">
                            <div class="col-lg-6">
                            <div class="foot_img">
                                <a href="#">
                                <img src="{{asset('logo.png')}}" class="img-fluid">
                                </a>
                                <span>© 2014-20 Nearbuy Technologies India Pvt. Ltd.</span>
                            </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                            <ul class="social_links">
                                <li><a href="facebook.com"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
                                <li><a href="facebook.com"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                <li><a href="facebook.com"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="facebook.com"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                                <li><a href="facebook.com"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            </ul>
                            </div>
                            <div class="col-lg-3 col-md-6">
                            <div class="download">
                                <a href="https://play.google.com/store">
                                <img src="{{asset('new-design/images/category_7f741d10.png')}}" class="img-fluid mr-2">
                                </a>
                                <a href="https://www.apple.com/in/app-store/">
                                <img src="{{asset('new-design/images/category_7f907eb0.png')}}" class="img-fluid">
                                </a>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </section>
        <!-- footer end from here--> 
        <!-- Optional JavaScript; choose one of the two! -->
        <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" ></script>
        <script type="text/javascript">   jQuery("#carousel").owlCarousel({
            autoplay: true,
            
            lazyLoad: true,
            
            loop: true,
            
            margin: 20,
            
            /*
            
            animateOut: 'fadeOut',
            
            animateIn: 'fadeIn',
            
            */
            
            responsiveClass: true,
            
            autoHeight: true,
            
            autoplayTimeout: 7000,
            
            smartSpeed: 800,
            
            nav: true,
            
            navigationText : [,'<span class="fa-stack"><i class="fa fa-circle fa-stack-1x"></i><i class="fa fa-chevron-circle-right fa-stack-1x fa-inverse"></i></span>'],
            
            responsive: {
            
            0: {
            
                items: 1
            
            },
            
            
            
            600: {
            
                items: 1
            
            },
            
            768:  {
                    items: 2
            
            },
            
            1024: {
            
                items: 2
            
            },
            
            
            
            1366: {
            
                items: 4
            
            }
            
            }
            
            });
            
        </script>
        <script type="text/javascript">    jQuery("#demo").owlCarousel({
            autoplay: true,
            
            lazyLoad: true,
            
            loop: true,
            
            margin: 20,
            
            /*
            
            animateOut: 'fadeOut',
            
            animateIn: 'fadeIn',
            
            */
            
            responsiveClass: true,
            
            autoHeight: true,
            
            autoplayTimeout: 7000,
            
            smartSpeed: 800,
            
            nav: true,
            
            navigationText : [,'<span class="fa-stack"><i class="fa fa-circle fa-stack-1x"></i><i class="fa fa-chevron-circle-right fa-stack-1x fa-inverse"></i></span>'],
            
            responsive: {
            
            0: {
            
                items: 1
            
            },
            
            
            
            600: {
            
                items: 1
            
            },
            
            768:  {
                    items: 2
            
            },
            
            1024: {
            
                items: 2
            
            },
            
            
            
            1366: {
            
                items: 4
            
            }
            
            }
            
            });
            
        </script>
        <script type="text/javascript">
            (function($) {          
                $(document).ready(function(){                    
                    $(window).scroll(function(){                          
                        if ($(this).scrollTop() > 500) {
                            $('.navbar-nav').fadeIn(500);
                        } else {
                            $('.navbar-nav').fadeOut(500);
                        }
                    });
                });
            })(jQuery);
                
        </script>
        <script>
            function openNav() {
            document.getElementById("mySidenav").style.width = "350px";
                document.body.style.backgroundColor = "rgba(0,0,0,0.4)"; 
            }
            
            function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
                document.body.style.backgroundColor = "white";
            }
        </script>
        <script>
            function openSe() {
            document.getElementById("myservice").style.width = "350px";
                document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
            }
            
            function closeSe() {
            document.getElementById("myservice").style.width = "0";
                document.body.style.backgroundColor = "";
            }
        </script>
        <script src="{{asset('js/app.js')}}"></script>

        @if(Setting::get('demo_mode', 0) == 1)
        
        @endif

        <script>
            var map;

            function initMap() {
                var uluru = {lat: 40.730610, lng: -73.935242};
                var map = new google.maps.Map(document.getElementById('map'), {
                    zoom: 14,
                    center: {lat: 40.730610, lng: -73.935242}
                });
                var contentString = '<div id="content">';

                var infowindow = new google.maps.InfoWindow({
                    content: contentString
                });

                var marker = new google.maps.Marker({
                    position: uluru,
                    map: map,
                    title: 'YOUR_TITLE'
                });
                marker.addListener('click', function () {
                    infowindow.open(map, marker);
                });
            }
        </script>

        <script type="text/javascript" src="{{ asset('asset/js/map.js') }}"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC7ysJAljkupBFv313yr-zktMOTu4KPtGs&libraries=places&callback=initMap" async defer></script>

        <script type="text/javascript">
            var current_latitude = 40.730610;
            var current_longitude = -73.935242;
        </script>

        <script type="text/javascript">
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(success, fail);
            } else {
                console.log('Sorry, your bcolumnsser does not support geolocation services');
                initMap();
            }

            function success(position)
            {
                document.getElementById('long').value = position.coords.longitude;
                document.getElementById('lat').value = position.coords.latitude

                if (position.coords.longitude != "" && position.coords.latitude != "") {
                    current_longitude = position.coords.longitude;
                    current_latitude = position.coords.latitude;
                }
                initMap();
            }

            function fail()
            {
                // Could not obtain location
                console.log('unable to get your location');
                initMap();
            }
        </script> 

        <script type="text/javascript">
            jQuery(".hamburger.is-closed").click(function () {
                jQuery("#sidebar-wrapper").toggleClass('active');
            });
        </script>

        @yield('scripts')
    </body>
</html>
