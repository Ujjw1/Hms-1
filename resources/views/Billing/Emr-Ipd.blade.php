<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/lucide@latest/dist/umd/lucide.min.js"></script>
    <title>EMR</title>
    <style>
        html, body {
            margin: 0;
            padding: 0;
            height: 100%;
            width: 100%;
        }
    </style>
</head>

<body class="bg-gray-100">

    @include('Topbar')

    <!-- Main Content (Full Width) -->
    <div class="px-6 mt-20 w-full">
        <div class="border-b pb-3">
            <div class="flex space-x-6 text-lg font-semibold">
                <!-- Emergency Button -->
                <button id="enquiryBtn" class="tab-btn flex items-center space-x-2 text-green-600 border-b-2 border-green-600 pb-2"
                    data-url="{{ route('Emergence') }}" onclick="loadPage(this)">
                    <i data-lucide="ambulance" class="w-5 h-5"></i>
                    <span>Emergency</span>
                </button>

                <!-- IPD Registration Button -->
                <button id="followupBtn" class="tab-btn flex items-center space-x-2 text-gray-500 pb-2"
                    data-url="{{ route('Ipd') }}" onclick="loadPage(this)">
                    <i data-lucide="hospital" class="w-5 h-5"></i>
                    <span>IPD REGISTRATION</span>
                </button>
            </div>
        </div>

        <!-- Iframe for Content Switching -->
        <iframe id="iframeTab" src="{{ route('Emergence') }}" class="w-full h-[700px] border"></iframe>
    </div>

    <script>
        // Function to switch tabs
        function loadPage(button) {
            let url = button.getAttribute('data-url');
            document.getElementById('iframeTab').src = url;

            document.querySelectorAll('.tab-btn').forEach(btn => {
                btn.classList.remove('text-green-600', 'border-green-600', 'border-b-2');
                btn.classList.add('text-gray-500');
            });

            button.classList.remove('text-gray-500');
            button.classList.add('text-green-600', 'border-b-2', 'border-green-600');

            lucide.createIcons();
        }

        document.addEventListener("DOMContentLoaded", function () {
            lucide.createIcons();
        });
    </script>
</body>

</html>
