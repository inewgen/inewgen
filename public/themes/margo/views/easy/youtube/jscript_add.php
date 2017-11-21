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
        $('#url').focus();

	    $('#example').DataTable();

        $('#url').blur(function() {
            var url_string = $(this).val();
            if (url_string != '') {
                var url_new = new URL(url_string);
                var id = url_new.searchParams.get("v");
                var url = 'https://www.youtube.com/oembed?url=http://www.youtube.com/watch?v=' + id +'&format=json';
                $.ajax({ 
                    type: 'GET', 
                    url: url,
                    data: { get_param: 'value' }, 
                    dataType: 'json',
                    success: function (data) {
                        if (typeof data.title != 'undefinded') {
                            $('#name').val(data.title);

                            if (typeof data.author_name != 'undefinded') {
                                $('#artist').val(data.author_name);
                            }

                            if (typeof data.thumbnail_url != 'undefinded') {
                                $('#image').val(data.thumbnail_url);
                                $('#thumbnail_url').attr('src', data.thumbnail_url);
                                $('#thumbnail_url').show();
                            }
                            $('#btn_submit').prop('disabled', false);
                        } else {
                            console.log('error,', data);
                        }
                        console.log('data', data);
                    },
                    error: function (jqXHR, textStatus, errorThrown) {
                        if (jqXHR.status == 500) {
                            alert('Internal error: ' + jqXHR.responseText);
                        } else {
                            alert('Unexpected error.');
                        }
                    }
                });
            }
        })
	} );
</script>