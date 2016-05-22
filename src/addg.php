<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <title>Insert Genre</title>
</head>
<body>
<?php
include 'connectdb.php';
?>
<?php
        $movieID = $_POST["id"];
	$movieGenre = $_POST["genre"];
        $query = 'select * from Movie, MovieGenre where Movie.ID=MovieGenre.MovieID and Movie.ID="' . $movieID . '"';
        $result=mysqli_query($connection,$query);
        if (!$result){
                die("Database Query Failed.");
        }
	if (!$movieID || !$movieGenre){
                die("There are one or more empty required fields.");
        }
	$queryGenre = 'insert into MovieGenre values("' . $movieGenre . '","' . $movieID . '")';
        if (!mysqli_query($connection,$queryGenre)){
                die("Error: Genre Insertion Failed " . mysqli_error($connection));
        }
        echo"Genre Insertion Success!";
        mysqli_free_result($result);
?>
<?php
mysqli_close($connection);
?>
</body>
</html>
