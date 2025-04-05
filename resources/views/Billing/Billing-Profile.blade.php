<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Billing Profile</title>
  <!-- Tailwind CSS -->
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex flex-col">

  <!-- Topbar (can be included as a partial) -->
  @include('Topbar')

  <!-- Main Layout -->
  <div class="flex h-full ml-0 mt-0 mb-0 mr-0">

    <!-- Sidebar (fixed) -->
    <div class="w-64 h-screen bg-white shadow-lg p-4 fixed ml-0 mt-0 mb-0 mr-0">
      @include('Sidebar')
    </div>

    <!-- Main Content (Right side) -->
    <div class="flex-1 ml-64 p-6 flex flex-col items-center justify-start pt-24 ml-0 mt-0 mb-0 mr-0"> <!-- Increased pt-24 -->

      <!-- Top Header -->
      <header class="bg-teal-600 p-5 text-white shadow-md w-full ml-0 mt-0 mb-0 mr-0">
        <div class="container mx-auto flex justify-between items-center ml-0 mt-0 mb-0 mr-0">
          <h1 class="text-2xl font-bold">Billing Profile</h1>
          <button class="p-2 bg-white text-gray-600 rounded-full hover:bg-gray-200 focus:ring-2 focus:ring-white" title="Refresh">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <polyline points="23 4 23 10 17 10"></polyline>
              <polyline points="1 20 1 14 7 14"></polyline>
              <path d="M3.51 9a9 9 0 0114.18-5.26L23 10"></path>
              <path d="M20.49 15a9 9 0 01-14.18 5.26L1 14"></path>
            </svg>
          </button>
        </div>
      </header>

      <!-- Search Bar (Floating) -->
      <div class="relative w-full flex justify-center mt-6 ml-0 mt-0 mb-0 mr-0">
        <div class="bg-white p-4 rounded-lg shadow-md w-2/3 flex items-center gap-4 ml-0 mt-0 mb-0 mr-0">
          <select class="border border-gray-300 rounded-md px-3 py-2 text-gray-700 focus:outline-none focus:ring-2 focus:ring-teal-500">
            <option>Patient ID</option>
            <option>Registration No</option>
            <option>Patient Name</option>
          </select>

          <div class="relative flex-1">
            <input type="text" placeholder="Search Patient" class="w-full border border-gray-300 rounded-md pl-10 pr-4 py-2 text-gray-700 focus:outline-none focus:ring-2 focus:ring-teal-500">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-400 absolute left-3 top-1/2 transform -translate-y-1/2" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <circle cx="11" cy="11" r="8"></circle>
              <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
            </svg>
          </div>

          <button class="px-4 py-2 bg-teal-600 text-white rounded-md hover:bg-teal-700 focus:outline-none focus:ring-2 focus:ring-teal-500">
            Search
          </button>
        </div>
      </div>

      <!-- Information Box -->
      <div class="flex justify-center mt-4 ml-0 mt-0 mb-0 mr-0">
        <p class="text-sm text-gray-600 flex items-center bg-gray-50 p-3 rounded-lg shadow-sm ml-0 mt-0 mb-0 mr-0">
          <span class="mr-1 text-teal-500">ℹ</span> Search patient profiles using ID, registration number, or name.
        </p>
      </div>

      <!-- Main Content Area -->
      <div class="container mx-auto mt-6 p-6 bg-white shadow-md rounded-lg text-gray-600 ml-0 mt-0 mb-0 mr-0 w-full">
        📊 Patient billing records and analytics will be displayed here.
      </div>

    </div>

  </div>

</body>
</html>
