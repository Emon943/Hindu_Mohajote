@extends('FrontEnd.master')

@section('title')
    Project
@endsection

@push('css')
    <link rel="stylesheet" type="text/css" href=" {{ asset('public/FrontEnd/slider/style.css') }} " />
	<style>
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
@section('welcome')
    <p class="blink">Welcome to <span>Pandamic Fisheries</span></p>
	
@endsection
@section('main-content')
<section class="home-content">
    <div class="container bg_color">
        <div class="row">
            <div class="col-md-2 col-sm-2">
                <div class="side_menu">
                    <ul class="animated bounceInLeft">
                        <li>
                            <a class="hvr-wobble-horizontal" href=" {{ url('/project') }} ">Projects</a>
                        </li>
                        <ul id="nested" class="side_scroll_project">
                            @foreach($projects as $data)
                                <?php
                                    $proid = base64_encode($data->id);
                                ?>
                                <li><a href=" {{ url('/project-view/'.$proid) }} "><span>&bullet;</span> {{$data->name}}</a></li>
                            @endforeach
                        </ul>
                    </ul>
                </div>
            </div>
            <div class="col-md-8 col-sm-8 reduce_my">
                <div class="slider_content">
                    <div id="slider">
                        <div id="slides">
                            <?php
                            $i = 0;
                            ?>
                            @foreach($slider as $sliderImage)
                            <?php
                            $i = $i+1;
                            ?>
                            <div class="slide <?php if($i==1) echo"active-slide" ?>">
                                <img src=" {{ asset('public/BackEnd/slider_image/'.$sliderImage->filename) }} " class="slide-img" />
                            </div>
                            @endforeach
                        </div>
                        <img src=" {{ asset('public/FrontEnd/slider/right.png') }} " alt="right arrow" class="arrow right" />
                        <img src=" {{ asset('public/FrontEnd/slider/left.png') }} " alt="left arrow" class="arrow left" />
                        <div id="slider-nav">
                        <ul></ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-2 col-sm-2">
            <div class="video_link">
                <p class="text-center"><i class="fab fa-youtube"></i> Project Videos</p>
                @foreach($videos as $video)
                    <iframe src="{{$video->url}}"></iframe>
                    <a class="hvr-wobble-horizontal vdo" data-url="{{$video->url}}" href="#" data-toggle="modal" data-target="#video">Play <i class="fas fa-play"></i></a>
                @endforeach
            </div>
        </div>
        <div id="video" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="modal_video">
                            <iframe id="vdo_url" src=""></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<section class="home-content">
<div class="container bg_color">
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="choose-main">
                <h4 class="text-center">Pandamic Fisheries</h4>
                <p class="text-justify">Welcome to Pandamic Fisheries, where our commitment to sustainable fisheries and community engagement begins! We are delighted to have you visit our 50-acre fisheries project, a place dedicated to preserving aquatic life, supporting local communities, and fostering innovative practices in sustainable fishery management.

At Pandamic Fisheries, we believe in the harmony between nature and humanity. Our mission is to nurture and sustain the delicate ecosystem of our waters while ensuring the economic well-being of the communities that rely on them. Here, you will find a diverse array of fish species, carefully managed habitats, and a community of passionate individuals working towards a common goal.</p>
            </div>
        </div>
    </div>
</div>
</section>
@endsection

@push('script')
    <script type="text/javascript" src=" {{ asset('public/FrontEnd/slider/index.js') }} "></script>
    <script type="text/javascript">
        $(document).on("click", ".vdo", function () {
        var myUrl = $(this).data('url');
        var iframe = document.getElementById('vdo_url');
        iframe.src = myUrl;
        });
    </script>
@endpush