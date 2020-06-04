
<?php get_header(); ?>
    <!-- SLIDER DESKTOP -->
    <header class="d-none d-md-block">
      <div
        id="carouselExampleIndicators"
        class="carousel slide"
        data-ride="carousel"
      >
        <ol class="carousel-indicators">
          <li
            data-target="#carouselExampleIndicators"
            data-slide-to="0"
            class="active"
          ></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <!-- <li data-target="#carouselExampleIndicators" data-slide-to="2"></li> -->
        </ol>
        <div class="carousel-inner" role="listbox">
          <div
            class="carousel-item active"
            style="background-image: url('<?php echo bloginfo('template_url' ); ?>/img/auto.jpg');"
          >
            <!-- <div class="carousel-caption d-none d-md-block">
                            <h2 class="display-4">titular</h2>
                            <p class="lead">descripcion slide</p>
                        </div> -->
          </div>

          <div
            class="carousel-item"
            style="background-image: url('<?php echo bloginfo('template_url' ); ?>/img/livingDeskAzul.jpg');"
          >
            <!-- style="background-image: url('https://source.unsplash.com/bF2vsubyHcQ/1920x1080')"> -->
          </div>

          <!-- tercer slide img 
                        <div class="carousel-item"
                        style="background-image: url('https://source.unsplash.com/szFUQoyvrxM/1920x1080')">
                        <div class="carousel-caption d-none d-md-block">
                            <h2 class="display-4">Third Slide</h2>
                            <p class="lead">This is a description for the third slide.</p>
                        </div>
                    </div> -->
        </div>
        <a
          class="carousel-control-prev"
          href="#carouselExampleIndicators"
          role="button"
          data-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a
          class="carousel-control-next"
          href="#carouselExampleIndicators"
          role="button"
          data-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </header>

    <!-- seccion texto 1 -->
    <section class="seccionTexto">
      <div class="container px-0">
        <div class="col-12 px-0 text-center margTextMob">
          <p class="">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum quod
            Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum
            dolor sit amet consectetur adipisicing elit. Atque cumque vero Lorem
            ipsum dolor sit amet consectetur adipisicing elit. Fugit, odio?
            Lorem ipsum dolor sit amet consectetur adipisicing.
          </p>
        </div>
      </div>
    </section>

    <!-- PURPLE SECTION MOBILE-->
    <div
      class="seccionVioleta pt-0 d-block d-md-none accordion md-accordion accordion-1"
      id="accordionEx23"
      role="tablist"
    >
      <div class="card">
        <div
          class="card-header text-center"
          role="tab"
          id="heading96"
          style="background: #220326;"
        >
          <!-- <h5 class="text-uppercase mb-0 py-1"> -->
          <h2>Confianza</h2>
          <button
            class="btn text-white violetBtnM"
            data-toggle="collapse"
            href="#collapse96"
            aria-expanded="true"
            aria-controls="collapse96"
          >
            Ver mas
          </button>
        </div>
        <div
          id="collapse96"
          class="collapse"
          role="tabpanel"
          aria-labelledby="heading96"
          data-parent="#accordionEx23"
          style="background: #220326;"
        >
          <div class="card-body px-0 py-0">
            <div
              class="col-12 col-md-4 px-0 d-flex align-items-center d-md-none"
            >
              <img src="<?php echo bloginfo('template_url' ); ?>/img/familiaDeskt.jpg"
                class="img-fluid imgPurple"
                alt=""
                style="height: 400px;"
              />
              <h1 class="w-100 position-absolute text-white text-center">
                Confianza
              </h1>
              <div class="w-100 position-absolute text-white text-center">
                <p class="textoImgMobile">
                  Lorem ipsum dolor, sit amet consectetur adipisicing jwdidw
                  wd2a.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="card">
        <div
          class="card-header text-center"
          role="tab"
          id="heading97"
          style="background: #220326;"
        >
          <h2>Ética</h2>
          <button
            class="btn text-white violetBtnM"
            data-toggle="collapse"
            href="#collapse97"
            aria-expanded="true"
            aria-controls="collapse97"
          >
            Ver mas
          </button>
        </div>
        <div
          id="collapse97"
          class="collapse"
          role="tabpanel"
          aria-labelledby="heading97"
          data-parent="#accordionEx23"
        >
          <div class="card-body px-0 py-0">
            <div
              class="col-12 col-md-4 px-0 d-flex align-items-center d-md-none"
            >
              <img
                src="<?php echo bloginfo('template_url' ); ?>/img/eticaDeskt.jpg"
                class="img-fluid imgPurple"
                alt=""
                style="height: 400px;"
              />
              <h1 class="w-100 position-absolute text-white text-center">
                Ética
              </h1>
              <div class="w-100 position-absolute text-white text-center">
                <p class="textoImgMobile">
                  Lorem ipsum dolor, sit amet consectetur adipisicing jwdidw
                  wd2a.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="card">
        <div
          class="card-header text-center"
          role="tab"
          id="heading98"
          style="background: #220326;"
        >
          <h2>Profesional</h2>
          <button
            class="btn text-white violetBtnM"
            data-toggle="collapse"
            href="#collapse98"
            aria-expanded="true"
            aria-controls="collapse96"
          >
            Ver mas
          </button>
        </div>
        <div
          id="collapse98"
          class="collapse"
          role="tabpanel"
          aria-labelledby="heading98"
          data-parent="#accordionEx23"
          style="background: #220326;"
        >
          <div class="card-body px-0 py-0">
            <div
              class="col-12 col-md-4 px-0 d-flex align-items-center d-md-none"
            >
              <img
                src="<?php echo bloginfo('template_url' ); ?>/img/livingDeskAzul.jpg"
                class="img-fluid imgPurple"
                alt=""
                style="height: 400px;"
              />
              <!-- <h1 class="w-100 position-absolute text-center">
                                CUBUS <br>BROKER
                            </h1> -->
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--Accordion wrapper-->

    <!-- PURPLE SECTION DESKTOP-->
    <section class="seccionVioleta d-md-block d-none mx-0 px-md-0 pt-md-0 pt-0 pb-0 accordion md-accordion accordion-1"
      style="margin-top: 128px;" id="accordionEx123" role="tablist">
      <div class="container-fluid">
        <div class="row mx-0 px-0">
          <div class="col-12 col-md-12 px-0 text-center">
            <div class="row">
              <div class="col-md-4 px-0 d-flex align-items-center justify-content-center">
                <a class="btn violetBtn position-absolute my-auto boton" id="confianza" data-toggle="collapse"
                  href="#collapse19" aria-expanded="true" aria-controls="collapse196">
                  Confianza
                </a>
                <!--col-md-6 para q el contenido no quede apretado y alargado -->
                <div class="col-md-6 d-flex justify-content-center align-items-center position-absolute"
                  style="z-index: 20000;">
                  <div class="text-white position-absolute" style="display: none;" id="confianzaTexto">
                    <h2 class="mb-md-4 mb-3">Confianza</h2>
                    <div class="mb-md-2 mb-1">RESP CIVIL</div>
                    <div class="mb-md-2 mb-1">INCENDIO TOTAL Y/O PARCIAL</div>
                    <div class="mb-md-2 mb-1">ROBO</div>
                    <div class="mb-md-2 mb-1">DAÑOS TOTALES</div>
                    <div class="mb-md-2 mb-1">CONSEJOS</div>
                    <div class="mb-md-2 mb-1">ROBO</div>
                    <div class="mb-md-2 mb-1">DAÑOS TOTALES</div>
                    <div class="mb-md-4 mb-3">CONSEJOS</div>

                    <!-- BOTON MODAL -->
                    <button type="button" class="botonSeguros" data-toggle="modal" data-target="#exampleModal"
                      style="z-index: 200000!important;">Contactar
                      asesor</button>

                    <!-- MODAL -->
                    <div class="modal fade" id="exampleModal" style="margin-top: 7%;">
                      <div class="modal-dialog">
                        <div class="modal-content modales">
                          <div class="modal-header mx-auto">
                            <h2 class="">CONFIANZA</h2>
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
                <img src="<?php echo bloginfo('template_url' ); ?>/img/familiaDeskt.jpg" class="img-fluid img-purple" alt="" />
              </div>


              <!-- segundo-->
              <div class="col-md-4 px-0 d-flex align-items-center justify-content-center">
                <a class="btn violetBtn position-absolute my-auto boton" id="familia" data-toggle="collapse"
                  href="#collapse19" aria-expanded="true" aria-controls="collapse1">
                  Ética
                </a>
                <!--Z-INDEX en el modal, para q no lo tapen el resto de paddings! -->
                <div class="col-md-6 d-flex justify-content-center align-items-center position-absolute"
                  style="z-index: 20000;">
                  <div class="text-white position-absolute" style="display: none;" id="familiaTexto">
                    <h2 class="mb-md-4 mb-3">Ética</h2>
                    <div class="mb-md-2 mb-1">RESP CIVIL</div>
                    <div class="mb-md-2 mb-1">INCENDIO TOTAL Y/O PARCIAL</div>
                    <div class="mb-md-2 mb-1">ROBO</div>
                    <div class="mb-md-2 mb-1">DAÑOS TOTALES</div>
                    <div class="mb-md-2 mb-1">CONSEJOS</div>
                    <div class="mb-md-2 mb-1">ROBO</div>
                    <div class="mb-md-2 mb-1">DAÑOS TOTALES</div>
                    <div class="mb-md-4 mb-3">CONSEJOS</div>

                    <!--LOS MODALES TIENEN QUE TENER DIFERENTES ID'S!!! -->
                    <button type="button" class="botonSeguros" data-toggle="modal" data-target="#exampleModal2"
                      style="z-index: 200000!important;">Contactar
                      asesor</button>

                    <div class="modal fade" id="exampleModal2" style="margin-top: 7%;">
                      <div class="modal-dialog">
                        <div class="modal-content modales">
                          <div class="modal-header mx-auto">
                            <h2 class="">Ética</h2>
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
                <img src="<?php echo bloginfo('template_url' ); ?>/img/eticaDeskt.jpg" class="img-fluid imgPurple" alt="" />
              </div>


              <!-- tercero -->
              <div class="col-md-4 px-0 d-flex align-items-center justify-content-center overlay">
                <a class="btn violetBtn position-absolute my-auto boton" id="accidentes" data-toggle="collapse"
                  href="#collapse19" aria-expanded="true" aria-controls="collapse1">
                  Profesionalismo
                </a>
                <div class="col-md-6 d-flex justify-content-center align-items-center position-absolute"
                  style="z-index: 20000;">
                  <div class="text-white position-absolute" style="display: none;" id="accidentesTexto">
                    <h2 class="mb-md-4 mb-3">Profesionalismo</h2>
                    <div class="mb-md-2 mb-1">RESP CIVIL</div>
                    <div class="mb-md-2 mb-1">INCENDIO TOTAL Y/O PARCIAL</div>
                    <div class="mb-md-2 mb-1">ROBO</div>
                    <div class="mb-md-2 mb-1">DAÑOS TOTALES</div>
                    <div class="mb-md-2 mb-1">CONSEJOS</div>
                    <div class="mb-md-2 mb-1">ROBO</div>
                    <div class="mb-md-2 mb-1">DAÑOS TOTALES</div>
                    <div class="mb-md-4 mb-3">CONSEJOS</div>

                    <button type="button" class="botonSeguros" data-toggle="modal" data-target="#exampleModal3"
                      style="z-index: 200000!important;">Contactar
                      asesor</button>

                    <div class="modal fade" id="exampleModal3" style="margin-top: 7%;">
                      <div class="modal-dialog">
                        <div class="modal-content modales">
                          <div class="modal-header mx-auto">
                            <h2 class="">PROFESIONALISMO</h2>
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
                <!-- <img src="/img/familiaDeskt.jpg" class="img-fluid imgPurple" id="accidentesImg" /> -->
                <img src="<?php echo bloginfo('template_url' ); ?>/img/familiaDeskt.jpg" class="img-fluid imgPurple" alt="" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <!-- seccion texto2 mobile-->
    <section class="seccionTextoDos d-block d-md-none" style="padding-top: 0;">
      <div class="container-fluid px-0">
        <div class="row">
          <div class="col-12 px-0 pt-0 imgTextoDos">
            <img src="<?php echo bloginfo('template_url' ); ?>/img/pcDeskt.jpg" class="img-fluid" alt="" />
          </div>
          <div class="col-12 text-center mt-4">
            <h1 class="text-center">CUBUS <br />BROKER</h1>
          </div>
          <div class="text-center margTextMob line-height">
            <p class="">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum quod
              Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem
              ipsum dolor sit amet consectetur adipisicing elit. Atque cumque
              vero. Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Error, exercitationem!
            </p>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque
              perspiciatis libero, a nostrum commodi iusto. Lorem ipsum dolor
              sit amet consectetur adipisicing elit. Atque eaque earum neque
              voluptate enim placeat.
            </p>
            <p>
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolor
              unde voluptas repudiandae obcaecati vero voluptatem harum, commodi
              eos. Lorem ipsum dolor sit, amet consectetur adipisicing elit.
              Esse minus dolorum incidunt ullam. Lorem ipsum dolor sit amet
              consectetur adipisicing elit. Iure dolorem nemo ullam impedit
              inventore. Voluptas vero dolore ad molestiae veritatis?
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- seccion texto2 desktop-->
    <section class="seccionTextoDos d-none d-md-block">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12 col-md-12">
            <div class="row align-items-center">
              <div class="col-md-6 text-center">
                <h1 class="cianColor pb-md-5 pt-md-5">CUBUS <br />BROKER</h1>
                <div class="text-center margText">
                  <p class="aloha">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum
                    quod Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Atque cumque vero. Lorem ipsum dolor sit amet consectetur
                    adipisicing elit. Error, exercitationem!
                  </p>
                  <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Atque perspiciatis libero, a nostrum commodi iusto. Lorem
                    ipsum dolor sit amet consectetur adipisicing elit. Atque
                    eaque earum neque voluptate enim placeat.
                  </p>
                  <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                    Dolor unde voluptas repudiandae obcaecati vero voluptatem
                    harum, commodi eos. Lorem ipsum dolor sit, amet consectetur
                    adipisicing elit. Esse minus dolorum incidunt ullam. Lorem
                    ipsum dolor sit amet consectetur adipisicing elit. Iure
                    dolorem nemo ullam impedit inventore. Voluptas vero dolore
                    ad molestiae veritatis?
                  </p>
                </div>
              </div>
              <div class="col-md-6 px-0">
                <img src="<?php echo bloginfo('template_url' ); ?>/img/pcDeskt.jpg" class="img-fluid" alt="" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- FORM -->
    <section class="formulario">
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-12 pt-md-5">
            <h2 class="pb-3 my-md-4 my-4">
              Trabaja con nosotros, <br />sumate a nuestro equipo
            </h2>
          </div>

          <div class="col-12 col-sm-12">
          <?php echo do_shortcode( '[contact-form-7 id="9" title="Trabaja con nosotros"]' ); ?>
          </div>
        </div>
      </div>
    </section>

    <!-- Seccion rosa -->
    <section class="seccionRosa">
      <div class="container-fluid px-0">
        <div class="col-12 col-md-12 px-0 py-md-3 my-md-0">
          <h2 class="pb-4">Preguntas <br class="d-md-none" />Frecuentes</h2>
          <div class="text-center mt-1">
            <button type="submit" class="btn btnHover" id="demo" value="send">
              <a class="text-white" href="pFrecuentes.html">Ver mas</a>
            </button>
          </div>
        </div>
      </div>
    </section>

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
</script>

    <?php get_footer(); ?>


