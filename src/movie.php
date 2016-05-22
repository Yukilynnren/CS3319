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
        <title>Movie Management System</title>
</head>
<body>
<center>
<h1>Movie Admin Menu</h1>
<h3>Please select an option:</h3>
<ul>
<li><a href="addmovie.php">Add Movie</a></li>
<li><a href="deletemovie.php">Delete Movie</a></li>
<li><a href="updatemovie.php">Update Movie</a></li>
<li><a href="backend.php">Back</a></li>
</ul>
</center>
</body>
</html>
