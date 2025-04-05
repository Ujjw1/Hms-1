<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Statement Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50">

   

    <!-- Layout: Sidebar + Main Content -->
    <div class="flex mt-16 w-full">  <!-- Added mt-16 to push content below the topbar -->

        <!-- Main Content -->
        <main class="flex-1 p-4 w-full"> <!-- Ensure it takes the full width -->
            <div class="bg-white p-6 rounded-lg shadow-md w-full">
                <h2 class="text-lg font-semibold">My Statement</h2>

                <!-- Form Filters -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-6 gap-4 mt-4">
                    <div>
                        <label class="text-sm font-medium">Time Duration *</label>
                        <select class="w-full p-2 border rounded">
                            <option>Today</option>
                        </select>
                    </div>
                    <div>
                        <label class="text-sm font-medium">Select Head</label>
                        <select class="w-full p-2 border rounded">
                            <option>All</option>
                        </select>
                    </div>
                    <div>
                        <label class="text-sm font-medium">Payer</label>
                        <select class="w-full p-2 border rounded">
                            <option>Select</option>
                        </select>
                    </div>
                    <div>
                        <label class="text-sm font-medium">Gender</label>
                        <select class="w-full p-2 border rounded">
                            <option>Select</option>
                        </select>
                    </div>
                    <div>
                        <label class="text-sm font-medium">From Age</label>
                        <select class="w-full p-2 border rounded">
                            <option>Select</option>
                        </select>
                    </div>
                    <div>
                        <label class="text-sm font-medium">To Age</label>
                        <select class="w-full p-2 border rounded">
                            <option>Select</option>
                        </select>
                    </div>
                </div>

                <!-- Search Button -->
                <button id="search-btn" class="mt-4 bg-blue-600 text-white px-4 py-2 rounded">
                    Search
                </button>
            </div>

            <!-- Table Section -->
            <div class="bg-white mt-6 p-4 rounded-lg shadow-md overflow-auto w-full">
                <table class="w-full text-sm text-left border">
                    <thead class="border-b bg-gray-100">
                        <tr>
                            <th class="p-2">Bill No</th>
                            <th class="p-2">Transaction ID</th>
                            <th class="p-2">Global Bill No</th>
                            <th class="p-2">Date</th>
                            <th class="p-2">Patient Name</th>
                            <th class="p-2">Gender/Age</th>
                            <th class="p-2">Address</th>
                            <th class="p-2">Category</th>
                            <th class="p-2">Dr. Name</th>
                            <th class="p-2">Disc (%)</th>
                            <th class="p-2">Disc (Rs.)</th>
                            <th class="p-2">Paid Amt (Rs.)</th>
                            <th class="p-2">Advance Adj (Rs.)</th>
                            <th class="p-2">Claim Amt (Rs.)</th>
                            <th class="p-2">Payer Type</th>
                            <th class="p-2">Collected By</th>
                        </tr>
                    </thead>
                    <tbody id="data-table" class="text-center">
                        <tr>
                            <td colspan="16" class="p-4 text-gray-500">Data not found for given criteria</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </main>
    </div>

    <!-- Optimized JavaScript -->
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const searchBtn = document.getElementById("search-btn");
            const dataTable = document.getElementById("data-table");

            searchBtn.addEventListener("click", function () {
                dataTable.innerHTML = '<tr><td colspan="16" class="p-4 text-gray-500">Fetching data...</td></tr>';

                setTimeout(() => {
                    dataTable.innerHTML = '<tr><td colspan="16" class="p-4 text-gray-500">No records found.</td></tr>';
                }, 1500);
            });
        });
    </script>

</body>
</html>
