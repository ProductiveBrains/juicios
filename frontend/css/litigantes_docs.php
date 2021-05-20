<style>
.boxtitulo {
  border-radius: 20px;
  background: #0f0c29;
  /* fallback for old browsers */
  background: -webkit-linear-gradient(to bottom, #24243e, #302b63, #0f0c29);
  /* Chrome 10-25, Safari 5.1-6 */
  background: linear-gradient(to bottom, #24243e, #302b63, #0f0c29);
  /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

  position: sticky;
  top: 10px;
  border: 2px solid #000000;
  display: inline-block;
  z-index: 10;

  -webkit-box-shadow: 0px 10px 20px 5px rgba(131, 204, 252, 1);
  -moz-box-shadow: 0px 10px 20px 5px rgba(131, 204, 252, 1);
  box-shadow: 0px 10px 20px 5px rgba(131, 204, 252, 1);
}

.pbicon1 {
  vertical-align: middle;
  margin-right: 5px;
}

.pbbotonfloat {
  float: right;
  position: absolute;
  top: -2px;
  right: 10px;
}

.pbbotonVolver {
  float: right;
  position: absolute;
  top: 30px;
  right: 10px;
}

.btn-secondary {
  color: #fff;
  background-color: #084e8c;
  border-color: #000;
}

/* CSS TITULO STICKY */
.btn_Detalle_Persona {
  cursor: pointer;
  color: yellow;
}

.btn_Detalle_Persona:hover {
  color: red;
}

/* CSS DATATABLES  */
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

table#tablaCartaDocumento.dataTable thead:hover,
table#tablaContestaciones.dataTable thead:hover,
table#tablaAudiencias.dataTable thead:hover {
  background-color: #ffa;
}

table#tablaCartaDocumento.dataTable td:hover,
table#tablaContestaciones.dataTable td:hover,
table#tablaAudiencias.dataTable td:hover {
  background-color: #ffa;
}

table#tablaCartaDocumento.dataTable tr:hover,
table#tablaContestaciones.dataTable tr:hover,
table#tablaAudiencias.dataTable tr:hover {
  background-color: rgb(176, 239, 253);
}
</style>