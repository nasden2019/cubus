<?php
/*
Template Name: segurosCubus
*/
?>

<?php get_header('2'); ?>

<section class="seccionVioleta d-none d-md-block mx-0 px-md-0 pt-md-0 pt-0 pb-0 accordion md-accordion accordion-1"
    style="margin-top: 128px;" id="accordionEx123" role="tablist">
    <div class="container-fluid">
        <div class="row mx-0 px-0">
            <div class="col-12 col-md-12 px-0 text-center">
                <div class="row">
                    <div class="col-md-4 px-0 d-flex align-items-center justify-content-center">
                        <a class="btn violetBtn position-absolute my-auto boton" id="automotor" data-toggle="collapse"
                            href="#collapse19" aria-expanded="true" aria-controls="collapse196">
                            Automotor
                        </a>
                        <div class="d-flex justify-content-center align-items-center position-absolute">
                            <div class="text-white position-absolute" style="display: none;" id="automotorTexto">
                                <h2>Automotor</h2>
                                <p>RESP CIVIL</p>
                                <p>INCENDIO TOTAL Y/O PARCIAL</p>
                                <p>ROBO</p>
                                <p>DAÑOS TOTALES</p>
                                <p>CONSEJOS</p>
                                <p>ROBO</p>
                                <p>DAÑOS TOTALES</p>
                                <p>CONSEJOS</p>
                                <button class="botonSeguros">Contactar Asesor</button>
                            </div>
                        </div>
                        <!-- <img src="img/familiaDeskt.jpg" class="img-fluid imgPurple" alt="" id="automotorImg" /> -->
                        <img src="<?php echo bloginfo('template_url' ); ?>/img/cinturon.jpg" class="img-fluid imgPurple"
                            id="automotorImg" />

                    </div>


                    <!-- MODAL -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-label
                        ledby="exampleModalLabel " aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content modales">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel" style="margin-left: auto;">
                                        INSCRIBIRME
                                    </h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <div class="form-group">
                                            <label for="recipient-name"
                                                class="col-form-label ml-md-3 ml-2">Nombre</label>
                                            <input type="text" class="form-control" id="recipient-name" />
                                        </div>
                                        <div class="form-group">
                                            <label for="recipient-name"
                                                class="col-form-label ml-md-3 ml-2">Apellido</label>
                                            <input type="text" class="form-control" id="recipient-name" />
                                        </div>
                                        <div class="form-group">
                                            <label for="recipient-name"
                                                class="col-form-label ml-md-3 ml-2">E-Mail</label>
                                            <input type="text" class="form-control" id="recipient-name" />
                                        </div>
                                        <div class="form-group">
                                            <label for="recipient-name"
                                                class="col-form-label ml-md-3 ml-2">Teléfono</label>
                                            <input type="text" class="form-control" id="recipient-name" />
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- fin  primer div -->


                    <div class="col-md-4 px-0 d-flex align-items-center justify-content-center">
                        <a class="btn violetBtn position-absolute my-auto boton" id="familia" data-toggle="collapse"
                            href="#collapse19" aria-expanded="true" aria-controls="collapse1">
                            Familiar
                        </a>
                        <div class="d-flex justify-content-center align-items-center position-absolute">
                            <div class="text-white position-absolute" style="display: none;" id="familiaTexto">
                                <h2>Familiar</h2>
                                <p>RESP CIVIL</p>
                                <p>INCENDIO TOTAL Y/O PARCIAL</p>
                                <p>ROBO</p>
                                <p>DAÑOS TOTALES</p>
                                <p>CONSEJOS</p>
                                <p>ROBO</p>
                                <p>DAÑOS TOTALES</p>
                                
                                <button class="botonSeguros">Contactar Asesor</button>
                            </div>
                        </div>
                        <!-- <img src="img/familiaDeskt.jpg" class="img-fluid imgPurple" alt="" id="automotorImg" /> -->
                        <img src="<?php echo bloginfo('template_url' ); ?>/img/familiaDeskt.jpg"
                            class="img-fluid imgPurple" id="familiaImg" />
                    </div>

                    <!-- tercer -->
                     <div class="col-md-4 px-0 d-flex align-items-center justify-content-center">
                        <a class="btn violetBtn position-absolute my-auto boton" id="accidentes" data-toggle="collapse"
                            href="#collapse7" aria-expanded="true" aria-controls="collapse19">
                            Accidentes personales
                        </a>
                        <div class="d-flex justify-content-center align-items-center position-absolute">
                            <div class="text-white position-absolute" style="display: none;" id="accidentesTexto">
                                <h2>Familiar</h2>
                                <p>RESP CIVIL</p>
                                <p>INCENDIO TOTAL Y/O PARCIAL</p>
                                <p>ROBO</p>
                                <p>DAÑOS TOTALES</p>
                                <p>CONSEJOS</p>
                                <p>ROBO</p>
                                <p>DAÑOS TOTALES</p>
                                
                                <button class="botonSeguros">Contactar Asesor</button>
                            </div>
                        </div>
                        <img src="<?php echo bloginfo('template_url' ); ?>/img/eticaDeskt.jpg"
                            class="img-fluid imgPurple" id="accidentesImg" />
                    </div> 


                    <!-- cuarto-->
                    <div class="col-md-4 px-0 d-flex btn-efecto justify-content-center align-items-center">
                        <a class="btn violetBtn position-absolute my-auto" id="accidentes" data-toggle="collapse"
                            href="#collapse19" aria-expanded="true" aria-controls="collapse19">
                            Industria y comercio
                        </a>
                        <img src="img/pcDeskt.jpg" class="img-fluid imgPurple" alt="" />
                        <div class="px-0 d-flex justify-content-center align-items-center" id="heading198" rl="tab">
                        </div>
                    </div> 

                    <!-- <div class="col-md-4 px-0 d-flex btn-efecto justify-content-center align-items-center">
                                <a class="btn violetBtn position-absolute my-auto" id="Profesionalismo"
                                    data-toggle="collapse" href="#collapse198" aria-expanded="true"
                                    aria-controls="collapse198">
                                    Industria y comercio
                                </a>
                                <img src="img/pcDeskt.jpg" class="img-fluid imgPurple" alt="" />
                                <div class="px-0 d-flex justify-content-center align-items-center" id="heading198"
                                    rl="tab"></div>
                            </div>
                            <div class="col-md-4 px-0 d-flex btn-efecto justify-content-center align-items-center">
                                <a class="btn violetBtn position-absolute my-auto" id="Profesionalismo"
                                    data-toggle="collapse" href="#collapse198" aria-expanded="true"
                                    aria-controls="collapse198">
                                    Agro
                                </a>
                                <img src="img/pcDeskt.jpg" class="img-fluid imgPurple" alt="" />
                                <div class="px-0 d-flex justify-content-center align-items-center" id="heading198"
                                    rl="tab"></div>
                            </div>
                            <div class="col-md-4 px-0 d-flex btn-efecto justify-content-center align-items-center">
                                <a class="btn violetBtn position-absolute my-auto" id="Profesionalismo"
                                    data-toggle="collapse" href="#collapse198" aria-expanded="true"
                                    aria-controls="collapse198">
                                    Empleadores
                                </a>
                                <img src="img/pcDeskt.jpg" class="img-fluid imgPurple" alt="" />
                                <div class="px-0 d-flex justify-content-center align-items-center" id="heading198"
                                    rl="tab"></div>
                            </div> -->
                </div>



                <!-- accordion -->

                <div class="row px-0">
                    <div class="col-md-4 px-0 align-items-center justify-content-center holis">
                        <div id="collapse196" class="collapse" role="tabpanel" aria-labelledby="heading196"
                            data-parent="#accordionEx123">
                            <div class="d-flex justify-content-center align-items-center my-auto">
                                <p class="text-white position-absolute my-auto">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                    sed do eiusmod tempor incididunt ut labore et dolore magna
                                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                    ullamco laboris
                                </p>

                                <img src="img/familiaDeskt.jpg" alt="" style="width: 100%; height: 40vh;"
                                    class="overlay" />
                            </div>
                        </div>
                    </div>




                    <div class="col-md-4 px-0">
                        <div id="collapse197" class="collapse" role="tabpanel" aria-labelledby="heading197"
                            data-parent="#accordionEx123">
                            <div class="d-flex justify-content-center align-items-center my-auto">
                                <p class="text-white w-100 position-absolute">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                    sed do eiusmod tempor incididunt ut labore et dolore magna
                                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                    ullamco laboris
                                </p>

                                <img src="img/eticaDeskt.jpg" alt="" style="width: 100%; height: 40vh;"
                                    class="overlay" />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 px-0">
                        <div id="collapse198" class="collapse" role="tabpanel" aria-labelledby="heading198"
                            data-parent="#accordionEx123">
                            <div class="d-flex justify-content-center align-items-center my-auto">
                                <p class="w-100 position-absolute">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                    sed do eiusmod tempor incididunt ut labore et dolore magna
                                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                    ullamco laboris
                                </p>

                                <img src="img/chicaDeskIndex.jpg" alt="" style="width: 100%; height: 40vh;"
                                    class="overlay" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- imagen azul -->
<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 col-12">
                <div class="" style="background-image: url('img/cinturon.jpg');"></div>
                <!-- <img src="img/familiaDeskt.jpg" alt=""> -->
                <!-- <div class="" style="background-image: url('img/pcDeskt.jpg');"> -->
            </div>
        </div>
    </div>
</section>


<!-- JS SCRIPTS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
    integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
</script>


<script>
    $(document).ready(function () {
        $('.boton#automotor').click(function () {
            $('#automotorImg').addClass('overlay');
            $(this).hide();
            $('#automotorTexto').show();
        })
        $('.boton#familia').click(function () {
            $('#familiaImg').addClass('overlay');
            $(this).hide();
            $('#familiaTexto').show();
        })
        $('.boton#accidentes').click(function () {
            $('#accidentesImg').addClass('overlay');
            $(this).hide();
            $('#accidentesTexto').show();
        })
        // $('.boton#automotor').click(function () {
        //     $('#automotorImg').addClass('overlay');
        //     $(this).hide();
        //     $('#automotorTexto').show();
        // })
        // $('.boton#automotor').click(function () {
        //     $('#automotorImg').addClass('overlay');
        //     $(this).hide();
        //     $('#automotorTexto').show();
        // })
        // $('.boton#automotor').click(function () {
        //     $('#automotorImg').addClass('overlay');
        //     $(this).hide();
        //     $('#automotorTexto').show();
        // })
    })
    // function ok() {
    //     $(".btn-efecto").fadeToggle(1000, function () {});
    // }
</script>

<?php get_footer(); ?>
<?php get_footer('2'); ?>