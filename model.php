<?php
require_once("config.php");
function insertarflor($flor){ global $con;
    $query="INSERT INTO tipo(flor) VALUES('$flor')";
    $enviardato=mysqli_query($con, $query);
    $id_flor= 
ingresarColor($id_flor);

}
function ingresarcolor($id_flor){

}