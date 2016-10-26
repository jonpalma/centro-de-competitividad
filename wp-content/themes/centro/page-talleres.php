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
        <div class="container spacing">
            <h1>
                <?php echo CFS() -> get('conferencias_title'); ?>
            </h1>
            <div class="col-sm-1"></div>
            <div class="col-sm-2">
                <div class="img-container">
                    <img src="<?php echo bloginfo('template_url').'/'; ?>img/cc-talleres/conferencias/1.png" alt="">
                </div>
                <h3>
                    PLANEACIÓN ESTRATÉGICA
                </h3>
            </div>
            <div class="col-sm-2">
                <div class="img-container">
                    <img src="<?php echo bloginfo('template_url').'/'; ?>img/cc-talleres/conferencias/2.png" alt="">
                </div>
                <h3>
                    ADMINISTRACIÓN ESBELTA
                </h3>
            </div>
            <div class="col-sm-2">
                <div class="img-container">
                    <img src="<?php echo bloginfo('template_url').'/'; ?>img/cc-talleres/conferencias/3.png" alt="">
                </div>
                <h3>
                    INNOVACIÓN Y COMPETITIVIDAD
                </h3>
            </div>
            <div class="col-sm-2">
                <div class="img-container">
                    <img src="<?php echo bloginfo('template_url').'/'; ?>img/cc-talleres/conferencias/4.png" alt="">
                </div>
                <h3>
                    CULTURA ORGANIZACIONAL
                </h3>
            </div>
            <div class="col-sm-2">
                <div class="img-container">
                    <img src="<?php echo bloginfo('template_url').'/'; ?>img/cc-talleres/conferencias/5.png" alt="">
                </div>
                <h3>
                    ESTRATEGIA COMERCIAL
                </h3>
            </div>
            <div class="col-sm-1"></div>
        </div>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* CULTURA */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="cultura" id="cultura">
       <div class="bg-container">
            <img src="<?php echo bloginfo('template_url').'/'; ?>img/cc-talleres/cultura/bg.jpg" alt="">
        </div>
        <div class="container spacing">
            <h1>
                <?php echo CFS() -> get('cultura_title'); ?>
            </h1>
            <p>
                <?php echo CFS() -> get('cultura_text'); ?>
            </p>
        </div>
    </div>
</div>
<?php include('footer.php'); ?>