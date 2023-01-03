(Chart.defaults.global.defaultFontFamily = "Nunito"),
  '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = "#858796";

const myChart = new Chart(
  document.getElementById("myAreaChart").getContext("2d"),
  {
    type: "horizontalBar",
    data: {
      labels: dataConceptos.label,
      datasets: [
        {
          data: dataConceptos.data,
          backgroundColor: [
            "#73BFB8",
            "#908ABA",
            "#DD370A",
            "#1DCFCF",
            "#872B2A",
            "#93E738",
            "#721344",
            "#743525",
            "#283786",
            "#49BF2B",
            "#9F0833",
            "#681AA6",
            "#F0AE28",
            "#DE640D",
            "#F0AE28",
          ],
        },
      ],
    },
    options: {
      tooltips: {
        enabled: false,
      },
      maintainAspectRatio: false,
      legend: {
        display: false,
        position: "bottom",
        fullWidth: true,
        labels: {
          boxWidth: 10,
          padding: 50,
        },
      },
      scales: {
        yAxes: [
          {
            barPercentage: 0.75,
            gridLines: {
              display: true,
              drawTicks: true,
              drawOnChartArea: false,
            },
            ticks: {
              fontColor: "#555759",
              fontFamily: "Lato",
              fontSize: 11,
            },
          },
        ],
        xAxes: [
          {
            /*
            gridLines: {
              display: true,
              drawTicks: false,
              tickMarkLength: 5,
              drawBorder: false,
            },
            */
           /*
            ticks: {
              padding: 5,
              beginAtZero: true,
              fontColor: "#555759",
              fontFamily: "Lato",
              fontSize: 11,
              callback: function (label, index, labels) {
                return label / 1000;
              },
            },
            */
            scaleLabel: {
              display: true,
              padding: 10,
              fontFamily: "Lato",
              fontColor: "#555759",
              fontSize: 16,
              fontStyle: 700,
            },
          },
        ],
      },
    },
  }
);
