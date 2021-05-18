<?php include("partials/_header.php") ?>

<body>

    <div class="wrapper" id="cuerpo">
        <!-- Nav Bar Start -->
        <div class="nav-bar">
            <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
                <a href="#" class="navbar-brand">MENU</a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav mr-auto">
                        <a href="index.html" class="nav-item nav-link active">Principal</a>
                        <a href="about.html" class="nav-item nav-link">Litigantes</a>
                        <a href="service.html" class="nav-item nav-link">Personal</a>
                        <a href="contact.html" class="nav-item nav-link">Contacto</a>
                    </div>
                    <!-- <div class="ml-auto">
                            <a class="btn" href="https://htmlcodex.com/law-firm-website-template">Get Appointment</a>
                        </div> -->
                </div>
            </nav>
        </div>
        <!-- Nav Bar End -->


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


        <!-- Modales -->
        <?php include("READmodules/modal_personas_Detalle.php") ?>

        <!-- Contenido -->
        <div class="container-fluid" id="cuerpo">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                    <?php include("partials/_datatableLitigantes.php") ?>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                    <?php include("partials/_datatablePersonas.php") ?>
                </div>
            </div>
        </div>


        <script>
            // <!-- // VER DETALLE PERSONA -->
            $(document).on("click", ".btnView", function() {
                fila = $(this).closest("tr");
                cuil = fila.find("td:eq(1)").text();
                $('.modal_Detalle_Persona').modal('show');
                PersonaDetalleRead(cuil);
            });
        </script>


    </div>

    <?php include("partials/_footer.php") ?>

</body>

</html>