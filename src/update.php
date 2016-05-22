<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <title>Update Movie</title>
</head>
<body>
<?php
include 'connectdb.php';
?>
<?php
        $movieID = $_POST["id"];
	$movieName = $_POST["moviename"];
	$movieYear = $_POST["year"];
	$movieGenre = $_POST["genre"];
        $query = 'select * from Movie, MovieGenre where Movie.ID=MovieGenre.MovieID and Movie.ID="' . $movieID . '"';
        $result=mysqli_query($connection,$query);
        if (!$result){
                die("Database Query Failed.");
        }
	if (!$movieID || !$movieName || !$movieYear || !$movieGenre){
                die("There are one or more empty required fields.");
        }
        $queryMovie = 'update Movie set Name="' . $movieName . '", Year="' . $movieYear . '" where ID="' . $movieID . '"';
        if (!mysqli_query($connection,$queryMovie)){
                die("Error: Movie Update Failed " . mysqli_error($connection));
        }

        $queryGenre = 'update MovieGenre set Genre="' . $movieGenre . '" where MovieID="' . $movieID . '"';
        if (!mysqli_query($connection,$queryGenre)){
                die("Error: Genre Update Failed " . mysqli_error($connection));
        }
        echo"Update Movie Success!";
        mysqli_free_result($result);
?>
<?php
mysqli_close($connection);
?>
</body>
</html>
