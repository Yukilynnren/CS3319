<?php
$query = "select * from Selected";
$result = mysqli_query($connection,$query);
if (!$result){
        die("Database Query Failed.");
}
echo "<b>Please select a recent show:</b></br>";
while ($row = mysqli_fetch_assoc($result)){
        echo '<input type="radio" name="showid" value="';
        echo $row["ShowingID"];
	echo '">' . "<b>Showing ID: </b>" . $row["ShowingID"] . " - " . "<b>Price: </b> " . $row["Price"] . " - " . "<b>Rating: </b> " . $row["Rating"] . "<br>";
        }
mysqli_free_result($result);
?>
