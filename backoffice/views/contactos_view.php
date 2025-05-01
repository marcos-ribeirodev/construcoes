<?php


$form = !empty($_GET["morada"]) && !empty($_GET["telefone"]) && !empty($_GET["fax"]) && !empty($_GET["email"]) && !empty($_GET["facebook"]);
if($form){
    $morada = $_GET["morada"];
    $telefone = $_GET["telefone"];
    $fax = $_GET["fax"];
    $email = $_GET["email"];
    $facebook = $_GET["facebook"];
    iduSQL("UPDATE contactos SET morada='$morada', telefone='$telefone', fax='$fax', email='$email', facebook='$facebook'");
}

$contactos = getContactos();
?>


<main class="container text-center py-5">


    
    <div class="row mt-5">
        <div class="col-12">
            <h1>Editar Contactos</h1>
        </div>
    </div>
    <form class="row">
        <div class="col-3 m-auto my-4 d-flex flex-column">
            <label for="morada">Morada</label>
            <input type="text" name="morada" id="morada" class="mb-3" value="<?=$contactos["morada"]?>" required>
            <label for="telefone">Telefone</label>
            <input type="text" name="telefone" id="telefone" class="mb-3" value="<?=$contactos["telefone"]?>" required>
            <label for="fax">Fax</label>
            <input type="text" name="fax" id="fax" class="mb-3" value="<?=$contactos["fax"]?>" required>
            <label for="email">E-mail</label>
            <input type="email" name="email" id="email"  class="mb-3" value="<?=$contactos["email"]?>" required>
            <label for="facebook">Link do Facebook</label>
            <input type="url" name="facebook" id="facebook" class="mb-3" value="<?=$contactos["facebook"]?>" required>
        </div>
        <div class="col-12 mt-3">
            <button class="btn btn-outline-info">Editar</button>
        </div>
    </form>
    

    
</main>