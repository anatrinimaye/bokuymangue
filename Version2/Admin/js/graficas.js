

// GRAFICO DE VENTAS
const grafico1= {
    labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo','Junio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'],
    datasets: [{
        label: 'VENTAS',
        data: [1, 3, 5, 6, 30, 1, 23, 6, 7, 1, 3, 14],
        backgroundColor: 'rgba(67, 176, 12, 0.63)',
        borderColor: 'rgb(0, 0, 0)',
        borderWidth: 1
    }]
};
const ventas = document.getElementById('grafVentas').getContext('2d');
const grafVentas = new Chart(ventas,{
    type: 'bar',
    data: grafico1,
    Options:{
        scales: {
            y:{
                beginAtzero: true
            }
        }
    }
});


// GRAFICO DE COMPRAS
// const grafico2= {
//     labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo','Junio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'],
//     datasets: [{
//         label: 'VENTAS',
//         data: [1, 3, 5, 6, 30, 1, 23, 6, 7, 1, 3, 14],
//         backgroundColor: 'rgba(12, 108, 176, 0.63)',
//         borderColor: 'rgb(0, 0, 0)',
//         borderWidth: 1
//     }]
// };
// const compra = document.getElementById('grafCompras').getContext('2d');
// const grafCompras = new Chart(compra,{
//     type: 'bar',
//     data: grafico2,
//     Options:{
//         scales: {
//             y:{
//                 beginAtzero: true
//             }
//         }
//     }
// });


