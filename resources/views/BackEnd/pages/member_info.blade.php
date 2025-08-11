@extends('BackEnd.master')

@section('title')
	member Info
@endsection

@section('title')
   member Info
@endsection

@section('wanthelp')
    active-link
@endsection


@section('main_content')
			<div id="page-content-wrapper">
                <div class="page-content">
                    <section class="content-header">
                        <div class="header-icon">
                            <i class="material-icons">people_outline</i>
                        </div>
                        <div class="header-title">
                            <h1>Member Details Info</h1>
                        </div>
                        @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                        @endif
                    </section>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="info">
                                        <table class="table table-bordered table-striped">
                            <tbody>
                                <tr>
                                    <th>Registration No</th>
                                    <td>{{ $signup->REGISTRATION_NO }}</td>
                                </tr>
                                <tr>
                                    <th>Name (Bangla)</th>
                                    <td>{{ $signup->Name_BANGLA }}</td>
                                </tr>
                                <tr>
                                    <th>Name (English)</th>
                                    <td>{{ $signup->NAME }}</td>
                                </tr>
                                <tr>
                                    <th>Father's Name</th>
                                    <td>{{ $signup->FATHER_NAME }}</td>
                                </tr>
                                <tr>
                                    <th>Mother's Name</th>
                                    <td>{{ $signup->MOTHER_NAME }}</td>
                                </tr>
                                <tr>
                                    <th>Present Address</th>
                                    <td>{{ $signup->PRESENT_ADDRESS }}</td>
                                </tr>
                                <tr>
                                    <th>Permanent Address</th>
                                    <td>{{ $signup->PERMANENT_ADDRESS }}</td>
                                </tr>
                                <tr>
                                    <th>Telephone</th>
                                    <td>{{ $signup->TELEPHONE }}</td>
                                </tr>
                                <tr>
                                    <th>Education Qualification</th>
                                    <td>{{ $signup->EDUCATION_QUALIFICATION }}</td>
                                </tr>
                                <tr>
                                    <th>District</th>
                                    <td>{{ $signup->district_name }}</td>
                                </tr>
                                <tr>
                                    <th>Thana</th>
                                    <td>{{ $signup->thana_name }}</td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td>{{ $signup->EMAIL }}</td>
                                </tr>
                                <tr>
                                    <th>Birthday</th>
                                    <td>{{ $signup->BIRTHDAY }}</td>
                                </tr>
                                <tr>
                                    <th>Age</th>
                                    <td>{{ $signup->AGE }}</td>
                                </tr>
                                <tr>
                                    <th>Blood Group</th>
                                    <td>{{ $signup->BLOOD_GROUP }}</td>
                                </tr>
                                <tr>
                                    <th>Nationality</th>
                                    <td>{{ $signup->NATIONALITY }}</td>
                                </tr>
                                <tr>
                                    <th>National ID</th>
                                    <td>{{ $signup->NATIONAL_ID }}</td>
                                </tr>
                                <tr>
                                    <th>Reference ID</th>
                                    <td>{{ $signup->REFERENCE_ID }}</td>
                                </tr>
                                <tr>
                                    <th>Member Type</th>
                                    <td>{{ $signup->MeMBER_TYPE }}</td>
                                </tr>
                                <tr>
                                    <th>Designation</th>
                                    <td>{{ $signup->DESIGNATION }}</td>
                                </tr>
                                <tr>
                                    <th>Member Image</th>
                                    <td>
                                        @if($signup->MEMBER_IMG)
                                            <img src="{{ asset('storage/'.$signup->MEMBER_IMG) }}" alt="Member Image" width="120">
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th>NID Image</th>
                                    <td>
                                        @if($signup->NID_IMG)
                                            <img src="{{ asset('storage/'.$signup->NID_IMG) }}" alt="NID Image" width="120">
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th>Status</th>
                                    <td>{{ $signup->STATUS }}</td>
                                </tr>
                            </tbody>
                        </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection
