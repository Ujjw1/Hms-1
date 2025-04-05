<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Discharge Summary</title>
  <!-- Tailwind CSS CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-200 font-sans">

  <!-- Topbar Section -->
  @include('Topbar')

  <div class="flex pt-24"> <!-- Adjusted top padding for better spacing -->

    <!-- Main Content Section -->
    <div class="flex-1 w-full p-8"> <!-- Full width with responsive behavior -->
      
      <!-- Discharge Summary Title and Search Section (Card Style) -->
      <div class="bg-white p-8 rounded-lg shadow-md mb-8 space-y-4">
        <!-- Title -->
        <h1 class="text-3xl font-semibold text-gray-800">Discharge Summary</h1>
        
        <!-- Search Section -->
        <div class="flex flex-col md:flex-row justify-center md:justify-start items-center md:space-x-4 w-full">
          <!-- Search Input -->
          <input 
            type="text" 
            placeholder="Search with HIS Number" 
            class="border border-gray-300 rounded-md px-4 py-2 text-gray-700 focus:outline-none focus:ring-2 focus:ring-teal-400 w-full md:w-80 mb-4 md:mb-0"
          />
  
          <!-- Search Button -->
          <button 
            class="px-6 py-3 bg-teal-600 text-white rounded-md hover:bg-teal-700 transition duration-300"
          >
            Search
          </button>
        </div>
      </div>

      <!-- Patient Data Section (Card Style) -->
      <div class="bg-white p-8 rounded-lg shadow-md">
        <p class="text-gray-600">Patient discharge records and details will be displayed here.</p>
      </div>

    </div>
  </div>

</body>
</html>
