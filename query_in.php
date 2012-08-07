<?php

$song = $_GET["message"];
$song = str_replace("'", "", $song);
$number = $_GET["mobile"];
if (!empty($song)) {
    include 'conn_db.php';
    $search = urlencode($song);
    $url = "http://gdata.youtube.com/feeds/api/videos?q=$search";
    $contents = file_get_contents($url);
    if (preg_match_all("~<media:player url='(.+)&amp;feature=youtube_gdata_player'/>~Usi", $contents, $match)) {
        $song_url = $match[1][0];
    }

    if (preg_match("~watch\?v=(.+)~si", $song_url, $id)) {
        $query = "insert into youtube (`number`,`song`,`status`,`song_id`,`song_url`)values('$number','$song','0','" . trim($id[1]) . "','$song_url')";
        if (mysql_query($query)) {
            echo "<html><body>Your Song Has Been Added To Playlist</body></html>";
        }
    } else {
        echo "<html><body>Sorry we could find the video for your query</body></html>";
    }
} else {
    echo "<html><body>Send #YOUTUBE <song name> to 55444</body></html>";
}
?>