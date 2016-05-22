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
   $movieID= $_POST["id"];
   $query = 'select * from Movie, Showing, Theatre where Movie.ID="' . $movieID . '" and Showing.MovieID="' . $movieID . '" and Showing.TheatreID=Theatre.RoomNumber ';
   echo "<b><h1>List Showing By Movie:</h1></b>";
   $result=mysqli_query($connection,$query);
    if (!$result) {
         die("Database Query Failed.");
     }
    if (!$movieID){
        die("Error: No Movie Selected");
        }
    while ($row=mysqli_fetch_assoc($result)) {
        echo "<b>Movie ID: </b>" . $row["MovieID"] . " - <b>Movie Name: </b>" . $row["Name"] . " - <b>Show Date: </b>" . $row["ShowDate"] . " - <b>Theatre: </b>" . $row["RoomNumber"] . "</br>";
	echo '<img src="' . $row["moviepicture"] . '" height="360" width="240">' . "<br>";	
}
     mysqli_free_result($result);
?>
<br>
<ul>
<li><a href="listbymovie.php">Back</a></li>
</ul>
<?php
   mysqli_close($connection);
?>
</body>
</html>
