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
        <title>Delete Customer Menu</title>
</head>
<body>
<?php
include 'connectdb.php';
?>
<center>
<h1>Delete Customer</h1>
<form action="deletec.php" method="post">
<?php
include 'getcust.php';
?>
<br>
<input type="submit" value="Delete Customer"><br>
</form>
<br>
<ul>
<li><a href="customer.php">Back</a></li>
</ul>
<?php
mysqli_close($connection);
?>
</center>
</body>
</html>
