<?php

$form = !empty($_GET["apagar"]);
if($form){
  $id = $_GET["apagar"];
  $produto_especifico = getNoticiasPeloID($id);
}
else{
  header("Location: index.php");
  exit();
}

?>


<main class="container text-center py-5">


    <div class="row">
        <div class="col-8 m-auto">

            <p class=" mb-4">Tem certeza de que desejas apagar a notícia (<?= $produto_especifico["titulo"]; ?>) ?</p>

            <a href="noticias_apagar_fim.php?apagar=<?= $produto_especifico["id"]?>"><button class="btn btn-outline-info">Sim</button></a>
            <a href="noticias.php"><button class="btn btn-outline-info">Não</button></a>

        </div>
    </div>
        
    
</main>