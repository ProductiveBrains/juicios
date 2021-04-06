const controller = {};


controller.Query_Select_ListaPersonas = (req, res) => {
    // Nose puede el send en GET
    // res.send('Servidor Remoto : Consultando Base de datos para cargar AJAX del Datatable');
    req.getConnection((err, conn) => {
        conn.query('SELECT * from VIEWPERSONAS', (err, personas) => {
            if (err) {
                res.json(err);
            }
            res.send(personas);
            // console.log(JSON.stringify(personas));
            console.log('Monitor Servidor : LLAMARON API PERSONAS para ver listado');
        });
    })
};

controller.Query_Select_ListaLitigantes = (req, res) => {
    req.getConnection((err, conn) => {
        conn.query('SELECT * from VIEWLITIGANTES', (err, personas) => {
            if (err) {
                res.json(err);
            }
            res.send(personas);
            console.log('');
            console.log('****************************************************************');
            console.log('***   Monitor Servidor : Select DB Litigantes');
            console.log('****************************************************************');
            console.log('***   ' + JSON.stringify(req.query));
            console.log('****************************************************************');
            console.log(' ');
        });
    })
};

controller.PersonaByCUIL = (req, res) => {
    const CUIL = req.params.cuit
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
            // console.log('***   ' + JSON.stringify(DETALLEPERSONA));
            console.log('***   ' + CUIL);
            console.log('****************************************************************');
            console.log(' ');
        });
    })
};

// Consulta a Base de Datos para Ajax fetch o HttpxmlRequest  // Reponse  Rows Data Packet
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

// CHANGES STATUS VALUE OF JUDICIALES (SI/No)
controller.Update_Judiciales = (req, res) => {
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


//traer CD RE x CUIL
controller.cd_re_cuil = (req, res) => {
    const parametrosrecibidos = JSON.parse(req.params.parametros);    
    const id=parametrosrecibidos.id;    
    req.getConnection((err, conn) => {
        if (err) throw err;        
            conn.query(`SELECT * from CARTADOCUMENTO WHERE  ID=?`, [id], (err, result, fields) => {
            if (err) throw err;
            console.log(result);
            res.send(result);
        });
    })
}


module.exports = controller;