<?php

$total_paginas = getTotalPaginasDestaque();
$pagina = 1;
$form = !empty($_GET["pagina"]);
if($form){
    $pagina = intval($_GET["pagina"]);
    if($pagina <1){$pagina = 1;}
    elseif($pagina > $total_paginas){$pagina = $total_paginas;}
}
$destaques = getDestaquesPorPagina($pagina);

?>
<main class="container">
        <div class="row linha_laranja mt-4 mt-md-5"></div>

        <div class="row mt-2 mt-md-4 py-2">
            <div class="col-11 col-md-12  px-4 px-md-0 m-auto text-center titulo">
                Destaques
            </div>
        </div>

        <div class="row mt-2 mt-md-4 py-3">
            <div class="col-11 m-auto px-md-5 d-flex justify-content-center flex-wrap column-gap-4 row-gap-5">
                <?php foreach($destaques as $d): ?>
                    <div class="destaque grande">
                        <img src="<?= $d["imagem"]; ?>" alt="<?= $d["imagem"]; ?>">
                        <div class="conteudo d-flex flex-column justify-content-between">
                            <div>
                                <div class="titulo mt-3 mt-md-4"><?= $d["titulo"]; ?></div>
                                <div class="texto mt-4 d-none d-md-block">
                                    <?= substr(strip_tags($d["texto"]),0,400); ?>...
                                </div>
                                <div class="texto mt-2 d-block d-md-none">
                                    <?= substr(strip_tags($d["texto"]),0,80); ?>...
                                </div>
                            </div>
                            <div class="text-center">
                                <a href="destaque.php?id=<?= $d["id"]; ?>"><button class="botao_vermais">Ver Mais</button></a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>    
        </div>

        <div class="row mt-4 mt-md-5">
            <div class="col-12 text-center d-flex justify-content-center align-items-center gap-2 paginacao">
                <a href="destaques.php?pagina=<?= $pagina -1; ?>" class="setas">&lt;</a>
                
                <?php for($i=1; $i<=$total_paginas; $i+=1): ?>

                <a href="destaques.php?pagina=<?= $i; ?>" class="<?= ($pagina == $i) ?'active': '' ?>"><?= $i; ?></a>
                                
                <?php endfor; ?>
                
                <a href="destaques.php?pagina=<?= $pagina +1; ?>" class="setas">&gt;</a>
            </div>
        </div>

    </main>