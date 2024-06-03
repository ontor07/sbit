<div class="container">
    <nav class="navbar navbar-expand-lg navbar-dark p-0">
        <a href="{{url('/')}}" class="navbar-brand">
           <img src="{{ asset('') }}fronted/assets/img/logo.png" alt="" width="100px">
        </a>
        <button type="button" class="navbar-toggler ms-auto me-0" data-bs-toggle="collapse"
            data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto">
                <a href="{{url('/')}}" class="nav-item nav-link active">Home</a>
                <a href="{{url('about')}}" class="nav-item nav-link">About</a>

                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Services</a>
                    <div class="dropdown-menu bg-light mt-2">
                        <a href="{{url('/graphic_design')}}" class="dropdown-item">Professional Graphic Design</a>
                        <a href="{{url('/web_design')}}" class="dropdown-item">Web Design</a>
                        <a href="{{url('/web_dev')}}" class="dropdown-item">Software Developement</a>
                        <a href="{{url('/app_dev')}}" class="dropdown-item">Android App Development</a>
                        <a href="{{url('/web_app')}}" class="dropdown-item">Web Application Development</a>
                        <!-- <a href="#" class="dropdown-item">Domain & Hosting Service</a> -->
                        <a href="{{url('/seo')}}" class="dropdown-item">Digital Marketing</a>
                        <a href="{{url('/data_entry')}}" class="dropdown-item">Data Entry</a>
                        <a href="{{url('/customize')}}" class="dropdown-item">Any Customize Software</a>
                        <!-- <a href="#" class="dropdown-item">Internship</a> -->
                    </div>
                </div>
                
                <!-- <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Software </a>
                    <div class="dropdown-menu bg-light mt-2">
                        <a href="{{url('/ecommerce')}}" class="dropdown-item">E-commerce</a>
                        <a href="#" class="dropdown-item">School Management System</a>
                        <a href="#" class="dropdown-item">POS System</a>
                        <a href="#" class="dropdown-item">Pharmacy Management System</a>
                        <a href="#" class="dropdown-item">Restaurant Management</a>
                        <a href="#" class="dropdown-item">Inventory Management System</a>
                    </div>
                </div> -->
                <a href="{{url('team')}}" class="nav-item nav-link">Our Team</a>
                <a href="{{url('photo_gallery')}}" class="nav-item nav-link">Photo Gallery</a>
                <a href="{{url('contact')}}" class="nav-item nav-link">Contact</a>
                <a href="{{url('admission')}}" class="nav-item nav-link text-dark" target="_blank"><button class="btn btn-info">Admission</button></a>
            </div>
           
        </div>
    </nav>
</div>