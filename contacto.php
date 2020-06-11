<?php
/*
Template Name: contacto
*/
?>

<?php get_header('2'); ?>
<section class="formulario" style="margin-top: 90px; padding-top: 33px;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 col-12 mx-auto my-sm-5 text-center">
                <div class="row">
                    <div class="col-md-7 col-12 px-0 mb-4">
                        <div class="content-container  embed-container  maps">
                            <iframe style="pointer-events: none;"
                                src="https://www.google.com/maps/d/u/0/embed?mid=1whpmshyYMjxCRplNEZ4rmNsYFgTYHO7t"
                                class="barraGris" width="90%" height="763" frameborder="0" style="border: 0" ;></iframe>
                        </div>
                    </div>
                    <!-- formulario-->
                    <div class="col-md-4 col-12 formContacto" style="margin-top: 50px;">
                        <?php echo do_shortcode( '[contact-form-7 id="10" title="contacto cubus"]' ); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>