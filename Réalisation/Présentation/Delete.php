<?php

include "../Business/PromotionBLL.php";

$PromoBLL = new PromoBLL();

if(isset($_GET["id"])){
   $id = $_GET["id"];
    $PromoBLL->DeleteData($id);
    header("Location:index.php");
}



?>