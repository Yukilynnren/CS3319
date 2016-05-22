<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <title>Add Customer</title>
</head>
<body>
<?php
include 'connectdb.php';
?>
<?php
        $firstName = $_POST["first"];
        $lastName = $_POST["last"];
        $gender= $_POST["sex"];
        $emailAddress = $_POST["email"];
        $query = 'select max(ID) as maxid from Customer';
        $result=mysqli_query($connection,$query);
        if (!$result){
                die("Database Max Query Failed.");
        }
	if (!$firstName || !$lastName || !$gender || !$emailAddress){
                die("There are one or more empty required fields.");
        }
	$row = mysqli_fetch_assoc($result);
	$newid = intval($row["maxid"])+1;
	$custid = (string)$newid;
        $queryCustomer = 'insert into Customer values("' . $firstName . '","' . $lastName . '","' . $custid . '","' . $gender . '","' . $emailAddress . '")';
        if (!mysqli_query($connection,$queryCustomer)){
                die("Error: Customer Insertion Failed " . mysqli_error($connection));
        }
        echo "Customer Insertion Success!";
        mysqli_free_result($result);
?>
<?php
mysqli_close($connection);
?>
</body>
</html>
