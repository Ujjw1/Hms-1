<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        tealDark: "#0f766e",
                        tealLight: "#14b8a6"
                    }
                }
            }
        };
    </script>
    <style>
        /* Sidebar Styling */
        .sidebar {
            width: 16rem;
            height: 100vh;
            position: fixed;
            left: 0;
            top: 0;
            background-color: #0f766e;
            color: white;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
        }

        /* Dropdown Styling */
        .dropdown-menu,
        .nested-dropdown-menu {
            opacity: 0;
            visibility: hidden;
            transition: opacity 0.3s ease, visibility 0.3s ease;
            position: absolute;
            left: 0;
            background-color: #14b8a6;
            border-radius: 5px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 250px;
            z-index: 50;
        }

        /* Show dropdown on hover */
        .group:hover > .dropdown-menu,
        .group:hover > .nested-dropdown-menu {
            opacity: 1;
            visibility: visible;
        }

        /* Make sidebar responsive */
        @media (max-width: 768px) {
            .sidebar {
                width: 12rem; /* Adjust the width for mobile view */
            }

            .dropdown-menu,
            .nested-dropdown-menu {
                width: 100%;
            }
        }
    </style>
</head>

<body class="bg-gray-100 flex">

    <!-- Sidebar -->
    <aside class="sidebar flex flex-col z-20">
        <div class="p-4 text-xl font-bold">🏥 HospitalX</div>
        <nav class="flex-1">
            <ul>
                <li class="p-4 cursor-pointer hover:bg-teal-600">
                    <a href="#">🏠 Dashboard</a>
                </li>

                <!-- Billing Dropdown -->
                <li class="relative p-4 hover:bg-teal-600 cursor-pointer group">
                    <a href="#">🧑‍⚕️ Billing</a>
                    <ul class="dropdown-menu absolute left-0 hidden mt-2 bg-teal-500 rounded-md shadow-lg group-hover:block transition-all duration-300">
                        <li class="p-2 hover:bg-teal-600"><a href="#">OPD TICKET</a></li>
                        <li class="p-2 hover:bg-teal-600"><a href="#">EMR & IPD</a></li>
                        <li class="p-2 hover:bg-teal-600"><a href="#">Service Billing</a></li>
                        <li class="p-2 hover:bg-teal-600"><a href="#">Billing Profile</a></li>
                        <li class="p-2 hover:bg-teal-600"><a href="#">Patient Profile</a></li>
                        <li class="p-2 hover:bg-teal-600"><a href="#">Discharge Summary</a></li>
                        <li class="p-2 hover:bg-teal-600"><a href="#">Discount Scheme</a></li>

                        <!-- Nested Dropdown: My Statement -->
                        <li class="relative p-2 hover:bg-teal-600 cursor-pointer group">
                            <a href="#">My Statement</a>
                            <ul class="nested-dropdown-menu absolute left-full top-0 hidden w-48 bg-teal-500 rounded-md group-hover:block transition-all duration-300">
                                <li class="p-2 hover:bg-teal-600"><a href="#">Tabular</a></li>
                                <li class="p-2 hover:bg-teal-600"><a href="#">Cumulative Data</a></li>
                            </ul>
                        </li>

                        <li class="p-2 hover:bg-teal-600"><a href="#">My Transaction</a></li>
                        <li class="p-2 hover:bg-teal-600"><a href="#">Re-Print</a></li>
                    </ul>
                </li>

                <!-- Appointments Dropdown -->
                <li class="relative p-4 hover:bg-teal-600 cursor-pointer group">
                    <a href="#">📝 Appointments</a>
                    <ul class="dropdown-menu absolute left-0 hidden mt-2 bg-teal-500 rounded-md shadow-lg group-hover:block transition-all duration-300">
                        <li class="p-2 hover:bg-teal-600"><a href="#">View Appointments</a></li>
                        <li class="p-2 hover:bg-teal-600"><a href="#">Schedule Appointment</a></li>
                    </ul>
                </li>

                <li class="p-4 hover:bg-teal-600 cursor-pointer">
                    <a href="#">💳 Billing</a>
                </li>
                <li class="p-4 hover:bg-teal-600 cursor-pointer">
                    <a href="#">📊 Reports</a>
                </li>
                <li class="p-4 hover:bg-teal-600 cursor-pointer">
                    <a href="#">⚙ Settings</a>
                </li>
            </ul>
        </nav>
        <div class="p-4 bg-teal-800 text-sm text-center">© 2025 Ujjwal Shrivastav</div>
    </aside>

  

</body>

</html>
