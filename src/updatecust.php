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
        <title>Update Customer Menu</title>
</head>
<body>
<?php
include 'connectdb.php';
?>
<center>
<h1>Update Customer</h1>
<form action="updatec.php" method="post">
<?php
include 'getcust.php';
?>
<br>
<b>First Name:</b><input type="text" name="first"><br><br>
<b>Last Name:</b><input type="text" name="last"><br><br>
<b>Sex:</b><br>
<input type="radio" name="sex" value="M">Male<br>
<input type="radio" name="sex" value="F">Female<br>
<br>
<b>Email:</b><input type="text" name="email"><br><br>
<input type="submit" value="Update Customer"><br>
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
