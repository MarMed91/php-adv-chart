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

    url: "getDataChartLine.php",
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

function getChartStep4() {

 $ajax({

   url: "getChartData1.php",
   data: { level: guest },
   method: "GET",
   success: function(data) {

     var parse3 = JSON.parse(data);

     var ctx3 = document.getElementById('myChart4').getContext('2d');
     var chart3 = new Chart(ctx3, parse3);
   }
 });
}

function getChartStep5() {

  $ajax({

    url: "getChartData2.php",
    data: { level: employee },
    method: "GET",
    success: function(data) {

      var parse4 = JSON.parse(data);

      var ctx4 = document.getElementById('myChart5').getContext('2d');
      var chart4 = new Chart(ctx4, parse4);
    }
  });
}

function getChartStep6() {

  $.ajax({

  url: "getChartData2.php",
  data: { level: clevel },
  method: "GET",
  success: function(data) {

    var parse5 = JSON.parse(data);

    var ctx5 = document.getElementById('myChart6').getContext('2d');
    var chart5 = new Chart(ctx5, parse5);
  }
});
}

function init() {

  getChartStep1();
  getChartStep2();
  getChartStep3();
  getChartStep4();
  getChartStep5();
  getChartStep6();
}

$(document).ready(init);
