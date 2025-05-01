<?php

$form = !empty($_GET["editar"]);
if($form){
    $id = $_GET["editar"];
    $empreendimento_especifico = getEmpreendimentoPeloID($id);
    $form_2 = !empty($_GET["titulo"]) && !empty($_GET["texto"]) && !empty($_GET["imagem_1"]) && !empty($_GET["imagem_2"]) && !empty($_GET["imagem_3"]) && !empty($_GET["imagem_4"]);
    if($form_2){
        $titulo = $_GET["titulo"];
        $texto = $_GET["texto"];
        $imagem_1 = $_GET["imagem_1"];
        $imagem_2 = $_GET["imagem_2"];
        $imagem_3 = $_GET["imagem_3"];
        $imagem_4 = $_GET["imagem_4"];
        iduSQL("UPDATE empreendimentos SET titulo='$titulo', texto='$texto', imagem_1='$imagem_1',imagem_2='$imagem_2',imagem_3='$imagem_3', imagem_4='$imagem_4' WHERE id='$id'");
        header("Location: empreendimentos.php");
        exit();
    }
}

?>


<main class="container text-center py-5">


    
    <div class="row mt-5">
        <div class="col-12">
            <h1>Editar Empreendimento</h1>
            <h4><?=$empreendimento_especifico["titulo"];?></h4>
        </div>
    </div>
    <form class="row">

        <input type="hidden" name="editar" value="<?= $id; ?>">
        <div class="col-4 m-auto mt-3 d-flex flex-column">
            <label for="titulo">Título</label>
            <input type="text" name="titulo" id="titulo" value="<?=$empreendimento_especifico["titulo"];?>">
        </div>

        <div class="col-12 mt-3 d-flex flex-column">
            <label for="texto">Texto</label>
            <textarea id="texto" name="texto" cols="100" rows="20"><?=$empreendimento_especifico["texto"];?></textarea>
            <script>
                tinymce.init({
                    selector: '#texto'
                });
            </script>
        </div>

        <div class="col-4 m-auto mt-3 d-flex flex-column">
            <label for="imagem_1">Imagem 1</label>
            <input type="text" name="imagem_1" id="imagem_1" value="<?=$empreendimento_especifico["imagem_1"];?>">
            <a href="../filemanager/filemanager/filemanager.php" target="_blank">Carregar imagem</a>
        </div>
        <div class="col-4 m-auto mt-3 d-flex flex-column">
            <label for="imagem_2">Imagem 2</label>
            <input type="text" name="imagem_2" id="imagem_2" value="<?=$empreendimento_especifico["imagem_2"];?>">
            <a href="../filemanager/filemanager/filemanager.php" target="_blank">Carregar imagem</a>
        </div>
        <div class="col-4 m-auto mt-3 d-flex flex-column">
            <label for="imagem_3">Imagem 3</label>
            <input type="text" name="imagem_3" id="imagem_3" value="<?=$empreendimento_especifico["imagem_3"];?>">
            <a href="../filemanager/filemanager/filemanager.php" target="_blank">Carregar imagem</a>
        </div>
        <div class="col-4 m-auto mt-3 d-flex flex-column">
            <label for="imagem_4">Imagem 4</label>
            <input type="text" name="imagem_4" id="imagem_4" value="<?=$empreendimento_especifico["imagem_4"];?>">
            <a href="../filemanager/filemanager/filemanager.php" target="_blank">Carregar imagem</a>
        </div>
       
        <div class="col-12 mt-3">
            <button class="btn btn-outline-info">Editar</button>
        </div>
    </form>

</main>