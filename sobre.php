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
<html lang="pt-BR">

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

  <main>

    <!-- começo banner -->
    <?php require_once("conteudo/banner.php") ?>

    <!-- quem somos -->
    <section class="quem-somos">
      <div class="container">
        <div>
          <div>
            <img src="img/fotoEmpresa.webp" alt="Sala de reunião com vista para a cidade">
          </div>
        </div>
        <aside>
          <h2>QUEM SOMOS?</h2>
          <p>
            A <strong>CoderaTech</strong> é uma agência de desenvolvimento web, full-stack e mobile.
            Unimos código, inovação e tecnologia para impulsionar a nova era digital.
            Transformamos ideias em soluções modernas, eficientes e escaláveis.
            Priorizamos performance, usabilidade e design de alta qualidade.
            <strong>CoderaTech</strong>: conectando você ao futuro da tecnologia.
          </p>
        </aside>
      </div>
    </section>

    <!-- começo valores -->
    <section class="valores">
      <div class="blue container">
        <div class="card">
          <div class="face face1">
            <div class="content">
              <h2>Impacto</h2>
              <p>Antes mesmo do primeiro clique, seu público já sente algo e isso não é por acaso. Cada escolha no nosso processo de criação é estratégica: do código ao design, tudo é feito para se destacar. As cores que usamos — branco, preto, azul, amarelo e cinza — quando combinadas, formam identidades visuais fortes, modernas e marcantes. Nada é aleatório. Cada tom, cada contraste e cada detalhe visual trabalha junto para criar projetos de alto impacto.</p>
            </div>
          </div>
          <div class="face face2">
            <h2>01</h2>
          </div>
        </div>
        <div class="card">
          <div class="face face1">
            <div class="content">
              <h2>Conexão</h2>
              <p>O ponto de partida de toda inovação está na conexão genuína entre pessoas e também entre dispositivos. Antes de desenvolver qualquer solução, buscamos compreender quem você é, o que precisa e como podemos caminhar juntos. Acreditamos que criar laços reais, aliados à conectividade inteligente entre sistemas e dispositivos, torna cada projeto único, eficiente e capaz de gerar resultados duradouros.</p>
            </div>
          </div>
          <div class="face face2">
            <h2>02</h2>
          </div>
        </div>
        <div class="card">
          <div class="face face1">
            <div class="content">
              <h2>Inovação</h2>
              <p>Inovação é mais do que criar o novo é transformar ideias em soluções práticas e relevantes. Aqui, combinamos criatividade, tecnologia e estratégia para desenvolver produtos que antecipam tendências, resolvem desafios complexos e impulsionam o crescimento do seu negócio. Porque inovar é reinventar constantemente, buscando sempre o melhor caminho para o futuro.</p>
            </div>
          </div>
          <div class="face face2">
            <h2>03</h2>
          </div>
        </div>
      </div>
    </section>

    <!-- POR QUE NOS ESCOLHER INICIO -->
    <section class="pqescolher">
      <div class="container">
        <h2>PORQUE NOS ESCOLHER?</h2>
        <p class="descricao">
          Na hora de desenvolver seu projeto digital, escolher o parceiro certo faz toda a diferença.<br>
          Aqui estão alguns dos motivos pelos quais nossos clientes confiam em nós:
        </p>
        <div class="bloco-escolha">
          <!-- fundo -->
          <div class="bloco-escolha-inner">
            <div class="motivo">
              <h3>Equipes Ágeis e Eficientes</h3>
              <p>Trabalhamos com metodologias ágeis para entregar soluções de forma rápida, sem perder a qualidade. Você acompanha cada etapa do projeto com total transparência.</p>
            </div>
            <div class="motivo">
              <h3>Segurança e Confiabilidade</h3>
              <p>Aplicamos as melhores práticas de segurança e seguimos padrões internacionais de desenvolvimento, garantindo estabilidade e proteção para seu sistema.</p>
            </div>
            <div class="motivo">
              <h3>Suporte 24/7</h3>
              <p>Seja dia ou noite, nossa equipe está disponível para garantir que tudo funcione como esperado. Suporte humano, ágil e resolutivo.</p>
            </div>
            <div class="motivo">
              <h3>Foco em Resultados</h3>
              <p>Mais do que código bem escrito, entregamos soluções que impulsionam o seu negócio. Usabilidade, performance e escalabilidade estão no nosso DNA.</p>
            </div>
            <div class="motivo">
              <h3>Soluções Personalizadas</h3>
              <p>Nada de fórmulas prontas. Cada projeto é único, desenvolvido sob medida para atender aos seus objetivos de negócio.</p>
            </div>
            <div class="motivo">
              <h3>Parceria de Longo Prazo</h3>
              <p>Acreditamos em construir relacionamentos duradouros. Estamos com você desde a ideia inicial até a evolução contínua do seu projeto.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- começo contato -->
    <?php require_once("conteudo/contato.php") ?>

  </main>

  <!-- começo footer -->
  <?php require_once("conteudo/footer.php") ?>

  <script type="text/javascript" src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

  <script type="text/javascript" src="js/slick.min.js"></script>

  <script src="js/animacao.js"></script>

</body>

</html>