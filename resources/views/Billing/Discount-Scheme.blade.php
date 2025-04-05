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
    <div class="w-full p-8  justify-center items-center"> <!-- Center content horizontally and vertically -->
  <!-- Search Box (Aligned Like Facebook Search Bar) -->
  <div class="flex justify-center items-center w-full md:w-96 space-x-2"> <!-- Using flex and space-x for better alignment -->
    <!-- Search Input Field -->
    <input 
      type="text" 
      id="searchInput"
      placeholder="Search with HIS Number or Patient Name" 
      class="w-full px-4 py-2 border border-gray-300 rounded-l-md text-gray-700 focus:outline-none focus:ring-2 focus:ring-teal-400"
      oninput="showResults()"
    />
    <!-- Search Button -->
    <button 
      class="px-6 py-3 bg-teal-500 text-white rounded-r-md hover:bg-teal-600"
      onclick="showResults()"
    >
      Search
    </button>
  </div>

  <!-- Searching Message (Initially Hidden) -->
  <div id="searchingMessage" class="w-full bg-white border border-gray-300 mt-5 rounded-md shadow-lg hidden text-center text-gray-700 py-2">
    Searching...
  </div>

  <!-- Search Results (Dynamic List) -->
  <div id="searchResults" class="w-full bg-white border border-gray-300 mb-5 rounded-md shadow-lg hidden">
    <!-- Results or Searching message will be inserted dynamically -->
  </div>

  <!-- Placeholder for future content -->
  <div class="bg-white p-8 rounded-lg shadow-md mt-10">
    <p class="text-gray-600">Patient discharge records and details will be displayed here.</p>
  </div>
</div>

  </div>

  <script>
  function showResults() {
    let searchBox = document.getElementById("searchInput");
    let resultsDiv = document.getElementById("searchResults");
    let searchingMessage = document.getElementById("searchingMessage");

    let searchTerm = searchBox.value.trim().toLowerCase();

    // Show "Searching..." message when typing
    if (searchTerm !== "") {
      searchingMessage.classList.remove("hidden");
      resultsDiv.classList.add("hidden");
    } else {
      searchingMessage.classList.add("hidden");
      resultsDiv.classList.add("hidden");
    }

    // Sample Data (Replace with real data or API data)
    let sampleData = [
      "HIS Number: 12345",
      "Patient: John Doe",
      "Patient: Jane Smith",
      "HIS Number: 67890"
    ];

    // Filter results based on search term
    let filteredResults = sampleData.filter(item => item.toLowerCase().includes(searchTerm));

    if (searchTerm !== "" && filteredResults.length > 0) {
      searchingMessage.classList.add("hidden"); // Hide searching message
      resultsDiv.classList.remove("hidden"); // Show result list
      resultsDiv.innerHTML = filteredResults
        .map(result => `<p class="p-2 text-gray-700 cursor-pointer hover:bg-gray-100" onclick="selectResult('${result}')">${result}</p>`)
        .join("");
    } else {
      resultsDiv.classList.add("hidden"); // Hide result list if no match
      if (searchTerm !== "") {
        searchingMessage.classList.remove("hidden"); // Show searching message if no match
      }
    }
  }

  function selectResult(value) {
    document.getElementById("searchInput").value = value;
    document.getElementById("searchResults").classList.add("hidden");
  }

  // Close search results and searching message if clicked outside
  document.addEventListener('click', function(event) {
    let searchBox = document.getElementById("searchInput");
    let resultsDiv = document.getElementById("searchResults");
    let searchingMessage = document.getElementById("searchingMessage");

    // Check if the click is outside the search box and results
    if (!searchBox.contains(event.target) && !resultsDiv.contains(event.target)) {
      resultsDiv.classList.add("hidden");
      searchingMessage.classList.add("hidden");
    }
  });
</script>


</body>

</html>
