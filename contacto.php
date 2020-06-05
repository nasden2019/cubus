<?php
/*
Template Name: contacto
*/
?>

<?php get_header('2'); ?>
<section class="formulario" style="margin-top: 140px; padding-top: 65px;">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 col-12 mx-auto my-sm-5 text-center">
                        <div class="row">
                            <div class="col-md-7 col-12 px-0">
                                <div class="">
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13393.206063450687!2d-60.65802!3d-32.943048!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x91a29ca796372019!2sCubus%20Broker%20de%20Seguros!5e0!3m2!1sen!2sar!4v1591112958654!5m2!1sen!2sar"
                                        width="90%" height="500" frameborder="0" style="border:0;" allowfullscreen=""
                                        aria-hidden="false" tabindex="0"></iframe>
                                </div>
                            </div>
                            <!-- formulario-->
                            <div class="col-md-4 col-12" style="margin-top: -25px;">
                            <?php echo do_shortcode( '[contact-form-7 id="10" title="contacto cubus"]' ); ?>

                                <!-- <form action="#" method="post">
                                    <div class="row ">
                                        <div class="col-md-11 form-group">
                                            <label for="name" class="sr-only"></label>
                                            <input type="text" id="name" class="form-control"
                                                placeholder="Nombre y Apellido" />
                                        </div>
                                    </div>
                                    <div class="row ">
                                        <div class="col-md-11 form-group">
                                            <label for="phone" class="sr-only"></label>
                                            <input type="text" id="phone" class="form-control" placeholder="Email" />
                                        </div>
                                    </div>
                                    <div class="row ">
                                        <div class="col-md-11 form-group">
                                            <label for="name" class="sr-only"></label>
                                            <input type="text" id="name" class="form-control" placeholder="Tel." />
                                        </div>
                                    </div>
                                    <div class="row ">
                                        <div class="col-md-11 form-group">
                                            <label for="name" class="sr-only"></label>
                                            <input type="text" id="name" class="form-control" placeholder="Localidad" />
                                        </div>
                                    </div>
                                    <div class="row ">
                                        <div class="col-md-11 form-group">
                                            <textarea name="message" id="mensaje" class="form-control" cols="14"
                                                rows="4" placeholder="En qué te podemos ayudar?"></textarea>
                                        </div>
                                    </div>
                                    <div class="mt-1 ml-md-5">
                                        <button type="submit" class="btn verdeBtnContacto btnHover" id="demo"
                                            value="send">
                                            <a class="text-white">Ver mas</a>
                                        </button>
                                    </div>
                                </form> -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php get_footer(); ?>