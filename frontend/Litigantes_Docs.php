<?php include("partials/_header.php") ?>

<body>

    <!-- CSS -->
    <?php include("css/litigantes_docs.php") ?>

    <!-- Modales -->
    <?php include("READ/modal_personas_Detalle.php") ?>

    <!-- Modales -->
    <!-- <php  include ("READmodules/modal_personas_Detalle") ?> -->
    <?php include("CREATE/cd_re_Create.php") ?>
    <?php include("READ/cd_re_Read.php") ?>
    <?php include("UPDATE/cd_re_Update") ?>
    <!-- Carta Documento Emitida -->
    <?php include("CREATE/cd_em_Create.php") ?>
    <?php include("READ/cd_em_Read.php") ?>
    <?php include("UPDATE/cd_em_Update") ?>
    <!-- Audiencia -->
    <?php include("CREATE/cd_au_Create.php") ?>
    <?php include("READ/cd_au_Read.php") ?>
    <?php include("UPDATE/cd_au_Update") ?>
    <!-- Juicio -->
    <?php include("CREATE/cd_ju_Create.php") ?>
    <?php include("READ/cd_ju_Read.php") ?>
    <?php include("UPDATE/cd_ju_Update") ?>




    <!-- DATATABLES -->
    <div class="container-fluid mt-3" id="cuerpo">

        <div class="col-12 boxtitulo mb-5">
            <div class="text-center">

                <h1 style="color:white">
                    Documentos Asociados al Litigante
                </h1>

                <h3 class="text-info">
                    CUIL :&nbsp<span class="demo-class-cuil btn_Detalle_Persona" data-toggle='tooltip' data-placement='top' title='Ver: Informacion completa'></span> Apellido y Nombre :&nbsp

                    <span class="demo-class-apenom btn_Detalle_Persona" data-toggle='tooltip' data-placement='top' title='Ver: Informacion completa'></span>
                </h3>
                <div class="pbbotonVolver">
                    <button class="btn btn-danger" onclick="window.location=document.referrer;">
                        <b><i class="material-icons left text-white pbicon1">chevron_left</i> Volver </b>
                    </button>
                </div>
            </div>
        </div>
        <!-- TABLA CARTA DOCUMENTO -->
        <div class="row mt-3">
            <div class="col s12 m6 l6 x6">
                <div class="col-12">
                    <div class="row animated flipInY">
                        <div class="col-12 py-3" style="background-color: #b9b9df;">
                            <div class="row mb-1">
                                <div class="col-12 text-center">
                                    <h2 style="color:black;font-weight: bold;">
                                        CARTAS DOCUMENTOS - RECIBIDAS
                                    </h2>
                                    <div class="pbbotonfloat">
                                        <button type="button " class="btn bg-dark text-white " id="id_btnAddCartaDocumento">
                                            <i class="material-icons left text-success pbicon1">add_circle</i>
                                            Agregar Carta Documento
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <table id="tablaCartaDocumento" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Opciones</th>
                                        <th>CUIL</th>
                                        <th>Fecha Sistema</th>
                                        <th>Fecha Documento</th>
                                        <th>Reclamo</th>
                                        <th>Estudio Juridico</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- TABLA CONTESTACIONES -->
        <div class="row mt-3">
            <div class="col s12 m6 l6 x6">
                <div class="col-12">

                    <div class="row animated flipInY">
                        <div class="col-12 py-3" style="background-color: #b9b9df;">
                            <div class="row mb-1">
                                <div class="col-12 text-center">
                                    <h2 style="color:black;font-weight: bold;">
                                        CARTAS DOCUMENTO - EMITIDAS
                                    </h2>
                                    <div class="pbbotonfloat">
                                        <button type="button " class="btn bg-dark text-white " id="id_btnAddContestacion">
                                            <i class="material-icons left text-success pbicon1">add_circle</i>
                                            Agregar Contestaciones
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <table id="tablaContestaciones" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Opciones</th>
                                        <th>CUIL</th>
                                        <th>Fecha Sistema</th>
                                        <th>Fecha Documento</th>
                                        <th>Reclamo</th>
                                        <th>Estudio Juridico</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- TABLA AUDIENCIAS -->
        <div class="row mt-3">
            <div class="col s12 m6 l6 x6">
                <div class="col-12">
                    <div class="row animated flipInY">
                        <div class="col-12 py-3" style="background-color: #b9b9df;">
                            <div class="row mb-1">
                                <div class="col-12 text-center">
                                    <h2 style="color:black;font-weight: bold;">
                                        AUDIENCIAS
                                    </h2>
                                    <div class="pbbotonfloat">
                                        <button type="button " class="btn bg-dark text-white " id="id_btn_Add_Audiencia" data-toggle='tooltip' data-placement='top' title='Agregar: Nueva Audiencia'>
                                            <i class="material-icons left text-success pbicon1">add_circle</i>
                                            Agregar Audiencia
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <table id="tablaAudiencias" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Opciones</th>
                                        <th>CUIL</th>
                                        <th>Fecha Sistema</th>
                                        <th>Fecha Documento</th>
                                        <th>TIPO</th>
                                        <th>Fecha Audiciencia </th>
                                        <th>Hora Audiciencia</th>
                                        <th>Comentario</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- TABLA JUICIOS -->
        <div class="row mt-3">
            <div class="col s12 m6 l6 x6">
                <div class="col-12">
                    <div class="row animated flipInY">
                        <div class="col-12 py-3" style="background-color: #b9b9df;">
                            <div class="row mb-1">
                                <div class="col-12 text-center">
                                    <h2 style="color:black;font-weight: bold;">
                                        JUICIOS
                                    </h2>
                                    <div class="pbbotonfloat">
                                        <button type="button " class="btn bg-dark text-white " id="id_btn_Add_Juicio" data-toggle='tooltip' data-placement='top' title='Agregar: Nuevo Juicio'>
                                            <i class="material-icons left text-success pbicon1">add_circle</i>
                                            Agregar Juicio
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <table id="tablaJuicios" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Opciones</th>
                                        <th>CUIL</th>
                                        <th>Fecha Sistema</th>
                                        <th>Fecha Documento</th>
                                        <th>TIPO</th>
                                        <th>Fecha Juicio </th>
                                        <th>Hora Juicio</th>
                                        <th>Comentario</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Variable Global
        var CUITparams = '';
        var PERSONAparams = '';
        $(document).ready(function() {
            var parametros = location.search;
            const urlParams = new URLSearchParams(parametros);
            CUITparams = urlParams.get('cuil');
            PERSONAparams = urlParams.get('persona');

            const demoClasses = document.querySelectorAll('.demo-class-cuil');
            demoClasses.forEach(element => {
                element.textContent = CUITparams;
            });

            const demoClasses1 = document.querySelectorAll('.demo-class-apenom');
            demoClasses1.forEach(element => {
                element.textContent = PERSONAparams;
            });
            $('.tooltipped').tooltip({
                delay: 50
            });

            tablaCartaDocumento = $("#tablaCartaDocumento").DataTable({
                ajax: {
                    url: 'http://sotano.digital/utjuicios/DB/litigantesCDxCUIT/' + CUITparams + '',
                    dataSrc: "",
                    "processing": true,
                    "serverSide": true,
                    async: true
                },
                "autoWidth": false,
                columnDefs: [{
                        targets: 3,
                        render: function(data) {
                            return moment(data).format('L');
                        }
                    }, {
                        targets: 4,
                        render: function(data) {
                            return moment(data).format('L');
                        }
                    }, {
                        bSortable: false,
                        targets: [0, 1, 2, 3, 4, 5, 6]
                    },
                    {
                        "width": "30px",
                        "targets": 0
                    },
                    {
                        "width": "100px",
                        "targets": 1
                    },
                    {
                        "width": "110px",
                        "targets": 2
                    },
                    {
                        "width": "110px",
                        "targets": 3
                    },
                    {
                        "width": "110px",
                        "targets": 4
                    }
                ],
                "columns": [{
                        data: "ID"
                    },
                    {
                        defaultContent: "<div class='text-center'>" +
                            "<div class='btn-group'>" +
                            "<button class='btn btn-warning btn-sm btn_CD_RE_READ'data-toggle='tooltip' data-placement='top' title='Ver: Informacion completa'>" +
                            "<i class='far fa-eye'></i>" +
                            "</button>" +
                            "<button class='btn btn-info btn-sm btn_CD_RE_UPDATE'data-toggle='tooltip' data-placement='top' title='Editar: Datos de Registro'>" +
                            "<i class='fas fa-pencil-alt'></i>" +
                            "</button>" +
                            "<button class='btn btn-danger btn-sm btn_CD_RE_DELETE' data-toggle='tooltip' data-placement='left' title='Borrar Registro'>" +
                            "<i class='fas fa-trash-alt'></i>" +
                            "</button>" +
                            "</div>" +
                            "</div>",
                    },
                    {
                        data: "CUIL"
                    },
                    {
                        data: "FECHAING"
                    },
                    {
                        data: "FECHADOC"
                    },
                    {
                        data: "RECLAMO"
                    },
                    {
                        data: "ESTUDIO"
                    }
                ],
                pageLength: 10,
                lengthMenu: [
                    [10, 20, 50, -1],
                    [10, 20, 50, 'Todos']
                ],
                // "pagingType": "full_numbers",
                "dom": "<'row'<'col-md-6'B><'col-md-6 text-right'l>>" +
                    "<'row'<'col-md-9 text-left'i><'col-md-3'f>>" +
                    "<'row'<'col-md-12't>>" +
                    "<'row'<'col-md-12 text-left'p>>",
                buttons: [{
                        extend: 'copy',
                        text: ' <i class="material-icons text-white align-middle">scanner</i> Copiar al Portapapeles',
                        titleAttr: 'Mantene la copia copia de registro en memoria, y pegado donde se te raje',
                    },
                    {
                        extend: 'excel',
                        text: ' <i class="fas fa-file-excel  text-success align-middle"></i> Excel',
                        titleAttr: 'Descarge un XLS del filtrado realizado',

                        orientation: 'landscape',
                        pageSize: 'A4',
                        // messageTop: nombrearchivo,
                        messageBottom: 'PDF created by ProductiveBrains.com - developed by SJAS.',
                        // title: TituloPDF,
                    },
                    {
                        extend: 'pdfHtml5',
                        text: ' <i class="far fa-file-pdf text-danger align-middle"></i> PDF',
                        titleAttr: 'Abre en una nueva Pestaña el PDF del filtrado realizado',
                    },
                    {
                        extend: 'csv',
                        text: '<i class="fas fa-file-csv text-warning  align-middle"></i> CSV',
                        titleAttr: 'Exporte a Valores separados por Comas',
                    },
                    {
                        text: 'JSON',
                        text: '<i class="fab fa-node-js text-warning align-middle"></i> Json',
                        action: function(e, dt, button, config) {
                            var data = dt.buttons.exportData();

                            $.fn.dataTable.fileSave(
                                new Blob([JSON.stringify(data)]),
                                'Export.json'
                            );
                        },
                        titleAttr: 'Exporte a Formato Json',
                    },
                ],
                "language": {
                    "url": "/json/lenguajedatatables.json"
                },
            });

            tablaContestaciones = $("#tablaContestaciones").DataTable({
                ajax: {
                    url: 'http://sotano.digital/utjuicios/DB/litigantesCOxCUIT/' + CUITparams + '',
                    dataSrc: "",
                    "processing": true,
                    "serverSide": true,
                    async: true
                },
                "autoWidth": false,
                columnDefs: [{
                        targets: 3,
                        render: function(data) {
                            return moment(data).format('L');
                        },
                    }, {
                        targets: 4,
                        render: function(data) {
                            return moment(data).format('L');
                        }
                    }, {
                        bSortable: false,
                        targets: [0, 1, 2, 3, 4, 5, 6]
                    },
                    {
                        "width": "30px",
                        "targets": 0
                    },
                    {
                        "width": "100px",
                        "targets": 1
                    },
                    {
                        "width": "110px",
                        "targets": 2
                    },
                    {
                        "width": "110px",
                        "targets": 3
                    },
                    {
                        "width": "110px",
                        "targets": 4
                    }
                ],
                "columns": [{
                        data: "ID"
                    },
                    {
                        defaultContent: "<div class='text-center'>" +
                            "<div class='btn-group'>" +
                            "<button class='btn btn-warning btn-sm btn_CD_EM_READ'data-toggle='tooltip' data-placement='top' title='Ver: Informacion completa'>" +
                            "<i class='far fa-eye'></i>" +
                            "</button>" +
                            "<button class='btn btn-info btn-sm btn_CD_EM_UPDATE'data-toggle='tooltip' data-placement='top' title='Editar: Datos de Registro'>" +
                            "<i class='fas fa-pencil-alt'></i>" +
                            "</button>" +
                            "<button class='btn btn-danger btn-sm btn_CD_EM_DELETE' data-toggle='tooltip' data-placement='left' title='Borrar Registro'>" +
                            "<i class='fas fa-trash-alt'></i>" +
                            "</button>" +
                            "</div>" +
                            "</div>",
                    },
                    {
                        data: "CUIL"
                    },
                    {
                        data: "FECHAING"
                    },
                    {
                        data: "FECHADOC"
                    },
                    {
                        data: "RECLAMO"
                    },
                    {
                        data: "ESTUDIO"
                    }
                ],
                pageLength: 10,
                lengthMenu: [
                    [10, 20, 50, -1],
                    [10, 20, 50, 'Todos']
                ],
                // "pagingType": "full_numbers",
                "dom": "<'row'<'col-md-6'B><'col-md-6 text-right'l>>" +
                    "<'row'<'col-md-9 text-left'i><'col-md-3'f>>" +
                    "<'row'<'col-md-12't>>" +
                    "<'row'<'col-md-12 text-left'p>>",
                buttons: [{
                        extend: 'copy',
                        text: ' <i class="material-icons text-white align-middle">scanner</i> Copiar al Portapapeles',
                        titleAttr: 'Mantene la copia copia de registro en memoria, y pegado donde se te raje',
                    },
                    {
                        extend: 'excel',
                        text: ' <i class="fas fa-file-excel  text-success align-middle"></i> Excel',
                        titleAttr: 'Descarge un XLS del filtrado realizado',

                        orientation: 'landscape',
                        pageSize: 'A4',
                        // messageTop: nombrearchivo,
                        messageBottom: 'PDF created by ProductiveBrains.com - developed by SJAS.',
                        // title: TituloPDF,
                    },
                    {
                        extend: 'pdfHtml5',
                        text: ' <i class="far fa-file-pdf text-danger align-middle"></i> PDF',
                        titleAttr: 'Abre en una nueva Pestaña el PDF del filtrado realizado',
                    },
                    {
                        extend: 'csv',
                        text: '<i class="fas fa-file-csv text-warning  align-middle"></i> CSV',
                        titleAttr: 'Exporte a Valores separados por Comas',
                    },
                    {
                        text: 'JSON',
                        text: '<i class="fab fa-node-js text-warning align-middle"></i> Json',
                        action: function(e, dt, button, config) {
                            var data = dt.buttons.exportData();

                            $.fn.dataTable.fileSave(
                                new Blob([JSON.stringify(data)]),
                                'Export.json'
                            );
                        },
                        titleAttr: 'Exporte a Formato Json',
                    },
                ],
                "language": {
                    "url": "/json/lenguajedatatables.json"
                },
            });

            tablaAudiencias = $("#tablaAudiencias").DataTable({
                ajax: {
                    url: 'http://sotano.digital/utjuicios/DB/litigantesAUxCUIT/' + CUITparams + '',
                    dataSrc: "",
                    "processing": true,
                    "serverSide": true,
                    async: true
                },
                "autoWidth": false,
                columnDefs: [{
                        targets: 3,
                        render: function(data) {
                            return moment(data).format('L');
                        },
                    }, {
                        targets: 4,
                        render: function(data) {
                            return moment(data).format('L');
                        }
                    },
                    {
                        targets: 6,
                        render: function(data) {
                            return moment(data).format('L');
                        }
                    }, {
                        bSortable: false,
                        targets: [0, 1, 2, 3, 4, 5, 6, 7, 8]
                    },
                    {
                        "width": "30px",
                        "targets": 0
                    },
                    {
                        "width": "100px",
                        "targets": 1
                    },
                    {
                        "width": "110px",
                        "targets": 2
                    },
                    {
                        "width": "110px",
                        "targets": 3
                    },
                    {
                        "width": "110px",
                        "targets": 4
                    },
                    {
                        "width": "110px",
                        "targets": 5
                    },
                    {
                        "width": "110px",
                        "targets": 6
                    }
                ],
                "columns": [{
                        data: "ID"
                    },
                    {
                        defaultContent: "<div class='text-center'>" +
                            "<div class='btn-group'>" +
                            "<button class='btn btn-warning btn-sm btn_AU_VER'data-toggle='tooltip' data-placement='top' title='Ver: Informacion completa'>" +
                            "<i class='far fa-eye'></i>" +
                            "</button>" +
                            "<button class='btn btn-info btn-sm btn_AU_EDITAR'data-toggle='tooltip' data-placement='top' title='Editar: Datos de Registro'>" +
                            "<i class='fas fa-pencil-alt'></i>" +
                            "</button>" +
                            "<button class='btn btn-danger btn-sm btn_AU_BORRAR' data-toggle='tooltip' data-placement='left' title='Borrar Registro'>" +
                            "<i class='fas fa-trash-alt'></i>" +
                            "</button>" +
                            "</div>" +
                            "</div>",
                    },
                    {
                        data: "CUIL"
                    },
                    {
                        data: "FECHAING"
                    },
                    {
                        data: "FECHADOC"
                    },
                    {
                        data: "TIPO"
                    },
                    {
                        data: "FECHAAUDI"
                    },
                    {
                        data: "HORAAUDI"
                    },
                    {
                        data: "COMENTARIO"
                    }
                ],
                pageLength: 10,
                lengthMenu: [
                    [10, 20, 50, -1],
                    [10, 20, 50, 'Todos']
                ],
                // "pagingType": "full_numbers",
                "dom": "<'row'<'col-md-6'B><'col-md-6 text-right'l>>" +
                    "<'row'<'col-md-9 text-left'i><'col-md-3'f>>" +
                    "<'row'<'col-md-12't>>" +
                    "<'row'<'col-md-12 text-left'p>>",
                buttons: [{
                        extend: 'copy',
                        text: ' <i class="material-icons text-white align-middle">scanner</i> Copiar al Portapapeles',
                        titleAttr: 'Mantene la copia copia de registro en memoria, y pegado donde se te raje',
                    },
                    {
                        extend: 'excel',
                        text: ' <i class="fas fa-file-excel  text-success align-middle"></i> Excel',
                        titleAttr: 'Descarge un XLS del filtrado realizado',

                        orientation: 'landscape',
                        pageSize: 'A4',
                        // messageTop: nombrearchivo,
                        messageBottom: 'PDF created by ProductiveBrains.com - developed by SJAS.',
                        // title: TituloPDF,
                    },
                    {
                        extend: 'pdfHtml5',
                        text: ' <i class="far fa-file-pdf text-danger align-middle"></i> PDF',
                        titleAttr: 'Abre en una nueva Pestaña el PDF del filtrado realizado',
                    },
                    {
                        extend: 'csv',
                        text: '<i class="fas fa-file-csv text-warning  align-middle"></i> CSV',
                        titleAttr: 'Exporte a Valores separados por Comas',
                    },
                    {
                        text: 'JSON',
                        text: '<i class="fab fa-node-js text-warning align-middle"></i> Json',
                        action: function(e, dt, button, config) {
                            var data = dt.buttons.exportData();

                            $.fn.dataTable.fileSave(
                                new Blob([JSON.stringify(data)]),
                                'Export.json'
                            );
                        },
                        titleAttr: 'Exporte a Formato Json',
                    },
                ],
                "language": {
                    "url": "/json/lenguajedatatables.json"
                },
            });

            tablaJuicios = $("#tablaJuicios").DataTable({
                ajax: {
                    url: 'http://sotano.digital/utjuicios/DB/litigantesJUxCUIT/' + CUITparams + '',
                    dataSrc: "",
                    "processing": true,
                    "serverSide": true,
                    async: true
                },
                "autoWidth": false,
                columnDefs: [{
                        targets: 3,
                        render: function(data) {
                            return moment(data).format('L');
                        },
                    }, {
                        targets: 4,
                        render: function(data) {
                            return moment(data).format('L');
                        }
                    },
                    {
                        targets: 6,
                        render: function(data) {
                            return moment(data).format('L');
                        }
                    }, {
                        bSortable: false,
                        targets: [0, 1, 2, 3, 4, 5, 6, 7, 8]
                    },
                    {
                        "width": "30px",
                        "targets": 0
                    },
                    {
                        "width": "100px",
                        "targets": 1
                    },
                    {
                        "width": "110px",
                        "targets": 2
                    },
                    {
                        "width": "110px",
                        "targets": 3
                    },
                    {
                        "width": "110px",
                        "targets": 4
                    },
                    {
                        "width": "110px",
                        "targets": 5
                    },
                    {
                        "width": "110px",
                        "targets": 6
                    }
                ],
                "columns": [{
                        data: "ID"
                    },
                    {
                        defaultContent: "<div class='text-center'>" +
                            "<div class='btn-group'>" +
                            "<button class='btn btn-warning btn-sm btn_JU_VER'data-toggle='tooltip' data-placement='top' title='Ver: Informacion completa'>" +
                            "<i class='far fa-eye'></i>" +
                            "</button>" +
                            "<button class='btn btn-info btn-sm btn_JU_EDITAR'data-toggle='tooltip' data-placement='top' title='Editar: Datos de Registro'>" +
                            "<i class='fas fa-pencil-alt'></i>" +
                            "</button>" +
                            "<button class='btn btn-danger btn-sm btn_JU_BORRAR' data-toggle='tooltip' data-placement='left' title='Borrar Registro'>" +
                            "<i class='fas fa-trash-alt'></i>" +
                            "</button>" +
                            "</div>" +
                            "</div>",
                    },
                    {
                        data: "CUIL"
                    },
                    {
                        data: "FECHAING"
                    },
                    {
                        data: "FECHADOC"
                    },
                    {
                        data: "TIPO"
                    },
                    {
                        data: "FECHAJUI"
                    },
                    {
                        data: "HORAJUI"
                    },
                    {
                        data: "COMENTARIO"
                    }
                ],
                pageLength: 10,
                lengthMenu: [
                    [10, 20, 50, -1],
                    [10, 20, 50, 'Todos']
                ],
                // "pagingType": "full_numbers",
                "dom": "<'row'<'col-md-6'B><'col-md-6 text-right'l>>" +
                    "<'row'<'col-md-9 text-left'i><'col-md-3'f>>" +
                    "<'row'<'col-md-12't>>" +
                    "<'row'<'col-md-12 text-left'p>>",
                buttons: [{
                        extend: 'copy',
                        text: ' <i class="material-icons text-white align-middle">scanner</i> Copiar al Portapapeles',
                        titleAttr: 'Mantene la copia copia de registro en memoria, y pegado donde se te raje',
                    },
                    {
                        extend: 'excel',
                        text: ' <i class="fas fa-file-excel  text-success align-middle"></i> Excel',
                        titleAttr: 'Descarge un XLS del filtrado realizado',

                        orientation: 'landscape',
                        pageSize: 'A4',
                        // messageTop: nombrearchivo,
                        messageBottom: 'PDF created by ProductiveBrains.com - developed by SJAS.',
                        // title: TituloPDF,
                    },
                    {
                        extend: 'pdfHtml5',
                        text: ' <i class="far fa-file-pdf text-danger align-middle"></i> PDF',
                        titleAttr: 'Abre en una nueva Pestaña el PDF del filtrado realizado',
                    },
                    {
                        extend: 'csv',
                        text: '<i class="fas fa-file-csv text-warning  align-middle"></i> CSV',
                        titleAttr: 'Exporte a Valores separados por Comas',
                    },
                    {
                        text: 'JSON',
                        text: '<i class="fab fa-node-js text-warning align-middle"></i> Json',
                        action: function(e, dt, button, config) {
                            var data = dt.buttons.exportData();

                            $.fn.dataTable.fileSave(
                                new Blob([JSON.stringify(data)]),
                                'Export.json'
                            );
                        },
                        titleAttr: 'Exporte a Formato Json',
                    },
                ],
                "language": {
                    "url": "/json/lenguajedatatables.json"
                },
            });

        });
    </script>



    <script>
        // BOTONES EN PAGINA
        // STICKY VER DETALLE DE PERSONAS
        $(document).on("click", ".btn_Detalle_Persona", function() {

            $('.modal_Detalle_Persona').modal('show');
            PersonaDetalleRead(CUITparams);
        })

        // AGREGAR CD RECIBIDA -- OK
        $(document).on("click", "#id_btnAddCartaDocumento", function() {
            $('.cl_modal_CD_RE_CREATE').modal('show');
            $('#idMiFormulario').trigger("reset");
            PDFObject.embed("pdf/pdfwait.pdf", "#divPDF", {
                pdfOpenParams: {
                    view: 'Fit'
                }
            });
        })

        // AGREGAR CD EMITIDA
        $(document).on("click", "#id_btnAddContestacion", function() {
            $('.cl_modal_CD_EM_CREATE').modal('show');
            $('#idMiFormulario_CD_EM').trigger("reset");
            PDFObject.embed("pdf/pdfwait.pdf", "#PDF_CONTESTACIONES_CREATE", {
                pdfOpenParams: {
                    view: 'Fit'
                }
            });
        })



        // AGREGAR AUDIENCIA
        $(document).on("click", "#id_btn_Add_Audiencia", function() {
            // alert('disparar modal audiencia');
            $('.cl_modal_CD_AU_CREATE').modal('show');
            $('#idMiFormulario_AU_CREATE').trigger("reset");
            PDFObject.embed("pdf/pdfwait.pdf", "#PDF_AUDIENCIA_CREATE", {
                pdfOpenParams: {
                    view: 'Fit'
                }
            });
        })


        // AGREGAR JUICIO
        $(document).on("click", "#id_btn_Add_Juicio", function() {
            // alert('disparar modal audiencia');
            $('.cl_modal_CD_JU_CREATE').modal('show');
            $('#idMiFormulario_JU_CREATE').trigger("reset");
            PDFObject.embed("pdf/pdfwait.pdf", "#PDF_JUICIO_CREATE", {
                pdfOpenParams: {
                    view: 'Fit'
                }
            });
        })



        //  BOTONES DATATABLE CD RE
        // VER Registro de Carta Documuento Recibida
        $(document).on("click", ".btn_CD_RE_READ", function() {
            ShowMODAL_CDRE(this);
        })
        // EDITAR Registro de Carta Documuento Recibida
        $(document).on("click", ".btn_CD_RE_UPDATE", function() {
            ShowMODAL_CDRE_UPDATE(this);
        })
        // ELIMINAR Registro de Carta Documuento Recibida
        $(document).on("click", ".btn_CD_RE_DELETE", function() {
            Swal.fire({
                title: "Desea Borrar Este Registro",
                html: '<b>esto es irreversible..</b>',
                icon: "question",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Si, BORRARLO!",
                cancelButtonText: "   No, Cancelar!   ",
            }).then((result) => {
                if (result.isConfirmed) {
                    fila = $(this).closest("tr");
                    send_ID = fila.find("td:eq(0)").text();
                    BorrarRegistro(send_ID, 'CARTADOCUMENTO');
                }
            });
        })


        //  BOTONES DATATABLE CD EM
        // VER Registro de Carta Documuento Emitida
        $(document).on("click", ".btn_CD_EM_READ", function() {
            console.log('Lanzar Modal READ');
            ShowMODAL_CDEM(this);
        })
        // EDITAR Registro de Carta Documuento Emitida
        $(document).on("click", ".btn_CD_EM_UPDATE", function() {
            console.log('Lanzar Modal UPDATE');
            ShowMODAL_CDEM_UPDATE(this);
        })
        // ELIMINAR Registro de Carta Documuento Emitida
        $(document).on("click", ".btn_CD_EM_DELETE", function() {
            Swal.fire({
                title: "Desea Borrar Este Registro",
                html: '<b>esto es irreversible..</b>',
                icon: "question",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Si, BORRARLO!",
                cancelButtonText: "   No, Cancelar!   ",
            }).then((result) => {
                if (result.isConfirmed) {
                    fila = $(this).closest("tr");
                    send_ID = fila.find("td:eq(0)").text();
                    BorrarRegistro(send_ID, 'CONTESTACIONES');
                }
            });
        })



        //  BOTONES DATATABLE Audiencias
        // VER Registro de Audiencias
        $(document).on("click", ".btn_AU_VER", function() {
            console.log('Lanzar Modal READ');
            ShowMODAL_AU(this);
        })

        $(document).on("click", ".btn_AU_EDITAR", function() {
            ShowMODAL_AU_UPDATE(this);
        })

        $(document).on("click", ".btn_AU_BORRAR", function() {
            Swal.fire({
                title: "Desea Borrar Este Registro",
                html: '<b>esto es irreversible..</b>',
                icon: "question",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Si, BORRARLO!",
                cancelButtonText: "   No, Cancelar!   ",
            }).then((result) => {
                if (result.isConfirmed) {
                    fila = $(this).closest("tr");
                    send_ID = fila.find("td:eq(0)").text();
                    BorrarRegistro(send_ID, 'AUDIENCIAS');
                }
            });
        })

         //  BOTONES DATATABLE Juicios
        // VER Registro de Juicios
        $(document).on("click", ".btn_JU_VER", function() {
            console.log('Lanzar Modal READ');
            ShowMODAL_JU(this);
        })

        $(document).on("click", ".btn_JU_EDITAR", function() {
            // ShowMODAL_JU_UPDATE(this);
        })

        $(document).on("click", ".btn_JU_BORRAR", function() {
            Swal.fire({
                title: "Desea Borrar Este Registro",
                html: '<b>esto es irreversible..</b>',
                icon: "question",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Si, BORRARLO!",
                cancelButtonText: "   No, Cancelar!   ",
            }).then((result) => {
                if (result.isConfirmed) {
                    fila = $(this).closest("tr");
                    send_ID = fila.find("td:eq(0)").text();
                    BorrarRegistro(send_ID, 'JUICIOS');
                }
            });
        })
    </script>




    <script>
        // Boton Maximizar
        function fullscreenFUNCTION(DIVPDF) {
            var MaximizeDiv = DIVPDF;
            var isInFullScreen = (document.fullscreenElement && document.fullscreenElement !== null) ||
                (document.webkitFullscreenElement && document.webkitFullscreenElement !== null) ||
                (document.mozFullScreenElement && document.mozFullScreenElement !== null) ||
                (document.msFullscreenElement && document.msFullscreenElement !== null);

            if (!isInFullScreen) {
                if (MaximizeDiv.requestFullscreen) {
                    MaximizeDiv.requestFullscreen();
                } else if (elem.mozRequestFullScreen) {
                    MaximizeDiv.mozRequestFullScreen();
                } else if (elem.webkitRequestFullScreen) {
                    MaximizeDiv.webkitRequestFullScreen();
                } else if (elem.msRequestFullscreen) {
                    MaximizeDiv.msRequestFullscreen();
                }
            } else {
                if (document.exitFullscreen) {
                    document.exitFullscreen();
                } else if (document.webkitExitFullscreen) {
                    document.webkitExitFullscreen();
                } else if (document.mozCancelFullScreen) {
                    document.mozCancelFullScreen();
                } else if (document.msExitFullscreen) {
                    document.msExitFullscreen();
                }
            }
        }
        // Deshabilitar elementos del formulario parametro a recibir (true/false)
        function toggleFormElements(bDisabled) {
            var inputs = document.getElementsByTagName("input");
            for (var i = 0; i < inputs.length; i++) {
                inputs[i].disabled = bDisabled;
            }
            var selects = document.getElementsByTagName("select");
            for (var i = 0; i < selects.length; i++) {
                selects[i].disabled = bDisabled;
            }
            var textareas = document.getElementsByTagName("textarea");
            for (var i = 0; i < textareas.length; i++) {
                textareas[i].disabled = bDisabled;
            }
        }
        // FUNCIONES COMUNES 
        function BorrarRegistro(id, tabla) {
            const parametros = JSON.stringify({
                id: id,
                tabla: tabla
            })
            fetch('DB/CD_DLT/' + parametros + '')
                .then(res => res.json())
                .then(json => {
                    Swal.fire(
                        "ARCHIVO BORRADO"
                    );
                    tablaCartaDocumento.ajax.reload(null, false);
                    tablaContestaciones.ajax.reload(null, false);
                    tablaAudiencias.ajax.reload(null, false);
                    tablaJuicios.ajax.reload(null, false);
                });
        };
        // Cuandp se Pulsa El boton Examinar para cambiar la Previsualizacion del PDF
        function file_changed_PDFViewer(IddelDiv) {
            PDFObject.embed(URL.createObjectURL(event.target.files[0]), `#${IddelDiv}`, options);
            console.log(event.target.files[0]);

        };
    </script>


    <script src="/js/funcionfechas.js"></script>

    <script src="js/divPDFscript.js"></script>

    <?php include("partials/_footer.php") ?>

</body>

</html>