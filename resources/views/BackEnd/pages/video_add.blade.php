@extends('BackEnd.master')

@section('title')
    Video
@endsection

@section('v_add')
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
                            <h1>Upload</h1>
                            <p class="text-success"> <b> {{ Session::get('message') }} </b> </p>
                        </div>
                    </section>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="card-image-up">
                                    <div class="card-content">
                                        <form class="form-horizontal" action=" {{ url('/video-upload') }} " method="POST">

                                            @csrf

                                            <div style="margin:3px 1px" class="form-group">
                                                <div class="col-md-4">
                                                    <div class="input-field">
                                                        <textarea rows="3" name="url" placeholder="Embed Video Url" required></textarea>
                                                    </div>
                                                </div>
                                            </div>

                                            <br>

                                            <div style="margin-top: 40px; margin-bottom: 5px">
                                                <input type="submit" class="btn btn-my marg-left" value="Upload">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection