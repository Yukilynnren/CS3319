<!DOCTYPE html>
<html>
<head>
<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    width: 220px;
    background-color: #f1f1f1;
    border: 1px solid #555;
}

li a {
    display: block;
    color: #000;
    padding: 8px 16px;
    text-decoration: none;
}

li {
    text-align: center;
    border-bottom: 1px solid #555;
    font-size: 150%;
}

li:last-child {
    border-bottom: none;
}

li a:hover:not(.active) {
    background-color: #555;
    color: white;
}
</style>
        <meta charset="utf-8">
        <title>List Showing</title>
</head>
<body>
<?php
include 'connectdb.php';
?>
<center>
<?php
$cusID = $_POST["cusid"];
$query = 'select * from Customer where ID="' . $cusID . '"';
$result = mysqli_query($connection,$query);
// Check if connection to database is successful
if (!$result) {
        die("Database Query Failed.");
        }
	$row=mysqli_fetch_assoc($result);
	echo "<b><h2>Customer Profile:</b></h2>";
        echo "<b>ID: </b>" . $row["ID"] . "<br>";
	echo "<b>Name: </b>" . $row["FirstName"] . ", " . $row["LastName"] . "<br>";
	echo "<b>Sex: </b>" . $row["Sex"] . "<br>"; 
	echo "<b>Email: </b>" . $row["Email"] . "<br>";
        
mysqli_free_result($result);
?>
<br>
<ul>
<li><a href="custprofile.php">Back</a></li>
</ul>
<?php
   mysqli_close($connection);
?>
</body>
</html>
