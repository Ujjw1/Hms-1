<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/lucide@latest/dist/umd/lucide.min.js"></script>
    <title>Enquiry Table</title>
</head>
<body class="bg-gray-100">

    <!-- Include Topbar -->
    @include('Topbar')

    <div class="flex flex-col pt-20 w-full">
        <!-- Tab Navigation -->
        <div class="border-b pb-4 px-6">
            <div class="flex space-x-6 text-lg font-semibold">
                <!-- Service Bill Button -->
                <button id="enquiryBtn" class="tab-btn flex items-center space-x-2 text-green-600 border-b-2 border-green-600 pb-2" onclick="loadPage('{{ route('Bill') }}', 'enquiry')">
                    <i data-lucide="ambulance" class="w-5 h-5"></i>
                    <span>Service Bill</span>
                </button>
                <!-- Advance Button -->
                <button id="advanceBtn" class="tab-btn flex items-center space-x-2 text-gray-500" onclick="loadPage('{{ route('Advance') }}', 'advance')">
                    <i data-lucide="wallet" class="w-5 h-5"></i>
                    <span>Advance</span>
                </button>
                <!-- Patient Card Button -->
                <button id="patientCardBtn" class="tab-btn flex items-center space-x-2 text-gray-500" onclick="loadPage('{{ route('Ipd') }}', 'patientCard')">
                    <i data-lucide="id-card" class="w-5 h-5"></i>
                    <span>Patient Card</span>
                </button>
                <!-- Bed Transfer Button -->
                <button id="bedTransferBtn" class="tab-btn flex items-center space-x-2 text-gray-500" onclick="loadPage('{{ route('Ipd') }}', 'bedTransfer')">
                    <i data-lucide="bed-single" class="w-5 h-5"></i>
                    <span>Bed Transfer</span>
                </button>
            </div>
        </div>

        <!-- Iframe for Content Switching -->
        <div class="w-full p-6">
            <iframe id="iframeTab" src="{{ route('Bill') }}" class="w-full h-[750px] border"></iframe>
        </div>
    </div>

    <script>
        function loadPage(url, activeTab) {
            document.getElementById('iframeTab').src = url;
            let buttons = document.querySelectorAll('.tab-btn');
            buttons.forEach(button => {
                button.classList.remove('text-green-600', 'border-green-600', 'border-b-2');
                button.classList.add('text-gray-500');
            });
            let activeButton = document.getElementById(activeTab + 'Btn');
            if (activeButton) {
                activeButton.classList.remove('text-gray-500');
                activeButton.classList.add('text-green-600', 'border-b-2', 'border-green-600');
            }
            lucide.createIcons();
        }
        document.addEventListener("DOMContentLoaded", function () {
            lucide.createIcons();
        });
    </script>

</body>
</html>
