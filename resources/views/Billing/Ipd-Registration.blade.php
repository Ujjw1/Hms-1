<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OPD Payment UI</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-6">
    <div class="flex justify-between items-start gap-10">
        
        <!-- IPD Registration Form -->
        <div class="w-1/2">
            <h2 class="text-xl font-semibold bg-blue-500 text-white p-3 text-center">IPD REGISTRATION</h2>
            <button onclick="refreshPage()" class="bg-blue-500 text-white px-4 py-2 rounded-md mt-4">
    Refresh Page
</button>
            <div class="p-4 space-y-4">
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-gray-700 font-medium">Name</label>
                        <input type="text" placeholder="Enter Name" class="w-full border border-gray-300 p-2 rounded-md bg-white">
                    </div>
                    <div>
                        <label class="block text-gray-700 font-medium">Surname</label>
                        <input type="text" placeholder="Enter Surname" class="w-full border border-gray-300 p-2 rounded-md bg-white">
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-gray-700 font-medium">Date of Birth</label>
                        <input type="text" placeholder="Ye / MM / DD" class="w-full border border-gray-300 p-2 rounded-md bg-white">
                    </div>
                    <div>
                        <label class="block text-gray-700 font-medium">Phone Number</label>
                        <input type="text" placeholder="Enter Phone Number" class="w-full border border-gray-300 p-2 rounded-md bg-white">
                    </div>
                </div>
   
                <div class="flex justify-end mt-4">
                    <button class="bg-green-500 text-white px-6 py-2 rounded-md hover:bg-green-600">
                        Save & Print
                    </button>
                </div>
            </div>
        </div>

        <!-- Payment Record -->
        <div class="w-1/2">
    <h2 class="text-xl font-semibold bg-gray-700 text-white p-3 text-center">Payment Record</h2>

    <div class="p-4 space-y-4">
        <!-- First row: Admission Type & Category -->
        <div class="grid grid-cols-2 gap-4">
            <div>
                <label class="block text-gray-700 font-medium">Admission Type</label>
                <select class="w-full border border-gray-300 p-2 rounded-md bg-white">
                    <option>ADMIT PATIENT</option>
                </select>
            </div>
            <div>
                <label class="block text-gray-700 font-medium">Admission Category</label>
                <select class="w-full border border-gray-300 p-2 rounded-md bg-white">
                    <option>GENERAL ADMISSION</option>
                </select>
            </div>
        </div>

        <!-- Second row: Payment Mode & Amount -->
        <div class="grid grid-cols-2 gap-4">
            <div>
                <label class="block text-gray-700 font-medium">Payment Mode</label>
                <select class="w-full border border-gray-300 p-2 rounded-md bg-white">
                    <option>ConnectIPS</option>
                </select>
            </div>
            <div>
                <label class="block text-gray-700 font-medium">Amount</label>
                <input type="text" value="500.00" class="w-full border border-gray-300 p-2 rounded-md bg-white">
            </div>
        </div>

        <!-- Third row: Advance & Payable Amount -->
        <div class="grid grid-cols-2 gap-4">
    <div class="flex items-center space-x-2 w-full">
        <span class="text-green-600 font-semibold whitespace-nowrap">Advance:</span>
        <input type="text" value="500" class="w-3/4 border border-gray-300 p-3 rounded-md text-blue-600 font-bold text-lg text-center" disabled>
    </div>
    <div class="flex items-center space-x-2 w-full">
        <span class="text-green-600 font-semibold whitespace-nowrap">Payable Amount:</span>
        <input type="text" value="500" class="w-3/4 border border-gray-300 p-3 rounded-md text-blue-600 font-bold text-lg text-center" disabled>
    </div>
</div>

        </div>

        <!-- Save & Print Button -->
        <div class="flex justify-end mt-4">
            <button class="bg-green-500 text-white px-6 py-2 rounded-md hover:bg-green-600">
                Save & Print
            </button>
        </div>
    </div>
</div>


    </div>
</body>
<script>
    function refreshPage(){
        window.location.reload();
    }
</script>
</html>
