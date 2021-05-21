<style>
    /* Modal Content */
    .modal-content-Detalle-Pesona-pb {
        position: relative;
        /* background-color: #6a946a !important; */
        margin: auto;
        padding: 0;
        border: 1px solid #888;
        width: 80%;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        -webkit-animation-name: animatetop;
        -webkit-animation-duration: 0.4s;
        animation-name: animatetop;
        animation-duration: 0.4s
    }

    .modal-content {
        background-color: #b3b8b3;
    }

    .caja {
        border-radius: 10px;
        box-shadow: 2px 2px 2px 1px rgba(73, 189, 232, 0.9);
    }

    .caja:hover {
        border-radius: 10px;
        box-shadow: 2px 2px 2px 1px rgba(250, 238, 72, 0.9);
    }

    .pb-CardHeader {
        border-radius: 10px 10px 0 0;
        padding-left: 10px;
        padding-top: 5px;
        padding-bottom: 5px
    }

    .pb-bg-Detalle-Pesona {
        background: rgb(5, 32, 82);
        background: linear-gradient(0deg, rgba(5, 32, 82, 1) 0%, rgb(41, 39, 172) 67%, rgb(116, 167, 245) 100%);
        color: white;
    }

    .pb-btnFooter {
        border-radius: 5px;
    }

    .pb-btnFooter:hover {
        border-radius: 10px;
        color: rgba(242, 255, 4, 0.9);
        box-shadow: 2px 2px 2px 1px rgba(73, 189, 232, 0.9);
        font-weight: bold;
    }

    .modal-header-Detalle-Pesona-pb {
        padding-left: 20px;
        padding-bottom: 10px;
    }

    .modal-body-Detalle-Pesona-pb {
        padding: 2px 16px;
    }

    .modal-footer-Detalle-Pesona-pb {
        padding-top: 10px;
        padding-bottom: 10px;
        padding-right: 20px;
    }
</style>



<div class="modal fade modal_Detalle_Persona" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" style="max-width: 90%!important;margin-top:2px!important;" role="document">
        <div class="modal-content caja">
            <div class="modal-header-Detalle-Pesona-pb pb-bg-Detalle-Pesona pb-CardHeader">
                <h5 style="margin:0;color: rgb(255, 255, 255)" id="cl-cuil">Detalles de C.U.I.L. :
                    <span class="demo-class-cuil">xxx</span> - <span class="demo-class-apenom">yyy</span>
                </h5>
            </div>
            <br>
            <div class="modal-body-Detalle-Pesona-pb  card-content">
                <div class="container">
                    <div class="row mb-2" style="flex-wrap:wrap;">
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">

                            <div class="form-row">
                                <div class=" col-6">
                                    <label for="apellido">Apellido</label>
                                    <input type="text" class="form-control" id="apellido">
                                </div>
                                <div class=" col-6">
                                    <label for="nombre">Nombre</label>
                                    <input type="text" class="form-control" id="nombre">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class=" col-2">
                                    <label for="legajo">Legajo</label>
                                    <input type="text" class="form-control" id="legajo">
                                </div>
                                <div class=" col-5">
                                    <label for="CUIL">C.U.I.L.</label>
                                    <input type="text" class="form-control" id="CUIL">
                                </div>
                                <div class="col-5">
                                    <label for="DNI">D.N.I.</label>
                                    <input type="text" class="form-control" id="DNI">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class=" col-3">
                                    <label for="funcion">Funcion</label>
                                    <input type="text" class="form-control" id="funcion">
                                </div>
                                <div class=" col-6">
                                    <label for="sector">Sector</label>
                                    <input type="text" class="form-control" id="sector">
                                </div>
                                <div class=" col-3">
                                    <label for="inicio">Inicio</label>
                                    <input type="text" class="form-control" id="inicio">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-3">
                                    <label for="iniciocovid">Inicio Covid</label>
                                    <input type="text" class="form-control" id="iniciocovid">
                                </div>
                                <div class="col-3">
                                    <label for="condicion">Condicion</label>
                                    <input type="text" class="form-control" id="condicion">
                                </div>
                                <div class="col-6">
                                    <label for="localidad">Localidad</label>
                                    <input type="text" class="form-control" id="localidad">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-4">
                                    <label for="provincia">Provincia</label>
                                    <input type="text" class="form-control" id="provincia">
                                </div>
                                <div class="col-4">
                                    <label for="barrio">Barrio</label>
                                    <input type="text" class="form-control" id="barrio">
                                </div>
                                <div class="col-4">
                                    <label for="calle">Calle</label>
                                    <input type="text" class="form-control" id="calle">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-3">
                                    <label for="numero">Num</label>
                                    <input type="text" class="form-control" id="numero">
                                </div>
                                <div class="col-3">
                                    <label for="piso">Piso</label>
                                    <input type="text" class="form-control" id="piso">
                                </div>
                                <div class="col-3">
                                    <label for="depto">Depto</label>
                                    <input type="text" class="form-control" id="depto">
                                </div>
                                <div class="col-3">
                                    <label for="codpostal">Cod.Postal</label>
                                    <input type="text" class="form-control" id="codpostal">
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <div class="form-row">
                                <div class=" col-4">
                                    <label for="telcasa">Tel. Casa</label>
                                    <input type="text" class="form-control" id="telcasa">
                                </div>
                                <div class=" col-4">
                                    <label for="telcelular">Tel. Celular</label>
                                    <input type="text" class="form-control" id="telcelular">
                                </div>
                                <div class=" col-4">
                                    <label for="nacimiento">Fecha Nac.</label>
                                    <input type="text" class="form-control" id="nacimiento">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-6">
                                    <label for="nacionalidad">Nacionalidad</label>
                                    <input type="text" class="form-control" id="nacionalidad">
                                </div>
                                <div class="col-6">
                                    <label for="estadocivil">Estado Civil</label>
                                    <input type="text" class="form-control" id="estadocivil">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-6">
                                    <label for="cbu">C.B.U.</label>
                                    <input type="text" class="form-control" id="cbu">
                                </div>
                                <div class="col-6">
                                    <label for="fode">Fondo de Desempleo</label>
                                    <input type="text" class="form-control" id="fode">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-4">
                                    <label for="altaafip">Alta Afip</label>
                                    <input type="text" class="form-control" id="altaafip">
                                </div>
                                <div class="col-4">
                                    <label for="categoria">Categoria</label>
                                    <input type="text" class="form-control" id="categoria">
                                </div>
                                <div class="col-4">
                                    <label for="convenio">Convenio</label>
                                    <input type="text" class="form-control" id="convenio">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-8">
                                    <label for="obrasocial">Obra Social</label>
                                    <input type="text" class="form-control" id="obrasocial">
                                </div>
                                <div class="col-4">
                                    <label for="judiciales">Judiciales</label>
                                    <input type="text" class="form-control" id="judiciales">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-4">
                                    <label for="fechadebaja">Fecha de baja</label>
                                    <input type="text" class="form-control" id="fechadebaja">
                                </div>
                                <div class="col-8">
                                    <label for="metododebaja">Metodo de baja</label>
                                    <input type="text" class="form-control" id="metododebaja">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>


            <div class="modal-footer-Detalle-Pesona-pb d-flex align-items-center justify-content-end" style="text-align: right;background-color: #212121;height:55px;border-radius: 0 0 10px 10px ;">
                <button type="button" class="btn btn-secondary" data-dismiss="modal" style="background-color: #0D47A1;color:white;margin-left:10px;">
                    <i class="material-icons right  pbicon1">cancel</i>
                    CERRAR
                </button>
            </div>
        </div>
    </div>
</div>

<script>
    function PersonaDetalleRead(cuitrecibido) {

        // Deshabilitar todos los inputs (true)habilitar(false)
        // cuitrecibido=20114004252;
        toggleFormElements(true);
        $.ajax({
            url: 'http://sotano.digital/utjuicios/DB/detail_Persona/' + cuitrecibido + '',
            dataType: 'json',
            success: function(data) {
                console.log(data);
                console.log(data[0].inicio);

                // if (data[0].nacimiento === null) {
                //     $("#nacimiento").val('');
                // } else {
                //     $("#nacimiento").val(new Date(data[0].nacimiento).toISOString()
                //         .substring(0, 10));
                // };

                // if (data[0].altaafip === null) {
                //     $("#altaafip").val('');
                // } else {
                //     $("#altaafip").val(new Date(data[0].altaafip).toISOString()
                //         .substring(0, 10));
                // };

                // if (data[0].inicio === null) {
                //     $("#inicio").val('');
                // } else {
                //     $("#inicio").val(new Date(data[0].inicio).toISOString().substring(0,
                //         10));
                // };

                // if (data[0].iniciocovid === null) {
                //     $("#iniciocovid").val('');
                // } else {
                //     $("#iniciocovid").val(new Date(data[0].iniciocovid).toISOString()
                //         .substring(0, 10));
                // };
                if (data[0].nacimiento === null) {
                    $("#nacimiento").val('');
                } else {
                    $("#nacimiento").val(data[0].nacimiento);
                };

                if (data[0].altaafip === null) {
                    $("#altaafip").val('');
                } else {
                    $("#altaafip").val(data[0].altaafip);
                };

                if (data[0].inicio === null) {
                    $("#inicio").val('');
                } else {
                    $("#inicio").val(data[0].inicio);
                };

                if (data[0].iniciocovid === null) {
                    $("#iniciocovid").val('');
                } else {
                    $("#iniciocovid").val(data[0].iniciocovid);
                };

                $("#idcode").val(data[0].idcode);
                $("#legajo").val(data[0].legajo);
                $("#idcode").val(data[0].idcode);
                $("#CUIL").val(data[0].CUIL);
                $("#DNI").val(data[0].DNI);
                $("#apellido").val(data[0].apellido);
                $("#nombre").val(data[0].nombre);
                $("#funcion").val(data[0].funcion);
                $("#sector").val(data[0].sector);
                $("#condicion").val(data[0].condicion);
                $("#localidad").val(data[0].localidad);
                $("#provincia").val(data[0].provincia);
                $("#barrio").val(data[0].barrio);
                $("#calle").val(data[0].calle);
                $("#numero").val(data[0].numero);
                $("#piso").val(data[0].piso);
                $("#depto").val(data[0].depto);
                $("#domolavarria").val(data[0].domolavarria);
                $("#codpostal").val(data[0].codpostal);
                $("#telcasa").val(data[0].telcasa);
                $("#telcelular").val(data[0].telcelular);
                $("#nacionalidad").val(data[0].nacionalidad);
                $("#estadocivil").val(data[0].estadocivil);
                $("#cbu").val(data[0].cbu);
                $("#fode").val(data[0].fode);
                $("#categoria").val(data[0].categoria);
                $("#convenio").val(data[0].convenio);
                $("#obrasocial").val(data[0].obrasocial);
                $("#judiciales").val(data[0].judiciales);
                $("#fechadebaja").val(data[0].Fecha_de_baja);
                $("#metododebaja").val(data[0].Metodo_de_baja);

                // Apellido y CUIL en HEADER del modal
                $("#demo-class-cuil").val(data[0].apellido);
                const demoClasses = document.querySelectorAll('.demo-class-cuil');
                demoClasses.forEach(element => {
                    element.textContent = data[0].CUIL;
                });
                const demoClasses1 = document.querySelectorAll('.demo-class-apenom');
                demoClasses1.forEach(element => {
                    element.textContent = data[0].apellido + ' ' + data[0].nombre;
                });
            }
        });


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
        // var buttons = document.getElementsByTagName("button");
        // for (var i = 0; i < buttons.length; i++) {
        //     buttons[i].disabled = bDisabled;
        // }
    }
    $('.modal_Detalle_Persona').on('hidden.bs.modal', function() {
        toggleFormElements(false);
    })
</script>