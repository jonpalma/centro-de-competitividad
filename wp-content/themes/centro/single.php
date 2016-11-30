<?php $page = 'detalle-noticia'; ?>
<?php include('header.php'); ?>
<div class="wrapper detalle-noticia" id="detalle-noticia">
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* NOTICIA */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="noticia" id="noticia">
        <div class="container spacing">
            <div class="col-sm-7">
                <div class="img-container">
                    <img src="<?php echo the_post_thumbnail_url(); ?>" alt="">
                </div>
            </div>
            <div class="col-sm-5">
                <h2>
                    <?php echo get_the_title(); ?>
                </h2>
                <p>
                    <?php
                    if(have_posts())
                    {
                        while(have_posts())
                        {
                            the_post();
                    ?>
                    <?php echo get_the_content(); ?>
                    <?php
                        }
                    }
                    ?>
                </p>
            </div>
            <div class="bottom">
                <p class="post-date">
                    <?php echo get_the_date('d-m-Y'); ?>
                </p>
                <p class="share-text">
                    Compartir:
                </p>
                <a target="_blank" href="http://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>&title=<?php the_title(); ?>">
                    <img src="<?php echo bloginfo('template_url').'/'; ?>img/cc-blog/icons/fb.png" alt="">
                </a>
            </div>
        </div>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* SUSCRIBETE */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="suscribete" id="suscribete">
        <div class="container light-spacing">
            <h3>
                Suscríbete a nuestro boletín
            </h3>
            <p>
                y recibe las mejores noticias
            </p>
            <div class="row no-margin contact-form">
                <?php echo do_shortcode('[contact-form-7 id="120" title="Forma Suscribirse Single"]'); ?>
            </div>
        </div>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* RELACIONADAS */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="relacionadas" id="relacionadas">
        <div class="container light-spacing">
            <div id="carousel-relacionadas" class="carousel slide" data-ride="carousel" data-interval="false">
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <?php
                    $counter = 0;
                    query_posts('cat='.$categoryID.'&orderby=rand');
                    while (have_posts()) : the_post();
                    if($the_post_name != get_the_title() && $counter != 6)
                    {
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
                                <?php
                        if (strlen($post->post_title) > 20)
                        { 
                            echo substr(the_title($before = '', $after = '', FALSE), 0, 20) . ' [...]'; 
                        }
                        else
                        {
                            the_title();
                        }
                                ?>
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
                    endwhile;
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                    ?>
                </div>
                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-relacionadas" role="button" data-slide="prev">
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-relacionadas" role="button" data-slide="next">
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/**********************************/-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
</div>
<?php include('footer.php'); ?>