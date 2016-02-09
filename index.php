<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
</head> 
<body>
<p style="text-align: right; font-size: 0.8em">Instancia: <?php echo $_SERVER["WEBSITE_INSTANCE_ID"]?></p>
<h1>Icono del día</h1>

<img src="randomicon.php"/>
<script type="text/javascript">
	window.onload = function() {
	  	document.cookie = 'ARRAffinity' + '=; expires=Thu, 01 Jan 1970 00:00:01 GMT;';
		console.log(document.cookie);
	};
	
</script>
</body>
</html>



