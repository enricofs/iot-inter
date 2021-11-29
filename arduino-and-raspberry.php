<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Inter</title>

    <link rel="shortcut icon" href="./assets/imgs/favicon.ico" type="image/x-icon">

    <link rel="stylesheet" href="./assets/css/style.css" />
    <link rel="stylesheet" href="./assets/css/footer.css" />

    <link
      rel="stylesheet"
      type="text/css"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
    />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;1,100;1,200;1,300;1,400;1,500;1,600&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>

    <?php
      //
    ?>

    <header>
      <nav>
        <a class="logo" href="index.php">Iot inter</a>
        <div class="mobile-menu">
          <div class="line1"></div>
          <div class="line2"></div>
          <div class="line3"></div>
        </div>
        <ul class="nav-list">
          <li><a href="problem.php">O problema</a></li>
          <li><a href="truancy-school.php">Evasão escolar</a></li>
          <li><a href="embedded-system.php">Sistemas embarcados</a></li>
          <li><a href="arduino-and-raspberry.php">Arduino</a></li>
          <li><a href="arduino-and-raspberry.php#raspberry">Raspberry</a></li>
          <li><a href="embedded-system-education.php">SE na Educação</a></li>
          <li><a href="iot.php">IoT</a></li>
          <li><a href="iot-education.php">IoT na educação</a></li>
          <div>
            <a id="baixar-guia" href="donwload-guide.php">Baixar Guia</a>
          </div>
        </ul>
      </nav>
    </header>
    
    <main>
      <div class="container-main">
        <div class="container-sub">
          <h1 class="title">Arduino e Raspberry Pi</h1>
          <h2 class="subtitle">
            Arduino é uma plataforma de prototipagem eletrônica de hardware
            livre e de placa única.<br><br>
            Raspberry Pi é um computador de placa única.
          </h2>
        </div>
        <img class="img" src="./assets/imgs/arduino.svg" alt="Imagem ilustrativa de um Arduino"/>

      </div>
    </main>
    <section class="fourth-section">
      <div class="container-main">
        <div class="container-sub">
          <h2 class="title">O que é arduino </h2>
          <p class="subtitle">
            Arduino é uma plataforma de prototipagem eletrônica de hardware livre e de placa única. Ele é projetado com microcontroladores Atmel AVR com suporte de entrada / saída integrado. É uma linguagem de programação padrão derivada de Wiring, essencialmente C / C ++. O objetivo do projeto é criar ferramentas que sejam fáceis de usar, acessíveis, flexíveis e fáceis de usar por novatos e profissionais. Principalmente para quem não consegue usar os controladores e ferramentas mais complexas.<br>

            <br>Ele pode ser usado para desenvolver objetos interativos independentes ou para se conectar a um host. Uma placa Arduino típica consiste em um controlador, algumas linhas de E / S digitais e analógicas e uma interface serial ou USB para o host para programação em tempo real e interação com ele. A placa em si não possui funções de rede, mas é comum combinar um ou mais Arduinos dessa forma usando extensões apropriadas chamadas de shields. A interface do host é muito simples e pode ser escrita em vários idiomas. O mais popular é Processing, mas outros que podem se comunicar com conexões seriais são: Max / MSP, Pure Data, SuperCollider, ActionScript e Java. Em 2010, foi feito um documentário sobre uma plataforma chamada Arduino: The Documentary.<br>

            <br>O nome Arduino vem de um bar em Ivrea, Itália, onde alguns dos fundadores do projeto costumavam se reunir. O bar foi nomeado após Arduíno de Ivrea, que foi o marquês da Marca de Ivrea e Rei da Itália de 1002 a 1014.</p>
        </div>
      </div>
    </section>


    <section class="fifth-section" id="raspberry">
      <div class="container-main">
        <div class="container-sub">
          <h2 class="title">O que é Raspberry Pi</h2>
          <p class="subtitle">O Raspberry Pi é um computador de placa única do tamanho de um cartão de crédito (ou ainda menor, dependendo do modelo). Quando conectado a um monitor, mouse e teclado, o RPi funciona como um computador desktop.<br> 

            O primeiro modelo da placa, Raspberry Pi 1 Model B, foi lançado em 2012 pela Raspberry Pi Foundation. O objetivo da fundação é fornecer computadores de baixo custo e bom desempenho para que pessoas de diferentes idades e áreas de atuação possam aprender programação, desenvolver soluções e desfrutar do uso da placa.<br> 

            <br><br>
            <img class="img" src="./assets/imgs/rasp.svg" style="display: block ;margin: 0 auto;" alt="Imagem ilustrativa de uma Raspberry Pi"/>
            <br><br>

            <br><h2>Linha do tempo do Raspberry Pi</h2><br>
            <br>Desde 2012, várias versões e modelos foram lançados. Durante esse tempo, houve várias atualizações envolvendo processadores, memória e conectividade. Por exemplo, a primeira versão da placa tem um processador single-core de 700 MHz, 256 MB de memória e apenas uma porta USB para conectar periféricos. Hoje, algumas versões da placa são equipadas com um processador quad-core de 1,5 GHz, até 8 GB de memória, quatro portas USB e conexões WiFi e Bluetooth. <br>


           <br><h2>Conectores Raspberry Pi</h2><br> 


          <br> Todos os modelos da RPi possuem uma entrada para cartão micro SD. É no cartão micro SD que você vai gravar o sistema operacional da placa. Além disso, a Raspberry Pi possui: entrada para fonte de alimentação. entradas USB para conexão de periféricos (mouse, teclado, pendrive), entrada HDMI para conexão em um monitor ou TV, saída P2 para conexão de caixas de som ou fones de ouvido, conector Ethernet e conectores para display e câmera.
          OBS: Alguns recursos podem variar dependendo do modelo da placa.<br>

          </p>
        </div>
      </div>
    </section>

    <footer class="footer">
      <div class="container">
        <div class="row">
          <div class="footer-col">
            <h4>Equipe</h4>
            <ul>
              <li><a href="https://www.linkedin.com/in/enrico-ferreira-dos-santos" target="_blank">Enrico</a></li>
              <li><a href="https://www.linkedin.com/in/isabelle-vicente-5b958b1a9/" target="_blank">Isabelle</a></li>
              <li><a href="https://www.linkedin.com/in/alexandre-ribeiro-93443a224/" target="_blank">Alexandre</a></li>
            </ul>
          </div>
          <div class="footer-col">
            <h4>Links Principais</h4>
            <ul>
              <li><a href="problem.php">O problema</a></li>
              <li><a href="embedded-system.php">Sistemas Embarcados</a></li>
              <li><a href="arduino-and-raspberry.php">Arduino e Raspberry</a></li>
              <li><a href="iot-education.php">Tecnologia na Educação</a></li>
            </ul>
          </div>
          <div class="footer-col">
            <h4>Outros Links</h4>
            <ul>
              <li><a href="form-feedback.php">Formulário</a></li>
              <li><a href="painel-team.php">Integrantes</a></li>
              <li><a href="donwload-guide.php">Manual</a></li>
            </ul>
          </div>
          <div class="footer-col">
            <h4>Redes Sociais</h4>
            <div class="social-links">
              <a href="https://www.facebook.com/groups/311942136982640" target="_blank"><i class="fab fa-facebook-f"></i></a>
              <a href="https://twitter.com/Belle_vicent" target="_blank"><i class="fab fa-twitter"></i></a>
              <a href="https://www.instagram.com/iot.sistemas.embarcados/" target="_blank"><i class="fab fa-instagram"></i></a>
              <a href="https://www.linkedin.com/company/iot-e-sistemas-embarcados-na-educa%C3%A7%C3%A3o" target="_blank"><i class="fab fa-linkedin-in"></i></a>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <script src="./assets/scripts/mobile-navbar.js"></script>

    <div vw class="enabled">
      <div vw-access-button class="active"></div>
      <div vw-plugin-wrapper>
        <div class="vw-plugin-top-wrapper"></div>
      </div>
    </div>
    <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
    <script>
      new window.VLibras.Widget('https://vlibras.gov.br/app');
    </script>
  </body>
</html>