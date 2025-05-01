<?php

function getTodasImagensFerias(){
    $resultado= selectSqlUnico("SELECT * FROM imagens_ferias");
    return $resultado;
}

function getAllferias(){
    $resultado= selectSQL("SELECT * FROM imagens_ferias");
    return $resultado;
}
function getImagensFeriasPeloID($id){
    $resultado = selectSQLUnico("SELECT * FROM imagens_ferias WHERE id='$id'");
    return $resultado;
}
?>