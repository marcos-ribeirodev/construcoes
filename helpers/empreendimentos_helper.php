<?php

function getTodosEmpreendimentos(){
    $resultado= selectSql("SELECT id, titulo FROM empreendimentos");
    return $resultado;
}
function getAllEmpreendimentos(){
    $resultado= selectSQL("SELECT * FROM empreendimentos");
    return $resultado;
}

function getTudoEmpreendimentos(){
    $resultado= selectSqlUnico("SELECT * FROM empreendimentos");
    return $resultado;
}


function getEmpreendimentoPeloID($id){
    $resultado = selectSQLUnico("SELECT * FROM empreendimentos WHERE id='$id'");
    return $resultado;
}

?>