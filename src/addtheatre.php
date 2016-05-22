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
        <title>Add Room</title>
</head>
<body>
<?php
include 'connectdb.php';
?>
<center>
<h1>Add Room</h1>
<form action="addt.php" method="post">
<b>Room Number:</b><input type="text" name="roomnumber"><br><br>
<b>Capacity:</b><input type="text" name="capacity"><br><br>
<input type="submit" value="Add Room"><br>
</form>
<br>
<ul>
<li><a href="theatre.php">Back</a></li>
</ul>
<?php
mysqli_close($connection);
?>
</center>
</body>
</html>
