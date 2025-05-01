<?php

$destaques = getTodosDestaques();

?>
<main class="container text-center py-5">


        <div class="row mt-5">
            <div class="col-12">
                <h1>Destaques</h1>
            </div>
        </div>

        <div class="row my-4">
            <div class="col-12">
                <a href="destaques_novo.php"> <button class="btn btn-outline-info">Novo destaque</button></a>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <table>
                    <tr>
                        <th>Imagem</th>
                        <th>Título</th>
                        <th>Texto</th>
                        <th>Esta na home</th>
                        <th>Ações</th>
                    </tr>

                    <?php foreach($destaques as $d): ?>

                    <tr>
                        <td><img src="<?= $d["imagem"]; ?>" alt="<?= $d["imagem"]; ?>" width="200"></td>
                        <td><?= $d["titulo"]; ?></td>
                        <td><?= substr(strip_tags($d["texto"]), 0,100);?>...</td>
                        <td><?= $d["esta_na_home"] ? "Sim" : "Não"; ?></td>
                        <td class="d-flex flex-column justify-content-around align-content-stretch p-3">
                            <a href="destaques_editar.php?editar=<?= $d["id"]?>"><button class="btn btn-outline-info">Editar</button></a>
                            <a href="destaques_apagar_meio.php?apagar=<?= $d["id"]?>"><button class="btn btn-outline-info mt-5">Apagar</button></a>
                        </td>
                    </tr>

                    <?php endforeach; ?>

                </table>
            </div>
    
</main>