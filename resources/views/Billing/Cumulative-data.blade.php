<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction Receipt</title>
    
    <!-- TailwindCSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        /* Prevent scrolling issues */
        html, body {
            margin: 0;
            padding: 0;
            height: 100%;
            background-color: #f0f4f8;
            display: flex;
            flex-direction: column;
        }

        /* Print Styles */
        @media print {
            body {
                background-color: white;
            }
            .no-print {
                display: none !important;
            }
            .receipt-area {
                width: 100%;
                max-width: 210mm;
                margin: auto;
                padding: 20mm;
                text-align: center;
            }
        }
    </style>
</head>
<body class="bg-gray-100 w-full min-h-screen flex flex-col justify-center items-center">

    <div class="w-full max-w-7xl bg-white shadow-lg rounded-lg p-6">
        <!-- Filters (Hidden in Print) -->
        <div class="bg-teal-100 p-4 rounded-md no-print">
            <h2 class="text-xl font-semibold text-center my-4">My Transaction Report</h2>
            <div class="grid grid-cols-3 gap-4">
                <div>
                    <label class="block text-sm font-medium">Time Duration *</label>
                    <select class="w-full p-2 border rounded-md">
                        <option>Today</option>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-medium">Select Head</label>
                    <select class="w-full p-2 border rounded-md">
                        <option>OPD</option>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-medium">Gender</label>
                    <select class="w-full p-2 border rounded-md">
                        <option>Female</option>
                    </select>
                </div>
            </div>
            <button class="mt-4 bg-blue-600 text-white px-4 py-2 rounded-md no-print">Search</button>
        </div>

        <!-- Receipt Section -->
        <div id="receipt" class="mt-6 p-4 receipt-area w-full">
            <h3 class="text-center font-semibold text-lg">
                <span class="block">GOVERNMENT OF NEPAL</span>
                <span class="block text-sm">Ministry Of Health And Population</span>
                <span class="block text-xl font-bold">Narayani Hospital</span>
                <span class="block text-sm">Birgunj, Parsa, Nepal</span>
            </h3>

            <p class="text-center mt-2 font-semibold">
                Ujjwal Kumar Shrivastav (01) - Transaction Receipt (Date: 2081-12-05)
            </p>

            <table class="w-full mt-4 border-collapse border border-gray-300">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="border p-2">Description</th>
                        <th class="border p-2">Amount (Rs.)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="border p-2">Refund</td>
                        <td class="border p-2 text-right">500.00</td>
                    </tr>
                    <tr>
                        <td class="border p-2">Advance Clearance</td>
                        <td class="border p-2 text-right">200.00</td>
                    </tr>
                    <tr>
                        <td class="border p-2">Advance Collection</td>
                        <td class="border p-2 text-right">800.00</td>
                    </tr>
                    <!-- Total Amount Row -->
                    <tr class="font-bold bg-gray-100">
                        <td class="border p-2 text-blue-700 text-right">Total Amount (In hand)</td>
                        <td class="border p-2 text-right text-blue-700">1500.00</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Print Button -->
        <div class="mt-4 flex justify-center">
            <button onclick="printReceipt()" class="bg-green-600 text-white px-4 py-2 rounded-md no-print">
                Print Receipt
            </button>
        </div>
    </div>

    <script>
        function printReceipt() {
            let printContent = document.getElementById('receipt').innerHTML;
            let originalContent = document.body.innerHTML;
            
            document.body.innerHTML = printContent;
            window.print();
            document.body.innerHTML = originalContent;
            location.reload();
        }
    </script>

</body>
</html>
