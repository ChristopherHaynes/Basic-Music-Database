<html>
<head>
<title>Song Genre Search Query</title>
</head>
<body>

<?php

//General Variables
$genre = $_POST["genre"];

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
if ($genre != NULL){
	$query = 	"SELECT song.songName, genre.genreName
				FROM song
				JOIN genre
				ON genre.genreID = song.genreID
				WHERE genre.genreName ='" . $genre . "';";
				
	$result = mysql_query($query);
	while ($row = mysql_fetch_array($result))
	{
	echo "  " . $row['genreName'] . "  "  . $row['songName'];
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