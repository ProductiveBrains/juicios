    <!-- Modales -->
    <?php include ("READmodules/modal_personas_Detalle.php") ?>




    <div class="container mt-3" id="cuerpo">
        <div class="row mb-2">
            <div class="col-12">
                <h3 class="text-info">Listado de Personas </h3>
            </div>
        </div>
        <div class="row animated flipInY">
            <div class="col-12 py-3" style="background-color: #D3D3D5;">
                <table id="tablaPersonal" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
                    <thead>
                        <tr>
                            <th>Acciones</th>
                            <th>CUIL</th>
                            <th>Apellido</th>
                            <th>Nombre</th>
                            <th>Localidad</th>
                            <th>Judiciales</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>

    </div>

    <!-- Style of DATATABLE -->
    <style>
        td {
            padding: 0.2em 0.2em !important;
        }

        label {
            color: #212529 !important;
        }

        td,
        th {
            padding: 15px 5px;
            display: table-cell;
            text-align: center;
            vertical-align: middle;
            border-radius: 2px;
        }

        .bg-mirage {
            background: #16222a;
            background: -webkit-linear-gradient(to right, #3a6073, #16222a);
            background: linear-gradient(to right, #3a6073, #16222a);
        }

        .bg-fondodatatable {
            background-color: #f3f3f3;
        }

        table#tablaPersonal.dataTable thead:hover {
            background-color: #ffa;
        }

        table#tablaPersonal.dataTable td:hover {
            background-color: #ffa;
        }

        table#tablaPersonal.dataTable tr:hover {
            background-color: rgb(176, 239, 253);
        }
    </style>


    <!-- DATATABLE LISTA DE PERSONAS -->
    <script>
        $(document).ready(function() {

            // document.getElementById('navlink_personas').style.color = 'YELLOW';

            tablaPersonal = $("#tablaPersonal").DataTable({
                ajax: {
                    url: `http://sotano.digital/utjuicios/DB/all_Personas`,
                    dataSrc: "",
                    "processing": true,
                    "serverSide": true,
                    async: true
                },
                "columns": [{
                        defaultContent: "<div class='text-center'>" +
                            "<div class='btn-group'>" +
                            "<button class='btn btn-warning btn-sm btnHacerLitigante mr-3'data-toggle='tooltip' data-placement='top' title='Agregar a Lista de Litigantes'>" +
                            "<i class='fas fa-balance-scale-right'></i>" +
                            "</button>" +
                            "<button class='btn btn-primary btn-sm btnView ml-1'data-toggle='tooltip' data-placement='top' title='Ver: Informacion completa'>" +
                            "<i class='far fa-eye'></i>" +
                            "</button>" +
                            // "<button class='btn btn-info btn-sm btnEditar ml-1 mr-3'data-toggle='tooltip' data-placement='top' title='Editar: Datos de Persona'>" +
                            // "<i class='fas fa-pencil-alt'></i>" +
                            // "</button>" +
                            // "<button class='btn btn-danger btn-sm btnBorrar' data-toggle='tooltip' data-placement='left' title='Borrar Persona'>" +
                            // "<i class='fas fa-trash-alt'></i>" +
                            // "</button>" +
                            "</div>" +
                            "</div>",
                    },
                    {
                        data: "CUIL"
                    },
                    {
                        data: "apellido"
                    },
                    {
                        data: "nombre"
                    },
                    {
                        data: "localidad"
                    },
                    {
                        data: "judiciales"
                    },
                ],
                pageLength: 5,
                lengthMenu: [
                    [5, 10, 20, 50, -1],
                    [5, 10, 20, 50, 'Todos']
                ],
                "pagingType": "full_numbers",
                "dom": "<'row'<'col-md-6'B><'col-md-6 text-right'lf>>" +
                    "<'row'<'col-md-9 text-left'i><'col-md-3'>>" +
                    "<'row'<'col-md-12't>><'row'<'col-md-12'p>>",
                buttons: [{
                        extend: 'copy',
                        text: ' <i class="material-icons align-middle">scanner</i> Copiar al Portapapeles',
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
        })
    </script>

    <!-- BOTONES -->
    <script>
        //AGREGAR LITIGANTE
        $(document).on("click", ".btnHacerLitigante", function() {
            // console.log("Litigante Activo");
            fila = $(this).closest("tr");
            cuil = fila.find("td:eq(1)").text();
            apellido = fila.find("td:eq(2)").text();
            nombre = fila.find("td:eq(3)").text();

            Swal.fire({
                title: "Confirma a esta persona como Litigante?",
                text: apellido + " " + nombre + " - C.U.I.L.: " + cuil,
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Si, es Litigante!",
                cancelButtonText: "No, Cancelar!",
            }).then((result) => {
                if (result.isConfirmed) {

                    $.ajax({
                        url: `DB/Update_Judiciales`,
                        type: "POST",
                        datatype: "json",
                        async: true,
                        data: {
                            CUIL: cuil,
                            VALOR: "SI"
                        },
                        success: function() {
                            // console.log("disparar reload de datatable");
                            tablaPersonal.ajax.reload(null, false);
                        }
                    });
                    Swal.fire(
                        apellido + " " + nombre + " - C.U.I.L.: " + cuil,
                        "Ha sido agregado al Listado de Litigantes.",
                        "success"
                    );
                    // CntDocNAVBAR(); ver si funciona el reload
                    // tablaPersonal.ajax.reload(null, false);
                }
            });

        });

        // VER DETALLE PERSONA
        $(document).on("click", ".btnView", function() {
            fila = $(this).closest("tr");
            cuil = fila.find("td:eq(1)").text();
            $('.modal_Detalle_Persona').modal('show');
            PersonaDetalleRead(cuil);
        });
    </script>