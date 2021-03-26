// Este archivo ejecuta todo el servidor

const express = require('express');
const path = require('path');
const morgan = require('morgan');
const mysql = require('mysql');
const myConnection = require('express-myconnection');

const multer = require('multer');
const { uuid } = require('uuidv4');

const storage = multer.diskStorage({
    destination: path.join(__dirname, 'public/uploads'),
    filename: (req, file, cb) => {
        cb(null, uuid() + path.extname(file.originalname));
    }
})



const app = express();

//Importando rutas
const personasRoutes = require('./routes/personasRouter');

//Setting
app.set('port', process.env.PORT || 3500);
app.set('view engine', 'ejs');
app.set('views', path.join(__dirname, 'views'));



//Middlewares
app.use(morgan('dev'));
app.use(myConnection(mysql, {
    host: '190.106.132.189',
    user: 'root',
    password: 'blackmagic',
    port: 3306,
    database: 'UTJUICIOS'
}, 'single'));
app.use(express.urlencoded({ extends: false }));//permite entender los datos que vienen de formulario
app.use(express.json());//escucho jsons

app.use(multer({
    storage,
    dest: path.join(__dirname, 'public/uploads')
}).single('archivoupload'));//escucho jsons



//Routes
app.use('/', personasRoutes);
app.get('/test2', (req, res) => {
    res.render('audiencia_Create');
});
app.get('/pdftest', (req, res) => {
    res.render('pdftest');
});
app.post('/test1recibo', (req, res) => {
    console.log(req.file);
    // console.log(req.body);

    // console.log(req.body['ID']);
    // console.log(req.body['CUIL']);
      
    console.log(req.body.aver);
    console.log(req.body.idFechaEmision[0]);
    console.log(req.body.idFechaAudiencia[0]);
    console.log(req.body.idHora[0]);
    console.log(req.body.idTipoReclamo[0]);
    console.log(req.body.idComentario[0]);
    console.log(req.body.idCartellone[0]);

    res.send('Nombre del archivo: ' + req.file.filename);
});




// static files
app.use(express.static(path.join(__dirname, 'public')));
//Iniciando el servidor
app.listen(app.get('port'), () => {
    console.log('Servidor activo en puerto 3500');
});

