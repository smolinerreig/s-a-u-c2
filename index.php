<!DOCTYPE html>
<?php if (isset($_COOKIE['ARRAffinity'])) {
    unset($_COOKIE['ARRAffinity']);
    setcookie('ARRAffinity', '', time() - 3600, '/'); // empty value and old timestamp
} ?>
<html>
<head>
	<meta charset="UTF-8">
</head> 
<body onload="clearCookie('ARRAffinity')">
<p style="text-align: right; font-size: 0.8em">Instancia: <?php echo $_SERVER["WEBSITE_INSTANCE_ID"]?></p>
<h1>Icono del día</h1>

<img src="randomicon.php"/>
<script type="text/javascript">

function clearCookie(name){
   var domain = document.domain;
   var path = "/";
   document.cookie = name + "=; expires=Thu, 21 Sep 1979 00:00:01 UTC"+ "; domain=" + domain + "; path=" + path;
};

</script>
</body>
</html>



