        <div class="footer" id="contact">
            <div class="container">
                <div class="service-head one text-center">
                    <h4>CONTACT ME</h4>
                    <h3>GET <span>IN TOUCH WITH ME</span></h3>
                    <span class="border two"></span>
                </div>
                <div class="mail_us">
                    <div class="col-md-6 mail_left">
                        <div class="contact-grid1-left">
                            <div class="contact-grid1-left1">
                                <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
                                <h4>Contact By Email</h4>
                                <ul>
                                    <li>Mail1: <a href="mailto:info@example.com">info@example1.com</a></li>
                                    <li>Mail2: <a href="mailto:info@example.com">info@example2.com</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="contact-grid1-left">
                            <div class="contact-grid1-left1">
                                <span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
                                <h4>Contact By Phone</h4>
                                <ul>
                                    <li>Phone: +0000 123 312</li>
                                    <li>Fax: +123 312</li>
                                </ul>
                            </div>
                        </div>
                        <div class="contact-grid1-left">
                            <div class="contact-grid1-left1">
                                <span class="glyphicon glyphicon-home" aria-hidden="true"></span>
                                <h4>Looking For Address</h4>
                                <ul>
                                    <li>Address: General Pvt 66, Dong Da</li>
                                    <li>Hanoi, Vietnam.</li>
                                </ul>
                            </div>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="col-md-6 mail_right">
                        <form action="#" method="post">
                            <input type="text" name="Name" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
                            <input type="email" name="Email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
                            <input type="text" name="Mobile number" value="Mobile number" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Mobile number';}" required="">
                            <textarea name="Message..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}" required="">Message...</textarea>
                            <input type="submit" value="Send">
                        </form>
                    </div>
                    <div class="clearfix"></div>
                </div>

                @include('partials.footer')
        
            </div>
        </div>
        <!-- //footer -->
        <!-- /container -->
        <div class="portfolio-modal modal fade slideanim" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-content port-modal">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl"></div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2 text-center">
                            <div class="modal-body">
                                <h3>Image-Title</h3>
                                <img src="{{ env('APP_URL') }}/public/assets/images/pic4.jpg" class="img-responsive img-centered" alt="">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="portfolio-modal modal fade slideanim" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-content port-modal">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl"></div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2 text-center">
                            <div class="modal-body">
                                <h3>Image-Title</h3>
                                <img src="{{ env('APP_URL') }}/public/assets/images/pic9.jpg" class="img-responsive img-centered" alt="">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="portfolio-modal modal fade slideanim" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-content port-modal">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl"></div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2 text-center">
                            <div class="modal-body">
                                <h3>Image-Title</h3>
                                <img src="{{ env('APP_URL') }}/public/assets/images/pic5.jpg" class="img-responsive img-centered" alt="">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="portfolio-modal modal fade slideanim" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-content port-modal">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl"></div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2 text-center">
                            <div class="modal-body">
                                <h3>Image-Title</h3>
                                <img src="{{ env('APP_URL') }}/public/assets/images/pic6.jpg" class="img-responsive img-centered" alt="">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="portfolio-modal modal fade slideanim" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-content port-modal">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl"></div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2 text-center">
                            <div class="modal-body">
                                <h3>Image-Title</h3>
                                <img src="{{ env('APP_URL') }}/public/assets/images/pic10.jpg" class="img-responsive img-centered" alt="">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="portfolio-modal modal fade slideanim" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-content port-modal">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl"></div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2 text-center">
                            <div class="modal-body">
                                <h3>Image-Title</h3>
                                <img src="{{ env('APP_URL') }}/public/assets/images/pic11.jpg" class="img-responsive img-centered" alt="">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="portfolio-modal modal fade slideanim" id="portfolioModal7" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-content port-modal">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl"></div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2 text-center">
                            <div class="modal-body">
                                <h3>Image-Title</h3>
                                <img src="{{ env('APP_URL') }}/public/assets/images/pic13.jpg" class="img-responsive img-centered" alt="">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="portfolio-modal modal fade slideanim" id="portfolioModal8" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-content port-modal">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl"></div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2 text-center">
                            <div class="modal-body">
                                <h3>Image-Title</h3>
                                <img src="{{ env('APP_URL') }}/public/assets/images/pic14.jpg" class="img-responsive img-centered" alt="">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="portfolio-modal modal fade slideanim" id="portfolioModal9" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-content port-modal">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl"></div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2 text-center">
                            <div class="modal-body">
                                <img src="{{ env('APP_URL') }}/public/assets/images/pic1.jpg" class="img-responsive img-centered" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a href="#home" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>