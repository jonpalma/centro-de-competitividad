<?php $page = 'evaluacion'; ?>
<?php include('header.php'); ?>
<div class="wrapper evaluacion" id="evaluacion">
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* PROCESO */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="proceso spacing" id="proceso">
        <div class="container">
            <h1>
                PROCESO DE EVALUACIÓN
            </h1>
            <div class="logos">
                <div class="row no-margin nav nav-tabs" role="tablist">
                    <div role="presentation" class="col-7 col-sm-3 active">
                        <a href="#logo1" aria-controls="logo1" role="tab" data-toggle="tab">
                            <div class="img-container">
                                <img src="<?php echo bloginfo('template_url').'/'; ?>img/cc-evaluacion/icon/icon1.png" alt="">
                            </div>
                        </a>
                        <div class="hidden-lg hidden-sm hidden-md">
                            <h3>
                                <?php echo CFS() -> get('registro_title'); ?>
                            </h3>
                            <p>
                                <?php echo CFS() -> get('registro_text'); ?>
                            </p>
                        </div>
                    </div>
                    <div role="presentation" class="col-7 col-sm-3">
                        <a href="#logo2" aria-controls="logo2" role="tab" data-toggle="tab">
                            <div class="img-container">
                                <img src="<?php echo bloginfo('template_url').'/'; ?>img/cc-evaluacion/icon/icon2.png" alt="">
                            </div>
                        </a>
                        <div class="hidden-lg hidden-sm hidden-md">
                            <h3>
                                <?php echo CFS() -> get('capacitacion_title'); ?>
                            </h3>
                            <p>
                                <?php echo CFS() -> get('capacitacion_text	'); ?>
                            </p>
                        </div>
                    </div>
                    <div role="presentation" class="col-7 col-sm-3">
                        <a href="#logo3" aria-controls="logo3" role="tab" data-toggle="tab">
                            <div class="img-container">
                                <img src="<?php echo bloginfo('template_url').'/'; ?>img/cc-evaluacion/icon/icon3.png" alt="">
                            </div>
                        </a>
                        <div class="hidden-lg hidden-sm hidden-md">
                            <h3>
                                <?php echo CFS() -> get('reporte_ejecutivo_title'); ?>
                            </h3>
                            <p>
                                <?php echo CFS() -> get('reporte_ejecutivo_text'); ?>
                            </p>
                        </div>
                    </div>
                    <div role="presentation" class="col-7 col-sm-3">
                        <a href="#logo4" aria-controls="logo4" role="tab" data-toggle="tab">
                            <div class="img-container">
                                <img src="<?php echo bloginfo('template_url').'/'; ?>img/cc-evaluacion/icon/icon4.png" alt="">
                            </div>
                        </a>
                        <div class="hidden-lg hidden-sm hidden-md">
                            <h3>
                                <?php echo CFS() -> get('reporte_sistemas_title'); ?>
                            </h3>
                            <p>
                                <?php echo CFS() -> get('reporte_sistemas_text'); ?>
                            </p>
                        </div>
                    </div>
                    <div class="clearfix hidden-lg hidden-md"></div>
                    <div class="hidden-lg hidden-md col-7 hidden-xs"></div>
                    <div role="presentation" class="col-7 col-sm-3">
                        <a href="#logo5" aria-controls="logo5" role="tab" data-toggle="tab">
                            <div class="img-container">
                                <img src="<?php echo bloginfo('template_url').'/'; ?>img/cc-evaluacion/icon/icon5.png" alt="">
                            </div>
                        </a>
                        <div class="hidden-lg hidden-sm hidden-md">
                            <h3>
                                <?php echo CFS() -> get('evaluacion_title'); ?>
                            </h3>
                            <p>
                                <?php echo CFS() -> get('evaluacion_text'); ?>
                            </p>
                        </div>
                    </div>
                    <div role="presentation" class="col-7 col-sm-3">
                        <a href="#logo6" aria-controls="logo6" role="tab" data-toggle="tab">
                            <div class="img-container">
                                <img src="<?php echo bloginfo('template_url').'/'; ?>img/cc-evaluacion/icon/icon6.png" alt="">
                            </div>
                        </a>
                        <div class="hidden-lg hidden-sm hidden-md">
                            <h3>
                                <?php echo CFS() -> get('premiacion_title'); ?>
                            </h3>
                            <p>
                                <?php echo CFS() -> get('premiacion_text'); ?>
                            </p>
                        </div>
                    </div>
                    <div role="presentation" class="col-7 col-sm-3">
                        <a href="#logo7" aria-controls="logo7" role="tab" data-toggle="tab">
                            <div class="img-container">
                                <img src="<?php echo bloginfo('template_url').'/'; ?>img/cc-evaluacion/icon/icon7.png" alt="">
                            </div>
                        </a>
                        <div class="hidden-lg hidden-sm hidden-md">
                            <h3>
                                <?php echo CFS() -> get('retroalimentacion_title'); ?>
                            </h3>
                            <p>
                                <?php echo CFS() -> get('retroalimentacion_text'); ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text tab-content hidden-xs">
                <div role="tabpanel" class="tab-pane fade in active" id="logo1">
                    <h3>
                        <?php echo CFS() -> get('registro_title'); ?>
                    </h3>
                    <p>
                        <?php echo CFS() -> get('registro_text'); ?>
                    </p>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="logo2">
                    <h3>
                        <?php echo CFS() -> get('capacitacion_title'); ?>
                    </h3>
                    <p>
                        <?php echo CFS() -> get('capacitacion_text	'); ?>
                    </p>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="logo3">
                    <h3>
                        <?php echo CFS() -> get('reporte_ejecutivo_title'); ?>
                    </h3>
                    <p>
                        <?php echo CFS() -> get('reporte_ejecutivo_text'); ?>
                    </p>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="logo4">
                    <h3>
                        <?php echo CFS() -> get('reporte_sistemas_title'); ?>
                    </h3>
                    <p>
                        <?php echo CFS() -> get('reporte_sistemas_text'); ?>
                    </p>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="logo5">
                    <h3>
                        <?php echo CFS() -> get('evaluacion_title'); ?>
                    </h3>
                    <p>
                        <?php echo CFS() -> get('evaluacion_text'); ?>
                    </p>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="logo6">
                    <h3>
                        <?php echo CFS() -> get('premiacion_title'); ?>
                    </h3>
                    <p>
                        <?php echo CFS() -> get('premiacion_text'); ?>
                    </p>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="logo7">
                    <h3>
                        <?php echo CFS() -> get('retroalimentacion_title'); ?>
                    </h3>
                    <p>
                        <?php echo CFS() -> get('retroalimentacion_text'); ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* RECONOCIMIENTO */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="reconocimiento spacing" id="reconocimiento">
        <div class="bg-container">
            <img src="<?php echo bloginfo('template_url').'/'; ?>img/cc-evaluacion/reconocimiento/bg.jpg" alt="">
        </div>
        <div class="container">
            <h1>
                <?php echo CFS() -> get('reconocimiento_title'); ?>
            </h1>
            <div class="row">
                <div class="col-sm-4">
                    <div class="img-container">
                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/cc-evaluacion/icon/prize.png" alt="">
                    </div>
                    <h3>
                        <?php echo CFS() -> get('premio_competitividad_title'); ?>
                    </h3>
                    <p>
                        <?php echo CFS() -> get('premio_competitividad_text'); ?>
                    </p>
                </div>
                <div class="col-sm-4">
                    <div class="img-container">
                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/cc-evaluacion/icon/prize.png" alt="">
                    </div>
                    <h3>
                        <?php echo CFS() -> get('premio_mejoramiento_title'); ?>
                    </h3>
                    <p>
                        <?php echo CFS() -> get('premio_mejoramiento_text'); ?>
                    </p>
                </div>
                <div class="col-sm-4">
                    <div class="img-container">
                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/cc-evaluacion/icon/prize.png" alt="">
                    </div>
                    <h3>
                        <?php echo CFS() -> get('premio_compromiso_title'); ?>
                    </h3>
                    <p>
                        <?php echo CFS() -> get('premio_compromiso_text'); ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* QUE-ES */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="que-es spacing" id="que-es">
        <div class="container">
            <h1>
                <?php echo CFS() -> get('evaluador_title'); ?>
            </h1>
            <div class="text">
                <p>
                    <?php echo CFS() -> get('evaluador_desc'); ?>
                </p>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="img-container">
                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/cc-evaluacion/icon/book1.png" alt="">
                    </div>
                    <h3>
                        <?php echo CFS() -> get('evaluador_junior_title'); ?>
                    </h3>
                    <p>
                        <?php echo CFS() -> get('evaluador_junior_text'); ?>
                    </p>
                </div>
                <div class="col-sm-4">
                    <div class="img-container">
                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/cc-evaluacion/icon/book2.png" alt="">
                    </div>
                    <h3>
                        <?php echo CFS() -> get('evaluador_senior_title'); ?>
                    </h3>
                    <p>
                        <?php echo CFS() -> get('evaluador_senior_text'); ?>
                    </p>
                </div>
                <div class="col-sm-4">
                    <div class="img-container">
                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/cc-evaluacion/icon/book3.png" alt="">
                    </div>
                    <h3>
                        <?php echo CFS() -> get('experto_title'); ?>
                    </h3>
                    <p>
                        <?php echo CFS() -> get('experto_text'); ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* FORMA */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="forma spacing" id="forma">
        <div class="bg-container">
            <img src="<?php echo bloginfo('template_url').'/'; ?>img/cc-evaluacion/forma/bg.jpg" alt="">
        </div>
        <div class="container">
            <div class="title">
                <h1>
                    <?php echo CFS() -> get('requisitos_title'); ?>
                </h1>
            </div>
            <div class="col-xs-6">
                <p>
                    <span>Requisitos:</span><br/>
                    <?php echo CFS() -> get('requisitos_desc'); ?>
                </p>
                <div class="form-container">
                    <form action="" method="POST" id="contact-form">
                       <?php echo do_shortcode('[contact-form-7 id="92" title="Formulario Evaluador"]'); ?>
                       <!--
                        <input type="text" name="name" id="name" placeholder="Nombre">
                        <input type="email" name="email" id="email" placeholder="Correo Electrónico">
                        <input type="phone" name="phone" id="phone" placeholder="Teléfono">
                        <div class="text-right">
                            <input type="submit" value="ENVIAR" id="form-submit">
                        </div>
                        -->
                    </form>
                </div>
            </div>
            <div class="col-xs-6"></div>
        </div>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* FOOTER */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
</div>
<?php include('footer.php'); ?>