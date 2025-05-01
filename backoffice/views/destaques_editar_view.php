<?php

$form = !empty($_GET["editar"]);
if($form){
    $id = $_GET["editar"];
    $destaque_especifico = getDestaquePeloID($id);
    $form_2 = !empty($_GET["titulo"]) && !empty($_GET["imagem"]) && !empty($_GET["texto"]) && isset($_GET["esta_na_home"]);
    if($form_2){
        $titulo = $_GET["titulo"];
        $imagem = $_GET["imagem"];
        $texto = $_GET["texto"];
        $esta_na_home = $_GET["esta_na_home"];
        $result = iduSQL("UPDATE destaques SET titulo='$titulo', imagem='$imagem', texto='$texto', esta_na_home=$esta_na_home WHERE id='$id'");
        header("Location: destaques.php");
    }
}
?>


<main class="container text-center py-5">


    
    <div class="row mt-5">
        <div class="col-12">
            <h1>Editar Destaque</h1>
            <h4><?=$destaque_especifico["titulo"];?></h4>
        </div>
    </div>
    <form class="row">

        <input type="hidden" name="editar" value="<?= $id; ?>">
        <div class="col-4 m-auto mt-3 d-flex flex-column">
            <label for="titulo">Título</label>
            <input type="text" name="titulo" id="titulo" value="<?=$destaque_especifico["titulo"];?>">
        </div>

        <div class="col-4 m-auto mt-3 d-flex flex-column">
            <label for="imagem">Imagem</label>
            <input type="text" name="imagem" id="imagem" value="<?=$destaque_especifico["imagem"];?>">
            <a href="../filemanager/filemanager/filemanager.php" target="_blank">Carregar imagem</a>
        </div>
        <div class="col-12 mt-3 d-flex flex-column">
            <label for="texto">Texto</label>
            <textarea id="texto" name="texto" cols="100" rows="20"><?=$destaque_especifico["texto"];?></textarea>
            <script>
                tinymce.init({
                    selector: '#texto'
                });
            </script>
        </div>
        <div class="col-4 m-auto my-3">
            <label for="esta_na_home" class="mx-2">Exibir na home:</label>
            <select name="esta_na_home" id="esta_na_home">
                <option value="1" <?= ($destaque_especifico["esta_na_home"]) ? "selected": ""; ?> >Sim</option>
                <option value="0" <?= (!$destaque_especifico["esta_na_home"]) ? "selected": ""; ?>>Não</option>
            </select>
        </div>
        <div class="col-12 mt-3">
            <button class="btn btn-outline-info">Editar</button>
        </div>
    </form>

</main>