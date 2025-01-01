// Chart.js untuk Grafik Berat Badan
const ctx = document.getElementById('weightChart').getContext('2d');
const weightChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['JAN', 'FEB', 'MAR', 'APR', 'MAY', 'JUN', 'JUL', 'AUG'],
        datasets: [
            {
                label: 'Berat Badan',
                data: [68, 66, 65, 64, 66, 70, 67, 65],
                borderColor: '#ff8c00',
                backgroundColor: 'rgba(255, 140, 0, 0.2)',
                borderWidth: 2,
                fill: true,
            }
        ]
    },
    options: {
        responsive: true, // Membuat grafik responsif
        maintainAspectRatio: true, // Membiarkan chart menyesuaikan ukuran
        plugins: {
            legend: { display: false } // Sembunyikan legend
        },
        scales: {
            x: {
                grid: { display: false }
            },
            y: {
                beginAtZero: true
            }
        }
    }
});
