<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Registration</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.rawgit.com/davidshimjs/qrcodejs/gh-pages/qrcode.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastify-js/1.11.2/Toastify.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>

<body class="bg-gray-100 p-8">
    <div class="w-full max-w-7xl mx-auto bg-white p-8 rounded-lg shadow-lg space-y-8">
    <div class="w-full max-w-7xl mx-auto bg-white p-8 rounded-lg shadow-lg space-y-8">
        
        <!-- Header Section -->
        <div class="flex justify-between items-center bg-gray-300 p-5 rounded-t-lg">
            <h2 class="text-lg font-semibold text-gray-700">Patient Registration</h2>
            <div class="flex items-center space-x-4">
                <input type="text" id="username" placeholder="Username" class="w-96 border border-gray-300 p-3 rounded-md">
                <div class="w-12 h-12 bg-blue-300 rounded-full flex items-center justify-center">
                    <span class="text-white text-2xl">👤</span>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-3 gap-6 bg-white p-5 rounded-lg">
                <div>
                    <label class="block text-gray-700 font-medium mb-2">Payer</label>
                    <select class="w-full max-w-xl border border-gray-300 p-4 rounded-md" id="payer">
                        <option>Private Cash</option>
                    </select>
                </div>
                <div>
                    <label class="block text-gray-700 font-medium mb-2">INS ID</label>
                    <select class="w-full max-w-xl border border-gray-300 p-4 rounded-md" id="insId">
                        <option>SSF</option>
                    </select>
                </div>
                <div>
                    <label class="block text-gray-700 font-medium mb-2">Registration No</label>
                    <input type="text" value="Private Cash" id="registrationNo" class="w-full max-w-xl border border-gray-300 p-4 rounded-md">
                </div>
            </div>
        <form id="registrationForm" class="grid grid-cols-2 gap-8">
            
            <div class="bg-gray-50 p-6 rounded-lg shadow space-y-5">
                <h3 class="text-gray-700 font-medium text-xl">Personal Details</h3>
                <div class="grid grid-cols-3 gap-6">
                    <input type="text" placeholder="Patient Name" id="patientName"
                        class="w-full border border-gray-300 p-4 rounded-md" required>
                    <input type="date" placeholder="DOB" id="dob" class="w-full border border-gray-300 p-4 rounded-md"
                        required>
                    <input type="number" placeholder="Age" id="age" class="w-full border border-gray-300 p-4 rounded-md"
                        required>
                    <input type="tel" placeholder="Mobile No" id="mobileNo"
                        class="w-full border border-gray-300 p-4 rounded-md" required>
                    <select id="gender" class="w-full border border-gray-300 p-4 rounded-md" required>
                        <option value="">Select Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Other">Other</option>
                    </select>
                    <input type="text" placeholder="Address" id="address"
                        class="w-full border border-gray-300 p-4 rounded-md" required>
                </div>
            </div>

            <div class="bg-gray-50 p-6 rounded-lg shadow space-y-5">
                <h3 class="text-gray-700 font-medium text-xl">Payment Procedure</h3>
                <div class="grid grid-cols-3 gap-6">
                    <input type="text" placeholder="OPD" id="opd" class="w-full border border-gray-300 p-4 rounded-md"
                        required>
                    <input type="number" placeholder="OPD Charge" id="opdCharge"
                        class="w-full border border-gray-300 p-4 rounded-md" required>
                    <input type="number" placeholder="Amount" id="amount"
                        class="w-full border border-gray-300 p-4 rounded-md" required>
                    <input type="number" placeholder="Discount %" id="discount"
                        class="w-full border border-gray-300 p-4 rounded-md" required>
                    <input type="number" placeholder="Cash" id="cash"
                        class="w-full border border-gray-300 p-4 rounded-md" required>
                    <input type="number" placeholder="Net Payable" id="netPayable"
                        class="w-full border border-gray-300 p-4 rounded-md" required>
                </div>
                <div class="flex justify-end space-x-4 mt-6">
                    <button onclick="printBill()"
                        class="bg-green-500 text-white px-6 py-3 rounded-md hover:bg-green-600">Print Bill</button>
                    <button onclick="printIDCard()"
                        class="bg-blue-500 text-white px-6 py-3 rounded-md hover:bg-blue-600">Print ID Card</button>
                </div>
            </div>
        </form>
        <div class="border-t border-gray-200 pt-8 mt-8">
            <div class="text-center">
                <h2 class="text-2xl font-semibold text-gray-700 mb-4">Patient ID Card</h2>
                <div id="qrcode" class="w-32 h-32 mx-auto flex justify-center"></div>
                <div class="id-card mx-auto mt-4" style="width: 350px;">
                    <div class="details">
                        <table style="width: 100%;">
                            <tr>
                                <th style="width: 30%;">Name:</th>
                                <td id="patientNameDisplay" style="width: 70%;"></td>
                            </tr>
                            <tr>
                                <th style="width: 30%;">DOB:</th>
                                <td id="dobDisplay" style="width: 70%;"></td>
                            </tr>
                            <tr>
                                <th style="width: 30%;">Mobile:</th>
                                <td id="mobileNoDisplay" style="width: 70%;"></td>
                            </tr>
                            <tr>
                                <th style="width: 30%;">Gender:</th>
                                <td id="genderDisplay" style="width: 70%;"></td>
                            </tr>
                            <tr>
                                <th style="width: 30%;">Address:</th>
                                <td id="addressDisplay" style="width: 70%;"></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>


   


    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastify-js/1.11.2/Toastify.min.js"></script>
    <script>
        document.getElementById("registrationForm").addEventListener("submit", function (event) {
            event.preventDefault();

            const patientName = document.getElementById("patientName").value;
            const dob = document.getElementById("dob").value;
            const mobileNo = document.getElementById("mobileNo").value;
            const opd = document.getElementById("opd").value;
            const gender = document.getElementById("gender").value;
            const address = document.getElementById("address").value;

            // Display QR Code
            document.getElementById("qrcode").innerHTML = "";
            new QRCode(document.getElementById("qrcode"), {
                text: `Name: ${patientName}, DOB: ${dob}, Mobile: ${mobileNo}, OPD: ${opd}`,
                width: 128,
                height: 128
            });

            // Update ID Card Data
            document.getElementById("patientNameDisplay").textContent = patientName;
            document.getElementById("dobDisplay").textContent = dob;
            document.getElementById("mobileNoDisplay").textContent = mobileNo;
            document.getElementById("genderDisplay").textContent = gender;
            document.getElementById("addressDisplay").textContent = address;


            // Send data via AJAX (using Fetch API)
            const formData = {
                patientName: patientName,
                dob: dob,
                mobileNo: mobileNo,
                opd: opd
            };

            fetch('/submit-registration', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify(formData)
            })
                .then(response => response.json())
                .then(data => {
                    // Show a success toast
                    Toastify({
                        text: "Registration successful!",
                        backgroundColor: "green",
                        duration: 3000
                    }).showToast();
                })
                .catch(error => {
                    // Show an error toast
                    Toastify({
                        text: "There was an error with the registration process.",
                        backgroundColor: "red",
                        duration: 3000
                    }).showToast();
                });
        });

        function printBill() {
            // Get values from the form
            const opd = document.getElementById("opd").value;
            const opdCharge = document.getElementById("opdCharge").value;
            const amount = document.getElementById("amount").value;
            const discount = document.getElementById("discount").value;
            const cash = document.getElementById("cash").value;
            const netPayable = document.getElementById("netPayable").value;

            // Check if all fields are filled
            if (!opd || !opdCharge || !amount || !discount || !cash || !netPayable) {
                // Show an error toast if any field is missing
                Toastify({
                    text: "Please fill in all fields before printing the bill.",
                    backgroundColor: "orange",
                    duration: 3000
                }).showToast();
                return; // Stop function execution if any field is empty
            }

            // Generate bill content if validation passes
            const billContent = `
            <h2>Bill Receipt</h2>
            <table border="1" cellspacing="0" cellpadding="8" style="width: 100%; border-collapse: collapse;">
                <tr><th>OPD</th><td>${opd}</td></tr>
                <tr><th>OPD Charge</th><td>${opdCharge}</td></tr>
                <tr><th>Amount</th><td>${amount}</td></tr>
                <tr><th>Discount</th><td>${discount}%</td></tr>
                <tr><th>Cash</th><td>${cash}</td></tr>
                <tr><th>Net Payable</th><td>${netPayable}</td></tr>
            </table>
        `;
            const newWindow = window.open("", "", "width=600,height=600");
            newWindow.document.write(`<html><head><title>Print Bill</title></head><body>${billContent}</body></html>`);
            newWindow.document.close();
            newWindow.print();

            // Show a success toast after printing the bill
            Toastify({
                text: "Bill Printed Successfully!",
                backgroundColor: "green",
                duration: 3000
            }).showToast();
        }

        function printIDCard() {
            // Get values from the form
            const patientName = document.getElementById("patientName").value;
            const dob = document.getElementById("dob").value;
            const mobileNo = document.getElementById("mobileNo").value;
            const gender = document.getElementById("gender").value;
            const address = document.getElementById("address").value;

            // Check if all fields are filled
            if (!patientName || !dob || !mobileNo || !gender || !address) {
                // Show an error toast if any field is missing
                Toastify({
                    text: "Please fill in all fields before printing the ID card.",
                    backgroundColor: "orange",
                    duration: 3000
                }).showToast();
                return; // Stop function execution if any field is empty
            }

            // Generate ID Card content with QR code on top
            const idCardContent = `
                <html>
                    <head>
                        <title>Print ID Card</title>
                        <style>
                            body {
                                font-family: Arial, sans-serif;
                                margin: 0;
                                padding: 0;
                                background-color: #f2f2f2;
                                display: flex;
                                justify-content: center;
                                align-items: center;
                                height: 100vh;
                            }
                            .id-card {
                                width: 300px;
                                max-width: 100%;
                                border: 2px solid #333;
                                border-radius: 10px;
                                padding: 20px;
                                background-color: white;
                                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                                text-align: center;
                                display: inline-block;
                                vertical-align: top;
                                box-sizing: border-box;
                            }
                            .id-card h2 {
                                text-align: center;
                                color: #333;
                                font-size: 18px;
                                margin-bottom: 10px;
                            }
                            .id-card .details {
                                font-size: 14px;
                                color: #555;
                                margin-top: 10px;
                            }
                            .id-card .details table {
                                width: 100%;
                                margin-top: 10px;
                                text-align: left;
                                padding: 0;
                            }
                            .id-card .details td {
                                padding: 4px 0;
                            }
                            .id-card .details th {
                                text-align: left;
                                color: #333;
                                padding-right: 10px;
                            }
                            .qrcode-container {
                                margin-bottom: 15px;
                            }
                        </style>
                    </head>
                    <body>
                        <div class="id-card">
                            <div class="qrcode-container">
                                ${document.getElementById("qrcode").outerHTML}
                            </div>
                            
                            <h2>Patient ID Card</h2>
                            <div class="details">
                                <table>
                                    <tr><th>Name:</th><td>${patientName}</td></tr>
                                    <tr><th>DOB:</th><td>${dob}</td></tr>
                                    <tr><th>Mobile:</th><td>${mobileNo}</td></tr>
                                    <tr><th>Gender:</th><td>${gender}</td></tr>
                                    <tr><th>Address:</th><td>${address}</td></tr>
                                </table>
                            </div>
                        </div>
                    </body>
                </html>
            `;

            const newWindow = window.open("", "", "width=400,height=400");
            newWindow.document.write(idCardContent);
            newWindow.document.close();
            newWindow.print();

            // Show a success toast after printing the ID card
            Toastify({
                text: "ID Card Printed Successfully!",
                backgroundColor: "green",
                duration: 3000
            }).showToast();
        }
    </script>

</body>

</html>
