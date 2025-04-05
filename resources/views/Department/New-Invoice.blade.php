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
    <div class="topbar no-print">@include('Topbar')</div>

    <div class="w-full p-6">
        
        <!-- New Invoice Bill Button -->
        <div class="flex justify-end mb-4 no-print">
    <a href="{{ route('Old-Report') }}" class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700">
        Old Invoice Bill
    </a>
</div>

        
        <div class="w-full p-6">
            <div class="p-4 bg-teal-100 rounded-lg no-print">
                <h2 class="text-lg font-semibold mb-4 text-center">Old  Report</h2> 

                <!-- Form Container -->
                <div class="flex flex-wrap -mx-2">
                    <!-- Row 1 -->
                    <div class="w-full sm:w-1/2 lg:w-1/3 px-2 mb-4">
                        <label class="block text-sm font-medium">Time Duration</label>
                        <input type="date" class="w-full p-2 border rounded-md" required>
                    </div>
                    <div class="w-full sm:w-1/2 lg:w-1/3 px-2 mb-4">
                        <label class="block text-sm font-medium">Bill No</label>
                        <input type="number" class="w-full p-2 border rounded-md" required>
                    </div>
                    <div class="w-full sm:w-1/2 lg:w-1/3 px-2 mb-4">
                        <label class="block text-sm font-medium">Service No</label>
                        <input type="number" class="w-full p-2 border rounded-md" required>
                    </div>

                    <!-- Row 2 -->
                    <div class="w-full sm:w-1/2 lg:w-1/3 px-2 mb-4">
                        <label class="block text-sm font-medium">Patient</label>
                        <select class="w-full p-2 border rounded-md">
                            <option>All</option>
                            <option>Department</option>
                        </select>
                    </div>
                <div class="w-full flex justify-end mt-4">
                    <button class="bg-blue-600 text-white px-4 py-2 rounded-md">🔍 Search</button>
                </div>
            </div>
        </div>
        </div>

        <!-- Print Section -->
        <div id="printSection" class="p-6 mt-4 bg-white shadow-lg rounded-lg print-area">
            
            <h3 class="text-center font-semibold text-lg">
                <span class="block">GOVERNMENT OF NEPAL</span>
                <span class="block text-sm">Ministry Of Health And Population</span>
                <span class="block text-xl font-bold">Narayani Hospital</span>
                <span class="block text-sm">Birgunj, Parsa, Nepal</span>
            </h3>

            <p class="text-center mt-2 font-semibold">My Transaction Detail ( Date From: 2081-12-05 | Date To: 2081-12-05 )</p>

            <!-- Transaction Table -->
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
                <th class="border p-2">Action</th>
            </tr>
        </thead>
        <tbody id="dataBody">
    <tr>
        <td class="border p-2">12345</td>
        <td class="border p-2">56789</td>
        <td class="border p-2">001</td>
        <td class="border p-2">John Doe</td>
        <td class="border p-2">Blood Test</td>
        <td class="border p-2">2025-03-22</td>
        <td class="border p-2">Dr. Smith</td>
        <td class="border p-2">Dr. Adams</td>
        <td class="border p-2 text-center">
            <button class="bg-blue-500 text-white px-3 py-1 rounded-md hover:bg-blue-600">Enter</button>
        </td>
    </tr>
</tbody>
    </table>
</div>

        </div>
        <div class="mt-4 flex justify-end no-print">
            <button onclick="printData()" class="bg-green-600 text-white px-4 py-2 rounded-md">🖨️ Print Report</button>
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
