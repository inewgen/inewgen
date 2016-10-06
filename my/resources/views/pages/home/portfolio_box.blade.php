        <div class="blog" id="portfolio">
            <div class="container">
                <div class="service-head text-center">
                    <h4>MY WORKS</h4>
                    <h3>MY <span>PORTFOLIO</span></h3>
                    <span class="border one"></span>
                </div>

<?php
            foreach ($pboxs as $k => $pbox) :
                    $key = $k % 2;
?>
                @if ($key == 0)
                <div class="news-grid w3l-agile">
                    <div class="col-md-6 news-img">
                        <a href="#" data-toggle="modal" data-target="#modal_{{ array_get($pbox, 'id', '') }}">
                            <img src="{{ env('APP_URL') }}/public/assets/images/work/{{ array_get($pbox, 'id', '') }}.png" alt=" " class="img-responsive">
                        </a>
                    </div>
                    <div class="col-md-6 news-text">
                        <h3> <a href="#" data-toggle="modal" data-target="#modal_{{ array_get($pbox, 'id', '') }}">{{ array_get($pbox, 'title', '') }}</a></h3>
                        <!-- <ul class="news">
                            <li><i class="glyphicon glyphicon-user"></i> <a href="#">Admin</a></li>
                            <li><i class="glyphicon glyphicon-comment"></i> <a href="#">2 Comments</a></li>
                            <li><i class="glyphicon glyphicon-heart"></i> <a href="#">50 Likes</a></li>
                            <li><i class="glyphicon glyphicon-tags"></i> <a href="#">3 Tags</a></li>
                        </ul> -->
                        <p>
                            {{ array_get($pbox, 'description', '') }}
                        </p>
                        <a href="#" data-toggle="modal" data-target="#modal_{{ array_get($pbox, 'id', '') }}" class="read hvr-shutter-in-horizontal">Read More</a>
                    </div>
                    <div class="clearfix"></div>
                </div>
                @else
                <div class="news-grid">
                    <div class="col-md-6 news-text two">
                        <h3> <a href="#" data-toggle="modal" data-target="#modal_{{ array_get($pbox, 'id', '') }}">{{ array_get($pbox, 'title', '') }}</a></h3>
                        <!-- <ul class="news">
                            <li><i class="glyphicon glyphicon-user"></i> <a href="#">Admin</a></li>
                            <li><i class="glyphicon glyphicon-comment"></i> <a href="#">2 Comments</a></li>
                            <li><i class="glyphicon glyphicon-heart"></i> <a href="#">50 Likes</a></li>
                            <li><i class="glyphicon glyphicon-tags"></i> <a href="#">3 Tags</a></li>
                        </ul> -->
                        <p>
                            {{ array_get($pbox, 'description', '') }}
                        </p>
                        <a href="#" data-toggle="modal" data-target="#modal_{{ array_get($pbox, 'id', '') }}" class="read hvr-shutter-in-horizontal">Read More</a>
                    </div>
                    <div class="col-md-6 news-img two">
                        <a href="#" data-toggle="modal" data-target="#modal_{{ array_get($pbox, 'id', '') }}">
                            <img src="{{ env('APP_URL') }}/public/assets/images/work/{{ array_get($pbox, 'id', '') }}.png" alt=" " class="img-responsive">
                        </a>
                    </div>
                    <div class="clearfix"></div>
                </div>
                @endif
<?php       endforeach; ?>

            </div>
        </div>

<?php
    foreach ($pboxs as $k => $pbox) :
?>
        <div class="modal ab fade" id="modal_{{ array_get($pbox, 'id', '') }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog about" role="document">
                <div class="modal-content about">
                    <div class="modal-header">
                        <button type="button" class="close ab" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>                     
                    </div>
                    <div class="modal-body about">
                        <div class="about">
                            <div class="about-inner">
                                <img style="width: 100%;" src="{{ env('APP_URL') }}/public/assets/images/work/{{ array_get($pbox, 'id', '') }}.png" alt="about"/>
                                <h4 class="tittle">{{ array_get($pbox, 'title', '') }}</h4>
                                <p>
                                    <a target="_blank" href="{{ array_get($pbox, 'url', '') }}">
                                        {{ array_get($pbox, 'description', '') }}
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php  
    endforeach; 
?>
