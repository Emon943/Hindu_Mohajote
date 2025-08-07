@extends('FrontEnd.master')

@section('title')
  Investor Relation
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
	   .zoom {
  padding: 50px;
  background-color: white;
  transition: transform .2s; /* Animation */
  width: 200px;
  height: 200px;
  margin: 0 auto;
}

.zoom:hover {
  transform: scale(1.1); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
}
	   
</style>
@section('welcome')
    <!--<p class="blink">Welcome to <span>Pandamic Fisheries</span></p>-->
	<p class="wrapper fade-in">Welcome to <span>Hindu Hohajote</span></p>
	<br><br>
	<p>News Events</p>
	
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
              <a class="nav-link active" data-toggle="tab" href="#Notice">Notice</a>
            </li>
           
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#Photo"> Photo Gallery</a>
            </li>
			<li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#Video"> Video Gallery</a>
            </li>
			
          </ul>
          <div class="tab-content">
            <div id="Notice" class="container tab-pane active"><br>
			<div class="container">
			  <div class="row">
			<table class="table">
    <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Notice Title</th>
      <th scope="col">Year</th>
      <th scope="col">File</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>3rd AGM Notice</td>
      <td>2023</td>
      <td class="blink"><u><a href="{{ asset('public/BackEnd/profile_image/shareholder_structure.jpeg') }}">Download</a></u></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>2nd AGM Notice</td>
      <td>2022</td>
      <td class="blink"><u><a href="{{ asset('public/BackEnd/profile_image/shareholder_structure.jpeg') }}">Download</a></u></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>1st AGM Notice</td>
      <td>2021</td>
      <td class="blink"><u><a href="{{ asset('public/BackEnd/profile_image/shareholder_structure.jpeg') }}">Download</a></u></td>
    </tr>
  </tbody>
</table>	
			  </div>
			</div>
     
            </div>
            
			
       <div id="Photo" class="container tab-pane fade ">
       <div class="row">
      <div class="col-md-4 col-sm-4 zoom">
      <picture>
			  
			  <img src="{{ asset('public/BackEnd/slider_image/191772784.5.jpg') }} " class="img-fluid img-thumbnail" alt="...">
			  
			</picture>
			
    </div>
	 <div class="col-md-4 col-sm-4 zoom">
      <picture>
			  
			  <img src="{{ asset('public/BackEnd/slider_image/191772784.5.jpg') }} " class="img-fluid img-thumbnail" alt="...">
			  
			</picture>
			
    </div >
	 <div class="col-md-4 col-sm-4 zoom">
      <picture>
			 
			  <img src="{{ asset('public/BackEnd/slider_image/191772784.5.jpg') }} " class="img-fluid img-thumbnail" alt="...">
			  
			</picture>
			
    </div>
  </div>
   
            </div>
			    
			
			<div id="Video" class="container tab-pane fade"><br>
			 <div class="row">
           <div class="col-md-4 col-sm-4">
			  
             <iframe src="https://www.youtube.com/embed/ZnPoKYYqeQc"></iframe>
                    <a class="hvr-wobble-horizontal vdo" data-url="https://www.youtube.com/embed/ZnPoKYYqeQc" href="#" data-toggle="modal" data-target="#video">Play <i class="fas fa-play"></i></a>
            </div>
          </div>
		   </div>
		    </div>
			</div>
			
          <br><br><br><br>
          <hr>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection