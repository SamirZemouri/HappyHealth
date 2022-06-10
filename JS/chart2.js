const labels2 = [
    '2015',
    '2016',
    '2017',
    '2018',
    '2019',
    '2020',
    '2021',
    '2022'
  ];
  
  const data2 = {
    labels: labels2,
    datasets: [{
      label: '',
      backgroundColor: '#44B562',
      borderColor: '#44B562',
      data: [0, 1, 1, 0, 1, 0, 1, 1],
    }]
  };
  
  const config2 = {
    type: 'line',
    data: data2,
    options: {},
  }
  
  
  const myChart2 = new Chart(
    document.getElementById('myChart2'),
    config2
  );
  