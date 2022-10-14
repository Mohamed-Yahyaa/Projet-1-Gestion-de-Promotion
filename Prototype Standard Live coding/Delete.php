<?php

include "Data-Access/PromotionManager.php";

$PromoBLL = new PromoManager;

if(isset($_GET["id"])){
   $id = $_GET["id"];
    $PromoBLL->Delete($id);
    header("Location:index.php");
}



?>