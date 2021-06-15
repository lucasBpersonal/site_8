<?php
var_dump($_POST)
$your_email = "lucas.1701716343@ucaldas.edu.co";

$headers= "From: ".$_POST['name']." <".$_POST['email'].">\r\n";
$headers.='Content-type: text/html; charset=utf-8';
mail($your_email, $_POST['name'],  "
<html>
<head>
 <title>Contact Message</title>
</head>
<body>
	Contact Message<br><br>
	Name : ".$_POST['name']."<br>
	Email : ".$_POST['email']."<br>
	Message : <br>".$_POST['message']."<br>
</body>
</html>" , $headers);
header("Location: index.html"); 

?>
