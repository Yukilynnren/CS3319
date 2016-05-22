<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <title>Delete Customer</title>
</head>
<body>
<?php
include 'connectdb.php';
?>
<?php
        $custID = $_POST["custid"];
        $movieGenre = $_POST["genre"];
        $query = 'select * from Customer where ID="' . $custID . '"';
        $result=mysqli_query($connection,$query);
        if (!$result){
                die("Database Query Failed.");
        }
	if (!$custID || !$movieGenre){
                die("There are one or more empty required fields.");
        }
        $queryCustomer = 'delete from Customer where ID="' . $custID . '"';
        if (!mysqli_query($connection,$queryCustomer)){
                die("Error: Customer Deletion Failed " . mysqli_error($connection));
        }
        echo"Customer Deletion Success!";
        mysqli_free_result($result);
?>
<?php
mysqli_close($connection);
?>
</body>
</html>
