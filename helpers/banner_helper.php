<?php

function getTodosBannersPeloNome($nome_pagina){
    $resultado= selectSqlUnico("SELECT * FROM banners where nome_pagina='$nome_pagina'");
    return $resultado;
}
?>