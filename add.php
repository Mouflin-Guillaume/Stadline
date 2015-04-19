<?php
include('bdd/bdd.php');//j'inclus le fichier bdd pour me connecter à ma base de données mysql
if(isset($_POST['textfield1']) && !empty($_POST['textfield1']) && isset($_POST['textfield2']) && !empty($_POST['textfield2']))
{
	//je regarde si les variables ne sont pas vides et si elles existent, si c'est le cas j'échappe les POST dans deux variables
	$textfield1 = $_POST['textfield1'];
	$textfield2 = $_POST['textfield2'];
	//requete pour l'insertion des champs 
	$sql = 'INSERT INTO Champs(textfield1,textfield2) values(:textfield1,:textfield2)';
	$query = $bdd->prepare($sql);
	$query->bindValue(':textfield1',$textfield1,PDO::PARAM_STR);
	$query->bindValue(':textfield2',$textfield2,PDO::PARAM_STR);
	$query->execute();

	//nouvelle requête pour sélectionner tous les champs 
	$sql1 = 'SELECT textfield1,textfield2 from Champs';


	 foreach($bdd->query($sql1) as $row)
	 {
	 	echo'<h3>'.$row['textfield1'].','.$row['textfield2'].'</h3>';
	 }



}
?>