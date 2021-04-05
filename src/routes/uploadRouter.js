const express = require ('express');
const routerupload = express.Router();
const UPLOAD_Controller = require('../controllers/uploadController.js');




routerupload.post('/CD_RE', UPLOAD_Controller.recibo_CD_RE);


















module.exports = routerupload;