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
        $query = 'select max(ID) as maxid from Showing';
        $result=mysqli_query($connection,$query);
        if (!$result){
                die("Database Max Query Failed.");
        }
	if (!$movieID || !$movieRoom || !$movieDate || !$movieTime){
                die("There are one or more empty required fields.");
        }
	$row = mysqli_fetch_assoc($result);
	$newid = intval($row["maxid"])+1;
	$showingid = (string)$newid;
        $queryShowing = 'insert into Showing values("' . $showingid . '","' . $movieDate . '","' . $movieTime . '","' . $movieID . '","' . $movieRoom . '")';
        if (!mysqli_query($connection,$queryShowing)){
                die("Error: Showing Insertion Failed " . mysqli_error($connection));
        }
        echo "Showing Insertion Success!";
        mysqli_free_result($result);
?>
<?php
mysqli_close($connection);
?>
</body>
</html>
