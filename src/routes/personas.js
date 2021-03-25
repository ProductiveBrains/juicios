const express = require ('express');
const router = express.Router();


const personasController = require('../controllers/personasController');


//Escribimos todas nuestras URL
router.get('/', personasController.principal);

router.get('/list_Personas', personasController.listarPersonas);
router.get('/list_Litigantes', personasController.listarLitigantes);
router.get('/litigantes_Docs', personasController.litigantesDocs)

router.get('/litigantesCDxCUIT/:cuit', personasController.litigantesCDxCUIT)
router.get('/litigantesCOxCUIT/:cuit', personasController.litigantesCOxCUIT)
// router.get('/createpersona', personasController.createpersona);

router.get('/litigantes_CreateAudiencia', personasController.CreateAudiencia);




//API PERSONAS
router.get('/api/personas', personasController.apiPersona);
router.get('/api/litigantes', personasController.apiLitigantes);
router.post('/api/litigantesiono',personasController.apiPersonaLitigantesiono);


//Operaciones Crud con Base de datos
router.post('/saveNewPerson', personasController.saveNewPerson);

//Paginas Generales



module.exports = router;

