<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <title>Update Genre</title>
</head>
<body>
<?php
include 'connectdb.php';
?>
<?php
        $movieID = $_POST["id"];
        $oldGenre = $_POST["oldgenre"];
	$newGenre = $_POST["newgenre"];
        $query = 'select * from Movie, MovieGenre where Movie.ID=MovieGenre.MovieID and Movie.ID="' . $movieID . '"';
        $result=mysqli_query($connection,$query);
        if (!$result){
                die("Database Query Failed.");
        }
	if (!$movieID || !$oldGenre || !$newGenre){
                die("There are one or more empty required fields.");
        }
        $queryGenre = 'update MovieGenre set Genre="' . $newGenre . '" where MovieID="' . $movieID . '" and Genre="' . $oldGenre . '"';
        if (!mysqli_query($connection,$queryGenre)){
                die("Error: Update Genre Failed " . mysqli_error($connection));
        }
        echo"Update Genre Success!";
        mysqli_free_result($result);
?>
<?php
mysqli_close($connection);
?>
</body>
</html>
