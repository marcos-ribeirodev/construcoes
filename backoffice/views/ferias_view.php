<?php

$form = !empty($_GET["imagem_1"]) && !empty($_GET["imagem_2"]) && !empty($_GET["imagem_3"]) && !empty($_GET["imagem_4"]);
if($form){
    $imagem_1 = $_GET["imagem_1"];
    $imagem_2 = $_GET["imagem_2"];
    $imagem_3 = $_GET["imagem_3"];
    $imagem_4 = $_GET["imagem_4"];
    iduSQL("UPDATE imagens_ferias SET imagem_1='$imagem_1', imagem_2='$imagem_2', imagem_3='$imagem_3', imagem_4='$imagem_4'");
}

$imagens = getTodasImagensFerias();
?>

<main class="container text-center py-5">


    
    <div class="row mt-5">
        <div class="col-12">
            <h1>Editar Contactos</h1>
        </div>
    </div>
    <form class="row" method="get">

        <div class="col-4 m-auto mt-3 d-flex flex-column">
            <label class=" mb-2" for="imagem_1"><img src="<?= $imagens["imagem_1"]; ?>" alt="<?= $imagens["imagem_1"]; ?>" width="200" height="150"></label>
            <input type="text" name="imagem_1" id="imagem_1" value="<?= $imagens["imagem_1"]; ?>">
            <a href="../filemanager/filemanager/filemanager.php" target="_blank">Carregar imagem</a>
        </div>
        <div class="col-4 m-auto mt-3 d-flex flex-column">
            <label class=" mb-2" for="imagem_2"><img src="<?= $imagens["imagem_2"]; ?>" alt="<?= $imagens["imagem_2"]; ?>" width="200" height="150"></label>
            <input type="text" name="imagem_2" id="imagem_2"  value="<?= $imagens["imagem_2"]; ?>">
            <a href="../filemanager/filemanager/filemanager.php" target="_blank" >Carregar imagem</a>
        </div>
        <div class="col-4 m-auto mt-3 d-flex flex-column">
            <label class=" mb-2" for="imagem_3"><img src="<?= $imagens["imagem_3"]; ?>" alt="<?= $imagens["imagem_3"]; ?>" width="200" height="150"></label>
            <input type="text" name="imagem_3" id="imagem_3"  value="<?= $imagens["imagem_3"]; ?>">
            <a href="../filemanager/filemanager/filemanager.php" target="_blank" >Carregar imagem</a>
        </div>
        <div class="col-4 m-auto mt-3 d-flex flex-column">
            <label class=" mb-2" for="imagem_4"><img src="<?= $imagens["imagem_4"]; ?>" alt="<?= $imagens["imagem_4"]; ?>" width="200" height="150"></label>
            <input type="text" name="imagem_4" id="imagem_4"  value="<?= $imagens["imagem_4"]; ?>">
            <a href="../filemanager/filemanager/filemanager.php" target="_blank">Carregar imagem</a>
        </div>
        <div class="col-12 mt-3">
            <button class="btn btn-outline-info">Editar</button>
        </div>
    </form>

    
</main>