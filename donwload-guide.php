<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Inter</title>

    <link rel="shortcut icon" href="./assets/imgs/favicon.ico" type="image/x-icon">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

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
          <div>
            <a id="baixar-guia" href="javascript:void(0)" onClick="history.go(-1); return false;" style="display: inline-block; margin-top: 32px;" >Voltar</a>
          </div>
    </header>

    <main>
      <div class="container-main">
        <div class="container-sub">
          <h1 class="title">Baixar Guia</h1>
          <h2 class="subtitle">
            Selecione abaixo o idioma de sua preferência para baixar nosso guia!
          </h2>
        </div>
        <img class="img" src="./assets/imgs/download-img.png" alt="Imagem ilustrativa de download" />
      </div>
    </main>

    <section style="margin: 100px auto; min-width: 300px; max-width: 1100px;">
      <div class="card-deck">
        <div class="card text-white bg-dark">
          <img class="card-img-top" src="./assets/imgs/flag-brasil.jpg" alt="Imagem de capa do card" alt="Imagem ilustrativa da bandeira do Brasil" />
          <div class="card-body">
            <h5 class="card-title">Guia em Português</h5>
            <p class="card-text">Clique no botão abaixo e faça o download</p>
            <div class="social-links">
              <a href="./assets/guides/guide-portugues.pdf" download="Guia em Português">
                <button type="button" class="btn btn-secondary">Baixar</button>
              </a>
            </div>
          </div>
        </div>
        <div class="card text-white bg-dark">
          <img class="card-img-top" src="./assets/imgs/flag-usa.jpg" alt="Imagem de capa do card" alt="Imagem ilustrativa da bandeira dos Estados Unidos" />
          <div class="card-body">
            <h5 class="card-title">Guia em Inglês</h5>
            <p class="card-text">Clique no botão abaixo e faça o download</p>
            <div class="social-links">
              <a href="./assets/guides/guide-english.pdf" download="Guide English">
                <button type="button" class="btn btn-secondary">Baixar</button>
              </a>
            </div>
          </div>
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
