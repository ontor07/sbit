
        <!-- Footer Start -->
        <footer>
            <div class="footer-top-block">
                <div class="container">
                    <div class="footer-top-links">
                        <div class="row">
                            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 wow fadeIn mb-4">
                                <div class="footer-links">
                                    <h5>Dhaka - <span class="text-warning">Branch</span></h5>
                                    <span class="address">
                                        House # 535, Avenue # 5, Road # 8, Mirpur DOHS,<br> Mirpur, Dhaka-1216.<br> 
                                        Tel +8801844253601,<br> 
                                        Whatsapp +8801840241895<br></span>
                               
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 wow fadeIn mb-4">
                                <div class="footer-links">
                                    <h5>Feni - <span class="text-warning">Branch</span></h5>
                                    <span class="address">
                                        Hazi Fazal Master Lane, Yousuf Tower 1st Floor,<br> Mizan Road Feni. 3900 Feni, Bangladesh.<br>
                                        Mobile +88 01840241895,<br>
                                        Whatsapp +88 01840241895
                                      </span>
                                 
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 wow fadeIn mb-4">
                                <div class="footer-links">
                                    <h5>Important - <span class="text-warning">Link</span></h5>
                                    <ul>
                                        <li><a href="">About us</a></li>
                                        <li><a href="">Why Choose us</a></li>
                                        <li><a href="">Our Team</a></li>
                                        <li><a href="">Contact us</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 wow fadeIn mb-4">
                                <div class="footer-links">
                                    <h5>SOCIAL  - <span class="text-warning">MEDIA</span></h5>
                                    <a href="https://www.facebook.com/sbit.com.bd" target="_blank">
                                        <i class="fab fa-facebook" style="color: #ffffff;"></i>
                                    </a>
                                    <a href="https://twitter.com/sbit_com_bd" target="_blank">
                                        <i class="fab fa-twitter" style="color: #ffffff;"></i>
                                    </a>
                                    <a href="https://www.linkedin.com/company/sbit-com-bd/" target="_blank">
                                        <i class="fab fa-linkedin" style="color: #ffffff;"></i>
                                    </a>
                                    <a href="https://www.youtube.com/@sbit4768/featured" target="_blank">
                                        <i class="fab fa-youtube" style="color: #ffffff;"></i>
                                    </a>
                                   
                                </div>
                            </div>
                        
                          
                        </div>
                    
                    </div>
                    
                </div>
            </div>
            <div id="footerdivs" class="col-sm-12 col-12 mt-3 wow fadeIn">
                <div class="container-fluid">
                <center><span class="developer">© 2011-2024 <span class="text-warning">sbit.com.bd

                </span> 
                    All Right Reserved.</span>
                    <br>
                </center> 
                    <br>
                </div>
            </div>
          
        </footer>
         
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-secondary btn-square rounded-circle back-to-top"><i class="fa fa-arrow-up text-white"></i></a>

        
        <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('') }}fronted/assets/lib/wow/wow.min.js"></script>
        <script src="{{ asset('') }}fronted/assets/lib/easing/easing.min.js"></script>
        <script src="{{ asset('') }}fronted/assets//waypoints/waypoints.min.js"></script>
        <script src="{{ asset('') }}fronted/assets/lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="https://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>

        <!-- Template Javascript -->
        <script src="{{ asset('') }}fronted/assets/js/main.js"></script>

        <script>

        $("#loading").hide();

    $('#form-data').submit(function(e){

        e.preventDefault();

        $('#name').on('keyup',function(){
            $('#name').removeClass('is-invalid');
        });
        $('#email').on('keyup',function(){
            $('#email').removeClass('is-invalid');
        });
        $('#phone').on('keyup',function(){
            $('#phone').removeClass('is-invalid');
        });
        $('#message').on('keyup',function(){
            $('#message').removeClass('is-invalid');
        });

        var name = $('#name').val();

        var email = $('#email').val();

        var phone = $('#phone').val();

        var message = $('#message').val();

        if(name == "")
        {
            $('#name').addClass('is-invalid');
        }
        else if(email == "")
        {
            $('#email').addClass('is-invalid');
        }
        else if(phone == "")
        {
            $('#phone').addClass('is-invalid');
        }
        else if(message == "")
        {
            $('#message').addClass('is-invalid');
        }
        else
        {
            $.ajax({
                headers:{
                    'X-CSRF-TOKEN' : '{{ csrf_token() }}'
                },
                url : '{{ url('sendMessage') }}',

                type : 'POST',

                data : new FormData(this),

                cache:false,

                contentType: false,

                processData: false,

                beforeSend : function()
                {
                    $('#loading').show();
                    $('#submit').hide();
                },
                success : function(data)
                {
                    if(data == 1)
                    {
                        toastr.success('Message sent successfully. You will recive a email from us', 'Success');
                        $('#loading').hide();
                        $('#submit').show();
                    }
                    else
                    {
                        toastr.success('Message sent Unsuccessfully.', 'Error');
                        $('#loading').hide();
                        $('#submit').show();

                    }

                }
            });
        }

    });
</script>

<script>

        

    $('#formData').submit(function(e){

        e.preventDefault();

        $('#name').on('keyup',function(){
            $('#name').removeClass('is-invalid');
        });
        $('#email').on('keyup',function(){
            $('#email').removeClass('is-invalid');
        });
        $('#phone').on('keyup',function(){
            $('#phone').removeClass('is-invalid');
        });
        $('#course').on('keyup',function(){
            $('#course').removeClass('is-invalid');
        });
        $('#course_type').on('keyup',function(){
            $('#course_type').removeClass('is-invalid');
        });

        var name = $('#name').val();

        var email = $('#email').val();

        var phone = $('#phone').val();

        var course = $('#course').val();

        var course_type = $('#course_type').val();

        if(name == "")
        {
            $('#name').addClass('is-invalid');
        }
        else if(email == "")
        {
            $('#email').addClass('is-invalid');
        }
        else if(phone == "")
        {
            $('#phone').addClass('is-invalid');
        }
        else if(course == "")
        {
            $('#course').addClass('is-invalid');
        }
        else if(course_type == "")
        {
            $('#course_type').addClass('is-invalid');
        }
        else
        {
            $.ajax({
                headers:{
                    'X-CSRF-TOKEN' : '{{ csrf_token() }}'
                },
                url : '{{ url('OurCourse') }}',

                type : 'POST',

                data : new FormData(this),

                cache:false,

                contentType: false,

                processData: false,

                beforeSend : function()
                {
                    $('#submit').show();
                },
                success : function(data)
                {
                    if(data == 1)
                    {
                        toastr.success('Admission Add successfully. We Will Inform Your Letter', 'Success');
                        $('#submit').show();
                    }
                    else
                    {
                        toastr.success('Admission Add Unsuccessfully.', 'Error');
                        $('#submit').show();

                    }

                }
            });
        }

    });
</script>


    </body>

</html>