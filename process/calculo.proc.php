<?php

if (isset($_POST['submit'])){
    $cuenta= $_POST['cuenta'];
    $servicio= $_POST['servicio'];
    $personas= $_POST['personas'];
    if(is_numeric($cuenta)==true){
        $formula=($cuenta*$servicio)/$personas;
        header("Location:../index.php?tot=".$formula);
    } else {
        header("Location:../index.php?camp=");
    }
   

} else {
    header("Location:../index.php");
}