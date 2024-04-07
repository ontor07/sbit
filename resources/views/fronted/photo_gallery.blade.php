@extends('fronted.layouts.master')

@section('content')

    <!-- Navbar Start -->
    <div class="container-fluid  page-header ">

        @include('fronted.layouts.navbar')
        
        <div class="container text-center py-5">
            <h4 class="display-2 text-white mb-4 mt-1 animated slideInDown">Photo Gallery</h4>
        
        </div>
    </div>
<!-- Navbar End -->

    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s">
                <h1 class="text-primary">Photo Gallery</h1>
                <!-- <h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit, iste esse aliquid neque ducimus voluptas porro quas iure! Maxime, praesentium natus! Expedita odio labore magni recusandae molestias minus, esse perspiciatis?</h5> -->
            </div>
            <div class="row g-5">
                
            </div>
        </div>
    </div>
    <!-- About End -->  
    
    <div class="container-fluid">
        <div class="container">
            <div class="gallery-wrapper">
                <div class="gallery-inner">
                    <div class="gallery-img">
                        <img src="https://demo.epic-webdesign.com/tf-fable/cafe/images/food2.jpg" alt="">
                    </div>
                    <div class="gallery-img">
                        <img src="https://demo.epic-webdesign.com/tf-fable/cafe/images/food3.jpg" alt="">
                    </div>
                    <div class="gallery-img">
                        <img src="https://demo.epic-webdesign.com/tf-fable/cafe/images/food10.jpg" alt="">
                    </div>
                    <div class="gallery-img">
                        <img src="https://demo.epic-webdesign.com/tf-fable/cafe/images/food5.jpg" alt="">
                    </div>
                    <div class="gallery-img">
                        <img src="https://demo.epic-webdesign.com/tf-fable/cafe/images/food6.jpg" alt="">
                    </div>
                    <div class="gallery-img">
                        <img src="https://demo.epic-webdesign.com/tf-fable/cafe/images/food8.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    

<!-- Template Javascript -->
<script src="{{ asset('') }}fronted/assets/js/photo_gallery.js"></script>
@endsection