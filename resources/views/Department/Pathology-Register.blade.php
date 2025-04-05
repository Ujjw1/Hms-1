<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daily Transaction Report</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        html, body {
            background-color: #f0f4f8;
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            height: 100%;
            width: 100%;
        }
        @media print {
            body { background-color: white; overflow: hidden !important; }
            .no-print { display: none !important; }
            .print-area { width: 100%; margin: auto; padding: 10mm; box-shadow: none; }
        }
    </style>
</head>
<body>

    <!-- Top Bar -->
    <div class="topbar no-print bg-blue-700 text-white p-4">@include('Topbar')</div>

    <!-- Full Width Page Container -->
    <div class="w-full p-6 bg-white">

        <!-- Header -->
        <h2 class="text-3xl font-bold mb-6 text-gray-800 text-center">📑 Daily Transaction Report</h2>

        <!-- Search Filters (Full Width) -->
        <div class="bg-gray-100 p-6 rounded-lg shadow-md no-print w-full">
            <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-3 gap-6 w-full">
                
                <!-- Date From -->
                <div>
                    <label class="block font-semibold mb-1">Date From</label>
                    <input type="date" value="2081-12-10" class="w-full border border-gray-300 px-3 py-2 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <!-- Date To -->
                <div>
                    <label class="block font-semibold mb-1">Date To</label>
                    <input type="date" value="2081-12-10" class="w-full border border-gray-300 px-3 py-2 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <!-- Category Name -->
                <div>
                    <label class="block font-semibold mb-1">Category Name</label>
                    <select class="w-full border border-gray-300 px-3 py-2 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <option value="">Select</option>
                        <option value="Pathology">Pathology</option>
                        <option value="Radiology">Radiology</option>
                    </select>
                </div>

            </div>

            <!-- Search Button (Centered) -->
            <div class="w-full flex justify-center mt-6">
                <button class="bg-blue-600 text-white px-6 py-2 rounded-md hover:bg-blue-700 transition">
                    🔍 Search
                </button>
            </div>
        </div>
    </div>

</body>
</html>
