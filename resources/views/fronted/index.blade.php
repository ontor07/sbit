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
                    <img class="img-fluid" src="{{ asset('') }}fronted/assets/img/banner-img.png" alt="">
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
                    <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".3s">
                        <div class="services-item bg-light">
                            <div class="p-4 text-center services-content">
                                <div class="services-content-icon">
                                    <i class="fa fa-code fa-7x mb-4 text-primary"></i>
                                    <h4 class="mb-3">Web Design</h4>
                                    <p class="mb-4">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum. Aliquam dolor eget urna ultricies tincidunt.</p>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".5s">
                        <div class="services-item bg-light">
                            <div class="p-4 text-center services-content">
                                <div class="services-content-icon">
                                    <i class="fa fa-file-code fa-7x mb-4 text-primary"></i>
                                    <h4 class="mb-3">Web Development</h4>
                                    <p class="mb-4">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum. Aliquam dolor eget urna ultricies tincidunt.</p>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".7s">
                        <div class="services-item bg-light">
                            <div class="p-4 text-center services-content">
                                <div class="services-content-icon">
                                    <i class="fa fa-external-link-alt fa-7x mb-4 text-primary"></i>
                                    <h4 class="mb-3">UI/UX Design</h4>
                                    <p class="mb-4">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum. Aliquam dolor eget urna ultricies tincidunt.</p>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".3s">
                        <div class="services-item bg-light">
                            <div class="p-4 text-center services-content">
                                <div class="services-content-icon">
                                    <i class="fas fa-user-secret fa-7x mb-4 text-primary"></i>
                                    <h4 class="mb-3">Web Security</h4>
                                    <p class="mb-4">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum. Aliquam dolor eget urna ultricies tincidunt.</p>
                                    
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".5s">
                        <div class="services-item bg-light">
                            <div class="p-4 text-center services-content">
                                <div class="services-content-icon">
                                    <i class="fa fa-envelope-open fa-7x mb-4 text-primary"></i>
                                    <h4 class="mb-3">Digital Marketing</h4>
                                    <p class="mb-4">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum. Aliquam dolor eget urna ultricies tincidunt.</p>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".7s">
                        <div class="services-item bg-light">
                            <div class="p-4 text-center services-content">
                                <div class="services-content-icon">
                                    <i class="fas fa-laptop fa-7x mb-4 text-primary"></i>
                                    <h4 class="mb-3">Basic Computer</h4>
                                    <p class="mb-4">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum. Aliquam dolor eget urna ultricies tincidunt.</p>
                                    
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
                            <h1 class="text-primary">Our Project</h1>
                            <h5>Our Recently Completed Projects</h5>
                        </div>
                        

                        <div class="owl-carousel project-carousel wow fadeIn" data-wow-delay=".5s">
                            <div class="project-item border p-4">
                                <div class="align-items-center">
                                    <div class="text-center ">
                                        <h4 class="text-secondary">Web design</h4>
                                    </div>
                                    <div class="">
                                        <img src="{{ asset('') }}fronted/assets/img/project-1.jpg" alt="">
                                    </div>
                                    
                                </div>
                                <div class="border-top  pt-3">
                                    <p class="mb-0">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum aliquam dolor eget urna. Nam volutpat libero sit amet leo cursus, ac viverra eros morbi quis quam mi.</p>
                                </div>
                            </div>
                            <div class="project-item border p-4">
                                <div class="align-items-center">
                                    <div class="text-center ">
                                        <h4 class="text-secondary">Web Development</h4>
                                    </div>
                                    <div class="">
                                        <img src="{{ asset('') }}fronted/assets/img/project-2.jpg" alt="">
                                    </div>
                                    
                                </div>
                                <div class="border-top  pt-3">
                                    <p class="mb-0">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum aliquam dolor eget urna. Nam volutpat libero sit amet leo cursus, ac viverra eros morbi quis quam mi.</p>
                                </div>
                            </div>
                            <div class="project-item border p-4">
                                <div class="align-items-center">
                                    <div class="text-center ">
                                        <h4 class="text-secondary">Digital Marketing</h4>
                                    </div>
                                    <div class="">
                                        <img src="{{ asset('') }}fronted/assets/img/project-3.jpg" alt="">
                                    </div>
                                    
                                </div>
                                <div class="border-top  pt-3">
                                    <p class="mb-0">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum aliquam dolor eget urna. Nam volutpat libero sit amet leo cursus, ac viverra eros morbi quis quam mi.</p>
                                </div>
                            </div>
                            <div class="project-item border p-4">
                                <div class="align-items-center">
                                    <div class="text-center ">
                                        <h4 class="text-secondary">keyword Research</h4>
                                    </div>
                                    <div class="">
                                        <img src="{{ asset('') }}fronted/assets/img/project-4.jpg" alt="">
                                    </div>
                                    
                                </div>
                                <div class="border-top  pt-3">
                                    <p class="mb-0">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum aliquam dolor eget urna. Nam volutpat libero sit amet leo cursus, ac viverra eros morbi quis quam mi.</p>
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
                    <ul class="nav nav-pills mb-3 wow fadeIn justify-content-center" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                          <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Our Website/Softwere</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Ecommerce Website</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">School/College Website</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="pills-inventory-tab" data-bs-toggle="pill" data-bs-target="#pills-inventory" type="button" role="tab" aria-controls="pills-inventory" aria-selected="false" >Inventory Software</button>
                        </li>
                      
                        <li class="nav-item " role="presentation">
                          <button class="nav-link" id="pills-news-tab" data-bs-toggle="pill" data-bs-target="#pills-news" type="button" role="tab" aria-controls="pills-news" aria-selected="false" >News Website</button>
                        </li>
                        <li class="nav-item " role="presentation">
                          <button class="nav-link" id="pills-other-tab" data-bs-toggle="pill" data-bs-target="#pills-other" type="button" role="tab" aria-controls="pills-other" aria-selected="false" >CMS</button>
                        </li>
                        <li class="nav-item " role="presentation">
                          <button class="nav-link" id="pills-courier-tab" data-bs-toggle="pill" data-bs-target="#pills-courier" type="button" role="tab" aria-controls="pills-courier" aria-selected="false" >Courier</button>
                        </li>
                      </ul>
                      <!-- all data start -->
                      <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                            <div class="row">
                                <div class="image-gallery">
                                    <div>
                                        <img src="{{ asset('') }}fronted/assets/img/dubai2bd.jpg" alt="" class="img-fluid">
                                    </div>
                                    <div>
                                        <img src="{{ asset('') }}fronted/assets/img/buynfeel.png" alt="" class="img-fluid">
                                    </div>
                                    <div>
                                        <img src="{{asset('') }}Fronted/assets/img/feniex.jpg" alt="" class="img-fluid">
                                    </div>
                                    <div>
                                        <img src="{{ asset('') }}fronted/assets/img/amcables.png" alt="" class="img-fluid">
                                    </div>
                                    <div>
                                        <img src="{{ asset('') }}fronted/assets/img/fgc.png" alt="" class="img-fluid">         
                                    </div>
                                    <div>
                                        <img src="{{ asset('') }}fronted/assets/img/zmc.png" alt="" class="img-fluid">     
                                    </div>
                                    <div>
                                        <img src="{{ asset('') }}fronted/assets/img/ibrahimkhagc.png" alt="" class="img-fluid">   
                                    </div>
                                    <div>
                                        <img src="{{ asset('') }}fronted/assets/img/arifenter.png" alt="" class="img-fluid">
                                    </div>
                                    <div>
                                        <img src="{{ asset('') }}fronted/assets/img/bhorbazar.png" alt="" class="img-fluid">
                                    </div>
                                    <div>
                                        <img src="{{ asset('') }}fronted/assets/img/cpc.png" alt="" class="img-fluid">
                                    </div>
                                    <div>
                                        <img src="{{ asset('') }}fronted/assets/img/cgc.jpg" alt="" class="img-fluid">
                                    </div>
                                    <div>
                                        <img src="{{ asset('') }}fronted/assets/img/fenireport.jpg" alt="" class="img-fluid">   
                                    </div>
                                    <div>
                                        <img src="{{ asset('') }}fronted/assets/img/5.png" alt="" class="img-fluid">     
                                    </div>
                                    <div>
                                        <img src="{{ asset('') }}fronted/assets/img/nb52.jpg" alt="" class="img-fluid">
                                    </div>
                                    <div>
                                        <img src="{{ asset('') }}fronted/assets/img/shahosikantho.png" alt="" class="img-fluid">
                                    </div>
                                    <div>
                                        <img src="{{ asset('') }}fronted/assets/img/banglanewsfeeds.png" alt="" class="img-fluid">
                                    </div>
                                    <div>
                                        <img src="{{ asset('') }}fronted/assets/img/chhagalnaiya.png" alt="" class="img-fluid">
                                    </div>
                                    <div>
                                        <img src="{{ asset('') }}fronted/assets/img/cgc.png" alt="" class="img-fluid">
                                    </div>
                                    <div>
                                        <img src="{{ asset('') }}fronted/assets/img/arifenter.png" alt="" class="img-fluid">
                                    </div>
                                    <div>
                                        <img src="{{ asset('') }}fronted/assets/img/fixedc.jpg" alt="" class="img-fluid">
                                    </div>
                                    <div>
                                        <img src="{{ asset('') }}fronted/assets/img/bhorbazar.png" alt="" class="img-fluid">
                                    </div>
                                    <div>
                                        <img src="{{ asset('') }}fronted/assets/img/cpc.png" alt="" class="img-fluid">
                                    </div>
                                    <div>
                                        <img src="{{ asset('') }}fronted/assets/img/cphs.png" alt="" class="img-fluid">
                                    </div>
                                    <div>
                                        <img src="{{ asset('') }}fronted/assets/img/cpghs.png" alt="" class="img-fluid">
                                    </div>
                                    <div>
                                        <img src="{{ asset('') }}fronted/assets/img/alhelal.png" alt="" class="img-fluid">
                                    </div>
                                    <div>
                                        <img src="{{ asset('') }}fronted/assets/img/metro.jpg" alt="" class="img-fluid"> 
                                    </div>
                                    <div>
                                        <img src="{{ asset('') }}fronted/assets/img/pmths.jpg" alt="" class="img-fluid">
                                    </div>
                                    
                                    <div>
                                        <img src="{{ asset('') }}fronted/assets/img/dubaigallery.jpeg" alt="" class="img-fluid">
                                    </div>
                                    <div>
                                        <img src="{{ asset('') }}fronted/assets/img/c-1.png" alt="" class="img-fluid">
                                    </div>
                                    <div>
                                        <img src="{{ asset('') }}fronted/assets/img/freebazarbd.jpg" alt="" class="img-fluid">
                                    </div>
                                    <div>
                                        <img src="{{ asset('') }}fronted/assets/img/fenisupernet.png" alt="" class="img-fluid">
                                    </div>
                                    <div>
                                        <img src="{{ asset('') }}fronted/assets/img/itpark.png" alt="" class="img-fluid">
                                    </div>
                                    <div>
                                        <img src="{{ asset('') }}fronted/assets/img/motomotion.png" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- all data end -->

                        <!-- ecommerce start -->
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
                            <div class="row">
                                <div class="image-gallery">
                                    <div>
                                        <img src="{{ asset('') }}fronted/assets/img/dubai2bd.jpg" alt="" class="img-fluid">
                                    </div>
                                    <div>
                                        <img src="{{ asset('') }}fronted/assets/img/buynfeel.png" alt="" class="img-fluid">
                                    </div>
                                    <div>
                                        <img src="{{asset('') }}Fronted/assets/img/feniex.jpg" alt="" class="img-fluid">
                                    </div>
                                    <div>
                                        <img src="{{ asset('') }}fronted/assets/img/amcables.png" alt="" class="img-fluid">
                                    </div>
                                    <div>
                                        <img src="{{ asset('') }}fronted/assets/img/dubaigallery.jpeg" alt="" class="img-fluid">
                                    </div>
                                    <div>
                                        <img src="{{ asset('') }}fronted/assets/img/freebazarbd.jpg" alt="" class="img-fluid">
                                    </div>
                                    <div>
                                        <img src="{{ asset('') }}fronted/assets/img/fenisupernet.png" alt="" class="img-fluid">
                                    </div>
                                    <div>
                                        <img src="{{ asset('') }}fronted/assets/img/itpark.png" alt="" class="img-fluid">
                                    </div>
                                    <div>
                                        <img src="{{ asset('') }}fronted/assets/img/motomotion.png" alt="" class="img-fluid">
                                    </div>   
                                </div>
                            </div>
                        </div>
                        <!-- ecommerce end -->

                        <!-- education start -->
                        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">
                            <div class="row">
                                <div class="image-gallery">
                                    <div>
                                        <img src="{{ asset('') }}fronted/assets/img/fgc.png" alt="" class="img-fluid">         
                                    </div>
                                    <div>
                                        <img src="{{ asset('') }}fronted/assets/img/zmc.png" alt="" class="img-fluid">     
                                    </div>
                                    <div>
                                        <img src="{{ asset('') }}fronted/assets/img/ibrahimkhagc.png" alt="" class="img-fluid">   
                                    </div>
                                    <div>
                                        <img src="{{ asset('') }}fronted/assets/img/cgc.jpg" alt="" class="img-fluid">
                                    </div>
                                    <div>
                                        <img src="{{ asset('') }}fronted/assets/img/cgc.png" alt="" class="img-fluid">
                                    </div>
                                    <div>
                                        <img src="{{ asset('') }}fronted/assets/img/cphs.png" alt="" class="img-fluid">
                                    </div>
                                    <div>
                                        <img src="{{ asset('') }}fronted/assets/img/cpghs.png" alt="" class="img-fluid">
                                    </div>
                                    <div>
                                        <img src="{{ asset('') }}fronted/assets/img/alhelal.png" alt="" class="img-fluid">
                                    </div>
                                    <div>
                                        <img src="{{ asset('') }}fronted/assets/img/metro.jpg" alt="" class="img-fluid"> 
                                    </div>
                                    <div>
                                        <img src="{{ asset('') }}fronted/assets/img/pmths.jpg" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- education end -->
                        
                        <!-- inventory start -->
                        <div class="tab-pane fade" id="pills-inventory" role="tabpanel" aria-labelledby="pills-inventory-tab" tabindex="0">
                            <div class="row">
                                <div class="image-gallery">
                                    <div>
                                        <img src="{{ asset('') }}fronted/assets/img/arifenter.png" alt="" class="img-fluid">
                                    </div>
                                    <div>
                                        <img src="{{ asset('') }}fronted/assets/img/bhorbazar.png" alt="" class="img-fluid">
                                    </div>
                                    <div>
                                        <img src="{{ asset('') }}fronted/assets/img/cpc.png" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- inventory end -->

                        <!-- news start -->
                        <div class="tab-pane fade" id="pills-news" role="tabpanel" aria-labelledby="pills-news-tab" tabindex="0">
                            <div class="row">
                                <div class="image-gallery">
                                    <div>
                                        <img src="{{ asset('') }}fronted/assets/img/fenireport.jpg" alt="" class="img-fluid">   
                                    </div>
                                    <div>
                                        <img src="{{ asset('') }}fronted/assets/img/c-1.png" alt="" class="img-fluid">
                                    </div>
                                    <div>
                                        <img src="{{ asset('') }}fronted/assets/img/5.png" alt="" class="img-fluid">     
                                    </div>
                                    <div>
                                        <img src="{{ asset('') }}fronted/assets/img/nb52.jpg" alt="" class="img-fluid">
                                    </div>
                                    <div>
                                        <img src="{{ asset('') }}fronted/assets/img/shahosikantho.png" alt="" class="img-fluid">
                                    </div>
                                    <div>
                                        <img src="{{ asset('') }}fronted/assets/img/banglanewsfeeds.png" alt="" class="img-fluid">
                                    </div>
                                    <div>
                                        <img src="{{ asset('') }}fronted/assets/img/chhagalnaiya.png" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- news end -->
                        
                        <!-- cms start -->
                        <div class="tab-pane fade" id="pills-other" role="tabpanel" aria-labelledby="pills-other-tab" tabindex="0">
                            <div class="row">
                                <div class="image-gallery">
                                    <div>
                                        <img src="{{ asset('') }}fronted/assets/img/atlgroupbd.png" alt="" class="img-fluid">
                                    </div>
                                    <div>
                                        <img src="{{ asset('') }}fronted/assets/img/ns.png" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- cms end -->
                        
                        <!-- courier start -->
                        <div class="tab-pane fade" id="pills-courier" role="tabpanel" aria-labelledby="pills-courier-tab" tabindex="0">
                            <div class="row">
                                <div class="image-gallery">
                                    <div>
                                        <img src="{{ asset('') }}fronted/assets/img/fixedc.jpg" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- courier end -->
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
  





        <!-- Team Start -->
        <!-- <div class="container-fluid py-5  team">
            <div class="container">
                <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
                    <h1 class="text-primary">Our Team</h1>
                    <h5>Meet our expert Team</h5>
                </div>
                <div class="owl-carousel team-carousel wow fadeIn" data-wow-delay=".5s">
                    <div class="rounded team-item">
                        <div class="team-content">
                            <div class="team-img-icon">
                                <div class="team-img rounded-circle">
                                    <img src="{{ asset('') }}fronted/assets/img/team-1.jpg" class="img-fluid w-100 rounded-circle" alt="">
                                </div>
                                <div class="team-name text-center py-3">
                                    <h4 class="">Full Name</h4>
                                    <p class="m-0">Designation</p>
                                </div>
                                <div class="team-icon d-flex justify-content-center pb-4">
                                    <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i class="fab fa-instagram"></i></a>
                                    <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="rounded team-item">
                        <div class="team-content">
                            <div class="team-img-icon">
                                <div class="team-img rounded-circle">
                                    <img src="{{ asset('') }}fronted/assets/img/team-2.jpg" class="img-fluid w-100 rounded-circle" alt="">
                                </div>
                                <div class="team-name text-center py-3">
                                    <h4 class="">Full Name</h4>
                                    <p class="m-0">Designation</p>
                                </div>
                                <div class="team-icon d-flex justify-content-center pb-4">
                                    <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i class="fab fa-instagram"></i></a>
                                    <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="rounded team-item">
                        <div class="team-content">
                            <div class="team-img-icon">
                                <div class="team-img rounded-circle">
                                    <img src="{{ asset('') }}fronted/assets/img/team-3.jpg" class="img-fluid w-100 rounded-circle" alt="">
                                </div>
                                <div class="team-name text-center py-3">
                                    <h4 class="">Full Name</h4>
                                    <p class="m-0">Designation</p>
                                </div>
                                <div class="team-icon d-flex justify-content-center pb-4">
                                    <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i class="fab fa-instagram"></i></a>
                                    <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="rounded team-item">
                        <div class="team-content">
                            <div class="team-img-icon">
                                <div class="team-img rounded-circle">
                                    <img src="{{ asset('') }}fronted/assets/img/team-4.jpg" class="img-fluid w-100 rounded-circle" alt="">
                                </div>
                                <div class="team-name text-center py-3">
                                    <h4 class="">Full Name</h4>
                                    <p class="m-0">Designation</p>
                                </div>
                                <div class="team-icon d-flex justify-content-center pb-4">
                                    <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i class="fab fa-instagram"></i></a>
                                    <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Team End -->

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
                                <h4 class="text-secondary">Moktar Hossain</h4>
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
                            <p class="mb-0">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum aliquam dolor eget urna. Nam volutpat libero sit amet leo cursus, ac viverra eros morbi quis quam mi.</p>
                        </div>
                    </div>
                    <div class="testimonial-item border p-4">
                        <div class="d-flex align-items-center">
                            <div class="">
                                <img src="{{ asset('') }}fronted/assets/img/womanicon.png" alt="">
                            </div>
                            <div class="ms-4">
                                <h4 class="text-secondary">Professor Kamrun Nahar</h4>
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
                            <p class="mb-0">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum aliquam dolor eget urna. Nam volutpat libero sit amet leo cursus, ac viverra eros morbi quis quam mi.</p>
                        </div>
                    </div>
                    <div class="testimonial-item border p-4">
                        <div class="d-flex align-items-center">
                            <div class="">
                                <img src="{{ asset('') }}fronted/assets/img/manicon.png" alt="">
                            </div>
                            <div class="ms-4">
                                <h4 class="text-secondary">Professor Mohammad Khalilur Rahman</h4>
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
                            <p class="mb-0">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum aliquam dolor eget urna. Nam volutpat libero sit amet leo cursus, ac viverra eros morbi quis quam mi.</p>
                        </div>
                    </div>
                    <div class="testimonial-item border p-4">
                        <div class=" d-flex align-items-center">
                            <div class="">
                                <img src="{{ asset('') }}fronted/assets/img/manicon.png" alt="">
                            </div>
                            <div class="ms-4">
                                <h4 class="text-secondary">Mohammad Moazzem Hossain</h4>
                                <p class="m-0 pb-3">Principal, Chagalnaya Government Pilot High School</p>
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
                            <p class="mb-0">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum aliquam dolor eget urna. Nam volutpat libero sit amet leo cursus, ac viverra eros morbi quis quam mi.</p>
                        </div>
                    </div>
                    <div class="testimonial-item border p-4">
                        <div class=" d-flex align-items-center">
                            <div class="">
                                <img src="{{ asset('') }}fronted/assets/img/manicon.png" alt="">
                            </div>
                            <div class="ms-4">
                                <h4 class="text-secondary">Omar Faruque</h4>
                                <p class="m-0 pb-3">Head Teacher, Al Helal Academy</p>
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
                            <p class="mb-0">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum aliquam dolor eget urna. Nam volutpat libero sit amet leo cursus, ac viverra eros morbi quis quam mi.</p>
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
                                    <li>
                                        <a href="#" class="support-box support-ticket">
                                            <i class="fas fa-ticket-alt"></i>
                                            <p>Sales Live Chat</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="support-box support-call">
                                            <i class="fas fa-phone-square-alt"></i>
                                            <p>Sales Live Chat</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="support-box support-email">
                                            <i class="fas fa-envelope-open-text"></i>
                                            <p>Sales Live Chat</p>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-12 wow fadeIn ">
                            <div class="support-right ">
                                <img src="{{ asset('') }}fronted/assets/img/support-img.webp" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
          
        <!-- support End -->
     
        @endsection