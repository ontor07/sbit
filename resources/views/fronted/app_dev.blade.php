@extends('fronted.layouts.master')

@section('content')

    <!-- Navbar Start -->
    <div class="container-fluid  page-header ">

        @include('fronted.layouts.navbar')
        
        <div class="container text-center py-5">
            <h4 class="display-2 text-white mb-4 mt-1 animated slideInDown">Android App Development</h4>
        
        </div>
    </div>
<!-- Navbar End -->

    <!-- About Start -->
    <div class="container-fluid py-5" style="background: #fff;">
        <div class="container pt-5">
            <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s">
                <h1 class="text-primary">About Android App Development Course</h1>
                <h6>Android is one of the most popular operating system among mobile and tab users. The use of Android devices without apps is unimaginable.</h6>
            </div>
            <div class="row g-5">
                <div class="col-lg-12 col-md-6 col-sm-12 wow fadeIn" data-wow-delay=".3s">
                    <div class="banner_text">
                        <div class="row">
                            <div class="col-4">
                                <ul>
                                    <li>Duration
                                        <span>6 Month</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-4">
                                <ul>
                                    <li>Lectures
                                        <span>40<span>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-4">
                                <ul>
                                    <li>Projects
                                        <span>2</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 wow fadeIn" data-wow-delay=".3s">
                    <h3 class="text-dark text-center"><strong>About Course</strong></h3><br><br>
                    Android is one of the most popular operating system among mobile and tab users. The use of Android devices without apps is unimaginable. Companies are constantly developing their Android apps to provide various information, services. With this popularity of Android devices, Android app development has become a popular profession in the past month. You can build a career in freelancing marketplace or local job sector as a professional in Android App Development. If you want to build a professional or freelancing career in Android App Development, you have to be expert.
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 wow fadeIn" data-wow-delay=".3s">
                    <div class="programme">
                        <img src="{{ asset('') }}fronted/assets/img/programme_icon/app_android.png" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 wow fadeIn" data-wow-delay=".5s">
                    <h3 class="text-dark text-center"><strong>Course Module</strong></h3><br><br>
                    <div class="row text-dark">
                        <p><i class="fab fa-android"></i> Android Development Environment Setup</p>
                        
                        <p><i class="fab fa-android"></i> XML</p>
                        
                        <p><i class="fab fa-android"></i> XML with Java</p>
                        
                        <p><i class="fab fa-android"></i> Inheritance and Encapsulation</p>
                        
                        <p><i class="fab fa-android"></i> Polymorphism and Abstraction</p>
                        
                        <p><i class="fab fa-android"></i> Design Pattern</p>
                        
                        <p><i class="fab fa-android"></i> Generic Collection</p>

                        <p><i class="fab fa-android"></i> Recycler View</p>

                        <p><i class="fab fa-android"></i> Fragment</p>

                        <p><i class="fab fa-android"></i> Local data</p>

                        <p><i class="fab fa-android"></i> Service</p>

                        <p><i class="fab fa-android"></i> Firebase</p>
                        
                        <p><i class="fab fa-android"></i> Jetpack Components</p>
                        
                        <p><i class="fab fa-android"></i> Json Parsing</p>

                        <p><i class="fab fa-android"></i> Monetize and Publish</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 wow fadeIn" data-wow-delay=".5s">
                    
                        <div style="margin-top: 20%;">
                            <img src="{{ asset('') }}fronted/assets/img/programme_icon/iconapp.png" alt="" class="img-fluid">
                        </div>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->  

@endsection