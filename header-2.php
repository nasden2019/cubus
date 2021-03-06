<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <script src="https://kit.fontawesome.com/5bc13031fa.js" crossorigin="anonymous"></script>
        <!-- <link rel="stylesheet" href="//stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" /> -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
            integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
            crossorigin="anonymous" />
        <link rel="stylesheet" href="<?php echo bloginfo('template_url' ); ?>/webroot/css/style.min.css" />
        <link rel="stylesheet" href="<?php echo bloginfo('template_url' ); ?>/webroot/css/mixin.min.css" />
        <link
            href="https://fonts.googleapis.com/css?family=Montserrat:100i,200,200i,300,300i,400,500,500i,600,600i,700,800&display=swap"
            rel="stylesheet" />

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
        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"> -->

    </head>

    <body>
        <nav class="navbar navbar-expand-md fixed-top footerVioleta px-md-5 d-md-block d-none">
            <div class="container-fluid py-3">
                <!-- <ul class="nav navbar-nav mx-auto mt-5 item1"> -->
                <!-- <a class="navbar-brand" href="#"> -->
                <a href="<?php echo esc_url( home_url('/') ); ?>INDEX">
                    <img src="<?php echo bloginfo('template_url' ); ?>/img/logo-mobile.png" class="img-fluid" alt=""
                        style="width: 250px;" />
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
                    <ul class="navbar-nav ml-auto text-black">
                        <li class="nav-item">
                            <a class="nav-link text-white ml-3"
                                href="<?php echo esc_url( home_url('/') ); ?>INDEX">INICIO <span></span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white ml-3"
                                href="<?php echo esc_url( home_url('/') ); ?>seguros">SEGUROS</a>
                        </li>
                        <li class="nav-item">
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
        </nav>

        <!-- nav mobile -->
        <nav class="navbar navbar-expand-md fixed-top navBarra navItem1 footerVioleta px-md-5 pt-0 d-md-none d-block">
            <div class="container-fluid cianColor py-3">
                <ul class="nav navbar-nav mx-auto mt-1 item1">
                    <!-- <ul class="nav navbar-nav mx-auto mt-5 item1"> -->
                    <a class="navbar-brand" href="#">
                        <img src="<?php echo bloginfo('template_url' ); ?>/img/logo-mobile.png" class="img-fluid" alt=""
                            style="width: 215px;" />
                        <!-- ?= $this->Html->image('logo-mobile.png', ['class' => "img-fluid d-md-block", 'style' => 'width: 250px;']) ?> -->
                    </a>
                </ul>

                <div class="navbar navbar-expand-sm fixed-top test navBarra test navItem2">
                    <button class="navbar-toggler mr-auto" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
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
                                <a class="nav-link text-white ml-3"
                                    href="<?php echo esc_url( home_url('/') ); ?>INDEX">INICIO </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white ml-3"
                                    href="<?php echo esc_url( home_url('/') ); ?>seguros">SEGUROS</a>
                            </li>
                            <li class="nav-item">
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
        </nav>