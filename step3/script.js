function getLevel() {

    var urlParams = new UrlSearchParams(window.location.search);
    return urlParams.get("level");
}

function getChartStep3() {

 var level = getLevel();

 $ajax({

   url: "getChartData1.php",
   method: "GET",
   success: function(data) {

     var parse = JSON.parse(data);

     var fatturato = parse["fatturato"];

     var fatturato_by_agent = parse["fatturato_by_agent"];
     var team_efficiency = parse["team_efficiency"];

     var ctx = document.getElementById('myChart3a').getContext('2d');
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
     });

      if (level == "employee" || level == "clevel") {

      var keys = Object.keys(fatturato_by_agent["data"]);
      var values = Object.values(fatturato_by_agent["data"]);

      var ctx = document.getElementById('myChart3b').getContext('2d');
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
      });
      }

      if (level == "clevel") {

      var team1 = team_efficiency["data"]["team1"];
      var team2 = team_efficiency["data"]["team2"];
      var team3 = team_efficiency["data"]["team3"];

      var ctx = document.getElementById('myChart3c').getContext('2d');
      var chart = new Chart(ctx, {
        // The type of chart we want to create
        type: team_efficiency["type"],

        // The data for our dataset
        data: {
            labels: ["Gennaio", "Febbraio", "Marzo", "Aprile", "Maggio", "Giugno", "Luglio", "Agosto", "Settembre", "Ottobre", "Novembre", "Dicembre"],
            datasets: [{
                label: 'Team1',
                data: team1
            },
            {
                label: 'Team2',
                data: team2
            },
            {
                label: 'Team3',
                data: team3
            }]
         }
       })
     }
  }
});
}

function init() {
  getChartStep3();
}

$(document).ready(init);
