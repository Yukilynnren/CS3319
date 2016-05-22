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
<center>
<h1>List Showing</h1>
<h3>Please select an option:</h3>
<ul>
<li><a href="listbygenre.php">By Genre</a></li>
<li><a href="listbydate.php">By Date</a></li>
<li><a href="listbyseats.php">By Seats Available</a></li>
<li><a href="listbymovie.php">By Movie</a></li>
<li><a href="frontend.php">Back</a></li>
</ul>
</center>
</body>
</html>
