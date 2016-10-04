        <div id="about" class="about">
            <div class="col-md-6 about-left">
                <div id="owl-demo1" class="owl-carousel owl-carousel2">
                    <div class="item">
                        <div class="about-left-grid">
                            <h2>Hi! I'm <span>Suraches Seesat</span></h2>
                            <p>
                                I graduated with a bachelor’s degree in Information Engineering
                                from King Mongkut's Institute of Technology Ladkrabang, Thailand, GPA.2.84/4<br> 
                                In my course of study I took courses in Programming, Database, Information Technology course and related course.
                            </p>
                            <ul>
                                <li><a class="a-btn-a scroll" href="#port">My Work</a></li>
                                <li><a class="a-btn-h scroll" href="#contact">Hire Me</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="item">
                        <div class="about-left-grid">
                            <h2>Hi! I'm <span>Suraches Seesat</span></h2>
                            <p>
                                I would like to have a good job which brings a stable income, have security, a family and be able to do some good things that people can remember me by.
                            </p>
                            <ul>
                                <li><a class="a-btn-a scroll" href="#port">My Work</a></li>
                                <li><a class="a-btn-h scroll" href="#contact">Hire Me</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- <div class="item">
                        <div class="about-left-grid">
                            <h2>Hi! I'm <span>ROB LEE</span></h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis.</p>
                            <ul>
                                <li><a class="a-btn-a scroll" href="#port">My Work</a></li>
                                <li><a class="a-btn-h scroll" href="#contact">Hire Me</a></li>
                            </ul>
                        </div>
                    </div> -->
                </div>
            </div>
            <div class="col-md-6 about-right">
            </div>
            <div class="clearfix"> </div>
            <link href="{{ env('APP_URL') }}/public/assets/css/owl.carousel.css" rel="stylesheet">
            <script src="{{ env('APP_URL') }}/public/assets/js/owl.carousel.js"></script>
            <script>
                $(document).ready(function() {
                    $("#owl-demo1").owlCarousel({
                        items : 1,
                        lazyLoad : false,
                        autoPlay : true,
                        navigation : false,
                        navigationText :  false,
                        pagination : true,
                    });
                });
            </script>
            <!-- Feedback -->
            <script>
                $(document).ready(function() {
                    $("#owl-demo3").owlCarousel({
                        items : 1,
                        lazyLoad : false,
                        autoPlay : true,
                        navigation : false,
                        navigationText :  true,
                        pagination :true,
                    });
                });
            </script>
        </div>