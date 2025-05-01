<?php

$empreendimentos = getAllEmpreendimentos();

?>
<main class="container text-center py-5">


        <div class="row mt-5">
            <div class="col-12">
                <h1>Empreendimentos</h1>
            </div>
        </div>

        <div class="row my-4">
            <div class="col-12">
                <a href="empreendimentos_novo.php"> <button class="btn btn-outline-info">Novo empreendimento</button></a>
            </div>
        </div>

        <div class="row ">
            <div class="col-12 ">
                <table class="m-auto">
                    <tr>
                        <th>Título</th>
                        <th>Texto</th>
                        <th>Imagem_1</th>
                        <th>Imagem_2</th>
                        <th>Imagem_3</th>
                        <th>Imagem_4</th>
                        <th>Ações</th>
                    </tr>

                    <?php foreach($empreendimentos as $e): ?>

                    <tr>
                        <td><?= $e["titulo"]; ?></td>
                        <td><?= substr(strip_tags($e["texto"]), 0,100);?>...</td>
                        <td><img src="<?= $e["imagem_1"]; ?>" alt="<?= $e["imagem_1"]; ?>" width="150"></td>
                        <td><img src="<?= $e["imagem_2"]; ?>" alt="<?= $e["imagem_2"]; ?>" width="150"></td>
                        <td><img src="<?= $e["imagem_3"]; ?>" alt="<?= $e["imagem_3"]; ?>" width="150"></td>
                        <td><img src="<?= $e["imagem_4"]; ?>" alt="<?= $e["imagem_4"]; ?>" width="150"></td>
                        <td class="d-flex flex-column justify-content-around align-content-stretch p-3">
                            <a href="empreendimentos_editar.php?editar=<?= $e["id"]?>"><button class="btn btn-outline-info">Editar</button></a>
                            <a href="empreendimentos_apagar_meio.php?apagar=<?= $e["id"]?>"><button class="btn btn-outline-info mt-5">Apagar</button></a>
                        </td>

                    </tr>

                    <?php endforeach; ?>

                </table>
            </div>
    
</main>