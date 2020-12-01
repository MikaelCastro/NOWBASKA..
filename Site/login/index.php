<?php
session_start();
?>
 
<!DOCTYPE html>
<html>
    
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="css/login.css">
     <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Ubuntu:400,400italic,500,700,700italic">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/stylee.css">
    <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>
</head>
 
<body>
    <div class="page text-center"><a class="section section-banner text-center d-none d-xl-block"  style="background-image: url(images/banner/background-04-192x60.jpg); background-image: -webkit-image-set( url(images/baner/background-04-1920x60.jpg) 1x, url(images/baner/background-04-3840x120.jpg) 2x )"><img src="images/banner/foreground-04-1600x60.png" srcset="images/banner/foreground-04-1600x0.png 1x, images/banner/foreground-04-3200x120.png 2x" alt="" width="1600" height="310"></a>
      


      <header class="page-head slider-menu-position" data-preset='{"title":"Header with slider","category":"header, slider","reload":true,"id":"header-1"}'>
        <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
    <div class="container">
      <a class="navbar-brand"><a href="index.php"><img width='235' height='50' src='../images/logo.jpeg' alt=''/></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="navbar-dark" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>



      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="../index.php"><h6><FONT COLOR="white">PÁGINA PRINCIPAL</FONT></h4></a>
          </li>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="../Localizador.php"><h6><FONT COLOR="white">LOCALIZADOR</FONT></h4></a>
          </li>

          <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
             <a class="nav-link" href="../Noticias.php"><h6><FONT COLOR="white">NOTÍCIAS</FONT></h4></a>
          </li>

      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="../SobreNós.php"><h6><FONT COLOR="white">SOBRE NÓS</FONT></h4></a>
          </li>
       <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="../Contato.php"><h6><FONT COLOR="white">ENTRE EM CONTATO</FONT></h4></a>
          </li>

          <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="../login/index.php"><h6><FONT COLOR="white">LOGIN</FONT></h4></a>


          
        </ul>
      </div>
    </div>
  </nav>
    <section class="hero is-success is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <h3 class="title has-text-black">Login</h3>
                    <h3 class="title has-text-black">NowBaska</a></h3>
                    <?php
                    if(isset($_SESSION['nao_autenticado'])):
                    ?>
                    <div class="notification is-danger">
                      <p>ERRO: Usuário ou senha inválidos.</p>
                    </div>
                    <?php
                    endif;
                    unset($_SESSION['nao_autenticado']);
                    ?>

                    
                    <div class="box">
                        <form action="login.php" method="POST">
                            <div class="field">
                                <div class="control">
                                    <input name="usuario" name="text" class="input is-large" placeholder="Seu usuário" autofocus="">
                                </div>
                            </div>
 
                            <div class="field">
                             
                                <div class="control">
                                  <input name="senha" class="input is-large" type="password" placeholder="Sua senha">
                                </div>
                            </div>
                            <div class="field">
                              <button type="submit" class="button is-block is-link is-large is-fullwidth"> <a href="cadastro.php">Cadastrar</a></button>
                              
                           <p> <button type="submit" class="button is-block is-link is-large is-fullwidth"><a href="../index.php">Entrar</button></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
 
</html>