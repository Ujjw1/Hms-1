<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Topbar Styling */
.topbar {
    width: 100%;
    height: 4rem;
    position: fixed;
    top: 0;
    left: 0;
    background-color: #0f766e;
    color: white;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    z-index: 50;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 0 1.5rem;
}

/* Dropdown Styling */
.dropdown-menu,
.nested-dropdown-menu {
    opacity: 0;
    visibility: hidden;
    position: absolute;
    background-color: #14b8a6;
    border-radius: 5px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    width: 200px;
    z-index: 50;
    padding: 10px 0;
    transition: opacity 0.3s ease, visibility 0.3s ease;
    top: 100%;
    left: 0;
}

/* Show main dropdown on hover */
.dropdown:hover > .dropdown-menu {
    opacity: 1;
    visibility: visible;
}

/* Positioning for nested dropdown */
.nested-dropdown-menu {
    top: 0;
    left: 10rem;
}

/* Show nested dropdown on hover */
.dropdown-item:hover + .nested-dropdown-menu,
.nested-dropdown-menu:hover {
    opacity: 1;
    visibility: visible;
}

/* Dropdown item styling */
.dropdown-item {
    display: block;
    padding: 0.9rem 1rem;
    color: white;
    text-decoration: none;
    transition: background-color 0.3s ease;
    position: relative;
}

/* .dropdown-item:hover {
    background-color: #0d9488;
} */


.topbar-nav a {
    padding: 0.75rem 1rem;
    display: inline-block;
    text-decoration: none;
    color: white;
    font-size: 1rem;
    font-weight: bold;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.topbar-nav a:hover {
    background-color: #12897b;
}

/* Optional: Responsive behavior for smaller screens */
@media (max-width: 768px) {
    .topbar-nav {
        flex-direction: column;
        align-items: flex-start;
    }
}

    </style>
</head>
<body class="bg-gray-100 pt-16">

    <!-- Topbar -->
    <header class="topbar">
        <div class="text-xl font-bold">🏥 HospitalX</div>
        <nav class="topbar-nav flex items-center space-x-6">
            <a href="{{route('dashboard')}}">🏠 Dashboard</a>

            <!-- Department Dropdown -->
            <div class="relative group dropdown">
                <a href="#" class="text-white dropdown-toggle">🧑‍⚕️ Department</a>
                <div class="dropdown-menu">
                    <div class="relative dropdown">
                        <a href="#" class="dropdown-item nested-dropdown-toggle">Pathalogy</a>
                        <div class="nested-dropdown-menu">
                            <a href="{{route('Pathology')}}" class="dropdown-item">Pathalogy</a>
                            <a href="{{route('Cultural')}}" class="dropdown-item">Caltural Test</a>
                            <a href="{{route('Report-search-by-bill')}}" class="dropdown-item">Report Search by bill</a>
                            <div class="relative dropdown">
                            <a href="#" class="dropdown-item nested-dropdown-toggle">Report</a>
                        <div class="nested-dropdown-menu">
                            <a href="{{route('Pathalogy-patient-report')}}" class="dropdown-item">Pathology Patient Report</a>
                            <a href="{{route('Pathology-Register')}}" class="dropdown-item">Pathology Register</a>
                        </div>
                    </div>
                    <div class="relative dropdown">
                        <a href="#" class="dropdown-item nested-dropdown-toggle">Setup</a>
                        <div class="nested-dropdown-menu">
                            <a href="{{route('Pathalogy-patient-report')}}" class="dropdown-item">Pathology Setup</a>
                            <a href="{{route('Pathology-Register')}}" class="dropdown-item">Parameter & Category</a>
                            <a href="{{route('Pathology')}}" class="dropdown-item">LIS Machine Allotment</a>
                            <a href="{{route('Cultural')}}" class="dropdown-item">LIS Test Code</a>
                            <a href="{{route('Report-search-by-bill')}}" class="dropdown-item">Microbilogy Test Mapper</a>
                        </div>
                    </div>
                        </div>
                        
                    </div>
                    <div class="relative dropdown">
                        <a href="#" class="dropdown-item nested-dropdown-toggle">My Statement</a>
                        <div class="nested-dropdown-menu">
                            <a href="#" class="dropdown-item">Tabular</a>
                            <a href="#" class="dropdown-item">Cumulative Data</a>
                        </div>
                    </div>
                    <div class="relative dropdown">
                        <a href="#" class="dropdown-item nested-dropdown-toggle">My Statement</a>
                        <div class="nested-dropdown-menu">
                            <a href="#" class="dropdown-item">Tabular</a>
                            <a href="#" class="dropdown-item">Cumulative Data</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Billing Dropdown -->
            <div class="relative group dropdown">
                <a href="#" class="text-white dropdown-toggle">💳 Billing</a>
                <div class="dropdown-menu">
                    <a href="#" class="dropdown-item">OPD TICKET</a>
                    <a href="{{route('Emr')}}" class="dropdown-item">EMR & IPD</a>
                    <div class="relative dropdown">
                        <a href="#" class="dropdown-item nested-dropdown-toggle">My Statement</a>
                        <div class="nested-dropdown-menu">
                            <a href="#" class="dropdown-item">Tabular</a>
                            <a href="#" class="dropdown-item">Cumulative Data</a>
                        </div>
                    </div>
                    <a href="#" class="dropdown-item">Re-Print</a>
                </div>
            </div>

            <!-- Appointments Dropdown -->
            <div class="relative group dropdown">
                <a href="#" class="text-white dropdown-toggle">📝 Appointments</a>
                <div class="dropdown-menu">
                    <a href="#" class="dropdown-item">View Appointments</a>
                    <a href="#" class="dropdown-item">Schedule Appointment</a>
                </div>
            </div>
        </nav>
    </header>

  

    <!-- JavaScript for Dropdown Functionality -->
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            // Function to handle main dropdown hover
            document.querySelectorAll(".dropdown").forEach((dropdown) => {
                let dropdownToggle = dropdown.querySelector(".dropdown-toggle");
                let dropdownMenu = dropdown.querySelector(".dropdown-menu");

                if (dropdownToggle && dropdownMenu) {
                    dropdownToggle.addEventListener("mouseenter", function () {
                        dropdownMenu.style.display = "block";
                    });

                    dropdown.addEventListener("mouseleave", function () {
                        dropdownMenu.style.display = "none";
                    });
                }
            });

            // Function to handle nested dropdown hover
            document.querySelectorAll(".nested-dropdown-toggle").forEach((nestedToggle) => {
                let nestedMenu = nestedToggle.nextElementSibling;

                if (nestedMenu) {
                    nestedToggle.addEventListener("mouseenter", function () {
                        nestedMenu.style.display = "block";
                    });

                    nestedToggle.parentElement.addEventListener("mouseleave", function () {
                        nestedMenu.style.display = "none";
                    });
                }
            });
        });
        
    </script>

</body>
</html>
