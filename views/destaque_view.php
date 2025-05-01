<?php

$form = !empty($_GET["id"]);
if($form){
    $id = $_GET["id"];
    $destaque = getDestaquePeloID($id);
}

?>

<main class="container">
        <div class="row linha_laranja mt-4 mt-md-5"></div>

        <div class="row mt-2 mt-md-4 py-2">
            <div class="col-11 col-md-12  px-4 px-md-0 m-auto text-center titulo">
                Destaque
            </div>
            <div class="col-12 text-center subtitulo">
                <?php if(!empty($destaque)): ?>
                    <?= $destaque["titulo"]; ?>
                <?php else: ?>
                    Destaque não encontrado!
                <?php endif ?>
            </div>
        </div>
        
        <div class="row mt-2 mt-md-4 py-3 texto">
           
            <div class="col-12">
                <?php if(!empty($destaque)): ?>
                    <?= $destaque["texto"]; ?>
                <?php endif ?>
            </div>
        </div> 
        <div class="row mt-3 mt-md-4 pt-md-3">
            <div class="col-12 text-center d-flex justify-content-end">
                <a href="destaques.php"><button class="botao_voltardestaques">VOLTAR PARA DESTAQUES</button></a>
            </div>
        </div>

    </main>