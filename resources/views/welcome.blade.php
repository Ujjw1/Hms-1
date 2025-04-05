<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OPD Payment UI</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-6">
    <div class="w-full bg-white p-6 rounded-lg shadow-lg">
        <h2 class="text-xl font-semibold bg-blue-500 text-white p-3 rounded-t-lg text-center">General OPD</h2>
        <div class="p-4 space-y-4">
            
            <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                <div>
                    <label for="patient" class="block text-gray-700 font-medium">Search Patient</label>
                    <input type="text" id="patient" placeholder="Search Patient" class="w-full border border-gray-300 p-2 rounded-md">
                </div>
                <div>
                    <label for="doctor" class="block text-gray-700 font-medium">Doctor</label>
                    <select id="doctor" class="w-full border border-gray-300 p-2 rounded-md">
                        <option>Dr. Shrijana (34)</option>
                    </select>
                </div>
                <div>
                    <label for="contact" class="block text-gray-700 font-medium">Contact</label>
                    <input type="text" id="contact" value="9709794211" class="w-full border border-gray-300 p-2 rounded-md">
                </div>
                <div>
                    <label for="speciality" class="block text-gray-700 font-medium">Speciality</label>
                    <select id="speciality" class="w-full border border-gray-300 p-2 rounded-md">
                        <option>ENT Head & Neck</option>
                    </select>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                <div>
                    <label for="appointment" class="block text-gray-700 font-medium">Search for Appointment</label>
                    <input type="text" id="appointment" placeholder="Search" class="w-full border border-gray-300 p-2 rounded-md">
                </div>
                <div>
                    <label for="dob" class="block text-gray-700 font-medium">Date of Birth</label>
                    <input type="text" id="dob" value="Ye / 1 / 0" class="w-full border border-gray-300 p-2 rounded-md">
                </div>
                <div>
                    <label for="opd" class="block text-gray-700 font-medium">OPD Type</label>
                    <select id="opd" class="w-full border border-gray-300 p-2 rounded-md">
                        <option>Physio OPD</option>
                    </select>
                </div>
                <div>
                    <label for="amount" class="block text-gray-700 font-medium">Amount</label>
                    <input type="number" id="amount" value="500.00" class="w-full border border-gray-300 p-2 rounded-md">
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                <div>
                    <label for="paymentMode" class="block text-gray-700 font-medium">Payment Mode</label>
                    <select id="paymentMode" class="w-full border border-gray-300 p-2 rounded-md">
                        <option>ConnectIPS</option>
                    </select>
                </div>
                <div>
                    <label for="billedBy" class="block text-gray-700 font-medium">Billed By</label>
                    <input type="text" id="billedBy" value="Santosh Kumar" class="w-full border border-gray-300 p-2 rounded-md">
                </div>
                <div>
                    <label for="payableAmount" class="block text-gray-700 font-medium">Payable Amount</label>
                    <input type="text" id="payableAmount" value="500" class="w-full border border-gray-300 p-2 rounded-md text-blue-500 font-bold" disabled>
                </div>
                <div class="flex items-end">
                    <button class="bg-green-500 text-white w-full px-4 py-2 rounded-md hover:bg-green-600">Save & Print</button>
                </div>
            </div>
        </div>
        <div class="flex justify-between items-center bg-gray-200 p-3 rounded-t-lg">
            <h2 class="text-lg font-semibold text-gray-700">Payment Record <span class="text-green-600">GENERAL OPD</span></h2>
            <button class="bg-red-500 text-white px-3 py-1 rounded-md text-sm hover:bg-red-600 flex items-center">
                Reset
            </button>
        </div>

        <!-- Form Content -->
        <div class="p-4 space-y-4">
            
            <!-- OPD Row -->
            <div class="grid grid-cols-3 gap-4">
                <div>
                    <label class="block text-gray-700 font-medium">OPD</label>
                    <select class="w-full border border-gray-300 p-2 rounded-md">
                        <option>Physio OPD</option>
                    </select>
                </div>
                <div>
                    <label class="block text-gray-700 font-medium">Amount</label>
                    <input type="number" value="500.00" class="w-full border border-gray-300 p-2 rounded-md">
                </div>
            </div>

            <!-- Discount Section -->
            <div class="grid grid-cols-3 gap-4">
                <div>
                    <label class="block text-gray-700 font-medium">Discount Scheme</label>
                    <select class="w-full border border-gray-300 p-2 rounded-md">
                        <option>%</option>
                    </select>
                </div>
                <div>
                    <label class="block text-gray-700 font-medium">Discount</label>
                    <input type="text" value="0" class="w-full border border-gray-300 p-2 rounded-md">
                </div>
            </div>

            <!-- Payment Mode -->
            <div class="grid grid-cols-3 gap-4 border-t pt-3">
                <div>
                    <label class="block text-gray-700 font-medium">Payment Mode</label>
                    <select class="w-full border border-gray-300 p-2 rounded-md">
                        <option>ConnectIPS</option>
                    </select>
                </div>
                <div>
                    <label class="block text-gray-700 font-medium">Billed By</label>
                    <input type="text" value="Santosh Kumar" class="w-full border border-gray-300 p-2 rounded-md">
                </div>
                <div>
                    <label class="block text-gray-700 font-medium">Amount</label>
                    <input type="text" value="500.00" class="w-full border border-gray-300 p-2 rounded-md">
                </div>
            </div>

            <!-- Payable Amount -->
            <div class="flex items-center space-x-3 mt-4">
                <span class="text-green-600 font-semibold text-lg">Payable Amount =></span>
                <input type="text" value="500" class="border border-gray-300 p-2 rounded-md text-blue-600 font-bold text-lg" disabled>
            </div>

            <!-- Buttons -->
            <div class="flex justify-between mt-4">
                <button class="bg-green-500 text-white px-6 py-2 rounded-md hover:bg-green-600">
                    Save & Print
                </button>
            </div>
        </div>
    </div>
    </div>
</body>
</html>
