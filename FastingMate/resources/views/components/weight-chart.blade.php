<div class="bg-white rounded-lg shadow-md p-6">
    <div class="flex items-center justify-between mb-4">
        <h3 class="text-lg font-bold">Grafik Berat Badan</h3>
        <span class="bg-orange-500 text-white text-xs px-2 py-1 rounded-full">Limit</span>
    </div>
    <canvas id="weightChart" class="w-full h-64"></canvas>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const ctx = document.getElementById('weightChart').getContext('2d');
        const weightChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['JAN', 'FEB', 'MAR', 'APR', 'MAY', 'JUN', 'JUL', 'AUG'],
                datasets: [
                    {
                        label: 'Berat Badan',
                        data: [65, 67, 64, 68, 70, 69, 68, 72],
                        borderColor: 'rgb(34, 197, 94)',
                        backgroundColor: 'rgba(34, 197, 94, 0.2)',
                        tension: 0.4,
                    },
                    {
                        label: 'Limit',
                        data: [70, 70, 70, 70, 70, 70, 70, 70],
                        borderColor: 'rgb(239, 68, 68)',
                        borderDash: [5, 5],
                        fill: false,
                        tension: 0.4,
                    },
                ],
            },
            options: {
                responsive: true,
                plugins: {
                    tooltip: {
                        callbacks: {
                            label: function (context) {
                                return `${context.raw} KG`;
                            },
                        },
                    },
                },
            },
        });
    });
</script>
