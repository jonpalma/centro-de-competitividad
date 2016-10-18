<?php $page = 'foro'; ?>
<?php include('header.php'); ?>
<div class="wrapper foro" id="foro">
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* BANNER  */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <section class="banner" id="banner">
        <div id="carousel" class="carousel slide" data-ride="carousel" data-interval="false">
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <div class="img-container">
                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/cc-foro/banner/bg2.jpg" alt="Banner">
                    </div>
                    <div class="container">
                        <div class="title">
                            <p>
                                TRABAJAMOS EN EQUIPO Y OBTENEMOS LOGROS EXTRAORDINARIOS.
                            </p>
                        </div>
                        <div class="logo-img-container">
                            <img src="<?php echo bloginfo('template_url').'/'; ?>img/cc-foro/banner/logo.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* CONOCE  */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <section class="conoce" id="conoce">
        <div class="container spacing">
            <div class="col-sm-6 conoce-title">
                <p>CONOCE EL FORO ESTATAL DE TRABAJO EN EQUIPO</p>
            </div>
            <div class="col-sm-6 video-side">
                <a href="#video-modal-conoce" data-toggle="modal" data-target="#video-modal-conoce">
                    <div class="image-container">
                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/cc-foro/videos/conoce.jpg" alt="">
                    </div>
                </a>
            </div>
        </div>
    </section>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* CONOCE-PARALLAX  */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <section class="conoce-parallax parallax-container" id="conoce-parallax">
        <div class="parallax">
            <img src="<?php echo bloginfo('template_url').'/'; ?>img/cc-foro/parallax/par1.jpg" alt="Parallax">
        </div>
        <div class="container spacing">
            <div>
                <p>CONVOCATORIA FORO ESTATAL DE TRABAJO EN EQUIPO 2017, ¡PARTICIPA!</p>
            </div>
            <div>
                <a href="">DESCARGA FORMULARIO</a>
            </div>
        </div>
    </section>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* PROYECTOS  */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <section class="proyectos" id="proyectos">
        <div class="container spacing">
            <p class="title">PROYECTOS GANADORES<br>DEL XX FORO ESTATAL DE TRABAJO EN EQUIPO</p>
            <div class="row">
                <div class="col-sm-6">
                    <a href="#video-modal-proyecto1" data-toggle="modal" data-target="#video-modal-proyecto1">
                        <div class="img-container img-left-side">
                            <img src="<?php echo bloginfo('template_url').'/'; ?>img/cc-foro/proyectos/proyecto1.jpg" alt="">
                        </div>
                    </a>
                    <div class="desc text-left-side">
                        <p>
                            Así se vivió el XX Foro Estatal de Trabajo en Equipo.
                        </p>
                    </div>
                </div>
                <div class="col-sm-6">
                    <a href="#video-modal-proyecto2" data-toggle="modal" data-target="#video-modal-proyecto2">
                        <div class="img-container img-right-side">
                            <img src="<?php echo bloginfo('template_url').'/'; ?>img/cc-foro/proyectos/proyecto2.jpg" alt="">
                        </div>
                    </a>
                    <div class="desc text-right-side">
                        <p>
                            Conoce la experiencia de FIH Mexico Industry.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <a href="#video-modal-proyecto3" data-toggle="modal" data-target="#video-modal-proyecto3">
                        <div class="img-container img-left-side">
                            <img src="<?php echo bloginfo('template_url').'/'; ?>img/cc-foro/proyectos/proyecto3.jpg" alt="">
                        </div>
                    </a>
                    <div class="desc text-left-side">
                        <p>
                            Conoce la experiencia de Grupo Cementos de Chihuahua.
                        </p>
                    </div>
                </div>
                <div class="col-sm-6">
                    <a href="#video-modal-proyecto4" data-toggle="modal" data-target="#video-modal-proyecto4">
                        <div class="img-container img-right-side">
                            <img src="<?php echo bloginfo('template_url').'/'; ?>img/cc-foro/proyectos/proyecto4.jpg" alt="">
                        </div>
                    </a>
                    <div class="desc text-right-side">
                        <p>
                            Conoce la experiencia de CONMED.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* HISTORIAS  */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <section class="historias-parallax parallax-container" id="historias-parallax">
        <div class="parallax">
            <img src="<?php echo bloginfo('template_url').'/'; ?>img/cc-foro/parallax/par2.jpg" alt="Parallax">
        </div>
        <div class="container spacing">
            <div class="col-sm-6 left-side">
                <p>HISTORIAS EXITOSAS</p>
            </div>
            <div class="col-sm-6 right-side">
                <a href="">DESCARGA PDF</a>
            </div>
        </div>
    </section>

    <!-- Register Modal -->
    <div class="modal fade video" id="video-modal-proyecto1" role="dialog" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/A0yuHRnkEWU" frameborder="0" allowfullscreen></iframe>
                    <button type="button" data-dismiss="modal" aria-label="Close">Cerrar Video</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade video" id="video-modal-proyecto2" role="dialog" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/MTg09T2xSzE" frameborder="0" allowfullscreen></iframe>
                    <button type="button" data-dismiss="modal" aria-label="Close">Cerrar Video</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade video" id="video-modal-proyecto3" role="dialog" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/DPXY80E_vew" frameborder="0" allowfullscreen></iframe>
                    <button type="button" data-dismiss="modal" aria-label="Close">Cerrar Video</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade video" id="video-modal-proyecto4" role="dialog" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/KCDx928MVDA" frameborder="0" allowfullscreen></iframe>
                    <button type="button" data-dismiss="modal" aria-label="Close">Cerrar Video</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade video" id="video-modal-conoce" role="dialog" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/COxU2mFJ7N8" frameborder="0" allowfullscreen></iframe>
                    <button type="button" data-dismiss="modal" aria-label="Close">Cerrar Video</button>
                </div>
            </div>
        </div>
    </div>

</div>
<?php include('footer.php'); ?>