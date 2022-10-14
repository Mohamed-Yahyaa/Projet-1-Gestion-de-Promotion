
<?php

include "Data-Access/PromotionManager.php";
$PromoManager = new PromoManager();
if(!empty($_POST)){

    $Promo = new Promotion();
	$Promo->setName($_POST['Name']);
    
    $PromoManager->Add($Promo);
	
	// Redirection vers la page index.phpnpn
	header("Location: index.php");
}

?>



<form method="Post">
<input type="text" name="Name">
<button>ajouter</button>
</form>