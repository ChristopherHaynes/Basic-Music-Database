<html>
<head>
<title>Input Page</title>
</head>
<body>

<form action="inputquery.php" method="post">
<pre>
<fieldset>
	<legend> General Information: </legend>
	Album Name <input type="text" name="albumname" size="20" maxlength="60">   
	Band Name <input type="text" name="bandname" size="20" maxlength="60">  
	Composer Name <input type="text" name="composername" size="20" maxlength="60">
	Artist 1 <input type="text" name="artist1" size="20" maxlength="60">  
	Artist 2 <input type="text" name="artist2" size="20" maxlength="60">
	Artist 3 <input type="text" name="artist3" size="20" maxlength="60">
	Artist 4 <input type="text" name="artist4" size="20" maxlength="60">
	Music Genre <input type="text" name="genre" size="20" maxlength="60">  
</fieldset>

<fieldset>
	<legend> Song 1 Information: </legend>
	Disc Number <input type="text" name="discnumber1" size="20" maxlength="2">
	Track Number <input type="text" name="tracknumber1" size="20" maxlength="2">
	Song Name <input type="text" name="songname1" size="20" maxlength="60">  
	Song Year <input type="text" name="songyear1" size="20" maxlength="4">  
	Track Length <input type="int" name="tracklength1" size="20" maxlength="4">  
	Rating <input type="text" name="rating1" size="20" maxlength="1">
	<input type="radio" name="instrumental1" value="1" checked> Not Instrumental
	<input type="radio" name="instrumental1" value="2"> Instrumental
</fieldset>

<fieldset>
	<legend> Song 2 Information: </legend>
	Disc Number <input type="text" name="discnumber2" size="20" maxlength="2">
	Track Number <input type="text" name="tracknumber2" size="20" maxlength="2">
	Song Name <input type="text" name="songname2" size="20" maxlength="60">  
	Song Year <input type="text" name="songyear2" size="20" maxlength="4">  
	Track Length <input type="int" name="tracklength2" size="20" maxlength="4">  
	Rating <input type="text" name="rating2" size="20" maxlength="1">
	<input type="radio" name="instrumental2" value="1" checked> Not Instrumental
	<input type="radio" name="instrumental2" value="2"> Instrumental
</fieldset>

<fieldset>
	<legend> Song 3 Information: </legend>
	Disc Number <input type="text" name="discnumber3" size="20" maxlength="2">
	Track Number <input type="text" name="tracknumber3" size="20" maxlength="2">
	Song Name <input type="text" name="songname3" size="20" maxlength="60">  
	Song Year <input type="text" name="songyear3" size="20" maxlength="4">  
	Track Length <input type="int" name="tracklength3" size="20" maxlength="4">  
	Rating <input type="text" name="rating3" size="20" maxlength="1">
	<input type="radio" name="instrumental3" value="1" checked> Not Instrumental
	<input type="radio" name="instrumental3" value="2"> Instrumental
</fieldset>

<fieldset>
	<legend> Song 4 Information: </legend>
	Disc Number <input type="text" name="discnumber4" size="20" maxlength="2">
	Track Number <input type="text" name="tracknumber4" size="20" maxlength="2">
	Song Name <input type="text" name="songname4" size="20" maxlength="60">  
	Song Year <input type="text" name="songyear4" size="20" maxlength="4">  
	Track Length <input type="int" name="tracklength4" size="20" maxlength="4">  
	Rating <input type="text" name="rating4" size="20" maxlength="1">
	<input type="radio" name="instrumental4" value="1" checked> Not Instrumental
	<input type="radio" name="instrumental4" value="2"> Instrumental
</fieldset>

<fieldset>
	<legend> Song 5 Information: </legend>
	Disc Number <input type="text" name="discnumber5" size="20" maxlength="2">
	Track Number <input type="text" name="tracknumber5" size="20" maxlength="2">
	Song Name <input type="text" name="songname5" size="20" maxlength="60">  
	Song Year <input type="text" name="songyear5" size="20" maxlength="4">  
	Track Length <input type="int" name="tracklength5" size="20" maxlength="4">  
	Rating <input type="text" name="rating5" size="20" maxlength="1">
	<input type="radio" name="instrumental5" value="1" checked> Not Instrumental
	<input type="radio" name="instrumental5" value="2"> Instrumental
</fieldset>

<input type="submit" value="Update Database">
<p>
<a href="index.php"> Return To Main Menu</a>
</p>

</body>
</html>
