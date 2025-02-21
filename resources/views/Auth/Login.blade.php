<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register & Login - Salle Reservation</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet" />
</head>

<body class="font-roboto bg-gray-100">


    <!-- Login Form -->
    <div class="min-h-screen flex items-center justify-center bg-gray-100" id="login">
        <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
            <h2 class="text-3xl font-bold mb-6 text-center text-gray-800">Welcome Back</h2>
            <form action="/LoginForm">
                <div class="mb-4">
                    <label class="block text-gray-700 mb-2" for="login-email">Email Address</label>
                    <input
                        class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                        id="login-email" name="email" type="email" placeholder="example@example.com" required />
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 mb-2" for="login-password">Password</label>
                    <input
                        class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                        id="login-password" name="password" type="password" placeholder="********" required />
                </div>
                <button
                    class="w-full bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 transition duration-300"
                    type="submit">Login</button>
            </form>
            <p class="text-center text-gray-600 mt-4">Don't have an account? <a class="text-blue-500 hover:underline"
                    href="/Register">Register</a></p>
        </div>
    </div>
</body>

</html>
