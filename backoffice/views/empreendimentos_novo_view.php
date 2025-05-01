<?php

$form = !empty($_GET["titulo"]) && !empty($_GET["texto"]) && !empty($_GET["imagem_1"]) && !empty($_GET["imagem_2"]) && !empty($_GET["imagem_3"]) && !empty($_GET["imagem_4"]);
if($form){
    $titulo = $_GET["titulo"];
    $texto = $_GET["texto"];
    $imagem_1 = $_GET["imagem_1"];
    $imagem_2 = $_GET["imagem_2"];
    $imagem_3 = $_GET["imagem_3"];
    $imagem_4 = $_GET["imagem_4"];
    iduSQL("INSERT INTO empreendimentos (titulo,texto,imagem_1, imagem_2, imagem_3, imagem_4) VALUES ('$titulo','$texto', '$imagem_1', '$imagem_2', '$imagem_3','$imagem_4')");
    header("Location: empreendimentos.php");
    exit();
}

?>


<main class="container text-center py-5">


    
    <div class="row mt-5">
        <div class="col-12">
            <h1>Novo empreendimento</h1>
        </div>
    </div>
    <form class="row my-4">

        <div class="col-4 m-auto mt-3 d-flex flex-column">
            <label for="titulo">Título</label>
            <input type="text" name="titulo" id="titulo">
        </div>


        <div class="col-12 my-3 d-flex flex-column">
            <label for="texto">Texto</label>
            <textarea id="texto" name="texto" cols="100" rows="20"></textarea>
            <script>
                tinymce.init({
                    selector: '#texto'
                });
            </script>
        </div>
        <div class="col-4 m-auto mt-3 d-flex flex-column">
            <label for="imagem_1">Imagem 1</label>
            <input type="text" name="imagem_1" id="imagem_1">
            <a href="../filemanager/filemanager/filemanager.php" target="_blank">Carregar imagem</a>
        </div>
        <div class="col-4 m-auto mt-3 d-flex flex-column">
            <label for="imagem_2">Imagem 2</label>
            <input type="text" name="imagem_2" id="imagem_2">
            <a href="../filemanager/filemanager/filemanager.php" target="_blank">Carregar imagem</a>
        </div>
        <div class="col-4 m-auto mt-3 d-flex flex-column">
            <label for="imagem_3">Imagem 3</label>
            <input type="text" name="imagem_3" id="imagem_3">
            <a href="../filemanager/filemanager/filemanager.php" target="_blank">Carregar imagem</a>
        </div>
        <div class="col-4 m-auto mt-3 d-flex flex-column">
            <label for="imagem_4">Imagem 4</label>
            <input type="text" name="imagem_4" id="imagem_4">
            <a href="../filemanager/filemanager/filemanager.php" target="_blank">Carregar imagem</a>
        </div>


        <div class="col-12 mt-3">
            <button class="btn btn-outline-info">Inserir</button>
        </div>
    </form>

</main>