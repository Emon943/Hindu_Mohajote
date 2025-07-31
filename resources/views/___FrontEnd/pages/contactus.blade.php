@extends('FrontEnd.master')

@section('title')
  Contact Us
@endsection

@push('css')
  <style type="text/css">
    label.error {
      color: #CC0000;
      font-weight: 300;
    }
    label span{
      color: red;
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
@endpush

@section('class4')
  active
@endsection

@section('welcome')
    <!--<p class="blink">Welcome to <span>Pandamic Fisheries</span></p>-->
	<p class="wrapper fade-in">Welcome to <span>Pandamic Fisheries</span></p>
	
@endsection

@section('main-content')
<section class="need-help">

    <div class="container bg_color">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="project">
                    <h4 class="text-center">Contact Us</h4>
                </div>
            </div>
        </div>
    </div>

  <div class="container bg_color">
    <div class="row">
      <div class="col-md-12 col-sm-12">
        <div class="help">
          <p class="text-center want-text"><i class="fas fa-hand-point-right"></i> Pandamic Fisheries can take forward its activities further for which we need everyone’s support. Please contact us using the form below or email us at <span>pandamicfisheries@pandamicfisheries.com</span></p>
          <p class="text-success text-center"> <b> {{ Session::get('message') }} </b> </p>
        </div>
      </div>
    </div>
  </div>
  <div class="container bg_color">
    <div class="row">
      <div class="col-md-6 col-sm-6 help">
        <div class="help-form">
          <form id="want-help-form" method="post" action=" {{ url('/save-want-help') }} " role="form">
              @csrf
            <div class="controls">
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="form_name">First Name <span>*</span></label>
                    <input id="form_name" type="text" name="firstname" class="form-control">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="form_lastname">Last Name <span>*</span></label>
                    <input id="form_lastname" type="text" name="lastname" class="form-control">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="form_email">Email <span>*</span></label>
                    <input id="form_email" type="text" name="email" class="form-control">
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="form_phone">Phone Number <span>*</span></label>
                    <input id="form_phone" type="text" name="phone" class="form-control">
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="form_message">Message <span>*</span></label>
                    <textarea id="form_message" name="message" class="form-control" rows="3"></textarea>
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
                <div class="col-md-12">
                  <input type="submit" class="btn btn-my" value="Submit">
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>

      <div class="col-md-6 col-sm-6">
          
          <div class="text-center">
          <i class="fas fa-map-marker-alt"></i>
          <div class="topic">Address</div>
          <div class="text-one">Surkhet, NP12</div>
          <div class="text-two">Birendranagar 06</div>
        </div>
       
        <div class="phone details text-center">
          <i class="fas fa-phone-alt"></i>
          <div class="topic">Phone</div>
          <div class="text-one">+0098 9893 5647</div>
          <div class="text-two">+0096 3434 5678</div>
        </div>
        <div class="email details text-center">
          <i class="fas fa-envelope"></i>
          <div class="topic">Email</div>
          <div class="text-one">codinglab@gmail.com</div>
          <div class="text-two">info.codinglab@gmail.com</div>
        </div>
      </div>

    </div>
  </div>
</section>
@endsection

@push('script')
  <script src=" {{ asset('FrontEnd/js/jquery.validate.js') }} "></script>
  <script type="text/javascript">
  $.validator.addMethod("alphabet", function(value, element) {
  return this.optional(element) || /^[a-zA-Z][a-zA-Z\s]*$/.test(value);
});

$().ready(function() {
$("#want-help-form").validate({
rules: {
firstname:{
required:true,
alphabet:true,
minlength:3
},
lastname:{
required:true,
alphabet:true,
minlength:3
},
email:{
required:true,
email:true
},
phone:{
required:true,
number:true
},
message:"required"

},
messages: {
firstname:{
required:"Enter first name",
alphabet:"Name must be alphabetic",
minlength:"Enter at least three(3) character"
},
lastname:{
required:"Enter last name",
alphabet:"Name must be alphabetic",
minlength:"Enter at least three(3) character"
},
email:{
required:"Enter email address",
email:"Enter valid email address"
},
phone:{
required:"Enter phone number",
number:"Enter valid phone number"
},
message:"Enter your message"
}
});

});
</script>
@endpush