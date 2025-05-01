<?php

$form = !empty($_GET["pagina"]);
if($form){
    $nome_pagina = $_GET["pagina"];
    $menu_simples = getTodosMenuSimplesPeloNome("$nome_pagina");
    $form_2 = !empty($_GET["texto"]);
    if($form_2){
        $texto = $_GET["texto"];
        iduSQL("UPDATE menu_simples SET texto='$texto' WHERE id='$menu_simples[id]'");
        header("LOCATION: menu_simples.php?pagina=$nome_pagina");
        exit();
    }
}

?>


<main class="container text-center py-5">


    <?php if(empty($menu_simples)): ?>
        <div class="row mt-5">
            <div class="col-12">
                <h1>Menu não encontrado!</h1>
            </div>
    </div>

    <?php else: ?> 
        <div class="row mt-5">
            <div class="col-12">
                <h1>Editar</h1>
                <h3>( <?= $menu_simples["titulo"]; ?> )</h3>
            </div>
        </div>
        <form class="row">
            <input type="hidden" name="pagina" value="<?= $nome_pagina; ?>">
            <div class="col-12">
                <textarea id="texto" name="texto" cols="140" rows="20"><?= $menu_simples["texto"]; ?> </textarea>
                <script>
                    tinymce.init({
                        selector: '#texto'
                    });
                </script>
            </div>
            <div class="col-12 mt-3">
                <button class="btn btn-outline-info">Editar</button>
            </div>
        </form>
    
        
    <?php endif; ?>
    
</main>