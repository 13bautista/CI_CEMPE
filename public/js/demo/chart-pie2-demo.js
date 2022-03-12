// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#858796';

// Pie Chart Example
var ctx = document.getElementById("myPieChart2");
var myPieChart = new Chart(ctx, {
  type: 'doughnut',
  data: {
    labels: dataFaltantesOS.label,
    datasets: [{
      data: dataFaltantesOS.data,
      backgroundColor: ['#4e73df', '#1cc88a', '#36b9cc', '#e96186', '#4ed7df', '#e38150', '#ddd346', ''],
      hoverBackgroundColor: ['#2e59d9', '#17a673', '#2c9faf', '#d73c66', '#25bdc6', '#d46832', '#d2c723'],
      hoverBorderColor: "rgba(234, 236, 244, 1)",
    }],
  },
  options: {
    maintainAspectRatio: false,
    tooltips: {
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#858796",
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: false,
      caretPadding: 10,
      callbacks: {
        label: function (tooltipItem, data) {
          var value = data.datasets[0].data[tooltipItem.index];
          return parseInt(value) >= 1000 ? data.labels[tooltipItem.index] + " :" + value.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",") : data.labels[tooltipItem.index] + " :" + value;
        }
      }
    },
    legend: {
      display: true,
      position: 'left',
    },
    cutoutPercentage: 70,
  },
});
