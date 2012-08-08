##  YOUTUBE STREAMING APP USING 55444 

This directory contains 4 php files used to get user query through 55444 SMS platform, search appropriate video using youtube search api and stream the video in a webpage.

##### Work Flow:-
* When user sends a query to 55444 SMS app, 55444 system calls an api which we registered during app registration with the user query as get parameter. In this case query_in.php is the file which receives the user query.

* The same php file query_in.php search that user query in youtube search api and finds the matching video. It saves that video id into a mysql table. 

* streaming.php is the file which we have to open in a web browser. The file has java script which keeps on checking for new videos at 30sec interval. It uses get_video_id.php to get the new video id. If it receives new video id, it stops playing current video and plays new video otherwise it will continue playing current video.
 
* conn_db.php contains database connection details.

#####Note: 
Only one instance of streaming.php can be running at a time.


 
