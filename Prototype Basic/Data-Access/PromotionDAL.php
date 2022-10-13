<?php 

include 'promotion.php';
include 'MySqlConnection.php';

class PromotionDAL extends Connection {

public function GetData(){

    $selectRow = "SELECT * from promo";
    $Query = mysqli_query($this->connect(),$selectRow);
    $GetData = mysqli_fetch_all($Query,MYSQLI_ASSOC);
   $array= array();
    foreach ($GetData as $value){
    $promo = new Promotion();
    $promo->SetId($value['id']);
    $promo->SetName($value['Name']);
    array_push($array,$promo);
    }
    
    return $array ;
}

public function AddData($Promo){

$Name =$Promo->getName();

$insertRow="INSERT INTO promo(`Name`) 
VALUES( '$Name')";

mysqli_query($this->connect(), $insertRow);

}


}





?>