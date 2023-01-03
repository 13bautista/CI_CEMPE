// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#858796';

// Pie Chart Example
var ctx = document.getElementById("myPieChart1");
var myPieChart = new Chart(ctx, {
  type: 'doughnut',
  data: {
    labels: dataTipoAdq.label,
    datasets: [{
      data: dataTipoAdq.data,
      backgroundColor: ['#df4e4e', '#df8d4e', '#dfd94e', '#73df4e', '#36b9cc', '#1cc88a', '#4e73df'],
      hoverBackgroundColor: ['#d92e2e', '#d97b2e', '#d8d92e', '#5ec625', '#2c9faf', '#17a673', '#2e59d9'],
      hoverBorderColor: "rgba(234, 236, 244, 1)",
    }],
  },
  options: {
    maintainAspectRatio: false,
    responsive: true,
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
