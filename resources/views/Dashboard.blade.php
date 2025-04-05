<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hospital Dashboard</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body class="bg-gray-100">

@include('Topbar')
<div class="p-6 mt-20">

  <!-- Stats Section (Full Width) -->
  <section class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
    <div class="bg-white p-6 shadow-md rounded-lg flex items-center justify-between w-full">
      <div>
        <p class="text-gray-500">Total Patients</p>
        <h2 class="text-2xl font-bold">1,230</h2>
      </div>
      <span class="text-teal-600 text-3xl">🩺</span>
    </div>

    <div class="bg-white p-6 shadow-md rounded-lg flex items-center justify-between w-full">
      <div>
        <p class="text-gray-500">Appointments Today</p>
        <h2 class="text-2xl font-bold">58</h2>
      </div>
      <span class="text-blue-600 text-3xl">📅</span>
    </div>

    <div class="bg-white p-6 shadow-md rounded-lg flex items-center justify-between w-full">
      <div>
        <p class="text-gray-500">Total Revenue</p>
        <h2 class="text-2xl font-bold">$48,500</h2>
      </div>
      <span class="text-green-600 text-3xl">💰</span>
    </div>

    <div class="bg-white p-6 shadow-md rounded-lg flex items-center justify-between w-full">
      <div>
        <p class="text-gray-500">Available Beds</p>
        <h2 class="text-2xl font-bold">72</h2>
      </div>
      <span class="text-red-600 text-3xl">🛏</span>
    </div>
  </section>

  <!-- Analytics Charts (Full Width) -->
  <section class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-12">
    <div class="bg-white p-6 shadow-md rounded-lg w-full h-80">
      <h2 class="text-xl font-semibold text-gray-700 mb-4 text-center">Patients Statistics</h2>
      <canvas id="patientsChart"></canvas>
    </div>

    <div class="bg-white p-6 shadow-md rounded-lg w-full h-80">
      <h2 class="text-xl font-semibold text-gray-700 mb-4 text-center">Revenue Trends</h2>
      <canvas id="revenueChart"></canvas>
    </div>
  </section>

  <!-- Table Section (Full Width) -->
  <section class="bg-white p-6 shadow-md rounded-lg mt-8">
    <h2 class="text-xl font-semibold text-gray-700 mb-4">Patient Appointments</h2>
    <table class="min-w-full bg-white table-auto">
      <thead>
        <tr>
          <th class="py-2 px-4 border-b text-left text-gray-600">Patient Name</th>
          <th class="py-2 px-4 border-b text-left text-gray-600">Appointment Date</th>
          <th class="py-2 px-4 border-b text-left text-gray-600">Doctor</th>
          <th class="py-2 px-4 border-b text-left text-gray-600">Status</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="py-2 px-4 border-b text-gray-600">John Doe</td>
          <td class="py-2 px-4 border-b text-gray-600">2025-03-19</td>
          <td class="py-2 px-4 border-b text-gray-600">Dr. Smith</td>
          <td class="py-2 px-4 border-b text-gray-600">Scheduled</td>
        </tr>
        <tr>
          <td class="py-2 px-4 border-b text-gray-600">Jane Doe</td>
          <td class="py-2 px-4 border-b text-gray-600">2025-03-20</td>
          <td class="py-2 px-4 border-b text-gray-600">Dr. Johnson</td>
          <td class="py-2 px-4 border-b text-gray-600">Completed</td>
        </tr>
        <tr>
          <td class="py-2 px-4 border-b text-gray-600">Emily Smith</td>
          <td class="py-2 px-4 border-b text-gray-600">2025-03-22</td>
          <td class="py-2 px-4 border-b text-gray-600">Dr. Williams</td>
          <td class="py-2 px-4 border-b text-gray-600">Scheduled</td>
        </tr>
      </tbody>
    </table>
  </section>
</div>

<!-- Chart.js Scripts -->
<script>
  // Patients Statistics Chart
  const patientsCtx = document.getElementById('patientsChart')?.getContext('2d');
  if (patientsCtx) {
    new Chart(patientsCtx, {
      type: 'bar',
      data: {
        labels: ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'],
        datasets: [{
          label: 'New Patients',
          data: [12, 19, 13, 15, 22, 30, 25],
          backgroundColor: 'rgba(54, 162, 235, 0.6)',
          borderColor: 'rgba(54, 162, 235, 1)',
          borderWidth: 1
        }]
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        scales: {
          x: { grid: { display: false } },
          y: { beginAtZero: true }
        }
      }
    });
  }

  // Revenue Trends Chart
  const revenueCtx = document.getElementById('revenueChart')?.getContext('2d');
  if (revenueCtx) {
    new Chart(revenueCtx, {
      type: 'line',
      data: {
        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul'],
        datasets: [{
          label: 'Monthly Revenue ($)',
          data: [5000, 7000, 8000, 6500, 7200, 9000, 10000],
          backgroundColor: 'rgba(75, 192, 192, 0.6)',
          borderColor: 'rgba(75, 192, 192, 1)',
          borderWidth: 2,
          fill: true
        }]
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        scales: {
          x: { grid: { display: false } },
          y: { beginAtZero: true }
        }
      }
    });
  }
</script>

</body>
</html>
