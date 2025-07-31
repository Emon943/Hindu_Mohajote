@extends('BackEnd.master')

@section('title')
	Video
@endsection

@section('v_view')
    active-link
@endsection

@section('video')
    active
@endsection


@section('main_content')
			<div id="page-content-wrapper">
                <div class="page-content">
                    <section class="content-header">
                        <div class="header-icon">
                            <i class="material-icons">duo</i>
                        </div>
                        <div class="header-title">
                            <h1>Video</h1>
                            <p class="text-danger"> <b> {{ Session::get('message') }} </b> </p>
                        </div>
                    </section>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="card">
                                    <div class="card-content">
                                        <div class='list-group gallery video'>
                                            @foreach($videos as $video)
                                            <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                                                <a class="fancybox thumbnail example-image-link image" data-lightbox="example-1"><iframe src="{{$video->url}}"></iframe></a>

                                                <a href=" {{ url('/video-delete/'.$video->id) }} " class="btn btn-danger image-bt" onclick="return confirm('Are you sure to delete this?')" title="Delete"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection
