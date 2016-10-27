<?php $page = 'educa'; ?>
<?php include('header.php'); ?>
<div class="wrapper educa" id="educa">
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* BANNER */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="banner" id="banner">
        <div id="carousel-educa-banner" class="carousel slide" data-ride="carousel" data-interval="false">
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
            <a class="left carousel-control" href="#carousel-educa-banner" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-educa-banner" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* INFORMACION */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="informacion" id="informacion">
        <div class="container light-spacing">
            <p>
                <?php echo CFS()-> get('informacion_text'); ?>
            </p>
        </div>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* PROGRAMA */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="programa" id="programa">
        <div class="container light-spacing">
            <h1>
                <?php echo CFS()-> get('programa_title'); ?>
            </h1>
            <p>
                <?php echo CFS()-> get('programa_text'); ?>
            </p>
        </div>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* CONOCE */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="conoce" id="conoce">
        <div class="container light-spacing">
            <h1>
                <?php echo CFS()-> get('conoce_title'); ?>
            </h1>
            <?php
            $arrayVideos = CFS()->get('conoce_videos_array');
            $arrayEnd = end($arrayVideos);
            $counter = 0;
            foreach($arrayVideos as $video)
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
                <img src="<?php echo $video['video_img']; ?>" alt="">
                <?php
                echo '</div>';
                echo '</a>';
                ?>
                <p>
                    <?php echo $video['video_text']; ?>
                </p>
                <?php
                echo '<div class="modal fade video" id="video-modal-proyecto'.$counter.'" role="dialog" tabindex="-1">';
                ?>
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body">
                            <iframe width="560" height="315" src="<?php echo $video['video_url']; ?>" frameborder="0" allowfullscreen></iframe>
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

    <!--/* BENEFICIOS */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="beneficios" id="beneficios">
        <div class="container light-spacing">
            <h1>
                <?php echo CFS()-> get('beneficios_title'); ?>
            </h1>
            <ul type="disk">
                <?php echo CFS()-> get('beneficios_text'); ?>
            </ul>
        </div>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* COMO */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="como" id="como">
        <div class="container light-spacing">
            <h1>
                <?php echo CFS()-> get('como_title'); ?>
            </h1>
            <ul>
                <?php echo CFS()-> get('como_text'); ?>
            </ul>
        </div>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/**********************************/-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
</div>
<?php include('footer.php'); ?>