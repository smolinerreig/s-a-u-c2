<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<?php headers.Add("Arr-Disable-Session-Affinity", "True"); ?>
</head> 
<body>
<p style="text-align: right; font-size: 0.8em">Instancia: <?php echo $_SERVER["WEBSITE_INSTANCE_ID"]?></p>
<h1>Icono del día</h1>

<img src="randomicon.php"/>

</body>
</html>



