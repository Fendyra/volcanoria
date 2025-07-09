 // Data untuk pie chart
 const pieData = {
    labels: ["Tipe A", "Tipe B", "Tipe C"],
    datasets: [{
      data: [76, 30, 21],
      backgroundColor: ["#ff6384", "#ffcd56", "#36a2eb"],
    }]
  };

  // Data untuk bar chart
  const barData = {
    labels: ["Bali - Nusa Tenggara", "Jawa", "Maluku", "Sulawesi", "Sumatera"],
    datasets: [
      {
        label: "Tipe A",
        data: [22, 19, 4, 11, 12],
        backgroundColor: "#ff6384",
      },
      {
        label: "Tipe B",
        data: [2, 10, 2, 5, 12],
        backgroundColor: "#ffcd56",
      },
      {
        label: "Tipe C",
        data: [5, 5, 1, 5, 6],
        backgroundColor: "#36a2eb",
      }
    ]
  };

  // Opsi untuk pie chart
  const pieOptions = {
    plugins: {
      legend: {
        position: 'right'
      }
    }
  };

  // Opsi untuk bar chart
  const barOptions = {
    responsive: true,
    plugins: {
      legend: {
        position: 'top',
      },
    },
    scales: {
      y: {
        beginAtZero: true,
      }
    }
  };

  // Render pie chart
  const pieCtx = document.getElementById('pieChart').getContext('2d');
  new Chart(pieCtx, {
    type: 'pie',
    data: pieData,
    options: pieOptions
  });

  // Render bar chart
  const barCtx = document.getElementById('barChart').getContext('2d');
  new Chart(barCtx, {
    type: 'bar',
    data: barData,
    options: barOptions
  });