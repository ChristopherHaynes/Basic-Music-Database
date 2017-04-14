<html>
<head>
<title>Input Query</title>
</head>
<body>

<?php

//General Variables
$albumname = $_POST["albumname"];
$bandname = $_POST["bandname"];
$composername = $_POST["composername"];
$artist1 = $_POST["artist1"];
$artist2 = $_POST["artist2"];
$artist3 = $_POST["artist3"];
$artist4 = $_POST["artist4"];
$genre = $_POST["genre"];

//Song 1 Variables
$discnumber1 = $_POST["discnumber1"];
$tracknumber1 = $_POST["tracknumber1"];
$songname1 = $_POST["songname1"];
$songyear1 = $_POST["songyear1"];
$tracklength1 = $_POST["tracklength1"];
$rating1 = $_POST["rating1"];
$instrumental1 = $_POST["instrumental1"];

//Song 2 Variables
$discnumber2 = $_POST["discnumber2"];
$tracknumber2 = $_POST["tracknumber2"];
$songname2 = $_POST["songname2"];
$songyear2 = $_POST["songyear2"];
$tracklength2 = $_POST["tracklength2"];
$rating2 = $_POST["rating2"];
$instrumental2 = $_POST["instrumental2"];

//Song 3 Variables
$discnumber3 = $_POST["discnumber3"];
$tracknumber3 = $_POST["tracknumber3"];
$songname3 = $_POST["songname3"];
$songyear3 = $_POST["songyear3"];
$tracklength3 = $_POST["tracklength3"];
$rating3 = $_POST["rating3"];
$instrumental3 = $_POST["instrumental3"];

//Song 4 Variables
$discnumber4 = $_POST["discnumber4"];
$tracknumber4 = $_POST["tracknumber4"];
$songname4 = $_POST["songname4"];
$songyear4 = $_POST["songyear4"];
$tracklength4 = $_POST["tracklength4"];
$rating4 = $_POST["rating4"];
$instrumental4 = $_POST["instrumental4"];

//Song 5 Variables
$discnumber5 = $_POST["discnumber5"];
$tracknumber5 = $_POST["tracknumber5"];
$songname5 = $_POST["songname5"];
$songyear5 = $_POST["songyear5"];
$tracklength5 = $_POST["tracklength5"];
$rating5 = $_POST["rating5"];
$instrumental5 = $_POST["instrumental5"];

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

//Check to see if the entry is valid
if ($albumname == NULL && $bandname == NULL && $genre == NULL && $composername == NULL &&
	$artist1 == NULL && $artist2 == NULL && $artist3 == NULL && $artist4 == NULL && 
	$songname1 == NULL && $songname2 == NULL && $songname3 == NULL && $songname4 == NULL && $songname5 == NULL)
	{
	die( '<p>Invalid Entry! Too many blank fields!</p>');
	}

//Main Queries
//General Queries
$query1 = 	"INSERT INTO Album (albumName) 
			VALUES ('" .$albumname . "');";
			if ($albumname != NULL) {mysql_query($query1); echo "Album Name added! <br>";}
			
			//Set AlbumID Value
			if ($albumname != NULL){ 
				$queryalbumid = 	"SELECT albumID FROM Album WHERE albumName = '" . $albumname . "';";
				$result = mysql_query($queryalbumid);
				$albumid = mysql_result($result,0);
			}
			
$query2 = 	"INSERT INTO Band (bandName) 
			VALUES ('" .$bandname . "');";
			if ($bandname != NULL) {mysql_query($query2); echo "Band Name added! <br>";}
			
			//Set BandID Value
			if ($bandname != NULL){ 
					$querybandid = 	"SELECT bandID FROM Band WHERE bandName = '" . $bandname . "';";
					$result = mysql_query($querybandid);
					$bandid = mysql_result($result,0);
			}
			
$query3 = 	"INSERT INTO Composer (composerName) 
			VALUES ('" .$composername . "');";
			if ($composername != NULL) {mysql_query($query3); echo "Composer Name added! <br>";}
			
			//Set ComposerID Value
			if ($composername != NULL){ 
					$querycomposerid = 	"SELECT composerID FROM Composer WHERE composerName = '" . $composername . "';";
					$result = mysql_query($querycomposerid);
					$composerid = mysql_result($result,0);
			}
			
$query4 = 	"INSERT INTO Artist (artistName) 
			VALUES ('" .$artist1 . "');";
			if ($artist1 != NULL) {mysql_query($query4); echo "Artist 1 added! <br>";}
				
				//Set ArtistID1 Value
				if ($bandname != NULL && $artist1 != NULL){
					$query4_2 = 	"SELECT artistID FROM Artist WHERE artistName = '" . $artist1 . "';";
					$result = mysql_query($query4_2);
					$artistid1 = mysql_result($result,0);
					$query4_3 =		"INSERT INTO BandArtist VALUES (" . $artistid1 . ", " . $bandid . ");";
					mysql_query($query4_3);
				}
			
$query5 = 	"INSERT INTO Artist (artistName) 
			VALUES ('" .$artist2 . "');";
			if ($artist2 != NULL) {mysql_query($query5); echo "Artist 2 added! <br>";}
			
				//Set ArtistID2 Value
				if ($bandname != NULL && $artist2 != NULL){ 
					$query5_2 = 	"SELECT artistID FROM Artist WHERE artistName = '" . $artist2 . "';";
					$result = mysql_query($query5_2);
					$artistid2 = mysql_result($result,0);
					$query5_3 =		"INSERT INTO BandArtist VALUES (" . $artistid2 . ", " . $bandid . ");";
					mysql_query($query5_3);
				}
			
$query6 = 	"INSERT INTO Artist (artistName) 
			VALUES ('" .$artist3 . "');";
			if ($artist3 != NULL) {mysql_query($query6); echo "Artist 3 added! <br>";}
				
				//Set ArtistID3 Value
				if ($bandname != NULL && $artist3 != NULL){ 
					$query6_2 = 	"SELECT artistID FROM Artist WHERE artistName = '" . $artist3 . "';";
					$result = mysql_query($query6_2);
					$artistid3 = mysql_result($result,0);
					$query6_3 =		"INSERT INTO BandArtist VALUES (" . $artistid3 . ", " . $bandid . ");";
					mysql_query($query6_3);
				}
			
$query7 = 	"INSERT INTO Artist (artistName) 
			VALUES ('" .$artist4 . "');";
			if ($artist4 != NULL) {mysql_query($query7); echo "Artist 4 added! <br>";}
			
				//Set ArtistID4 Value
				if ($bandname != NULL && $artist4 != NULL){ 
					$query7_2 = 	"SELECT artistID FROM Artist WHERE artistName = '" . $artist4 . "';";
					$result = mysql_query($query7_2);
					$artistid4 = mysql_result($result,0);
					$query7_3 =		"INSERT INTO BandArtist VALUES (" . $artistid4 . ", " . $bandid . ");";
					mysql_query($query7_3);
				}
			
$query8 = 	"INSERT INTO Genre (genreName) 
			VALUES ('" .$genre . "');";
			if ($genre != NULL) {mysql_query($query8); echo "Genre Name added! <br>";}
			
			//Set GenreID Value
			if ($genre != NULL){ 
					$querygenreid = 	"SELECT genreID FROM Genre WHERE genreName = '" . $genre . "';";
					$result = mysql_query($querygenreid);
					$genreid = mysql_result($result,0);
			}
			
//Song Queries
if ($albumname != NULL && $bandname != NULL){

	$query9 = 	"INSERT INTO Song (songName, year, trackLength, instrumental, rating, bandID, composerID, genreID) 
				VALUES ('" .$songname1 . "', '" . $songyear1 . "', '" . $tracklength1 . "', '" . $instrumental1 . 
				"', '" . $rating1 . "', '" . $bandid . "', '" . $composerid . "', '" . $genreid . "');";
				if ($songname1 != NULL) {mysql_query($query9); echo "Song; " . $songname1 . " added! <br>";}
				
				//Set SongID1 Value
					if ($songname1 != NULL){ 
						$query9_2 = 	"SELECT songID FROM Song WHERE songName = '" . $songname1 . "';";
						$result = mysql_query($query9_2);
						$songid1 = mysql_result($result,0);
						$query9_3 =		"INSERT INTO AlbumSong VALUES (" . $albumid . ", " . $songid1 . ", "
																		. $discnumber1 . ", " . $tracknumber1 . ");";
						mysql_query($query9_3);
					}
				
	$query10 = 	"INSERT INTO Song (songName, year, trackLength, instrumental, rating, bandID, composerID, genreID) 
				VALUES ('" .$songname2 . "', '" . $songyear2 . "', '" . $tracklength2 . "', '" . $instrumental2 . "', '" . $rating2 . "', '" . $bandid . "', '" . $composerid . "', '" . $genreid . "');";
				if ($songname2 != NULL) {mysql_query($query10); echo "Song; " . $songname2 . " added! <br>";}
	
				//Set SongID2 Value
					if ($songname2 != NULL){ 
						$query10_2 = 	"SELECT songID FROM Song WHERE songName = '" . $songname2 . "';";
						$result = mysql_query($query10_2);
						$songid2 = mysql_result($result,0);
						$query10_3 =		"INSERT INTO AlbumSong VALUES (" . $albumid . ", " . $songid2 . ", " . $discnumber2 . ", " . $tracknumber2 . ");";
						mysql_query($query10_3);
					}
	
	$query11 = 	"INSERT INTO Song (songName, year, trackLength, instrumental, rating, bandID, composerID, genreID) 
				VALUES ('" .$songname3 . "', '" . $songyear3 . "', '" . $tracklength3 . "', '" . $instrumental3 . "', '" . $rating3 . "', '" . $bandid . "', '" . $composerid . "', '" . $genreid . "');";
				if ($songname3 != NULL) {mysql_query($query11); echo "Song; " . $songname3 . " added! <br>";}
				
				//Set SongID3 Value
					if ($songname3 != NULL){ 
						$query11_2 = 	"SELECT songID FROM Song WHERE songName = '" . $songname3 . "';";
						$result = mysql_query($query11_2);
						$songid3 = mysql_result($result,0);
						$query11_3 =		"INSERT INTO AlbumSong VALUES (" . $albumid . ", " . $songid3 . ", " . $discnumber3 . ", " . $tracknumber3 . ");";
						mysql_query($query11_3);
					}	
				
	$query12 = 	"INSERT INTO Song (songName, year, trackLength, instrumental, rating, bandID, composerID, genreID) 
				VALUES ('" .$songname4 . "', '" . $songyear4 . "', '" . $tracklength4 . "', '" . $instrumental4 . "', '" . $rating4 . "', '" . $bandid . "', '" . $composerid . "', '" . $genreid . "');";
				if ($songname4 != NULL) {mysql_query($query12); echo "Song; " . $songname4 . " added! <br>";}	
	
				//Set SongID4 Value
					if ($songname4 != NULL){ 
						$query12_2 = 	"SELECT songID FROM Song WHERE songName = '" . $songname4 . "';";
						$result = mysql_query($query12_2);
						$songid4 = mysql_result($result,0);
						$query12_3 =		"INSERT INTO AlbumSong VALUES (" . $albumid . ", " . $songid4 . ", " . $discnumber4 . ", " . $tracknumber4 . ");";
						mysql_query($query12_3);
					}			
			
	$query13 = 	"INSERT INTO Song (songName, year, trackLength, instrumental, rating, bandID, composerID, genreID) 
				VALUES ('" .$songname5 . "', '" . $songyear5 . "', '" . $tracklength5 . "', '" . $instrumental5 . "', '" . $rating5 . "', '" . $bandid . "', '" . $composerid . "', '" . $genreid . "');";
				if ($songname5 != NULL) {mysql_query($query13); echo "Song; " . $songname5 . " added! <br>";}
	
				//Set SongID5 Value
					if ($songname5 != NULL){ 
						$query13_2 = 	"SELECT songID FROM Song WHERE songName = '" . $songname5 . "';";
						$result = mysql_query($query13_2);
						$songid5 = mysql_result($result,0);
						$query13_3 =		"INSERT INTO AlbumSong VALUES (" . $albumid . ", " . $songid5 . ", " . $discnumber5 . ", " . $tracknumber5 . ");";
						mysql_query($query13_3);
					}
}	
else { echo "No Band Name or Album Name, Invalid Song Entry!"; }
?>
<p>
<a href= "input.php"> Click Here To Return To The Input Page</a>
</p>

</body>
</html>