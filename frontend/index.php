<?php include ("partials/_header.php") ?>

            
            <!-- Carousel Start -->
            <div id="carousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel" data-slide-to="1"></li>
                    <li data-target="#carousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/fondoslidejuicios.png" alt="Carousel Image">
                        <div class="carousel-caption">
                            <h1 class="animated fadeInLeft">Detalle del Personal</h1>
                            <p class="animated fadeInRight">Encuentre Rapidamente la informacion necesaria</p>
                            <a class="btn animated fadeInUp" href="#">Acceda Aqui</a>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img src="img/carousel-2.jpg" alt="Carousel Image">
                        <div class="carousel-caption">
                            <h1 class="animated fadeInLeft">Documentacion de los Demandantes</h1>
                            <p class="animated fadeInRight">Registre todos las Cartas Documento y su Link Digital</p>
                            <a class="btn animated fadeInUp" href="#">Acceda Aqui</a>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img src="img/carousel-3.jpg" alt="Carousel Image">
                        <div class="carousel-caption">
                            <h1 class="animated fadeInLeft">Estadistica General</h1>
                            <p class="animated fadeInRight">Vision General de Documentos y tipo de Reclamos</p>
                            <a class="btn animated fadeInUp" href="#">Acceda Aqui</a>
                        </div>
                    </div>
                </div>

                <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <!-- Carousel End -->
            
            
            <!-- Top Feature Start-->
            <div class="feature-top">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-md-3 col-sm-6">
                            <div class="feature-item">
                                <i class="far fa-check-circle"></i>
                                <h3>Cartas Documento</h3>
                                <p>Reclamos recibidos</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="feature-item">
                                <i class="fa fa-user-tie"></i>
                                <h3>Contestaciones</h3>
                                <p>Emision de Carta Documento</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="feature-item">
                                <i class="far fa-handshake"></i>
                                <h3>Audiencias</h3>
                                <p>Recepcion para Acuerdo</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="feature-item">
                                <i class="far fa-thumbs-up "></i>
                                <h3>Juicios</h3>
                                <p>Evento Final</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Top Feature End-->

            <!-- Contenido -->
            <?php include ("partials/_datatablePersonas.php") ?>

            
            
      


            <?php include ("partials/_footer.php") ?>
            
            
        </div>
