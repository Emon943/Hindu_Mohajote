@extends('FrontEnd.master')

@section('title')
    Home
@endsection

@section('welcome')
    <p class="wrapper fade-in">Welcome to <span>Hindu Mohajote</span></p>
	
@endsection
@section('marquee')
 <marquee width="100%" direction="right" height="50px">
This is a sample scrolling text that has scrolls texts to the right. This is a sample scrolling text that has scrolls texts to the right.
</marquee>
	
@endsection

@push('css')
    <link rel="stylesheet" type="text/css" href=" {{ asset('FrontEnd/slider/style.css') }} " />
@endpush

@section('main-content')
<section class="home-content reduce_my">
<div class="container bg_color mt-5 mb-5 ">
    <h3 class="text-center mb-4">Member Registration Form</h3>
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
    <form id="signup_form" action="{{ url('/save-signup') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="row">

            <div class="col-md-6 mb-3">
                <label>Name (Bangla)</label>
                <input type="text" name="name_bangla" class="form-control" required>
            </div>

            <div class="col-md-6 mb-3">
                <label>Name (English)</label>
                <input type="text" name="name" class="form-control" required>
            </div>

            <div class="col-md-6 mb-3">
                <label>Father's Name</label>
                <input type="text" name="father_name" class="form-control" required>
            </div>

            <div class="col-md-6 mb-3">
                <label>Mother's Name</label>
                <input type="text" name="mother_name" class="form-control" required>
            </div>

            <div class="col-md-6 mb-3">
                <label>Present Address</label>
                <textarea name="present_address" class="form-control" rows="2"></textarea>
            </div>

            <div class="col-md-6 mb-3">
                <label>Permanent Address</label>
                <textarea name="permanent_address" class="form-control" rows="2"></textarea>
            </div>

            <div class="col-md-6 mb-3">
                <label>Telephone</label>
                <input type="text" name="telephone" class="form-control" required>
            </div>

            <div class="col-md-6 mb-3">
                <label>Educational Qualification</label>
                <input type="text" name="education_qualification" class="form-control" required>
            </div>

        <div class="col-md-6 mb-3">
        <label for="district">Districts</label>
        <select id="district" name="district" class="form-control">
            <option value="">-- select districts--</option>
            @foreach($districts as $district)
                <option value="{{ $district->id }}">{{ $district->name }}</option>
            @endforeach
        </select>
     </div>

     <div class="col-md-6 mb-3">
        <label for="thana">Thana</label>
        <select id="thana" name="thana" class="form-control">
            <option value="">-- আগে জেলা নির্বাচন করুন --</option>
        </select>
       </div>


            <div class="col-md-6 mb-3">
                <label>Email</label>
                <input type="email" name="email" class="form-control" required>
            </div>

            <div class="col-md-6 mb-3">
                <label>Facebook ID</label>
                <input type="text" name="facebook_id" class="form-control" required>
            </div>

            <div class="col-md-6 mb-3">
                <label>Birthday</label>
                <input type="date" name="birthday" class="form-control" required>
            </div>

            <div class="col-md-3 mb-3">
                <label>Age</label>
                <input type="number" name="age" class="form-control" required>
            </div>

            <div class="col-md-3 mb-3">
                <label>Blood Group</label>
                <input type="text" name="blood_group" class="form-control">
            </div>

            <div class="col-md-3 mb-3">
                <label>Nationality</label>
                <input type="text" name="nationality" class="form-control" required>
            </div>

            <div class="col-md-3 mb-3">
                <label>National ID</label>
                <input type="text" name="national_id" class="form-control" required>
            </div>

            <div class="col-md-6 mb-3">
                <label>Reference ID</label>
                <input type="text" id="reference_id" name="reference_id" class="form-control" required>
                <span id="reference_error" style="color:red;"></span>
                <span id="reference_ok" style="color:green;"></span>
            </div>

            <div class="col-md-6 mb-3">
         <label for="member_type" class="form-label">Member Type</label>

        <select class="form-select" name="member_type" style="width: 300px; height: 40px; border-radius: 5px;" required>
            <option value="">-- Select Member Type --</option>
            <option value="1">General</option>
              <option value="2">Youth</option>
              <option value="3">Student</option>
              <option value="4">Female</option>
        </select>
            </div>

            <div class="col-md-6 mb-3">
                <label>Member Image</label>
                <input type="file" name="member_img" class="form-control">
            </div>

            <div class="col-md-6 mb-3">
                <label>NID Image</label>
                <input type="file" name="nid_img" class="form-control">
            </div>
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-success px-5">Submit</button>
        </div>

    </form>
</div>
</section>
@endsection

@push('script')
    <script type="text/javascript" src=" {{ asset('FrontEnd/slider/index.js') }} "></script>
    <script type="text/javascript">
        $(document).on("click", ".vdo", function () {
        var myUrl = $(this).data('url');
        var iframe = document.getElementById('vdo_url');
        iframe.src = myUrl;
        });
    </script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
     let referenceValid = false;
    $('#reference_id').on('blur', function () {
        let referenceId = $(this).val();
        if (referenceId !== '') {
            $.ajax({
                url: "{{ route('check.reference') }}",
                type: "POST",
                data: {
                    reference_id: referenceId,
                    _token: "{{ csrf_token() }}"
                },
                success: function (response) {
                    if (response.exists) {
                        referenceValid = true;
                        $('#reference_error').text('');
                    $('#reference_ok').text('Reference ID is valid.');

                        
                    } else {
                        referenceValid = false;
                        $('#reference_error').text('এই Reference ID সিস্টেমে পাওয়া যায়নি।');
                    }
                },
                error: function () {
                    referenceValid = false;
                    $('#reference_error').text('Server error!');
                }
            });
        }
    });

     $('#signup_form').on('submit', function (e) {
        if (!referenceValid) {
            e.preventDefault();
            $('#reference_error').text('সঠিক Reference ID দিন।');
            $('html, body').animate({
                scrollTop: $("#reference_id").offset().top - 100
            }, 500);
        }
    });


    $('#district').on('change', function () {
        var districtID = $(this).val();
        if (districtID) {
            $.ajax({
                url: '/get-thanas/' + districtID,
                type: 'GET',
                dataType: 'json',
                success: function (data) {
                    $('#thana').empty();
                    $('#thana').append('<option value="">-- Select Thana --</option>');
                    $.each(data, function (key, value) {
                        $('#thana').append('<option value="' + value.id + '">' + value.name + '</option>');
                    });
                }
            });
        } else {
            $('#thana').empty().append('<option value="">-- আগে জেলা নির্বাচন করুন --</option>');
        }
    });
</script>
@endpush