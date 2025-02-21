<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Dashboard - Salle Reservation</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet" />
</head>

<body class="font-roboto">
    <!-- Sidebar -->
    <div class="flex flex-col md:flex-row">
        <div class="w-1/5 bg-gray-800 h-screen p-5 sticky top-0">
            <div class="text-white text-2xl font-bold mb-6">
                SalleAreserve
            </div>
            <ul class="space-y-4">
                <li>
                    <a href="#" class="text-gray-300 hover:text-white flex items-center">
                        <i class="fas fa-tachometer-alt mr-2"></i> Dashboard
                    </a>
                </li>
                <li>
                    <form action="/ShowOneReserve" method="get">
                        <button class="text-gray-300 hover:text-white flex items-center">
                            <i class="fas fa-calendar-alt mr-2"></i>
                            <input type="hidden" name="user_id" value="19" id=""> Reservations
                        </button>
                    </form>
                </li>
                <li>
                    <a href="/Profile" class="text-gray-300 hover:text-white flex items-center">
                        <i class="fas fa-users mr-2"></i> Profile
                    </a>
                </li>
                <li>
                    <a href="#" class="text-gray-300 hover:text-white flex items-center">
                        <i class="fas fa-cogs mr-2"></i> Settings
                    </a>
                </li>
                <li>
                    <a href="#" class="text-gray-300 hover:text-white flex items-center">
                        <i class="fas fa-sign-out-alt mr-2"></i> Logout
                    </a>
                </li>
            </ul>
        </div>
        <!-- Main Content -->
        <div class="flex-1 p-6 bg-gray-100">
            <h1 class="text-3xl font-bold mb-6">Dashboard</h1>
            <!-- Statistics Cards -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-6">
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <div class="flex items-center">
                        <div class="text-blue-500 text-3xl mr-4">
                            <i class="fas fa-calendar-alt"></i>
                        </div>
                        <div>
                            <h2 class="text-xl font-bold">150</h2>
                            <p class="text-gray-600">Reservations</p>
                        </div>
                    </div>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <div class="flex items-center">
                        <div class="text-green-500 text-3xl mr-4">
                            <i class="fas fa-users"></i>
                        </div>
                        <div>
                            <h2 class="text-xl font-bold">75</h2>
                            <p class="text-gray-600">Users</p>
                        </div>
                    </div>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <div class="flex items-center">
                        <div class="text-yellow-500 text-3xl mr-4">
                            <i class="fas fa-door-open"></i>
                        </div>
                        <div>
                            <h2 class="text-xl font-bold">10</h2>
                            <p class="text-gray-600">Available Salles</p>
                        </div>
                    </div>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <div class="flex items-center">
                        <div class="text-red-500 text-3xl mr-4">
                            <i class="fas fa-exclamation-triangle"></i>
                        </div>
                        <div>
                            <h2 class="text-xl font-bold">3</h2>
                            <p class="text-gray-600">Issues</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Recent Reservations Table -->
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <h2 class="text-2xl font-bold">Salles</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach ($salles as $salle)
                        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                            <img alt="Image of a large auditorium with stage and seating" class="w-80"
                                src="{{ $salle->photo }}" />
                            <div class="p-6">
                                <h3 class="text-xl font-bold mb-2">
                                    {{ $salle->name }}
                                </h3>
                                <p class="text-gray-700 mb-4">
                                    A large auditorium suitable for conferences and performances.
                                </p>
                                <p class="text-gray-700 mb-4">Capacite : {{ $salle->capacite }}</p>
                                <form action="/Reservation/create" method="get">
                                    <button class="bg-blue-500 text-white px-4 py-2 rounded-full">
                                        <input type="hidden" name="salle_id" value="{{ $salle->id }}"
                                            id="">
                                        <input type="hidden" name="user_id" value="" id="">
                                        Reserve Now
                                    </button>
                                </form>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    </div>






</body>

</html>
