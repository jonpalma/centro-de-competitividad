<?php $page = 'afiliados'; ?>
<?php include('header.php'); ?>
<div class="wrapper afiliados" id="afiliados">
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* BANNER */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="banner" id="banner">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="false">
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

    <!--/* DESCRIPCION */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="descripcion spacing">
        <div>
            <p>
                <?php echo CFS() -> get('descripcion_text'); ?>
            </p>
        </div>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* BENEFICIOS */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="beneficios light-spacing">
        <div class="container">
            <h1>
                <?php echo CFS() -> get('beneficios_title'); ?>
            </h1>
            <div id="carousel-afiliados" class="carousel slide" data-ride="carousel" data-interval="false">
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <?php
                    $arrayBeneficios = CFS()->get('beneficios_array');
                    $arrayEnd = end($arrayBeneficios);
                    $counter = 0;
                    foreach($arrayBeneficios as $beneficio)
                    {
                        if($counter == 0)
                        {
                            echo '<div class="item active">';
                            echo '<div class="row no-margin">';
                        }
                        else if($counter%3 == 0)
                        {
                            echo '</div>';
                            echo '</div>';
                            echo '<div class="item">';
                            echo '<div class="row no-margin">';
                        }
                    ?>
                    <div class="col-sm-4">
                        <img src="<?php echo $beneficio['beneficio_img']; ?>" alt="">
                        <p>
                            <?php echo $beneficio['beneficio_text']; ?>
                        </p>
                    </div>
                    <?php
                        $counter++;
                    }
                    echo '</div>';
                    echo '</div>';
                    ?>
                </div>
                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-afiliados" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-afiliados" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* AFILIADOS */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="afilia spacing">
        <div class="container">
            <div id="carousel-afiliados-afilia" class="carousel slide" data-ride="carousel" data-interval="false">
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <?php
                    $arrayLogos = CFS()->get('logos_array');
                    $arrayEnd = end($arrayLogos);
                    $counter = 0;
                    foreach($arrayLogos as $logo)
                    {
                    ?>
                    <?php
                        if($counter == 0)
                        {
                            echo '<div class="item active">';
                            echo '<div class="row no-margin">';
                        }
                        else if($counter%4 == 0)
                        {
                            echo '</div>';
                            echo '</div>';
                            echo '<div class="item">';
                            echo '<div class="row no-margin">';
                        }
                    ?>
                    <div class="col-sm-3">
                        <img src="<?php echo $logo['afiliado_logo']; ?>" alt="" class="img-responsive center-block">
                    </div>
                    <?php
                        $counter++;
                    }
                    echo '</div>';
                    echo '</div>';
                    ?>
                </div>
                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-afiliados-afilia" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-afiliados-afilia" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* FORMULARIO */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="formulario spacing">
        <div class="img-container">
            <img src="<?php echo bloginfo('template_url').'/'; ?>img/cc-afiliados/formulario/bg.jpg" alt="">
        </div>
        <div class="container vertical-align">
            <h1>
                <?php echo CFS() -> get('formulario_title'); ?>
            </h1>
            <a href="#modal-afiliados" data-toggle="modal" data-target="#modal-afiliados">
                <?php echo CFS() -> get('formulario_link_text'); ?>
            </a>
        </div>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* MODAL-FORMULARIO-AFILIADOS */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="modal fade" tabindex="-1" role="dialog" id="modal-afiliados">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h2>
                        <?php echo CFS() -> get('modal_formulario_title'); ?>
                    </h2>
                    <p>
                        <?php echo CFS() -> get('modal_formulario_text'); ?>
                    </p>
                    <?php echo do_shortcode('[contact-form-7 id="94" title="Formulario Afiliado"]'); ?>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
    <!-- this div is close in the [contact-form-7] -->
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* END */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
</div>
<?php include('footer.php'); ?>