<script src="http://www.youtube.com/player_api"></script>
<script type="text/javascript">
    /* ----------------- Start JS Document ----------------- */
<?php $code = array_get($youtube, '0.code', ''); ?>
<?php $id = array_get($youtube, '0.id', ''); ?>
    // create youtube player
    var player;

    function onYouTubePlayerAPIReady() {
<?php if (!empty($code)): ?>
        player = new YT.Player('player', {
            height: '700',
            width: '1140',
            videoId: '<?php echo $code; ?>',
            events: {
                'onReady': onPlayerReady,
                'onStateChange': onPlayerStateChange
            }
        });
<?php endif; ?>
    }

    // autoplay video
    function onPlayerReady(event) {
        event.target.playVideo();
    }

    // when video ends
    function onPlayerStateChange(event) {
        if (event.data === 0) {
            // alert('done');
<?php if (!empty($id)): ?>
            window.location.href = '<?php echo url('youtube/update/' . $id);?>';
<?php endif; ?>
        }
    }
</script>