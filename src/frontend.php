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
        <title>Ticket Management System</title>
</head>
<body>
<center>
<h1>Ticket Menu</h1>
<h3>Please select an option:</h3>
<ul>
<li><a href="sellticket.php">Sell Ticket</a></li>
<li><a href="rateshow.php">Rate Show</a></li>
<li><a href="listshow.php">List Showing</a></li>
<li><a href="movieinfo.php">Movies Watched</a></li>
<li><a href="custprofile.php">Customer Profile</a></li>
<li><a href="statistics.php">Statistics</a></li>
<li><a href="average.php">Average Ratings</a></li>
<li><a href="indexmenu.php">Back</a></li>
</ul>
</center>
</body>
</html>
