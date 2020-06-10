<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="//stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
      integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous" />
    <link rel="stylesheet" href="<?php echo bloginfo('template_url' ); ?>/webroot/css/style.min.css" />
    <link rel="stylesheet" href="<?php echo bloginfo('template_url' ); ?>/webroot/css/mixin.min.css" />
    <link rel="stylesheet" href="<?php echo bloginfo('template_url' ); ?>//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="<?php echo bloginfo('template_url' ); ?>/resources/demos/style.css">


    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,600;0,700;0,900;1,400;1,600;1,800&display=swap"
      rel="stylesheet" />

    

  </head>

  <body>
    <nav class="navbar navbar-expand-md fixed-top px-md-5 d-md-block d-none footer-transparente" id="menu">
      <div class="container-fluid">
        <div class="row justify-content-center align-items-center w-100">
          <div class="col-12 text-center">


            <!-- <ul class="nav navbar-nav mx-auto mt-5 item1"> -->
            <!-- <a class="navbar-brand" href="#"> -->
            <a href="<?php echo esc_url( home_url('/') ); ?>INDEX">
              <img src="<?php echo bloginfo('template_url' ); ?>/img/logo-mobile.png" class="img-fluid" alt=""
                style="width: 215px;" />
            </a>
            <!-- ?= $this->Html->image('logo-mobile.png', ['class' => "img-fluid d-md-block", 'style' => 'width: 250px;']) ?> -->
            <!-- </a> -->
            <!-- </ul> -->

            <button class="navbar-toggler mr-auto" type="button" data-toggle="collapse"
              data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
              aria-label="Toggle navigation">
              <span class="animated-icon1 spanNav">___<br />
                ___</span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav text-black mx-auto">
                <li class="nav-item">
                  <a class="nav-link text-white ml-3" href="<?php echo esc_url( home_url('/') ); ?>INDEX">INICIO
                    <span></span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-white ml-3" href="<?php echo esc_url( home_url('/') ); ?>seguros">SEGUROS</a>
                </li>
                <li class="nav-item">
                  <!-- <a class="nav-link text-white ml-3" href="pFrecuentes.html">PREGUNTAS FRECUENTES</a> -->
                  <a class="nav-link text-white ml-3"
                    href="<?php echo esc_url( home_url('/') ); ?>pFrecuentes">PREGUNTAS FRECUENTES</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-white ml-3"
                    href="<?php echo esc_url( home_url('/') ); ?>contacto">CONTACTO</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </nav>

    <!-- nav mobile -->
    <nav class="navbar navbar-expand-md fixed-top navBarra navItem1 footerVioleta px-md-5 pt-0 d-md-none d-block">
      <div class="container-fluid cianColor py-2">
        <ul class="nav navbar-nav mx-auto item1">
          <!-- <ul class="nav navbar-nav mx-auto mt-5 item1"> -->

          
          <a class="navbar-brand" href="#">
            <img src="<?php echo bloginfo('template_url' ); ?>/img/logo-mobile.png" class="img-fluid" alt=""
              style="width: 215px;" />
            <!-- ?= $this->Html->image('logo-mobile.png', ['class' => "img-fluid d-md-block", 'style' => 'width: 250px;']) ?> -->
          </a>
        </ul>

        <div class="navbar navbar-expand-sm fixed-top test navBarra test navItem2">
          <button class="navbar-toggler mr-auto" type="button" data-toggle="collapse"
            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <div id="nav-icon1">
              <!-- cada span representa una linea -->
              <span></span>
              <span></span>
              <span></span>
            </div>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent" style="background: #220326;">
            <ul class="navbar-nav ml-auto text-black">
              <li class="nav-item">
                <a class="nav-link text-white ml-3" href="<?php echo esc_url( home_url('/') ); ?>INDEX">INICIO </a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white ml-3" href="<?php echo esc_url( home_url('/') ); ?>seguros">SEGUROS</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white ml-3" href="<?php echo esc_url( home_url('/') ); ?>pFrecuentes">PREGUNTAS FRECUENTES</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white ml-3" href="<?php echo esc_url( home_url('/') ); ?>contacto">CONTACTO</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>