<footer class="container-fluid mt-5 pt-5">

        <div class="row mt-2 pt-2">
            <div class="col-12 px-0">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7145.727837778815!2d-8.616707384945157!3d41.14743766057582!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd2464e35940fd8f%3A0x738dcce6546dd210!2sAv.%20dos%20Aliados%2C%20Porto!5e0!3m2!1spt-PT!2spt!4v1731372219663!5m2!1spt-PT!2spt"   style="border:0;" class="w-100 mapa" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>

        <div class="row mt-2 facebook">
            <div class="col-12 px-0 sombra pt-4 pt-md-5 ">
                <div class="container-fluid pt-1">
                    
                    <div class="row pt-2 pt-md-0 mt-3">
                        <div class="col-12 d-flex flex-column justify-content-center align-items-center gap-4 caixa_icone mt-2 pt-2">
                            <a target="_blank" href="<?= $contactos['facebook'] ?>">
                                <img src="imagens/facebook.svg" alt="Facebook" class="icone">
                            </a>
                            <span class="mt-md-2"> Siga-nos no Facebook</span>
                        </div>
                    </div>
                    
                    <div class="row mt-5 pt-2 pt-md-3">
                        <div class="col-12 px-0 linha_branca_grande mt-md-1"></div>
                    </div>

                    <div class="row mt-5 d-none d-lg-flex">
                        <nav class="col-auto offset-0 offset-xl-3 offset-xxl-4 px-0  gap-3 d-none d-xl-flex ">
                            <a href="index.php" class="<?= ($pagina_atual == "home") ? 'active': '' ?>">Home</a>
                            <a href="quem_somos.php" class="<?= ($pagina_atual == "quem_somos") ? 'active': '' ?>">Quem Somos</a>
                            <a href="socios.php" class="<?= ($pagina_atual == "socios") ? 'active': '' ?>">Sócios</a>
                            <a href="noticias.php" class="<?= ($pagina_atual == "noticias") ? 'active': '' ?>">Notícias</a>
                            <a href="destaques.php" class="<?= ($pagina_atual == "destaques") ? 'active': '' ?>">Destaques</a>
                            <div class="dropdown">
                                <a class="" href="empreendimentos.php" class="<?= ($pagina_atual == "empreendimentos") ? 'active': '' ?>" role="button"  data-bs-toggle="dropdown" aria-expanded="false">
                                    Empreendimentos
                                </a>
                                
                                <ul class="dropdown-menu">


                                    <?php foreach($empreendimentos as $i => $e): ?>

                                    <li><a class="dropdown-item text-wrap <?= ($i == count($empreendimentos)-1) ? "border-0" : "" ?>" href="empreendimentos.php?id=<?= $e["id"]; ?>"><?= $e["titulo"]; ?></a></li>
                                    
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                            <a href="centro_de_ferias.php" class="<?= ($pagina_atual == "centro_de_ferias") ? 'active': '' ?>">Centro de Férias</a>
                            <a href="contactos.php" class="<?= ($pagina_atual == "contactos") ? 'active': '' ?>">Contactos</a>
                        </nav>
                        <nav class="col-auto m-auto px-0  gap-3 d-none d-lg-flex d-xl-none ">
                            <a href="index.php" class="<?= ($pagina_atual == "home") ? 'active': '' ?>">Home</a>
                            <a href="quem_somos.php" class="<?= ($pagina_atual == "quem_somos") ? 'active': '' ?>">Quem Somos</a>
                            <a href="socios.php" class="<?= ($pagina_atual == "socios") ? 'active': '' ?>">Sócios</a>
                            <a href="noticias.php" class="<?= ($pagina_atual == "noticias") ? 'active': '' ?>">Notícias</a>
                            <a href="destaques.php" class="<?= ($pagina_atual == "destaques") ? 'active': '' ?>">Destaques</a>
                            <div class="dropdown">
                                <a class="" href="empreendimentos.php" class="<?= ($pagina_atual == "empreendimentos") ? 'active': '' ?>" role="button"  data-bs-toggle="dropdown" aria-expanded="false">
                                    Empreendimentos
                                </a>
                                
                                <ul class="dropdown-menu">


                                    <?php foreach($empreendimentos as $i => $e): ?>

                                    <li><a class="dropdown-item text-wrap <?= ($i == count($empreendimentos)-1) ? "border-0" : "" ?>" href="empreendimentos.php?id=<?= $e["id"]; ?>"><?= $e["titulo"]; ?></a></li>
                                    
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                            <a href="centro_de_ferias.php" class="<?= ($pagina_atual == "centro_de_ferias") ? 'active': '' ?>">Centro de Férias</a>
                            <a href="contactos.php" class="<?= ($pagina_atual == "contactos") ? 'active': '' ?>">Contactos</a>
                        </nav>
                    </div>

                    <div class="row mt-2 mt-md-2 pt-2 ps-md-5 ms-md-5 ">
                        <div class="col-auto text-center copyright mt-1 mt-md-1 px-5">
                            Copyright © <?= date("Y") ?> <a href="https://www.mediamaster.pt/">Grupo Mediamaster</a>. Todos os direitos reservados
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </footer>
</body>
</html>