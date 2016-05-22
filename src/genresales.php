<?php
   $query = 'select count(ShowingID) as Sales from MovieGenre, Selected, Showing where Selected.ShowingID=Showing.ID and Showing.MovieID=MovieGenre.MovieID and MovieGenre.Genre="Action"';
   $result=mysqli_query($connection,$query);
    if (!$result) {
         die("Database Query Failed.");
     }
    while ($row=mysqli_fetch_assoc($result)) {
        echo "<b>Genre: </b> Action" . " - <b>Ticket Sales: </b>" . $row["Sales"] . "<br>";
     }
     mysqli_free_result($result);
?>
<?php
   $query = 'select count(ShowingID) as Sales from MovieGenre, Selected, Showing where Selected.ShowingID=Showing.ID and Showing.MovieID=MovieGenre.MovieID and MovieGenre.Genre="Animated"';
   $result=mysqli_query($connection,$query);
    if (!$result) {
         die("Database Query Failed.");
     }
    while ($row=mysqli_fetch_assoc($result)) {
        echo "<b>Genre: </b> Animated" . " - <b>Ticket Sales: </b>" . $row["Sales"] . "<br>";
     }
     mysqli_free_result($result);
?>
<?php
   $query = 'select count(ShowingID) as Sales from MovieGenre, Selected, Showing where Selected.ShowingID=Showing.ID and Showing.MovieID=MovieGenre.MovieID and MovieGenre.Genre="Comedy"';
   $result=mysqli_query($connection,$query);
    if (!$result) {
         die("Database Query Failed.");
     }
    while ($row=mysqli_fetch_assoc($result)) {
        echo "<b>Genre: </b> Comedy" . " - <b>Ticket Sales: </b>" . $row["Sales"] . "<br>";
     }
     mysqli_free_result($result);
?>
<?php
   $query = 'select count(ShowingID) as Sales from MovieGenre, Selected, Showing where Selected.ShowingID=Showing.ID and Showing.MovieID=MovieGenre.MovieID and MovieGenre.Genre="Romance"';
   $result=mysqli_query($connection,$query);
    if (!$result) {
         die("Database Query Failed.");
     }
    while ($row=mysqli_fetch_assoc($result)) {
        echo "<b>Genre: </b> Romance" . " - <b>Ticket Sales: </b>" . $row["Sales"] . "<br>";
     }
     mysqli_free_result($result);
?>
<?php
   $query = 'select count(ShowingID) as Sales from MovieGenre, Selected, Showing where Selected.ShowingID=Showing.ID and Showing.MovieID=MovieGenre.MovieID and MovieGenre.Genre="SciFi"';
   $result=mysqli_query($connection,$query);
    if (!$result) {
         die("Database Query Failed.");
     }
    while ($row=mysqli_fetch_assoc($result)) {
        echo "<b>Genre: </b> SciFi" . " - <b>Ticket Sales: </b>" . $row["Sales"] . "<br>";
     }
     mysqli_free_result($result);
?>
<?php
   $query = 'select count(ShowingID) as Sales from MovieGenre, Selected, Showing where Selected.ShowingID=Showing.ID and Showing.MovieID=MovieGenre.MovieID and MovieGenre.Genre="Thriller"';
   $result=mysqli_query($connection,$query);
    if (!$result) {
         die("Database Query Failed.");
     }
    while ($row=mysqli_fetch_assoc($result)) {
        echo "<b>Genre: </b> Thriller" . " - <b>Ticket Sales: </b>" . $row["Sales"] . "<br>";
     }
     mysqli_free_result($result);
?>
