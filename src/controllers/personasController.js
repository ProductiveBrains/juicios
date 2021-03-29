const controller = {};

//Pagina Principal
controller.principal = (req, res) => {
    res.render('principal');

}


// NAVBAR LINKS
controller.listarPersonas = (req, res) => {
    res.render('personas_lista');
};
controller.listarLitigantes = (req, res) => {
    res.render('litigantes_lista');
}
controller.litigantesDocs = (req, res) => {
    res.render('litigantes_docs');
    console.log(' ');
    console.log('****************************************************************');
    console.log('***   Monitor Servidor : LLAMARON API Ver Documentos');
    console.log('****************************************************************');
    console.log('***   ' + JSON.stringify(req.query));
    console.log('****************************************************************');
    console.log(' ');
}


// Consulta a Base de Datos para Ajax fetch o HttpxmlRequest
controller.litigantesCDxCUIT = (req, res) => {
    const CUIL = req.params.cuit;
    req.getConnection((err, conn) => {
        conn.query('SELECT * from CARTADOCUMENTO WHERE CUIL= ?', [CUIL], (err, CDxCUIT) => {
            if (err) {
                res.json(err);
            }
            res.send(CDxCUIT);
            console.log('Monitor Servidor : LLAMARON API CARTADOCUMENTO para ver listado');
        });
    })
}
controller.litigantesCOxCUIT = (req, res) => {
    const CUIL = req.params.cuit;
    req.getConnection((err, conn) => {
        conn.query('SELECT * from CONTESTACIONES WHERE CUIL= ?', [CUIL], (err, COxCUIT) => {
            if (err) {
                res.json(err);
                console.log(err);
            }
            res.send(COxCUIT);
            console.log('Monitor Servidor : LLAMARON API CONTESTACIONES para ver listado');
        });
    })
}
controller.litigantesAUxCUIT = (req, res) => {
    const CUIL = req.params.cuit;
    req.getConnection((err, conn) => {
        conn.query('SELECT * from AUDIENCIAS WHERE CUIL= ?', [CUIL], (err, AUxCUIT) => {
            if (err) {
                res.json(err);
                console.log(err);
            }
            res.send(AUxCUIT);
            console.log('Monitor Servidor : LLAMARON API AUDIENCIAS para ver listado');
        });
    })
}

controller.personasDetalle = (req, res) => {
    const CUIL = req.params.cuit;
    req.getConnection((err, conn) => {
        conn.query('SELECT * from PERSONAS WHERE CUIL= ?', [CUIL], (err, DETALLEPERSONA) => {
            if (err) {
                res.json(err);
                console.log(err);
            }
            res.send(DETALLEPERSONA);
            console.log(' ');
            console.log('****************************************************************');
            console.log('***   Monitor Servidor : LLAMARON API Ver Detalle Persona');
            console.log('****************************************************************');
            console.log('***   ' + JSON.stringify(DETALLEPERSONA));
            console.log('****************************************************************');
            console.log(' ');
            
        });
    })
}





controller.CreateAudiencia = (req, res) => {
    res.render('audiencia_Create');
}



//API
controller.apiLitigantes = (req, res) => {
    req.getConnection((err, conn) => {
        conn.query('SELECT * from VIEWLITIGANTES', (err, personas) => {
            if (err) {
                res.json(err);
            }
            res.send(personas);
            console.log('Monitor Servidor : LLAMARON API LITIGANTES para ver listado');
        });
    })
};
controller.apiPersona = (req, res) => {
    // Nose puede el send en GET
    // res.send('Servidor Remoto : Consultando Base de datos para cargar AJAX del Datatable');
    req.getConnection((err, conn) => {
        conn.query('SELECT * from VIEWPERSONAS', (err, personas) => {
            if (err) {
                res.json(err);
            }
            res.send(personas);
            console.log(JSON.stringify(personas));
            console.log('Monitor Servidor : LLAMARON API PERSONAS para ver listado');
        });
    })
};

controller.apiPersonaLitigantesiono = (req, res) => {
    console.log(req.body);
    const CUIL = req.body.CUIL;
    const VALOR = req.body.VALOR;

    res.send('Servidor Remoto: He Recibido estos datos -> ' + req.body.CUIL + ' - ' + req.body.VALOR);

    req.getConnection((err, conn) => {
        // Nose puede el send en GET
        // res.send('Servidor Remoto : Grabacion... Cambie Estado de Judiciales a SI');
        conn.query('UPDATE PERSONAS SET judiciales = ? WHERE CUIL= ?  ', [VALOR, CUIL], (err, personas) => {
            if (err) {
                res.json(err);
            }
            console.log('Monitor Servidor : Grabacion... Cambie Estado de Judiciales a SI');
            // res.send('Servidor Remoto : Grabacion... Cambie Estado de Judiciales a SI');
        });
    })

};






//Formulario de Carga
controller.createpersona = (req, res) => {
    // res.send('Hola Mundo listar');
    res.render('audiencia_Create');
}



//Operaciones CRUD
controller.saveNewPerson = (req, res) => {
    // console.log(req.body);
    // res.send('Datos Recibidos');
    //Grabar los datos a la base de datos
    const data = req.body;
    console.log(data);
    req.getConnection((err, conn) => {
        conn.query('INSERT INTO PERSONAS set ?', [data], (err, datoingresado) => {
            console.log(datoingresado);
            res.send('Se Agrego el Registro');
            console.log('Error Detectado: '.err);
        })
    })
}



//Paginas Generales










module.exports = controller;