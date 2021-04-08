const express = require ('express');
const routerupload = express.Router();
const UPLOAD_Controller = require('../controllers/uploadController.js');




routerupload.post('/CD_RE', UPLOAD_Controller.Create_CD_RE);
routerupload.put('/CD_RE', UPLOAD_Controller.Update_CD_RE);


routerupload.post('/CD_EM', UPLOAD_Controller.Create_CD_EM);



















module.exports = routerupload;