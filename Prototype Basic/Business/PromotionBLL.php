<?php

include ("../Data-Access/PromotionDAL.php");


class PromoBLL{

    private $PromoManager = null ;
    public  function __construct()
    {
       $this->PromoManager = new PromotionDAL();
    
    }


    function GetAllData(){

       return $this->PromoManager->GetData();

    }
    function AddData($Promo){

       return $this->PromoManager->AddData($Promo);

    }
    
 
}

?>