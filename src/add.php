<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Add Movie</title>
</head>
<body>
<?php
include 'upload_file.php';
include 'connectdb.php';
?>
<?php
	$movieID = $_POST["movieid"];
	$movieName = $_POST["moviename"];
	$movieYear = $_POST["year"];
	$movieGenre = $_POST["genre"];
	$moviepicture = $_POST["file"];
	$query = 'select * from Movie';
	$result=mysqli_query($connection,$query);
	if (!$result){
		die("Database Query Failed.");
	}
	if (!$movieID || !$movieName || !$movieYear || !$movieGenre){
                die("There are one or more empty required fields.");
        }
	echo $moviepicture;
	$queryMovie = 'insert into Movie values("' . $movieID . '","' . $movieName . '","' . $movieYear . '","' . $moviepicture . '")';
	if (!mysqli_query($connection,$queryMovie)){
		die("Error: Movie Insertion Failed " . mysqli_error($connection));
	}

	$queryGenre = 'insert into MovieGenre values("' . $movieGenre . '","' . $movieID . '")';
	if (!mysqli_query($connection,$queryGenre)){
		die("Error: Movie Genre Insertion Failed " . mysqli_error($connection));
	}
	echo "Movie Insertion Success!";
	mysqli_free_result($result);
?>
<?php
mysqli_close($connection);
?>
</body>
</html>
