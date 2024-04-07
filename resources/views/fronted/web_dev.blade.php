@extends('fronted.layouts.master')

@section('content')

    <!-- Navbar Start -->
    <div class="container-fluid  page-header ">

        @include('fronted.layouts.navbar')
        
        <div class="container text-center py-5">
            <h4 class="display-2 text-white mb-4 mt-1 animated slideInDown">Web Developement</h4>
        
        </div>
    </div>
<!-- Navbar End -->

    <!-- About Start -->
    <div class="container-fluid py-5" style="background: #fff;">
        <div class="container pt-5">
            <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s">
                <h1 class="text-primary">About Web Developement Course</h1>
                <!-- <h5>PHP Laravel Programme With Database Management System</h5> -->
            </div>
            <div class="row g-5">
                <div class="col-lg-12 col-md-6 col-sm-12 wow fadeIn" data-wow-delay=".3s">
                    <div class="banner_text">
                        <div class="row">
                            <div class="col-4">
                                <ul>
                                    <li>Duration
                                        <span>5 Month</span>
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
                    
                    Most of the companies prioritize the view of their websites and spend almost 5000 dollars on a monthly basis to rank the site on the first page of search engines. SEO sorts out the pages based on the search keywords and shows the most relevant websites on the first page. Our course includes everything related to the search engine work process, from the basic to advanced concepts, to gradually improve your competence. You will also learn on and off-page SEO, strategies to make web-friendly content and solve practical projects.
                    
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 wow fadeIn" data-wow-delay=".3s">
                    <div class="programme">
                        <img src="{{ asset('') }}fronted/assets/img/programme_icon/programme.jpg" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 wow fadeIn" data-wow-delay=".5s">
                    <h3 class="text-dark text-center"><strong>Course Module</strong></h3><br><br>
                    <div class="row text-dark">
                        <p><i class="fas fa-database"></i> MYSQL</p>
                        
                        <p><i class="fab fa-js"></i> JQUERY</p>
                        
                        <p><i class="fab fa-js"></i> AJAX</p>
                        
                        <p><i class="fab fa-php"></i> Object Oriented Programming (OOP) PHP</p>
                        
                        <p><i class="fab fa-php"></i> Raw PHP Coding</p>
                        
                        <p><i class="fab fa-laravel"></i> Laravel PHP Framework</p>
                        
                        <p><i class="fab fa-laravel"></i> Dynamic Website Development</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 wow fadeIn" data-wow-delay=".5s">
                    <div class="image_gallery">
                        <div>
                            <img src="{{ asset('') }}fronted/assets/img/programme_icon/MYSQL.png" alt="" class="img-fluid">
                        </div>
                        <div>
                            <img src="{{ asset('') }}fronted/assets/img/programme_icon/laravel.png" alt="" class="img-fluid">
                        </div> 
                        <div>
                            <img src="{{ asset('') }}fronted/assets/img/programme_icon/jquery.png" alt="" class="img-fluid">
                        </div> 
                        <div>
                            <img src="{{ asset('') }}fronted/assets/img/programme_icon/php.png" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->  

@endsection

