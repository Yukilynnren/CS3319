<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <title>Rate Movie</title>
</head>
<body>
<?php
include 'connectdb.php';
?>
<?php
	$cusID = $_POST["cusid"];
	$showID = $_POST["showid"];
	$movRATE = $_POST["rating"];
        $query = 'select * from Selected where CusID="' . $cusID . '" and ShowingID="' . $showID . '"';
        $result=mysqli_query($connection,$query);
        if (!$result){
                die("Error: Customer Did Not Attend This Show!");
        }
	if(!$cusID || !$showID || $movRATE){
		die("Error: One or more options have no been selected");
	}
        $queryRating = 'update Selected set Rating="' . $movRATE . '" where CusID="' . $cusID . '" and ShowingID="' . $showID . '"';
        if (!mysqli_query($connection,$queryRating)){
                die("Error: Rate Movie Failed " . mysqli_error($connection));
        }
        echo"Rate Movie Success!";
        mysqli_free_result($result);
?>
<?php
mysqli_close($connection);
?>
</body>
</html>    
