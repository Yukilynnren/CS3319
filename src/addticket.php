<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <title>Sell Ticket</title>
</head>
<body>
<?php
include 'connectdb.php';
?>
<?php
        $customer = $_POST["custid"];
        $show = $_POST["showid"];
        $ticketprice = $_POST["price"];
        $emailAddress = $_POST["email"];
        $query = 'select * from Customer where ID="' . $customer . '"';
        $result=mysqli_query($connection,$query);
        if (!$result){
                die("Database Query Failed.");
        }
	if (!$customer || !$show || !$ticketprice || !$emailAddress){
                die("There are one or more empty required fields.");
        }
        $queryTicket = 'insert into Selected values("' . $customer . '","' . $show . '","' . $ticketprice . '",NULL)';
        if (!mysqli_query($connection,$queryTicket)){
                die("Error: Ticket Insertion Failed " . mysqli_error($connection));
        }
        echo "Ticket Sale Success!";
        mysqli_free_result($result);
?>
<?php
mysqli_close($connection);
?>
</body>
</html>
