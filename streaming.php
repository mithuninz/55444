<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
    <head>
        <title>55444</title>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js" type="text/javascript"></script>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    </head>
    <body>
        <script language=JavaScript>
            
            <!--

            var message="Function Disabled!";

            ///////////////////////////////////
            function clickIE4(){
                if (event.button==2){
                    alert(message);
                    return false;
                }
            }

            function clickNS4(e){
                if (document.layers||document.getElementById&&!document.all){
                    if (e.which==2||e.which==3){
                        alert(message);
                        return false;
                    }
                }
            }

            if (document.layers){
                document.captureEvents(Event.MOUSEDOWN);
                document.onmousedown=clickNS4;
            }
            else if (document.all&&!document.getElementById){
                document.onmousedown=clickIE4;
            }

            document.oncontextmenu=new Function("alert(message);return false")

            // --> 
        </script>	   
               <div>
            <center>
                <h3>
                    <div id="np" style=" font-family: Georgia;"></div>
                </h3>
                <div id="video"> <script type="text/javascript" src="http://www.slickchixradio.com/swfobject.js"></script>    
                    <div id="ytapiplayer">You need Flash player 8+ and JavaScript enabled to view this video.</div>
                </div>
                <script type="text/javascript">
                
                    swfobject.registerObject("flashcontent", "9.0.0");
			
                    function onYouTubePlayerReady(playerId) {
                        var o = document.getElementById( 'ytplayer_object' );
                        if ( o ) {
                            o.addEventListener( "onStateChange", "ytplayer_statechange" );
                            o.addEventListener( "onError", "ytplayer_error" );
                        }
                        ytplayer_playlazy( 10 );
                    }
		
                    function getPlayerState() {
                        var o = document.getElementById( 'ytplayer_object' );
                        if (o) {
                            return o.getPlayerState();
                        }
                    }
			
                    function mute() {
                        var o = document.getElementById( 'ytplayer_object' );
                        if (o.isMuted()) {
                            o.unMute();
                        }
                        else {
                            o.mute();
                        }
                    }
			
                    function play() {
                        var state = getPlayerState();
                        var o = document.getElementById( 'ytplayer_object' );
                        if (o) {
                            if (state = 2) {
                                o.playVideo();
                            }
                            else if (state = 0) {
                                o.playVideo();
                            }
                        }
                    }
			
			
                    function getVolume() {
                        var o = document.getElementById( 'ytplayer_object' );
                        if (o) {
                            return o.getVolume();
                        }
                    }
			
                    function setVolume(newVolume) {
                        var o = document.getElementById( 'ytplayer_object' );
                        if (o) {
                            o.setVolume(newVolume);
                        }
                    }
			
                    function clamp(value, bottom, top) { return (value < bottom) ? bottom : (value > top) ? top : value; }
                    function changeVolume(adjustment) { setVolume(clamp(getVolume() + adjustment, 0, 100)); }
                    function setVolumeUp() { changeVolume(25); }
                    function setVolumeDown() { changeVolume(-25); }

	
			
                    var ytplayer_playlist = [ ];
                    var ytplayer_playitem = 0;
                    var intr = 500;
                    var data = 'test';
                
                
                    swfobject.addLoadEvent(ytplayer_render_player );
		
                    function myload(){
                        setTimeout(function(){myTimer()},intr);
                    }
                
                    function myTimer(){
                        $.get("get_video_id.php",  null, function (data) {                        
                            if(data != 'NULL'){
                                var video = eval ('(' + data + ')');
//                                ytplayer_playlist.push( video.id ); 
                                ytplayer_play(video.id);
//                                ytplayer_playitem++;
                                $("#np").text("#NowPlaying: " + video.q);
                                intr = 30000;
                            }else{
                                intr = 3000;
                            }
                            setTimeout(function(){myTimer()},intr);
                        });
                    }
                    function ytplayer_render_player() {
                        swfobject.embedSWF (
                        'http://www.youtube.com/apiplayer?enablejsapi=1&version=3',
                        'ytapiplayer',
                        '1300',
                        '734',
                        '8',
                        null,
                        null,
                        {
                            allowScriptAccess: 'always',
                            allowFullScreen: 'true'
                        },
                        {
                            id: 'ytplayer_object'
                        }
                    );
                        myload();
                    }
			
                    function ytplayer_playlazy( delay ) {
                        if ( typeof ytplayer_playlazy.timeoutid != 'undefined' ) {
                            window.clearTimeout( ytplayer_playlazy.timeoutid );
                        }
                        ytplayer_playlazy.timeoutid = window.setTimeout( ytplayer_play, delay );
                    }
			
                    function ytplayer_play( video_id ) {
                        $("#video").html('<iframe width="960" height="720" src="http://www.youtube.com/embed/'+video_id+'?autoplay=1" frameborder="0" allowfullscreen></iframe>');
                        return;
                        var o = document.getElementById( 'ytplayer_object' );
                        if ( o ) {
                            o.loadVideoById( video_id );//ytplayer_playlist[ ytplayer_playitem ] );
                        }
                    }
			
                    function ytplayer_statechange( state ) {
                        if ( state == 0 ) {
                            ytplayer_playitem += 1;
                            ytplayer_playitem %= ytplayer_playlist.length;
                            ytplayer_playlazy( 5000 );
                        }
                    }
			
                    function ytplayer_error( error ) {
                        if ( error ) {
                            ytplayer_playitem += 1;
                            ytplayer_playitem %= ytplayer_playlist.length;
                            ytplayer_playlazy( 5000 );
                        }
                    }
            
                </script>

                <div style="font-family: Tahoma">Send #youtube &lt;Song Name&gt; to 55444 to play your favorite songs.</div>

            </center>
        </div>
    </body>
</html>