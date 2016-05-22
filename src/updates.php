<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <title>Add Movie</title>
</head>
<body>
<?php
include 'connectdb.php';
?>
<?php
        $movieID = $_POST["id"];
        $movieRoom = $_POST["room"];
        $movieDate = $_POST["date"];
        $movieTime = $_POST["time"];
	$showingID = $_POST["showid"];
        $query = 'select * from Showing where ID="' . $showingID . '"';
        $result=mysqli_query($connection,$query);
        if (!$result){
                die("Database Query Failed.");
        }
	if (!$movieID || !$movieRoom || !$movieDate || !$movieTime || !$showingID){
                die("There are one or more empty required fields.");
        }
        $queryShowing = 'update Showing set ShowDate="' . $movieDate . '", Showtime="' . $movieTime . '", MovieID="' . $movieID . '", TheatreID="' . $movieRoom . '" where ID="' . $showingID . '"';
        if (!mysqli_query($connection,$queryShowing)){
                die("Error: Update Showing Failed " . mysqli_error($connection));
        }
        echo "Update Showing Success!";
        mysqli_free_result($result);
?>
<?php
mysqli_close($connection);
?>
</body>
</html>
