
<?php
	$queryShowing = 'select ID from Showing';
	$begin=mysqli_query($connection,$queryShowing);



	while($column=mysqli_fetch_assoc($begin)){
   $query = 'select Name, ShowDate, avg(Rating) as Avg from Movie, Showing, Selected where Movie.ID=Showing.MovieID and Showing.ID=Selected.ShowingID and Showing.ID="' . $column["ID"] . '"';
   $result=mysqli_query($connection,$query);
    if (!$result) {
         die("Database Query Failed.");
     }
    while ($row=mysqli_fetch_assoc($result)) {
        echo "<b>Movie Name: </b>" . $row["Name"] . " -- " . "<b>Rating Last Updated: </b>" . $row["ShowDate"] . " -- " . " <b>Average Rating: </b>" . $row["Avg"] . "<br>";
     }
     mysqli_free_result($result);
}
?>
