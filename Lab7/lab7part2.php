<html>
<head>
<?php
$json = file_get_contents("https://s9.reliastream.com:2199/rpc/meyima03/streaminfo.get");
$array = json_decode($json, true);
?>

<style>
	img {
		border-radius: 8px;
		border: 1px solid black;
		width: 40%;
		height:auto;
	}
</style>

</head>

<body bgcolor="#800000">
<div style="text-align:center;">
<img src=<?php echo "\"".$array ['data'][0]['track']['imageurl']."\""; ?>>
<br>
<h2>
	<?php echo $array ['data'][0]['track']['artist']."<br>"; ?>
</h2>
	
<h3>
	<?php echo $array ['data'][0]['track']['title']."<br>"; ?>
	Time: <?php echo $array ['data'][0]['time']; ?>
</h3>

<audio controls>
<source src="https://s9.reliastream.com/proxy/meyima03/stream" type="audio/aac">
</audio>

</div>
</body>
</html>

