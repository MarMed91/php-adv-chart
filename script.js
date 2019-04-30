function getChartStep1() {

  $.ajax({

    url: "fulldb.php",
    method: "GET",
    success: function(data) {

      var chart = JSON.parse(data);

      var ctx = document.getElementById('myChart').getContext('2d');
      var chart = new Chart(ctx, {
        // The type of chart we want to create
      type: 'line',

      // The data for our dataset
      data: {
          labels: ["Gennaio", "Febbraio", "Marzo", "Aprile", "Maggio", "Giugno", "Luglio", "Agosto", "Settembre", "Ottobre", "Novembre", "Dicembre"],
          datasets: [{
              label: 'Month Sales',
              backgroundColor: ['green'],
              borderColor:  ['red'],
              data: chart
            }]
          },
          options:{}
        });
    }
  });
}

function getChartStep2() {

  $.ajax({

    url: "getChartDataLine.php",
    method: "GET",
    success: function(data) {

      var parse = JSON.parse(data);

      var ctx = document.getElementById('myChart2').getContext('2d');
      var chart = new Chart(ctx, parse);
   }
 });
}

function getChartStep3() {

  $.ajax({

    url: "getChartDataPie.php",
    method: "GET",
    success: function(data) {

      var parse2 = JSON.parse(data);

      var ctx2 = document.getElementById('myChart3').getContext('2d');
      var chart2 = new Chart(ctx2, parse2);
   }
 });
}

function init() {

  //getChartStep1();
  getChartStep2();
  //getChartStep3();
}

$(document).ready(init);
