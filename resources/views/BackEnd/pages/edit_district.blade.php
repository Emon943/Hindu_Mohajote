@extends('BackEnd.master')

@section('title')
	District Update
@endsection

@section('DistrictUpdate')
    active-link
@endsection

@section('for_district')
    active
@endsection

@section('main_content')
			<div id="page-content-wrapper">
                <div class="page-content">
                    <section class="content-header">
                        <div class="header-icon">
                            <i class="material-icons">extension</i>
                        </div>
                        <div class="header-title">
                            <h1>District / Update</h1>
                           <p class="text-success"> <b>   {{ session('success') }} </b> </p>
                        </div>
                    </section>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="card">
                                    <div class="card-content">
                                        <form class="form-horizontal" method="POST" action=" {{ url('/update-district') }} ">

                                            @csrf

                                            <input type="hidden" name="id" value=" {{ $district->id }} ">

                                            <fieldset>
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">District Name:</label>
                                                    <div class="col-md-6">
                                                        <div class="input-field">
                                                            <input name="district_name" type="text" value=" {{ $district->district_name }} " required>
                                                        </div>
                                                    </div>
                                                </div>


                                               

                                                <div class="form-group">
                                                    <label class="col-md-4 control-label"></label>
                                                    <div class="col-md-4">
                                                        <input type="submit" class="btn btn-my" value="Update">
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection

@push('script')
    <script src=" {{ asset('tinymce/tinymce.min.js')  }}"></script>
    <script src=" {{ asset('tinymce/my.js')  }}"></script>
@endpush