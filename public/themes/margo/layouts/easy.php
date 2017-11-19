<!doctype html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><html lang="en" class="no-js"> <![endif]-->
<html lang="en">

<head>

    <!-- Basic -->
    <title>iNewGen :: Clips VDO</title>

    <!-- <link rel="icon" type="image/png" sizes="32x32" href="//www.inewgen.com/favicons/favicon-32x32.png?v=1">
    <link rel="icon" type="image/png" sizes="16x16" href="//www.inewgen.com/favicons/favicon-16x16.png?v=1"> -->
    <link rel="shortcut icon" href="<?php echo URL::to('');?>/favicon.ico" type="image/x-icon" />

    <!-- Define Charset -->
    <meta charset="utf-8">

    <!-- Responsive Metatag -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Page Description and Author -->
    <meta name="description" content="Clips VDO description">
    <meta name="author" content="iNewGen">
    <link rel="stylesheet" href="<?php echo URL::to('public/themes/margo');?>/assets/bootstrap/css/bootstrap.min.css" type="text/css" media="screen">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="<?php echo URL::to('public/themes/margo');?>/assets/css/font-awesome.min.css" type="text/css" media="screen">
    <link media="all" type="text/css" rel="stylesheet" href="<?php echo URL::to('public/themes/margo');?>/assets/plugins/datatables/dataTables.bootstrap.css">
    <script type="text/javascript" src="<?php echo URL::to('public/themes/margo');?>/assets/js/jquery-2.1.1.min.js"></script>

</head>

<body>
    <!-- Full Body Container -->
    <div id="container">
        <!-- <header class="clearfix">
            <div class="navbar navbar-default navbar-top">
                <div class="container">
                    <div class="navbar-header">
                
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <i class="fa fa-bars"></i>
                        </button>
             
                        <a class="navbar-brand" href="http://www.inewgen.com" style="padding-top: 27px; padding-bottom: 27px;">
      
                            <img alt="" src="http://res.inewgen.com/img/default/inewgen_logo_full/png/140/40/logo.jpg">
                        </a>
                    </div>
                    <div class="navbar-collapse collapse">
                    
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a class="active" href="http://www.inewgen.com" style="padding-top: 28px; padding-bottom: 28px;">Home</a>
                            
                            </li>
                            <li>
                                <a href="http://www.inewgen.com/pages" style="padding-top: 28px; padding-bottom: 28px;">Pages</a>
                                
                            </li>
                            <li>
                                <a href="http://www.inewgen.com/news/" style="padding-top: 28px; padding-bottom: 28px;">News</a>
                                
                            </li>
                            <li>
                                <a href="http://www.inewgen.com/clips" style="padding-top: 28px; padding-bottom: 28px;">Clips VDO</a>
                                
                            </li>
                            <li>
                                <a href="http://board.inewgen.com" target="_blank" style="padding-top: 28px; padding-bottom: 28px;">Webboard</a>
                                
                            </li>
                            <li><a href="http://www.inewgen.com/contact" style="padding-top: 28px; padding-bottom: 28px;">Contact</a>
                            </li>
                        </ul>
                       
                    </div>
                </div>
            </div>
        </header> -->
        <!-- Start Header Section -->
        <div class="hidden-header"></div>
        <!-- Start Header Section -->

        <?php echo Theme::content();?>

    </div>
    <!-- End Full Body Container -->

    <!-- Go To Top Link -->
    <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

    <script src="<?php echo URL::to('public/themes/margo');?>/assets/plugins/datatables/jquery.dataTables.js"></script>
    <script src="<?php echo URL::to('public/themes/margo');?>/assets/plugins/datatables/dataTables.bootstrap.js"></script>
    <?php echo Theme::asset()->container('inline_script')->scripts();?>
</body>

</html>