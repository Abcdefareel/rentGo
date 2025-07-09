<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RentGO</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="flex flex-col min-h-screen bg-gray-100 md:flex-row">
    <!-- Sidebar -->
    <div id="sidebar"
        class="w-full md:w-64 bg-gray-800 text-white flex flex-col md:flex-shrink-0 transform md:transform-none transition-transform duration-300 ease-in-out">
        <div class="flex items-center justify-between p-4">
            <div class="flex items-center">
                <!-- <img src="https://via.placeholder.com/40" alt="Logo" class="mr-2"> -->
                <span class="text-xl font-bold">RentGO</span>
            </div>
            <button id="toggleSidebar" class="md:hidden text-white focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
                    </path>
                </svg>
            </button>
        </div>
        <nav id="navMenu" class="flex-1 md:block hidden">
            <a href="/dashboard" class="block py-2.5 px-4 text-gray-300 hover:bg-gray-700">Dashboard</a>
            <a href="/dashboard/revenues" class="block py-2.5 px-4 text-gray-300 hover:bg-gray-700">Revenue</a>
            <a href="/dashboard/monitors" class="block py-2.5 px-4 text-gray-300 hover:bg-gray-700">Monitor</a>
            <a href="/dashboard/reports" class="block py-2.5 px-4 text-gray-300 hover:bg-gray-700">Report</a>
            <a href="/dashboard/settings" class="block py-2.5 px-4 text-gray-300 hover:bg-gray-700">Settings</a>
        </nav>
    </div>

    <!-- Main Content -->
    <div class="flex-1 p-4 md:p-6 overflow-auto">
        <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-6">
            <h1 class="text-2xl font-bold"><?= $model['section'] ?></h1>
            <div class="flex flex-col md:flex-row items-start md:items-center mt-4 md:mt-0">
                <span class="text-sm text-gray-600 md:mr-4" id="datetime"></span>
                <div class="flex items-center mt-2 md:mt-0">
                    <!-- <img src="https://via.placeholder.com/30" alt="User" class="rounded-full mr-2"> -->
                    <span>dhvbudis@gmail.com</span>
                </div>
            </div>
        </div>
    </div>

    <!-- KONTEN AWAL -->
    <!-- Dashboard Sections -->
    <div class="grid grid-cols-3 gap-6 mb-6">
        <div class="bg-white p-4 rounded-lg shadow">
            <h2 class="text-lg font-semibold">Monthly Earning</h2>
            <p class="text-2xl font-bold text-green-600">Rp. 1,880,600</p>
            <div class="w-full bg-gray-200 rounded-full h-2.5 mt-2">
                <div class="bg-green-600 h-2.5 rounded-full" style="width: 70%"></div>
            </div>
            <p class="text-sm text-gray-600 mt-2">Total Spending: Rp. 55,000</p>
        </div>
        <div class="bg-white p-4 rounded-lg shadow">
            <h2 class="text-lg font-semibold">Weekly Net Profit</h2>
            <p class="text-2xl font-bold text-blue-600">Rp. 120,500</p>
            <p class="text-sm text-gray-600 mt-2">Weekly Net Profit: Rp. 70,000</p>
        </div>
        <div class="bg-white p-4 rounded-lg shadow">
            <h2 class="text-lg font-semibold">Spending</h2>
            <p class="text-2xl font-bold text-red-600">Rp. 100,000</p>
            <p class="text-sm text-gray-600 mt-2">Previous Period: Rp. 0</p>
        </div>
    </div>

    <!-- Top Selling Products and Popular Rentals -->
    <div class="grid grid-cols-2 gap-6 mb-6">
        <div class="bg-white p-4 rounded-lg shadow">
            <h2 class="text-lg font-semibold">Top 5 Selling Product</h2>
            <ul class="mt-2">
                <li class="py-2 border-b">1. Serena Silk (10) - Rp. 202,000</li>
                <li class="py-2 border-b">2. Nile Gowning (7) - Rp. 152,000</li>
                <li class="py-2 border-b">3. Cute Satin (7) - Rp. 100,000</li>
                <li class="py-2 border-b">4. Total Satin (5) - Rp. 100,000</li>
                <li class="py-2">5 (1) - Rp. 4,000</li>
            </ul>
        </div>
        <div class="bg-white p-4 rounded-lg shadow">
            <h2 class="text-lg font-semibold">Top 3 Popular Rentals</h2>
            <ul class="mt-2">
                <li class="py-2 border-b">1. Billiard VIP (last 2,263 hours)</li>
                <li class="py-2 border-b">2. Playstation 3 (710 hours)</li>
                <li class="py-2">3. Playstation 4 (650 hours)</li>
            </ul>
        </div>
    </div>

    <!-- Status Rental and Recent Transactions -->
    <div class="grid grid-cols-2 gap-6">
        <div class="bg-white p-4 rounded-lg shadow">
            <h2 class="text-lg font-semibold">Status Rental</h2>
            <div class="grid grid-cols-2 gap-4 mt-2">
                <div class="p-2 bg-green-100 rounded">1. Playstation 3 (Available)</div>
                <div class="p-2 bg-red-100 rounded">2. Playstation 3 (Busy)</div>
                <div class="p-2 bg-green-100 rounded">3. Playstation 3 (Available)</div>
                <div class="p-2 bg-green-100 rounded">4. Playstation 4 (Available)</div>
                <div class="p-2 bg-green-100 rounded">5. Playstation 4 (Available)</div>
            </div>
        </div>
        <div class="bg-white p-4 rounded-lg shadow">
            <h2 class="text-lg font-semibold">Top 10 Recent Transactions</h2>
            <table class="w-full mt-2">
                <thead>
                    <tr class="text-left text-gray-600">
                        <th>Trans ID</th>
                        <th>Date</th>
                        <th>Total</th>
                        <th>View Details</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-t">
                        <td>INV747485482401</td>
                        <td>09 Jun 2025 16:07</td>
                        <td>Rp. 10,000</td>
                        <td><button class="bg-blue-500 text-white px-2 py-1 rounded">View</button></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Rentals Management -->
    <div class="mt-6">
        <h2 class="text-2xl font-bold mb-4">RENTALS MANAGEMENT</h2>
        <div class="grid grid-cols-4 gap-4">
            <div class="bg-green-100 p-4 rounded-lg shadow">
                <h3 class="font-semibold">#1</h3>
                <p>Playstation 3</p>
                <p>Status: <span class="text-green-600">Available</span></p>
                <button class="bg-blue-500 text-white px-2 py-1 rounded mt-2">Start Rental</button>
            </div>
            <div class="bg-red-100 p-4 rounded-lg shadow">
                <h3 class="font-semibold">#2</h3>
                <p>Playstation 3</p>
                <p>Status: <span class="text-red-600">Occupied</span></p>
                <p>09-08-2025 10:12</p>
                <button class="bg-blue-500 text-white px-2 py-1 rounded mt-2">Select Extra Duration</button>
            </div>
            <div class="bg-yellow-100 p-4 rounded-lg shadow">
                <h3 class="font-semibold">#3</h3>
                <p>Playstation 3</p>
                <p>Status: <span class="text-yellow-600">Occupied</span></p>
                <p>09-08-2025 14:44</p>
                <button class="bg-blue-500 text-white px-2 py-1 rounded mt-2">Select Extra Duration</button>
            </div>
            <div class="bg-blue-100 p-4 rounded-lg shadow">
                <h3 class="font-semibold">#4</h3>
                <p>Playstation 4</p>
                <p>Status: <span class="text-blue-600">Available</span></p>
                <button class="bg-blue-500 text-white px-2 py-1 rounded mt-2">Start Rental</button>
            </div>
            <div class="bg-green-100 p-4 rounded-lg shadow">
                <h3 class="font-semibold">#5</h3>
                <p>Playstation 4</p>
                <p>Status: <span class="text-green-600">Available</span></p>
                <button class="bg-blue-500 text-white px-2 py-1 rounded mt-2">Start Rental</button>
            </div>
            <div class="bg-yellow-100 p-4 rounded-lg shadow">
                <h3 class="font-semibold">#6</h3>
                <p>Playstation 4</p>
                <p>Status: <span class="text-yellow-600">Occupied</span></p>
                <button class="bg-blue-500 text-white px-2 py-1 rounded mt-2">Start Rental</button>
            </div>
            <div class="bg-red-100 p-4 rounded-lg shadow">
                <h3 class="font-semibold">#7</h3>
                <p>Playstation 4</p>
                <p>Status: <span class="text-red-600">Occupied</span></p>
                <button class="bg-blue-500 text-white px-2 py-1 rounded mt-2">Start Rental</button>
            </div>
            <div class="bg-purple-100 p-4 rounded-lg shadow">
                <h3 class="font-semibold">#8</h3>
                <p>Billiard Regular</p>
                <p>Status: <span class="text-purple-600">Occupied</span></p>
                <p>09-08-2025 10:27</p>
                <button class="bg-blue-500 text-white px-2 py-1 rounded mt-2">Select Extra Duration</button>
            </div>
            <div class="bg-green-100 p-4 rounded-lg shadow">
                <h3 class="font-semibold">#9</h3>
                <p>Billiard VIP</p>
                <p>Status: <span class="text-green-600">Available</span></p>
                <button class="bg-blue-500 text-white px-2 py-1 rounded mt-2">Start Rental</button>
            </div>
            <div class="bg-red-100 p-4 rounded-lg shadow">
                <h3 class="font-semibold">#10</h3>
                <p>Playbox PS 3</p>
                <p>Status: <span class="text-red-600">Occupied</span></p>
                <p>23:16:00</p>
                <button class="bg-blue-500 text-white px-2 py-1 rounded mt-2">Select Extra Duration</button>
            </div>
            <div class="bg-yellow-100 p-4 rounded-lg shadow">
                <h3 class="font-semibold">#11</h3>
                <p>Playbox PS 3</p>
                <p>Status: <span class="text-yellow-600">Occupied</span></p>
                <p>23:16:00</p>
                <button class="bg-blue-500 text-white px-2 py-1 rounded mt-2">Start Rental</button>
            </div>
            <div class="bg-blue-100 p-4 rounded-lg shadow">
                <h3 class="font-semibold">#12</h3>
                <p>Playstation 5 VIP</p>
                <p>Status: <span class="text-blue-600">Available</span></p>
                <button class="bg-blue-500 text-white px-2 py-1 rounded mt-2">Start Rental</button>
            </div>
        </div>
    </div>
    <!-- KONTEN KONTEN AKHIR -->

    <script type="text/javascript">
        var gk_isXlsx = false;
        var gk_xlsxFileLookup = {};
        var gk_fileData = {};

        function filledCell(cell) {
            return cell !== '' && cell != null;
        }

        function loadFileData(filename) {
            if (gk_isXlsx && gk_xlsxFileLookup[filename]) {
                try {
                    var workbook = XLSX.read(gk_fileData[filename], {
                        type: 'base64'
                    });
                    var firstSheetName = workbook.SheetNames[0];
                    var worksheet = workbook.Sheets[firstSheetName];

                    // Convert sheet to JSON to filter blank rows
                    var jsonData = XLSX.utils.sheet_to_json(worksheet, {
                        header: 1,
                        blankrows: false,
                        defval: ''
                    });
                    // Filter out blank rows (rows where all cells are empty, null, or undefined)
                    var filteredData = jsonData.filter(row => row.some(filledCell));

                    // Heuristic to find the header row by ignoring rows with fewer filled cells than the next row
                    var headerRowIndex = filteredData.findIndex((row, index) =>
                        row.filter(filledCell).length >= filteredData[index + 1]?.filter(filledCell).length
                    );
                    // Fallback
                    if (headerRowIndex === -1 || headerRowIndex > 25) {
                        headerRowIndex = 0;
                    }

                    // Convert filtered JSON back to CSV
                    var csv = XLSX.utils.aoa_to_sheet(filteredData.slice(headerRowIndex));
                    csv = XLSX.utils.sheet_to_csv(csv, {
                        header: 1
                    });
                    return csv;
                } catch (e) {
                    console.error(e);
                    return "";
                }
            }
            return gk_fileData[filename] || "";
        }

        // Toggle sidebar for mobile
        document.getElementById('toggleSidebar').addEventListener('click', function () {
            const sidebar = document.getElementById('sidebar');
            const navMenu = document.getElementById('navMenu');
            sidebar.classList.toggle('-translate-x-full');
            navMenu.classList.toggle('hidden');
        });

        // Update date and time
        function updateDateTime() {
            const now = new Date();
            const optionsDate = {
                year: 'numeric',
                month: 'long',
                day: 'numeric'
            };
            const optionsTime = {
                hour: '2-digit',
                minute: '2-digit',
                second: '2-digit',
                hour12: false
            };
            const date = now.toLocaleDateString('id-ID', optionsDate);
            const time = now.toLocaleTimeString('id-ID', optionsTime);
            const dateTimeString = `${date}, ${time}`;
            document.getElementById('datetime').textContent = dateTimeString;
        }

        setInterval(updateDateTime, 1000);
        updateDateTime();
    </script>
</body>

</html>