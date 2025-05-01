<?php

$form = !empty($_GET["id"]);
if($form){
    $id = $_GET["id"];
    $empreendimento = getEmpreendimentoPeloID($id);
}

?>

<main class="container">
        <div class="row linha_laranja mt-4 mt-md-5"></div>

        <div class="row mt-2 mt-md-4 py-2">
            <div class="col-11 col-md-12  px-4 px-md-0 m-auto text-center titulo">
                Empreendimentos
            </div>
            <div class="col-12 text-center subtitulo">
                <?php if(!empty($empreendimento)): ?>
                    <?= $empreendimento["titulo"]; ?>
                <?php else: ?>
                    Não é empreendimento
                <?php endif ?>
            </div>
        </div>
        
        <div class="row mt-2 mt-md-4 py-3 px-4 px-sm-0 texto">
           
            <div class="col-12 ">
                <?php if(!empty($empreendimento)): ?>
                    <?= $empreendimento["texto"]; ?>
                <?php endif ?>
            </div>
        </div>  

        <div class="row">
            <div class="col-12 d-flex justify-content-center align-items-center flex-wrap gap-4">
                <img src="<?= $empreendimento["imagem_1"]; ?>" alt="<?= $empreendimento["imagem_1"]; ?>" class="imagemempreendimento">
                <img src="<?= $empreendimento["imagem_2"]; ?>" alt="<?= $empreendimento["imagem_2"]; ?>" class="imagemempreendimento">
                <img src="<?= $empreendimento["imagem_3"]; ?>" alt="<?= $empreendimento["imagem_3"]; ?>" class="imagemempreendimento">
                <img src="<?= $empreendimento["imagem_4"]; ?>" alt="<?= $empreendimento["imagem_4"]; ?>" class="imagemempreendimento">
            </div>
        </div>

    </main>