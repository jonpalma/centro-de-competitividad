<?php include('header.php'); ?>
<div class="wrapper foro">
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* BANNER  */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <section class="banner" id="banner">
        <div class="container">
            <div class="carousel-inner" role="listbox">
                <!-- Items -->
                <div class="item active">
                    <div>
                        <p>TRABAJAMOS EN EQUIPO Y<br/>OBTENEMOS LOGROS EXTRAORDINARIOS.</p>
                    </div> 
                </div>
                <div class="item">
                    <div>
                        <p>TRABAJAMOS EN EQUIPO Y<br/>OBTENEMOS LOGROS EXTRAORDINARIOS.</p>
                    </div>
                </div>
            </div>
            <div class="indicators">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel" data-slide-to="1"></li>
                    <li data-target="#carousel" data-slide-to="2"></li>
                </ol>
            </div>
            <div class="banner-logo">
                <img src="img/cc-foro/banner/logo.png" alt="">
            </div>
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
                <a href="#video-modal-main" data-toggle="modal" data-target="#video-modal-main">
                    <div class="image-container">
                        <img src="img/cc-foro/videos/video-conoce.png" alt="">
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
            <img src="img/cc-foro/parallax/par1.jpg" alt="Parallax">
        </div>
        <div class="container spacing">
            <div>
                <p>CONOCE LAS BASES PARA PARTICIPAR</p>
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
            <p>PROYECTOS GANADORES<br>DEL XX FORO ESTATAL DE TRABAJO EN EQUIPO</p>
            <div class="row">
                <div class="col-sm-6">
                    <a href="#video-modal-main" data-toggle="modal" data-target="#video-modal-main">
                        <div class="img-container left-side">
                            <img src="img/cc-foro/proyectos/video1.png" alt="">
                        </div>
                    </a>
                </div>
                <div class="col-sm-6">
                    <a href="#video-modal-main" data-toggle="modal" data-target="#video-modal-main">
                        <div class="img-container right-side">
                            <img src="img/cc-foro/proyectos/video2.png" alt="">
                        </div>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <a href="#video-modal-main" data-toggle="modal" data-target="#video-modal-main">
                        <div class="img-container left-side">
                            <img src="img/cc-foro/proyectos/video3.png" alt="">
                        </div>
                    </a>
                </div>
                <div class="col-sm-6">
                    <a href="#video-modal-main" data-toggle="modal" data-target="#video-modal-main">
                        <div class="img-container right-side">
                            <img src="img/cc-foro/proyectos/video4.png" alt="">
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* HISTORIAS  */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <section class="historias-parallax parallax-container" id="historias-parallax">
        <div class="parallax">
            <img src="img/cc-foro/parallax/par2.jpg" alt="Parallax">
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
    <div class="modal fade video" id="video-modal-main" role="dialog" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/2YBtspm8j8M" frameborder="0" allowfullscreen></iframe>
                    <button type="button" data-dismiss="modal" aria-label="Close">Cerrar Video</button>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('footer.php'); ?>