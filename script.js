function getChart() {

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
              label: 'Income',
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

function init() {
  
  getChart();
}

$(document).ready(init);
