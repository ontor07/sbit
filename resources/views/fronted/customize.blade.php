@extends('fronted.layouts.master')

@section('content')

    <!-- Navbar Start -->
    <div class="container-fluid  page-header ">

        @include('fronted.layouts.navbar')
        
        <div class="container text-center py-5">
            <h4 class="display-2 text-white mb-4 mt-1 animated slideInDown">Customize Software</h4>
        
        </div>
    </div>
    <!-- Navbar End -->

    <!-- About Start -->
    <div class="container-fluid py-5" style="background: #fff;">
        <div class="container pt-5">
            <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s">
                <h1 class="text-primary">About Customize Software Course</h1>
                <!-- <h5>About  Agency And It's Innovative IT Solutions</h5> -->
            </div>
            <div class="row g-5">
                <div class="col-lg-12 col-md-6 col-sm-12 wow fadeIn" data-wow-delay=".3s">
                    <div class="banner_text">
                        <div class="row">
                            <div class="col-4">
                                <ul>
                                    <li>Duration
                                        <span>4 Month</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-4">
                                <ul>
                                    <li>Lectures
                                        <span>30</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-4">
                                <ul>
                                    <li>Projects
                                        <span>10</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 wow fadeIn" data-wow-delay=".3s">
                    <h3 class="text-dark text-center"><strong>About Course</strong></h3><br><br>
                    Custom software is software that is developed specifically for some specific organization or other user. As such, it can be contrasted with the use of out-of-the-box software packages developed for the mass market, such as commercial off-the-shelf software, or existing free software.
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 wow fadeIn" data-wow-delay=".3s">
                    <div class="programme">
                        <img src="{{ asset('') }}fronted/assets/img/programme_icon/schema.webp" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->  

@endsection

