@extends('fronted.layouts.master')

@section('content')

    <!-- Navbar Start -->
    <div class="container-fluid  page-header ">

        @include('fronted.layouts.navbar')
        
        <div class="container text-center py-5">
            <h4 class="display-2 text-white mb-4 mt-1 animated slideInDown">Web Design</h4>
        
        </div>
    </div>
<!-- Navbar End -->

    <!-- About Start -->
    <div class="container-fluid py-5" style="background: #fff;">
        <div class="container pt-5">
            <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s">
                <h1 class="text-primary">About Web Design Course</h1>
                <!-- <h5>About  Agency And It's Innovative IT Solutions</h5> -->
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
                                        <span>46</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-4">
                                <ul>
                                    <li>Projects
                                        <span>4</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 wow fadeIn" data-wow-delay=".3s">
                    <h3 class="text-dark text-center"><strong>About Course</strong></h3><br><br>
                    A web designer is responsible for designing the interface of a website which includes a navigation system, text, files, pictures, audio, video and other aspects. You need to have detailed concepts and practical experience to excel in this field. Considering this fact, we have designed our course with coding and creative projects to gradually increase your competency. At the end of the course, you will be able to design your own website which can be a great addition to your cv. 
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 wow fadeIn" data-wow-delay=".3s">
                    <div class="programme">
                        <img src="{{ asset('') }}fronted/assets/img/programme_icon/web_design.png" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 wow fadeIn" data-wow-delay=".5s">
                    <h3 class="text-dark text-center"><strong>Course Module</strong></h3><br><br>
                    <div class="row text-dark">
                        <p><i class="fab fa-html5"></i> Introduction Of HTML</p>
                        <p><i class="fab fa-html5"></i> HTML & HTML 5</p>
                        <p><i class="fab fa-css3-alt"></i> CSS3</p>
                        <p><i class="fab fa-css3-alt"></i> CSS3 Animation Effect</p>
                        <p><i class="fab fa-bootstrap"></i> BOOTSTRAP</p>
                        <p><i class="fab fa-js"></i> Javascript</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 wow fadeIn" data-wow-delay=".5s">
                    <div class="image_gallery">
                        <div>
                            <img src="{{ asset('') }}fronted/assets/img/programme_icon/html.png" alt="" class="img-fluid">
                        </div>
                        <div>
                            <img src="{{ asset('') }}fronted/assets/img/programme_icon/css.png" alt="" class="img-fluid">
                        </div>
                        <div>
                            <img src="{{ asset('') }}fronted/assets/img/programme_icon/js.png" alt="" class="img-fluid">
                        </div>
                        <div>
                            <img src="{{ asset('') }}fronted/assets/img/programme_icon/bootstrap.png" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->  

@endsection

