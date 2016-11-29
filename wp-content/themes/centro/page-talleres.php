<?php $page = 'talleres'; ?>
<?php include('header.php'); ?>
<div class="wrapper talleres" id="talleres">
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* BANNER */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="banner" id="banner">
        <div class="bg-container">
            <img src="<?php echo CFS() -> get('banner_img'); ?>" alt="">
        </div>
        <div class="container">
            <div class="img-container">
                <img src="<?php echo CFS() -> get('banner_logo'); ?>" alt="">
            </div>
            <h1>
                <?php echo CFS() -> get('banner_title'); ?>
            </h1>
        </div>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* NOSOTROS */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="nosotros" id="nosotros">
        <div class="container spacing">
            <h1>
                <?php echo CFS() -> get('nosotros_title'); ?>
            </h1>
            <p>
                <?php echo CFS() -> get('nosotros_text'); ?>
            </p>
        </div>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* COMO */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="como" id="como">
        <div class="bg-container">
            <img src="<?php echo bloginfo('template_url').'/'; ?>img/cc-talleres/nosotros/bg.jpg" alt="">
        </div>
        <div class="container spacing">
            <h1>
                <?php echo CFS() -> get('como_title'); ?>
            </h1>
            <ul type='disk'>
                <?php echo CFS() -> get('como_text'); ?>
            </ul>
        </div>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* CONFERENCIAS */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="conferencias" id="conferencias">
        <div class="container">
            <h1>
                <?php echo CFS() -> get('conferencias_title'); ?>
            </h1>
            <div class="row no-margin nav nav-tabs" role="tablist">
                <div class="col-sm-1"></div>
                <div role="presentation" class="col-sm-2 active">
                    <a href="#logo1" aria-controls="logo1" role="tab" data-toggle="tab">
                        <div class="img-container">
                            <img src="<?php echo bloginfo('template_url').'/'; ?>img/cc-talleres/conferencias/1.png" alt="">
                        </div>
                        <h3>
                           <?php echo CFS() -> get('planeacion_title'); ?>
                        </h3>
                    </a>
                </div>
                <div role="presentation" class="col-sm-2">
                    <a href="#logo2" aria-controls="logo2" role="tab" data-toggle="tab">
                        <div class="img-container">
                            <img src="<?php echo bloginfo('template_url').'/'; ?>img/cc-talleres/conferencias/2.png" alt="">
                        </div>
                        <h3>
                           <?php echo CFS() -> get('administracion_title'); ?>
                        </h3>
                    </a>
                </div>
                <div role="presentation" class="col-sm-2">
                    <a href="#logo3" aria-controls="logo3" role="tab" data-toggle="tab">
                        <div class="img-container">
                            <img src="<?php echo bloginfo('template_url').'/'; ?>img/cc-talleres/conferencias/3.png" alt="">
                        </div>
                        <h3>
                           <?php echo CFS() -> get('innovacion_title'); ?>
                        </h3>
                    </a>
                </div>
                <div role="presentation" class="col-sm-2">
                    <a href="#logo4" aria-controls="logo4" role="tab" data-toggle="tab">
                        <div class="img-container">
                            <img src="<?php echo bloginfo('template_url').'/'; ?>img/cc-talleres/conferencias/4.png" alt="">
                        </div>
                        <h3>
                           <?php echo CFS() -> get('cultura_title'); ?>
                        </h3>
                    </a>
                </div>
                <div role="presentation" class="col-sm-2">
                    <a href="#logo5" aria-controls="logo5" role="tab" data-toggle="tab">
                        <div class="img-container">
                            <img src="<?php echo bloginfo('template_url').'/'; ?>img/cc-talleres/conferencias/5.png" alt="">
                        </div>
                        <h3>
                           <?php echo CFS() -> get('estrategia_title'); ?>
                        </h3>
                    </a>
                </div>
                <div class="col-sm-1"></div>
            </div>
        </div>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* CONFERENCIASINFO */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="conferenciasinfo" id="conferenciasinfo">
        <div class="bg-container">
            <img src="<?php echo bloginfo('template_url').'/'; ?>img/cc-talleres/cultura/bg.jpg" alt="">
        </div>
        <div class="container light-spacing">
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active" id="logo1">
                    <h1>
                        <?php echo CFS() -> get('planeacion_title'); ?>
                    </h1>
                    <p>
                        <?php echo CFS() -> get('planeacion_text'); ?>
                    </p>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="logo2">
                    <h1>
                        <?php echo CFS() -> get('administracion_title'); ?>
                    </h1>
                    <p>
                        <?php echo CFS() -> get('administracion_text'); ?>
                    </p>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="logo3">
                    <h1>
                        <?php echo CFS() -> get('innovacion_title'); ?>
                    </h1>
                    <p>
                        <?php echo CFS() -> get('innovacion_text'); ?>
                    </p>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="logo4">
                    <h1>
                        <?php echo CFS() -> get('cultura_title'); ?>
                    </h1>
                    <p>
                        <?php echo CFS() -> get('cultura_text'); ?>
                    </p>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="logo5">
                    <h1>
                        <?php echo CFS() -> get('estrategia_title'); ?>
                    </h1>
                    <p>
                        <?php echo CFS() -> get('estrategia_text'); ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('footer.php'); ?>