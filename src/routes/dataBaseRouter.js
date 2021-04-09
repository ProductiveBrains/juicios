const express = require ('express');
const routerdataBase = express.Router();

const DB_Controller = require('../controllers/dataBaseController.js');


routerdataBase.get('/all_Personas', DB_Controller.Query_Select_ListaPersonas);
routerdataBase.get('/all_Litigantes', DB_Controller.Query_Select_ListaLitigantes);
routerdataBase.get('/detail_Persona/:cuit', DB_Controller.PersonaByCUIL);

//Filtrado de Documentos por CUIL
routerdataBase.get('/litigantesCDxCUIT/:cuit', DB_Controller.litigantesCDxCUIT);
routerdataBase.get('/litigantesCOxCUIT/:cuit', DB_Controller.litigantesCOxCUIT);
routerdataBase.get('/litigantesAUxCUIT/:cuit', DB_Controller.litigantesAUxCUIT);

//Cambio de Estado
routerdataBase.post('/Update_Judiciales', DB_Controller.Update_Judiciales);

//Mostrar Carta documento Recibida x Usuario
routerdataBase.get('/CD_RE_CUIL/:parametros', DB_Controller.cd_re_cuil);

//Mostrar Carta documento Recibida x Usuario
routerdataBase.get('/CD_EM_CUIL/:parametros', DB_Controller.cd_em_cuil);


// Borrar registro
routerdataBase.get('/CD_DLT/:parametros', DB_Controller.CD_DLT);


//Consultas para graficas Status

routerdataBase.get('/RES_DOCS', DB_Controller.res_docs);

routerdataBase.get('/RES_RECLAMOS', DB_Controller.res_reclamos);



module.exports = routerdataBase;