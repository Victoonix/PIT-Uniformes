<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@700&family=Roboto:ital,wght@0,400;1,100&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/about.css'>
    <?php header('Content-Type: text/html; charset=utf-8');?>
</head>
<body>
          <!--Header-->
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
            </div>
            <hr>
            <!--Header-->
            <div class="container">
   
                <div class="about">
                   <div class="left">
                      <h1>Sobre Nós</h1>
                      <hr>
                      <p>Nossa jornada começou com  a visão de fornecer uniformes de forma que o cliente se sinta à vontade na hora de escolher seus uniformes. Nosso principal objetivo é auxiliar escolas com o fornecimento de seus uniformes, trazendo organização e controle para seu estoque e pedidos, além de facilitar, também, a parte do aluno. Onde o mesmo terá facilidade em escolher o modelo do uniforme que mais lhe agrada, podendo receber seu uniforme em casa ou retirá-lo em sua própria escola.</p>
             
                               <p>Nossa equipe é composta por designers, programadores e fornecedores apaixonados e dedicados, que entendem a importância de criar um sistema que facilite a vida de nossos usuários . Cada detalhe é meticulosamente pensado para garantir a praticidade e a qualidade de nosso serviço.</p>
             
                   </div>
                   <div class="right">
                      <img src="assets/imgs/sec1.jpg">
                   </div>
                   <div class="clear"></div>
                </div>
                
                
                
                <div class="mission">
                  
                   <div class="left">
                      <img src="assets/imgs/sec2.jpg">
                   </div>
                     <div class="right">
                      <h1>Nossa Missão</h1>
                      <hr>
                      <p>A importância dos uniformes transcende a simples vestimenta, desempenhando um papel fundamental na formação de identidade, comunicação visual e transmissão de valores, além de contribuírem para a eficiência, segurança e profissionalismo em uma variedade de contextos.</p>
             
                       <p>Nossa missão é facilitar a vida de nossos clientes, trazendo um sistema que modernifica um setor tão importante dentro de uma instituição.  Seja você um cliente em busca de uniformes para sua escola e maior qualidade no controle de seus estoques, convidamos você a explorar nosso sistema!</p>

                     </div>
                </div>
            </div>
                
            
             <div id="teamtitle"><h1>Nosso Time!</h1></div>
             
                <section class="team">
                <div class="person">
                    <div class="container2">
                      <div class="container-inner">
                        <img class="circle" src="assets/imgs/jm.jpg" />
                        <img
                          class="img img1"  src="" />
                      </div>
                    </div>
                    <div class="divider"></div>
                    <div class="name">João Mateus</div>
                    <div class="title">Manager</div>
                  </div>

                  <div class="person">
                    <div class="container2">
                      <div class="container-inner">
                        <img class="circle" src="assets/imgs/joster.png" />
                      </div>
                    </div>
                    <div class="divider"></div>
                    <div class="name">João Elias</div>
                    <div class="title">Manager</div>
                  </div>

                  <div class="person">
                    <div class="container2">
                      <div class="container-inner">
                        <img class="circle" src="assets/imgs/jt.png" />
                      </div>
                    </div>
                    <div class="divider"></div>
                    <div class="name">João Tadeu</div>
                    <div class="title">Manager</div>
                  </div>

                  <div class="person">
                    <div class="container2">
                      <div class="container-inner">
                        <img class="circle" src="assets/imgs/kaio.jpg" />
                      </div>
                    </div>
                    <div class="divider"></div>
                    <div class="name">Kaio Mayer</div>
                    <div class="title">Manager</div>
                  </div>

                  <div class="person">
                    <div class="container2">
                      <div class="container-inner">
                        <img class="circle" src="assets/imgs/vieira.jpg" />
                      </div>
                    </div>
                    <div class="divider"></div>
                    <div class="name">Rafael Vieira</div>
                    <div class="title">Manager</div>
                  </div>

                  <div class="person">
                    <div class="container2">
                      <div class="container-inner">
                        <img class="circle" src="assets/imgs/victor.jpg" />
                      </div>
                    </div>
                    <div class="divider"></div>
                    <div class="name">Victor</div>
                    <div class="title">Manager</div>
                  </div>
                
                  
                </section>      
 <!-- Footer -->
 <footer class="site-footer">
    <nav class="icons">
        <div id="icons"><a href="https://l.instagram.com/?u=https%3A%2F%2Fwa.me%2F5531971359501&e=AT3hSlzYfHiFahpAHEqevgz5FkxZ2rItu49fUvciQvjz7CvjclLrd9EKKmWaRyt_Z_aLItbmASe3u7FvNohzXRefn-sFD_fwqaA5Ig"><img src="assets/imgs/whatsapp.png"><br></div></a>
        <div id="icons"><a href="https://instagram.com/quitandasobmedida?igshid=MzRlODBiNWFlZA=="><img src="assets/imgs/instagram.png"><br></div></a>
        <div id="icons"><a href="https://instagram.com/quitandasobmedida?igshid=MzRlODBiNWFlZA=="><img src="assets/imgs/github.png"><br></div></a>
    </nav>
    <div class="footerlinks"><a href="#"><p>Contato</p></a><a href="#"><p>Quem Somos</p></a></div>
    <div class="footerlinks"><a href="#"><p>Termos e Condições</p></a><a href="#"><p>Privacidade</p></a></div>
    <div class="copy-text">Copyright &copy;RVK Store 2023</div>

</footer>          

</body>
</html>