<?php

include 'configdbx.php';
$query = "select * from youtube where status=0 order by `timestamp` desc limit 1";
$result = mysql_query($query);
if (mysql_num_rows($result)) {
    $row = mysql_fetch_array($result);
    $id = $row["id"];
    $song_id['id'] = $row["song_id"];
    $song_id['q'] = $row["song"];
    echo json_encode($song_id);
    $q = "update youtube set status=1 where id='$id'";
    $res = mysql_query($q);
} else {
    echo "NULL";
}
?>
