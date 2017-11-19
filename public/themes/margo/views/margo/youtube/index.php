<?php   if(isMobile()):
            $height = 'auto';
        else:
            $height = '100px';
        endif;
?>

<style type="text/css">
    .youtube-details2 {
      height: <?php echo $height;?>
    }
</style>

<!--Start Page Banner -->
<div class="page-banner">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2>Clips VDO</h2>
                <p></p>
            </div>
            <div class="col-md-6">
                <ul class="breadcrumbs">
                    <li><a href="<?php echo URL::to('');?>">Home</a></li>
                    <li>Clips VDO</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End Page Banner -->

<!-- Start Content -->
<div id="content">
    <div class="container">
        <div class="row sidebar-page">

            <div class="col-md-12 page-content">
                <!-- Search Widget -->
                <div class="widget widget-search">
                    <form action="<?php echo URL::to('clips');?>" method="get">
                        <div id="player"></div>
                    </form>
                </div>
            </div>
        
        </div>
    </div>
</div>
<!-- End Content