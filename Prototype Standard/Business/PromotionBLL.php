<?php

include ("Data-Access/PromotionManager.php");


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

    function GetpromoData($id){

      return $this->PromoManager->Getpromotion($id);

   }
   function EditData($id,$name){

      return $this->PromoManager->EditData($id,$name);

   }
    
 
}

?>