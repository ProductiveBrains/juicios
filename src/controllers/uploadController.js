const controller = {};
const funcionfechas=require('./functionsController.js');




controller.recibo_CD_RE = (req, res) => {
    // console.log(req.file);
    // console.log(req.body['idnamecuil']);
    // console.log(funcionfechas.FechaActual()+ ' ** Fecha actual BACKEND');
    // console.log(req.body['idFechaEmision']);
    // console.log(req.body['idTipoReclamo']);
    // console.log(req.body['idEstudioJuridico']);
    // console.log(req.body['idComentario']);
    // console.log(req.body['idCartellone']);
    // console.log(req.body['idProductiveBrains']);
    // console.log(req.file.filename);


    console.log(req.file);
    console.log(req.body.numerocuil);
    console.log(funcionfechas.FechaActual()+ ' ** Fecha actual BACKEND');
    console.log(req.body.idFechaEmision[0]);
    console.log(req.body.idTipoReclamo[0]);
    console.log(req.body.idEstudioJuridico[0]);
    console.log(req.body.idComentario[0]);
    console.log(req.body.idCartellone[0]);
    console.log(req.file.filename);

    console.log('***********************************');
    console.log(req.body);
    console.log('***********************************');

    
    var CUIL= req.body.numerocuil;
    var FECHAING=funcionfechas.FechaActual();
    var FECHADOC=req.body.idFechaEmision[0];
    var RECLAMO=req.body.idTipoReclamo[0];
    var ESTUDIO=req.body.idEstudioJuridico[0];
    var COMENTARIO=req.body.idComentario[0];
    var LINK1=req.body.idCartellone[0];
    var LINK2=req.file.filename;

    res.send(true);
    // conn.query('SELECT * from PERSONAS WHERE CUIL= ?', [CUIL], (err, DETALLEPERSONA) => {
    req.getConnection((err, conn) => {

        var inserto=`INSERT INTO CARTADOCUMENTO (CUIL, FECHAING, FECHADOC, RECLAMO, ESTUDIO, COMENTARIO, LINK1, LINK2) VALUES  ('${CUIL}' ,'${FECHAING}','${FECHADOC}','${RECLAMO}','${ESTUDIO}','${COMENTARIO}','${LINK1}','${LINK2}')`;        
        conn.query(inserto, (err, result) => {
            if (err) {
                // res.json(err);
                console.log(err);
            }
            // res.send(result);
            // console.log(JSON.stringify(personas));
            console.log('Monitor Servidor : CD - RECIBIDA - GRABACION');
        });
    })
};


controller.Update_CD_RE = (req, res) => {

    console.log(req.file);
    console.log(req.body.numerocuil);
    console.log(funcionfechas.FechaActual()+ ' ** Fecha actual BACKEND');
    console.log(req.body.idFechaEmision[0]);
    console.log(req.body.idTipoReclamo[0]);
    console.log(req.body.idEstudioJuridico[0]);
    console.log(req.body.idComentario[0]);
    console.log(req.body.idCartellone[0]);
    console.log(req.file.filename);

    console.log('***********************************');
    console.log(req.body);
    console.log('***********************************');

    
    var CUIL= req.body.numerocuil;
    var FECHAING=funcionfechas.FechaActual();
    var FECHADOC=req.body.idFechaEmision[0];
    var RECLAMO=req.body.idTipoReclamo[0];
    var ESTUDIO=req.body.idEstudioJuridico[0];
    var COMENTARIO=req.body.idComentario[0];
    var LINK1=req.body.idCartellone[0];
    var LINK2=req.file.filename;

    res.send(true);
    // conn.query('SELECT * from PERSONAS WHERE CUIL= ?', [CUIL], (err, DETALLEPERSONA) => {
    req.getConnection((err, conn) => {

        var inserto=`INSERT INTO CARTADOCUMENTO (CUIL, FECHAING, FECHADOC, RECLAMO, ESTUDIO, COMENTARIO, LINK1, LINK2) VALUES  ('${CUIL}' ,'${FECHAING}','${FECHADOC}','${RECLAMO}','${ESTUDIO}','${COMENTARIO}','${LINK1}','${LINK2}')`;        
        conn.query(inserto, (err, result) => {
            if (err) {
                // res.json(err);
                console.log(err);
            }
            // res.send(result);
            // console.log(JSON.stringify(personas));
            console.log('Monitor Servidor : CD - RECIBIDA - GRABACION');
        });
    })
};





module.exports = controller;