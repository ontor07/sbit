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
                        <img src="{{ asset('') }}fronted/assets/img/photo_gallery/297823400_444118387728169_307675591879714220_n.jpg" alt="" class="img-fluid"> 
                    </div>
                    <div class="gallery-img">
                        <img src="{{ asset('') }}fronted/assets/img/photo_gallery/298065971_444118197728188_8572223107691419408_n.jpg" alt="" class="img-fluid"> 
                    </div>
                    <div class="gallery-img">
                        <img src="{{ asset('') }}fronted/assets/img/photo_gallery/298620324_444117551061586_417428412640436338_n.jpg" alt="" class="img-fluid"> 
                    </div>
                    <div class="gallery-img">
                        <img src="{{ asset('') }}fronted/assets/img/photo_gallery/354573474_667421262064546_1921298831171573291_n.jpg" alt="" class="img-fluid"> 
                    </div>
                    <div class="gallery-img">
                        <img src="{{ asset('') }}fronted/assets/img/photo_gallery/368845954_706807741459231_7360259056992716185_n.jpg" alt="" class="img-fluid"> 
                    </div>
                    <div class="gallery-img">
                        <img src="{{ asset('') }}fronted/assets/img/photo_gallery/369342852_706807991459206_6299981086978578721_n.jpg" alt="" class="img-fluid"> 
                    </div>
                    <div class="gallery-img">
                        <img src="{{ asset('') }}fronted/assets/img/photo_gallery/369351248_706794614793877_7159887613140374286_n.jpg" alt="" class="img-fluid"> 
                    </div>
                    <div class="gallery-img">
                        <img src="{{ asset('') }}fronted/assets/img/photo_gallery/369366377_706807958125876_7601171915669131977_n.jpg" alt="" class="img-fluid"> 
                    </div>
                    <div class="gallery-img">
                        <img src="{{ asset('') }}fronted/assets/img/photo_gallery/369445334_706806854792653_3993483308885579256_n.jpg" alt="" class="img-fluid"> 
                    </div>
                    <div class="gallery-img">
                        <img src="{{ asset('') }}fronted/assets/img/photo_gallery/370136522_706796784793660_5802392562034130095_n.jpg" alt="" class="img-fluid"> 
                    </div>
                    <div class="gallery-img">
                        <img src="{{ asset('') }}fronted/assets/img/photo_gallery/372836484_710969111043094_3424876561520154826_n.jpg" alt="" class="img-fluid"> 
                    </div>
                    <div class="gallery-img">
                        <img src="{{ asset('') }}fronted/assets/img/photo_gallery/378827248_721233760016629_361007744152670973_n.jpg" alt="" class="img-fluid"> 
                    </div>
                    <div class="gallery-img">
                        <img src="{{ asset('') }}fronted/assets/img/photo_gallery/387802795_737555985051073_3443276810376548338_n.jpg" alt="" class="img-fluid"> 
                    </div>
                    <div class="gallery-img">
                        <img src="{{ asset('') }}fronted/assets/img/photo_gallery/391713759_737556218384383_6030230575615886478_n.jpg" alt="" class="img-fluid"> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    

<!-- Template Javascript -->
<script src="{{ asset('') }}fronted/assets/js/photo_gallery.js"></script>
@endsection