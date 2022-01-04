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

<header> <h1 style="color:blue;"> Showing Pictures According to Your Selection </h1> <hr> </header>

<?php

$hostname = "webdev.scs.ryerson.ca";
$username = "dchudasa";
$password = "RecGodIv";
$database = "dchudasa";
$connect = mysqli_connect($servername, $username, $password, $database);


$optionsLocation = "'" . implode("','", $_POST['L']) . "'"; 
$optionsDate = "'" . implode("','", $_POST['G']) . "'";


$query = "Select picture_url, location, subject, YEAR(date_taken) FROM PHOTO WHERE location IN (" . $optionsLocation . ") 
		AND YEAR(date_taken) IN (" . $optionsDate . ")";
$result = mysqli_query($connect, $query);

if (mysqli_num_rows($result) > 0) { 
  while($row = mysqli_fetch_assoc($result)) {
		echo "<figure>";
		echo "<img src=\"" . $row['picture_url'];
		echo "\">";
		echo "<figcaption>".$row['subject'];
		echo "<br>".$row['location']."<br>";
		echo $row['YEAR(date_taken)']."<br>";
		echo "</figcaption>";
		echo "</figure>";

  }
} else {
  echo "<h3 style=\"color:red;\"> No pictures in database that are have the conditions specified in the form </h3>";
  
}
?>

</body>
</html>