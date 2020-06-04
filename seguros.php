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
                        <div class="d-flex justify-content-center align-items-center position-absolute"
                            style="z-index: 20000;">
                            <div class="text-white position-absolute" style="display: none;" id="automotorTexto">
                                <h2 class="mb-md-4">Automotor</h2>
                                <div class="mb-md-2">RESP CIVIL</div>
                                <div class="mb-md-2">INCENDIO TOTAL Y/O PARCIAL</div>
                                <div class="mb-md-2">ROBO</div>
                                <div class="mb-md-2">DAÑOS TOTALES</div>
                                <div class="mb-md-2">CONSEJOS</div>
                                <div class="mb-md-2">ROBO</div>
                                <div class="mb-md-2">DAÑOS TOTALES</div>
                                <div class="mb-md-4">CONSEJOS</div>

                                <!-- BOTON MODAL -->
                                <button type="button" class="botonSeguros" data-toggle="modal"
                                    data-target="#exampleModal" style="z-index: 200000!important;">Contactar
                                    asesor</button>

                                <!-- MODAL -->
                                <div class="modal fade" id="exampleModal" style="margin-top: 7%;">
                                    <div class="modal-dialog">
                                        <div class="modal-content modales">
                                            <div class="modal-header mx-auto">
                                                <h2 class="">AUTOMOTORES</h2>
                                                <!-- <h5 class="modal-title">AUTOMOTOR</h5> -->
                                                <button class="close" data-dismiss="modal">
                                                    <span>&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" placeholder="MARCA" />
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" />
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" />
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" />
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" />
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" />
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer d-flex justify-content-center mt-md-3">
                                                <button class="segurosBtn">Enviar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <img src="<?php echo bloginfo('template_url' ); ?>/img/cinturon.jpg" class="img-fluid imgPurple"
                            id="automotorImg" />
                    </div>


                    <!-- segundo-->
                    <div class="col-md-4 px-0 d-flex align-items-center justify-content-center">
                        <a class="btn violetBtn position-absolute my-auto boton" id="familia" data-toggle="collapse"
                            href="#collapse19" aria-expanded="true" aria-controls="collapse1">
                            Familia
                        </a>
                        <div class="d-flex justify-content-center align-items-center position-absolute"
                            style="z-index: 20000;">
                            <div class="text-white position-absolute" style="display: none;" id="familiaTexto">
                                <h2 class="mb-md-4">Familia</h2>
                                <div class="mb-md-2">RESP CIVIL</div>
                                <div class="mb-md-2">INCENDIO TOTAL Y/O PARCIAL</div>
                                <div class="mb-md-2">ROBO</div>
                                <div class="mb-md-2">DAÑOS TOTALES</div>
                                <div class="mb-md-2">CONSEJOS</div>
                                <div class="mb-md-2">ROBO</div>
                                <div class="mb-md-2">DAÑOS TOTALES</div>
                                <div class="mb-md-4">CONSEJOS</div>

                                <!--LOS MODALES TIENEN QUE TENER DIFERENTES ID'S!!! -->
                                <button type="button" class="botonSeguros" data-toggle="modal2"
                                    data-target="#exampleModal2" style="z-index: 200000!important;">Contactar
                                    asesor</button>

                                <div class="modal2 fade" id="exampleModal2" style="margin-top: 7%;">
                                    <div class="modal-dialog">
                                        <div class="modal-content modales">
                                            <div class="modal-header mx-auto">
                                                <h2 class="">FAMILIA</h2>
                                                <!-- <h5 class="modal-title">AUTOMOTOR</h5> -->
                                                <button class="close" data-dismiss="modal">
                                                    <span>&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" placeholder="MARCA" />
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" />
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" />
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" />
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" />
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" />
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer d-flex justify-content-center mt-md-3">
                                                <button class="segurosBtn">Enviar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <img src="<?php echo bloginfo('template_url' ); ?>/img/familiaDeskt.jpg" class="img-fluid imgPurple"
                            id="familiaImg" />
                    </div>


                    <!-- tercero -->
                    <div class="col-md-4 px-0 d-flex align-items-center justify-content-center">
                        <a class="btn violetBtn position-absolute my-auto boton" id="accidentes" data-toggle="collapse"
                            href="#collapse19" aria-expanded="true" aria-controls="collapse1">
                            Accidentes
                        </a>
                        <div class="d-flex justify-content-center align-items-center position-absolute"
                            style="z-index: 20000;">
                            <div class="text-white position-absolute" style="display: none;" id="accidentesTexto">
                                <h2 class="mb-md-4">Accidentes</h2>
                                <div class="mb-md-2">RESP CIVIL</div>
                                <div class="mb-md-2">INCENDIO TOTAL Y/O PARCIAL</div>
                                <div class="mb-md-2">ROBO</div>
                                <div class="mb-md-2">DAÑOS TOTALES</div>
                                <div class="mb-md-2">CONSEJOS</div>
                                <div class="mb-md-2">ROBO</div>
                                <div class="mb-md-2">DAÑOS TOTALES</div>
                                <div class="mb-md-4">CONSEJOS</div>

                                <button type="button" class="botonSeguros" data-toggle="modal3"
                                    data-target="#exampleModal3" style="z-index: 200000!important;">Contactar
                                    asesor</button>

                                <div class="modal3 fade" id="exampleModal3" style="margin-top: 7%;">
                                    <div class="modal-dialog">
                                        <div class="modal-content modales">
                                            <div class="modal-header mx-auto">
                                                <h2 class="">FAMILIA</h2>
                                                <!-- <h5 class="modal-title">AUTOMOTOR</h5> -->
                                                <button class="close" data-dismiss="modal">
                                                    <span>&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" placeholder="MARCA" />
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" />
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" />
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" />
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" />
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" />
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer d-flex justify-content-center mt-md-3">
                                                <button class="segurosBtn">Enviar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <img src="<?php echo bloginfo('template_url' ); ?>/img/familiaDeskt.jpg" class="img-fluid imgPurple"
                            id="accidentesImg" />
                    </div>

                    <!-- <div class="col-md-4 px-0 d-flex align-items-center justify-content-center">
                        <a class="btn violetBtn position-absolute my-auto boton" id="accidentes" data-toggle="collapse"
                            href="#collapse7" aria-expanded="true" aria-controls="collapse19">
                            Accidentes personales
                        </a>
                        <div class="d-flex justify-content-center align-items-center position-absolute">
                            <div class="text-white position-absolute" style="display: none;" id="accidentesTexto">
                                <h2>Accidentes personales</h2>
                                <p>RESP CIVIL</p>
                                <p>INCENDIO TOTAL Y/O PARCIAL</p>
                                <p>ROBO</p>
                                <p>DAÑOS TOTALES</p>
                                <p>CONSEJOS</p>
                                <p>ROBO</p>
                                <p>DAÑOS TOTALES</p>
                                <p>ROBO</p>
                                <button class="botonSeguros">Contactar Asesor</button>
                            </div>
                        </div>
                        <img src="?php echo bloginfo('template_url' ); ?>/img/eticaDeskt.jpg"
                            class="img-fluid imgPurple" id="accidentesImg" />
                    </div> -->


                    <!-- cuarto-->
                    <div class="col-md-4 px-0 d-flex align-items-center justify-content-center">
                        <a class="btn violetBtn position-absolute my-auto boton" id="industria" data-toggle="collapse"
                            href="#collapse7" aria-expanded="true" aria-controls="collapse19">
                            Industria y comercio
                        </a>
                        <div class="d-flex justify-content-center align-items-center position-absolute">
                            <div class="text-white position-absolute" style="display: none;" id="industriaTexto">
                                <h2>Industria y comercio</h2>
                                <p>RESP CIVIL</p>
                                <p>INCENDIO TOTAL Y/O PARCIAL</p>
                                <p>ROBO</p>
                                <p>DAÑOS TOTALES</p>
                                <p>CONSEJOS</p>
                                <p>ROBO</p>
                                <p>DAÑOS TOTALES</p>
                                <p>ROBO</p>
                                <button class="botonSeguros">Contactar Asesor</button>
                            </div>
                        </div>
                        <img src="<?php echo bloginfo('template_url' ); ?>/img/camiones.jpg" class="img-fluid imgPurple"
                            id="industriaImg" />
                    </div>

                    <!-- quinto-->
                    <div class="col-md-4 px-0 d-flex align-items-center justify-content-center">
                        <a class="btn violetBtn position-absolute my-auto boton" id="agro" data-toggle="collapse"
                            href="#collapse7" aria-expanded="true" aria-controls="collapse">
                            Agro
                        </a>
                        <div class="d-flex justify-content-center align-items-center position-absolute">
                            <div class="text-white position-absolute" style="display: none;" id="agroTexto">
                                <h2>Agro</h2>
                                <p>RESP CIVIL</p>
                                <p>INCENDIO TOTAL Y/O PARCIAL</p>
                                <p>ROBO</p>
                                <p>DAÑOS TOTALES</p>
                                <p>CONSEJOS</p>
                                <p>ROBO</p>
                                <p>DAÑOS TOTALES</p>
                                <p>ROBO</p>
                                <button class="botonSeguros">Contactar Asesor</button>
                            </div>
                        </div>
                        <img src="<?php echo bloginfo('template_url' ); ?>/img/camiones.jpg" class="img-fluid imgPurple"
                            id="agroImg" />
                    </div>

                    <!-- sexto-->
                    <div class="col-md-4 px-0 d-flex align-items-center justify-content-center">
                        <a class="btn violetBtn position-absolute my-auto boton" id="empleadores" data-toggle="collapse"
                            href="#collapse" aria-expanded="true" aria-controls="collapse9">
                            Empleadores
                        </a>
                        <div class="d-flex justify-content-center align-items-center position-absolute">
                            <div class="text-white position-absolute" style="display: none;" id="empleadoresTexto">
                                <h2>Empleadores</h2>
                                <p>RESP CIVIL</p>
                                <p>INCENDIO TOTAL Y/O PARCIAL</p>
                                <p>ROBO</p>
                                <p>DAÑOS TOTALES</p>
                                <p>CONSEJOS</p>
                                <p>ROBO</p>
                                <p>DAÑOS TOTALES</p>
                                <p>ROBO</p>
                                <button class="botonSeguros">Contactar Asesor</button>
                            </div>
                        </div>
                        <img src="<?php echo bloginfo('template_url' ); ?>/img/empleadores.jpg"
                            class="img-fluid imgPurple" id="empleadoresImg" />
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
        $('.boton#industria').click(function () {
            $('#industriaImg').addClass('overlay');
            $(this).hide();
            $('#industriaTexto').show();
        })
        $('.boton#agro').click(function () {
            $('#agroImg').addClass('overlay');
            $(this).hide();
            $('#agroTexto').show();
        })
        $('.boton#empleadores').click(function () {
            $('#empleadoresImg').addClass('overlay');
            $(this).hide();
            $('#empleadoresTexto').show();
        })
    })
    // function ok() {
    //     $(".btn-efecto").fadeToggle(1000, function () {});
    // }
</script>

<?php get_footer(); ?>
<?php get_footer('2'); ?>