<div>
    <canvas id="chartJenisKelamin" width="400" height="400"></canvas>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    var ctx = document.getElementById('chartJenisKelamin').getContext('2d');
    var chartJenisKelamin = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Laki-laki', 'Perempuan'],
            datasets: [{
                label: 'Jumlah',
                data: [750, 65], // Ubah nilai sesuai dengan data Anda
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>
