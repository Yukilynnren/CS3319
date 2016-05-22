<?php
$query = "select * from Movie, MovieGenre where Movie.ID = MovieGenre.MovieID order by Movie.Name ASC";
$result = mysqli_query($connection,$query);
if (!$result){
        die("Database Query Failed.");
}
echo "<b>Please select a Genre:</b></br>";
while ($row = mysqli_fetch_assoc($result)){
        echo '<input type="radio" name="id" value="';
        echo $row["ID"];
        echo '">' . $row["Name"] . " - " . $row["Year"] . " - " . $row["Genre"] . "<br>";
        }
mysqli_free_result($result);
?>
