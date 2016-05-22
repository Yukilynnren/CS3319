<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <title>Delete Showing</title>
</head>
<body>
<?php
include 'connectdb.php';
?>
<?php
        $showingID = $_POST["showid"];
        $query = 'select * from Showing where ID="' . $showingID . '"';
        $result=mysqli_query($connection,$query);
        if (!$result){
                die("Database Query Failed.");
        }
	if (!$showingID){
                die("There are one or more empty required fields.");
        }
        $queryShowing = 'delete from Showing where ID="' . $showingID . '"';
        if (!mysqli_query($connection,$queryShowing)){
                die("Error: Showing Deletion Failed " . mysqli_error($connection));
        }
        echo"Showing Deletion Success!";
        mysqli_free_result($result);
?>
<?php
mysqli_close($connection);
?>
