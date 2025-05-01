<?php

require_once("requisitos.php");

$banner = getTodosBannersPeloNome($pagina_atual);
$empreendimentos = getTodosEmpreendimentos();
$menu_simples = getTodosMenuSimplesPeloNome($pagina_atual);
$contactos = getContactos();
$noticias = getTodasNoticiasPagina();
$menu_atual = $pagina_atual;
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONSTRUÇÃO E HABITAÇÃO</title>

    <!-- Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- CSS Local-->
     <link rel="stylesheet" href="css/estilo.css">
     <link rel="stylesheet" href="fontes/fontes.css">

</head>
<body>

    <header class="container-fluid pt-lg-5 mt-lg-3">
        <!--BARRA NAVEGAÇÃO DESKTOP -->
        <div class="row justify-content-center navbar_row d-none d-lg-flex">

            <div class="col-auto ps-0 pe-xl-5 me-3 pb-3">
                <a href="#">
                    <img src="imagens/logo.png" alt="Logo" class="logo">
                </a>
            </div>
            <div class="col-auto">
                <nav class="d-flex justify-content-center align-items-end h-100 gap-3">
                    <a href="index.php" class="<?= ($pagina_atual == "home") ? 'active': '' ?>">Home</a>
                    <a href="quem_somos.php" class="<?= ($pagina_atual == "quem_somos") ? 'active': '' ?>" >Quem Somos</a>
                    <a href="socios.php" class="<?= ($pagina_atual == "socios") ? 'active': '' ?>">Sócios</a>
                    <a href="noticias.php" class="<?= ($pagina_atual == "noticias") ? 'active': '' ?>">Notícias</a>
                    <a href="destaques.php" class="<?= ($pagina_atual == "destaques") ? 'active': '' ?>">Destaques</a>

                    <div class="dropdown">
                        <a class="<?= ($pagina_atual == "empreendimentos") ? 'active': '' ?>" href="empreendimentos.php"  role="button"  data-bs-toggle="dropdown" aria-expanded="false">
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
        </div>
        <!--BARRA NAVEGAÇÃO MOBILE -->
        <div class="row d-flex d-lg-none navbar_row mobile">
            
            <div class="col-12 px-0 ">

                <nav class="navbar navbar-expand-lg">
                    <div class="container-fluid">
                      <a class="navbar-brand ms-4" href="#">
                        <img src="imagens/logo.png" alt="Logo" class="logo">
                      </a>
                      <button class="navbar-toggler me-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-lg-0">

                          <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php" class="<?= ($pagina_atual == "home") ? 'active': '' ?>">Home</a>
                          </li>

                          <li class="nav-item">
                            <a class="nav-link" href="quem_somos.php"class="<?= ($pagina_atual == "quem_somos") ? 'active': '' ?>">Quem Somos</a>
                          </li>

                          <li class="nav-item">
                            <a class="nav-link" href="socios.php" class="<?= ($pagina_atual == "socios") ? 'active': '' ?>">Sócios</a>
                          </li>

                          <li class="nav-item">
                            <a class="nav-link" href="noticias.php" class="<?= ($pagina_atual == "noticias") ? 'active': '' ?>">Notícias</a>
                          </li>

                          <li class="nav-item">
                            <a class="nav-link" href="destaques.php" class="<?= ($pagina_atual == "destaques") ? 'active': '' ?>">Destaques</a>
                          </li>

                          <li class="nav-item dropdown px-0 m-0">
                            <a class="nav-link" href="empreendimentos.php" class="<?= ($pagina_atual == "empreendimentos") ? 'active': '' ?>" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              Empreendimentos
                            </a>

                            <ul class="dropdown-menu">
                                <?php foreach($empreendimentos as $i => $e): ?>
                                    <li><a class="dropdown-item text-wrap <?= ($i == count($empreendimentos)-1) ? "border-0" : "" ?>" href="empreendimentos.php?id=<?= $e["id"]; ?>"><?= $e["titulo"]; ?></a></li>
                                <?php endforeach; ?>        
                            </ul>
                          </li>

                          <li class="nav-item">
                            <a class="nav-link" href="centro_de_ferias.php" class="<?= ($pagina_atual == "centro_de_ferias") ? 'active': '' ?>">Centro de Férias</a>
                          </li>

                          <li class="nav-item">
                            <a class="nav-link border-0" href="contactos.php" class="<?= ($pagina_atual == "contactos") ? 'active': '' ?>">Contactos</a>
                          </li>

                        </ul>
                      </div>
                    </div>
                </nav>
                
            </div>

        </div>


        <div class="row">
            <div class="col-12 px-0">
                <img src="<?= $banner["imagem"]; ?>" alt="Empreendimentos"class="banner w-100">
            </div>
        </div>
    </header>
