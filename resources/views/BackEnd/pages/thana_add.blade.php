@extends('BackEnd.master')

@section('title')
	Thana Add
@endsection

@section('DistrictAdd')
    active-link
@endsection

@section('for_thana')
    active
@endsection


@section('main_content')
			<div id="page-content-wrapper">
                <div class="page-content">
                    <section class="content-header">
                        <div class="header-icon">
                            <i class="material-icons">image</i>
                        </div>
                        <div class="header-title">
                            <h1>New Thana Add</h1>
                            <p class="text-success"> <b>   {{ session('success') }} </b> </p>
                        </div>
                    </section>
                     <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="card">
                                    <div class="card-content">
                                        <form class="form-horizontal" method="POST" action=" {{ route('thana.store') }} ">

                                            @csrf

                                            <fieldset>
                                              <div class="form-group">
                                                 <label class="col-md-4 control-label">Districts</label>
                                              <div class="col-md-6">
                                                <select id="district_id" name="district_id" class="form-control">
                                                    <option value="">-- select districts--</option>
                                                    @foreach($districts as $district)
                                                        <option value="{{ $district->id }}">{{ $district->district_name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                              </div>
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Thana Name:</label>
                                                    <div class="col-md-6">
                                                        <div class="input-field">
                                                            <input name="thana_name" type="text" required>
                                                        </div>
                                                    </div>
                                                </div>

                                             <div class="form-group">
                                                    <label class="col-md-4 control-label"></label>
                                                    <div class="col-md-4">
                                                        <input type="submit" class="btn btn-my" value="Submit">
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
    <script>
     function handleFileSelect(evt) {
     var files = evt.target.files;
     for (var i = 0, f; f = files[i]; i++) {

     if (!f.type.match('image.*')) {
     continue;
     }
     var reader = new FileReader();

     reader.onload = (function(theFile) {
     return function(e) {
     var span = document.createElement('span');
     span.innerHTML = ['<img style="width:150px; height:130px; border-width:2px; border-style:solid; border-color:#26A69A; margin:10px;" src="', e.target.result, '" title="', escape(theFile.name), '"/>'].join('');
    document.getElementById('list').insertBefore(span, null);
                 };
             })(f);

             reader.readAsDataURL(f);
         }
     }
     document.getElementById('files').addEventListener('change', handleFileSelect, false);
    </script>
@endpush