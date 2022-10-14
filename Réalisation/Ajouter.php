
<?php

include "Business/PromotionBLL.php";
$PromoManager = new PromoBLL();
if(!empty($_POST)){

    $Promo = new Promotion();
	$Promo->setName($_POST['Name']);
    
    $PromoManager->AddData($Promo);
	
	// Redirection vers la page index.phpnpn
	header("Location: index.php");
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../Assets/add.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


	<title>Ajouter Promotion</title>
</head>
<body>
	<section id="section">
			<form method="Post" id="formAj">
				<h3>Ajouter promotion</h3>
				<input type="text" name="Name" class="input">
				<button id="btnA">ajouter</button>
			</form>
	</section>
	
</body>
</html>