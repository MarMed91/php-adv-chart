function getChartStep2a() {

  $.ajax({

    url: "getChartData.php",
    method: "GET",
    success: function(data) {

      var parse = JSON.parse(data);

      var fatturato = parse["fatturato"];

      var ctx = document.getElementById('myChart2a').getContext('2d');
      var chart = new Chart(ctx, {
        // The type of chart we want to create
      type: fatturato["type"],

      // The data for our dataset
      data: {
          labels: ["Gennaio", "Febbraio", "Marzo", "Aprile", "Maggio", "Giugno", "Luglio", "Agosto", "Settembre", "Ottobre", "Novembre", "Dicembre"],
          datasets: [{
              label: 'Month Sales',
              data: fatturato["data"]
          }]
      }
   })
 }
  });
}

function getChartStep2b() {

  $.ajax({

    url: "getChartData.php",
    method: "GET",
    success: function(data) {

      var parse = JSON.parse(data);

      var fatturato_by_agent = parse["fatturato_by_agent"];

      var keys = Object.keys(fatturato_by_agent["data"]);
      var values = Object.values(fatturato_by_agent["data"]);

      var ctx = document.getElementById('myChart2b').getContext('2d');
      var chart = new Chart(ctx, {
        // The type of chart we want to create
        type: fatturato_by_agent["type"],

        // The data for our dataset
        data: {
          labels: keys,
          datasets: [{
              label: 'Month Sales',
              data: values
          }]
      }
    })
    }
 });
}

function init() {

  getChartStep2a();
  getChartStep2b();
}

$(document).ready(init);
