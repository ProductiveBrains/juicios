const express = require ('express');
const router = express.Router();


const personasController = require('../controllers/personasController');


router.get('/', personasController.principal);
// QUERY TO DB TO FILL DATATABLES
router.get('/View_ListaPersonas', personasController.View_ListaPersonas);
router.get('/Query_Select_ListaPersonas', personasController.Query_Select_ListaPersonas);

router.get('/View_ListaLitigantes', personasController.View_ListaLitigantes);
router.get('/Query_Select_ListaLitigantes', personasController.Query_Select_ListaLitigantes);

//Cambio de Estado
router.post('/Query_Update_Judiciales',personasController.Query_Update_Judiciales);

//Pagina de Muestreo(Scope - list_Listigantes)
router.get('/View_Litigantes_Docs/', personasController.View_Litigantes_Docs);

//************************************************************************************************* */
//Filtrado de Documentos por CUIL
router.get('/litigantesCDxCUIT/:cuit', personasController.litigantesCDxCUIT);
router.get('/litigantesCOxCUIT/:cuit', personasController.litigantesCOxCUIT);
router.get('/litigantesAUxCUIT/:cuit', personasController.litigantesAUxCUIT);

//************************************************************************************************* */


//************************************************************************************************* */
//Pagina de Muestreo(Scope - list_Listigantes / litigantes_Docs  / list_Personas)
router.get('/Query_Select_CUIL_Personas/:cuit', personasController.Query_Select_CUIL_Personas );








router.get('/createpersona', personasController.createpersona);





// Esperar
router.get('/litigantes_CreateAudiencia', personasController.CreateAudiencia);







//Operaciones Crud con Base de datos
router.post('/saveNewPerson', personasController.saveNewPerson);

//Paginas Generales



module.exports = router;

