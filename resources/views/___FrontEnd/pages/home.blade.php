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
    <link rel="stylesheet" type="text/css" href=" {{ asset('public/FrontEnd/slider/style.css') }} " />
@endpush

@section('main-content')

<section class="home-content reduce_my">

    <div class="container bg_color">
        <div class="row">
            <div class="col-md-2 col-sm-2">
                <div class="side_menu">
                    <ul class="animated bounceInLeft">
					   <li><a class="hvr-wobble-horizontal" href=" {{ url('/') }} ">Home</a></li>
                       <li><a class="hvr-wobble-horizontal" href=" {{ url('/about-us') }} ">About Us</a></li>
                       <li><a class="hvr-wobble-horizontal" href=" {{ url('/corporate-info') }} ">Member</a></li>
                        <li><a class="hvr-wobble-horizontal" href=" {{ url('/news-events') }} ">News & Events</a></li>
						 <li class="dropdown">
                            <a class="hvr-wobble-horizontal dropbtn" href=" {{ url('/project') }} ">Projects</a>
                            <div class="dropdown-content side_scroll" id="drop_con">
                            @foreach($projects as $data)
                                <?php
                                    $proid = base64_encode($data->id);
                                ?>
                                <a href=" {{ url('/project-view/'.$proid) }} ">{{$data->name}}</a>
                            @endforeach
                            </div>
                        </li>
                        <!--<li><a class="hvr-wobble-horizontal" href="https://www.facebook.com/RoyaFoundationOrg" target="_blank">Facebook Page</a></li>-->
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
                <h4 class="text-center">History</h4>
                <p class="text-justify">After the liberation war of Bangladesh in 1971; National Leader Bangabandhu Sheikh Mujibur Rahman observed lack of skilled manpower for judicious exploitation and harvesting of marine fisheries resources. Then he called for a national institution to train and educate personnel for Bangladesh maritime fisheries industries which began in 2015. That time it was also the beginning of a rapid technological change in the deep sea fishing with the introduction of large and sophisticated deep sea fishing vessels. The Government realized that without skilled manpower i.e. qualified officers, the growth of an efficient fishing fleet would be impossible.</p>
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