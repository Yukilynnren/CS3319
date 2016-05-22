<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Delete Movie</title>
</head>
<body>
<?php
include 'connectdb.php';
?>
<?php
	$movieID = $_POST["id"];
	$query = 'select * from Movie, MovieGenre where Movie.ID=MovieGenre.MovieID and Movie.ID="' . $movieID . '"';
	$result=mysqli_query($connection,$query);
	if (!$result){
		die("Database Query Failed.");
	} 
	if (!$movieID){
                die("There are one or more empty required fields.");
        }
	$queryMovie = 'delete from Movie where ID="' . $movieID . '"';
	if (!mysqli_query($connection,$queryMovie)){
		die("Error: Movie Deletion Failed " . mysqli_error($connection));
	}

	$queryGenre = 'delete from MovieGenre where MovieID="' . $movieID . '"';
        if (!mysqli_query($connection,$queryGenre)){
                die("Error: Genre Deletion Failed " . mysqli_error($connection));
        }
	echo"Movie Deletion Success!";
	mysqli_free_result($result);
?>
<?php
mysqli_close($connection);
?>
</body>
</html>
