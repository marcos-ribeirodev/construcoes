<?php

$total_paginas = getTotalPaginasNoticias();
$pagina = 1;
$form = !empty($_GET["pagina"]);
if($form){
    $pagina = intval($_GET["pagina"]);
    if($pagina <1){$pagina = 1;}
    elseif($pagina > $total_paginas){$pagina = $total_paginas;}
}
$pagina_noticia = getNoticiasPorPagina($pagina);

?>
<main class="container">
        <div class="row linha_laranja mt-4 mt-md-5"></div>

        <div class="row mt-2 mt-md-4 py-2">
            <div class="col-11 col-md-12  px-4 px-md-0 m-auto text-center titulo">
                Notícias
            </div>
        </div>

        <div class="row mt-2 mt-md-4 py-3">
            <div class="col-11 m-auto px-md-5 d-flex justify-content-center flex-wrap column-gap-4 row-gap-5">
                
                <?php foreach($pagina_noticia as $n): ?>
                    <div class="noticia">
                        <img src="<?= $n["imagem"]; ?>" alt="<?= $n["imagem"]; ?>">
                        <div class="conteudo d-flex flex-column justify-content-between">
                            <div>
                                <div class="titulo mt-3 mt-md-4"> <?= $n["titulo"]; ?></div>
                                <div class="texto mt-4 d-none d-md-block">
                                    <?= $n["texto"]; ?>                                
                                </div>
                                <div class="texto mt-2 d-block d-md-none">
                                    <?= $n["texto"]; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>    
        </div>

                
        <div class="row mt-4 mt-md-5">
            <div class="col-12 text-center d-flex justify-content-center align-items-center gap-2 paginacao">
                <a href="noticias.php?pagina=<?= $pagina -1; ?>" class="setas">&lt;</a>
                
                <?php for($i=1; $i<=$total_paginas; $i+=1): ?>

                <a href="noticias.php?pagina=<?= $i; ?>" class="<?= ($pagina == $i) ?'active': '' ?>"><?= $i; ?></a>
                                
                <?php endfor; ?>
                
                <a href="noticias.php?pagina=<?= $pagina +1; ?>" class="setas">&gt;</a>
            </div>
        </div>

    </main>