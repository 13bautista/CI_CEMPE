// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#858796';


// Area Chart Example
var ctx = document.getElementById("myAreaChart");
var myLineChart = new Chart(ctx, {
  type: 'line',
  data: {
    labels: dataConceptos.label,
    datasets: [{
      label: '',
      lineTension: .2,
      backgroundColor: "rgba(78, 115, 223, 0.05)",
      borderColor: "rgba(78, 115, 223, 1)",
      pointRadius: 4,
      pointBackgroundColor: "rgba(78, 115, 223, 1)",
      pointBorderColor: "rgba(78, 115, 223, 1)",
      pointHoverRadius: 3,
      pointHoverBackgroundColor: "rgba(78, 115, 223, 1)",
      pointHoverBorderColor: "rgba(78, 115, 223, 1)",
      pointHitRadius: 10,
      pointBorderWidth: 2,
      data: dataConceptos.data,
    }],
  },
  options: {
    maintainAspectRatio: false,
    responsive: true,
    layout: {
      padding: {
        left: 10,
        right: 25,
        top: 25,
        bottom: 0
      }
    },
    scales: {
      xAxes: [{
        inverse: true,
        gridLines: {
          display: false,
          drawBorder: false,
        },
        ticks: {
          display: false,
          maxTicksLimit: 20,
        }
      }],
      yAxes: [{
        maxTicksLimit: 10,
        padding: 10,
        maxTicksLimit: 5,
        padding: 10,
        // Include a dollar sign in the ticks
        callback: function (value, index, values) {
          return '$' + number_format(value);
        }
        ,
        gridLines: {
          color: "rgb(234, 236, 244)",
          zeroLineColor: "rgb(234, 236, 244)",
          drawBorder: false,
          borderDash: [2],
          zeroLineBorderDash: [2]
        }
      }],
    },
    legend: {
      display: false,
    },
    tooltips: {
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#858796",
      titleMarginBottom: 10,
      titleFontColor: '#6e707e',
      titleFontSize: 14,
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: false,
      intersect: false,
      mode: 'index',
      caretPadding: 10,
      callbacks: {
        label: function (tooltipItem, data) {
          var value = data.datasets[0].data[tooltipItem.index];
          return parseInt(value) >= 1000 ? value.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",") : value;
        }
      }
    }
  }
});

var dataToTable = function (dataset) {
  var html = '<table class="table table-borderless table-sm table-responsive" style="font-size:12px">';
  html += '<thead>';
  var columnCount = 0;
  jQuery.each(dataset.datasets, function (idx, item) {
    //html += '<th>' + item.label + '</th>';
    columnCount += 1;
  });

  html += '</tr></thead>';

  jQuery.each(dataset.labels, function (idx, item) {
    html += '<tr><td>' + item + '</td>';
    for (i = 0; i < columnCount; i++) {
      html += '<td>' + (dataset.datasets[i].data[idx] === '0' ? '-' : dataset.datasets[i].data[idx]) + '</td>';
    }
    html += '</tr>';
  });

  html += '</tr><tbody></table>';

  return html;
};

jQuery('#tabla').html(dataToTable(myLineChart.data));

