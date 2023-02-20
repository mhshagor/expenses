<x-admin-layout>
					
				<div class="px-5 sm:px-8 mx-auto space-y-6">
					<div class="grid grid-cols-12 gap-6 -mt-12">
						@include("dashboard.recent_movement")
						@include("dashboard.small_cards")
					</div>
					<div class="grid grid-cols-12 gap-6">
						@include("dashboard.calendar")
						@include("dashboard.current_visitors")
						@include("dashboard.browser_usage")
					</div>
					<div class="grid grid-cols-12 gap-6">
						@include("dashboard.latest_projects")
						@include("dashboard.monthly_sales")
					</div>
				</div>
</x-admin-layout>
	<!-- lineChart -->
	<script>
		const line = document.getElementById('lineChart').getContext('2d');

		const myChart = new Chart(line, {
			type: 'line',
			data: {
				labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
				datasets: [{
						label: 'Orders',
						fill: true,
						backgroundColor: '#0d6efd',
						data: [3, 2, 3, 5, 6, 5, 4, 6, 9, 10, 8, 9],
					},
					{
						label: 'Sales ($)',
						fill: true,
						backgroundColor: "rgba(0, 0, 0, 0.05)",
						borderColor: "rgba(0, 0, 0, 0.05)",
						data: [5, 4, 10, 15, 16, 12, 10, 13, 20, 22, 18, 20],
					}
				],
			},
			options: {
				maintainAspectRatio: false,
				scales: {
					y: {
						beginAtZero: true
					}
				},
				plugins: {
					legend: {
						display: false
					}
				},
			}
		});
	</script>
	<!-- pieChart -->
	<script>
		const pie = document.getElementById('pieChart').getContext('2d');

		const pieChart = new Chart(pie, {
			type: 'doughnut',
			data: {
				labels: ["Chrome", "Firefox", "IE", ],
				datasets: [{
					backgroundColor: ['blue', 'orange', 'red'],
					data: [4401, 4003, 1589],
					borderWidth: 0,
				}],
			},
			options: {
				plugins: {
					legend: {
						display: false,
					},
				},
				maintainAspectRatio: false,
			}
		});
	</script>
	<!-- barChart -->
	<script>
		const bar = document.getElementById('barChart').getContext('2d');
		const barChart = new Chart(bar, {
			type: 'bar',
			data: {
				labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
				datasets: [{
					label: 'Orders',
					backgroundColor: '#0d6efd',
					barThickness: 12,
					data: [3, 2, 3, 5, 6, 5, 4, 6, 9, 10, 8, 9],
				}],
			},
			options: {
				plugins: {
					legend: {
						display: false,
					},
				},
				maintainAspectRatio: false,
			}
		});
	</script>
