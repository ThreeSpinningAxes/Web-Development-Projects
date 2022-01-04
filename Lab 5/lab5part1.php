<?php
session_start();
?>

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
 margin-right: auto;}
td {
        background-color: #D6EEEE;
        text-align:center;
        padding: 30px;
        font-style: Arial;

}
hr {margin:30px;}

</style>

</head>

<body>

<?php


$row = $_POST['X'];
$col = $_POST['Y'];

echo "<h1> A $row by $col Multiplication Table: </h1><hr>";

if (($row < 3 or $row > 12) or ($col < 3 or $col > 12))
{
        echo "<h3>The values for X and/or Y are not between 3 and 12 inclusively.</h3>";
        echo "<h3>Press the button to return to the initial form page.</h3>";
        echo "<form action=\"lab5form.html\" method=\"post\">
                        <input type=\"submit\" value=\"Return\">
                        </form>";

}
else
{
        echo "<table style=\"text-align:center;\">";
        for ($counter = 1; $counter <= $row; $counter+=1)
        {
                        echo "<tr>";
                        for ($counter2 = 1; $counter2 <= $col; $counter2+=1)
                        {
                                echo "<td style=\"height:50px\">";
                                echo $counter*$counter2;
                                echo "</td>";

                        }
                        echo "</tr>";
        }
        echo "</table>";
                echo "<br><form action=\"lab5form.html\" method=\"post\">
                        <input type=\"submit\" value=\"Get new table\">
                        </form>";
}
if(isset($_SESSION['views']))
        $_SESSION['views'] = $_SESSION['views']+ 1;
else
      $_SESSION['views'] = 1;
echo "<h4> Hit Counter: </h4>". $_SESSION['views'];

?>

</body>
</html>