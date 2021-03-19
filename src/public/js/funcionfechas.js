function AsignarFechaActual_id(idfecha) {
    $(`#${idfecha}`).datepicker({
        firstDay: true,
        format: 'dd-mm-yyyy',
        setDefaultDate: true,
        defaultDate: new Date(GetTodayDate()),
        i18n: {
            cancel: 'Cancelar',
            clear: 'Limpiar',
            done: 'OK',
            close: 'Cerrar',
            default: 'now',
            today: 'Hoy',
            months: ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto",
                "Septiembre", "Octubre", "Noviembre", "Diciembre"
            ],
            monthsShort: ["Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul", "Ago", "Set", "Oct",
                "Nov", "Dic"
            ],
            weekdays: ["Domingo", "Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado"],
            weekdaysShort: ["Dom", "Lun", "Mar", "Mie", "Jue", "Vie", "Sab"],
            weekdaysAbbrev: ["D", "L", "M", "M", "J", "V", "S"]
        }
    });

}
function GetTodayDate() {
    var tdate = new Date();
    var dd = tdate.getDate(); //yields day
    var MM = tdate.getMonth(); //yields month
    var yyyy = tdate.getFullYear(); //yields year
    var currentDate = yyyy + "-" + (MM + 1) + "-" + dd;
    return currentDate;
};
function InicializoFechas_id(idfecha) {
    $(`#${idfecha}`).datepicker({
        firstDay: true,
        format: 'dd-mm-yyyy',
        // setDefaultDate: true,
        // defaultDate: new Date(GetTodayDate()),
        i18n: {
            cancel: 'Cancelar',
            clear: 'Limpiar',
            done: 'OK',
            close: 'Cerrar',
            default: 'now',
            today: 'Hoy',
            months: ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto",
                "Septiembre", "Octubre", "Noviembre", "Diciembre"
            ],
            monthsShort: ["Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul", "Ago", "Set", "Oct",
                "Nov", "Dic"
            ],
            weekdays: ["Domingo", "Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado"],
            weekdaysShort: ["Dom", "Lun", "Mar", "Mie", "Jue", "Vie", "Sab"],
            weekdaysAbbrev: ["D", "L", "M", "M", "J", "V", "S"]
        }
    });
}

function InicializoHora_id(idhora){
    $(`#${idhora}`).timepicker();
}