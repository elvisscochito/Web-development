
<html>
<head>
<title>Problema</title>
</head>
<body>
<?php
if (isset($_POST['operacion'])=='suma')
{
$suma=$_POST['valor1']+$_POST['valor2'];
echo "La suma es:".$suma;
}
else {

$resta=$_POST['valor1']-$_POST['valor2'];
echo "La resta es:".$resta;
}






?>	
</body>
</html>
