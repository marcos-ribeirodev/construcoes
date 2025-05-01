<?php

$imagens = getTodasImagensFerias();

?>
<main class="container">
        <div class="row linha_laranja mt-4 mt-md-5"></div>

        <div class="row mt-2 mt-md-4 py-2">
            <div class="col-11 col-md-12  px-4 px-md-0 m-auto text-center titulo">
                <?= $menu_simples["titulo"]?>
            </div>
        </div>

        <div class="row mt-2 mt-lg-4 pt-3 px-4 px-lg-0 texto">
            <div class="col-12 col-lg-4">
                <img src="imagens/ImagemQuemSomos.png" alt="centro_de_ferias" class="imagemcf">
            </div>
            <div class="col-12 col-lg-8 texto">
                <?= $menu_simples["texto"]?>
            </div>
        </div>
        <div class="row px-4 px-lg-0">
            <div class="col-12 texto">
                <?= $menu_simples["texto"]?>
            </div>
        </div> 
        <div class="row mt-3" class="cf">
            <div class="col-12 d-flex justify-content-center align-items-center flex-wrap gap-4">
                <img src="<?= $imagens["imagem_1"]?>" alt="<?= $imagens["imagem_1"]?>" class="imagemcferias">
                <img src="<?= $imagens["imagem_2"]?>" alt="<?= $imagens["imagem_2"]?>" class="imagemcferias">
                <img src="<?= $imagens["imagem_3"]?>" alt="<?= $imagens["imagem_3"]?>" class="imagemcferias">
                <img src="<?= $imagens["imagem_4"]?>" alt="<?= $imagens["imagem_4"]?>" class="imagemcferias">
            </div>
        </div>  

    </main>