<div class="container mt-3" id="cuerpo">
    <div class="row mb-2">
        <div class="col-12">
            <h3 class="text-warning text-uppercase">Listado Litigantes </h3>
        </div>
    </div>
    <div class="row animated flipInY">
        <div class="col-12 py-3" style="background-color: #D3D3D5;">
            <!-- <table id="tablaLitigantes" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%"> -->
            <table id="tablaLitigantes" class="display responsive nowrap table-bordered table-striped" width="100%">
                <thead>
                    <tr>
                        <th style="padding-left: 90px;">CUIL</th>
                        <th style="width: 50px;">Acciones</th>
                        <th style="width: 140px;">Apellido</th>
                        <th style="width: 140px;">Nombre</th>
                        <th style="width: 140px;">Localidad</th>
                        <th style="width: 140px;">Judiciales</th>
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

    table#tablaLitigantes.dataTable thead:hover {
        background-color: #ffa;
    }

    table#tablaLitigantes.dataTable td:hover {
        background-color: #ffa;
    }

    table#tablaLitigantes.dataTable tr:hover {
        background-color: rgb(176, 239, 253);
    }
</style>


<!-- DATATABLE LISTA DE PERSONAS -->
<script>
    $(document).ready(function() {
        tablaLitigantes = $("#tablaLitigantes").DataTable({
            ajax: {
                url: `http://sotano.digital/utjuicios/DB/all_Litigantes`,
                dataSrc: "",
                "processing": true,
                "serverSide": true,
                async: true
            },
            "columns": [{
                    data: "CUIL"
                },
                {
                    defaultContent: "<div class='text-center'>" +
                        "<div class='btn-group'>" + // VER POSICION DE TOOLTIP LEFT NO FUNCIONA
                        "<button class='btn btn-success btn-sm btnDocumentos mr-3' data-toggle='tooltip' data-placement='left' title='Visualizar Documentos'>" +
                        "<i class='far fa-folder-open'></i>" +
                        "</button>" +
                        "<button class='btn btn-warning btn-sm btnQuitarLitigante mr-3' data-toggle='tooltip' data-placement='right' title='Deshacer Litigio'>" +
                        "<i class='fas fa-undo-alt'></i>" +
                        "</button>" +
                        "<button class='btn btn-primary btn-sm btnView' data-toggle='tooltip' data-placement='top' title='Ver: Informacion completa'>" +
                        "<i class='far fa-eye'></i>" +
                        "</button>" +
                        "</div>" +
                        "</div>",
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
            // "pagingType": "full_numbers",
            "dom": "<'row'<'col-md-12 text-left'f>>" +
                "<'row'<'col-md-12't>><'row'<'col-md-12'p>>" +
                "<'row'<'col-md-12'i>>" +
                "<'row'<'col-md-6 text-left'l><'col-md-6 text-right'B>>",
            buttons: [{
                    extend: 'excel',
                    text: ' <i class="fas fa-file-excel  text-success align-middle"></i> Excel',
                    titleAttr: 'Descarge un XLS del filtrado realizado',

                    orientation: 'landscape',
                    pageSize: 'A4',
                    messageTop: 'Personal Litigante',
                    messageBottom: 'PDF created by ProductiveBrains.com - developed by SJAS.',
                    title: 'Personal Litigante',
                },
                {
                    extend: 'pdfHtml5',
                    text: ' <i class="far fa-file-pdf text-danger align-middle"></i> PDF',
                    titleAttr: 'Abre en una nueva Pestaña el PDF del filtrado realizado',
                    title: 'Personal Litigante',
                    messageTop: 'Personal Litigante',
                    messageBottom: 'PDF created by ProductiveBrains.com - developed by SJAS.',
                }
            ],
            "language": {
                "url": "json/lenguajedatatables.json"
            },
        });
    })
</script>

<!-- BOTONES   BORRRAR y PONER LOS BOTONES QUE CORRESPONDEN -->
<script>
    //AGREGAR LITIGANTE
    $(document).on("click", ".btnQuitarLitigante", function() {
        // console.log("Litigante Activo");
        fila = $(this).closest("tr");
        cuil = fila.find("td:eq(0)").text();
        apellido = fila.find("td:eq(2)").text();
        nombre = fila.find("td:eq(3)").text();

        Swal.fire({
            title: "Desea quitar a esta persona como Litigante?",
            text: apellido + " " + nombre + " - C.U.I.L.: " + cuil,
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Si, No es Litigante!",
            cancelButtonText: "No, Cancelar!",
        }).then((result) => {
            if (result.isConfirmed) {

                $.ajax({
                    url: `http://sotano.digital/utjuicios/DB/Update_Judiciales`,
                    type: "POST",
                    datatype: "json",
                    async: true,
                    data: {
                        CUIL: cuil,
                        VALOR: "NO"
                    },
                    success: function() {
                        tablaPersonal.ajax.reload();
                        tablaLitigantes.ajax.reload();
                        reloadgrafico();
                    }
                });
                Swal.fire(
                    apellido + " " + nombre + " - C.U.I.L.: " + cuil,
                    "Ha sido quitado del Listado de Litigantes.",
                    "success"
                );
            }
        });

    });
</script>