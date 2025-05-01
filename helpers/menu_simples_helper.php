<?php

function getTodosMenuSimplesPeloNome($nome_pagina){
    $resultado= selectSqlUnico("SELECT * FROM menu_simples where nome_pagina='$nome_pagina'");
    return $resultado;
}
?>