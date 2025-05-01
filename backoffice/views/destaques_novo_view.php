<?php

$form = !empty($_GET["titulo"]) && !empty($_GET["imagem"]) && !empty($_GET["texto"]) && isset($_GET["esta_na_home"]);
if($form){
    $titulo = $_GET["titulo"];
    $imagem = $_GET["imagem"];
    $texto = $_GET["texto"];
    $esta_na_home = $_GET["esta_na_home"];
    iduSQL("INSERT INTO destaques (titulo, imagem,texto,esta_na_home) VALUES ('$titulo','$imagem','$texto','$esta_na_home')");
    header("Location: destaques.php");
    exit();
}

?>


<main class="container text-center py-5">


    
    <div class="row mt-5">
        <div class="col-12">
            <h1>Novo Destaque</h1>
        </div>
    </div>
    <form class="row my-4">

        <div class="col-4 m-auto mt-3 d-flex flex-column">
            <label for="titulo">Título</label>
            <input type="text" name="titulo" id="titulo">
        </div>

        <div class="col-4 m-auto mt-3 d-flex flex-column">
            <label for="imagem">Imagem</label>
            <input type="text" name="imagem" id="imagem">
            <a href="../filemanager/filemanager/filemanager.php" target="_blank">Carregar imagem</a>
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

        <div class="col-4 m-auto my-3">
            <label for="esta_na_home" class="mx-2">Exibir na home:</label>
            <select name="esta_na_home" id="esta_na_home">
                <option value="1">Sim</option>
                <option value="0" selected>Não</option>
            </select>
        </div>

        <div class="col-12 mt-3">
            <button class="btn btn-outline-info">Inserir</button>
        </div>
    </form>

</main>