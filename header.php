<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CChCP</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
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
                    <a class="navbar-brand smoothScroll" href="<?php if($page != 'index') { echo 'index.php'; }?>#index"><img src="img/navbar/logo.png" alt=""></a>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav pull-right">
                        <li class="active"><a class="vertical-align smoothScroll" href="<?php if($page != 'index') { echo 'index.php'; }?>#index">Inicio</a></li>
                        <li><a class="vertical-align smoothScroll" href="<?php if($page != 'index') { echo 'index.php'; }?>#conocenos">Conócenos</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle vertical-align" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Programas Institucionales <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                               <li><a href="<?php if($page != 'index') { echo 'index.php'; }?>#programas" class="smoothScroll">Programas Institucionales</a></li>
                                <li><a href="<?php if($page != 'foro') { echo 'cc-foro.php'; }?>#">Foro</a></li>
                                <li><a href="<?php if($page != 'foro') { echo 'cc-premio.php'; }?>#">Premio</a></li>
                            </ul>
                        </li>
                        <li><a class="vertical-align smoothScroll" href="<?php if($page != 'index') { echo 'index.php'; }?>#afiliados">Afiliaciones</a></li>
                        <li><a class="vertical-align smoothScroll" href="<?php if($page != 'index') { echo 'index.php'; }?>#servicios">Servicios</a></li>
                        <li><a class="vertical-align smoothScroll" href="<?php if($page != 'index') { echo 'index.php'; }?>#blog">Blog</a></li>
                        <li><a class="vertical-align smoothScroll" href="<?php if($page != 'index') { echo 'index.php'; }?>#">Preguntas Frecuentes</a></li>
                        <li><a class="vertical-align smoothScroll email-icon" href="<?php if($page != 'index') { echo 'index.php'; }?>#contacto">Contacto</a></li>

                    </ul>
                </div>
            </div>
        </nav>