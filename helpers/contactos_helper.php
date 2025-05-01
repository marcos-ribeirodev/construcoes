<?php

function getContactos(){
    $resultado= selectSqlUnico("SELECT * FROM contactos");
    return $resultado;
}
?>