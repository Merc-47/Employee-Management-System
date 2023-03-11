(function($) {
    $('nav li').click(function() {
      $(this).addClass('active').siblings('li').removeClass('active');
      $('section:nth-of-type('+$(this).data('rel')+')').stop().fadeIn(400, 'linear').siblings('section').stop().fadeOut(400, 'linear'); 
    });
  })(jQuery);

  var xValues = ["Absent %","Present %"];
  var yValues = [25, 75,];
  var barColors = [
    "#b91d47",
    "#00aba9",
  ];
  
  new Chart("myChartPie", {
    type: "pie",
    data: {
      labels: xValues,
      datasets: [{
        backgroundColor: barColors,
        data: yValues
      }]
    },
    options: {
      title: {
        display: true,
        text: "Total attendance"
      }
    }
  });

  var xValues = [50,60,70,80,90,100,110,120,130,140,150];
var yValues = [7,8,8,9,9,9,10,11,14,14,15];

new Chart("myChartLine", {
  type: "line",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: "dodgerblue",
      borderColor: "#00aba9",
      data: yValues
    }]
  },
  options:{
    title: {
    display: true,
    text: "Total Employee progress"
  }}
});

