<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="El Centro de Competitividad Chihuahua fue fundado a principios de los 90´s como Centro Chihuahuense para la Calidad y Productividad , una institución dedicada a fortalecer la competitividad en el estado a través del desarrollo empresarial y la calidad educativa.">
        <meta name="keywords" content="centro,competitividad,chihuahua,innovacion,calidad,competitividad,foro,estatal,educa,premio,evaluacion,afiliados,empresariado,fechac,empresas,excelencia,satisfaccion,liderazgo,calidad,alianzas">
        <meta name="author" content="Mixen">
        <link rel="shortcut icon" type="img/png" href="<?php echo bloginfo('template_url').'/'; ?>img/favicon.ico"/>
        <link rel="stylesheet" href="<?php echo bloginfo('template_url').'/'; ?>css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
        <?php wp_head(); ?>
        <title>CChCP</title>
        <script type="text/javascript">
            setTimeout(function(){var a=document.createElement("script");
                                  var b=document.getElementsByTagName("script")[0];
                                  a.src=document.location.protocol+"//script.crazyegg.com/pages/scripts/0020/7404.js?"+Math.floor(new Date().getTime()/3600000);
                                  a.async=true;a.type="text/javascript";b.parentNode.insertBefore(a,b)}, 1);
        </script>
    </head>
    <body>
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
                                    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
            ga('create', 'UA-88357628-1', 'auto');
            ga('send', 'pageview');
        </script>
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="top-logo">
            </div>
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand smoothScroll" href="<?php if($page != 'index') { echo 'index'; }?>#index"><img src="<?php echo bloginfo('template_url').'/'; ?>img/navbar/logo.png" alt=""></a>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav pull-right">
                        <li class="active"><a class="vertical-align smoothScroll" href="<?php if($page != 'index') { echo 'index'; }?>#index">Inicio</a></li>
                        <li><a class="vertical-align smoothScroll" href="<?php if($page != 'index') { echo 'index'; }?>#conocenos">Conócenos</a></li>
                        <li class="dropdown">
                            <a href="" class="dropdown-toggle vertical-align" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Programas Institucionales <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="foro">Foro</a></li>
                                <li><a href="premio">Premio</a></li>
                                <li><a href="educa">EDUCA</a></li>
                            </ul>
                        </li>
                        <li><a class="vertical-align smoothScroll" href="<?php if($page != 'index') { echo 'index'; }?>#afiliados">Afiliaciones</a></li>
                        <li><a class="vertical-align smoothScroll" href="<?php if($page != 'index') { echo 'index'; }?>#servicios">Servicios</a></li>
                        <li><a class="vertical-align smoothScroll" href="<?php if($page != 'index') { echo 'index'; }?>#blog">Blog</a></li>
                        <!--
<li><a class="vertical-align smoothScroll" href="<?php if($page != 'index') { echo 'index'; }?>#">Preguntas Frecuentes</a></li>
-->
                        <li><a class="vertical-align smoothScroll email-icon" href="<?php if($page != 'index') { echo 'index'; }?>#contacto">Contacto</a></li>

                    </ul>
                </div>
            </div>
        </nav>