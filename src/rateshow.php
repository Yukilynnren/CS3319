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
        <title>Rate Show</title>
</head>
<body>
<?php
include 'connectdb.php';
?>
<center>
<h1>Rate Show</h1>
<form action="rate.php" method="post">
<b>Enter Customer ID:</b><input type="text" name="cusid"><br><br>
<?php
include 'getselected.php';
?>
<br>
<b>Rating:</b>
<br>
<input type="radio" name="rating" value="1">Poor - 1<br>
<input type="radio" name="rating" value="2">Mediocre - 2<br>
<input type="radio" name="rating" value="3">OK - 3<br>
<input type="radio" name="rating" value="4">Good - 4<br>
<input type="radio" name="rating" value="5">Very Good - 5<br>
<br>
<input type="submit" value="Rate Show"><br>
</form>
<br>
<ul>
<li><a href="frontend.php">Back</a></li>
</ul>
</center>
<?php
mysqli_close($connection);
?>
</body>
</html>
