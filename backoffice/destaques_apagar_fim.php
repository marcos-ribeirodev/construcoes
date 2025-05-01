<?php

require_once("../requisitos.php");

if(!verificarLogin()){
    header("Location: index.php");
    exit();
}

$form = !empty($_GET["apagar"]);
if($form){
  $id = $_GET["apagar"];
  iduSQL("DELETE FROM destaques WHERE id=$id");
  header("Location: destaques.php");
}

?>
