

const ctx = document.getElementById('myChart').getContext('2d');
const meses = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio'];
const compras = [15000, 12000, 18000, 10000, 20000, 16000];
const ventas = [22000, 18000, 25000, 15000, 30000, 24000];

const myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: meses,
        datasets: [{
            label: 'Compras',
            data: compras,
            backgroundColor: 'rgba(54, 162, 235, 0.5)',
           
            
        },
        {
            label: 'Ventas',
            data: ventas,
            backgroundColor: 'rgba(4, 112, 0, 0.82)',
            
            
        }]
    },
    options: {
        responsive: true,
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});


