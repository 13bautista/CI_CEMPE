// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#858796';

<<<<<<< HEAD
=======
function number_format(number, decimals, dec_point, thousands_sep) {
  // *     example: number_format(1234.56, 2, ',', ' ');
  // *     return: '1 234,56'
  number = (number + '').replace(',', '').replace(' ', '');
  var n = !isFinite(+number) ? 0 : +number,
    prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
    sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep,
    dec = (typeof dec_point === 'undefined') ? '.' : dec_point,
    s = '',
    toFixedFix = function(n, prec) {
      var k = Math.pow(10, prec);
      return '' + Math.round(n * k) / k;
    };
  // Fix for IE parseFloat(0.55).toFixed(0) = 0;
  s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.');
  if (s[0].length > 3) {
    s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
  }
  if ((s[1] || '').length < prec) {
    s[1] = s[1] || '';
    s[1] += new Array(prec - s[1].length + 1).join('0');
  }
  return s.join(dec);
}
>>>>>>> a83247bca92426a321f315a3a7db53731a151181

// Area Chart Example
var ctx = document.getElementById("myAreaChart");
var myLineChart = new Chart(ctx, {
  type: 'line',
  data: {
<<<<<<< HEAD
    labels: dataConceptos.label,
    datasets: [{
      label: '',
      lineTension: .2,
      backgroundColor: "rgba(78, 115, 223, 0.05)",
      borderColor: "rgba(78, 115, 223, 1)",
      pointRadius: 4,
=======
    labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
    datasets: [{
      label: "Earnings",
      lineTension: 0.3,
      backgroundColor: "rgba(78, 115, 223, 0.05)",
      borderColor: "rgba(78, 115, 223, 1)",
      pointRadius: 3,
>>>>>>> a83247bca92426a321f315a3a7db53731a151181
      pointBackgroundColor: "rgba(78, 115, 223, 1)",
      pointBorderColor: "rgba(78, 115, 223, 1)",
      pointHoverRadius: 3,
      pointHoverBackgroundColor: "rgba(78, 115, 223, 1)",
      pointHoverBorderColor: "rgba(78, 115, 223, 1)",
      pointHitRadius: 10,
      pointBorderWidth: 2,
<<<<<<< HEAD
      data: dataConceptos.data,
=======
      data: [0, 10000, 5000, 15000, 10000, 20000, 15000, 25000, 20000, 30000, 25000, 40000],
>>>>>>> a83247bca92426a321f315a3a7db53731a151181
    }],
  },
  options: {
    maintainAspectRatio: false,
    layout: {
<<<<<<< HEAD
      padding: {  
=======
      padding: {
>>>>>>> a83247bca92426a321f315a3a7db53731a151181
        left: 10,
        right: 25,
        top: 25,
        bottom: 0
      }
    },
    scales: {
      xAxes: [{
<<<<<<< HEAD
        inverse:true,
=======
        time: {
          unit: 'date'
        },
>>>>>>> a83247bca92426a321f315a3a7db53731a151181
        gridLines: {
          display: false,
          drawBorder: false
        },
        ticks: {
<<<<<<< HEAD
          display: false,
          maxTicksLimit: 20
=======
          maxTicksLimit: 7
>>>>>>> a83247bca92426a321f315a3a7db53731a151181
        }
      }],
      yAxes: [{
        ticks: {
<<<<<<< HEAD
          display: true,
          maxTicksLimit: 10,
          padding: 10,
=======
          maxTicksLimit: 5,
          padding: 10,
          // Include a dollar sign in the ticks
          callback: function(value, index, values) {
            return '$' + number_format(value);
          }
>>>>>>> a83247bca92426a321f315a3a7db53731a151181
        },
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
<<<<<<< HEAD
      display: false,
=======
      display: false
>>>>>>> a83247bca92426a321f315a3a7db53731a151181
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
<<<<<<< HEAD
        label: function (tooltipItem, data) {
          var value = data.datasets[0].data[tooltipItem.index];
          return parseInt(value) >= 1000 ? value.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",") : value;
=======
        label: function(tooltipItem, chart) {
          var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
          return datasetLabel + ': $' + number_format(tooltipItem.yLabel);
>>>>>>> a83247bca92426a321f315a3a7db53731a151181
        }
      }
    }
  }
});
<<<<<<< HEAD




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

=======
>>>>>>> a83247bca92426a321f315a3a7db53731a151181
