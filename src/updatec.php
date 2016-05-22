<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <title>Update Customer</title>
</head>
<body>
<?php
include 'connectdb.php';
?>
<?php
        $custID = $_POST["custid"];
	$firstName = $_POST["first"];
        $lastName = $_POST["last"];
        $gender= $_POST["sex"];
        $emailAddress = $_POST["email"];
        $query = 'select * from Customer where ID="' . $custID . '"';
        $result=mysqli_query($connection,$query);
        if (!$result){
                die("Database Query Failed.");
        }
	if (!$custID || !$firstName || !$lastName || !$gender || !$emailAddress){
                die("There are one or more empty required fields.");
        }
        $queryCustomer = 'update Customer set FirstName="' . $firstName . '", LastName="' . $lastName . '", Sex="' . $gender . '", Email="' . $emailAddress . '" where ID="' . $custID . '"';
        if (!mysqli_query($connection,$queryCustomer)){
                die("Error: Update Customer Failed " . mysqli_error($connection));
        }
        echo "Update Customer Success!";
        mysqli_free_result($result);
?>
<?php
mysqli_close($connection);
?>
</body>
</html>

