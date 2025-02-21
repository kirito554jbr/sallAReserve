<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Client Dashboard - Salle Reservation</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet" />
</head>

<body class="font-roboto">
    <!-- Sidebar -->
    <div class="flex flex-col md:flex-row">
        <div class="w-full md:w-64 bg-gray-800 h-auto md:h-screen p-4">
            <div class="text-white text-2xl font-bold mb-6">
                Client Dashboard
            </div>
            <ul class="space-y-4">
                <li>
                    <a href="#" class="text-gray-300 hover:text-white flex items-center">
                        <i class="fas fa-tachometer-alt mr-2"></i> Dashboard
                    </a>
                </li>
                <li>
                    <a href="#" class="text-gray-300 hover:text-white flex items-center">
                        <i class="fas fa-calendar-alt mr-2"></i> My Reservations
                    </a>
                </li>
                <li>
                    <a href="#" class="text-gray-300 hover:text-white flex items-center">
                        <i class="fas fa-user mr-2"></i> Profile
                    </a>
                </li>
                <li>
                    <a href="#" class="text-gray-300 hover:text-white flex items-center">
                        <i class="fas fa-cogs mr-2"></i> Settings
                    </a>
                </li>
                <li>
                    <a href="/Logout" class="text-gray-300 hover:text-white flex items-center">
                        <i class="fas fa-sign-out-alt mr-2"></i> Logout
                    </a>
                </li>
            </ul>
        </div>
        <!-- Main Content -->
        <div class="flex-1 p-6 bg-gray-100">
            <h1 class="text-3xl font-bold mb-6">Dashboard</h1>
            <!-- Statistics Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-6">
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <div class="flex items-center">
                        <div class="text-blue-500 text-3xl mr-4">
                            <i class="fas fa-calendar-alt"></i>
                        </div>
                        <div>
                            <h2 class="text-xl font-bold">5</h2>
                            <p class="text-gray-600">Upcoming Reservations</p>
                        </div>
                    </div>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <div class="flex items-center">
                        <div class="text-green-500 text-3xl mr-4">
                            <i class="fas fa-check-circle"></i>
                        </div>
                        <div>
                            <h2 class="text-xl font-bold">20</h2>
                            <p class="text-gray-600">Completed Reservations</p>
                        </div>
                    </div>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <div class="flex items-center">
                        <div class="text-yellow-500 text-3xl mr-4">
                            <i class="fas fa-clock"></i>
                        </div>
                        <div>
                            <h2 class="text-xl font-bold">2</h2>
                            <p class="text-gray-600">Pending Reservations</p>
                        </div>
                    </div>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <div class="flex items-center">
                        <div class="text-red-500 text-3xl mr-4">
                            <i class="fas fa-times-circle"></i>
                        </div>
                        <div>
                            <h2 class="text-xl font-bold">1</h2>
                            <p class="text-gray-600">Cancelled Reservations</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- My Reservations Table -->
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <h2 class="text-2xl font-bold mb-4">My Reservations</h2>
                <div class="overflow-x-auto">
                    <table class="min-w-full bg-white">
                        <thead>
                            <tr>
                                <th class="py-2 px-4 border-b">Salle</th>
                                <th class="py-2 px-4 border-b">Date</th>
                                <th class="py-2 px-4 border-b">Status</th>
                                <th class="py-2 px-4 border-b">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="py-2 px-4 border-b">Conference Room A</td>
                                <td class="py-2 px-4 border-b">2023-10-10</td>
                                <td class="py-2 px-4 border-b text-green-500">Confirmed</td>
                                <td class="py-2 px-4 border-b">
                                    <a href="#" class="text-blue-500 hover:underline">View</a>
                                    <a href="#" class="text-red-500 hover:underline ml-4">Cancel</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="py-2 px-4 border-b">Event Hall B</td>
                                <td class="py-2 px-4 border-b">2023-10-15</td>
                                <td class="py-2 px-4 border-b text-yellow-500">Pending</td>
                                <td class="py-2 px-4 border-b">
                                    <a href="#" class="text-blue-500 hover:underline">View</a>
                                    <a href="#" class="text-red-500 hover:underline ml-4">Cancel</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="py-2 px-4 border-b">Meeting Room C</td>
                                <td class="py-2 px-4 border-b">2023-10-20</td>
                                <td class="py-2 px-4 border-b text-green-500">Confirmed</td>
                                <td class="py-2 px-4 border-b">
                                    <a href="#" class="text-blue-500 hover:underline">View</a>
                                    <a href="#" class="text-red-500 hover:underline ml-4">Cancel</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="py-2 px-4 border-b">Auditorium D</td>
                                <td class="py-2 px-4 border-b">2023-10-25</td>
                                <td class="py-2 px-4 border-b text-red-500">Cancelled</td>
                                <td class="py-2 px-4 border-b">
                                    <a href="#" class="text-blue-500 hover:underline">View</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="py-2 px-4 border-b">Training Room E</td>
                                <td class="py-2 px-4 border-b">2023-10-30</td>
                                <td class="py-2 px-4 border-b text-yellow-500">Pending</td>
                                <td class="py-2 px-4 border-b">
                                    <a href="#" class="text-blue-500 hover:underline">View</a>
                                    <a href="#" class="text-red-500 hover:underline ml-4">Cancel</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
