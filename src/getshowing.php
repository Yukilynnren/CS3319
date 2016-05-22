<?php
$query = "select * from Showing";
$result = mysqli_query($connection,$query);
if (!$result){
        die("Database Query Failed.");
}
echo "<b>Please select a Showing:</b></br>";
while ($row = mysqli_fetch_assoc($result)){
        echo '<input type="radio" name="showid" value="';
        echo $row["ID"];
        echo '">' . "<b>Movie ID: </b> " . $row["MovieID"] . " - " . "<b>Theatre ID: </b>" . $row["TheatreID"] . " - " . "<b>Show Date: </b> " . $row["ShowDate"] . " - " . "<b>Show Time: </b> " . $row["Showtime"] . "<br>";
        }
mysqli_free_result($result);
?>
