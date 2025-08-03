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
<!--<li><a class="hvr-wobble-horizontal" href=" {{ url('/investor-relation') }} ">Investor Relation</a></li>-->
    <div class="container bg_color">
        <div class="row">
            <div class="col-md-2 col-sm-2">
                <div class="side_menu">
                    <ul class="animated bounceInLeft">
					   <li><a class="hvr-wobble-horizontal" href=" {{ url('/') }} ">Home</a></li>
                       <li><a class="hvr-wobble-horizontal" href=" {{ url('/about-us') }} ">About Us</a></li>
                       <li><a class="hvr-wobble-horizontal" href=" {{ url('/corporate-info') }} ">Member Information</a></li>
                        <li><a class="hvr-wobble-horizontal" href=" {{ url('/news-events') }} ">News & Events</a></li>
                        <li><a class="hvr-wobble-horizontal" href=" {{ url('/Notice') }} ">Notice</a></li>
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
                                <img src=" {{ asset('BackEnd/slider_image/'.$sliderImage->filename) }} " class="slide-img" />
                            </div>
                            @endforeach
                        </div>
                        <img src=" {{ asset('FrontEnd/slider/right.png') }} " alt="right arrow" class="arrow right" />
                        <img src=" {{ asset('FrontEnd/slider/left.png') }} " alt="left arrow" class="arrow left" />
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
                <p class="text-justify">The Hindu Mohajote (হিন্দু মহাজোট) is a socio-political organization in Bangladesh that represents the interests, rights, and welfare of the Hindu community — the largest religious minority in the country. With deep historical and cultural roots, the organization plays a vital role in advocating for the protection of Hindu rights, heritage, and social justice within the framework of a secular and democratic Bangladesh.</p>
            </div>
        </div>
    </div>
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
@endpush