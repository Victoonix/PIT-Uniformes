<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/home.css'>
    <script src='home.js'></script>
</head>
<body>
          <!-- Start Landing Page -->
          <div class="landing-page">
            <header>
              <div class="container">
                <a href="#" class="logo">RVK <b>Uniformes</b></a>
                <ul class="links">
                  <a href="index.php"><li>Home</li></a>
                  <a href="about.php"><li>Sobre nós</li></a>
                  <a href="contact.php"><li>Contato</li></a>
                  <?php session_start();
                  if (isset($_SESSION['login']) && $_SESSION['login'] === true)
                  {echo '<a href="vendas.php"><li>Camisas</li></a>';} 
                  else {echo '<a href="pagLogin.php"><li>Login</li></a>';} ?>
                </ul>
              </div>
            </header>
            <div class="content">
              <div class="container">
                <div class="info">
                  <h1>O que fazemos?</h1>
                  <p>Somos a melhor e mais unica loja de uniformes para todas as escolas.Confira os mais diversos uniformes só aqui.</p>
                  <button>Compre</button>
                </div>
                <div class="image">
                  <img src="assets/imgs/empoderar.png" width="1900px">
                </div>
              </div>
            </div>
          </div>
          <!-- End Landing Page -->






         <h1 class="h1">Escolas Parceiras</h1>
          
          <div class="card-group">
            <div class="card">
              <img class="card-img-top" src="assets/imgs/santa.jpg" height="350px" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Santa Marcelina</h5>
                <p class="card-text">A Escola Santa Marcelina é uma instituição de ensino com uma longa história e tradição, fundada por irmãs da Congregação das Irmãs de Santa Marcelina. A missão é proporcionar educação de qualidade com base em valores cristãos e princípios éticos. </p>
                
              </div>
            </div>
            <div class="card">
              <img class="card-img-top" src="assets/imgs/COTEMIG-.png" width="500px" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Cotemig</h5>
                <p class="card-text"> O Colégio Cotemig tem como um de seus principais diferenciais o foco em tecnologia e inovação. Ele oferece uma série de cursos e disciplinas relacionados à tecnologia da informação e prepara os alunos para lidar com as demandas do mundo digital.</p>
                
              </div>
            </div>
            <div class="card">
              <img class="card-img-top" src="assets/imgs/colegium.jpg" height="350px" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Colegium</h5>
                <p class="card-text">O Colégio Colegium é conhecido por seu compromisso com a educação de qualidade. Ele busca oferecer um ensino rigoroso e atualizado, preparando os alunos para os desafios acadêmicos e profissionais.</p>
               
              </div>
            </div>
          </div>

          <!-- Footer -->
<footer class="site-footer">
  <div class="container">
    <div class="row">
      <div class="col-xs-6 col-md-3">
        <h6>Contato</h6>
        <ul class="footer-links">
          <li><a href="#"><img src="assets/imgs/whatsapp.png" alt="wpp" width="40px"></a></li>
          <li><a href="#"><img src="assets/imgs/instagram.png" alt="insta" width="50px"></a></li>
          <li><a href="#"><img src="assets/imgs/linkedin.png" alt="linkedin" width="40px"></a></li>
          <li><a href="#"><img src="assets/imgs/github.png" alt="github" width="50px"></a></li>
        </ul>
      </div>

      <div class="col-sm-12 col-md-6">
        <h6>Sobre</h6>
        <p class="text-justify">Bem-vindo à RVK STORE, onde a excelência encontra a uniformidade! Somos uma empresa de uniformes iniciantes dedicada a fornecer soluções de vestuário profissional que combinem estilo, qualidade e funcionalidade. Com um compromisso com a inovação e o atendimento excepcional, estamos determinados a nos tornar uma referência no setor de uniformes. Na RVK STORE, entendemos a importância dos uniformes como uma ferramenta para a identidade visual e a representação de uma marca. Sabemos que um uniforme bem projetado e de alta qualidade pode não apenas unificar a equipe, mas também transmitir profissionalismo e confiança aos clientes. É por isso que nos esforçamos para criar uniformes que atendam às necessidades específicas de cada setor, mantendo a elegância e o conforto.</p>
      </div>

      <div class="col-xs-6 col-md-3">
        <h6>Quick Links</h6>
        <ul class="footer-links">
          <li><a href="http://scanfcode.com/about/">About Us</a></li>
          <li><a href="http://scanfcode.com/contact/">Contact Us</a></li>
          <li><a href="http://scanfcode.com/contribute-at-scanfcode/">Contribute</a></li>
          <li><a href="http://scanfcode.com/privacy-policy/">Privacy Policy</a></li>
          <li><a href="http://scanfcode.com/sitemap/">Sitemap</a></li>
        </ul>
      </div>
    </div>
    <hr>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-sm-6 col-xs-12">
        <p class="copyright-text">Copyright &copy; 2023 All Rights Reserved by 
     <a href="#">Scanfcode</a>.
        </p>
      </div>
    </div>
  </div>
</footer>

        
</body>
</html>