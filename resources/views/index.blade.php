@extends('user.layout.app')

@section('content')
    <!-- <section class="hero is-info is-fullheight">
        <div class="hero-head">
            <nav class="navbar">
                <div class="container">
                    <div class="navbar-brand">
                        <a class="navbar-item" href="../">
                            <img src="{{config('constants.site_logo')}}">
                        </a>
                        <span class="navbar-burger burger" data-target="navbarMenu">
                            <span></span>
                            <span></span>
                            <span></span>
                        </span>
                    </div>
                    <div id="navbarMenu" class="navbar-menu">
                        <div class="navbar-end">
                            {{-- <span class="navbar-item">
                                <a class="button is-white is-outlined" href="{{url('login')}}">
                                    <span class="icon">
                                        <i class="fa fa-home"></i>
                                    </span>
                                    <span>User</span>
                                </a>
                            </span>
                            <span class="navbar-item">
                                <a class="button is-white is-outlined" href="{{ url('/provider/login') }}">
                                    <span class="icon">
                                        <i class="fa fa-superpowers"></i>
                                    </span>
                                    <span>Partner</span>
                                </a>
                            </span> --}}
                        </div>
                    </div>
                </div>
            </nav>
            </div>

            <div class="hero-body">
                <div class="container has-text-centered">
                    <div class="columns  is-3">
                        <div class="column is-8">

                        </div>
                        <div class="column box">
                            <div class="level">
                                    <div class="column left">
                                        <img src="{{asset('asset/img/ride-form-icon.png')}}')}}">
                                    </div>
                                    <div class="right">
                                        <a href="{{url('register')}}">
                                            <h3>Get a @lang('admin.service.home')</h3>
                                            <h5>SIGN UP <i class="fa fa-chevron-right"></i></h5>
                                        </a>
                                    </div>
                                    
                                    <div class="column left">
                                        <img src="{{asset('asset/img/ride-form-icon.png')}}')}}">
                                    </div>
                                    <div class="right">
                                        <a href="{{url('/provider/register')}}">
                                            <h3>Provide a @lang('admin.service.home')</h3>
                                            <h5>SIGN UP <i class="fa fa-chevron-right"></i></h5>
                                        </a>
                                    </div>
                            </div>
                                <p class="note-or">Or <a href="{{url('/provider/login')}}">sign in</a> with your @lang('admin.provider') account.</p>
                            </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    </section> -->
    <!-- middle  end from here-->
    <section class="middle">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col-lg-12">
                  <div class="bg_sec">
                     <div class="work_list">
                        <div class="row fr-mr ">
                          @foreach($services as $service)
                           <div class="col-lg-2 col-6 col-md-4">
                              <div class="card_box">
                                 <!-- <span  onclick="openSe()"> -->
                                  <span>
                                    <a href="{{url('dashboard')}}?service={{$service->id}}">
                                       <img src="{{$service->image}}" class="img-fluid">
                                       <h5>{{$service->name}}</h5>
                                    </a>
                                 </span>
                              </div>
                           </div>
                          @endforeach
                           <!-- <div class="col-lg-2 col-6 col-md-4">
                              <div class="card_box">
                                 <span  onclick="openSe()">
                                    <a href="#">
                                       <img src="{{asset('new-design/images/icon/fe.png')}}" class="img-fluid">
                                       <h5>Salon at Home</h5>
                                    </a>
                                 </span>
                              </div>
                           </div>
                           <div class="col-lg-2 col-6 col-md-4">
                              <div class="card_box">
                                 <span  onclick="openSe()">
                                    <a href="#">
                                       <img src="{{asset('new-design/images/icon/category_1312fb60.png')}}" class="img-fluid">
                                       <h5>Massage For Women</h5>
                                    </a>
                                 </span>
                              </div>
                           </div>
                           <div class="col-lg-2 col-6 col-md-4">
                              <div class="card_box">
                                 <span  onclick="openSe()">
                                    <a href="#">
                                       <img src="{{asset('new-design/images/icon/category_07f29980-removebg-preview.png')}}" class="img-fluid">
                                       <h5>Electricians</h5>
                                    </a>
                                 </span>
                              </div>
                           </div>
                           <div class="col-lg-2 col-6 col-md-4">
                              <div class="card_box">
                                 <span  onclick="openSe()">
                                    <a href="#">
                                       <img src="{{asset('new-design/images/icon/category_6fbad370.png')}}" class="img-fluid">
                                       <h5>Plumbers </h5>
                                    </a>
                                 </span>
                              </div>
                           </div>
                           <div class="col-lg-2 col-6 col-md-4">
                              <div class="card_box">
                                 <span  onclick="openSe()">
                                    <a href="#">
                                       <img src="{{asset('new-design/images/icon/category_7258d6e0.png')}}" class="img-fluid">
                                       <h5>Painters</h5>
                                    </a>
                                 </span>
                              </div>
                           </div>
                        </div>
                        <div class="row justify-content-center">
                           <div class="col-lg-2 col-6 col-md-4">
                              <div class="card_box">
                                 <span  onclick="openSe()">
                                    <a href="#">
                                       <img src="{{asset('new-design/images/icon/category_c65717e0.png')}}" class="img-fluid">
                                       <h5>Carpenters</h5>
                                    </a>
                                 </span>
                              </div>
                           </div>
                           <div class="col-lg-2 col-6 col-md-4">
                              <div class="card_box">
                                 <span  onclick="openSe()">
                                    <a href="#">
                                       <img src="{{asset('new-design/images/icon/category_5ffa6d50.png')}}" class="img-fluid">
                                       <h5>Massage For Men</h5>
                                    </a>
                                 </span>
                              </div>
                           </div>
                           <div class="col-lg-2 col-6 col-md-4">
                              <div class="card_box">
                                 <span  onclick="openSe()">
                                    <a href="#">
                                       <img src="{{asset('new-design/images/icon/category_729829d0.png')}}" class="img-fluid">
                                       <h5>Pest Control</h5>
                                    </a>
                                 </span>
                              </div>
                           </div>
                           <div class="col-lg-2 col-6 col-md-4">
                              <div class="card_box">
                                 <span  onclick="openSe()">
                                    <a href="#">
                                       <img src="{{asset('new-design/images/icon/category_72d18950.png')}}" class="img-fluid">
                                       <h5>Appliance Repair</h5>
                                    </a>
                                 </span>
                              </div>
                           </div>
                           <div class="col-lg-2 col-6 col-md-4">
                              <div class="card_box">
                                 <span  onclick="openSe()">
                                    <a href="#">
                                       <img src="{{asset('new-design/images/icon/category_6b1f5250.png')}}" class="img-fluid">
                                       <h5>Cleaning & Disinfection</h5>
                                    </a>
                                 </span>
                              </div>
                           </div> 
                        </div> -->
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <div id="myservice" class="sideservice">
         <ul class="service">
            <li>
               <a href="javascript:void(0)" class="closebtn" onclick="closeSe()">&#8592;
               <span>Please Select</span>
               </a>
            </li>
         </ul>
         <ul class="service_list">
            <li>
               <a href="detail.html">
               <img src="{{asset('new-design/images/side/asset 22.jpeg')}}">
               <span>Offices and Shops Disinfection</span>
               <span><i class="fa fa-angle-right" aria-hidden="true"></i></span>
               </a>
            </li>
            <li>
               <a href="detail.html">
               <img src="{{asset('new-design/images/side/asset 23.jpeg')}}">
               <span>Offices and Shops Disinfection</span>
               <span><i class="fa fa-angle-right" aria-hidden="true"></i></span>
               </a>
            </li>
            <li>
               <a href="detail.html">
               <img src="{{asset('new-design/images/side/asset 24.jpeg')}}">
               <span>Offices and Shops Disinfection</span>
               <span><i class="fa fa-angle-right" aria-hidden="true"></i></span>
               </a>
            </li>
            <li>
               <a href="detail.html">
               <img src="{{asset('new-design/images/side/asset 25.jpeg')}}">
               <span>Offices and Shops Disinfection</span>
               <span><i class="fa fa-angle-right" aria-hidden="true"></i></span>
               </a>
            </li>
            <li>
               <a href="detail.html">
               <img src="{{asset('new-design/images/side/asset 26.jpeg')}}">
               <span>Offices and Shops Disinfection</span>
               <span><i class="fa fa-angle-right" aria-hidden="true"></i></span>
               </a>
            </li>
            <li>
               <a href="detail.html">
               <img src="{{asset('new-design/images/side/asset 27.jpeg')}}">
               <span>Offices and Shops Disinfection</span>
               <span><i class="fa fa-angle-right" aria-hidden="true"></i></span>
               </a>
            </li>
            <li>
               <a href="detail.html">
               <img src="{{asset('new-design/images/side/asset 28.jpeg')}}">
               <span>Offices and Shops Disinfection</span>
               <span><i class="fa fa-angle-right" aria-hidden="true"></i></span>
               </a>
            </li>
            <li>
               <a href="detail.html">
               <img src="{{asset('new-design/images/side/asset 29.jpeg')}}">
               <span>Offices and Shops Disinfection</span>
               <span><i class="fa fa-angle-right" aria-hidden="true"></i></span>
               </a>
            </li>
         </ul>
      </div>
      <!-- middle end from here-->
      <!-- carousel start from here-->
      <section class="slider">
         <div class="container-fluid">
            <div class="row justify-content-center">
               <div class="col-lg-12">
                  <div class="carousel-slider">
                     <div class="owl-slider for-mgin-top">
                        <div id="carousel" class="owl-carousel">
                           <div class="case_item">
                              <a href="#">
                              <img src="{{asset('new-design/images/slider/1603434545759-3eee3b.png')}}">
                              </a> 
                           </div>
                           <div class="case_item">
                              <a href="#">
                              <img src="{{asset('new-design/images/slider/1603434557837-0ee0c5.png')}}">
                              </a>
                           </div>
                           <div class="case_item">
                              <a href="#">
                              <img src="{{asset('new-design/images/slider/1603427602575-6b448b (1).png')}}">
                              </a>
                           </div>
                           <div class="case_item">
                              <a href="#">
                              <img src="{{asset('new-design/images/slider/1603434566618-e89943.png')}}">
                              </a>
                           </div>
                           <div class="case_item">
                              <a href="#">
                              <img src="{{asset('new-design/images/slider/1603439180479-b0ef86.png')}}">
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- carousel end from here-->
      <!-- care start from here-->
      <section class="safe">
         <div class="container-fluid">
            <div class="row justify-content-center">
               <div class="col-lg-12">
                  <div class="safe_img">
                     <a href="#">
                     <img src="{{asset('new-design/images/1601372024808-52a8d3.png')}}" class="img-fluid">
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- care end from here-->
      <!-- exp start from here-->
      <section class="exp">
         <div class="container-fluid">
            <div class="row justify-content-center">
               <div class="col-lg-8 text-center">
                  <h1>Experiences in the Spotlight</h1>
                  <h5>Hygienic, Low-Contact Services</h5>
               </div>
            </div>
            <div class="row justify-content-center">
              @php 
                $limit = 1;
              @endphp
              @foreach($services as $service)
               <div class="col-lg-5">
                  <div class="ex_img">
                     <a href="{{url('dashboard')}}?service={{$service->id}}">
                        <img src="{{ $service->image }}" class="img-fluid">
                        <h5>{{$service->name}}</h5>
                        <!-- <p>Single-use tools & products</p> -->
                     </a>
                  </div>
               </div>
               @php
                  if($limit++ == 2) {
                      break;
                  }
               @endphp
              @endforeach
               <!-- <div class="col-lg-5">
                  <div class="ex_img">
                     <a href="#">
                        <img src="{{asset('new-design/images/kk (2).png')}}" class="img-fluid">
                        <h5>Carpenter at Home</h5>
                        <p>Single-use cape & towelss</p>
                  </div>
                  </a>
               </div> -->
            </div>
         </div>
      </section>
      <!-- exp end from here-->
      <!-- clean strat from here-->
      <section class="clean">
         <div class="container-fluid">
            <div class="row justify-content-center">
               <div class="col-lg-8 text-center">
                  <h1>Cleaning & Pest Control </h1>
                  <h5>Removes hard stains & more</h5>
               </div>
            </div>
            <div class="row">
               <div class="col-lg-3 col-md-6">
                  <div class="clean_img">
                     <a href="#">
                        <img src="{{asset('new-design/images/pest (1).png')}}" class="img-fluid">
                        <p>Professional Bathroom Cleaning</p>
                        <span>Up to 50% off</span>
                     </a>
                  </div>
               </div>
               <div class="col-lg-3 col-md-6">
                  <div class="clean_img">
                     <a href="#">
                        <img src="{{asset('new-design/images/pest (2).png')}}" class="img-fluid">
                        <p>Professional Kitchen Cleaning</p>
                     </a>
                  </div>
               </div>
               <div class="col-lg-3 col-md-6">
                  <div class="clean_img">
                     <a href="#">
                        <img src="{{asset('new-design/images/pest.png')}}" class="img-fluid">
                        <p>Professional Sofa Cleaning</p>
                     </a>
                  </div>
               </div>
               <div class="col-lg-3 col-md-6">
                  <div class="clean_img">
                     <a href="#">
                        <img src="{{asset('new-design/images/pest (3).png')}}" class="img-fluid">
                        <p>Pest Control</p>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- clean end from here-->
      <!-- offer strat from here-->
      <section class="offer">
         <div class="container-fluid">
            <div class="row justify-content-center">
               <div class="col-lg-8 text-center">
                  <h1>Best Offers </h1>
                  <h5>Hygienic & single-use products | low-contact services</h5>
               </div>
            </div>
            <div class="row justify-content-center">
               <div class="col-lg-3 col-md-6">
                  <div class="offer_img">
                     <a href="#">
                        <img src="{{asset('new-design/images/offer (3).png')}}" class="img-fluid">
                        <p>Professional Office Cleaning</p>
                        <span>Up to 60% off</span>
                     </a>
                  </div>
               </div>
               <div class="col-lg-3 col-md-6">
                  <div class="offer_img">
                     <a href="#">
                        <img src="{{asset('new-design/images/offer.png')}}" class="img-fluid">
                        <p>Professional Car Cleaning</p>
                        <span>Up to 50% off</span>
                     </a>
                  </div>
               </div>
               <div class="col-lg-3 col-md-6">
                  <div class="offer_img">
                     <a href="#">
                        <img src="{{asset('new-design/images/offer (1).png')}}" class="img-fluid">
                        <p>Professional Carpet Cleaning</p>
                        <span>Up to 50% Off</span>
                     </a>
                  </div>
               </div>
               <div class="col-lg-3 col-md-6">
                  <div class="offer_img">
                     <a href="#">
                        <img src="{{asset('new-design/images/offer (2).png')}}" class="img-fluid">
                        <p>Professional House Cleaning</p>
                        <span>Up to 50% Off</span>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- offer end from here-->
      <!-- cust strat from here-->
      <section class="cust">
         <div class="container-fluid">
            <div class="row justify-content-center">
               <div class="col-lg-8 text-center">
                  <h1>Customer safety is our priority</h1>
                  <h5>What customers are saying about our safety standards</h5>
               </div>
            </div>
            <div class="row justify-content-center">
               <div class="col-lg-10">
                  <div class="owl-slider for-mgin-top">
                     <div id="demo" class="owl-carousel">
                        <div class="main-item">
                           <a href="#">
                           <img src="{{asset('new-design/images/testimonials/category_3bbf0af0.png')}}">
                           </a> 
                        </div>
                        <div class="main-item">
                           <a href="#">
                           <img src="{{asset('new-design/images/testimonials/category_3eaa4400.png')}}">
                           </a>
                        </div>
                        <div class="main-item">
                           <a href="#">
                           <img src="{{asset('new-design/images/testimonials/category_387cb130.png')}}">
                           </a>
                        </div>
                        <div class="main-item">
                           <a href="#">
                              <img src="{{asset('new-design/images/testimonials/category_411eed80.png')}}">
                        </div>
                        <div class="main-item">
                        <a href="#">
                        <img src="{{asset('new-design/images/testimonials/category_3782c0d0.png')}}">
                        </a>
                        </div>
                        <div class="main-item">
                           <a href="#">
                           <img src="{{asset('new-design/images/testimonials/category_38337330.png')}}">
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- cust end from here-->
      <!-- clean strat from here-->
      <section class="clean">
         <div class="container-fluid">
            <div class="row justify-content-center">
               <div class="col-lg-8 text-center">
                  <h1>Appliances: Service & Repair </h1>
                  <h5>Low-contact services</h5>
               </div>
            </div>
            <div class="row">
               <div class="col-lg-3 col-md-6">
                  <div class="clean_img">
                     <a href="#">
                        <img src="{{asset('new-design/images/cc (1).png')}}" class="img-fluid">
                        <p>AC Service and Repair</p>
                        <span>30% off on Second AC onwards</span>
                     </a>
                  </div>
               </div>
               <div class="col-lg-3 col-md-6">
                  <div class="clean_img">
                     <a href="#">
                        <img src="{{asset('new-design/images/category_c0667020.jpg')}}" class="img-fluid">
                        <p>Geyser Repair</p>
                     </a>
                  </div>
               </div>
               <div class="col-lg-3 col-md-6">
                  <div class="clean_img">
                     <a href="#">
                        <img src="{{asset('new-design/images/category_bbb8c690.jpg')}}" class="img-fluid">
                        <p>RO Service & Repair</p>
                     </a>
                  </div>
               </div>
               <div class="col-lg-3 col-md-6">
                  <div class="clean_img">
                     <a href="#">
                        <img src="{{asset('new-design/images/category_b78221c0.jpg')}}" class="img-fluid">
                        <p>Washing Machine Repair</p>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- clean end from here-->
      <!-- banner strat from here-->   
      <section class="safe">
         <div class="container-fluid">
            <div class="row justify-content-center">
               <div class="col-lg-12">
                  <div class="safe_img">
                     <a href="#">
                     <img src="{{asset('new-design/images/category_a4e46fa0.png')}}" class="img-fluid">
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="safe">
         <div class="container-fluid">
            <div class="row justify-content-center">
               <div class="col-lg-12">
                  <div class="safe_img">
                     <a href="#">
                     <img src="{{asset('new-design/images/category_3cffdf20.png')}}" class="img-fluid">
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- banner end from here--> 
      <!-- bottom start from here--> 
      <section class="bottom">
         <div class="container-fluid">
            <div class="row justify-content-center" >
               <div class="col-lg-7 col-md-6">
                  <div class="bottom_title">
                     <h1>Refer and get free services</h1>
                     <h5>Invite your friends to Urban Company services. They get Rs. 100 off. You win upto Rs. 5000</h5>
                     <div class="number">
                        <span class="num">
                        <img src="{{asset('new-design/images/country/Flag_of_India_28Dec2017-1.jpg')}}" class="img-fluid">
                        <span>+91</span>
                        </span>
                        <input type="text" name="" class="num_submit">
                        <button class="num_button">Send</button>
                     </div>
                     <div class="apps">
                        <a href="#">
                        <img src="{{asset('new-design/images/category_7f741d10.png')}}" class="img-fluid mr-2">
                        </a>
                        <a href="#">
                        <img src="{{asset('new-design/images/category_7f907eb0.png')}}" class="img-fluid">
                        </a>
                     </div>
                  </div>
               </div>
               <div class="col-lg-5 col-md-6">
                  <div class="bottom_img">
                     <img src="{{asset('new-design/images/bottom (1).png')}}" class="img-fluid">
                  </div>
               </div>
            </div>
         </div>
      </section>
@endsection
