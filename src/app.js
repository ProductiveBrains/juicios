// Este archivo ejecuta todo el servidor

const express = require ('express');
const path = require ('path');
const morgan = require ('morgan');
const mysql = require ('mysql');
const myConnection = require ('express-myconnection');



const app = express();

//Importando rutas
const personasRoutes = require('./routes/personas');

//Setting
app.set('port', process.env.PORT || 3500);
app.set('view engine','ejs');
app.set('views',path.join(__dirname,'views'));



//Middlewares
app.use(morgan('dev'));
app.use(myConnection(mysql, {
    host: '190.106.132.189',
    user:'root',
    password: 'blackmagic',
    port : 3306,
    database :'UTJUICIOS'
},'single'));
app.use(express.urlencoded({extends:false}));//permite entender los datos que vienen de formulario



//Routes
app.use('/', personasRoutes);

// static files
app.use(express.static (path.join(__dirname,'public')));



//Iniciando el servidor
app.listen(app.get('port'),()=> {
    console.log('Servidor activo en puerto 3500');
});

