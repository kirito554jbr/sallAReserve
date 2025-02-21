<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>
        Salle Reservation
    </title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&amp;display=swap" rel="stylesheet" />
</head>

<body class="font-roboto">
    <!-- Navigation Bar -->
    <nav class="bg-gray-800 p-4">
        <div class="container mx-auto flex justify-between items-center">
            <a class="text-white text-2xl font-bold" href="#">
                Salle Reservation
            </a>
            <ul class="hidden md:flex space-x-4">
                <li>
                    <a class="text-gray-300 hover:text-white" href="#">
                        Home
                    </a>
                </li>
                <li>
                    <a class="text-gray-300 hover:text-white" href="#">
                        About
                    </a>
                </li>
                <li>
                    <a class="text-gray-300 hover:text-white" href="#">
                        Contact
                    </a>
                </li>
            </ul>
            <div class="hidden md:flex space-x-4">
                <a class="bg-blue-500 text-white px-4 py-2 rounded-full" href="/Register">
                    Register
                </a>
                <a class="bg-green-500 text-white px-4 py-2 rounded-full" href="/Login">
                    Login
                </a>
            </div>
            <button class="md:hidden text-white" id="menu-button">
                <i class="fas fa-bars">
                </i>
            </button>
        </div>
        <div class="md:hidden" id="mobile-menu">
            <ul class="flex flex-col space-y-4 mt-4">
                <li>
                    <a class="text-gray-300 hover:text-white" href="#">
                        Home
                    </a>
                </li>
                <li>
                    <a class="text-gray-300 hover:text-white" href="#">
                        About
                    </a>
                </li>
                <li>
                    <a class="text-gray-300 hover:text-white" href="#">
                        Contact
                    </a>
                </li>
                <li>
                    <a class="bg-blue-500 text-white px-4 py-2 rounded-full" href="#">
                        Register
                    </a>
                </li>
                <li>
                    <a class="bg-green-500 text-white px-4 py-2 rounded-full" href="#">
                        Login
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- Hero Section -->
    <section class="bg-gray-200 py-20">
        <div class="container mx-auto text-center px-4">
            <h1 class="text-4xl font-bold mb-4">
                Reserve Your Salle Today
            </h1>
            <p class="text-gray-700 mb-8">
                Find and reserve the perfect salle for your event.
            </p>
            <a class="bg-blue-500 text-white px-6 py-3 rounded-full" href="#">
                Get Started
            </a>
        </div>
    </section>
    <!-- Available Salles -->
    <section class="py-20">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-10">
                Available Salles
            </h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Salle 1 -->
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <img alt="Image of a modern conference room with a large table and chairs" height="400"
                        src="https://storage.googleapis.com/a1aa/image/1K-CD7QkqcQx9t2mK9XZ0coj1w_OdcEyCdTC4mPRnL4.jpg"
                        width="600" />
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2">
                            Conference Room A
                        </h3>
                        <p class="text-gray-700 mb-4">
                            A modern conference room with all the amenities you need.
                        </p>
                        <a class="bg-blue-500 text-white px-4 py-2 rounded-full" href="#">
                            Reserve Now
                        </a>
                    </div>
                </div>
                <!-- Salle 2 -->
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <img alt="Image of a spacious hall with stage and seating arrangement" height="400"
                        src="https://storage.googleapis.com/a1aa/image/u1u09OvpwQNO5ywo0l0surISaYXjfLwLijkKcnCN4PU.jpg"
                        width="600" />
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2">
                            Event Hall B
                        </h3>
                        <p class="text-gray-700 mb-4">
                            A spacious hall perfect for large events and gatherings.
                        </p>
                        <a class="bg-blue-500 text-white px-4 py-2 rounded-full" href="#">
                            Reserve Now
                        </a>
                    </div>
                </div>
                <!-- Salle 3 -->
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <img alt="Image of a small meeting room with a round table and chairs" height="400"
                        src="https://storage.googleapis.com/a1aa/image/kCMt6epG0n6JBEiXd8om0SI7AsGqiXazx4RG149n7V4.jpg"
                        width="600" />
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2">
                            Meeting Room C
                        </h3>
                        <p class="text-gray-700 mb-4">
                            A cozy meeting room ideal for small team meetings.
                        </p>
                        <a class="bg-blue-500 text-white px-4 py-2 rounded-full" href="#">
                            Reserve Now
                        </a>
                    </div>
                </div>
                <!-- Salle 4 -->
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <img alt="Image of a large auditorium with stage and seating" height="400"
                        src="https://storage.googleapis.com/a1aa/image/F-k7NyzZmAVGeY-acSZBgo9CtM0ETWrVRSQS0tO6U5M.jpg"
                        width="600" />
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2">
                            Auditorium D
                        </h3>
                        <p class="text-gray-700 mb-4">
                            A large auditorium suitable for conferences and performances.
                        </p>
                        <a class="bg-blue-500 text-white px-4 py-2 rounded-full" href="#">
                            Reserve Now
                        </a>
                    </div>
                </div>
                <!-- Salle 5 -->
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <img alt="Image of a training room with desks and chairs" height="400"
                        src="https://storage.googleapis.com/a1aa/image/YVNtf-fJFyVRcexyDwEtmAGrA9vnZ7o4Sbs0xf5vAAg.jpg"
                        width="600" />
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2">
                            Training Room E
                        </h3>
                        <p class="text-gray-700 mb-4">
                            A well-equipped training room for workshops and seminars.
                        </p>
                        <a class="bg-blue-500 text-white px-4 py-2 rounded-full" href="#">
                            Reserve Now
                        </a>
                    </div>
                </div>
                <!-- Salle 6 -->
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <img alt="Image of a banquet hall with round tables and chairs" height="400"
                        src="https://storage.googleapis.com/a1aa/image/HmLBtuIUUWWc46OXXtEONadnR0HbW7z_0zaswXAVnxI.jpg"
                        width="600" />
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2">
                            Banquet Hall F
                        </h3>
                        <p class="text-gray-700 mb-4">
                            A beautiful banquet hall for weddings and receptions.
                        </p>
                        <a class="bg-blue-500 text-white px-4 py-2 rounded-full" href="#">
                            Reserve Now
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer -->
    <footer class="bg-gray-800 py-6">
        <div class="container mx-auto text-center text-gray-300">
            <p>
                © 2023 Salle Reservation. All rights reserved.
            </p>
        </div>
    </footer>
    <script>
        document.getElementById('menu-button').addEventListener('click', function() {
            var menu = document.getElementById('mobile-menu');
            if (menu.classList.contains('hidden')) {
                menu.classList.remove('hidden');
            } else {
                menu.classList.add('hidden');
            }
        });
    </script>
</body>

</html>
