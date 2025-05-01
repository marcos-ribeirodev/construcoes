<?php

require_once("../requisitos.php");

$form = !empty($_POST["login"]) && !empty($_POST["senha"]);
if($form){
    if(fazerLogin($_POST["login"], $_POST["senha"])){
    header("Location: home.php");
    exit();
    }
}

?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Backoffice</title>

    <!-- Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>
<body class="bg-dark" >

    <main class="container-fluid text-info">

        <div class="row mt-5">
            <div class="col-12 text-center "> 
                <h1>Backoffice</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-auto m-auto mt-5 border border-info rounded text-center p-5">
                <form action="" method="post">

                    <?php if($form): ?>

                        <p>Login/Senha Incorreto!</p>
                    <?php endif; ?>

                        
                    <input type="text" name="login" placeholder="Login" autofocus class="text-center">
                    <br><br>
                    <input type="password" name="senha" placeholder="Senha" class="text-center">
                    <br><br>
                    <button class="btn btn-outline-info">Entrar</button>
                </form>
            </div>
        </div>
    </main>
</body>
</html>