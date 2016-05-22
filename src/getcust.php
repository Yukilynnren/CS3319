<?php
$query = "select * from Customer order by ID ASC";
$result = mysqli_query($connection,$query);
// Check if connection to database is successful
if (!$result) {
	die("Database Query Failed.");
	}
echo "<b>List of Customers:</b></br>";
while ($row = mysqli_fetch_assoc($result)){
	echo '<input type="radio" name="custid" value="';
	echo $row["ID"];
	echo '">' . "<b>ID: </b>" . $row["ID"] . " - " . "<b>Name: </b>" . $row["FirstName"] . ", " . $row["LastName"] . " -  <b>Sex: </b>" . $row["Sex"] . " -  <b>Email: </b>" . $row["Email"] . "<br>";
	}
mysqli_free_result($result);
?>
