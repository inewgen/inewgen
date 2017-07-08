                    <div class="top-nav">
                        <div class="navigation">
                            <div class="logo">
                                <h1><a href="{{ env('APP_URL') }}"><span>S</span>URACHES</a></h1>
                            </div>
                            <div class="navigation-right">
                                <span class="menu"><img src="{{ env('APP_URL') }}/assets/images/menu.png" alt=" " /></span>
                                <nav class="link-effect-3" id="link-effect-3">
                                    <ul class="nav1 nav nav-wil">
                                        <li class="active"><a data-hover="Home" href="{{ env('APP_URL') }}">Home</a></li>
                                        <li><a class="scroll" data-hover="About" href="{{ env('APP_URL') }}#about">About</a></li>
                                        <li><a class="scroll" data-hover="Services" href="{{ env('APP_URL') }}#services" >Services</a></li>
                                        <li><a class="scroll" data-hover="Experience" href="{{ env('APP_URL') }}#work">Experience</a></li>
                                        <li><a class="scroll" data-hover="Portfolio" href="{{ env('APP_URL') }}#portfolio">Portfolio</a></li>
                                        <!-- <li><a class="scroll" data-hover="Blog" href="{{ env('APP_URL') }}#blogs">Blog</a></li> -->
                                        <li><a class="scroll" data-hover="Contact" href="{{ env('APP_URL') }}#contact">Contact</a></li>
                                    </ul>
                                </nav>
                                <!-- script-for-menu -->
                                <script>
                                    $( "span.menu" ).click(function() {
                                    $( "ul.nav1" ).slideToggle( 300, function() {
                                    // Animation complete.
                                    });
                                    });
                                </script>
                                <!-- /script-for-menu -->
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <!-- /top-hedader -->
                    </div>