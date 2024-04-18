@extends('fronted.layouts.master')

@section('content')

<style>
form {
  max-width: 600px;
  text-align: center;
  margin: 20px auto;
}
form input, form textarea, form select {
  border: 0;
  outline: 0;
  padding: 1em;
  -moz-border-radius: 8px;
  -webkit-border-radius: 8px;
  border-radius: 8px;
  display: block;
  width: 100%;
  margin-top: 1em;
  font-family: 'Merriweather', sans-serif;
  -moz-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
  -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
  box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
  resize: none;
}
form input:focus, form textarea, form select:focus {
  -moz-box-shadow: 0 0px 2px #e74c3c !important;
  -webkit-box-shadow: 0 0px 2px #e74c3c !important;
  box-shadow: 0 0px 2px #e74c3c !important;
}
form #submit {
  color: white;
  cursor: pointer;
}
form #submit:hover {
  -moz-box-shadow: 0 1px 1px 1px rgba(170, 170, 170, 0.6);
  -webkit-box-shadow: 0 1px 1px 1px rgba(170, 170, 170, 0.6);
  box-shadow: 0 1px 1px 1px rgba(170, 170, 170, 0.6);
}
form textarea {
  height: 126px;
}

.half {
  float: left;
  width: 100%;
  margin-bottom: 1em;
}



.left {
  margin-right: 2%;
}

@media (max-width: 480px) {
  .half {
    width: 100%;
    float: none;
    margin-bottom: 0;
  }
}
/* Clearfix */
.cf:before,
.cf:after {
  content: " ";
  /* 1 */
  display: table;
  /* 2 */
}

.cf:after {
  clear: both;
}

.form{
  background: #cbccd0;
    padding: 28px;
    margin-bottom: 9px;
    width: 100%;
}
</style>

<!-- Navbar Start -->
  <div class="container-fluid  page-header ">
    @include('fronted.layouts.navbar')
  </div>
<!-- Navbar End -->

<!-- <div class="container-fluid py-5" style="background: #fff;"> -->
  <div class="container pt-5">
    <div class="form">
      <h1 class="text-center">Give valid information</h1>
      <h6 class="mb-4 text-center">After fill-up form our team contact you</h6>
      <form class="cf" method="POST" id="formData">
        <div class="half left cf">
          <input type="text" name="name" id="name" value="" placeholder="Write Your Name">
          <input type="text" name="email" id="email" value="" placeholder="Email address">
          <input type="number" name="phone" id="phone" value="" maxlength="11" placeholder="Subject">
          <select name="course" id="course">
              <option value="">Select Your Course</option>
              <option @if(old('course') == 'basic') selected @endif value="1">Basic Computer</option>
              <option @if(old('course') == 'graphic') selected @endif value="2">Professional Graphic Design</option>
              <option @if(old('course') == 'web_design') selected @endif value="3">Web Design</option>
              <option @if(old('course') == 'web_development') selected @endif value="4">Web Development</option>
              <option @if(old('course') == 'app_development') selected @endif value="5">Android App Development</option>
              <option @if(old('course') == 'seo') selected @endif value="6">Search Engine Optimization (SEO)</option>
          </select>
          <select name="course_type" id="course_type">
              <option value="">Select Your Course Type</option>
              <option @if(old('course_type') == 'industrial') selected @endif value="1">Industrial</option>
              <option @if(old('course_type') == 'regular') selected @endif value="2">Regular</option>
          </select>
        </div>
        
        <input class="btn btn-primary" type="submit" value="Submit" id="submit">
      </form>
    </div>
  </div>




@endsection

{{--<form method="POST" id="formData">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 mt-2">
                        <label for="name">Write Your Name</label><span class="text-danger">*</span>
                        <input type="text" name="name" id="name" value="">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 mt-2">
                        <label for="email">Write Your E-mail</label><span class="text-danger">*</span>
                        <input type="text" name="email" id="email" value="">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 mt-2">
                        <label for="phone">Phone Number</label><span class="text-danger">*</span>
                        <input type="text" name="phone" id="phone" value="" maxlength="11">
                    </div>
                    <div class="col-lg-6 col-md-6 col-12 mt-2">
                        <label for="course">Your wanted Course</label><span class="text-danger">*</span>
                        <select name="course" id="course">
                            <option @if(old('course') == 'basic') selected @endif value="1">Basic Computer</option>
                            <option @if(old('course') == 'graphic') selected @endif value="2">Professional Graphic Design</option>
                            <option @if(old('course') == 'web_design') selected @endif value="3">Web Design</option>
                            <option @if(old('course') == 'web_development') selected @endif value="4">Web Development</option>
                            <option @if(old('course') == 'app_development') selected @endif value="5">Android App Development</option>
                            <option @if(old('course') == 'seo') selected @endif value="6">Search Engine Optimization (SEO)</option>
                        </select>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12 mt-2">
                        <label for="course_type">Course Type Type</label><span class="text-danger">*</span>
                        <select name="course_type" id="course_type">
                            <option @if(old('course_type') == 'industrial') selected @endif value="1">Industrial</option>
                            <option @if(old('course_type') == 'regular') selected @endif value="2">Regular</option>
                        </select>
                    </div>
                    <div class="col-12 mt-4" style="text-align: right">
                        <button type="submit" id="submit" class="btn btn-success"> <i class="fa fa-save"></i> @lang('common.save_now')</button>
                    </div>
                </div>
            </form>--}}