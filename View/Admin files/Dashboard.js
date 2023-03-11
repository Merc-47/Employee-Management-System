var xValues = [50,60,70,80,90,100,110,120,130,140,150];
var yValues = [7,8,8,9,9,9,10,11,14,14,15];

new Chart("myChartLineOne", {
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