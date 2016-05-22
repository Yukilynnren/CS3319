<?php
$query = "select * from Movie order by Name ASC";
$result = mysqli_query($connection,$query);
if (!$result){
        die("Database Query Failed.");
}
echo "<b>Please select a Movie:</b></br>";
while ($row = mysqli_fetch_assoc($result)){
        echo '<input type="radio" name="id" value="';
        echo $row["ID"];
        echo '">' . $row["Name"] . " - " . $row["Year"] . "<br>";
        }
mysqli_free_result($result);
?>
