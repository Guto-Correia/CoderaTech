<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$ok = 0;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;


try {

    if (isset($_POST["email"])) {
        //só entra aqui se prencher o form e clicar no butão

        require 'vendor/phpmailer/Exception.php';
        require 'vendor/phpmailer/PHPMailer.php';
        require 'vendor/phpmailer/SMTP.php';


        //Create an instance; passing `true` enables exceptions
        $mail = new PHPMailer(true);

        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $telefone = $_POST["telefone"];
        $motivo = $_POST["motivo"];
        $assunto = "E-mail do site XYZ Code";

        //mostra as carc da var
        // var_dump(value: $nome);
        // var_dump(value: $email);
        // var_dump(value: $telefone);
        // var_dump(value: $motivo);
        // var_dump(value: $mensagem);

        // //Server settings
        // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'tipi05.360criativo.com.br';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'contato@tipi05.360criativo.com.br';                     //SMTP username
        $mail->Password   = 'TIPI05**2025';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('contato@tipi05.360criativo.com.br');
        $mail->addAddress('correiaguto7@gmail.com');     //Add a recipient
        // $mail->addAddress('ellen@example.com');               //Name is optional
        // $mail->addReplyTo('info@example.com', 'Information');
        // $mail->addCC('cc@example.com');
        // $mail->addBCC('bcc@example.com');

        //Attachments
        // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
        // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = $assunto;
        $mail->Body    = "
        Nome: $nome <br>
        E-mail: $email <br>
        Telefone: $telefone <br>
        Motivo: $motivo <br>
        
        ";

        $mail->AltBody = "
        Nome: $nome /n
        E-mail: $email /n
        Telefone: $telefone /n
        Motivo: $motivo
        ";

        $mail->send();
        // echo 'SUa mensagem foi um sucesso';
        $ok = 1;
    } //fim do if

}catch (Exception $e) {
    echo $nome . ", Não foi possivel o envio do e-mail: {$mail->ErrorInfo}";
    $ok = 2;
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    
    <link rel="apple-touch-icon" sizes="57x57" href="img/icon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="img/icon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/icon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="img/icon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/icon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="img/icon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="img/icon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="img/icon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="img/icon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="img/icon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/icon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="img/icon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/icon/favicon-16x16.png">
    <link rel="manifest" href="img/icon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <link rel="stylesheet" href="css/reset.css">


    <link rel="stylesheet" type="text/css" href="css/slick.css" />
    <link rel="stylesheet" type="text/css" href="css/slick-theme.css" />

    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- começo header -->
    <?php require_once("conteudo/header.php") ?>

    <section class="mapa">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3659.025328309543!2d-46.434437024671894!3d-23.49559717884505!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce63dda7be6fb9%3A0xa74e7d5a53104311!2sSenac%20S%C3%A3o%20Miguel%20Paulista!5e0!3m2!1spt-BR!2sbr!4v1762568961721!5m2!1spt-BR!2sbr" style="border:0;" height="700px" width="100%" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>

    <!-- começo contato -->
     <?php require_once("conteudo/contato.php") ?>

     <!-- começo footer -->
    <?php require_once("conteudo/footer.php") ?>

</body>
</html>