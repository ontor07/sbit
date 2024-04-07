@extends('fronted.layouts.master')

@section('content')

    <!-- Navbar Start -->
    <div class="container-fluid  page-header ">

        @include('fronted.layouts.navbar')
        
        <div class="container text-center py-5">
            <h4 class="display-2 text-white mb-4 mt-1 animated slideInDown">E-commerce Site</h4>
        
        </div>
    </div>
<!-- Navbar End -->

    <!-- About Start -->
    <div class="container-fluid py-5" style="background: #fff;">
        <div class="container pt-5">
            <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s">
                <h1 class="text-primary">About E-commerce Site</h1>
                <!-- <h5>PHP Laravel Programme With Database Management System</h5> -->
            </div>
            <div class="row g-5">
                <div class="col-lg-6 col-md-6 col-sm-6 wow fadeIn" data-wow-delay=".3s">
                    <h3 class="text-dark text-center"><strong>About Course</strong></h3><br><br>
                    
                    Most of the companies prioritize the view of their websites and spend almost 5000 dollars on a monthly basis to rank the site on the first page of search engines. SEO sorts out the pages based on the search keywords and shows the most relevant websites on the first page. Our course includes everything related to the search engine work process, from the basic to advanced concepts, to gradually improve your competence. You will also learn on and off-page SEO, strategies to make web-friendly content and solve practical projects.
                    
                </div>
                
            </div>
        </div>
    </div>
    <!-- About End -->  

@endsection

