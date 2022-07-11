<!DOCTYPE html>
<html  >
<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v5.6.11, mobirise.com">
  <meta name="twitter:card" content="summary_large_image"/>
  <meta name="twitter:image:src" content="">
  <meta property="og:image" content="">
  <meta name="twitter:title" content="Logista login">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/logo-icon-2.png" type="image/x-icon">
  <meta name="description" content="">


  <title>Administração Portal</title>
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/web/assets/gdpr-plugin/gdpr-styles.css">
  <link rel="stylesheet" href="assets/animatecss/animate.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="preload" href="https://fonts.googleapis.com/css?family=Jost:100,200,300,400,500,600,700,800,900,100i,200i,300i,400i,500i,600i,700i,800i,900i&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Jost:100,200,300,400,500,600,700,800,900,100i,200i,300i,400i,500i,600i,700i,800i,900i&display=swap"></noscript>
  <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">

</head>
<body>
<?PHP include('menu-adm.php'); ?>


  <section data-bs-version="5.1" class="menu menu3 cid-taVDHsvgXz" once="menu" id="menu3-u">

    <nav class="navbar navbar-dropdown navbar-fixed-top navbar-expand-lg">
        <div class="container">
            <div class="navbar-brand">

                <span class="navbar-caption-wrap"><a class="navbar-caption text-warning text-primary display-5" href="index.html"><?=$_SESSION['nome_portal_sessao'];?></a></span>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-bs-toggle="collapse" data-target="#navbarSupportedContent" data-bs-target="#navbarSupportedContent" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <div class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true"><li class="nav-item"><a class="nav-link link text-white display-7" href="#top">Home</a></li>
                   <!-- 
                    <li class="nav-item dropdown"><a class="nav-link link dropdown-toggle text-white display-7" href="index.html#content4-5" data-toggle="dropdown-submenu" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">Serviços</a><div class="dropdown-menu" aria-labelledby="dropdown-994"><a class="dropdown-item text-white display-7" href="index.html#content4-5">Elevadores</a></div></li>
                    -->
                 
                    <li class="nav-item"><a class="nav-link link text-white text-primary display-7" href="#">Salas</a>
                    </li>
                    
                       <!--<li class="nav-item"><a class="nav-link link text-white display-7" href="index.html#features16-9">Quem Somos</a></li><li class="nav-item"><a class="nav-link link text-white text-primary display-7" href="index.html#contacts3-c">Contato</a></li></ul>
                <div class="icons-menu">
                    <a class="iconfont-wrapper" href="https://mobiri.se" target="_blank">
                        <span class="p-2 mbr-iconfont socicon-facebook socicon"></span>
                    </a>
                    <a class="iconfont-wrapper" href="https://mobiri.se" target="_blank">
                        <span class="p-2 mbr-iconfont socicon-twitter socicon"></span>
                    </a>
                    <a class="iconfont-wrapper" href="https://mobiri.se" target="_blank">
                        <span class="p-2 mbr-iconfont socicon-instagram socicon"></span>
                    </a>

                </div>
                -->
              </li></ul>
                <div class="navbar-buttons mbr-section-btn"><a class="btn btn-warning display-4" href="logout.php">Sair X</a></div>
             
            </div>
        </div>
    </nav>
</section>




 <section data-bs-version="5.1" class="header3 cid-taOCKft0qw mbr-fullscreen" id="header3-k">




    <div class="mbr-overlay" style="opacity: 0.2; background-color: rgb(255, 255, 255);"></div>

    <div class="align-center container">
        <div class="row justify-content-end">
            <div class="col-12 col-lg-6">




<div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10">
                <div class="mbr-section-head align-center mb-4">

                    <h3 class="mbr-section-subtitle mb-0 mbr-fonts-style display-4">
                        <strong>Administração do Portal</strong>
                    </h3>
                    <h3 class="mbr-section-title mb-0 mbr-fonts-style display-2">
                      <strong>

                  <?=$_SESSION['nome_usu_sessao'];?>

                      </strong>
                    </h3>
                </div>
                <div id="bootstrap-accordion_0" class="panel-group accordionStyles accordion" role="tablist" aria-multiselectable="true">
                    <div class="card mb-3">
                        <div class="card-header" role="tab" id="headingOne">
                            <a role="button" class="panel-title collapsed" data-toggle="collapse" data-bs-toggle="collapse" data-core="" href="#collapse1_0" aria-expanded="false" aria-controls="collapse1">
                                <h6 class="panel-title-edit mbr-fonts-style mb-0 display-7"><strong>Dados de conecção</strong>
                                </h6>
                                <!--
                                <span class="sign mbr-iconfont mbri-arrow-down"></span>
                              -->
                            </a>
                        </div>
                        <div id="collapse1_0" class="panel-collapse noScroll collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion" data-bs-parent="#bootstrap-accordion_0">
                            <div class="panel-body">
                              <table class="table">
                                <thead>
                                  <tr>
                                    <th>
                                      ID
                                    </th>
                                    <th>
                                      NOME
                                    </th>
                                    <th>
                                      EMAIL
                                    </th>
                                    <th>
                                      SENHA
                                    </th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td>
                                    <p class="mbr-fonts-style panel-text display-4">  <?=$_SESSION['id_usu_sessao'];?></p>
                                    </td>
                                    <td>
                                    <p class="mbr-fonts-style panel-text display-4">  <?=$_SESSION['nome_usu_sessao'];?></p>
                                    </td>
                                    <td>
                                    <p class="mbr-fonts-style panel-text display-4">  <?=$_SESSION['email_usu_sessao'];?></p>
                                    </td>
                                    <td>
                                      <p class="mbr-fonts-style panel-text display-4">  <?=$_SESSION['senha_usu_sessao'];?></p>
                                    </td>
                                  </tr>

                                </tbody>
                              </table>




                            </div>
                        </div>
                    </div>
                    <div class="card mb-3">
                        <div class="card-header" role="tab" id="headingOne">
                            <a role="button" class="panel-title collapsed" data-toggle="collapse" data-bs-toggle="collapse" data-core="" href="#collapse2_0" aria-expanded="false" aria-controls="collapse2">
                                <h6 class="panel-title-edit mbr-fonts-style mb-0 display-7"><strong>Salas
                                    </strong></h6>
                            </a>
                        </div>
                        <div id="collapse2_0" class="panel-collapse noScroll collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion" data-bs-parent="#bootstrap-accordion_0">
                            <div class="panel-body">
                            
                             	<p class="mbr-text mbr-fonts-style display-7 pt-4">
                                <a href="#" class="text-primary">Adicionar Sala</a>
                        		</p>
                          	 </div>
                        </div>
                    </div>
                    <div class="card mb-3">
                        <div class="card-header" role="tab" id="headingOne">
                            <a role="button" class="panel-title collapsed" data-toggle="collapse" data-bs-toggle="collapse" data-core="" href="#collapse3_0" aria-expanded="false" aria-controls="collapse3">
                                <h6 class="panel-title-edit mbr-fonts-style mb-0 display-7"><strong>Preferências</strong></h6>
                                <span class="sign mbr-iconfont mbri-arrow-down"></span>
                            </a>
                        </div>
                        <div id="collapse3_0" class="panel-collapse noScroll collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion" data-bs-parent="#bootstrap-accordion_0">
                            <div class="panel-body">
                                <p class="mbr-fonts-style panel-text display-4">
                                   Texto </p>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3">
                        <div class="card-header" role="tab" id="headingOne">
                            <a role="button" class="panel-title collapsed" data-toggle="collapse" data-bs-toggle="collapse" data-core="" href="#collapse4_0" aria-expanded="false" aria-controls="collapse4">
                                <h6 class="panel-title-edit mbr-fonts-style mb-0 display-7"><strong>Lista de desejos</strong></h6>
                                <span class="sign mbr-iconfont mbri-arrow-down"></span>
                            </a>
                        </div>
                        <div id="collapse4_0" class="panel-collapse noScroll collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion" data-bs-parent="#bootstrap-accordion_0">
                            <div class="panel-body">
                                <p class="mbr-fonts-style panel-text display-4">
                                    Texto</p>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>





<?PHP
#session_start();
if(isset($_SESSION['nome_usu_sessao']))
	{
		?>
            <br>
            <br>
        	Esta é uma área restrita. <a href="logout.php"><strong>Sair</strong></a>
        </div>

		<?PHP
	}
else
	{
		?>
        <div class="borda1 padding20">
        	<img src="imagens/lock.png" width="200">
            <br>
            <br>
        	Esta é uma área restrita, por favor, <a href="login.php"><strong>efetue login</strong></a>.
        </div>
		<?PHP
	}
?>

            </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="footer3 cid-taVDHtM2Nv mbr-reveal" once="footers" id="footer3-x">


    <div class="container">
        <div class="media-container-row align-center mbr-white">
            <div class="row row-links">
                <ul class="foot-menu">





                <li class="foot-menu-item mbr-fonts-style display-7">Entrar</li><li class="foot-menu-item mbr-fonts-style display-7">Cadastre-se</li><li class="foot-menu-item mbr-fonts-style display-7">Procedimentos</li></ul>
            </div>
            <div class="row social-row">
                <div class="social-list align-right pb-2">





                <div class="soc-item">
                        <a href="https://twitter.com/mobirise" target="_blank">
                            <span class="socicon-twitter socicon mbr-iconfont mbr-iconfont-social"></span>
                        </a>
                    </div><div class="soc-item">
                        <a href="https://www.facebook.com/pages/Mobirise/1616226671953247" target="_blank">
                            <span class="socicon-facebook socicon mbr-iconfont mbr-iconfont-social"></span>
                        </a>
                    </div><div class="soc-item">
                        <a href="https://www.youtube.com/c/mobirise" target="_blank">
                            <span class="socicon-youtube socicon mbr-iconfont mbr-iconfont-social"></span>
                        </a>
                    </div><div class="soc-item">
                        <a href="https://instagram.com/mobirise" target="_blank">
                            <span class="mbr-iconfont mbr-iconfont-social socicon-instagram socicon"></span>
                        </a>
                    </div></div>
            </div>
            <div class="row row-copirayt">
                <p class="mbr-text mb-0 mbr-fonts-style mbr-white align-center display-7">
                    © Copyright 2022 Sheila Picolo - Todos os direitos reservados.</p>
            </div>
        </div>
    </div>
</section><section class="display-7" style="padding: 0;align-items: center;justify-content: center;flex-wrap: wrap;    align-content: center;display: flex;position: relative;height: 4rem;"><a href="https://mobiri.se/337623" style="flex: 1 1;height: 4rem;position: absolute;width: 100%;z-index: 1;"><img alt="" style="height: 4rem;" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="></a><p style="margin: 0;text-align: center;" class="display-7">Made with Mobirise &#8204;</p><a style="z-index:1" href="https://mobirise.com/html-builder.html">HTML Creator</a></section><script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>  <script src="assets/smoothscroll/smooth-scroll.js"></script>  <script src="assets/ytplayer/index.js"></script>  <script src="assets/dropdown/js/navbar-dropdown.js"></script>  <script src="assets/theme/js/script.js"></script>  <script src="assets/formoid/formoid.min.js"></script>


 <div id="scrollToTop" class="scrollToTop mbr-arrow-up"><a style="text-align: center;"><i class="mbr-arrow-up-icon mbr-arrow-up-icon-cm cm-icon cm-icon-smallarrow-up"></i></a></div>
    <input name="animation" type="hidden">
  </body>
</html>
