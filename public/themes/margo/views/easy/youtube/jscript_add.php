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

    function setFormEmpty() {
        $('#name').val('');
        $('#artist').val('');
        $('#image').val('');
        $('#thumbnail_url').attr('src', '');
        $('#thumbnail_url').hide();
    }

    $(document).ready(function() {
        $('#url').focus();

	    $('#example').DataTable();

        $('#url').blur(function() {
            var url_string = $(this).val();
            url_string = url_string.trim();
            setFormEmpty();

            if (url_string != '') {
                var type1 = 'www.youtube.com';
                var type2 = 'youtu.be';

                if (url_string.indexOf(type1) !== -1) {
                    var url_new = new URL(url_string);
                    var id = url_new.searchParams.get("v");
                } else if (url_string.indexOf(type2) !== -1) {
                    var parts = url_string.split("youtu.be/");
                    var id = parts[1];
                }

                if (typeof id != "undefined" && id != null) {
                    var url = '<?php echo url('youtube'); ?>/detail/' + id;
                    $.ajax({ 
                        type: 'GET', 
                        url: url,
                        data: { get_param: 'value' }, 
                        dataType: 'json',
                        success: function (data) {
                            if (data != null && data.title != null && typeof data.title != 'undefinded') {
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
                                console.log('Internal error: ' + jqXHR.responseText);
                            } else {
                                console.log('Unexpected error.');
                            }
                        }
                    });
                }
            }
        })
	} );
</script>