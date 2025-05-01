<main class="container">
        <div class="row linha_laranja mt-4 mt-md-5"></div>

        <div class="row mt-2 mt-md-4 py-2">
            <div class="col-11 col-md-12  px-4 px-md-0 m-auto text-center titulo">
                Bem-Vindo à
                <br>
                Cooperativa de Construção e Habitação Tripeira
            </div>
        </div>
        <div class="row texto mt-3 mt-md-5">
            <div class="col-12 col-md-11 m-auto px-5">
                <?= substr(strip_tags($quem_somos["texto"]),0,500); ?>...
            </div>
        </div>

        <div class="row mt-3 mt-md-4 pt-md-3">
            <div class="col-12 text-center">
                <a href="quem_somos.php"><button class="botao_vermais">Ver Mais</button></a>
            </div>
        </div>

        <div class="row mt-3 mt-md-5 py-1 py-md-2"></div>

        <div class="row linha_laranja mt-5"></div>

        <div class="row mt-2 mt-md-4 py-2">
            <div class="col-12 text-center titulo"> Destaques</div>
        </div>

        <div class="row mt-2 mt-md-4 py-3">
            <div class="col-11 m-auto px-md-5 d-flex justify-content-center flex-wrap column-gap-4 row-gap-5">
                
                <?php foreach($destaques as $d): ?>

                    <div class="destaque">
                        <img src="<?= $d["imagem"]; ?>" alt="<?= $d["imagem"]; ?>">
                        <div class="conteudo px-4 d-flex flex-column justify-content-between">
                            <div>
                                <div class="titulo mt-2"><?= $d["titulo"]; ?></div>
                                <div class="texto mt-2"> 
                                    <?= substr(strip_tags($d["texto"]),0,70); ?>
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

    </main>
