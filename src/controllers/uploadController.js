const controller = {};
const funcionfechas = require('./functionsController.js');




controller.Create_CD_RE = (req, res) => {

    console.log(req.file);
    console.log(req.body.numerocuil);
    console.log(funcionfechas.FechaActual() + ' ** Fecha actual BACKEND');
    console.log(req.body.idFechaEmision[0]);
    console.log(req.body.idTipoReclamo[0]);
    console.log(req.body.idEstudioJuridico[0]);
    console.log(req.body.idComentario[0]);
    console.log(req.body.idCartellone[0]);
    console.log(req.file.filename);

    console.log('***********************************');
    console.log(req.body);
    console.log('***********************************');


    var CUIL = req.body.numerocuil;
    var FECHAING = funcionfechas.FechaActual();
    var FECHADOC = req.body.idFechaEmision[0];
    var RECLAMO = req.body.idTipoReclamo[0];
    var ESTUDIO = req.body.idEstudioJuridico[0];
    var COMENTARIO = req.body.idComentario[0];
    var LINK1 = req.body.idCartellone[0];
    var LINK2 = req.file.filename;

    res.send(true);    
    req.getConnection((err, conn) => {

        var inserto = `INSERT INTO CARTADOCUMENTO (CUIL, FECHAING, FECHADOC, RECLAMO, ESTUDIO, COMENTARIO, LINK1, LINK2) VALUES  ('${CUIL}' ,'${FECHAING}','${FECHADOC}','${RECLAMO}','${ESTUDIO}','${COMENTARIO}','${LINK1}','${LINK2}')`;
        conn.query(inserto, (err, result) => {
            if (err) {
                console.log(err);
            }
            console.log('Monitor Servidor : CD - RECIBIDA - GRABACION');
        });
    })
};


controller.Update_CD_RE = (req, res) => {    
    var ID=         req.body['id'];
    var FECHADOC=   req.body['id_Update_FechaEmision'];
    var RECLAMO=    req.body['id_Update_TipoReclamo'];
    var ESTUDIO=    req.body['id_Update_EstudioJuridico'];
    var COMENTARIO= req.body['id_Update_Comentario'];
    var LINK1=      req.body['id_Update_Cartellone'];
    
    console.log(req.body);

    if (req.file) {
        // Esto Se Ejecuta cuando Se Recibe un nuevo archivo
        console.log('recibi archivo')
        req.getConnection((err, conn) => {

            var LINK2=req.file.filename;

            var actualizo = `UPDATE CARTADOCUMENTO SET FECHADOC='${FECHADOC}', RECLAMO='${RECLAMO}', ESTUDIO='${ESTUDIO}', COMENTARIO='${COMENTARIO}', LINK1='${LINK1}', LINK2='${LINK2}' WHERE ID='${ID}'`;

            conn.query(actualizo, (err, result) => {
                if (err) {
                    console.log(err);
                }
                console.log('Monitor Servidor : CD - RECIBIDA - ACTUALIZACION con Modificacion de Archivo');
            });
        })
    } else {
        // Esto Se Ejecuta cuando Se Mantiene  el Mismo Archivo
        console.log('NOOOO recibi archivo');

        req.getConnection((err, conn) => {
            var actualizo = `UPDATE CARTADOCUMENTO SET FECHADOC='${FECHADOC}', RECLAMO='${RECLAMO}', ESTUDIO='${ESTUDIO}', COMENTARIO='${COMENTARIO}', LINK1='${LINK1}' WHERE ID='${ID}'`;
            conn.query(actualizo, (err, result) => {
                if (err) {
                    console.log(err);
                }
                console.log('Monitor Servidor : CD - RECIBIDA - ACTUALIZACION Dejando  el Archivo Existente');
            });
        })
    }
    res.send(true);
};





module.exports = controller;