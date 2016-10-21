<?php $page = 'foro'; ?>
<?php include('header.php'); ?>
<div class="wrapper foro" id="foro">
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* BANNER  */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="banner" id="banner">
        <div id="carousel" class="carousel slide" data-ride="carousel" data-interval="false">
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
                    <img src="<?php echo $banner['banner_img']; ?>" alt="Banner">
                </div>
                <div class="container">
                    <div class="title">
                        <p>
                            <?php echo $banner['banner_title']; ?>
                        </p>
                    </div>
                    <div class="logo-img-container">
                        <img src="<?php echo $banner['banner_logo']; ?>" alt="">
                    </div>
                </div>
                <?php
                    $counter++;
                    echo '</div>';
                }
                ?>
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
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* CONOCE  */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="conoce" id="conoce">
        <div class="modal fade video" id="video-modal-conoce" role="dialog" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <iframe width="560" height="315" src="<?php echo CFS() -> get('conoce_link_video'); ?>" frameborder="0" allowfullscreen></iframe>
                        <button type="button" data-dismiss="modal" aria-label="Close">Cerrar Video</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container spacing">
            <div class="col-sm-6 conoce-title">
                <p>
                    <?php echo CFS() -> get('conoce_title'); ?>
                </p>
            </div>
            <div class="col-sm-6 video-side">
                <a href="#video-modal-conoce" data-toggle="modal" data-target="#video-modal-conoce">
                    <div class="image-container">
                        <img src="<?php echo CFS() -> get('conoce_img_video'); ?>" alt="">
                    </div>
                </a>
            </div>
        </div>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* CONOCE-PARALLAX  */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="conoce-parallax parallax-container" id="conoce-parallax">
        <div class="parallax">
            <img src="<?php echo bloginfo('template_url').'/'; ?>img/cc-foro/parallax/par1.jpg" alt="Parallax">
        </div>
        <div class="container spacing">
            <div>
                <p>
                    <?php echo CFS() -> get('convocatoria_title'); ?>
                </p>
            </div>
            <div>
                <a target="_blank" href="<?php echo CFS() -> get('convocatoria_archive'); ?>">
                    <?php echo CFS() -> get('convocatoria_formulario_title'); ?>
                </a>
            </div>
        </div>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* PROYECTOS  */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="proyectos" id="proyectos">
        <div class="container spacing">
            <p class="title">
                <?php echo CFS() -> get('proyectos_title'); ?>
            </p>
            <?php
            $arrayProyectos = CFS()->get('proyectos_videos_array');
            $arrayEnd = end($arrayProyectos);
            $counter = 0;
            foreach($arrayProyectos as $proyecto)
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
                echo '<a href="#video-modal-proyecto'.$counter.'" data-toggle="modal" data-target="#video-modal-proyecto'.$counter.'">';
                if($counter%2 == 0)
                {
                    echo '<div class="img-container">';
                }
                else
                {
                    echo '<div class="img-container">';
                }
                ?>
                <img src="<?php echo $proyecto['proyecto_img_video']; ?>" alt="">
                <?php
                echo '</div>';
                echo '</a>';
                ?>
                <p>
                    <?php echo $proyecto['proyecto_desc']; ?>
                </p>
                <?php
                echo '<div class="modal fade video" id="video-modal-proyecto'.$counter.'" role="dialog" tabindex="-1">';
                ?>
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body">
                            <iframe width="560" height="315" src="<?php echo $proyecto['proyecto_link_video']; ?>" frameborder="0" allowfullscreen></iframe>
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

    <!--/* HISTORIAS  */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="historias-parallax parallax-container" id="historias-parallax">
        <div class="parallax">
            <img src="<?php echo bloginfo('template_url').'/'; ?>img/cc-foro/parallax/par2.jpg" alt="Parallax">
        </div>
        <div class="container spacing">
            <div class="col-sm-6 left-side">
                <p>
                    <?php echo CFS() -> get('historias_title'); ?>
                </p>
            </div>
            <div class="col-sm-6 right-side">
                <a target="_blank" href="<?php echo CFS() -> get('historias_archive'); ?>">
                    <?php echo CFS() -> get('historias_download_title'); ?>
                </a>
            </div>
        </div>
    </div>
</div>
<?php include('footer.php'); ?>