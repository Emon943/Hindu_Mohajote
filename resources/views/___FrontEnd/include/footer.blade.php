<div class="container bg_color">
    <div class="row">
        <div class="col-md-12">
                <hr style="border:1px solid #f26422">
        </div>
    </div>
</div>

<footer class="footer-sec-w3layouts">
        <div class="container">
            <div class="w3ls-inner-sec py-lg-4 py-3">
                <div class="row mt-3">
                    <div class="col-lg-6 copyright">
                        <p>&copy; <?php echo date("Y"); ?> 
                            Pandamic Fisheries
                        </p>
                    </div>

                    <div class="col-lg-2 offset-md-4">
                        <div id="fb-root"></div>
                        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.2"></script>

                        <div class="fb-like" data-href="https://www.facebook.com/RoyaFoundationOrg/" data-layout="button_count" data-action="like" data-size="small" data-show-faces="false" data-share="true"></div>
                    </div>

                </div>
            </div>
        </div>
    </footer>
    <script src=" {{ asset('public/FrontEnd/js/jquery-2.2.3.min.js') }} "></script>
    @stack('script')
    <script src=" {{ asset('public/FrontEnd/js/bootstrap.js') }} "></script>
</body>
</html>