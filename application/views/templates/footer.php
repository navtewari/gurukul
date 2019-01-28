 <!--/footer-->
 <footer class="footer">
            <div class="container-fluid p-lg-5 p-md-3">

                <div class="row py-sm-4 py-3">
                    <div class="col-lg-4 footer-end-grid">
                        <h2>
                            <a href="#"><span>GURUKUL</span>Academy</a>
                        </h2>
                        <p class="my-4 text-justify">Gurukul Academy came into existence in the year 2015. Its genesis lies in the joint vision of Sri Jai Kishan Arora & Sri Keval Arora & Mr Grish Prasad Hota & Mr. Satendra Singh. </p>
                        <h3>Follow Us</h3>
                        <ul class="social-icons text-center d-flex">
                            <li>
                                <a href="#">
                                    Facebook
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Twitter
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Google +
                                </a>
                            </li>                            
                        </ul>
                    </div>

                    <div class="col-lg-2 col-md-4">
                        <h3>Useful Link</h3>
                        <ul class="list-footer" >
                            <li>
                                <a href="<?php echo site_url().'/web';?>" class="nav-link">
                                    Home
                                </a>
                            </li>
                            <li class="my-2">
                                <a href="<?php echo site_url().'/web/about';?>" class="nav-link">
                                    About Us
                                </a>
                            </li>
                            <li class="my-2">
                                <a href="<?php echo site_url().'/web/academics';?>" class="nav-link">
                                    Academics
                                </a>
                            </li>
                            <li class="mb-2">
                                <a href="#" class="nav-link">
                                    Activities
                                </a>
                            </li>

                            <li class="mb-2">
                                <a href="<?php echo site_url(). '/web/administration';?>" class="nav-link">
                                    Administration
                                </a>
                            </li>

                        </ul>
                    </div>
                    <div class="col-lg-2  mt-sm-5">
                        <ul class="list-footer" >
                            <li>
                                <a href="#" class="nav-link">
                                    Finance
                                </a>
                            </li>
                            <li class="my-2">
                                <a href="<?php echo site_url(). '/web/miscellaneous'?>" class="nav-link">
                                    Miscellaneous
                                </a>
                            </li>
                            <li class="my-2">
                                <a href="<?php echo site_url(). '/web/gallery';?>" class="nav-link">
                                    Photo Gallery
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo site_url().'/web/contact';?>" class="nav-link">
                                    Contact Us
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="subscribe col-lg-4">
                        <h3>Find Us</h3>
                        <iframe width="100%" height="230" src="https://maps.google.com/maps?&amp;hl=en&amp;q=Gurukul%20Academy%2C%20Rudrapur-Gularbhoj%20road%2C%20uttarakhand%2C%20India+(Gurukul%20Academy)&amp;ie=UTF8&amp;t=&amp;z=10&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                    </div>
                </div>
                <hr>
                <div class="d-flex justify-content-between pt-lg-3  footer-bottom-cpy">
                    <div class="copy-right-w3layouts">
                        <p>© 2018 GURUKUL ACADEMY. All rights reserved | Designed by
                            <a href="https://www.teamfreelancers.com" target="_blank"> Teamfreelancers.com </a>
                        </p>
                    </div>
                    <div class="social-content pb-md-0 pb-4">
                        <ul class="social-icons text-center d-flex">                            
                            <li>
                                <a href="#">
                                    Admin Login
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        
        <!--//footer-->
        
        <!--//Register-->
        <script src="<?php echo base_url().'assets/js/jquery-2.2.3.min.js';?>"></script>

        <!-- sticky nav bar-->
        <script>
            $(() => {

                //On Scroll Functionality
                $(window).scroll(() => {
                    var windowTop = $(window).scrollTop();
                    windowTop > 100 ? $('nav').addClass('navShadow') : $('nav').removeClass('navShadow');
                    windowTop > 100 ? $('ul.nav-honey').css('top', '50px') : $('ul.nav-honey').css('top', '160px');
                });

                //Click Logo To Scroll To Top
                $('#logo').on('click', () => {
                    $('html,body').animate({
                        scrollTop: 0
                    }, 500);
                });

                //Smooth Scrolling Using Navigation Menu
                $('a[href*="#"]').on('click', function (e) {
                    $('html,body').animate({
                        scrollTop: $($(this).attr('href')).offset().top - 100
                    }, 500);
                    e.preventDefault();
                });

                //Toggle Menu
                $('#menu-toggle').on('click', () => {
                    $('#menu-toggle').toggleClass('closeMenu');
                    $('ul').toggleClass('showMenu');

                    $('li').on('click', () => {
                        $('ul').removeClass('showMenu');
                        $('#menu-toggle').removeClass('closeMenu');
                    });
                });

            });
        </script>
        <!-- //sticky nav bar -->
        <!-- simpleLightbox -->

        <script>
            $(document).ready(function () {
                $(".dropdown").hover(
                        function () {
                            $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                            $(this).toggleClass('open');
                        },
                        function () {
                            $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                            $(this).toggleClass('open');
                        }
                );
            });
        </script>
        
        <!--/ start-smoth-scrolling -->
        <script src="<?php echo base_url().'assets/js/move-top.js';?>"></script>
        <script src="<?php echo base_url().'assets/js/easing.js';?>"></script>
        <script>
            jQuery(document).ready(function ($) {
                $(".scroll").click(function (event) {
                    event.preventDefault();
                    $('html,body').animate({
                        scrollTop: $(this.hash).offset().top
                    }, 900);
                });
            });
        </script>
        <script>
            $(document).ready(function () {
                /*
                 var defaults = {
                 containerID: 'toTop', // fading element id
                 containerHoverID: 'toTopHover', // fading element hover id
                 scrollSpeed: 1200,
                 easingType: 'linear' 
                 };
                 */

                $().UItoTop({
                    easingType: 'easeOutQuart'
                });

            });
        </script>
        <!--// end-smoth-scrolling -->

        <!-- //js -->

        <script src="<?php echo base_url().'assets/js/bootstrap.js';?>"></script>

<script src="<?PHP echo base_url() . 'assets/js/jquery.easy-ticker.js'; ?>"></script>
<script src="<?php echo base_url(). 'assets/js/ticker.js';?>"></script>
<script type="text/javascript">
    $(document).ready(function () {

        var dd = $('.vticker').easyTicker({
            direction: 'up',
            easing: 'easeInOutBack',
            speed: 'slow',
            interval: 5000,
            height: 'auto',
            visible: 2,
            mousePause: 0,
            controls: {
                up: '.up',
                down: '.down',
                toggle: '.toggle',
                stopText: '<i class="fa fa-play" aria-hidden="true"></i>'
            }
        }).data('easyTicker');


        $('.vis').click(function () {
            dd.options['visible'] = 3;

        });

        $('.visall').click(function () {
            dd.stop();
            dd.options['visible'] = 0;
            dd.start();
        });

        $(".expand").on( "click", function() {
            $(this).next().slideToggle(200);
            $expand = $(this).find(">:first-child");
            
            if($expand.text() == "+") {
              $expand.text("-");
            } else {
              $expand.text("+");
            }
        });

    });
</script>

    </body>

</html>