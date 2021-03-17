const express = require ('express');
const router = express.Router();


const personasController = require('../controllers/personasController');


//Escribimos todas nuestras URL
router.get('/', personasController.principal);

router.get('/list_personas', personasController.listar);
router.get('/createpersona', personasController.createpersona);

//API PERSONAS
router.get('/api/personas', personasController.apiPersona)
router.post('/api/litigantesiono',personasController.apiPersonaLitigantesiono)


//Operaciones Crud con Base de datos
router.post('/saveNewPerson', personasController.saveNewPerson);


//Paginas Generales
router.get('/resumen', personasController.mostrarResumen);



module.exports = router;

