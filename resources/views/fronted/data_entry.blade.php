@extends('fronted.layouts.master')

@section('content')

    <!-- Navbar Start -->
    <div class="container-fluid  page-header ">

        @include('fronted.layouts.navbar')
        
        <div class="container text-center py-5">
            <h4 class="display-2 text-white mb-4 mt-1 animated slideInDown">Data Entry</h4>
        
        </div>
    </div>
<!-- Navbar End -->

    <!-- About Start -->
    <div class="container-fluid py-5" style="background: #fff;">
        <div class="container pt-5">
            <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s">
                <h1 class="text-primary">About Data Entry Course</h1>
                <!-- <h5>About  Agency And It's Innovative IT Solutions</h5> -->
            </div>
            <div class="row g-5">
                <div class="col-lg-12 col-md-6 col-sm-12 wow fadeIn" data-wow-delay=".3s">
                    <div class="banner_text">
                        <div class="row">
                            <div class="col-4">
                                <ul>
                                    <li>Duration
                                        <span>2 Month</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-4">
                                <ul>
                                    <li>Lectures
                                        <span>25</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-4">
                                <ul>
                                    <li>Projects
                                        <span>5</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 wow fadeIn" data-wow-delay=".3s">
                    <h3 class="text-dark text-center"><strong>About Course</strong></h3><br><br>
                    Considering the growing demand for visual content, marketers are promoting their products through graphical ideas nowadays. The increasing need for graphic designers has unlocked many opportunities for the people who prefer working independently. A study shows, all the companies prioritize their visual acceptance, even a small company spends up to 500 dollars to create a perfect logo. If you are passionate about making designs, this updated Graphic Design course is for you.
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 wow fadeIn" data-wow-delay=".3s">
                    <div class="programme">
                        <img src="{{ asset('') }}fronted/assets/img/programme_icon/emily-bernal-v9vII5gV8Lw-unsplash.jpg" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 wow fadeIn" data-wow-delay=".5s">
                    <h3 class="text-dark text-center"><strong>Course Module</strong></h3><br><br>
                    <div class="row text-dark">
                        <p><i class="fas fa-object-group"></i> Professional Presentation</p>
                        <p><i class="fas fa-object-group"></i> Raster To Vector</p>
                        <p><i class="fas fa-object-group"></i> Invoice Template Design</p>
                        <p><i class="fas fa-object-group"></i> Letterhead Design</p>
                        <p><i class="fas fa-object-group"></i> Brochure Layout</p>
                        <p><i class="fas fa-object-group"></i> Desk & Wall Calendar Design</p>
                        <p><i class="fas fa-object-group"></i> Product Packaging</p>
                        <p><i class="fas fa-object-group"></i> Certificate Template Design</p>
                        <p><i class="fas fa-object-group"></i> Resume & Cover Letter Design</p>
                        <p><i class="fas fa-object-group"></i> Landscape Design</p>
                        <p><i class="fas fa-object-group"></i> Image Clipping</p>
                        <p><i class="fas fa-object-group"></i> Banner / Poster Design</p>
                        <p><i class="fas fa-object-group"></i> Web Banner Design</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 wow fadeIn" data-wow-delay=".5s">
                    <div class="image_gallery">
                        <div>
                            <img src="{{ asset('') }}fronted/assets/img/programme_icon/Adobe_Photoshop_CC_icon.svg.png" alt="" class="img-fluid">
                        </div>
                        <div>
                            <img src="{{ asset('') }}fronted/assets/img/programme_icon/adobe-illustrator.png" alt="" class="img-fluid">
                        </div>
                        <div>
                            <img src="{{ asset('') }}fronted/assets/img/programme_icon/Adobe_InDesign_CC_icon.svg.png" alt="" class="img-fluid">
                        </div>
                        <div>
                            <img src="{{ asset('') }}fronted/assets/img/programme_icon/Adobe_XD_CC_icon.svg.png" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->  

@endsection

