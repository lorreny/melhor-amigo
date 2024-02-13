<?php
include 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Adicione qualquer validação necessária aqui

    // Recupera a origem do formulário
    $origem = isset($_POST['origem']) ? $_POST['origem'] : '';

    // Verifica a origem do formulário
    if ($origem === 'contato') {
        // Recupera os dados do formulário de contato
        $nome = htmlspecialchars($_POST["nome"]);
        $email = htmlspecialchars($_POST["email"]);
        $telefone = htmlspecialchars($_POST["telefone"]);
        $assunto = htmlspecialchars($_POST["assunto"]);
        $mensagem = htmlspecialchars($_POST["mensagem"]);

        // Preparar a consulta SQL para inserção na tabela formulario_contato
        $sql_contato = "INSERT INTO formulario_contato (nome, email, telefone, assunto, mensagem) VALUES ('$nome', '$email', '$telefone', '$assunto', '$mensagem')";

        // Executar a consulta para formulario_contato
        if ($mysqli->query($sql_contato) === TRUE) {
            // Envia o e-mail

            // Redireciona de volta para a página de contato após o envio
            header("Location: ../contato.php?enviado=1");
            exit();
        } else {
            echo "Erro na inserção de dados: " . $mysqli->error;
        }
    } elseif ($origem === 'assinatura') {
        // Recupera os dados do formulário de assinatura
        $nome_assinante = htmlspecialchars($_POST["nome_assinante"]);
        $email_assinante = htmlspecialchars($_POST["email_assinante"]);

        // Preparar a consulta SQL para inserção na tabela assinantes
        $sql_assinantes = "INSERT INTO assinantes (nome_assinante, email_assinante) VALUES ('$nome_assinante', '$email_assinante')";

        // Executar a consulta para assinantes
        if ($mysqli->query($sql_assinantes) === TRUE) {
            // Envia o e-mail (se necessário)

            // Redireciona para a página inicial após o envio do formulário de assinatura
            header("Location: ../index.php?assinante=1");
            exit();
        } else {
            echo "Erro na inserção de dados: " . $mysqli->error;
        }
    }
}
?>



<?php
/*
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupera os dados do formulário
    $nome = htmlspecialchars($_POST["nome"]);
    $email = htmlspecialchars($_POST["email"]);
    $telefone = htmlspecialchars($_POST["telefone"]);
    $assunto = htmlspecialchars($_POST["assunto"]);
    $mensagem = htmlspecialchars($_POST["mensagem"]);

    // Adicione qualquer validação necessária aqui

    // Configuração do destinatário
    $destinatario = "contato@melhoramigo.com.br";

    // Cria o corpo do e-mail
    $corpoEmail = "Nome: $nome\n";
    $corpoEmail .= "Email: $email\n";
    $corpoEmail .= "Telefone: $telefone\n";
    $corpoEmail .= "Assunto: $assunto\n";
    $corpoEmail .= "Mensagem:\n$mensagem";

    // Envia o e-mail
    mail($destinatario, "Contato Melhor Amigo", $corpoEmail);

    // Redireciona de volta para a página de contato após o envio
    header("Location: ../contato.php?enviado=1");
    exit();
}
?>
<?php/*
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Inclua o autoload do Composer para carregar as classes do PHPMailer
require 'vendor/autoload.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupera os dados do formulário
    $nome = htmlspecialchars($_POST["nome"]);
    $email = htmlspecialchars($_POST["email"]);
    $telefone = htmlspecialchars($_POST["telefone"]);
    $assunto = htmlspecialchars($_POST["assunto"]);
    $mensagem = htmlspecialchars($_POST["mensagem"]);

    // Adicione qualquer validação necessária aqui

    // Configuração do servidor SMTP
    $mail = new PHPMailer(true);
    try {
        //Configurações do servidor SMTP
        $mail->isSMTP();
        $mail->Host = 'smtp-relay.brevo.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'suporteescoladeninja@gmail.com';
        $mail->Password = 'xsmtpsib-7da801804a0d1f559ccb4b34c237bca6e41531f8a460fe2875472329a1cc340e-8vnXVDRhZN3Ly5zf';
        $mail->SMTPSecure = 'tls'; // tls ou ssl
        $mail->Port = 587; // tls: 587, ssl: 465

        // Configurações do e-mail
        $mail->setFrom($email, $nome);
        $mail->addAddress('contato@melhoramigo.com.br');
        $mail->Subject = 'Contato Melhor Amigo';
        $mail->Body = "Nome: $nome\nEmail: $email\nTelefone: $telefone\nAssunto: $assunto\nMensagem:\n$mensagem";

        // Envia o e-mail
        $mail->send();

        // Redireciona de volta para a página de contato após o envio
        header("Location: ../contato.php?enviado=1");
        exit();
    } catch (Exception $e) {
        echo "Erro no envio do e-mail: {$mail->ErrorInfo}";
    }
}*/
?>
