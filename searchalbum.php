<html>
<head>
<title>Album Name Search Query</title>
</head>
<body>

<?php

//General Variables
$albumname = $_POST["albumname"];

//DB Connection
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'usbw';
$dbname = 'musicdatabase';
$dbconn = mysql_connect($dbhost, $dbuser, $dbpass);
if (!$dbconn){die('Error connecting to the DB!');}
echo"Connected to sql<br>";
if (!@mysql_select_db($dbname)) 
  { 
  die( '<p>Unable to locate the main database at this time.</p>' ); 
  } 
echo"Connected to DB <br><br>";   

//Main Queries
if ($albumname != NULL){
	$query = 	"SELECT song.songName, album.albumName 
				FROM song
				JOIN albumsong
				ON song.songID = albumsong.songID
				JOIN album
				ON albumsong.albumID = album.albumID
				WHERE album.albumName ='" . $albumname . "';";
				
	$result = mysql_query($query);
	while ($row = mysql_fetch_array($result))
	{
	echo "  " . $row['albumName'] . "  "  . $row['songName'];
	echo "<br>";
	}
}
else { echo "Invalid Input!"; }

?>
<p>
<a href= "search.php"> Click Here To Return To The Search Page</a>
</p>

</body>
</html>