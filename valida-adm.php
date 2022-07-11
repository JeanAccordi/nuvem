<?PHP
include('config.php');
include('menu.php');
# Validar os dados do usuário

function anti_sql_injection($string)
	{
		include('config.php');
		$string = stripslashes($string);
		$string = strip_tags($string);
		$string = mysqli_real_escape_string($conexao,$string);
		return $string;
	}

$sql = mysqli_query($conexao,"select * from usuarios_adm where email_usu='".anti_sql_injection($_POST['email_usu'])."' and senha_usu='".anti_sql_injection($_POST['senha_usu'])."' limit 1") or die("Erro ao validar");
$linhas = mysqli_num_rows($sql);
if($linhas == '')
	{
		?>
         <div class="msg2 padding20">Usuário não encontrado ou senha inválida, tente novamente.</div>
                <script type="text/javascript">
                setTimeout("window.location='acesso_adm.html';",2000);
                </script>
        <?PHP
	}
else
	{
		while($dados=mysqli_fetch_assoc($sql))
			{
				session_start();
				$_SESSION['id_usu_sessao'] = $dados['id_usu'];
        $_SESSION['nome_usu_sessao'] = $dados['nome_usu'];
        $_SESSION['email_usu_sessao'] = $dados['email_usu'];
        $_SESSION['senha_usu_sessao'] = $dados['senha_usu'];
		$_SESSION['nome_portal_sessao'] = $dados['nome_portal'];
				header("Location: conteudo-adm.php");
			}
	}
?>

<!DOCTYPE html>
<html  >
<head>
  <!-- Site made with Mobirise Website Builder v5.6.11, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v5.6.11, mobirise.com">
  <meta name="twitter:card" content="summary_large_image"/>
  <meta name="twitter:image:src" content="">
  <meta property="og:image" content="">
  <meta name="twitter:title" content="Home">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/logo-icon-2.png" type="image/x-icon">
  <meta name="description" content="">


  <title>Administração Millenium</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons2/mobirise2.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/parallax/jarallax.css">
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

   <section data-bs-version="5.1" class="menu menu3 cid-sFAA5oUu2Y" once="menu" id="menu3-1">

    <nav class="navbar navbar-dropdown navbar-fixed-top navbar-expand-lg">
        <div class="container">
            <div class="navbar-brand">

                <span class="navbar-caption-wrap"><a class="navbar-caption text-warning text-primary display-5" href="index.html">PortalMillenium</a></span>
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
                    <li class="nav-item dropdown"><a class="nav-link link dropdown-toggle text-white display-7" href="index.html#content4-5" data-toggle="dropdown-submenu" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">Lojas</a><div class="dropdown-menu" aria-labelledby="dropdown-994"><a class="dropdown-item text-white display-7" href="index.html#content4-5">Loja 1</a><a class="dropdown-item text-white display-7" href="index.html#content4-5">Loja 2</a></div></li>
                    <li class="nav-item dropdown"><a class="nav-link link text-white text-primary display-7" href="index.html#features6-3">Destaques</a></li>
                  </ul>
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
            
            </div>
 <!--
 <div class="navbar-buttons mbr-section-btn"><a class="btn btn-warning display-4" href="entrar.html">Entrar</a></div>
 -->
            </div>
        </div>
    </nav>
</section>

            </div>
        </div>
    </div>
</section>


<section data-bs-version="5.1" class="footer3 cid-s48P1Icc8J" once="footers" id="footer3-i">





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
</section><section class="display-7" style="padding: 0;align-items: center;justify-content: center;flex-wrap: wrap;    align-content: center;display: flex;position: relative;height: 4rem;"><a href="https://mobiri.se/" style="flex: 1 1;height: 4rem;position: absolute;width: 100%;z-index: 1;"><img alt="" style="height: 4rem;" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="></a><p style="margin: 0;text-align: center;" class="display-7">Criado por Jean Acordi &#8204;</p><a style="z-index:1" href="https://mobirise.com/offline-website-builder.html">Criador de estrutura offline</a></section><script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>  <script src="assets/smoothscroll/smooth-scroll.js"></script>  <script src="assets/ytplayer/index.js"></script>  <script src="assets/theme/js/script.js"></script>


</body>
</html>
