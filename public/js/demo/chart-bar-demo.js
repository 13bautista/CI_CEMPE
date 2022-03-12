Chart.defaults.global.defaultFontFamily = "Lato";

var horizontalBarChart = new Chart(myChart, {
  type: 'horizontalBar',
  data: {
    labels: dProv.label,
    datasets: [{
      data: dProv.data,
      backgroundColor: ["#73BFB8", "#73BFB8", "#73BFB8", "#73BFB8", "#73BFB8", "#73BFB8", "#73BFB8", "#73BFB8", "#73BFB8", "#73BFB8"],
    }]
  },
  options: {

    tooltips: {
      enabled: false
    },
    responsive: true,
    legend: {
      display: false,
      position: 'bottom',
      fullWidth: true,
      labels: {
      }
    },
    scales: {
      yAxes: [{
        //barPercentage: 0.75,
        gridLines: {
          display: true,
          drawTicks: true,
          drawOnChartArea: false
        },
        ticks: {
          fontColor: '#666666',
          fontFamily: "Montserrat",
          fontSize: 12,
          fontStyle: "bold",
        }
      }],
      xAxes: [{
        gridLines: {
          display: true,
          drawTicks: false,
          tickMarkLength: 5,
          drawBorder: false
        },
        ticks: {
          padding: 5,
          beginAtZero: true,
          fontColor: '#555759',
          fontFamily: 'Lato',
          fontSize: 11,
          callback: function (label, index, labels) {
            return label / 1000;
          }

        },
        scaleLabel: {
          display: true,
          padding: 10,
          fontFamily: 'Lato',
          fontColor: '#555759',
          fontSize: 16,
          fontStyle: 700,
          labelString: 'Scale Label'
        },

      }]
    }
  }
});