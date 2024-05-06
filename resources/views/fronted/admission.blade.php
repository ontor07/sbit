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
    width: 70%;
    margin-top: 1em;
    margin-left: 6em;
    margin-bottom: 1em;
    font-family: 'Merriweather', sans-serif;
    -moz-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
    -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
    box-shadow: 14px 1px 11px 5px rgba(10, 2, 5, 2.1);
    resize: none;
    opacity: 0.9;
}
form input:focus, form textarea, form select:focus {
  -moz-box-shadow: 0 0px 2px #e74c3c !important;
  -webkit-box-shadow: 0 0px 2px #e74c3c !important;
  box-shadow: 0 0px 2px #e74c3c !important;
}
form #submit {
  color: white;
    cursor: pointer;
    opacity: inherit;
    margin-left: 8px;
    box-shadow: none;
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
  form{
    width: 230px;
  }
  form input, form textarea, form select {
    width: 90%;
        margin-left: 14px;
        box-shadow: none;
}
form #submit {
  margin-left: -1px;
}

.form_text h3{
  font-size: 16px !important;
}

.form_text h6{
  font-size: 9px !important;
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
    padding: 28px;
    margin-bottom: 9px;
}

form{
  background-image: url("{{ asset('') }}fronted/assets/img/flat-illustration-abstract-transformed.jpeg");
}

.form_text {
    padding: 7px;
    background: #000;
    opacity: 0.9;
}

.form_text h3{
  color: #fff;
  padding-top: 18px;
}

.form_text h6{
  color: yellow;
  font-size: 14px;
  padding-top: 8px;
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
      <form class="cf" method="POST" id="formData">
        <div class="form_text">
          <h3 class="text-center">Give valid information</h3>
          <h6 class="mb-4 text-center">After fill-up form our team contact you</h6>
        </div>
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