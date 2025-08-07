@extends('FrontEnd.master')

@section('title')
  Member Information
@endsection
<style>
img {
  border: 5px solid #555;
}
/* Three columns side by side */
.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

/* Display the columns below each other instead of side by side on small screens */
@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}

/* Add some shadows to create a card effect */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}

/* Some left and right padding inside the container */
.container {
  padding: 0 16px;
}

/* Clear floats */
.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}
.blink {
         animation: blinker 1.5s linear infinite;
         color: red;
         font-family: sans-serif;
        }
        @keyframes blinker {
          50% {
            opacity: 0;
        }
       }
</style>
@section('welcome')
    <!--<p class="blink">Welcome to <span>Pandamic Fisheries</span></p>-->
	<p class="wrapper fade-in">Welcome to <span>Hindu Hohajote</span></p>
	<br><br>
	<p>Member Information</p>
	
@endsection
@section('main-content')
<section class="about-us">
  
  <div class="container bg_color">
    <div class="row">
      <div class="col-md-12 col-sm-12">
        <div class="Corporate">
         
        </div>
        <!--<div class="about_welcome text-center">
          <p>Pandemic Fisheries Company is a pioneering organization dedicated to the sustainable management and revitalization of fisheries impacted by the COVID-19 pandemic. With a focus on resilience and innovation, we aim to restore the vitality of fish populations and support the livelihoods of communities dependent on fisheries.</p>
        </div>-->
      </div>
    </div>
  </div>
  
  <div class="container bg_color">
    <div class="row">
      <div class="col-md-12 col-sm-12">
        <div class="tab-menu">
          <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" data-toggle="tab" href="#Advisor">Advisor</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#supporter">supporter</a>
            </li>
            
<li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#Member"> Primary Member</a>
            </li>
          </ul>
          <div class="tab-content">
            
			
			<div id="Advisor" class="container tab-pane fade"><br>
         <div class="column">
      <div class="card">
      <img src="{{ asset('public/BackEnd/profile_image/director.jpg') }}" alt="Photo" style="width:100%">
      <div class="container">
        <h2>Name: ABC</h2>
        <p class="text-center">Designation: dhsjch</p>
        <p>Some content about self Some content about self</p>
        <!--<p><button class="button">Contact</button></p>-->
      </div>
    </div>
	
  </div>
   <div class="column">
    <div class="card">
      <img src="{{ asset('public/BackEnd/profile_image/director.jpg') }}" alt="Photo" style="width:100%">
      <div class="container">
        <h2>Name: ABC</h2>
        <p class="text-center">Designation: dhsjch</p>
        <p>Some content about self Some content about self</p>
        <!--<p><button class="button">Contact</button></p>-->
      </div>
    </div>
  </div>
   <div class="column">
    <div class="card">
      <img src="{{ asset('public/BackEnd/profile_image/director.jpg') }}" alt="Photo" style="width:100%">
      <div class="container">
        <h2>Name: ABC</h2>
        <p class="text-center">Designation: dhsjch</p>
        <p>Some content about self Some content about self</p>
        <!--<p><button class="button">Contact</button></p>-->
      </div>
    </div>
  </div>
  
 </div>



			
        

        <div id="Member" class="container tab-pane fade"><br>
         <div class="column">
      <div class="card">
      <img src="{{ asset('public/BackEnd/profile_image/director.jpg') }}" alt="Photo" style="width:100%">
      <div class="container">
        <h2>Name: ABC</h2>
        <p class="text-center">Designation: dhsjch</p>
        <p>Some content about self Some content about self</p>
        <!--<p><button class="button">Contact</button></p>-->
      </div>
    </div>
	
  </div>
   <div class="column">
    <div class="card">
      <img src="{{ asset('public/BackEnd/profile_image/director.jpg') }}" alt="Photo" style="width:100%">
      <div class="container">
        <h2>Name: ABC</h2>
        <p class="text-center">Designation: dhsjch</p>
        <p>Some content about self Some content about self</p>
        <!--<p><button class="button">Contact</button></p>-->
      </div>
    </div>
  </div>
   <div class="column">
    <div class="card">
      <img src="{{ asset('public/BackEnd/profile_image/director.jpg') }}" alt="Mike" style="width:100%">
      <div class="container">
        <h2>Name: ABC</h2>
        <p class="text-center">Designation: dhsjch</p>
        <p>Some content about self Some content about self</p>
        <!--<p><button class="button">Contact</button></p>-->
      </div>
    </div>
  </div>
  
 </div>


   <div id="supporter" class="container tab-pane fade"><br>
         <div class="column">
      <div class="card">
      <img src="{{ asset('public/BackEnd/profile_image/director.jpg') }}" alt="Photo" style="width:100%">
      <div class="container">
        <h2>Name: ABC</h2>
        <p class="text-center">Designation: dhsjch</p>
        <p>Some content about self Some content about self</p>
        <!--<p><button class="button">Contact</button></p>-->
      </div>
    </div>
	
  </div>
   <div class="column">
    <div class="card">
      <img src="{{ asset('public/BackEnd/profile_image/director.jpg') }}" alt="Photo" style="width:100%">
      <div class="container">
        <h2>Name: ABC</h2>
        <p class="text-center">Designation: dhsjch</p>
        <p>Some content about self Some content about self</p>
        <!--<p><button class="button">Contact</button></p>-->
      </div>
    </div>
  </div>
   <div class="column">
    <div class="card">
      <img src="{{ asset('public/BackEnd/profile_image/director.jpg') }}" alt="Photo" style="width:100%">
      <div class="container">
        <h2>Name: ABC</h2>
        <p class="text-center">Designation: dhsjch</p>
        <p>Some content about self Some content about self</p>
        <!--<p><button class="button">Contact</button></p>-->
      </div>
    </div>
  </div>
  
 </div>
			
			
			<!--<div id="#" class="container tab-pane fade"><br>
			   <h5 class="text-center">Our Mission</h5>
              <p class="text-justify"><i class="fas fa-hand-point-right"></i> At Pandamic Fisheries, we are committed to promoting sustainable fishery practices that ensure the health and vitality of our aquatic ecosystems. Our mission is to create a thriving environment where fish populations can flourish, and local communities can benefit from the bounty of nature.</p>
			  <h5 class="text-center">Our vision</h5>
              <p class="text-justify"><i class="fas fa-hand-point-right"></i> We envision a future where fisheries are managed sustainably, ensuring that future generations can enjoy the richness of our waters. Our approach integrates scientific research, innovative practices, and community engagement to foster a balanced ecosystem.</p>
             
            </div>-->
          </div>
          <hr>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection