<?php

session_start();
date_default_timezone_set("Europe/Lisbon");

function fazerLogin($login, $senha){
    $usuario_encontrado = selectSQLUnico("SELECT * FROM backoffice WHERE login='$login'AND senha='$senha'");
    if(!empty($usuario_encontrado)){
      $_SESSION["usuario"] = $usuario_encontrado;
      $data_atual = date("H:i:s - d/m/Y");
      iduSQL("UPDATE backoffice SET data_ultimo_acesso='$data_atual' WHERE id=$usuario_encontrado[id]");
      return true;
    }
    else{return false;}
  }

function verificarLogin(){return !empty($_SESSION["usuario"]);}

function logout(){session_destroy();}

?>