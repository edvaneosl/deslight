<?php
// Sessão
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Deslight</title>
      <meta name="description" content="A melhor empresa de Desenvolvimento Web do Brasil.">

      <!-- Primary Meta Tags -->
      <title>DESLIGHT</title>
      <meta name="title" content="DESLIGHT">
      <meta name="description" content="A melhor empresa de Desenvolvimento Web do Brasil.">

      <!-- Open Graph / Facebook -->
      <meta property="og:type" content="website">
      <meta property="og:url" content="https://metatags.io/">
      <meta property="og:title" content="DESLIGHT">
      <meta property="og:description" content="A melhor empresa de Desenvolvimento Web do Brasil.">
      <meta property="og:image" content="https://metatags.io/assets/meta-tags-16a33a6a8531e519cc0936fbba0ad904e52d35f34a46c97a2c9f6f7dd7d336f2.png">

      <!-- Twitter -->
      <meta property="twitter:card" content="summary_large_image">
      <meta property="twitter:url" content="https://metatags.io/">
      <meta property="twitter:title" content="DESLIGHT">
      <meta property="twitter:description" content="A melhor empresa de Desenvolvimento Web do Brasil.">
      <meta property="twitter:image" content="https://metatags.io/assets/meta-tags-16a33a6a8531e519cc0936fbba0ad904e52d35f34a46c97a2c9f6f7dd7d336f2.png">
      
      <link rel="icon" href="img/DL.ico">


      <!--GOOGLE ICONS -->
       <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

      <!--FONT AWESOME -->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni" crossorigin="anonymous">

      <!-- MATERIALIZE CSS -->
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">      
       <!-- CUSTOM CSS -->
      <link rel="stylesheet" href="css/custom.css">
    </head>
    <body>


      <!-- HEADER -->

    <header>
      
      <!-- MENU MOBILE -->

          <ul class="sidenav" id="menu-mobile">
             <li><a class="black-text" href="index.php"><font size="3" face="arial-black">HOME</font></a></li>
             <li><a class="black-text" href="index.php"><font size="3" face="arial-black">SERVIÇOS</font></a></li>
             <li><a class="black-text" href="index.php"><font size="3" face="arial-black">CONTATO</font></a></li>
             <li><a class="black-text" href="index.php"><font size="3" face="arial-black">SOBRE</font></a></li>
             <li><a class="btn btn-small brown-logo" href="#"><font color=white>Faça um Orçamento</
             font></a></li>

          </ul>

      <!-- BARRA DE NAVEGAÇÃO -->

      <div class="navbar-fixed">
      <nav class="navbar z-depth-3">
        <div class="nav-wrapper container">
          <h1 class="logo_text">Crie o seu site, sem burocracia, do seu jeito! </h1>
          
          <a href="#"><img class= "logo_img" src="img/DL.png" alt="lightdev" data-ll-status="loaded"></a>
          <ul class="right hide-on-med-and-down">
             <li><a class="black-text" href="index.php"><font size="3" face="arial-black">HOME</font></a></li>
             <li><a class="black-text" href="index.php"><font size="3" face="arial-black">COMO FUNCIONA?</font></a></li>
             <li><a class="black-text" href="index.php"><font size="3" face="arial-black">SERVIÇOS</font></a></li>
             <li><a class="black-text" href="index.php"><font size="3" face="arial-black">CONTATO</font></a></li>
             <li><a class="black-text" href="index.php"><font size="3" face="arial-black">SOBRE</font></a></li>
             <li><a class="btn btn-small brown-logo waves-effect waves-light" href="#orcamento"><font color=white>Faça um Orçamento</font></a></li>
          </ul>

          <a href="#" data-target="menu-mobile" class="sidenav-trigger right"><i class="material-icons black-icon">menu</i></a>
        </div>
      </nav> 
      </div>
    </header>




    <!-- RESPOSTA -->


    <section class="orcamento bloco scrollspy" id="resposta">
        <div class="row container center">
          <div class="col s12">
          <div class="card blue-grey darken-1" style="padding-bottom: 100px;">
            <div class="card-content white-text">
              <span class="card-title">Status da Solicitação</span>
            </div>
            <div class="card-content white-text">
              <h5><?php echo $_SESSION['mensagem'];?></h5>
              <p>Para um melhor atendimento entre em contato pelo whatsapp: <a href="http://api.whatsapp.com/send?1=pt_BR&phone=5562998149146"><span class="icon"><i class="material-icons green white-icon">whatsapp</i></span></a></p>
              
            </div>
            <div class="card-content white-text">
              <a href="index.php" class="btn btn-small halfway-fab waves-effect waves-light green">Home</a>
            </div>

          </div>
        </div>

        </div>


    <!-- RODAPÉ -->

    <section>
    <footer class="page-footer brown-logo">
          <div class="container">
            <div class="row">

              <div class="col s6 container">
                <h5 class="white-text">Siga-nos nas redes</h5>
                <p class="black-text text-lighten-4">Fique por dentro de todas as novidades e compartilhe com seus amigos!</p>
              </div>
              <div class="col s6 container">
                <h5 class="white-text">Menu</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#home">Home</a></li>
                  <li><a class="grey-text text-lighten-3" href="#comofunciona">Como funciona</a></li>
                  <li><a class="grey-text text-lighten-3" href="#servicos">Serviços</a></li>
                  <li><a class="grey-text text-lighten-3" href="#sobrenos">Sobre</a></li>
                  <li><a class="grey-text text-lighten-3" href="#contato">Contato</a></li>
                  <li><a class="grey-text text-lighten-3" href="#trabalhe">Trabalhe Conosco</a></li>
                  <li><a class="grey-text text-lighten-3" href="#orcamento">Orçamento</a></li>
                </ul>
              </div>
            </div>
          </div>

          <div class="footer-copyright">
            <div class="container">
            © 2021- Todos os direitos reservados
            <a class="grey-text text-lighten-4 right" href="#!">Mais Links</a>
            </div>
          </div>

        </footer>
      </section>

    <!-- JQUERY -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- MATERIALIZE JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <!-- JAVASCRIPT -->
    <script>
      //INICIALIZAÇÃO
      $(document).ready(function(){

        // MENU MOBILE
          $(".sidenav").sidenav();
        // LINK INTERNO
          $(".scrollspy").scrollSpy({
            scrollOffset: 0
          });
        // CAROUSEL
          $('.carousel').carousel({
          fullWidth: false,
          indicators: true
          });

          $('.next').click(function(){
            $('.carousel').carousel('next');
          });

          $('.prev').click(function(){
            $('.carousel').carousel('prev');
          });
                  
        //PROCEDIMENTOS
          $('.materialboxed').materialbox();

        // MODAL
          $('.modal').modal();

        // TABS
          $('.ul.tabs').tabs();

        // SELECT

          $('select').formSelect();

        // FORMULÁRIO

          M.updateTextFields();

          $('input#input_text, textarea#textarea2').characterCounter();

           });


      //ADICIONANDO NAVCOLOR
      $(window).on("scroll", function(){
          if($(window).scrollTop() >100){
              $(".navbar").addClass("nav-color");
          } else{
              $(".navbar").removeClass("nav-color");
          }
      });
    </script>
    
    <script>
      <?php
         // Colar na index.php o bloco abaixo
             if(isset($_GET['status'])):
                 if($_GET['status'] == "sucesso"):
                 echo "<script>Materialize.toast('Enviado com sucesso!', 4000);</script>";
                 else:   
                 echo "<script>Materialize.toast('Erro ao enviar', 4000);</script>";
                 endif;
             endif;
        ?>
      
    </script>

      


      </body>

</html
