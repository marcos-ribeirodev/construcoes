<?php

$form = !empty($_GET["apagar"]);
if($form){
  $id = $_GET["apagar"];
  $produto_especifico = getDestaquePeloID($id);
}
else{
  header("Location: index.php");
  exit();
}

?>


<main class="container text-center py-5">


    <div class="row">
        <div class="col-8 m-auto">

            <p class=" mb-4">Tem certeza de que desejas apagar o destaque (<?= $produto_especifico["titulo"]; ?>) ?</p>

            <a href="destaques_apagar_fim.php?apagar=<?= $produto_especifico["id"]?>"><button class="btn btn-outline-info">Sim</button></a>
            <a href="destaques.php"><button class="btn btn-outline-info">Não</button></a>

        </div>
    </div>
        
    
</main>