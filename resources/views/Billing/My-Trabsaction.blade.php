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
    <div class="topbar no-print">@include('Topbar')</div>
    <div class="w-full p-6">
        <div class="p-4 bg-teal-100 no-print">
            <h2 class="text-lg font-semibold">Daily Transaction Report</h2>
            <div class="flex flex-wrap gap-4">
                <div class="w-1/3">
                    <label class="block text-sm font-medium">Date From *</label>
                    <input type="text" class="w-full p-2 border rounded-md" value="2081/12/05">
                </div>
                <div class="w-1/3">
                    <label class="block text-sm font-medium">Date To *</label>
                    <input type="text" class="w-full p-2 border rounded-md" value="2081/12/05">
                </div>
                <div class="mt-6">
                    <button class="bg-blue-600 text-white px-4 py-2 rounded-md">🔍 Search</button>
                </div>
            </div>
        </div>
        <div id="printSection" class="p-6 mt-4 bg-white shadow-lg rounded-lg print-area">
            <h3 class="text-center font-semibold text-lg">
                <span class="block">GOVERNMENT OF NEPAL</span>
                <span class="block text-sm">Ministry Of Health And Population</span>
                <span class="block text-xl font-bold">Narayani Hospital</span>
                <span class="block text-sm">Birgunj, Parsa, Nepal</span>
            </h3>
            <p class="text-center mt-2 font-semibold">My Transaction Detail ( Date From: 2081-12-05 | Date To: 2081-12-05 )</p>
            <div class="overflow-x-auto mt-4">
                <table class="w-full border-collapse border border-gray-300 text-sm">
                    <thead>
                        <tr class="bg-gray-200">
                            <th class="border p-2">Date</th>
                            <th class="border p-2">Total Transaction</th>
                            <th class="border p-2">Cash</th>
                            <th class="border p-2">TPA Claim</th>
                            <th class="border p-2">ConnectIPS</th>
                            <th class="border p-2">eSewa</th>
                            <th class="border p-2">Mobile Banking</th>
                            <th class="border p-2">Khalti</th>
                            <th class="border p-2">Refund Revoked</th>
                            <th class="border p-2">Refund Test</th>
                            <th class="border p-2">Advance Collection</th>
                            <th class="border p-2">Advance Clearance</th>
                            <th class="border p-2">Refund</th>
                            <th class="border p-2 font-bold">Total In Hand</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="border p-2">2081-12-05</td>
                            <td class="border p-2 text-right">0.00</td>
                            <td class="border p-2 text-right">0.00</td>
                            <td class="border p-2 text-right">0.00</td>
                            <td class="border p-2 text-right">0.00</td>
                            <td class="border p-2 text-right">0.00</td>
                            <td class="border p-2 text-right">0.00</td>
                            <td class="border p-2 text-right">0.00</td>
                            <td class="border p-2 text-right">0.00</td>
                            <td class="border p-2 text-right">0.00</td>
                            <td class="border p-2 text-right">0.00</td>
                            <td class="border p-2 text-right">0.00</td>
                            <td class="border p-2 text-right">0.00</td>
                            <td class="border p-2 text-right font-bold text-blue-700">0.00</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="mt-4 flex justify-end no-print">
            <button onclick="printData()" class="bg-green-600 text-white px-4 py-2 rounded-md">🖨️ Print Report</button>
        </div>
    </div>
    <script>
        function printData() {
            let printContent = document.getElementById('printSection').innerHTML;
            let printWindow = window.open('', '', 'width=800,height=600');
            printWindow.document.write(`
                <html>
                <head>
                    <title>Print Report</title>
                    <style>
                        @media print { .print-area { width: 100%; } }
                    </style>
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
