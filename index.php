<?php 
include('bdd/bdd.php');
include('add.php');
?>
<html lang="fr">
	<head>
		<meta charset = "utf-8">
		<title>Project Stadline</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/demo.css">
		<link rel="stylesheet" type="text/css" href="css/flat-ui.css">
		<script src="js/jquery.min.js"></script>
    	<script src="js/ajax.js"></script>
	</head>

	<body>
		<div class="container">
			<div class="demo-headline">
				<h1 class="demo-logo">Stadline</h1>
			</div>
			<h1 class="demo-section-title">Formulaire :</h1>
			<br>
			
			<div class="row demo-row">
			Si  à <input type="text" id="textfield1"> ans tu n'as pas <input type="text" id="textfield2">, tu as raté ta vie. 
			</div>
			<div class="row demo-row">
				<div class="col-xs-3">
					<button id="form_button" type="submit" class="btn btn-block btn-lg btn-primary">Ajouter</button>
				</div>
			</div>	
			



			<div class="row demo-row" id="result">


				<?php
				//Je sélectionne tous les textfield1 et textfield2 de la table champs pour ensuite les afficher avec le while
				$sql1 = 'SELECT textfield1,textfield2 FROM Champs';
				$query1 = $bdd->prepare($sql1);
				$query1->execute();


				while($ligne = $query1->fetch(PDO::FETCH_OBJ))
				{
					echo '<h3>'.$ligne->textfield1.','.$ligne->textfield2.'</h3>';
				}?>

			</div>

			<script type="text/javascript">
			//Dès que l'on clique sur le boutton Ajouter du formulaire, je récupére la valeur des deux champs et je regarde s'ils sont vides ou non. 
			//S'ils ne sont pas vides, j'envoie les valeurs des champs en POST sur la page add.php, j'affiche le résultat d'un la div id = result
				$(document).ready(function(){

					$('#form_button').click(function(){
						var textfield1 = $('#textfield1').val();
						var textfield2 = $('#textfield2').val();

						if(textfield1 != "" && textfield2 != "")
						{
							$.ajax({
							type:'POST',
							url:'add.php',
							data : {
								textfield1 : textfield1,
								textfield2 : textfield2
							},
							success:function(data){
								console.log(textfield1+textfield2);
								$('#result').html(data);
							}
						})
						}
						
					})
				});
			</script>
		</div>
		<footer>
	      <div class="container">
	        <div class="row">
	          <div class="col-xs-7">
	            <h3 class="footer-title">&copy;Mouflin Guillaume</h3>
	            
	          </div>
	        </div>
	      </div>
    	</footer>
    	
	</body>	
</html>