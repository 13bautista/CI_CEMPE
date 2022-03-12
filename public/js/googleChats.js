google.charts.load('current', {
    'packages': ['geochart'],
});
google.charts.setOnLoadCallback(drawRegionsMap);

var x = [['Clave', 'Entidad', 'Órdenes']];

$.each(dataOSEdos, function (data, value) {
    switch (value.ENTIDAD_FEDERATIVA) {
        case 'AGUASCALIENTES':
            x.push(['MX-AGU', value.ENTIDAD_FEDERATIVA, parseInt(value.COUNT)]);
            break;
        case 'BAJA CALIFORNIA':
            x.push(['MX-BCN', value.ENTIDAD_FEDERATIVA, parseInt(value.COUNT)]);
            break;
        case 'BAJA CALIFORNIA SUR':
            x.push(['MX-BCS', value.ENTIDAD_FEDERATIVA, parseInt(value.COUNT)]);
            break;
        case 'CAMPECHE':
            x.push(['MX-CAM', value.ENTIDAD_FEDERATIVA, parseInt(value.COUNT)]);
            break;
        case 'CHIAPAS':
            x.push(['MX-CHP', value.ENTIDAD_FEDERATIVA, parseInt(value.COUNT)]);
            break;
        case 'CHIHUAHUA':
            x.push(['MX-CHH', value.ENTIDAD_FEDERATIVA, parseInt(value.COUNT)]);
            break;
        case 'CIUDAD DE MEXICO':
            x.push(['MX-DIF', value.ENTIDAD_FEDERATIVA, parseInt(value.COUNT)]);
            break;
        case 'COAHUILA DE ZARAGOZA':
            x.push(['MX-COA', value.ENTIDAD_FEDERATIVA, parseInt(value.COUNT)]);
            break;
        case 'COLIMA':
            x.push(['MX-COL', value.ENTIDAD_FEDERATIVA, parseInt(value.COUNT)]);
            break;
        case 'DURANGO':
            x.push(['MX-DUR', value.ENTIDAD_FEDERATIVA, parseInt(value.COUNT)]);
            break;
        case 'GUANAJUATO':
            x.push(['MX-GUA', value.ENTIDAD_FEDERATIVA, parseInt(value.COUNT)]);
            break;
        case 'GUERRERO':
            x.push(['MX-GRO', value.ENTIDAD_FEDERATIVA, parseInt(value.COUNT)]);
            break;
        case 'HIDALGO':
            x.push(['MX-HID', value.ENTIDAD_FEDERATIVA, parseInt(value.COUNT)]);
            break;
        case 'JALISCO':
            x.push(['MX-JAL', value.ENTIDAD_FEDERATIVA, parseInt(value.COUNT)]);
            break;
        case 'MEXICO':
            x.push(['MX-MEX', value.ENTIDAD_FEDERATIVA, parseInt(value.COUNT)]);
            break;
        case 'MICHOACAN DE OCAMPO':
            x.push(['MX-MIC', value.ENTIDAD_FEDERATIVA, parseInt(value.COUNT)]);
            break;
        case 'MORELOS':
            x.push(['MX-MOR', value.ENTIDAD_FEDERATIVA, parseInt(value.COUNT)]);
            break;
        case 'NAYARIT':
            x.push(['MX-NAY', value.ENTIDAD_FEDERATIVA, parseInt(value.COUNT)]);
            break;
        case 'NUEVO LEON':
            x.push(['MX-NLE', value.ENTIDAD_FEDERATIVA, parseInt(value.COUNT)]);
            break;
        case 'OAXACA':
            x.push(['MX-OAX', value.ENTIDAD_FEDERATIVA, parseInt(value.COUNT)]);
            break;
        case 'PUEBLA':
            x.push(['MX-PUE', value.ENTIDAD_FEDERATIVA, parseInt(value.COUNT)]);
            break;
        case 'QUERETARO':
            x.push(['MX-QUE', value.ENTIDAD_FEDERATIVA, parseInt(value.COUNT)]);
            break;
        case 'QUINTANA ROO':
            x.push(['MX-ROO', value.ENTIDAD_FEDERATIVA, parseInt(value.COUNT)]);
            break;
        case 'SAN LUIS POTOSI':
            x.push(['MX-SLP', value.ENTIDAD_FEDERATIVA, parseInt(value.COUNT)]);
            break;
        case 'SINALOA':
            x.push(['MX-SIN', value.ENTIDAD_FEDERATIVA, parseInt(value.COUNT)]);
            break;
        case 'SONORA':
            x.push(['MX-SON', value.ENTIDAD_FEDERATIVA, parseInt(value.COUNT)]);
            break;
        case 'TABASCO':
            x.push(['MX-TAB', value.ENTIDAD_FEDERATIVA, parseInt(value.COUNT)]);
            break;
        case 'TAMAULIPAS':
            x.push(['MX-TAM', value.ENTIDAD_FEDERATIVA, parseInt(value.COUNT)]);
            break;
        case 'TLAXCALA':
            x.push(['MX-TLA', value.ENTIDAD_FEDERATIVA, parseInt(value.COUNT)]);
            break;
        case 'VERACRUZ DE IGNACIO DE LA LLAVE':
            x.push(['MX-VER', value.ENTIDAD_FEDERATIVA, parseInt(value.COUNT)]);
            break;
        case 'YUCATAN':
            x.push(['MX-YUC', value.ENTIDAD_FEDERATIVA, parseInt(value.COUNT)]);
            break;
        case 'ZACATECAS':
            x.push(['MX-ZAC', value.ENTIDAD_FEDERATIVA, parseInt(value.COUNT)]);
            break;
        default:
            console.log('Entidad No Válida');
    }

})


function drawRegionsMap() {
    var data = google.visualization.arrayToDataTable(x);

    var options = {
        title: 'México',
        displayMode: 'regions', //indicamos al mapa que se centre en una region en lugar de global
        region: 'MX', //region a mostrar es solo Mexico
        resolution: 'provinces', //mostrar "division politica" entre estados
        legend: 'none', //no muestra el indicador en forma de barra
        hAxis: { title: 'Year', titleTextStyle: { color: 'red' } },
        backgroundColor: '#C5E3FF',
        colors: ['#e0440e'],
        animation: {
            duration: 600
        },
    };

    var chart = new google.visualization.GeoChart(document.getElementById('regions_div'));

    chart.draw(data, options);
}
$(document).ready(function () {
    $('#regions_div').hide().fadeIn(3000);

});

