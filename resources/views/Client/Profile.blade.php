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
                    <a href="/SalleClient" class="text-gray-300 hover:text-white flex items-center">
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
                    <a href="" class="text-gray-300 hover:text-white flex items-center">
                        <i class="fas fa-users mr-2"></i> Users
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
        <div class="w-4/5 p-8">
            <h1 class="text-2xl font-bold mb-6">
                Profile
            </h1>
            {{-- @dd($users); --}}
            
            {{-- @foreach ($users as $user) --}}
            <div class="bg-white rounded-lg shadow-md p-6">
                <div class="flex items-center space-x-6">
                    <img alt="Profile picture of the user" class="w-32 h-32 rounded-full" height="128"
                        src="{{ $users->photo }}"
                        width="128" />
                    <div>
                        <h2 class="text-2xl font-bold">
                            {{ $users->name }}
                        </h2>
                        <p class="text-gray-600">
                            {{ $users->email }}
                        </p>
                        <p class="text-gray-600">
                            Joined: {{ $users->created_at }}
                        </p>
                    </div>
                </div>
                <div class="mt-6">
                    <h3 class="text-xl font-bold mb-4">
                        About
                    </h3>
                    <p class="text-gray-600">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua.
                    </p>
                </div>
                <div class="mt-6">
                    <h3 class="text-xl font-bold mb-4">
                        Contact Information
                    </h3>
                    <p class="text-gray-600">
                        <i class="fas fa-phone mr-2">
                        </i>
                        +123 456 7890
                    </p>
                    <p class="text-gray-600">
                        <i class="fas fa-map-marker-alt mr-2">
                        </i>
                        123 Main Street, Anytown, USA
                    </p>
                </div>
                <div class="mt-6">
                    <h3 class="text-xl font-bold mb-4">
                        Social Media
                    </h3>
                    <div class="flex space-x-4">
                        <a class="text-blue-500" href="#">
                            <i class="fab fa-facebook fa-2x">
                            </i>
                        </a>
                        <a class="text-blue-400" href="#">
                            <i class="fab fa-twitter fa-2x">
                            </i>
                        </a>
                        <a class="text-pink-500" href="#">
                            <i class="fab fa-instagram fa-2x">
                            </i>
                        </a>
                        <a class="text-blue-700" href="#">
                            <i class="fab fa-linkedin fa-2x">
                            </i>
                        </a>
                    </div>
                </div>
            </div>
            {{-- @endforeach --}}
        </div>
    </div>






</body>

</html>
