<?php

$total_elementos_pagina = 6;

function getTodosDestaquesHome(){
    $resultado= selectSQL("SELECT * FROM destaques WHERE esta_na_home=1");
    return $resultado;
}

function getDestaquePeloID($id){
    $resultado = selectSQLUnico("SELECT * FROM destaques WHERE id='$id'");
    return $resultado;
}

function getTodosDestaques(){
    $resultado= selectSQL("SELECT * FROM destaques");
    return $resultado;
}

// Paginação

function getTotalElementosDestaque(){
    $resultado = selectSQLUnico("SELECT count(*) as total FROM destaques");
    return $resultado ["total"];
}

function getTotalPaginasDestaque(){
    global $total_elementos_pagina;
    $resultado = ceil(getTotalElementosDestaque() / $total_elementos_pagina);
    return $resultado;
}

function getDestaquesPorPagina($pagina){
    global $total_elementos_pagina;
    $ponto_inicial = $total_elementos_pagina * ($pagina - 1);
    $resultado = selectSQL("SELECT * FROM destaques ORDER BY id DESC LIMIT $total_elementos_pagina OFFSET $ponto_inicial");
    return $resultado;
}

?>