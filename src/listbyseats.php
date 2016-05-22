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
   $query = 'select * from Movie, Theatre, Showing where Movie.ID=Showing.MovieID and Theatre.RoomNumber = Showing.TheatreID';
   echo "<b><h1>List Showing By Seats Available: </h1></b>";
   $result=mysqli_query($connection,$query);
    if (!$result) {
         die("Database Query Failed.");
     }
    while ($row=mysqli_fetch_assoc($result)) {
        echo "<b>Movie ID: </b>" . $row["MovieID"] . " - <b>Movie Name: </b>" . $row["Name"] . " - <b>Seats Available: </b>" . $row["Capacity"] . "</br>";
     }
     mysqli_free_result($result);
?>
<?php
   mysqli_close($connection);
?>
<br>
<ul>
<li><a href="listshow.php">Back</a></li>
</ul>
</body>
</html>
