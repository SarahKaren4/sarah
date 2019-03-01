<html>
<head>
<title>Somme de deux nombres</title>
</head>
<body>
<form name=f action="select.php" method=post>
<input type=text value="" name=nombre1> + <input type=text value="" name=nombre2> 
<input type="submit" value="Calculer" name="calcule">
</form>
</body>
</html>
<?php
if(isset($_POST['calcule']))
{
$nombre1=$_POST['nombre1'];
$nombre2=$_POST['nombre2'];
$resultat=$nombre1+$nombre2;
echo "Résultat = ".$resultat;
}
?>
