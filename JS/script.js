// GRAPH WITH CHART.JS

var xValues = [2015,2016,2017,2018,2019,2020,2021];

new Chart("happyWorld", {
  type: "line",
  data: {
    labels: xValues,
    datasets: [{
        data: [5,3,5,3,5,3,5],
        backgroundColor: "#FEC505",
        borderColor: "#FEC505",
        fill: false
      }]
  },
  options: {
    legend: {display: false},
    scales: {
      yAxes: [{ticks: {min: 1, max:7}}],
      xAxes: [{ticks: {min: 2015, max:2022}}]
    }
  }
});


// ADVICE GENERATOR

const adviceId = document.querySelector("#adviceNum");
const adviceQuote = document.querySelector("#advice");
const btn = document.querySelector("#btn");

function generateAdvice() {
  fetch("https://api.adviceslip.com/advice", { cache: "no-cache" })
    .then((response) => response.json())
    .then((response) => {
      let data = response.slip;
      let dataId = data.id;
      let dataAdvice = data.advice;

      adviceId.innerHTML = `ADVICE # ${dataId}`;
      adviceQuote.innerHTML = '“ '+dataAdvice+' ”';
    });
}

btn.addEventListener("click", () => {
  generateAdvice();
});