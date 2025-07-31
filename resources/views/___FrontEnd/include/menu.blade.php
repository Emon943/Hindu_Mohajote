<div class="main-sec" id="home">
    <div class="container bg_color">
        <div class="row">
            <div class="col-md-3 col-sm-3">
                <div class="logo">
                    <a class="roya_logo" href=" {{ url('/') }} ">
                        <img src=" {{ asset('public/FrontEnd/images/logo.png') }} " alt="">
                    </a>
                </div>
            </div>
            <div class="col-md-5 col-sm-5">
                <div class="welcome">
                    <p>@yield('welcome')</p>
                </div>
            </div>
			
			 
            <div class="col-md-4 col-sm-4 navbar-expand-lg navbar-light">
                <div class="menu_my collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav nav-margin">
					   <li><a href=" {{ url('/') }} ">Home</a></li>
					    <li><a href=" {{ url('/project') }} ">Projects</a></li>
                        <li><a href=" {{ url('/about-us') }} ">About Us</a></li>
                        <li><a id="bdr_none" href=" {{ url('/contact-us') }} ">Contacts Us</a></li>
                        <!--<li><a id="bdr_none" href=" {{ url('/want-help') }} ">Want to Help?</a></li>-->
                    </ul>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
			<div class="col-md-12 col-sm-12">
                <div class="marquee">
                    <p>@yield('marquee')</p>
                </div>
            </div>
        </div>
		

        <div class="row">
            <div class="col-md-12">
                <hr style="border:1px solid #f26422">
            </div>
        </div>
    </div>
</div>