const controller ={};

//Pagina Principal
controller.principal=(req,res)=>{
    res.render('principal');

}

//Listado de Datos
//Personas
//Litigantes
controller.listar = (req,res)=>{
    // res.send('Hola Mundo listar');
    req.getConnection((err, conn)=>{
        conn.query('SELECT * from PERSONAS where judiciales like "%SI%"',(err, litigantes)=>{
            if(err){
                res.json(err);
            }
            // console.log(litigantes);
            res.render('personas_lista');
            console.log('Monitor Servidor : Pidieron ver la pagina LISTADO DE PERSONAL');
            // res.send('Servidor Remoto : Mostrando pagina LISTADO DE PERSONAS');

        });
    })
};


//API
controller.apiPersona = (req,res)=>{    
    // Nose puede el send en GET
    // res.send('Servidor Remoto : Consultando Base de datos para cargar AJAX del Datatable');
    req.getConnection((err, conn)=>{
        conn.query('SELECT * from PERSONAS where judiciales like "%NO%"',(err, personas)=>{
            if(err){
                res.json(err);
            }
            res.send(personas);            
            console.log('Monitor Servidor : LLAMARON API PERSONAS para ver listado');
        });
    })
};

controller.apiPersonaLitigantesiono = (req,res)=>{
    console.log(req.body);
    const CUIL = req.body.CUIL;
    const VALOR = req.body.VALOR;

    res.send('Servidor Remoto: He Recibido estos datos -> '+req.body.CUIL +' - '+ req.body.VALOR);

    req.getConnection((err, conn)=>{
        // Nose puede el send en GET
        // res.send('Servidor Remoto : Grabacion... Cambie Estado de Judiciales a SI');
        conn.query('UPDATE PERSONAS SET judiciales = ? WHERE CUIL= ?  ',[VALOR,CUIL],(err, personas)=>{
            if(err){
                res.json(err);
            }
            console.log('Monitor Servidor : Grabacion... Cambie Estado de Judiciales a SI');
            // res.send('Servidor Remoto : Grabacion... Cambie Estado de Judiciales a SI');
        });
    })
    
};



//Formulario de Carga
controller.createpersona = (req,res)=>{
    // res.send('Hola Mundo listar');
    res.render('personas_Create');
}



//Operaciones CRUD
controller.saveNewPerson = (req,res) =>{
    // console.log(req.body);
    // res.send('Datos Recibidos');
    //Grabar los datos a la base de datos
    const data = req.body;
    console.log(data);
    req.getConnection((err,conn)=>{
        conn.query('INSERT INTO PERSONAS set ?',[data], (err, datoingresado)=>{
            console.log(datoingresado);
            res.send('Se Agrego el Registro');
            console.log('Error Detectado: '.err);
        })
    })
}



//Paginas Generales

controller.mostrarResumen = (req,res)=>{
    // res.send('Hola Mundo listar');
    res.render('resumen');
}








module.exports = controller;