const express = require ('express');
const router = express.Router();


const personasController = require('../controllers/personasController');


//Escribimos todas nuestras URL ( PAGINAS)
router.get('/', personasController.principal);
router.get('/list_Personas', personasController.listarPersonas);
router.get('/list_Litigantes', personasController.listarLitigantes);
//Pagina de Muestreo
router.get('/litigantes_Docs/', personasController.litigantesDocs);
//Filtrado de Documentos por CUIL
router.get('/litigantesCDxCUIT/:cuit', personasController.litigantesCDxCUIT);
router.get('/litigantesCOxCUIT/:cuit', personasController.litigantesCOxCUIT);
router.get('/litigantesAUxCUIT/:cuit', personasController.litigantesAUxCUIT);


router.get('/personasDetalle/:cuit', personasController.personasDetalle );


//API PERSONAS
router.get('/api/personas', personasController.apiPersona);
router.get('/api/litigantes', personasController.apiLitigantes);
//Cambio de Estado
router.post('/api/litigantesiono',personasController.apiPersonaLitigantesiono);


router.get('/createpersona', personasController.createpersona);





// Esperar
router.get('/litigantes_CreateAudiencia', personasController.CreateAudiencia);







//Operaciones Crud con Base de datos
router.post('/saveNewPerson', personasController.saveNewPerson);

//Paginas Generales



module.exports = router;

