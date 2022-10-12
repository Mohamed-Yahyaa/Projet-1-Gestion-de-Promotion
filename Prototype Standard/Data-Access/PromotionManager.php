<?php 

include 'promotion.php';
include 'ConnectionDB.php';

class PromoManager {

public function GetData(){

    $selectRow = "SELECT * from promo";
    $Query = mysqli_query(GetConnection(),$selectRow);
    $GetData = mysqli_fetch_all($Query,MYSQLI_ASSOC);
   $array= array();
    foreach ($GetData as $value){
    $promo = new Promo();
    $promo->SetId($value['id']);
    $promo->SetName($value['Name']);
    array_push($array,$promo);
    }
    
    return $array ;
}

public function Add($Promo){

$Name =$Promo->getName();

$insertRow="INSERT INTO promo(`Name`)
VALUES('$Name')";

mysqli_query(GetConnection(),$insertRow);

}


}





?>