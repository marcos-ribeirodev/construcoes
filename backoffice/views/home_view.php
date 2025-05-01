<main class="container text-center py-5">

    <div class="row mt-5">
        <div class="col-12">
            <h1>Bem vindo <?= $_SESSION["usuario"]["nome"]; ?></h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <h3>Data do último acesso: ( <?= $_SESSION["usuario"]["data_ultimo_acesso"]; ?> ).</h3> 
        </div>
    </div>
</main>