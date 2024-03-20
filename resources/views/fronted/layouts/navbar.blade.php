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
                        <a href="#" class="dropdown-item">Web Design & Developement</a>
                        <a href="#" class="dropdown-item">Android App Development</a>
                        <a href="#" class="dropdown-item">Domain & Hosting Service</a>
                        <a href="#" class="dropdown-item">Search Engine Optimization (SEO)</a>
                        <a href="#" class="dropdown-item">Internship</a>
                        <a href="#" class="dropdown-item">Courses</a>
                    </div>
                </div>
                
                
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Software </a>
                    <div class="dropdown-menu bg-light mt-2">
                        <a href="#" class="dropdown-item">E-commerce</a>
                        <a href="#" class="dropdown-item">School Management System</a>
                        <a href="#" class="dropdown-item">POS System</a>
                        <a href="#" class="dropdown-item">Pharmacy Management System</a>
                        <a href="#" class="dropdown-item">Restaurant Management</a>
                        <a href="#" class="dropdown-item">Inventory Management System</a>
                    </div>
                </div>
                <a href="{{url('team')}}" class="nav-item nav-link">Our Team</a>
                <a href="{{url('photo_gallery')}}" class="nav-item nav-link">Photo Gallery</a>
                <a href="{{url('contact')}}" class="nav-item nav-link">Contact</a>
            </div>
           
        </div>
    </nav>
</div>