<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Billing UI</title>
</head>
<body class="p-4 bg-gray-100">
    <div class="bg-white shadow-lg rounded-lg p-4">
        <!-- Search Section -->
        <div class="flex items-center space-x-2">
            <input type="text" class="border p-2 w-1/3" placeholder="Enter His Number or Scan barcode">
            <button class="bg-gray-200 p-2 rounded">🔍</button>
            <input type="text" class="border p-2 w-1/3" placeholder="Search Patient">
            <button class="bg-blue-500 text-white p-2 rounded">New Patient ➕</button>
        </div>
        
        <!-- Test & Discount Section -->
        <div class="mt-4 grid grid-cols-3 gap-4">
            <select class="border p-2 w-full">
                <option>Select Test</option>
            </select>
            <input type="text" class="border p-2 w-full" placeholder="Enter Value">
            <div class="flex space-x-2">
                <select class="border p-2 w-1/2">
                    <option>-Discount Scheme-</option>
                </select>
                <input type="text" class="border p-2 w-1/4" placeholder="%">
                <input type="text" class="border p-2 w-1/4" placeholder="Rs. 245">
            </div>
        </div>
        
        <!-- Note Section -->
        <textarea class="border w-full p-2 mt-4" placeholder="Note"></textarea>
        
        <!-- Payment Section -->
        <div class="mt-4 flex space-x-4">
            <select class="border p-2 w-1/3">
                <option>Cash</option>
            </select>
            <select class="border p-2 w-1/3">
                <option>Select Type</option>
            </select>
            <input type="text" class="border p-2 w-1/3" placeholder="Amount">
        </div>
        
        <!-- Table Section -->
        <div class="mt-4 border rounded-lg overflow-hidden">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="p-2 border">Service Name</th>
                        <th class="p-2 border">Qty</th>
                        <th class="p-2 border">Tax</th>
                        <th class="p-2 border">Disc</th>
                        <th class="p-2 border">Amt</th>
                        <th class="p-2 border">TPA Amt</th>
                        <th class="p-2 border">TPA Exc</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="p-2 border">-</td>
                        <td class="p-2 border">-</td>
                        <td class="p-2 border">-</td>
                        <td class="p-2 border">-</td>
                        <td class="p-2 border">-</td>
                        <td class="p-2 border">-</td>
                        <td class="p-2 border">-</td>
                    </tr>
                </tbody>
            </table>
        </div>
        
        <!-- Footer Section -->
        <div class="mt-4 flex justify-between">
            <button class="bg-green-500 text-white px-4 py-2 rounded">💾 Save & Print</button>
            <button class="bg-red-500 text-white px-4 py-2 rounded">🔄 Reset</button>
        </div>
    </div>
</body>
</html>
