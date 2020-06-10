<?php
/*
Template Name: contacto
*/
?>

<?php get_header('2'); ?>
<section class="formulario" style="margin-top: 130px; padding-top: 65px;">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 col-12 mx-auto my-sm-5 text-center">
                        <div class="row">
                            <div class="col-md-7 col-12 px-0 mb-4">
                                <div class="">
                                <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1whpmshyYMjxCRplNEZ4rmNsYFgTYHO7t" width="90%" height="690"></iframe>
                                    <!-- <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13393.206063450687!2d-60.65802!3d-32.943048!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x91a29ca796372019!2sCubus%20Broker%20de%20Seguros!5e0!3m2!1sen!2sar!4v1591112958654!5m2!1sen!2sar"
                                        width="90%" height="500" frameborder="0" style="border:0;" allowfullscreen=""
                                        aria-hidden="false" tabindex="0"> -->
                                    <!-- <img src="img/logo.jpg" alt=""> -->
                                <!-- </iframe> -->
                                </div>
                            </div>
                            <!-- formulario-->
                            <div class="col-md-4 col-12 d-flex justify-content-center" style="margin-top: -25px;">
                            <?php echo do_shortcode( '[contact-form-7 id="10" title="contacto cubus"]' ); ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php get_footer(); ?>