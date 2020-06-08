<?php
/*
Template Name: segurosCubus
*/
?>

<?php get_header('2'); ?>

<section class="seccionVioleta d-md-block mx-0 px-md-0 pt-md-0 pt-0 pb-0 accordion md-accordion accordion-1"
    style="margin-top: 128px;" id="accordionEx123" role="tablist">
    <div class="container-fluid">
        <div class="row mx-0 px-0">
            <div class="col-12 col-md-12 px-0 text-center">
                <div class="row">
                    <div class="col-md-4 px-0 d-flex align-items-center justify-content-center">
                        <a class="btn violetBtn position-absolute my-auto boton automotor" id="automotor"
                            data-toggle="collapse" href="#collapse19" aria-expanded="true" aria-controls="collapse196">
                            Automotor
                        </a>
                        <!--col-md-6 para q el contenido no quede apretado y alargado -->
                        <div class="col-md-10 d-flex justify-content-center align-items-center position-absolute">
                            <div class="text-white position-absolute" style="display: none; z-index: 1;"
                                id="automotorTexto">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="col-1">
                                        <img src="<?php echo bloginfo('template_url' ); ?>/img/Boton.png" class=" automotor" style="margin-left: 0; margin-top: 20px; width: 35px;">
                                    </div>
                                    <div class="vol-8">
                                        <h4 class="mb-md-4 mt-md-5 mb-3 d-none d-md-block">Cuidá tu vehículo de la forma mas conveniente</h4>
                                        <h4 class="mb-md-4 mt-md-5 mb-3 d-block d-md-none">Cuidá tu vehículo</h4>
                                        <div class="mb-md-2 mb-1">Responsabilidad civil</div>
                                        <div class="mb-md-2 mb-1">Incendio total y/o parcial</div>
                                        <div class="mb-md-2 mb-1">Robo</div>
                                        <div class="mb-md-2 mb-1">Daños totales y/o parciales por accidente</div>
                                        <div class="mb-md-2 mb-1">Daños parciales por granizo</div>
                                        <div class="mb-md-4 mb-3">Beneficios extras y costos exclusivos para los vehículos</div>
                                        <!-- BOTON MODAL -->
                                        <button type="button" class="botonSeguros" data-toggle="modal"
                                            data-target="#exampleModal">Contactar asesor
                                        </button>
                                    </div>
                                    <div class="col-1"></div>
                                </div>
                                

                                <!-- MODAL -->

                            </div>
                            <div class="modal fade" id="exampleModal" style="">
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
                                                    <input type="text" class="form-control" placeholder="Marca" />
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Modelo" />
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" value="____-__-__" data-mask="____-__-__"
                                                        class="form-control" placeholder="Año" />
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control"
                                                        placeholder="Nafta, Diesel o Gas?" />
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Nombre" />
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Localidad" />
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Tel." />
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control"
                                                        placeholder="Horario de contacto" />
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Mail" />
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
                        <img src="<?php echo bloginfo('template_url' ); ?>/img/cinturon.jpg" class="img-fluid imgPurple"
                            id="automotorImg" />
                    </div>


                    <!-- segundo-->
                    <div class="col-md-4 px-0 d-flex align-items-center justify-content-center">
                        <a class="btn violetBtn position-absolute my-auto boton familia" id="familia" data-toggle="collapse"
                            href="#collapse19" aria-expanded="true" aria-controls="collapse1">
                            Familia
                        </a>
                        <!--Z-INDEX en el modal, para q no lo tapen el resto de paddings! -->
                        <div class="col-md-6 d-flex justify-content-center align-items-center position-absolute">
                            <div class="text-white position-absolute" style="display: none; z-index: 1;"
                                id="familiaTexto">
                                <img src="<?php echo bloginfo('template_url' ); ?>/img/Boton.png"
                                    class="position-absolute flechaSeg familia">
                                <h4 class="mb-md-4 mb-3 mt-md-5">Protegé tu hogar de manera integral</h4>
                                <div class="mb-md-2 mb-1">Incendio edificio y mobiliario</div>
                                <div class="mb-md-2 mb-1">Robo contenido</div>
                                <div class="mb-md-2 mb-1">Cristales</div>
                                <div class="mb-md-2 mb-1">Responsabilidad civil</div>

                                <!--LOS MODALES TIENEN QUE TENER DIFERENTES ID'S!!! -->
                                <button type="button" class="botonSeguros mt-md-3 mt-3" data-toggle="modal"
                                    data-target="#exampleModal2">Contactar
                                    asesor</button>

                            </div>
                            <div class="modal fade" id="exampleModal2" style="">
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
                                                    <input type="text" class="form-control" placeholder="Ciudad" />
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control"
                                                        placeholder="Vivienda permanente" />
                                                </div>
                                                <div class="form-group">
                                                    <input type="number" min="0" max="100" class="form-control"
                                                        placeholder="Metros cuadrados" />
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control"
                                                        placeholder="Comunica con algún condominio?" />
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control"
                                                        placeholder="Depto, Casa, Barrio?" />
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control"
                                                        placeholder="Tiene rejas?" />
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control"
                                                        placeholder="Tiene alarmas?" />
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control"
                                                        placeholder="Tiene disyuntor?" />
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control"
                                                        placeholder="Tiene vigilancia?" />
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control"
                                                        placeholder="Tiene puerta blindada?" />
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Nombre" />
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Tel." />
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control"
                                                        placeholder="Horario de contacto" />
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Email" />
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
                        <img src="<?php echo bloginfo('template_url' ); ?>/img/familiaDeskt.jpg"
                            class="img-fluid imgPurple" id="familiaImg" />
                    </div>


                    <!-- tercero -->
                    <div class="col-md-4 px-0 d-flex align-items-center justify-content-center">
                        <a class="btn violetBtn position-absolute my-auto boton" id="accidentes" data-toggle="collapse"
                            href="#collapse19" aria-expanded="true" aria-controls="collapse1">
                            Accidentes
                        </a>
                        <div class="col-md-6 d-flex justify-content-center align-items-center position-absolute">
                            <div class="text-white position-absolute" style="display: none; z-index: 1;"
                                id="accidentesTexto">
                                <img src="<?php echo bloginfo('template_url' ); ?>/img/Boton.png"
                                    class="position-absolute flechaSeg">
                                <h4 class="mb-md-4 mb-3">Asistencia Médica - Farmacéutica</h4>
                                <div class="mb-md-2 mb-1">Renta diaria por internación</div>
                                <div class="mb-md-2 mb-1">Invalidez</div>
                                <div class="mb-md-2 mb-1">Muerte</div>
                                <div class="mb-md-2 mb-1">Sepelio</div>

                                <button type="button" class="botonSeguros mt-md-3 mt-3" data-toggle="modal"
                                    data-target="#exampleModal3">Contactar
                                    asesor</button>
                            </div>
                            <div class="modal fade" id="exampleModal3" style=";">
                                <div class="modal-dialog">
                                    <div class="modal-content modales">
                                        <div class="modal-header mx-auto">
                                            <h2 class="">ACCIDENTES</h2>
                                            <!-- <h5 class="modal-title">AUTOMOTOR</h5> -->
                                            <button class="close" data-dismiss="modal">
                                                <span>&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form>
                                                <div class="form-group">
                                                    <input type="text" class="form-control"
                                                        placeholder="Empresa o tomador del seguro" />
                                                </div>
                                                <div class="form-group">
                                                    <input type="number" class="form-control"
                                                        placeholder="C.U.I.T / DNI" />
                                                </div>
                                                <div class="form-group">
                                                    <input type="number" min="0" max="100" class="form-control"
                                                        placeholder="Cantidad de empleados" />
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control"
                                                        placeholder="Actividad de los empleados" />
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control"
                                                        placeholder="Actividad de la empresa" />
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Tel." />
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control"
                                                        placeholder="Horario de contacto" />
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Email" />
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
                        <img src="<?php echo bloginfo('template_url' ); ?>/img/eticaDeskt.jpg"
                            class="img-fluid imgPurple" id="accidentesImg" />
                    </div>


                    <!-- cuarto-->
                    <div class="col-md-4 px-0 d-flex align-items-center justify-content-center">
                        <a class="btn violetBtn position-absolute my-auto boton" id="industria" data-toggle="collapse"
                            href="#collapse9" aria-expanded="true" aria-controls="collapse1">
                            Industria
                        </a>
                        <div class="col-md-6 d-flex justify-content-center align-items-center position-absolute">
                            <div class="text-white position-absolute" style="display: none; z-index: 1;"
                                id="industriaTexto">
                                <img src="<?php echo bloginfo('template_url' ); ?>/img/Boton.png"
                                    class="position-absolute flechaSeg">
                                <h4 class="mb-md-4 mb-3">La tranquilidad de que tu negocio esté protegido</h4>
                                <div class="mb-md-2 mb-1">Incendio edificio</div>
                                <div class="mb-md-2 mb-1">Incendio contenido</div>
                                <div class="mb-md-2 mb-1">Robo contenido</div>
                                <div class="mb-md-2 mb-1">Responsabilidad civil</div>

                                <button type="button" class="botonSeguros mt-md-3 mt-3" data-toggle="modal"
                                    data-target="#exampleModal4">Contactar
                                    asesor</button>
                            </div>
                            <div class="modal fade" id="exampleModal4" style="margin-top: 7%;">
                                <div class="modal-dialog">
                                    <div class="modal-content modales">
                                        <div class="modal-header mx-auto">
                                            <h2 class="">Industria y Comercio</h2>
                                            <!-- <h5 class="modal-title">AUTOMOTOR</h5> -->
                                            <button class="close" data-dismiss="modal">
                                                <span>&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form>
                                                <div class="form-group">
                                                    <input type="text" class="form-control"
                                                        placeholder="Empresa o tomador del seguro" />
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control"
                                                        placeholder="C.U.I.T / DNI" />
                                                </div>
                                                <div class="form-group">
                                                    <input type="number" min="0" max="100" class="form-control"
                                                        placeholder="MTR2 del local" />
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control"
                                                        placeholder="Rubro al que se dedica" />
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Tel." />
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control"
                                                        placeholder="Horario de contacto" />
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Email" />
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

                        <img src="<?php echo bloginfo('template_url' ); ?>/img/camiones.jpg" class="img-fluid imgPurple"
                            id="industriaImg" />
                    </div>


                    <!-- quinto-->
                    <div class="col-md-4 px-0 d-flex align-items-center justify-content-center">
                        <a class="btn violetBtn position-absolute my-auto boton" id="agro" data-toggle="collapse"
                            href="#collapse99" aria-expanded="true" aria-controls="collapse15">
                            Agro
                        </a>
                        <div class="col-md-6 d-flex justify-content-center align-items-center position-absolute">
                            <div class="text-white position-absolute" style="display: none; z-index: 1;" id="agroTexto">
                                <img src="<?php echo bloginfo('template_url' ); ?>/img/Boton.png"
                                    class="position-absolute flechaSeg">
                                <h4 class="mb-md-4 mb-3">Asegure su cosecha</h4>
                                <div class="mb-md-2 mb-1">Protección para el campo</div>
                                <div class="mb-md-2 mb-1">Granizo</div>
                                <div class="mb-md-2 mb-1">Ganado</div>
                                <div class="mb-md-2 mb-1">Silos</div>
                                <div class="mb-md-2 mb-1">Acopios</div>

                                <button type="button" class="botonSeguros mt-md-3 mt-3" data-toggle="modal"
                                    data-target="#exampleModal5">Contactar
                                    asesor</button>
                            </div>
                            <div class="modal fade" id="exampleModal5" style="margin-top: 7%;">
                                <div class="modal-dialog">
                                    <div class="modal-content modales">
                                        <div class="modal-header mx-auto">
                                            <h2 class="">Agro</h2>
                                            <!-- <h5 class="modal-title">AUTOMOTOR</h5> -->
                                            <button class="close" data-dismiss="modal">
                                                <span>&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Ubicación" />
                                                </div>
                                                <div class="form-group">
                                                    <input type="number" class="form-control"
                                                        placeholder="Cantidad hectárea" />
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" value="____-__-__" data-mask="____-__-__"
                                                        class="form-control" placeholder="Cultivo sembrado" />
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control"
                                                        placeholder="Suma asegurada" />
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Nombre" />
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Tel." />
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control"
                                                        placeholder="Horario de contacto" />
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Email" />
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
                        <img src="<?php echo bloginfo('template_url' ); ?>/img/tractor.jpg" class="img-fluid imgPurple"
                            id="agroImg" />
                    </div>


                    <!-- sexto-->
                    <div class="col-md-4 px-0 d-flex align-items-center justify-content-center">
                        <a class="btn violetBtn position-absolute my-auto boton" id="empleadores" data-toggle="collapse"
                            href="#collapse99" aria-expanded="true" aria-controls="collapse7">
                            Empleadores
                        </a>
                        <div class="col-md-6 d-flex justify-content-center align-items-center position-absolute">
                            <div class="text-white position-absolute" style="display: none; z-index: 1;"
                                id="empleadoresTexto">
                                <img src="<?php echo bloginfo('template_url' ); ?>/img/Boton.png"
                                    class="position-absolute flechaSeg">
                                <h4 class="mb-md-4 mb-3">A.R.T</h4>
                                <div class="mb-md-2 mb-1">Ley de contrato de trabajo</div>
                                <div class="mb-md-2 mb-1">Vida colectivo obligatorio</div>
                                <div class="mb-md-2 mb-1">Convenio Mercantil</div>
                                <div class="mb-md-2 mb-1">Peón Rural</div>

                                <button type="button" class="botonSeguros mt-md-3 mt-3" data-toggle="modal"
                                    data-target="#exampleModal6" style="z-index: 200000!important;">Contactar
                                    asesor</button>
                            </div>
                            <div class="modal fade" id="exampleModal6" style="margin-top: 7%;">
                                <div class="modal-dialog">
                                    <div class="modal-content modales">
                                        <div class="modal-header mx-auto">
                                            <h2 class="">Empleadores</h2>
                                            <!-- <h5 class="modal-title">AUTOMOTOR</h5> -->
                                            <button class="close" data-dismiss="modal">
                                                <span>&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Empresa" />
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="C.U.I.T/DNI" />
                                                </div>
                                                <div class="form-group">
                                                    <input type="number" min="0" max="100" class="form-control"
                                                        placeholder="Cantidad de empleados" />
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control"
                                                        placeholder="Sueldo bruto empleados" />
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Tel." />
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control"
                                                        placeholder="Horario de contacto" />
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Email" />
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
                        <img src="<?php echo bloginfo('template_url' ); ?>/img/empleadores.jpg"
                            class="img-fluid imgPurple" id="empleadoresImg" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SECCION AZUL (CON OVERLAY)-->
<section class="seccionAzul img-fluid"
    style="height: 500px; background-image: url('<?php echo bloginfo('template_url' ); ?>img/chicaDeskIndex.jpg');">
    <div class="overlayAzul position-relative">
        <div class="container-fluid">
            <div class="row justify-content-center align-items-center">
                <h2 class="text-black h2SeccionAzul">Querés cotizar algunas<br> de nuestras coberturas?</h2>
                <div class=" col-md-12 col-12 d-flex text-center justify-content-center align-items-center">
                    <button class="btnAzul">Contactar asesor</button>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- JS SCRIPTS -->

<!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
    integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
</script> -->



<script>
    $(document).ready(function () {
        // $('.boton#automotor').click(function () {
        //     $('#automotorImg').addClass('overlay');
        //     $(this).hide();
        //     $('#automotorTexto').show();
        $('.automotor').click(function () {
            $('#automotorImg').toggleClass('overlay');
            $('.automotor').toggle();
            $('#automotorTexto').toggle();
        })
        $('.familia').click(function () {
            $('#familiaImg').toggleClass('overlay');
            $(this).toggle();
            $('#familiaTexto').toggle();
        })
        // $('.boton#familia').click(function () {
        //     $('#familiaImg').addClass('overlay');
        //     $(this).hide();
        //     $('#familiaTexto').show();
        // })
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

    // $(function () {
    //     $("#datepicker").datepicker();
    // });
</script>

<?php get_footer(); ?>