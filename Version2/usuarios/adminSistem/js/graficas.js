

const ctx = document.getElementById('myChart').getContext('2d');
const meses = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio'
    
];
const compras = [15000, 12000, 18000, 10000, 20000, 16000,22000, 9000, 5000];
const ventas = [22000, 1000, 5000, 15000, 3000, 24000, 2000, 10000, 6000];

const myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: meses,
        datasets: [{
            label: 'Compras',
            data: compras,
            backgroundColor: 'rgb(3, 76, 125)',
           
            
        },
        {
            label: 'Ventas',
            data: ventas,
            backgroundColor: 'rgb(4, 112, 0)',
            
            
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


