<?php
$form = !empty($_POST["nome"]) && !empty($_POST["email"]) && !empty($_POST["telefone"]) && !empty($_POST["assunto"]) && !empty($_POST["mensagem"]);
$mensagem_enviada = null;

if ($form) {
    // Validar reCAPTCHA
    $secret = "6LeoAisrAAAAAMh0f4BdZ2BOSJRM6J-MQ3q6H1Oo";
    $response = $_POST['g-recaptcha-response'] ?? '';

    $verifica = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$response");
    $resposta = json_decode($verifica);

    if (!$resposta->success) {
        $mensagem_enviada = [
            "tipo" => "erro",
            "mensagem" => "Verificação reCAPTCHA falhou. Por favor tenta novamente."
        ];
    } else {
        // Dados do formulário
        $nome     = $_POST["nome"];
        $email    = $_POST["email"];
        $telefone = $_POST["telefone"];
        $assunto  = $_POST["assunto"];
        $mensagem = $_POST["mensagem"];
        $copia    = isset($_POST["copia"]);

        $destinatario = "marcos@marcosribeiro.pt";

        $mensagem_html = "
        <html><body>
          <h2>Mensagem do formulário de contacto</h2>
          <p><strong>Nome:</strong> $nome</p>
          <p><strong>Email:</strong> $email</p>
          <p><strong>Telefone:</strong> $telefone</p>
          <p><strong>Assunto:</strong> $assunto</p>
          <p><strong>Mensagem:</strong><br>$mensagem</p>
        </body></html>";

        $headers  = "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
        $headers .= "From: marcos@marcosribeiro.pt\r\n";
        $headers .= "Reply-To: $email\r\n";

        if (mail($destinatario, $assunto, $mensagem_html, $headers)) {
            if ($copia) {
                mail($email, "Cópia da tua mensagem: $assunto", $mensagem_html, $headers);
            }

            $mensagem_enviada = [
                "tipo" => "sucesso",
                "mensagem" => "Obrigado pela tua mensagem! Entrarei em contacto em breve."
            ];
        } else {
            $mensagem_enviada = [
                "tipo" => "erro",
                "mensagem" => "Não foi possível enviar a mensagem. Tenta novamente mais tarde."
            ];
        }
    }
}
?>





<main class="container">
    <div class="row linha_laranja mt-4 mt-md-5"></div>

    <div class="row mt-2 mt-md-4 py-2">
        <div class="col-11 col-md-12  px-4 px-md-0 m-auto text-center titulo">
            Contactos
        </div>
    </div>

    <div class="row mt-2 mt-md-4 py-3 texto">
        <div class="col-12 col-lg-5 contacto-info px-5">

            <div class="morada">
                <p class="titulo">Morada</p>
                <p class="titulo me-5 pe-5"><?= $contactos["morada"] ?></p>
            </div>
            <div>
                <p class="titulo">Telefone</p>
                <p class="texto"><?= $contactos["telefone"] ?></p>
            </div>
            <div>
                <p class="titulo">Fax</p>
                <p class="texto"><?= $contactos["fax"] ?></p>
            </div>
            <div>
                <p class="titulo">E-mail</p>
                <p class="texto"><a href="#"><?= $contactos["email"] ?></a></p>
            </div>
        </div>


        <div class="col-12 col-lg-7 formulario">
            <form action="" method="POST">
                <label for="nome">*NOME</label>
                <input type="text" id="nome" name="nome" required placeholder="Insira aqui o seu nome">

                <label for="email">*E-MAIL</label>
                <input type="email" id="email" name="email" required placeholder="Insira aqui o seu e-mail">

                <label for="telefone">*TELEFONE</label>
                <input type="text" id="telefone" name="telefone" required placeholder="Insira aqui o seu telefone">

                <label for="assunto">*ASSUNTO</label>
                <input type="text" id="assunto" name="assunto" required placeholder="Insira aqui o assunto">

                <label for="mensagem">*MENSAGEM</label>
                <textarea id="mensagem" name="mensagem" required placeholder="Insira aqui a sua mensagem"></textarea>
                <div class="d-flex justify-content-between">
                    <p>* Campos de preenchimento obrigatório</p>

                </div>
                <div class="d-block d-lg-flex justify-content-between">
                    <div class="checkbox">
                        <input type="checkbox" id="copia" name="copia">
                        <label for="copia" class="copiadados">Quero receber uma cópia desta mensagem no meu e-mail.</label>
                    </div>
                    <div>
                        <div class="g-recaptcha" data-sitekey="6LeoAisrAAAAAAHaugBFXgdnLxhPspjaplBFRwS4"></div>
                    </div>
                    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
                </div>
                <div class="d-none d-lg-flex justify-content-end">
                    <button type="submit">ENVIAR</button>
                </div>
                <div class="d-flex d-lg-none justify-content-center">
                    <button type="submit">ENVIAR</button>
                </div>
            </form>

            <?php if ($mensagem_enviada): ?>
                <div class="alerta <?= $mensagem_enviada['tipo'] ?>">
                    <?= $mensagem_enviada['mensagem'] ?>
                </div>
            <?php endif; ?>
        </div>
    </div>

</main>