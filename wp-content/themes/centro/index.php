<?php $page = 'index'; ?>
<?php include('header.php'); ?>
<div class="wrapper index" id="index">
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* BANNER  */-->

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
                ?>
                <?php
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
                    <img class="banner-bg" src="<?php echo $banner['banner_img']; ?>" alt="">
                </div>
                <div class="container">
                    <div class="vertical-align text-center white">
                        <img class="logo" src="<?php echo $banner['banner_logo']; ?>" alt="CChCP">
                        <h1>
                            <?php echo $banner['banner_title']; ?>
                        </h1>
                        <h3>
                            <?php echo $banner['banner_text']; ?>
                        </h3>
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

    <!--/* CONOCENOS  */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="conocenos light-spacing" id="conocenos">
        <div class="container text-center">
            <h1 class="heading blue">
                <?php echo CFS() -> get('conocenos_title'); ?>
            </h1>
            <p class="text">
                <?php echo CFS() -> get('conocenos_text'); ?>
            </p>
            <div class="divider"></div>
        </div>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* PROGRAMAS INSTITUCIONALES  */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="programas" id="programas">
        <div class="parallax-container">
            <div class="parallax">
                <img src="<?php echo bloginfo('template_url').'/'; ?>img/parallax/1.jpg" alt="Parallax">
            </div>
            <div class="container text-center light-spacing">
                <h1 class="heading white">
                    <?php echo CFS() -> get('programas_title'); ?>
                </h1>
                <div class="row no-margin">
                    <?php
                    $arrayProgramas = CFS()->get('programas_institucionales_array');
                    $arrayEnd = end($arrayProgramas);
                    $counter = 0;
                    foreach($arrayProgramas as $programa)
                    {
                        if($counter < 3)
                        {
                    ?>
                    <div class="col-sm-4">
                        <a href="<?php echo $programa['programas_link']; ?>">
                            <img class="img-responsive center-block" src="<?php echo $programa['programas_logo']; ?>" alt="">
                        </a>
                    </div>
                    <?php
                            $counter++;
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* NUESTROS AFILIADOS  */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="afilia light-spacing" id="afiliados">
        <div class="container text-center">
            <div>
                <h1 class="heading red">
                    <?php echo CFS() -> get('afiliados_title'); ?>
                </h1>
            </div>
            <a href="afiliados">
                <h1 class="red top-note">
                    <?php echo CFS() -> get('afiliados_link_text'); ?>
                </h1>
            </a>
            <div id="carousel-afiliados" class="carousel slide" data-ride="carousel" data-interval="false">
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <?php
                    $arrayAfiliados = CFS()->get('afiliados_logos_array');
                    $arrayEnd = end($arrayAfiliados);
                    $counter = 0;
                    foreach($arrayAfiliados as $afiliado)
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
                        <img src="<?php echo $afiliado['afiliado_logo']; ?>" alt="" class="img-responsive center-block">
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

    <!--/* SERVICIOS  */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="servicios" id="servicios">
        <div class="parallax-container">
            <div class="parallax">
                <img src="<?php echo bloginfo('template_url').'/'; ?>img/parallax/2.jpg" alt="Parallax">
            </div>
            <div class="container light-spacing text-center">
                <h1 class="heading white">
                    <?php echo CFS() -> get('servicios_title'); ?>
                </h1>
                <div class="row no-margin">
                    <div class="col-sm-4"></div>
                    <div class="col-sm-4">
                        <a href="taller">
                            <div class="img-container">
                                <div class="vertical-align">
                                    <img src="<?php echo bloginfo('template_url').'/'; ?>img/servicios/1.png" alt="Servicio" class="img-responsive center-block">
                                    <img src="<?php echo bloginfo('template_url').'/'; ?>img/servicios/1_.png" alt="Servicio Hover" class="img-responsive center-block hover">
                                    <p class="white">TALLER EMPRESARIO A EMPRESARIO</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-4"></div>
                    <!--
<div class="col-sm-4">
<a href="">
<div class="img-container">
<div class="vertical-align">
<img src="<?php echo bloginfo('template_url').'/'; ?>img/servicios/2.png" alt="Servicio" class="img-responsive center-block">
<img src="<?php echo bloginfo('template_url').'/'; ?>img/servicios/2_.png" alt="Servicio Hover" class="img-responsive center-block hover">
<p class="white">CONSULTORÍAS</p>
</div>
</div>
</a>
</div>
<div class="col-sm-4">
<div class="img-container">
<div class="vertical-align">
<img src="<?php echo bloginfo('template_url').'/'; ?>img/servicios/3.png" alt="Servicio" class="img-responsive center-block">
<img src="<?php echo bloginfo('template_url').'/'; ?>img/servicios/3_.png" alt="Servicio Hover" class="img-responsive center-block hover">
<p class="white">DIPLOMADOS</p>
</div>
</div>
</div>
-->
                </div>
            </div>
        </div>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* BLOG */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="blog light-spacing" id="blog">
        <div class="container text-center">
            <h1 class="heading blue">
                <?php echo CFS() -> get('servicios_title'); ?>
            </h1>
            <div id="carousel-blog" class="carousel slide" data-ride="carousel" data-interval="false">
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <?php
                    $counter = 0;
                    if (have_posts())
                    {
                        the_post();
                    }
                    ?>									  
                    <?php
                    query_posts('showposts=6');
                    if (have_posts())
                    {
                        while (have_posts())
                        { 
                            the_post();
                            if($counter == 0)
                            {
                                echo '<div class="item active">';
                                echo '<div class="carousel-caption">';
                                echo '<div class="row no-margin">';
                            }
                            else if($counter%3 == 0)
                            {
                                echo '</div>';
                                echo '</div>';
                                echo '</div>';
                                echo '<div class="item">';
                                echo '<div class="carousel-caption">';
                                echo '<div class="row no-margin">';
                            }
                    ?>
                    <div class="col-sm-4">
                        <div class="img-container">
                            <img class="img-responsive center-block" src="<?php echo the_post_thumbnail_url(); ?>" alt="Post">
                        </div>
                        <p class="post-date">
                            <?php echo get_the_date('d-m-Y'); ?>
                        </p>
                        <h4 class="post-title blue">
                            <a href="<?php echo the_permalink();?>">
                                <?php echo get_the_title(); ?>
                            </a>
                        </h4>
                        <p class="post-excerpt blue">
                            <?php
                            if (strlen(get_the_content()) > 40)
                            {
                                echo substr(get_the_content(), 0, 40).' [...]';
                            }
                            else
                            {
                                echo get_the_content();
                            }
                            ?>
                        </p>
                    </div>
                    <?php
                            $counter++;
                        }
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                    }
                    wp_reset_query();
                    ?>
                </div>
                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-blog" role="button" data-slide="prev">
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-blog" role="button" data-slide="next">
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <a href="blog" class="link">Ver Más</a>
        </div>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* CONTACTO  */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="contacto light-spacing" id="contacto">
        <div class="container text-center">
            <h1 class="heading blue">
                <?php echo CFS() -> get('contacto_title'); ?>
            </h1>
            <div class="row no-margin blue contact-form">
                <div class="col-sm-7">
                    <?php echo do_shortcode('[contact-form-7 id="4" title="Formulario Index"]'); ?>
                </div>
                <div class="col-sm-5 text-left">
                    <div class="row no-margin">
                        <div class="col-sm-12 col-xs-7">
                            <p class="blue city">
                                <?php echo CFS() -> get('contacto_city'); ?>
                            </p>
                            <p class="blue">
                                <?php echo CFS() -> get('contacto_address'); ?>
                                <br/>
                                <br/>
                                <?php echo CFS() -> get('contacto_phone'); ?>
                                <br/>
                                <br/>
                                <a href="mailto:<?php echo CFS() -> get('contacto_email'); ?>"><?php echo CFS() -> get('contacto_email'); ?></a>
                            </p>
                        </div>
                        <div class="col-sm-12 col-xs-5">
                            <div class="text-center">
                                <a target="_blank" href="https://www.facebook.com/chihuahuacompetitividad/?fref=ts"><img src="<?php echo bloginfo('template_url').'/'; ?>img/icons/fb.png" alt="facebook"></a>
                                <a target="_blank" href="https://www.youtube.com/channel/UCawYNcpp9fAoQkA_fLEoczg"><img src="<?php echo bloginfo('template_url').'/'; ?>img/icons/yt.png" alt="Youtube"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* MAPA  */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="googleMap" id="googleMap" position="cchcp"></div>
</div>
<?php include('footer.php'); ?>