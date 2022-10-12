<?php


function GetConnection(){

    $connection = mysqli_connect("localhost",'root','','gestionpr');

return $connection;
}



?>