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
            font-family: Arial, sans-serif;
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
        <div class="bg-gray-100 p-6 rounded-lg no-print w-full">
            <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-5 gap-6 w-full">
                <!-- Time Duration -->
                <div>
                    <label class="block font-semibold mb-1">Time Duration *</label>
                    <input type="text" class="w-full border border-gray-300 px-3 py-2 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter time duration">
                </div>

                <!-- Sample Collected Name -->
                <div>
                    <label class="block font-semibold mb-1">Sample Collected Name</label>
                    <select class="w-full border border-gray-300 px-3 py-2 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <option value="">Select</option>
                        <option value="John Doe">John Doe</option>
                        <option value="Jane Smith">Jane Smith</option>
                    </select>
                </div>

                <!-- Test Name -->
                <div>
                    <label class="block font-semibold mb-1">Test Name</label>
                    <select class="w-full border border-gray-300 px-3 py-2 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <option value="">Select</option>
                        <option value="CBC">CBC</option>
                        <option value="Renal Function Test">Renal Function Test</option>
                    </select>
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

                <!-- Payer & Search Button in One Row -->
                <div class="flex items-end space-x-4">
                    <!-- Payer -->
                    <div class="flex-1">
                        <label class="block font-semibold mb-1">Payer</label>
                        <select class="w-full border border-gray-300 px-3 py-2 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <option value="">Select</option>
                            <option value="Cash">Cash</option>
                            <option value="Insurance">Insurance</option>
                            <option value="Government Scheme">Government Scheme</option>
                        </select>
                    </div>

                    <!-- Search Button -->
                    <button class="bg-blue-600 text-white px-5 py-2 rounded-md hover:bg-blue-700 transition">
                        🔍 Search
                    </button>
                </div>
            </div>
        </div>

        <!-- Print Section (Full Width) -->
        <div id="printSection" class="mt-6 p-6 bg-white rounded-lg shadow-lg w-full">
            <h3 class="text-center font-semibold text-lg">
                <span class="block">GOVERNMENT OF NEPAL</span>
                <span class="block text-sm">Ministry Of Health And Population</span>
                <span class="block text-xl font-bold">Narayani Hospital</span>
                <span class="block text-sm">Birgunj, Parsa, Nepal</span>
            </h3>

            <p class="text-center mt-2 font-semibold">My Transaction Detail ( Date From: 2081-12-05 | Date To: 2081-12-05 )</p>

            <!-- Full Width Transaction Table -->
            <div class="overflow-x-auto mt-4">
                <table class="w-full border-collapse border border-gray-300 text-sm">
                    <thead class="bg-gray-200">
                        <tr>
                            <th class="border p-2">Patho. ID</th>
                            <th class="border p-2">Bill No</th>
                            <th class="border p-2">Service No.</th>
                            <th class="border p-2">Patient Name</th>
                            <th class="border p-2">Tests</th>
                            <th class="border p-2">Reporting Date</th>
                            <th class="border p-2">Billed by</th>
                            <th class="border p-2">Reference Doctor</th>
                            <th class="border p-2">Report</th>
                            <th class="border p-2">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="border p-2">PAT3419</td>
                            <td class="border p-2">10976</td>
                            <td class="border p-2"></td>
                            <td class="border p-2">Ram Shyam (3979)</td>
                            <td class="border p-2">
                                <div>CBC</div>
                                <div>Renal Function Test (RFT)</div>
                            </td>
                            <td class="border p-2 text-center">11/03/2025 01:27 PM</td>
                            <td class="border p-2 text-center">Bipin (14)</td>
                            <td class="border p-2 text-center">Dr Pankaj Kumar Yadav (60)</td>
                            <td class="border p-2 text-center">0% Complete</td>
                            <td class="border p-2 text-center">
                                <button class="bg-green-500 text-white px-3 py-1 rounded-md hover:bg-green-600">Enter</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Print Button -->
        <div class="mt-4 flex justify-end no-print">
            <button onclick="printData()" class="bg-green-600 text-white px-4 py-2 rounded-md hover:bg-green-700">🖨️ Print Report</button>
        </div>
    </div>

    <!-- Print Script -->
    <script>
        function printData() {
            let printContent = document.getElementById('printSection').innerHTML;
            let printWindow = window.open('', '', 'width=800,height=600');
            printWindow.document.write(`
                <html>
                <head>
                    <title>Print Report</title>
                    <style>@media print { .print-area { width: 100%; } }</style>
                </head>
                <body onload="window.print(); window.close();">
                    ${printContent}
                </body>
                </html>
            `);
            printWindow.document.close();
        }
    </script>

</body>
</html>
