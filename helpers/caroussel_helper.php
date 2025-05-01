<?php

function getTodosCaroussel(){
    $resultado= selectSql("SELECT imagem FROM caroussel");
    return $resultado;
}
?>