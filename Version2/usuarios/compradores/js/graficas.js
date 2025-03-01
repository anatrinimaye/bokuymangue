

// Datos
const datosCompras = {
    labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio'],
    datasets: [{
      label: 'Compras',
      data: [15000, 12000, 18000, 20000, 22000, 18000],
      backgroundColor: 'rgba(54, 162, 235, 0.2)',
      borderColor: 'rgba(54, 162, 235, 1)',
      borderWidth: 1
    }]
  };

  // Configuración del gráfico
  const ctxCompras = document.getElementById('miGraficoCompras').getContext('2d');
  const miGraficoCompras = new Chart(ctxCompras, {
    type: 'bar',
    data: datosCompras,
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      },
      plugins: {
        title: {
          display: true,
          text: 'Registro de Compras'
        }
      }
    }
  });


