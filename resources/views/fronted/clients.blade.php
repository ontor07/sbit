@extends('fronted.layouts.master')

@section('content')

    <!-- Navbar Start -->
    <div class="container-fluid  page-header ">

        @include('fronted.layouts.navbar')
        
        <div class="container text-center py-5">
            <h6 class="display-2 text-white mb-4 mt-1 animated slideInDown">Our Clients</h6>
        
        </div>
    </div>
<!-- Navbar End -->

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
                                        <div class="client-name">Dubai2BD</div>
                                    </div>
                                    <div>
                                        <img src="{{ asset('') }}fronted/assets/img/buynfeel.png" alt="" class="img-fluid">
                                        <div class="client-name">Buynfeel</div>
                                    </div>
                                    <div>
                                        <img src="{{asset('') }}Fronted/assets/img/feniex.jpg" alt="" class="img-fluid">
                                        <div class="client-name">FeniExpress</div>
                                    </div>
                                    <div>
                                        <img src="{{ asset('') }}fronted/assets/img/amcables.png" alt="" class="img-fluid">
                                        <div class="client-name">Am Cables</div>
                                    </div>
                                    <div>
                                        <img src="{{ asset('') }}fronted/assets/img/fgc.png" alt="" class="img-fluid">
                                        <div class="client-name">Feni Government College</div>         
                                    </div>
                                    <div>
                                        <img src="{{ asset('') }}fronted/assets/img/zmc.png" alt="" class="img-fluid">
                                        <div class="client-name">Feni Government Zia Mohila College</div>     
                                    </div>
                                    <div>
                                        <img src="{{ asset('') }}fronted/assets/img/ibrahimkhagc.png" alt="" class="img-fluid">
                                        <div class="client-name">Tangail Ibrahim Kha Government College</div>   
                                    </div>
                                    <div>
                                        <img src="{{ asset('') }}fronted/assets/img/arifenter.png" alt="" class="img-fluid">
                                        <div class="client-name">Arif Enterprise</div>
                                    </div>
                                    <div>
                                        <img src="{{ asset('') }}fronted/assets/img/bhorbazar.png" alt="" class="img-fluid">
                                        <div class="client-name">Bhorbazar Poultry</div>
                                    </div>
                                    <div>
                                        <img src="{{ asset('') }}fronted/assets/img/cpc.png" alt="" class="img-fluid">
                                        <div class="client-name">Chowdhary Poultry Complex</div>
                                    </div>
                                    <div>
                                        <img src="{{ asset('') }}fronted/assets/img/cgc.jpg" alt="" class="img-fluid">
                                        <div class="client-name">Chhagalnaiya Government College</div>
                                    </div>
                                    <div>
                                        <img src="{{ asset('') }}fronted/assets/img/fenireport.jpg" alt="" class="img-fluid">
                                        <div class="client-name">Feni Report</div>   
                                    </div>
                                    <div>
                                        <img src="{{ asset('') }}fronted/assets/img/5.png" alt="" class="img-fluid">
                                        <div class="client-name">Feni News</div>     
                                    </div>
                                    <div>
                                        <img src="{{ asset('') }}fronted/assets/img/nb52.jpg" alt="" class="img-fluid">
                                        <div class="client-name">News Bangla 52</div>
                                    </div>
                                    <div>
                                        <img src="{{ asset('') }}fronted/assets/img/shahosikantho.png" alt="" class="img-fluid">
                                        <div class="client-name">Shahosi Kantho</div>
                                    </div>
                                    <div>
                                        <img src="{{ asset('') }}fronted/assets/img/banglanewsfeeds.png" alt="" class="img-fluid">
                                        <div class="client-name">BanglaNewsFeeds.com</div>
                                    </div>
                                    <div>
                                        <img src="{{ asset('') }}fronted/assets/img/chhagalnaiya.png" alt="" class="img-fluid">
                                        <div class="client-name">Chhagalnaiya.com</div>
                                    </div>
                                    <div>
                                        <img src="{{ asset('') }}fronted/assets/img/cgc.png" alt="" class="img-fluid">
                                        <div class="client-name">Chauddagram Government College</div>
                                    </div>
                                    <div>
                                        <img src="{{ asset('') }}fronted/assets/img/fixedc.jpg" alt="" class="img-fluid">
                                        <div class="client-name">Fixed Courier</div>
                                    </div>
                                    <div>
                                        <img src="{{ asset('') }}fronted/assets/img/cphs.png" alt="" class="img-fluid">
                                        <div class="client-name">Chhagalnaiya Government Pilot High School</div>
                                    </div>
                                    <div>
                                        <img src="{{ asset('') }}fronted/assets/img/cpghs.png" alt="" class="img-fluid">
                                        <div class="client-name">Chhagalnaiya Government Girls Pilot High School</div>
                                    </div>
                                    
                                    <div>
                                        <img src="{{ asset('') }}fronted/assets/img/metro.jpg" alt="" class="img-fluid">
                                        <div class="client-name">Metropolitan School and College</div> 
                                    </div>
                                    <div>
                                        <img src="{{ asset('') }}fronted/assets/img/pmths.jpg" alt="" class="img-fluid">
                                        <div class="client-name">Purana Mogholtuli High School</div>
                                    </div>
                                    
                                    <div>
                                        <img src="{{ asset('') }}fronted/assets/img/dubaigallery.jpeg" alt="" class="img-fluid">
                                        <div class="client-name">Dubai Gallery</div>
                                    </div>
                                    <div>
                                        <img src="{{ asset('') }}fronted/assets/img/c-1.png" alt="" class="img-fluid">
                                        <div class="client-name">Muktir Ekattor</div>
                                    </div>
                                    <div>
                                        <img src="{{ asset('') }}fronted/assets/img/freebazarbd.jpg" alt="" class="img-fluid">
                                        <div class="client-name">Free Bazar BD</div>
                                    </div>
                                    <div>
                                        <img src="{{ asset('') }}fronted/assets/img/fenisupernet.png" alt="" class="img-fluid">
                                        <div class="client-name">Feni Supernet</div>
                                    </div>
                                    <div>
                                        <img src="{{ asset('') }}fronted/assets/img/itpark.png" alt="" class="img-fluid">
                                        <div class="client-name">Chhagalnaiya Government Pilot High School</div>
                                    </div>
                                    <div>
                                        <img src="{{ asset('') }}fronted/assets/img/motomotion.png" alt="" class="img-fluid">
                                        <div class="client-name">Motomotion BD</div>
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
                                        <div class="client-name">Dubai2BD</div>
                                    </div>
                                    <div>
                                        <img src="{{ asset('') }}fronted/assets/img/buynfeel.png" alt="" class="img-fluid">
                                        <div class="client-name">Buynfeel</div>
                                    </div>
                                    <div>
                                        <img src="{{asset('') }}Fronted/assets/img/feniex.jpg" alt="" class="img-fluid">
                                        <div class="client-name">Feni Express</div>
                                    </div>
                                    <div>
                                        <img src="{{ asset('') }}fronted/assets/img/amcables.png" alt="" class="img-fluid">
                                        <div class="client-name">Am Cables</div>
                                    </div>
                                    <div>
                                        <img src="{{ asset('') }}fronted/assets/img/dubaigallery.jpeg" alt="" class="img-fluid">
                                        <div class="client-name">Dubai Gallery</div>
                                    </div>
                                    <div>
                                        <img src="{{ asset('') }}fronted/assets/img/freebazarbd.jpg" alt="" class="img-fluid">
                                        <div class="client-name">Free Bazar BD</div>
                                    </div>
                                    <div>
                                        <img src="{{ asset('') }}fronted/assets/img/fenisupernet.png" alt="" class="img-fluid">
                                        <div class="client-name">Feni Supernet</div>
                                    </div>
                                    <div>
                                        <img src="{{ asset('') }}fronted/assets/img/itpark.png" alt="" class="img-fluid">
                                        <div class="client-name">IT Park</div>
                                    </div>
                                    <div>
                                        <img src="{{ asset('') }}fronted/assets/img/motomotion.png" alt="" class="img-fluid">
                                        <div class="client-name">Motomotion BD</div>
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
                                        <div class="client-name">Feni Government College</div>
                                    </div>
                                    <div>
                                        <img src="{{ asset('') }}fronted/assets/img/fpi.png" alt="" class="img-fluid">
                                        <div class="client-name">Feni Polytechnic Institute</div>
                                    </div>
                                    <div>
                                        <img src="{{ asset('') }}fronted/assets/img/fci.jpg" alt="" class="img-fluid">
                                        <div class="client-name">Feni Computer Institute</div>
                                    </div>
                                    <div>
                                        <img src="{{ asset('') }}fronted/assets/img/spi.png" alt="" class="img-fluid">
                                        <div class="client-name">Sylhet Polytechnic Institute</div>
                                    </div>
                                    <div>
                                        <img src="{{ asset('') }}fronted/assets/img/zmc.png" alt="" class="img-fluid">
                                        <div class="client-name">Feni Government Zia Mohila College</div>
                                    </div>
                                    <div>
                                        <img src="{{ asset('') }}fronted/assets/img/imc.jpg" alt="" class="img-fluid">
                                        <div class="client-name">Feni Iqbal Memorial Govt. College</div>
                                    </div>
                                    <div>
                                        <img src="{{ asset('') }}fronted/assets/img/ibrahimkhagc.png" alt="" class="img-fluid">
                                        <div class="client-name">Tangail Ibrahim Kha Government College</div>
                                    </div>
                                    <div>
                                        <img src="{{ asset('') }}fronted/assets/img/cphs.png" alt="" class="img-fluid">
                                        <div class="client-name">Chhagalnaiya Government Pilot High School</div>
                                    </div>
                                    <div>
                                        <img src="{{ asset('') }}fronted/assets/img/ccgc.png" alt="" class="img-fluid">
                                        <div class="client-name">Chauddagram Government College</div>
                                    </div>
                                    <div>
                                        <img src="{{ asset('') }}fronted/assets/img/pmths.jpg" alt="" class="img-fluid">
                                        <div class="client-name">Purana Mogholtuli High School</div>
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
                                        <div class="client-name">Arif Enterprise</div>
                                    </div>
                                    <div>
                                        <img src="{{ asset('') }}fronted/assets/img/bhorbazar.png" alt="" class="img-fluid">
                                        <div class="client-name">Bhorbazar Poultry</div>
                                    </div>
                                    <div>
                                        <img src="{{ asset('') }}fronted/assets/img/cpc.png" alt="" class="img-fluid">
                                        <div class="client-name">Chowdhary Poultry Complex</div>
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
                                        <img src="{{ asset('') }}fronted/assets/img/c-1.png" alt="" class="img-fluid">
                                        <div class="client-name">Muktir Ekattor</div>
                                    </div>
                                    <div>
                                        <img src="{{ asset('') }}fronted/assets/img/fenireport.jpg" alt="" class="img-fluid">
                                        <div class="client-name">Feni Report</div>   
                                    </div>
                                    <div>
                                        <img src="{{ asset('') }}fronted/assets/img/5.png" alt="" class="img-fluid">
                                        <div class="client-name">Feni News</div>     
                                    </div>
                                    <div>
                                        <img src="{{ asset('') }}fronted/assets/img/nb52.jpg" alt="" class="img-fluid">
                                        <div class="client-name">News Bangla 52</div>
                                    </div>
                                    <div>
                                        <img src="{{ asset('') }}fronted/assets/img/shahosikantho.png" alt="" class="img-fluid">
                                        <div class="client-name">Shahosi Kantho</div>
                                    </div>
                                    <div>
                                        <img src="{{ asset('') }}fronted/assets/img/banglanewsfeeds.png" alt="" class="img-fluid">
                                        <div class="client-name">BanglaNewsFeeds.com</div>
                                    </div>
                                    <div>
                                        <img src="{{ asset('') }}fronted/assets/img/chhagalnaiya.png" alt="" class="img-fluid">
                                        <div class="client-name">Chhagalnaiya.com</div>
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
                                        <div class="client-name">ATL Group</div>
                                    </div>
                                    <div>
                                        <img src="{{ asset('') }}fronted/assets/img/ns.png" alt="" class="img-fluid">
                                        <div class="client-name">NS Enterprise</div>
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
                                        <div class="client-name">Fixed Courier</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- courier end -->
                    </div>
                </div>
            </div>
            <!-- clients end  -->

@endsection

