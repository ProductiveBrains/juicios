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

        });
    })
};


//API
controller.apiPersona = (req,res)=>{
    req.getConnection((err, conn)=>{
        conn.query('SELECT * from PERSONAS where judiciales like "%NO%"',(err, personas)=>{
            if(err){
                res.json(err);
            }
            // console.log(personas);
            res.send(personas);
            console.log('Se Envio el listado de personas');
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