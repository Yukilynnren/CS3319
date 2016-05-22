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
        <title>Update Genre Menu</title>
</head>
<body>
<?php
include 'connectdb.php';
?>
<center>
<h1>Update Genre</h1>
<form action="updateg.php" method="post">
<?php
include 'getgenre.php';
?>
<br>
<b>Please Select an Existing Genre:</b>
<br>
<input type="radio" name="oldgenre" value="Action">Action<br>
<input type="radio" name="oldgenre" value="Animated">Animated<br>
<input type="radio" name="oldgenre" value="Comedy">Comedy<br>
<input type="radio" name="oldgenre" value="Romance">Romance<br>
<input type="radio" name="oldgenre" value="SciFi">SciFi<br>
<input type="radio" name="oldgenre" value="Thriller">Thriller<br>
<br>
<b>Please Select a New Genre:</b>
<br>
<input type="radio" name="newgenre" value="Action">Action<br>
<input type="radio" name="newgenre" value="Animated">Animated<br>
<input type="radio" name="newgenre" value="Comedy">Comedy<br>
<input type="radio" name="newgenre" value="Romance">Romance<br>
<input type="radio" name="newgenre" value="SciFi">SciFi<br>
<input type="radio" name="newgenre" value="Thriller">Thriller<br>
<br>
<input type="submit" value="Update Genre"><br>
</form>
<br>
<ul>
<li><a href="genre.php">Back</a></li>
</ul>
</center>
<?php
mysqli_close($connection);
?>
</body>
</html>
