@extends('fronted.layouts.master')

@section('content')
    <!-- Navbar Start -->
    <div class="container-fluid ">
        @include('fronted.layouts.navbar')
    </div>
    <!-- Navbar End -->
    <!-- Hero Start -->
    <div class="container-fluid pt-5 bg-primary hero-header mb-5 ">
        <div class="container pt-5">
            <div class="row g-5 pt-5">
                <div class="col-lg-6 align-self-center text-center text-lg-start mb-lg-5">
                    
                    <h1 class="display-4 text-white mb-4 animated slideInRight">Learn From Real Life Experiences</h1>
                    <p class="text-white mb-4 animated slideInRight"></p>
                    <a href="#" class="btn btn-light py-sm-3 px-sm-5 rounded-pill me-3 animated slideInRight">Read More</a>
                    <a href="{{url('contact')}}" class="btn btn-outline-light py-sm-3 px-sm-5 rounded-pill animated slideInRight">Contact Us</a>
                </div>
                <div class="col-lg-6 align-self-end text-center text-lg-end">
                    <img class="img-fluid" src="{{ asset('') }}fronted/assets/img/pngwing.com.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->
       
       <!-- About Start -->
        <div class="container-fluid about py-3 ">
            <div     class="container pt-5 ">
                <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
                    <h1 class="text-primary">About Us</h1>
                    <h5>About  Agency And It's Innovative IT Solutions</h5>
                </div>
                <div class="row g-5">
                    <div class="col-lg-5 col-md-6 col-sm-12 wow fadeIn" data-wow-delay=".3s">
                        <div class="h-100 position-relative">
                            <img src="{{ asset('') }}fronted/assets/img/one.jpg" class="img-fluid w-75 rounded" alt="" style="margin-bottom: 25%;">
                            <div class="position-absolute w-75" style="top: 25%; left: 25%;">
                                <img src="{{ asset('') }}fronted/assets/img/two.jpg" class="img-fluid w-100 rounded" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-6 col-sm-12 wow fadeIn" data-wow-delay=".5s">
                        
                        <p>It was in 2012, with little capital but a pocketful of belief our CEO, Abdul Mannan Sumon started SBIT, a software company, when he was just started his Diploma. The new company initially focused on the international market with the local market added in 2013. Since then the company has shown a continuous Growth.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Services Start -->
        <div class="container-fluid services py-5 ">
            <div class="container">
                <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
                    <h1 class="text-primary">Our Services</h1>
                    <h5 >Services Built Specifically For Your Business</h5>
                </div>
                <div class="row g-5 services-inner">
                    <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay=".3s">
                        <div class="services-item bg-light">
                            <div class="p-4 text-center services-content">
                                <div class="services-content-icon">
                                    <i class="far fa-images fa-7x mb-4 text-primary"></i>
                                    <h6 class="mb-3">Professional Graphic Design</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay=".5s">
                        <div class="services-item bg-light">
                            <div class="p-4 text-center services-content">
                                <div class="services-content-icon">
                                    <i class="fab fa-html5 fa-7x mb-4 text-primary"></i>
                                    <h6 class="mb-3">Web Design</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay=".7s">
                        <div class="services-item bg-light">
                            <div class="p-4 text-center services-content">
                                <div class="services-content-icon">
                                    <i class="fab fa-php fa-7x mb-4 text-primary"></i>
                                    <!-- <i class="fab fa-laravel"></i> -->
                                    <h6 class="mb-3">Software Developement</h6>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay=".3s">
                        <div class="services-item bg-light">
                            <div class="p-4 text-center services-content">
                                <div class="services-content-icon">
                                    <i class="fab fa-java fa-7x mb-4 text-primary"></i>
                                    <h6 class="mb-3">Web Application Development</h6>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay=".5s">
                        <div class="services-item bg-light">
                            <div class="p-4 text-center services-content">
                                <div class="services-content-icon">
                                    <i class="fab fa-android fa-7x mb-4 text-primary"></i>
                                    <h6 class="mb-3">Android App Development</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay=".7s">
                        <div class="services-item bg-light">
                            <div class="p-4 text-center services-content">
                                <div class="services-content-icon">
                                    <i class="fas fa-search-dollar fa-7x mb-4 text-primary"></i>
                                    <h6 class="mb-3">Digital Marketing</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay=".7s">
                        <div class="services-item bg-light">
                            <div class="p-4 text-center services-content">
                                <div class="services-content-icon">
                                    <i class="fas fa-database fa-7x mb-4 text-primary"></i>
                                    <h6 class="mb-3">Data Entry</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay=".7s">
                        <div class="services-item bg-light">
                            <div class="p-4 text-center services-content">
                                <div class="services-content-icon">
                                    <i class="fas fa-cogs fa-7x mb-4 text-primary"></i>
                                    <h6 class="mb-3">Any Customize Software</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Services End -->

        <!-- project Start -->
            <div class="container-fluid project py-5">
                <div class="container">
                    <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
                        <h1 class="text-primary">Our Product</h1>
                        <!-- <h5>Our Recently Completed Projects</h5> -->
                    </div>
                    

                    <div class="owl-carousel project-carousel wow fadeIn" data-wow-delay=".5s">
                        <div class="project-item border p-4">
                            <div class="align-items-center">
                                <div class="text-center ">
                                    <h4 class="text-secondary">Ecommerce Site</h4>
                                </div>
                                <div class="">
                                    <img src="{{ asset('') }}fronted/assets/img/ecommerce.png" alt="">
                                </div>
                                
                            </div>
                            <div class="border-top  pt-3">
                                <p class="mb-0">The basic requirements of e-commerce software can vary depending on the specific needs and goals of an e-commerce business. And this is why we are providing many more features including User-friendly interface, Product catalog management, Shopping cart functionality payment gateway integration.</p>
                            </div>
                        </div>
                        <div class="project-item border p-4">
                            <div class="align-items-center">
                                <div class="text-center ">
                                    <h4 class="text-secondary">School Management Software</h4>
                                </div>
                                <div class="">
                                    <img src="{{ asset('') }}fronted/assets/img/school.png" alt="">
                                </div>
                                
                            </div>
                            <div class="border-top  pt-3">
                                <p class="mb-0">This software is packed with all important features including Student Management, Fee Management, Course Scheduling, Library Management, Reporting and Analytics</p>
                            </div>
                        </div>
                        <div class="project-item border p-4">
                            <div class="align-items-center">
                                <div class="text-center ">
                                    <h4 class="text-secondary">Inventory Software (POS)</h4>
                                </div>
                                <div class="">
                                    <img src="{{ asset('') }}fronted/assets/img/accounts.png" alt="">
                                </div>
                                
                            </div>
                            <div class="border-top  pt-3">
                                <p class="mb-0">A good inventory management tool must prioritize accuracy. In view of this, our software gives you many features including easy to use, accurate calculation, easy to use on mobile.</p>
                            </div>
                        </div>
                        <div class="project-item border p-4">
                            <div class="align-items-center">
                                <div class="text-center ">
                                    <h4 class="text-secondary">Online News Portal</h4>
                                </div>
                                <div class="">
                                    <img src="{{ asset('') }}fronted/assets/img/news_portal.png" alt="">
                                </div>
                                
                            </div>
                            <div class="border-top  pt-3">
                                <p class="mb-0">We are providing user friendly online news portal with the slogan "All the news of the whole world or the country is now at your fingertips". There are many features that will bring your news portal closer to people.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="container-fluid proccess">
                <div class="">
                    <center>
                        <img src="{{ asset('') }}fronted/assets/img/proccess.png" alt="" class="img-fluid">
                    </center>
                </div>
            </div>

        <!-- project End -->

        <!-- clients  -->
        <div class="container-fluid project py-5 ">
            <div class="container">
                <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
                    <h1 class="text-primary">Our Valuable Clients</h1>
                    <h5>Our Valuable Clients</h5>
                </div>
                    <!-- all data start -->
                    <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                        <div class="row">
                            <div class="image-gallery">
                                <div class="row">
                                    <div class="col-md-2 col-sm-6">
                                        <img src="{{ asset('') }}fronted/assets/img/fgc.png" alt="" class="img-fluid">
                                        <div class="client-name">Feni Govt. College</div>
                                    </div>
                                    <div class="col-md-2 col-sm-6">
                                        <img src="{{ asset('') }}fronted/assets/img/fpi.png" alt="" class="img-fluid">
                                        <div class="client-name">Feni Polytechnic Institute</div>
                                    </div>
                                    <div class="col-md-2 col-sm-6">
                                        <img src="{{ asset('') }}fronted/assets/img/fci.jpg" alt="" class="img-fluid">
                                        <div class="client-name">Feni Computer Institute</div>
                                    </div>
                                    <div class="col-md-2 col-sm-6">
                                        <img src="{{ asset('') }}fronted/assets/img/spi.png" alt="" class="img-fluid">
                                        <div class="client-name">Sylhet Polytechnic Institute</div>
                                    </div>
                                    <div class="col-md-2 col-sm-6">
                                        <img src="{{ asset('') }}fronted/assets/img/zmc.png" alt="" class="img-fluid">
                                        <div class="client-name">Feni Govt. Zia Mohila College</div>
                                    </div>
                                    <div class="col-md-2 col-sm-6">
                                        <img src="{{ asset('') }}fronted/assets/img/imc.jpg" alt="" class="img-fluid">
                                        <div class="client-name">Feni Iqbal Memorial Govt. College</div>
                                    </div>
                                    <div class="col-md-2 col-sm-6">
                                        <img src="{{ asset('') }}fronted/assets/img/ibrahimkhagc.png" alt="" class="img-fluid">
                                        <div class="client-name">Tangail Ibrahim Kha Govt. College</div>
                                    </div>
                                    <div class="col-md-2 col-sm-6">
                                        <img src="{{ asset('') }}fronted/assets/img/cphs.png" alt="" class="img-fluid">
                                        <div class="client-name">Chhagalnaiya Govt. Pilot High School</div>
                                    </div>
                                    <div class="col-md-2 col-sm-6">
                                        <img src="{{ asset('') }}fronted/assets/img/ccgc.png" alt="" class="img-fluid">
                                        <div class="client-name">Chauddagram Govt. College</div>
                                    </div>
                                    <div class="col-md-2 col-sm-6">
                                        <img src="{{ asset('') }}fronted/assets/img/3377.jpg" alt="" class="img-fluid">
                                        <div class="client-name">Habiganj Shahjalal Govt. College</div>
                                    </div>
                                    <div class="col-md-2 col-sm-6">
                                        <img src="{{ asset('') }}fronted/assets/img/pmths.jpg" alt="" class="img-fluid">
                                        <div class="client-name">Dhaka Purana Mogholtuli High School</div>
                                    </div>
                                    <div class="col-md-2 col-sm-6">
                                        <img src="{{ asset('') }}fronted/assets/img/metro.jpg" alt="" class="img-fluid">
                                        <div class="client-name">Dhaka Metropolitan School & College</div>
                                    </div>
                                </div>
                            </div>
                            <a href="{{'/clients'}}"><button class="btn btn-info" style="float: right;margin-top: 33px;">See More</button><br><br></a><br><br>
                        </div>
                    </div>
                    <!-- all data end -->
                </div>
            </div>
        </div>
        <!-- clients end  -->

        <!-- Fact Start -->
        <div class="container fact py-5 border rounded-3  mb-2">
            <div class="container ">
                <div class="row">
                    <div class="col-lg-3 wow fadeIn" data-wow-delay=".1s">
                        <div class="d-flex counter">
                            <h1 class="me-3 text-primary counter-value">99</h1>
                            <h5 class="text-white mt-1">Success in getting happy customer</h5>
                        </div>
                    </div>
                    <div class="col-lg-3 wow fadeIn" data-wow-delay=".3s">
                        <div class="d-flex counter">
                            <h1 class="me-3 text-primary counter-value">25</h1>
                            <h5 class="text-white mt-1">Thousands of successful business</h5>
                        </div>
                    </div>
                    <div class="col-lg-3 wow fadeIn" data-wow-delay=".5s">
                        <div class="d-flex counter">
                            <h1 class="me-3 text-primary counter-value">120</h1>
                            <h5 class="text-white mt-1">Total clients who love HighTech</h5>
                        </div>
                    </div>
                    <div class="col-lg-3 wow fadeIn" data-wow-delay=".7s">
                        <div class="d-flex counter">
                            <h1 class="me-3 text-primary counter-value">5</h1>
                            <h5 class="text-white mt-1">Stars reviews given by satisfied clients</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Fact End -->
  
        <!-- Testimonial Start -->
        <div class="container-fluid testimonial py-5 ">
            <div class="container">
                <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
                    <h1 class="text-primary">Our Testimonial</h1>
                    <h5>Our Client Saying!</h5>
                </div>

                <div class="owl-carousel testimonial-carousel wow fadeIn" data-wow-delay=".5s">
                    <div class="testimonial-item border p-4">
                        <div class=" d-flex align-items-center">
                            <div class="">
                                <img src="{{ asset('') }}fronted/assets/img/manicon.png" alt="">
                            </div>
                            <div class="ms-4">
                                <h5 class="text-secondary">Moktar Hossain</h5>
                                <p class="m-0 pb-3">Principal, Feni Governtment College</p>
                                <div class="d-flex pe-5">
                                    <i class="fas fa-star me-1 text-primary"></i>
                                    <i class="fas fa-star me-1 text-primary"></i>
                                    <i class="fas fa-star me-1 text-primary"></i>
                                    <i class="fas fa-star me-1 text-primary"></i>
                                    <i class="fas fa-star me-1 text-primary"></i>
                                </div>
                            </div>
                        </div>
                        <div class="border-top mt-4 pt-3">
                            <p class="mb-0"></p>
                        </div>
                    </div>
                    <div class="testimonial-item border p-4">
                        <div class="d-flex align-items-center">
                            <div class="">
                                <img src="{{ asset('') }}fronted/assets/img/womanicon.png" alt="">
                            </div>
                            <div class="ms-4">
                                <h5 class="text-secondary">Professor Kamrun Nahar</h5>
                                <p class="m-0 pb-3">Principal, Govt Zia Women's College</p>
                                <div class="d-flex pe-5">
                                    <i class="fas fa-star me-1 text-primary"></i>
                                    <i class="fas fa-star me-1 text-primary"></i>
                                    <i class="fas fa-star me-1 text-primary"></i>
                                    <i class="fas fa-star me-1 text-primary"></i>
                                    <i class="fas fa-star me-1 text-primary"></i>
                                </div>
                            </div>
                        </div>
                        <div class="border-top mt-4 pt-3">
                            <p class="mb-0"></p>
                        </div>
                    </div>
                    <div class="testimonial-item border p-4">
                        <div class="d-flex align-items-center">
                            <div class="">
                                <img src="{{ asset('') }}fronted/assets/img/manicon.png" alt="">
                            </div>
                            <div class="ms-4">
                                <h5 class="text-secondary">Professor Mohammad Khalilur Rahman</h5>
                                <p class="m-0 pb-3">Principal, Chagalnaya Govt College</p>
                                <div class="d-flex pe-5">
                                    <i class="fas fa-star me-1 text-primary"></i>
                                    <i class="fas fa-star me-1 text-primary"></i>
                                    <i class="fas fa-star me-1 text-primary"></i>
                                    <i class="fas fa-star me-1 text-primary"></i>
                                    <i class="fas fa-star me-1 text-primary"></i>
                                </div>
                            </div>
                        </div>
                        <div class="border-top mt-4 pt-3">
                            <p class="mb-0"></p>
                        </div>
                    </div>
                    <div class="testimonial-item border p-4">
                        <div class=" d-flex align-items-center">
                            <div class="">
                                <img src="{{ asset('') }}fronted/assets/img/manicon.png" alt="">
                            </div>
                            <div class="ms-4">
                                <h5 class="text-secondary">Mohammad Moazzem Hossain</h5>
                                <p class="m-0 pb-3">Principal, Chagalnaya Govt. Pilot High School</p>
                                <div class="d-flex pe-5">
                                    <i class="fas fa-star me-1 text-primary"></i>
                                    <i class="fas fa-star me-1 text-primary"></i>
                                    <i class="fas fa-star me-1 text-primary"></i>
                                    <i class="fas fa-star me-1 text-primary"></i>
                                    <i class="fas fa-star me-1 text-primary"></i>
                                </div>
                            </div>
                        </div>
                        <div class="border-top mt-4 pt-3">
                            <p class="mb-0"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Testimonial End -->


        <!-- support Start -->
        <div class="container-fluid support py-5 ">
            <div class="container">
                <div class="support_main_content">
                    <div class="row">
                        <div class="col-lg-8 col-12 wow fadeIn ">
                            <div class="support-text text-sm-center text-md-start">
                                <h3>Not sure where to Start?</h3>
                                <span>Talk to one of our hosting specialist who will review your needs and propose a tailored hosting solution that will match your specific business reality and needs. </span>
                                <ul class="support-list">
                                    <li>
                                        <a href="#" class="support-box">
                                            <i class="fas fa-comment-alt"></i>
                                            <p>Sales Live Chat</p>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
          
        <!-- support End -->
     
        @endsection