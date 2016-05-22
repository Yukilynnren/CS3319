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
        <title>Statistics</title>
</head>
<body>
<?php
include 'connectdb.php';
?>
<center>
<h1>Statistics</h1>
<h3>Genre and Ticket Sale Statistics:</h3>
<?php
	include 'genresales.php';
?>
<br>
<h3>Genre and Number of Movies:</h3>
<?php
	include 'moviecount.php';
?>
<br>
<ul>
<li><a href="frontend.php">Back</a></li>
</ul>
<?php
   mysqli_close($connection);
?>
</body>
</html>
