@extends('FrontEnd.master')

@section('title')
  About Us
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
	
@endsection
@section('main-content')
<section class="about-us">
  <div class="container bg_color">
    <div class="row">
      <div class="col-md-12 col-sm-12">
        <div class="about">
          <h4 class="text-center">About Us</h4>
        </div>
        <div class="about_welcome text-center">
          <p>Pandemic Fisheries Company is a pioneering organization dedicated to the sustainable management and revitalization of fisheries impacted by the COVID-19 pandemic. With a focus on resilience and innovation, we aim to restore the vitality of fish populations and support the livelihoods of communities dependent on fisheries.</p>
        </div>
      </div>
    </div>
  </div>
  <div class="container bg_color">
    <div class="row">
      <div class="col-md-12 col-sm-12">
        <div class="tab-menu">
          <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" data-toggle="tab" href="#Chairman">Chairman Message</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#CEO">CEO Message</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#director"> List Of Director</a>
            </li>
			<li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#MV"> Mission & vision</a>
            </li>
          </ul>
          <div class="tab-content">
            <div id="Chairman" class="container tab-pane active"><br>
			<div class="container">
			  <div class="row">
				<div class="col-md-4"><img src="{{ asset('public/BackEnd/profile_image/Saidul_Rahman.jpg') }}" alt="Mike" style="width:100%"></div>
				<div class="col-md-8"><span class="pull-right">Bir Muktizoddah, Mr. Abu Mohammad Saidur Rahman - a resident of United Arab Emirates, was born in February, 1951 in Barisal. He possesses an excellent academic background and completed his Hon’s degree in 1972 and obtained his Masters Degree in Mathematics with distinction in 1974 from the University of Dhaka. He was a resident student of Sgt. Jahurul Huq Hall and actively participated in the student movements in 1968 and mass revolution in 1969 and joined the liberation war of 1971. Mr. Rahman joined the Bangladesh Civil Service in 1977 and performed diverse activities in the development and regulatory Ministries viz. Planning, Agriculture and Forest, Relief and Rehabilitation, Home Affairs, and Finance. He was also involved in various National level activities, namely, approval and monitoring of relief and rehabilitation activities of NGOs worked for the flood victims of 1988; National Pay Scale 1990 and conducted Bangladesh Agricultural Census and Bangladesh Economic Census as Project Director. He was also the Director of the Statistical training institute in BBS. He attended various training, workshop and seminars at home and abroad. He visited India, USA, Canada, Japan, Hong Kong, Thailand, Malaysia, Switzerland, Austria, France, Germany, Australia, and Nepal. After retirement from the Government service in 2008, he involved in business and now he is the Chairman of M/s. Royal Denim Limited – a 100% Export Oriented Denim Fabrics Manufacturing Industry and also the proprietor of Regal Dream International in UAE. He is blessed with one daughter and two sons namely, Tushar Iqbal Rahman - a permanent resident of Germany and Faisal Rahman Tamal - a permanent resident of Australia.</span></div>
			  </div>
			</div>
     
            </div>
			
            <div id="CEO" class="container tab-pane fade"><br>
              <div class="container">
			  <div class="row">
				<div class="col-md-4"><img src="{{ asset('public/BackEnd/profile_image/shamim_ceo.jpg') }}" alt="Mike" style="width:100%"></div>
				<div class="col-md-8"><span class="pull-right"><h5>S.M. HELAL UDDIN SHAMIM </h5><p>"At Pandamic Fisheries we care about People, our Products and the Planet. These core values are demonstrated through our actions.

The safety and well-being of our people is our highest priority.  Improvement of workplace safety is an ongoing process and as a leader in the Bangladesh commercial fishing industry, we have invested heavily to ensure our boats, skippers and crews are as safe as possible. We are working closely with regulators and our industry peers to drive improvements to safety culture, training and the regulations governing Occupational Health and Safety for our industry.

We are privileged to be the custodians of some of Bangladesh’s most extraordinary fisheries resources.  Developing a deep understanding of these fisheries is at the very heart of our business so we can build our brands and continue to supply spectacular seafood products to our customers. Our ownership of Property rights in these fisheries directly aligns our interests with community expectations that we will do everything practicable to protect the species that we harvest and preserve the ecosystems that support them.</p></span></div>
			  </div>
			</div>
            </div>
			
           <div id="director" class="container tab-pane fade"><br>
         <div class="column">
		  <div class="card">
		  <img src="{{ asset('public/BackEnd/profile_image/director.jpg') }}" alt="Mike" style="width:100%">
		   <div class="container">
			<p class="text-center"><u><a href="#myModal" data-bs-toggle="modal">Mr. Abu Mohammad Saidur Rahman</a></u></p>
			<p class="title text-center">Directors</p>
			<!--<p>fdzhmbvhjdfkvg</p>-->
			
		  </div>
		 </div>
        </div>
	  
   <div class="column">
    <div class="card">
      <img src="{{ asset('public/BackEnd/profile_image/director.jpg') }}" alt="Mike" style="width:100%">
      <div class="container">
        <p class="text-center"><u><a href="#myModal" data-bs-toggle="modal">A.K.M Mostafizur Rahman</a></u></p>
        <p class="title text-center">Directors</p>
        <!--<p>fdzhmbvhjdfkvg</p>-->
        
      </div>
    </div>
  </div>
  
   <div class="column">
    <div class="card">
      <img src="{{ asset('public/BackEnd/profile_image/director.jpg') }}" alt="Mike" style="width:100%">
      <div class="container">
        <p class="text-center"><u><a href="#myModal" data-bs-toggle="modal">Dr. Tamanna Khatun</a></u></p>
        <p class="title text-center">Directors</p>
        <!--<p>fdzhmbvhjdfkvg</p>-->
        
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="{{ asset('public/BackEnd/profile_image/director.jpg') }}" alt="Mike" style="width:100%">
      <div class="container">
        <p class="text-center"><u><a href="#myModal" data-bs-toggle="modal">Md. Sejedur Rahman</a></u></p>
        <p class="title text-center">Directors</p>
        <!--<p>fdzhmbvhjdfkvg</p>-->
        
      </div>
    </div>
  </div>
  
  
  
  <div class="column">
    <div class="card">
      <img src="{{ asset('public/BackEnd/profile_image/director.jpg') }}" alt="Mike" style="width:100%">
      <div class="container">
        <p class="text-center"><u><a href="#myModal" data-bs-toggle="modal">MRS. Afroza Begum</a></u></p>
        <p class="title text-center">Directors</p>
        <!--<p>fdzhmbvhjdfkvg</p>-->
        
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="{{ asset('public/BackEnd/profile_image/director.jpg') }}" alt="Mike" style="width:100%">
      <div class="container">
        <p class="text-center"><u><a href="#myModal" data-bs-toggle="modal">MRS. Helena Aktar</a></u></p>
        <p class="title text-center">Directors</p>
        <!--<p>fdzhmbvhjdfkvg</p>-->
        
      </div>
    </div>
  </div>
  
   <div class="column">
    <div class="card">
      <img src="{{ asset('public/BackEnd/profile_image/director.jpg') }}" alt="Mike" style="width:100%">
      <div class="container">
        <p class="text-center"><u><a href="#myModal" data-bs-toggle="modal">MRS. Farzana Yeasmin</a></u></p>
        <p class="title text-center">Directors</p>
        <!--<p>fdzhmbvhjdfkvg</p>-->
        
      </div>
    </div>
  </div>
  
  
  
  
  </div>
			
			
			<div id="MV" class="container tab-pane fade"><br>
			   <h5 class="text-center">Our Mission</h5>
              <p class="text-justify"><i class="fas fa-hand-point-right"></i> At Pandamic Fisheries, we are committed to promoting sustainable fishery practices that ensure the health and vitality of our aquatic ecosystems. Our mission is to create a thriving environment where fish populations can flourish, and local communities can benefit from the bounty of nature.</p>
			  <h5 class="text-center">Our vision</h5>
              <p class="text-justify"><i class="fas fa-hand-point-right"></i> We envision a future where fisheries are managed sustainably, ensuring that future generations can enjoy the richness of our waters. Our approach integrates scientific research, innovative practices, and community engagement to foster a balanced ecosystem.</p>
             
            </div>
          </div>
          <hr>
        </div>
      </div>
    </div>
  </div>
  
</section>
 <!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

     

      <!-- Modal body -->
      <div class="modal-body">
      The Fisheries and Aquaculture Division (NFI) works with Members and partners to transform aquatic systems and promote the responsible and sustainable management of aquatic food systems, for better production, better nutrition, a better environment, and a better life. Leaving no one behind.

     Aquatic food systems are critical for global food security and nutrition. They are an essential resource as they support human well-being and sustain the lives and livelihoods of billions of people, in particular coastal and riparian communities that are vulnerable to poverty and malnutrition. 
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
 
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>




@endsection