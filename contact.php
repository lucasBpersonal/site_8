<?php
$your_email = "contactenos@redcom.net.co";

$headers= "From: ".$_POST['name']." <".$_POST['email'].">\r\n";
$headers.='Content-type: text/html; charset=utf-8';
mail($your_email, $_POST['name'],  "
<html>
<head>
 <title>Mensaje de Contacto desde REDCOM</title>
</head>
<body>
	<h1>Mensaje de Contacto desde REDCOM</h1><br>
	<h3><strong>Nombre:</h3></strong>".$_POST['name']."<br>
	<h3><strong>Correo:</h3></strong>".$_POST['email']."<br>
	<h3><strong>Mensaje:</strong></h3>".$_POST['message']."<br>
</body>
</html>" , $headers);
header("Location: index.html"); 

?>
