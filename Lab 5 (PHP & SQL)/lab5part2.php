<html>
<head>

<style>
body{
        margin:15px;
        text-align:center;
}
table {border: 1px solid black;
border-spacing: 15px;
margin-left: auto;
margin-right: auto;
margin-bottom: 30px;}
td {
        background-color: #D6EEEE;
        text-align:center;
        padding: 30px;
        font-style: Arial;

}
hr {margin:30px;}

figure {display:inline-block;}

img {
	
	margin: 0px 20px 20px 20px;
	width: 350px;
	height: 300px;
	border: solid 2px red;
	border-radius: 25px;
	
}
figcaption {
	background-color: #D6EEEE;
	padding:5px;
	border: solid 2px black;
{
p{
	margin:10px;
}
</style>

</head>

<body>

<header> <h1 style="color:blue;"> Lab 5 Part 2! </h1> <hr> </header>

<?php

$hostname = "webdev.scs.ryerson.ca";
$username = "dchudasa";
$password = "RecGodIv";
$database = "dchudasa";
$connect = mysqli_connect($servername, $username, $password, $database);

$query = "Select subject, location, date_taken FROM PHOTO ORDER BY date_taken DESC";

$result = mysqli_query($connect, $query);

echo "<header> <h3> Showing subject, location, and date taken for all photos in the database </h3>";

if (mysqli_num_rows($result) > 0) {
echo "<table border='0'>
<tr>
<th>Subject</th>
<th>Location</th>
<th>Date Taken</th>
</tr>";
  while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
    echo "<td>" . $row['subject'] . "</td>";
        echo "<td>" . $row['location'] . "</td>";
        echo "<td>" . $row['date_taken'] . "</td>";
        echo "</tr>";
  }
  echo "</table><hr>";
} else {
  echo "<h3>No results.</h3><hr>";
}
echo "</header>";

echo "<div align=\"center\" style=text-align:center;\"> <header><h3> Pictures Only from Ontario</h3>";

$query2 = "Select picture_url, subject, location FROM PHOTO WHERE location='Ontario'";
$result2 = mysqli_query($connect, $query2);

if (mysqli_num_rows($result2) > 0) { 
  while($row2 = mysqli_fetch_assoc($result2)) {
		echo "<figure>";
		echo "<img src=\"" . $row2['picture_url'];
		echo "\">";
		echo "<figcaption>".$row2['subject'];
		echo "<br>".$row2['location'];
		echo "</figcaption>";
		echo "</figure>";

  }
} else {
  echo "<h3 style=\"color:red;\"> No pictures in database that are located in Ontario </h3>";
  
}
echo "</header></div><hr>";

echo "<div><header><h3>A Random Image from the Database</h3>";
$query3 = "Select picture_url, subject, location FROM PHOTO ORDER BY RAND() LIMIT 1";

$result3 = mysqli_query($connect, $query3);

if (mysqli_num_rows($result3) > 0) { 
  while($row3 = mysqli_fetch_assoc($result3)) {
		echo "<figure>";
		echo "<img src=\"" . $row3['picture_url'];
		echo "\">";
		echo "<figcaption>".$row3['subject'];
		echo "<br>".$row3['location'];
		echo "</figcaption>";
		echo "</figure>";

  }
  echo "<h3> There are currently ";
  $query4 = "SELECT COUNT(picture_url) FROM PHOTO";
  $result4 = mysqli_query($connect, $query4);
  $ans = mysqli_fetch_array($result4);
  echo $ans[0];
  echo " images in the database </h3>";
  
} else {
  echo "<h3 style=\"color:red;\"> No pictures in database</h3>";
}
echo "</header></div>";
?>

</body>
</html>
