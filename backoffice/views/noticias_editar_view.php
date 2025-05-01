<?php

$form = !empty($_GET["editar"]);
if($form){
    $id = $_GET["editar"];
    $noticia_especifica = getNoticiasPeloID($id);
    $form_2 = !empty($_GET["titulo"]) && !empty($_GET["imagem"]) && !empty($_GET["texto"]) && isset($_GET["esta_na_pagina"]);
    if($form_2){
        $titulo = $_GET["titulo"];
        $imagem = $_GET["imagem"];
        $texto = $_GET["texto"];
        $esta_na_pagina = $_GET["esta_na_pagina"];
        iduSQL("UPDATE noticias SET titulo='$titulo', imagem='$imagem', texto='$texto', esta_na_pagina=$esta_na_pagina WHERE id='$id'");
        header("Location: noticias.php");
        exit();
}
}

?>


<main class="container text-center py-5">


    
    <div class="row mt-5">
        <div class="col-12">
            <h1>Editar Notícia</h1>
            <h4><?=$noticia_especifica["titulo"];?></h4>
        </div>
    </div>
    <form class="row">

        <input type="hidden" name="editar" value="<?= $id; ?>">
        <div class="col-4 m-auto mt-3 d-flex flex-column">
            <label for="titulo">Título</label>
            <input type="text" name="titulo" id="titulo" value="<?=$noticia_especifica["titulo"];?>">
        </div>

        <div class="col-4 m-auto mt-3 d-flex flex-column">
            <label for="imagem">Imagem</label>
            <input type="text" name="imagem" id="imagem" value="<?=$noticia_especifica["imagem"];?>">
            <a href="../filemanager/filemanager/filemanager.php" target="_blank">Carregar imagem</a>
        </div>
        <div class="col-12 mt-3 d-flex flex-column">
            <label for="texto">Texto</label>
            <textarea id="texto" name="texto" cols="100" rows="20"><?=$noticia_especifica["texto"];?></textarea>
            <script>
                tinymce.init({
                    selector: '#texto'
                });
            </script>
        </div>
        <div class="col-4 m-auto my-3">
            <label for="esta_na_pagina" class="mx-2">Exibir na home:</label>
            <select name="esta_na_pagina" id="esta_na_pagina">
                <option value="1" <?= ($noticia_especifica["esta_na_pagina"]) ? "selected": ""; ?> >Sim</option>
                <option value="0" <?= (!$noticia_especifica["esta_na_pagina"]) ? "selected": ""; ?>>Não</option>
            </select>
        </div>
        <div class="col-12 mt-3">
            <button class="btn btn-outline-info">Editar</button>
        </div>
    </form>

</main>