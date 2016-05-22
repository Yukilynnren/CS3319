<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <title>Update Room</title>
</head>
<body>
<?php
include 'connectdb.php';
?>
<?php
        $roomNumber = $_POST["room"];
	$newRoom = $_POST["newroom"];
	$roomCapacity = $_POST["capacity"];
        $query = 'select * from Theatre where RoomNumber="' . $roomNumber . '" and Capacity="' . $roomCapacity . '"';
        $result=mysqli_query($connection,$query);
        if (!$result){
                die("Database Query Failed.");
        }
	if (!$roomNumber || !$newRoom || !$roomCapacity){
                die("There are one or more empty required fields.");
        }
        $queryTheatre = 'update Theatre set RoomNumber="' . $newRoom . '", Capacity="' . $roomCapacity . '" where RoomNumber="' . $roomNumber . '"';
        if (!mysqli_query($connection,$queryTheatre)){
                die("Error: Update Room Failed " . mysqli_error($connection));
      	}
	$queryShowing = 'update Showing set TheatreID="' . $newRoom . '" where TheatreID="' . $roomNumber . '"';
	if (!mysqli_query($connection,$queryShowing)){
		die("Error: Update Showing Failed " . mysqli_error($connection));
	}
        echo"Update Room Success!";
        mysqli_free_result($result);
?>
<?php
mysqli_close($connection);
?>
</body>
</html>
