<?php
require_once("model.php");
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $flor=$_POST ['flor'];
    if(insertarflor($flor)) echo "Se ha registrado la flor";
}