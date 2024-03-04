<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Fale Conosco</title>
</head>
<body>
    <nav class="topnav">
        <a href="index.html">INÍCIO</a>
        <a href="pacotes.html">PACOTES</a>
        <a href="forms.php" class="ativo">FALE CONOSCO</a>
    </nav>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $mensagem = $_POST["mensagem"];
            $telefone = $_POST["telefone"];
            $assunto = $_POST["assunto"];

            $destinatario = "yagodeoliveira1208@gmail.com";
            $subject = "BooViagens";
            $corpo_email = "Nome: $nome\n";
            $corpo_email .= "Email: $email\n";
            $corpo_email .= "Telefone: $telefone\n";
            $corpo_email .= "Assunto: $assunto\n";
            $corpo_email .= "Mensagem:\n$mensagem";

            mail($destinatario, $subject, $corpo_email);
           
        }
    ?>

    <div class="formulario">
        <form class="forms" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <h2 class="h_ctt">ENTRE EM CONTATO</h2>
            <div class="f_nome">
                <label id="fl-nome" for="nome">NOME:</label><br>
                <input type="text" id="nome" name="nome" required><br><br>
            </div>    
            <div class="f_email">   
                <label id="fl-email" for="email">EMAIL:</label><br>
                <input type="email" id="email" name="email" required><br><br>
            </div>
            <div class="f_telefone">   
                <label id="fl-telefone" for="telefone">TELEFONE:</label><br>
                <input type="tel" id="telefone" name="telefone" required><br><br>
            </div>
            <div class="f_assunto">   
                <label id="fl-assunto" for="assunto">ASSUNTO:</label><br>
                <input type="text" id="assunto" name="assunto" required><br><br>
            </div>
            <div class="f_msg">
                <label id="fl-msg" for="mensagem">MENSAGEM:</label><br>
                <textarea id="mensagem" name="mensagem" rows="5" required style="resize: none"></textarea><br><br>
            </div>

            <div class="f_buttons">
                <input class="btn_limpa" type="reset" value="Limpar">
                <input class="btn_envia" type="submit" value="Enviar">
            </div>
            
        </form>
    </div>

</body>
</html>