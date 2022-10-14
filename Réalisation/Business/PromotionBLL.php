<?php

include ("../Data-Access/PromotionDAL.php");


class PromoBLL{

    private $PromoManager = null ;
    public  function __construct()
    {
       $this->PromoManager = new PromoManager();
    
    }


    function GetAllData(){

       return $this->PromoManager->GetData();

    }
    function AddData($Promo){

       return $this->PromoManager->Add($Promo);

    }
    function DeleteData($id){

      return $this->PromoManager->delete($id);

    }

    function Edit($id){

      return $this->PromoManager->Edit($id);

   }
   function Update($id,$name){

      return $this->PromoManager->Update($id,$name);

   }
    
 
}

?>

