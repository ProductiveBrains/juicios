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
        cb(null, file.originalname.split('.').slice(0, -1).join('.')+'__' + uuid() + path.extname(file.originalname));
    }
})



const app = express();

//Importando rutas
const viewsRouter = require('./routes/viewsRouter');
const dataBaseRouter = require('./routes/dataBaseRouter');
const uploadRouter = require('./routes/uploadRouter');


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
    dest: path.join(__dirname, 'public/uploads') //probablemente halla que sacarlo por recplicacion
}).single('archivoupload'));//escucho jsons



//Routes
app.use('/', viewsRouter);
app.use('/DB', dataBaseRouter);
app.use('/UPFILE', uploadRouter);

// static files
app.use(express.static(path.join(__dirname, 'public')));
//Iniciando el servidor
app.listen(app.get('port'), () => {
    console.log('Servidor activo en puerto 3500');
});

