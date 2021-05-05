let date = document.getElementById("date").value;
let score1 = document.getElementById("score1").value;
let score2 = document.getElementById("score2").value;
let score3 = document.getElementById("score3").value;
console.log(date);
console.log(score1);
console.log(score2);
console.log(score3);

var ctx = document.getElementById("myChart");
var myLineChart = new Chart(ctx, {
	type:"line",
	data: {
		datasets: [
			{
				label:"Score1",
				data:[4445,5000,6000],
				borderColor:"red",
				backgroundColor:"red"
			}
		]
	},
	options: {
  		title: {
    		display: true,
			text: "ScoreChart"
  },
  scales: {
    yAxes: [{
      ticks: {
        suggestedMax: 30000,
        suggestedMin: 0,
        stepSize: 5000,
   }
        }]
      },
    }
  });