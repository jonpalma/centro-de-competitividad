<?php $page = 'premio'; ?>
<?php include('header.php'); ?>
<div class="wrapper premio" id="premio">
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* BANNER */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="banner" id="banner">
        <div id="carousel-premio-banner" class="carousel slide" data-ride="carousel" data-interval="false">
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <?php
                $arrayBanner = CFS()->get('banner_array');
                $arrayEnd = end($arrayBanner);
                $counter = 0;
                foreach($arrayBanner as $banner)
                {
                    if($counter == 0)
                    {
                        echo '<div class="item active">';
                    }
                    else
                    {
                        echo '<div class="item">';
                    }
                ?>
                <div class="img-container">
                    <img class="banner-bg" src="<?php echo $banner['banner_img']; ?>" alt="Banner">
                </div>
                <div class="container">
                    <div class="vertical-align text-center white">
                        <img class="logo" src="<?php echo $banner['banner_logo']; ?>" alt="">
                        <h1>
                            <?php echo $banner['banner_title']; ?>
                        </h1>
                    </div>
                </div>
                <?php
                    $counter++;
                    echo '</div>';
                }
                ?>
            </div>
            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-premio-banner" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-premio-banner" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* DESCRIPCION */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="descripcion spacing">
        <div>
            <h1>
                <?php echo CFS() -> get('que_title'); ?>
            </h1>
            <p>
                <?php echo CFS() -> get('que_desc'); ?>
            </p>
        </div>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* BENEFICIOS */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="beneficios">
        <div class="img-container vertical-align hidden-xs">
            <img src="<?php echo bloginfo('template_url').'/'; ?>img/cc-premio/beneficios/bg.jpg" alt="">
        </div>
        <div class="container light-spacing">
            <div class="col-sm-4"></div>
            <div class="col-sm-8">
                <h1>
                    <?php echo CFS() -> get('beneficios_title'); ?>
                </h1>
                <ul type='disk'>
                    <?php echo CFS() -> get('beneficios_desc'); ?>
                </ul>
            </div>
        </div>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* EMPRESAS */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="empresas">
        <div class="container spacing">
            <div class="title">
                <h1>
                    <?php echo CFS() -> get('ganadores_title'); ?>
                </h1>
            </div>
            <?php
            $arrayGanadores = CFS()->get('ganadores_videos_array');
            $arrayEnd = end($arrayGanadores);
            $counter = 0;
            foreach($arrayGanadores as $ganador)
            {
            ?>
            <?php
                if($counter == 0)
                {
                    echo '<div class="row">';
                }
                else if($counter%2 == 0)
                {
                    echo '</div>';
                    echo '<div class="row">';
                }
            ?>
            <div class="col-sm-6">
                <?php
                echo '<a href="#video-modal-ganador'.$counter.'" data-toggle="modal" data-target="#video-modal-ganador'.$counter.'">';
                if($counter%2 == 0)
                {
                    echo '<div class="img-container img-left-side">';
                }
                else
                {
                    echo '<div class="img-container img-right-side">';
                }
                ?>
                <img src="<?php echo $ganador['ganador_img_video']; ?>" alt="">
                <?php
                echo '</div>';
                echo '</a>';
                if($counter%2 == 0)
                {
                    echo '<div class="desc text-left-side">';
                }
                else
                {
                    echo '<div class="desc text-right-side">';
                }
                ?>
                <p>
                    <?php echo $ganador['ganador_desc']; ?>
                </p>
                <?php
                echo '</div>';
                echo '<div class="modal fade video" id="video-modal-ganador'.$counter.'" role="dialog" tabindex="-1">';
                ?>
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body">
                            <iframe width="560" height="315" src="<?php echo $ganador['ganador_link_video']; ?>" frameborder="0" allowfullscreen></iframe>
                            <button type="button" data-dismiss="modal" aria-label="Close">Cerrar Video</button>
                        </div>
                    </div>
                </div>
                <?php
                echo '</div>';
                ?>
            </div>
            <?php
                $counter++;
            }
            echo '</div>';
            ?>
        </div>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* MODELO */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="modelo">
        <div class="img-container">
            <img src="<?php echo bloginfo('template_url').'/'; ?>img/cc-premio/modelo/bg.jpg" alt="">
        </div>
        <div class="container light-spacing panel-group" id="premioGroup-1" role="tablist" aria-multiselectable="true">
            <h1>
                <?php echo CFS() -> get('modelo_title'); ?>
            </h1>
            <p class="text">
                <?php echo CFS() -> get('modelo_desc'); ?>
            </p>
            <?php
            $arrayModelo = CFS()->get('modelo_array');
            $arrayEnd = end($arrayModelo);
            $counter = 0;
            foreach($arrayModelo as $punto)
            {
            ?>
            <?php
                if($counter == 0)
                {
                    echo '<a data-toggle="collapse" data-parent="#premioGroup-1" href="#collapse-'.$counter.'"
                        aria-expanded="true" aria-controls="collapse-'.$counter.'">';
                }
                else
                {
                    echo '<a class="collapsed" data-toggle="collapse" data-parent="#premioGroup-1" href="#collapse-'.$counter.'"
                        aria-expanded="false" aria-controls="collapse-'.$counter.'">';
                }
            ?>
            <div class="col-sm-6 panel panel-default">
                <div class="col-sm-3">
                    <img src="<?php echo $punto['modelo_punto_img']; ?>" alt="">
                </div>
                <div class="col-sm-9">
                    <h3>
                        <?php echo $punto['modelo_punto_title']; ?>
                    </h3>
                    <?php
                if($counter == 0)
                {
                    echo '<div id="collapse-'.$counter.'" class="panel-collapse collapse in" 
                                role="tabpanel" aria-labelledby="heading-'.$counter.'">';
                }
                else
                {
                    echo '<div id="collapse-'.$counter.'" class="panel-collapse collapse" 
                             role="tabpanel" aria-labelledby="heading-'.$counter.'">';
                }

                    ?>
                    <p>
                        <?php echo $punto['modelo_punto_desc']; ?>
                    </p>
                    <?php
                echo '</div>';
                    ?>
                </div>
            </div>
            <?php
                echo '</a>';
                $counter++;
            }
            ?>
        </div>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* DETALLES */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="detalles">
        <div class="container spacing">
            <div class="col-sm-4">
                <a href="evaluacion#proceso">
                    <div class="img-container top-logo">
                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/cc-premio/icons/list.png" alt="">
                    </div>
                    <div class="middle">
                        <p>
                            PROCESO DE EVALUACIÓN
                        </p>
                    </div>
                    <div class="img-container bottom-logo">
                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/cc-premio/icons/mas.png" alt="">
                    </div>
                </a>
            </div>
            <div class="col-sm-4">
                <a href="evaluacion#reconocimiento">
                    <div class="img-container top-logo">
                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/cc-premio/icons/prize.png" alt="">
                    </div>
                    <div class="middle">
                        <p>
                            RECONOCIMIENTO A LOS GANADORES
                        </p>
                    </div>
                    <div class="img-container bottom-logo">
                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/cc-premio/icons/mas.png" alt="">
                    </div>
                </a>
            </div>
            <div class="col-sm-4">
                <a href="evaluacion#que-es">
                    <div class="img-container top-logo">
                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/cc-premio/icons/group.png" alt="">
                    </div>
                    <div class="middle">
                        <p>
                            ¿POR QUÉ SER PARTE DEL EQUIPO DE EVALUADORES?
                        </p>
                    </div>
                    <div class="img-container bottom-logo">
                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/cc-premio/icons/mas.png" alt="">
                    </div>
                </a>
            </div>
        </div>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* BASES */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="bases">
        <div class="img-container">
            <img src="<?php echo bloginfo('template_url').'/'; ?>img/cc-premio/bases/bg.jpg" alt="">
        </div>
        <div class="container spacing">
            <a href="">
                <?php echo CFS() -> get('convocatoria_title'); ?>
            </a>
        </div>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* CONOCE */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="conoce spacing">
        <div class="container vertical-align">
            <h1>
                <?php echo CFS() -> get('conoce_title'); ?>
            </h1>
            <a href="">
                <?php echo CFS() -> get('conoce_pdf_title'); ?>
            </a>
        </div>
    </div>
</div>
<?php include('footer.php'); ?>