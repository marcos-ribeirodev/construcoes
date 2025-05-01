<?php

$total_elementos_pagina = 6;

function getTodasNoticiasPagina(){
    $resultado= selectSQL("SELECT * FROM noticias WHERE esta_na_pagina=1");
    return $resultado;
}

function getNoticiasPeloID($id){
    $resultado = selectSQLUnico("SELECT * FROM noticias WHERE id='$id'");
    return $resultado;
}

function getTodasNoticias(){
    $resultado= selectSQL("SELECT * FROM noticias");
    return $resultado;
}


// Paginação

function getTotalElementosNoticias(){
    $resultado = selectSQLUnico("SELECT count(*) as total FROM noticias");
    return $resultado ["total"];
}

function getTotalPaginasNoticias(){
    global $total_elementos_pagina;
    $resultado = ceil(getTotalElementosNoticias() / $total_elementos_pagina);
    return $resultado;
}

function getNoticiasPorPagina($pagina){
    global $total_elementos_pagina;
    $ponto_inicial = $total_elementos_pagina * ($pagina - 1);
    $resultado = selectSQL("SELECT * FROM noticias ORDER BY id DESC LIMIT $total_elementos_pagina OFFSET $ponto_inicial");
    return $resultado;
}

?>