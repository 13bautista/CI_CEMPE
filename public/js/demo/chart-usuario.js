// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#858796';

$(function () {
    //get the bar chart canvas
    //var cData = JSON.parse(`<?php echo $chart_data; ?>`);
    var ctx = $("#bar-chart");

    //bar chart data
    var data = {
        labels: cData.label,
        datasets: [
            {
                label: cData.label,
                data: cData.data,
                backgroundColor: [
                    "#DEB887",
                    "#A9A9A9",
                    "#DC143C",
                    "#F4A460",
                    "#2E8B57",
                    "#1D7A46",
                    "#CDA776",
                    "#CDA776",
                    "#989898",
                    "#CB252B",
                    "#E39371",
                ],
                borderColor: [
                    "#CDA776",
                    "#989898",
                    "#CB252B",
                    "#E39371",
                    "#1D7A46",
                    "#F4A460",
                    "#CDA776",
                    "#DEB887",
                    "#A9A9A9",
                    "#DC143C",
                    "#F4A460",
                    "#2E8B57",
                ],
                borderWidth: [1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1]
            }
        ]
    };

    //options
    var options = {
        maintainAspectRatio: false,
        responsive: true,
        title: {
            display: true,
            position: "top",
            text: "Conteo de Conceptos por registros",
            fontSize: 18,
            fontColor: "#111"
        },
        legend: {
            display: true,
            position: "top",
            labels: {
                fontColor: "#333",
                fontSize: 16
            }
        }
    };

    //create bar Chart class object
    var chart1 = new Chart(ctx, {
        type: "bar",
        data: data,
        options: options
    });

});