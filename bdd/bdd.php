
<?php

try
{
	$dns = 'mysql:host=localhost;dbname=Stadline;';
	$utilisateur ='root';
	$motDePasse ='root';
	$bdd = new PDO($dns, $utilisateur, $motDePasse, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));

}
catch (Exception $e)
{
	echo "Connexion à Mysql impossible : ", $e->getMessage();
	die();
	
}
?>