<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <title>Delete Room</title>
</head>
<body>
<?php
include 'connectdb.php';
?>
<?php
        $roomNumber = $_POST["room"];
        $query = 'select * from Theatre where RoomNumber="' . $roomNumber . '"';
        $result=mysqli_query($connection,$query);
        if (!$result){
                die("Database Query Failed.");
        }
	if (!$roomNumber){
                die("There are one or more empty required fields.");
        }
	$queryTheatre = 'delete from Theatre where RoomNumber="' . $roomNumber . '"';
        if (!mysqli_query($connection,$queryTheatre)){
                die("Error: Room Deletion Failed " . mysqli_error($connection));
        }
        echo"Delete Room  Success!";
        mysqli_free_result($result);
?>
<?php
mysqli_close($connection);
?>
</body>
</html>
