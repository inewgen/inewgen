<!--
    Author: W3layouts
    Author URL: http://w3layouts.com
    License: Creative Commons Attribution 3.0 Unported
    License URL: http://creativecommons.org/licenses/by/3.0/
    -->
<!DOCTYPE HTML>
<html>
    <head>
        <title>Preface a Personal Category Flat Bootstrap Responsive Website Template| Home :: w3layouts</title>
        <link href="{{ env('APP_URL') }}/public/assets/css/bootstrap.css" rel='stylesheet' type='text/css' />
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="{{ env('APP_URL') }}/public/assets/js/jquery.min.js"></script>
        <!-- Custom Theme files -->
        <link href="{{ env('APP_URL') }}/public/assets/css/style.css" rel='stylesheet' type='text/css' />
        <!-- Custom Theme files -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Preface Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
            Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
        <!-- webfonts -->
        <link href='//fonts.googleapis.com/css?family=Asap:400,700,400italic' rel='stylesheet' type='text/css'>
        <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
        <!-- webfonts -->
        <!---- start-smoth-scrolling---->
        <script type="text/javascript" src="{{ env('APP_URL') }}/public/assets/js/move-top.js"></script>
        <script type="text/javascript" src="{{ env('APP_URL') }}/public/assets/js/easing.js"></script>
        <script type="text/javascript">
            jQuery(document).ready(function($) {
                $(".scroll").click(function(event){     
                    event.preventDefault();
                    $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
                });
            });
        </script>
        <!---- start-smoth-scrolling---->
    </head>
    <body>

        <!-- container -->
        @yield('content')
        
        <!--start-smooth-scrolling-->
        <script type="text/javascript">
            $(document).ready(function() {
                /*
                var defaults = {
                        containerID: 'toTop', // fading element id
                    containerHoverID: 'toTopHover', // fading element hover id
                    scrollSpeed: 1200,
                    easingType: 'linear' 
                    };
                */
                
                $().UItoTop({ easingType: 'easeOutQuart' });
                
            });
        </script>
        <!--end-smooth-scrolling-->
        <!-- //for bootstrap working -->
        <script src="{{ env('APP_URL') }}/public/assets/js/bootstrap.js"></script>
    </body>
</html>