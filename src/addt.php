<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <title>Add Room</title>
</head>
<body>
<?php
include 'connectdb.php';
?>
<?php
        $roomNumber = $_POST["roomnumber"];
        $roomCapacity = $_POST["capacity"];
        $query = 'select * from Theatre';
        $result=mysqli_query($connection,$query);
        if (!$result){
                die("Database Query Failed.");
        }
	if (!$roomNumber || !$roomCapacity){
                die("There are one or more empty required fields.");
        }
        $queryTheatre = 'insert into Theatre values("' . $roomNumber . '","' . $roomCapacity . '")';
        if (!mysqli_query($connection,$queryTheatre)){
                die("Error: Room Insertion Failed " . mysqli_error($connection));
        }

        echo "Room Insertion Success!";
        mysqli_free_result($result);
?>
<?php
mysqli_close($connection);
?>
</body>
</html>
