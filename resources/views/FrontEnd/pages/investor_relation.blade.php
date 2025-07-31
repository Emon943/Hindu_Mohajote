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
</style>
@section('welcome')
    <!--<p class="blink">Welcome to <span>Pandamic Fisheries</span></p>-->
	<p class="wrapper fade-in">Welcome to <span>Pandamic Fisheries</span></p>
	<br><br>
	<p>Investor Relation</p>
	
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
              <a class="nav-link active" data-toggle="tab" href="#Annual">Annual Reports</a>
            </li>
           
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#Credit"> Credit Rating</a>
            </li>
			
          </ul>
          <div class="tab-content">
            <div id="Annual" class="container tab-pane active"><br>
			<!--<div class="column">
		  <div class="card">
		  <iframe src="{{ asset('public/BackEnd/profile_image/shareholder_structure.jpeg') }}">
               <a href="{{ asset('public/BackEnd/profile_image/shareholder_structure.jpeg') }}">Download PDF</a>
              </iframe>
		   <div class="container">
			<p><a href="{{ asset('public/BackEnd/profile_image/shareholder_structure.jpeg') }}">Download</a></p>
			<p class="title text-center">Annual Audit Reports-2023</p>
			<!--<p>fdzhmbvhjdfkvg</p>
			
		  </div>
		 </div>
        </div>-->
		
	<table class="table">
    <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Report Name</th>
      <th scope="col">Year</th>
      <th scope="col">File</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Annual Audit Report</td>
      <td>2023</td>
      <td class="blink"><u><a href="{{ asset('public/BackEnd/profile_image/shareholder_structure.jpeg') }}">Download</a></u></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Annual Audit Report</td>
      <td>2022</td>
      <td class="blink"><u><a href="{{ asset('public/BackEnd/profile_image/shareholder_structure.jpeg') }}">Download</a></u></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Annual Audit Report</td>
      <td>2021</td>
      <td class="blink"><u><a href="{{ asset('public/BackEnd/profile_image/shareholder_structure.jpeg') }}">Download</a></u></td>
    </tr>
  </tbody>
</table>
     
</div>

<div id="Credit" class="container tab-pane"><br>
<div class="col-md-6 col-sm-6">
        <div class="executive-team">
        <a href="#" class="btn btn-my" data-toggle="collapse" data-target="#table_member">Credit Rating</a>
          <div id="table_member" class="table-responsive collapse">
            <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>Declaration Date</th>
                    <th>Long term entity Rating</th>
					<th>Short term entity Rating</th>
					<th>Expired Date</th>
                  </tr>
                </thead>
                <tbody>
                
				<tr>
                    <td>ldck</td>
                    <td>kdnjnj</td>
					<td>ldck</td>
                    <td>kdnjnj</td>
                  </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>

</div>
            
			
			
          </div>
          <hr>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection