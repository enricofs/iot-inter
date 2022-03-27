<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
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
          <h1 class="title">IOT e Sistemas Embarcados na Educação</h1>
          <h2 class="subtitle">
            A tecnologia mudou o mundo e vai mudar o ensino!!
          </h2>
        </div>
        <img class="img" src="./assets/imgs/img-principal.svg" alt="Imagem ilustrativa sobre tecnologia" />
      </div>
    </main>

    <section class="section-video">
      <div class="container-main">
        <div class="container-sub" style="padding-right: unset;">
          <h2 class="title">Vídeo sobre IOT - Interdisciplinar</h2>
          <iframe class="frame-video" src="https://www.youtube.com/embed/SxItKPTqPMk" title="Vídeo do YouTube sobre Internet das Coisas" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          <h3 class="subtitle">
            Vídeo falando sobre o que é a IOT (Internet of Things) que traduzindo, significa Internet das Coisas.
          </h3>
        </div>
      </div>
    </section>

    <section class="first-section">
      <div class="container-main">
        <div class="container-sub">
          <h2 class="title">Principais problemas da educação no Brasil</h2>
          <p class="subtitle">
            Baixa participação dos pais na vida escolar dos filhos e nos
            assuntos da escola;   <br />
            Burocracia em excesso na administração escolar; <br />
            Investimentos públicos insuficientes para atender com qualidades as
            necessidades educacionais; <br />
            Elevados índices de repetência, principalmente em regiões mais
            carentes; <br />
            Baixa permanência dos alunos nas escolas (média de 4 horas diárias)
            ...
          </p>

          <div class="div-btn">
            <a class="btn-continue" href="problem.php">Ler mais</a>
          </div>
        </div>
        <img class="img" src="./assets/imgs/problems-educacion.svg" alt="Imagem ilustrativa sobre educação" />
      </div>
    </section>

    <section class="second-section">
      <div class="container-main">
        <div class="container-sub">
          <h2 class="title">Evasão escolar</h2>
          <p class="subtitle">
            Antes da pandemia, a evasão escolar já era um problema que afetava
            uma boa parcela da população brasileira. <br />
            De acordo com a PNAD Contínua 2019, pesquisa realizada pelo IBGE,
            20,2% das pessoas de 14 a 29 anos do país, cerca de 10,1 milhões,
            não haviam completado alguma das etapas da educação básica...
          </p>

          <div class="div-btn">
            <a class="btn-continue" href="truancy-school.php">Ler mais</a>
          </div>
        </div>
        <img class="img" src="./assets/imgs/studants.svg" alt="Imagem ilustrativa de estudantes" />
      </div>
    </section>

    <section class="third-section">
      <div class="container-main">
        <div class="container-sub">
          <h2 class="title">Sistemas Embarcados</h2>
          <p class="subtitle">
            Também chamado de sistema embutido, é um sistema microprocessado em
            que um computador está anexado ao sistema que ele controla. Um
            sistema embarcado pode realizar um conjunto de tarefas que foram
            predefinidas. <br />
            O microprocessador é um circuito integrado que realiza as funções de
            cálculo e tomada de decisão de um computador...
          </p>

          <div class="div-btn">
            <a class="btn-continue" href="embedded-system.php">Ler mais</a>
          </div>
        </div>
        <img class="img" src="./assets/imgs/embedded-system.svg" alt="Imagem ilustrativa de um Sistema Embarcado" />
      </div>
    </section>

    <section class="fourth-section">
      <div class="container-main">
        <div class="container-sub">
          <h2 class="title">Arduino</h2>
          <p class="subtitle">
            Arduino é uma plataforma de prototipagem eletrônica de hardware
            livre e de placa única. Ele é projetado com microcontroladores Atmel
            AVR com suporte de entrada / saída integrado. É uma linguagem de
            programação padrão derivada de Wiring, essencialmente C / C ++...
          </p>

          <div class="div-btn">
            <a class="btn-continue" href="arduino-and-raspberry.php">Ler mais</a>
          </div>
        </div>
        <img class="img" src="./assets/imgs/arduino.svg" alt="Imagem ilustrativa de um Arduino" />
      </div>
    </section>

    <section class="fifth-section">
      <div class="container-main">
        <div class="container-sub">
          <h2 class="title">Raspberry Pi</h2>
          <p class="subtitle">
            O Raspberry Pi é um computador de placa única do tamanho de um
            cartão de crédito (ou ainda menor, dependendo do modelo). Quando
            conectado a um monitor, mouse e teclado, o RPi funciona como um
            computador desktop...
          </p>

          <div class="div-btn">
            <a class="btn-continue" href="arduino-and-raspberry.php#raspberry">Ler mais</a>
          </div>
        </div>
        <img class="img" src="./assets/imgs/rasp.svg" alt="Imagem ilustrativa de uma Raspberry Pi" />
      </div>
    </section>

    <section class="sixth-section">
      <div class="container-main">
        <div class="container-sub">
          <h2 class="title">Sistemas embarcados na educação</h2>
          <p class="subtitle">
            A tecnologia é um importante aliado da educação. Além de expor os
            alunos a novas ferramentas cada vez mais necessárias no cotidiano
            pessoal e profissional, também oferece recursos para um processo de
            ensino mais flexível e dinâmico...
          </p>

          <div class="div-btn">
            <a class="btn-continue" href="embedded-system-education.php">Ler mais</a>
          </div>
        </div>
        <img class="img" src="./assets/imgs/school.png" alt="Imagem ilustrativa sobre educação" />
      </div>
    </section>

    <section class="seventh-section">
      <div class="container-main">
        <div class="container-sub">
          <h2 class="title">Internet das Coisas (IoT)</h2>
          <p class="subtitle">
            A internet das Coisas (IoT) é a conexão de milhões de dispositivos
            inteligentes e sensores conectados à Internet. Esses dispositivos e
            sensores conectados coletam e compartilham dados para serem usados e
            avaliados...
          </p>

          <div class="div-btn">
            <a class="btn-continue" href="iot.php">Ler mais</a>
          </div>
        </div>
        <img class="img" src="./assets/imgs/internet-of-things.png" alt="Imagem ilustrativa sobre Internet das Coisas" />
      </div>
    </section>

    <section class="octave-section">
      <div class="container-main">
        <div class="container-sub">
          <h2 class="title">A tecnologia IoT nas instituições de ensino</h2>
          <p class="subtitle">
            A UNESCO (Organização das Nações Unidas para a Educação, a Ciência e
            a Cultura) destaca, entre outros benefícios, que as Tecnologias
            contribuem para “a qualidade de ensino e aprendizagem, o
            desenvolvimento profissional de professores, bem como podem melhorar
            a gestão, a governança e a administração educacional ao fornecer a
            mistura certa e organizada de políticas, tecnologias e capacidades”.
            E uma das tecnologias que se destacar nos benefícios que pode trazem
            para a educação e ioT ao utilizar a Internet das Coisas...
          </p>

          <div class="div-btn">
            <a class="btn-continue" href="iot-education.php">Ler mais</a>
          </div>
        </div>
        <img class="img" src="./assets/imgs/iot-school.png" alt="Imagem ilustrativa sobre Internet das Coisas na educação" />
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
