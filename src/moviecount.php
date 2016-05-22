<?php   $query = 'select count(Genre) as Num from MovieGenre where MovieGenre.Genre="Action"';
   $result=mysqli_query($connection,$query);
    if (!$result) {
         die("Database Query Failed.");
     }
    while ($row=mysqli_fetch_assoc($result)) {
        echo "<b>Genre: </b> Action" . " - <b>Number of Movies: </b>" . $row["Num"] . "<br>";
     }
     mysqli_free_result($result);
?>
<?php   $query = 'select count(Genre) as Num from MovieGenre where MovieGenre.Genre="Animated"';
   $result=mysqli_query($connection,$query);
    if (!$result) {
         die("Database Query Failed.");
     }
    while ($row=mysqli_fetch_assoc($result)) {
        echo "<b>Genre: </b> Animated" . " - <b>Number of Movies: </b>" . $row["Num"] . "<br>";
     }
     mysqli_free_result($result);
?>
<?php   $query = 'select count(Genre) as Num from MovieGenre where MovieGenre.Genre="Comedy"';
   $result=mysqli_query($connection,$query);
    if (!$result) {
         die("Database Query Failed.");
     }
    while ($row=mysqli_fetch_assoc($result)) {
        echo "<b>Genre: </b> Comedy" . " - <b>Number of Movies: </b>" . $row["Num"] . "<br>";
     }
     mysqli_free_result($result);
?>
<?php   $query = 'select count(Genre) as Num from MovieGenre where MovieGenre.Genre="Romance"';
   $result=mysqli_query($connection,$query);
    if (!$result) {
         die("Database Query Failed.");
     }
    while ($row=mysqli_fetch_assoc($result)) {
        echo "<b>Genre: </b> Romance" . " - <b>Number of Movies: </b>" . $row["Num"] . "<br>";
     }
     mysqli_free_result($result);
?>
<?php   $query = 'select count(Genre) as Num from MovieGenre where MovieGenre.Genre="SciFi"';
   $result=mysqli_query($connection,$query);
    if (!$result) {
         die("Database Query Failed.");
     }
    while ($row=mysqli_fetch_assoc($result)) {
        echo "<b>Genre: </b> SciFi" . " - <b>Number of Movies: </b>" . $row["Num"] . "<br>";
     }
     mysqli_free_result($result);
?>
<?php   $query = 'select count(Genre) as Num from MovieGenre where MovieGenre.Genre="Thriller"';
   $result=mysqli_query($connection,$query);
    if (!$result) {
         die("Database Query Failed.");
     }
    while ($row=mysqli_fetch_assoc($result)) {
        echo "<b>Genre: </b> Thriller" . " - <b>Number of Movies: </b>" . $row["Num"] . "<br>";
     }
     mysqli_free_result($result);
?>
