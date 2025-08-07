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
	<p class="wrapper fade-in">Welcome to <span>Hindu Mohajote</span></p>
	
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
          <p>Bangladesh Hindu Mohajote is a non-political, non-violent, and community-based national platform dedicated to protecting the rights, dignity, culture, and heritage of the Hindu community in Bangladesh. Established with the vision of ensuring equal rights and security for Hindus, the organization has been actively working to promote religious harmony, social justice, and national unity.

Our mission is to raise awareness about the challenges faced by the Hindu minority, advocate for their constitutional rights, and engage with policymakers, civil society, and the international community to ensure safety, freedom of religion, and protection of property and temples.

Through peaceful demonstrations, legal aid, cultural events, and public dialogues, Bangladesh Hindu Mohajote works tirelessly to:

Stand against communal violence and discrimination

Protect Hindu temples, festivals, and cultural institutions

Support victims of religious persecution

Promote education and socio-economic development of the Hindu community

Strengthen unity among all minorities in Bangladesh

We believe in a secular and inclusive Bangladesh where every citizen, regardless of religion or ethnicity, can live with dignity and peace. Bangladesh Hindu Mohajote invites all people of conscience to join hands in building a tolerant and respectful society for future generations.

</p>
        </div>
      </div>
    </div>
  </div>
  <div class="container bg_color">
    <div class="row">
      <div class="col-md-12 col-sm-12">
        <div class="tab-menu">
          <ul class="nav nav-tabs" role="tablist">
            <!--<li class="nav-item">
              <a class="nav-link active" data-toggle="tab" href="#Chairman">Chairman Message</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#CEO">CEO Message</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#director"> List Of Director</a>
            </li>-->
			    <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#MV"> Mission & vision</a>
          </li>
          </ul>
          <div class="tab-content">
            
			

			
			
			
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