<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Billing Dashboard</title>
  <!-- Tailwind CSS -->
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex flex-col h-screen pt-8 w-full">
  
  <!-- Topbar Section -->
  @include('Topbar')

  <!-- Main Content Section -->
  <div class="flex-1 flex flex-col w-full">
    
    <!-- Top Navigation Bar (Header) -->
    <header class="bg-teal-600 shadow-md p-4 mt-10 flex justify-between items-center w-full">
      <h1 class="text-2xl font-semibold text-white">Patient Billing Dashboard</h1>
      <button class="p-2 bg-gray-100 border border-gray-300 rounded-full hover:bg-gray-200 focus:ring-2 focus:ring-teal-500" title="Refresh">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <polyline points="23 4 23 10 17 10"></polyline>
          <polyline points="1 20 1 14 7 14"></polyline>
          <path d="M3.51 9a9 9 0 0114.18-5.26L23 10"></path>
          <path d="M20.49 15a9 9 0 01-14.18 5.26L1 14"></path>
        </svg>
      </button>
    </header>

    <!-- Main Content Area -->
    <div class="flex-1 p-6 w-full">

      <!-- Search & Filters Section -->
      <div class="bg-white p-6 shadow-sm rounded-lg mb-6 w-full">
        <p class="text-sm text-gray-600 mb-4">
          <span class="text-teal-500 font-semibold">ℹ</span> Search for patients using their ID, registration number, or name.
        </p>

        <div class="flex flex-wrap gap-4 items-center w-full">
          <select class="w-full md:w-48 border border-gray-300 rounded-md px-3 py-2 text-gray-600 bg-white focus:outline-none focus:ring-2 focus:ring-teal-500">
            <option>Patient ID</option>
            <option>Registration No</option>
            <option>Patient Name</option>
          </select>

          <div class="relative flex-1 w-full">
            <input 
              type="text" 
              placeholder="Search Patient" 
              class="w-full border border-gray-300 rounded-md pl-10 pr-4 py-2 text-gray-700 focus:outline-none focus:ring-2 focus:ring-teal-500"
            />
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-400 absolute left-3 top-1/2 transform -translate-y-1/2" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <circle cx="11" cy="11" r="8"></circle>
              <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
            </svg>
          </div>

          <button class="px-4 py-2 bg-teal-500 text-white rounded-md hover:bg-teal-600 focus:outline-none focus:ring-2 focus:ring-teal-500 w-full md:w-auto">
            Search
          </button>
        </div>
      </div>

      <!-- Patient Billing Table -->
      <div class="bg-white p-6 rounded-lg shadow-sm text-gray-500 w-full">
        <table class="w-full border-collapse border border-gray-200">
          <thead>
            <tr class="bg-gray-100">
              <th class="border border-gray-200 p-3 text-left">Patient ID</th>
              <th class="border border-gray-200 p-3 text-left">Name</th>
              <th class="border border-gray-200 p-3 text-left">Registration No</th>
              <th class="border border-gray-200 p-3 text-left">Total Bill</th>
              <th class="border border-gray-200 p-3 text-left">Status</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="border border-gray-200 p-3">1001</td>
              <td class="border border-gray-200 p-3">John Doe</td>
              <td class="border border-gray-200 p-3">REG12345</td>
              <td class="border border-gray-200 p-3">$500</td>
              <td class="border border-gray-200 p-3 text-green-600">Paid</td>
            </tr>
            <tr class="bg-gray-50">
              <td class="border border-gray-200 p-3">1002</td>
              <td class="border border-gray-200 p-3">Jane Smith</td>
              <td class="border border-gray-200 p-3">REG67890</td>
              <td class="border border-gray-200 p-3">$750</td>
              <td class="border border-gray-200 p-3 text-red-600">Pending</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</body>
</html>
