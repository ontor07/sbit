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
                    Data Entry is regarded as the most important tool which helps to organize information in a company or industry. The job needs immense concentration and attention to every detail which is needed to be recorded for study or research. This helps to keep all the details of invoice, salary, and tax bills to be recorded and reminded when necessary. For a successful business to run it is essential to have accurate data entry.
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 wow fadeIn" data-wow-delay=".3s">
                    <div class="programme">
                        <img src="{{ asset('') }}fronted/assets/img/programme_icon/data_entry.jpg" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 wow fadeIn" data-wow-delay=".5s">
                    <h3 class="text-dark text-center"><strong>Course Module</strong></h3><br><br>
                    <div class="row text-dark">
                        <p><i class="fas fa-object-group"></i> Online Data Entry Services</p>
                        <p><i class="fas fa-object-group"></i> Offline Data Entry Services</p>
                        <p><i class="fas fa-object-group"></i> Product/Catalog Data Entry Services</p>
                        <p><i class="fas fa-object-group"></i> Image Data Entry Services</p>
                        <p><i class="fas fa-object-group"></i> Documents & PDF Data Entry Services</p>
                        <p><i class="fas fa-object-group"></i> Online Bills & Forms Data Entry Services</p>
                        <p><i class="fas fa-object-group"></i> Online Data Capture Services</p>
                        <p><i class="fas fa-object-group"></i> Questionnaire/Survey Data Entry</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 wow fadeIn" data-wow-delay=".5s">
                    <div class="image_gallery">
                        <div>
                            <img src="{{ asset('') }}fronted/assets/img/programme_icon/excel.png" alt="" class="img-fluid">
                        </div>
                        <div>
                            <img src="{{ asset('') }}fronted/assets/img/programme_icon/database.png" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->  

@endsection

