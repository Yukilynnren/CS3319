<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <title>Rate Show</title>
</head>
<body>
<?php
include 'connectdb.php';
?>
<?php
        $cusID = $_POST["cusid"];
        $showID = $_POST["showid"];
	echo "$cusID";
	echo "$showID";
	$rateshow = $_POST["rating"];
        $query = 'select * from Selected  where CusID="' . $cusID . '"';
        $result=mysqli_query($connection,$query);
        if (!$result){
                die("Database Query Failed.");
        }

        $querySelected = 'update Selected set Rating="' . $rateshow . '" where CusID="' . $cusID . '"';
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
