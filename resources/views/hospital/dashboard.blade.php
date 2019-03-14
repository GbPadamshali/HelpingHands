@extends('hospital.layout.design')
@section('content')
			<main class="content">
				<div class="container-fluid p-0">

					<div class="row">
						<div class="col-12 col-md-6 col-xl d-flex">
							<div class="card flex-fill">
								<div class="card-body py-4">
									<div class="row">
										<div class="col-8">
											<h3 class="mb-2">4.562</h3>
											<div class="mb-0">Active Doctors</div>
										</div>
										<div class="col-4 ml-auto text-right">
											<div class="d-inline-block mt-2">
												<i class="feather-lg text-primary" data-feather="users"></i>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-6 col-xl d-flex">
							<div class="card flex-fill">
								<div class="card-body py-4">
									<div class="row">
										<div class="col-8">
											<h3 class="mb-2">4.562</h3>
											<div class="mb-0">Active Patient</div>
										</div>
										<div class="col-4 ml-auto text-right">
											<div class="d-inline-block mt-2">
												<i class="feather-lg text-primary" data-feather="users"></i>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-6 col-xl d-flex">
							<div class="card flex-fill">
								<div class="card-body py-4">
									<div class="row">
										<div class="col-8">
											<h3 class="mb-2">27.424</h3>
											<div class="mb-0">Pharmachist</div>
										</div>
										<div class="col-4 ml-auto text-right">
											<div class="d-inline-block mt-2">
												<i class="feather-lg text-warning" data-feather="users"></i>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						
						<div class="col-12 col-md-6 col-xl d-flex">
							<div class="card flex-fill">
								<div class="card-body py-4">
									<div class="row">
										<div class="col-8">
											<h3 class="mb-2">$ 29.200</h3>
											<div class="mb-0">Receptionist</div>
										</div>
										<div class="col-4 ml-auto text-right">
											<div class="d-inline-block mt-2">
												<i class="feather-lg text-danger" data-feather="users"></i>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-6 col-xl d-flex">
							<div class="card flex-fill">
								<div class="card-body py-4">
									<div class="row">
										<div class="col-8">
											<h3 class="mb-2">67</h3>
											<div class="mb-0">Pending Orders</div>
										</div>
										<div class="col-4 ml-auto text-right">
											<div class="d-inline-block mt-2">
												<i class="feather-lg text-success" data-feather="shopping-cart"></i>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-6 col-xl d-none d-xxl-flex">
							<div class="card flex-fill">
								<div class="card-body py-4">
									<div class="row">
										<div class="col-8">
											<h3 class="mb-2">$ 49.400</h3>
											<div class="mb-0">Total Revenue</div>
										</div>
										<div class="col-4 ml-auto text-right">
											<div class="d-inline-block mt-2">
												<i class="feather-lg text-info" data-feather="dollar-sign"></i>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-12 col-lg-8 d-flex">
							<div class="card flex-fill w-100">
								<div class="card-header">
									<div class="card-actions float-right">
										<div class="dropdown show">
											<a href="#" data-toggle="dropdown" data-display="static">
              <i class="align-middle" data-feather="more-horizontal"></i>
            </a>

											<div class="dropdown-menu dropdown-menu-right">
												<a class="dropdown-item" href="#">Action</a>
												<a class="dropdown-item" href="#">Another action</a>
												<a class="dropdown-item" href="#">Something else here</a>
											</div>
										</div>
									</div>
									<h5 class="card-title mb-0">Real-Time</h5>
								</div>
								<div class="card-body p-2">
									<div id="world_map" style="height:350px;"></div>
								</div>
							</div>

							<script>
								document.addEventListener("DOMContentLoaded", function(event) {
									$('#world_map').vectorMap({
										map: "world_mill",
										normalizeFunction: "polynomial",
										hoverOpacity: .7,
										hoverColor: false,
										regionStyle: {
											initial: {
												fill: "#e3eaef"
											}
										},
										markerStyle: {
											initial: {
												"r": 9,
												"fill": "#2979ff",
												"fill-opacity": .95,
												"stroke": "#fff",
												"stroke-width": 7,
												"stroke-opacity": .4
											},
											hover: {
												"stroke": "#fff",
												"fill-opacity": 1,
												"stroke-width": 1.5
											}
										},
										backgroundColor: "transparent",
										zoomOnScroll: false,
										markers: [{
												latLng: [31.230391, 121.473701],
												name: "Shanghai"
											},
											{
												latLng: [39.904202, 116.407394],
												name: "Beijing"
											},
											{
												latLng: [28.704060, 77.102493],
												name: "Delhi"
											},
											{
												latLng: [6.524379, 3.379206],
												name: "Lagos"
											},
											{
												latLng: [39.343357, 117.361649],
												name: "Tianjin"
											},
											{
												latLng: [24.860735, 67.001137],
												name: "Karachi"
											},
											{
												latLng: [41.008240, 28.978359],
												name: "Istanbul"
											},
											{
												latLng: [35.689487, 139.691711],
												name: "Tokyo"
											},
											{
												latLng: [23.129110, 113.264381],
												name: "Guangzhou"
											},
											{
												latLng: [19.075983, 72.877655],
												name: "Mumbai"
											},
											{
												latLng: [40.7127837, -74.0059413],
												name: "New York"
											},
											{
												latLng: [34.052235, -118.243683],
												name: "Los Angeles"
											},
											{
												latLng: [41.878113, -87.629799],
												name: "Chicago"
											},
											{
												latLng: [29.760427, -95.369804],
												name: "Houston"
											},
											{
												latLng: [33.448376, -112.074036],
												name: "Phoenix"
											},
											{
												latLng: [51.507351, -0.127758],
												name: "London"
											},
											{
												latLng: [48.856613, 2.352222],
												name: "Paris"
											},
											{
												latLng: [55.755825, 37.617298],
												name: "Moscow"
											},
											{
												latLng: [40.416775, -3.703790],
												name: "Madrid"
											}
										]
									});
								});
							</script>
						</div>
						<div class="col-12 col-lg-4 d-flex">
							<div class="card flex-fill w-100">
								<div class="card-header">
									<div class="card-actions float-right">
										<div class="dropdown show">
											<a href="#" data-toggle="dropdown" data-display="static">
              <i class="align-middle" data-feather="more-horizontal"></i>
            </a>

											<div class="dropdown-menu dropdown-menu-right">
												<a class="dropdown-item" href="#">Action</a>
												<a class="dropdown-item" href="#">Another action</a>
												<a class="dropdown-item" href="#">Something else here</a>
											</div>
										</div>
									</div>
									<h5 class="card-title mb-0">Sales / Revenue</h5>
								</div>
								<div class="card-body d-flex w-100">
									<div class="align-self-center chart chart-lg">
										<canvas id="chartjs-dashboard-bar"></canvas>
									</div>
								</div>
							</div>

							<script>
								document.addEventListener("DOMContentLoaded", function(event) {
									// Bar chart
									new Chart(document.getElementById("chartjs-dashboard-bar"), {
										type: 'bar',
										data: {
											labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
											datasets: [{
												label: "Last year",
												backgroundColor: "#2979ff",
												borderColor: "#2979ff",
												hoverBackgroundColor: "#2979ff",
												hoverBorderColor: "#2979ff",
												data: [54, 67, 41, 55, 62, 45, 55, 73, 60, 76, 48, 79]
											}, {
												label: "This year",
												backgroundColor: "#E8EAED",
												borderColor: "#E8EAED",
												hoverBackgroundColor: "#E8EAED",
												hoverBorderColor: "#E8EAED",
												data: [69, 66, 24, 48, 52, 51, 44, 53, 62, 79, 51, 68]
											}]
										},
										options: {
											maintainAspectRatio: false,
											legend: {
												display: false
											},
											scales: {
												yAxes: [{
													gridLines: {
														display: false
													},
													stacked: false,
													ticks: {
														stepSize: 20
													}
												}],
												xAxes: [{
													barPercentage: .75,
													categoryPercentage: .5,
													stacked: false,
													gridLines: {
														color: "transparent"
													}
												}]
											}
										}
									});
								});
							</script>
						</div>
					</div>

					<div class="row">
						<div class="col-12 col-lg-6 col-xl-4 d-flex">
							<div class="card flex-fill">
								<div class="card-header">
									<div class="card-actions float-right">
										<div class="dropdown show">
											<a href="#" data-toggle="dropdown" data-display="static">
              <i class="align-middle" data-feather="more-horizontal"></i>
            </a>

											<div class="dropdown-menu dropdown-menu-right">
												<a class="dropdown-item" href="#">Action</a>
												<a class="dropdown-item" href="#">Another action</a>
												<a class="dropdown-item" href="#">Something else here</a>
											</div>
										</div>
									</div>
									<h5 class="card-title mb-0">Calendar</h5>
								</div>
								<div class="card-body d-flex">
									<div class="align-self-center w-100">
										<div class="chart">
											<div id="datetimepicker-dashboard"></div>
										</div>
									</div>
								</div>
							</div>

							<script>
								document.addEventListener("DOMContentLoaded", function(event) {
									$('#datetimepicker-dashboard').datetimepicker({
										inline: true,
										sideBySide: false,
										format: 'L'
									});
								});
							</script>
						</div>
						<div class="col-12 col-xl-4 d-none d-xl-flex">
							<div class="card flex-fill w-100">
								<div class="card-header">
									<div class="card-actions float-right">
										<div class="dropdown show">
											<a href="#" data-toggle="dropdown" data-display="static">
              <i class="align-middle" data-feather="more-horizontal"></i>
            </a>

											<div class="dropdown-menu dropdown-menu-right">
												<a class="dropdown-item" href="#">Action</a>
												<a class="dropdown-item" href="#">Another action</a>
												<a class="dropdown-item" href="#">Something else here</a>
											</div>
										</div>
									</div>
									<h5 class="card-title mb-0">Source / Medium</h5>
								</div>
								<div class="card-body d-flex">
									<div class="align-self-center w-100">
										<div class="py-3">
											<div class="chart chart-xs">
												<canvas id="chartjs-dashboard-pie"></canvas>
											</div>
										</div>

										<table class="table mb-0">
											<thead>
												<tr>
													<th>Source</th>
													<th class="text-right">Revenue</th>
													<th class="text-right">Value</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td><i class="fas fa-square-full text-primary"></i> Direct</td>
													<td class="text-right">$ 2.206</td>
													<td class="text-right text-success">+34%</td>
												</tr>
												<tr>
													<td><i class="fas fa-square-full text-warning"></i> Affiliate</td>
													<td class="text-right">$ 853</td>
													<td class="text-right text-success">+15%</td>
												</tr>
												<tr>
													<td><i class="fas fa-square-full text-danger"></i> E-mail</td>
													<td class="text-right">$ 521</td>
													<td class="text-right text-success">+22%</td>
												</tr>
												<tr>
													<td><i class="fas fa-square-full text-dark"></i> Other</td>
													<td class="text-right">$ 1.725</td>
													<td class="text-right text-success">+18%</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>

							<script>
								document.addEventListener("DOMContentLoaded", function(event) {
									// Pie chart
									new Chart(document.getElementById("chartjs-dashboard-pie"), {
										type: 'pie',
										data: {
											labels: ["Direct", "Affiliate", "E-mail", "Other"],
											datasets: [{
												data: [2206, 853, 521, 1725],
												backgroundColor: ["#2979ff", "#ff9100", "#ff1744", "#E8EAED"],
												borderColor: "transparent"
											}]
										},
										options: {
											responsive: !window.MSInputMethodContext,
											maintainAspectRatio: false,
											legend: {
												display: false
											}
										}
									});
								});
							</script>
						</div>
						<div class="col-12 col-lg-6 col-xl-4 d-flex">
							<div class="card flex-fill w-100">
								<div class="card-header">
									<div class="card-actions float-right">
										<div class="dropdown show">
											<a href="#" data-toggle="dropdown" data-display="static">
              <i class="align-middle" data-feather="more-horizontal"></i>
            </a>

											<div class="dropdown-menu dropdown-menu-right">
												<a class="dropdown-item" href="#">Action</a>
												<a class="dropdown-item" href="#">Another action</a>
												<a class="dropdown-item" href="#">Something else here</a>
											</div>
										</div>
									</div>
									<h5 class="card-title mb-0">Schedule</h5>
								</div>
								<div class="p-4 border-bottom">
									<h2>You have 2 appointments today!</h2>
									<p class="mb-0 text-sm">Your next meeting is in 3 hours. Check your <a href="#">schedule</a> to see the details.</p>
								</div>
								<div class="card-body">
									<ul class="timeline">
										<li class="timeline-item">
											<strong>Chat with Andrew and Marie</strong>
											<span class="float-right text-muted text-sm">45m ago</span>
											<p>Nam pretium turpis et arcu. Duis arcu tortor, suscipit eget, imperdiet nec, imperdiet iaculis, ipsum...</p>
										</li>
										<li class="timeline-item">
											<strong>The big launch</strong>
											<span class="float-right text-muted text-sm">2h ago</span>
											<p>Sed aliquam ultrices mauris. Integer ante arcu, accumsan a, consectetuer eget, posuere ut, mauris...</p>
										</li>
										<li class="timeline-item">
											<strong>Coffee break</strong>
											<span class="float-right text-muted text-sm">3h ago</span>
											<p>Curabitur ligula sapien, tincidunt non, euismod vitae, posuere imperdiet, leo. Maecenas malesuada. Praesent congue erat at massa...</p>
										</li>
										<li class="timeline-item">
											<strong>Conference call with Andrew</strong>
											<span class="float-right text-muted text-sm">5h ago</span>
											<p>Aenean posuere, tortor sed cursus feugiat, nunc augue blandit nunc, eu sollicitudin urna dolor sagittis lacus...</p>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-12 col-lg-6 col-xl-8 d-flex">
							<div class="card flex-fill">
								<div class="card-header">
									<div class="card-actions float-right">
										<div class="dropdown show">
											<a href="#" data-toggle="dropdown" data-display="static">
              <i class="align-middle" data-feather="more-horizontal"></i>
            </a>

											<div class="dropdown-menu dropdown-menu-right">
												<a class="dropdown-item" href="#">Action</a>
												<a class="dropdown-item" href="#">Another action</a>
												<a class="dropdown-item" href="#">Something else here</a>
											</div>
										</div>
									</div>
									<h5 class="card-title mb-0">Top Selling Products</h5>
								</div>
								<table id="datatables-dashboard-products" class="table table-striped my-0">
									<thead>
										<tr>
											<th>Name</th>
											<th class="d-none d-xl-table-cell">Tech</th>
											<th class="d-none d-xl-table-cell">License</th>
											<th class="d-none d-xl-table-cell">Tickets</th>
											<th>Sales</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>AppStack Theme</td>
											<td><span class="badge badge-success">HTML</span></td>
											<td class="d-none d-xl-table-cell">Single license</td>
											<td class="d-none d-xl-table-cell">50</td>
											<td class="d-none d-xl-table-cell">720</td>
										</tr>
										<tr>
											<td>Spark Theme</td>
											<td><span class="badge badge-danger">Angular</span></td>
											<td class="d-none d-xl-table-cell">Single license</td>
											<td class="d-none d-xl-table-cell">20</td>
											<td class="d-none d-xl-table-cell">540</td>
										</tr>
										<tr>
											<td>Milo Theme</td>
											<td><span class="badge badge-warning">React</span></td>
											<td class="d-none d-xl-table-cell">Single license</td>
											<td class="d-none d-xl-table-cell">40</td>
											<td class="d-none d-xl-table-cell">280</td>
										</tr>
										<tr>
											<td>Ada Theme</td>
											<td><span class="badge badge-info">Vue</span></td>
											<td class="d-none d-xl-table-cell">Single license</td>
											<td class="d-none d-xl-table-cell">60</td>
											<td class="d-none d-xl-table-cell">610</td>
										</tr>
										<tr>
											<td>Abel Theme</td>
											<td><span class="badge badge-danger">Angular</span></td>
											<td class="d-none d-xl-table-cell">Single license</td>
											<td class="d-none d-xl-table-cell">80</td>
											<td class="d-none d-xl-table-cell">150</td>
										</tr>
										<tr>
											<td>Spark Theme</td>
											<td><span class="badge badge-success">HTML</span></td>
											<td class="d-none d-xl-table-cell">Single license</td>
											<td class="d-none d-xl-table-cell">20</td>
											<td class="d-none d-xl-table-cell">480</td>
										</tr>
										<tr>
											<td>Libre Theme</td>
											<td><span class="badge badge-warning">React</span></td>
											<td class="d-none d-xl-table-cell">Single license</td>
											<td class="d-none d-xl-table-cell">30</td>
											<td class="d-none d-xl-table-cell">280</td>
										</tr>
										<tr>
											<td>Von Theme</td>
											<td><span class="badge badge-danger">Angular</span></td>
											<td class="d-none d-xl-table-cell">Single license</td>
											<td class="d-none d-xl-table-cell">50</td>
											<td class="d-none d-xl-table-cell">350</td>
										</tr>
										<tr>
											<td>Material Blog Theme</td>
											<td><span class="badge badge-info">Vue</span></td>
											<td class="d-none d-xl-table-cell">Single license</td>
											<td class="d-none d-xl-table-cell">10</td>
											<td class="d-none d-xl-table-cell">480</td>
										</tr>
									</tbody>
								</table>
							</div>

							<script>
								document.addEventListener("DOMContentLoaded", function(event) {
									$('#datatables-dashboard-products').DataTable({
										pageLength: 6,
										lengthChange: false,
										bFilter: false,
										autoWidth: false
									});
								});
							</script>
						</div>
						<div class="col-12 col-lg-6 col-xl-4 d-flex">
							<div class="card flex-fill w-100">
								<div class="card-header">
									<div class="card-actions float-right">
										<div class="dropdown show">
											<a href="#" data-toggle="dropdown" data-display="static">
              <i class="align-middle" data-feather="more-horizontal"></i>
            </a>

											<div class="dropdown-menu dropdown-menu-right">
												<a class="dropdown-item" href="#">Action</a>
												<a class="dropdown-item" href="#">Another action</a>
												<a class="dropdown-item" href="#">Something else here</a>
											</div>
										</div>
									</div>
									<h5 class="card-title mb-0">Daily feed</h5>
								</div>
								<div class="card-body">
									<div class="media">
										<img src="{{ asset('images/hospital_images/avatars/avatar-5.jpg') }}" width="36" height="36" class="rounded-circle mr-2" alt="Kathy Davis">
										<div class="media-body">
											<small class="float-right text-navy">15m ago</small>
											<strong>Kathy Davis</strong> started following <strong>Marie Salter</strong><br />
											<small class="text-muted">Today 6:41 pm</small><br />

										</div>
									</div>

									<hr/>
									<div class="media">
										<img src="{{ asset('images/hospital_images/avatars/avatar.jpg') }}" width="36" height="36" class="rounded-circle mr-2" alt="Andrew Jones">
										<div class="media-body">
											<small class="float-right text-navy">1h ago</small>
											<strong>Andrew Jones</strong> posted something on <strong>Marie Salter</strong>'s timeline<br />
											<small class="text-muted">Today 5:41 pm</small>

											<div class="border text-sm text-muted p-2 mt-1">
												Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem...
											</div>
										</div>
									</div>

									<hr />
									<div class="media">
										<img src="{{ asset('images/hospital_images/avatars/avatar-4.jpg') }}" width="36" height="36" class="rounded-circle mr-2" alt="Marie Salter">
										<div class="media-body">
											<small class="float-right text-navy">3h ago</small>
											<strong>Marie Salter</strong> posted a new blog<br />

											<small class="text-muted">Today 3:35 pm</small>
										</div>
									</div>

									<hr />
									<a href="#" class="btn btn-primary btn-block">Load more</a>
								</div>
							</div>
						</div>
					</div>

				</div>
			</main>
@endsection
