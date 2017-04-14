<html>
<head>
<title>Search Page</title>
</head>
<body>

<fieldset>
	<legend> Song Search Filters </legend>
<form action="searchsong.php" method="post"> 
	<pre> Song Name <input type="text" name="songname" size="20" maxlength="60">   
<input type="submit" value="Search by Song Name">
</form>
<form action="searchyear.php" method="post"> 
	<pre> Released After (year yyyy) <input type="text" name="releasedafter" size="5" maxlength="4">   
	<input type="submit" value="Search by Release">
</form>
<form action="searchcomposer.php" method="post"> 
	<pre> Composer <input type="text" name="composer" size="20" maxlength="60"> 
	<input type="submit" value="Search by Composer">
</form>	
<form action="searchband.php" method="post"> 
	<pre> Band <input type="text" name="band" size="20" maxlength="60">
	<input type="submit" value="Search by Band">
</form>
<form action="searchgenre.php" method="post"> 
	<pre> Music Genre <input type="text" name="genre" size="20" maxlength="60">  
	<input type="submit" value="Search by Genre">
</form>
<form action="searchartist.php" method="post"> 
	<pre> Containing Artist <input type="text" name="artist" size="20" maxlength="60">  
	<input type="submit" value="Search by Artist">
</form>
	
</fieldset>

<fieldset>
	<legend> Album Search Filters </legend>
<form action="searchalbum.php" method="post">
	<pre> Album Name <input type="text" name="albumname" size="20" maxlength="60">  
	<input type="submit" value="Search by Album Name">
</form>
<form action="searchtrack.php" method="post"><pre> 	
Album Name <input type="text" name="albumname" size="20" maxlength="60"> 
Disc Number <input type="text" name="discnumber" size="5" maxlength="2"> 
Track Number <input type="text" name="tracknumber" size="5" maxlength="3"> 
	<input type="submit" value="Search by Album Track">
</form>
</fieldset>

<p>
<a href="index.php"> Return To Main Menu</a>
</p>

</body>
</html>
