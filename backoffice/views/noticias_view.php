<?php

$noticias = getTodasNoticias();

?>
<main class="container text-center py-5">


        <div class="row mt-5">
            <div class="col-12">
                <h1>Notícias</h1>
            </div>
        </div>

        <div class="row my-4">
            <div class="col-12">
                <a href="noticias_nova.php"> <button class="btn btn-outline-info">Nova Notícia</button></a>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <table>
                    <tr>
                        <th>Imagem</th>
                        <th>Título</th>
                        <th>Texto</th>
                        <th>Esta na pagina</th>
                        <th>Ações</th>
                    </tr>

                    <?php foreach($noticias as $n): ?>

                    <tr>
                        <td><img src="<?= $n["imagem"]; ?>" alt="<?= $n["imagem"]; ?>" width="200"></td>
                        <td><?= $n["titulo"]; ?></td>
                        <td><?= substr(strip_tags($n["texto"]), 0,100);?>...</td>
                        <td><?= $n["esta_na_pagina"] ? "Sim" : "Não"; ?></td>
                        <td class="d-flex flex-column justify-content-around align-content-stretch p-3">
                            <a href="noticias_editar.php?editar=<?= $n["id"]?>"><button class="btn btn-outline-info">Editar</button></a>
                            <a href="noticias_apagar_meio.php?apagar=<?= $n["id"]?>"><button class="btn btn-outline-info mt-5">Apagar</button></a>
                        </td>
                    </tr>

                    <?php endforeach; ?>

                </table>
            </div>
    
</main>