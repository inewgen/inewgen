<script src="http://www.youtube.com/player_api"></script>
<script type="text/javascript">
    /* ----------------- Start JS Document ----------------- */

    // create youtube player
    var player;

    function onYouTubePlayerAPIReady() {
        player = new YT.Player('player', {
            height: '390',
            width: '640',
            videoId: 'XKVq5QuSboo',
            events: {
                'onReady': onPlayerReady,
                'onStateChange': onPlayerStateChange
            }
        });
    }

    // autoplay video
    function onPlayerReady(event) {
        event.target.playVideo();
    }

    // when video ends
    function onPlayerStateChange(event) {
        if (event.data === 0) {
            alert('done');
        }
    }

    $(document).ready(function() {
	    $('#example').DataTable();
	} );
</script>