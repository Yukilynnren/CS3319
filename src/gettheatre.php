<?php
$query = "select * from Theatre";
$result = mysqli_query($connection,$query);
if (!$result){
        die("Databases Query Failed.");
}
echo "<b>Please select a Room:</b></br>";
while ($row = mysqli_fetch_assoc($result)){
        echo '<input type="radio" name="room" value="';
        echo $row["RoomNumber"];
        echo '">' . "Room Number: " . $row["RoomNumber"] . " - Capacity: " . $row["Capacity"] . "<br>";
        }
mysqli_free_result($result);
?>
