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
                Admin Dashboard
            </div>
            <ul class="space-y-4">
                <li>
                    <a href="/Salles" class="text-gray-300 hover:text-white flex items-center">
                        <i class="fas fa-tachometer-alt mr-2"></i> Dashboard
                    </a>
                </li>
                <li>
                    <a href="/Reservation" class="text-gray-300 hover:text-white flex items-center">
                        <i class="fas fa-calendar-alt mr-2"></i> Reservations
                    </a>
                </li>
                <li>
                    <a href="#" class="text-gray-300 hover:text-white flex items-center">
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
                <div class="flex justify-between items-center mb-5">
                    <h2 class="text-2xl font-bold">Users</h2>
                    <button class="bg-gray-800 text-white px-4 py-2 rounded-lg hover:bg-gray-700"><a
                            href="/createUser">Create</a></button>
                </div>
                <div class="overflow-x-auto">
                    <table class="min-w-full bg-white">
                        <thead>

                            <tr>
                                <th class="py-2 px-4 border-b">Photo</th>
                                <th class="py-2 px-4 border-b">Name</th>
                                <th class="py-2 px-4 border-b">email</th>
                                <th class="py-2 px-4 border-b">role</th>
                                <th class="py-2 px-4 border-b">Date</th>
                                <th class="py-2 px-4 border-b">Status</th>
                                <th class="py-2 px-4 border-b"></th>
                                <th class="py-2 px-4 border-b"></th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- @dd($user) --}}
                            @foreach ($user as $users)
                                <tr>
                                    <td class="py-2 px-5 border-b">
                                        <img src="{{ $users->photo }}" class="w-10 rounded" alt="">
                                    </td>
                                    <td class="py-2 px-4 border-b">{{ $users->name }}</td>
                                    <td class="py-2 px-4 border-b">{{ $users->email }}</td>
                                    <td class="py-2 px-4 border-b">{{ $users->role->rolename }}</td>
                                    <td class="py-2 px-4 border-b">{{ $users->created_at }}</td>
                                    <td class="py-2 px-4 border-b text-green-500">Confirmed</td>
                                    <td class="py-2 px-4 border-b">
                                        <a href="/users/update/{{ $users->id }}" class="text-blue-500 hover:underline">Update</a>
                                    </td>
                                    <td class="py-2 px-4 border-b">
                                        <form action="" method="post">
                                            @csrf
                                            <input type="hidden" name="id" value="{{ $users->id }}" id="">
                                            <button type="submit"
                                                class="text-red-500 hover:underline ml-4">delete</button>
                                        </form>

                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
