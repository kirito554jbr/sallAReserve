<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Dashboard - Salle Reservation</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet" />
</head>

<body>


    <div id="updateModal" class="fixed inset-0 bg-gray-800 bg-opacity-50 flex items-center justify-center ">
        <div class="bg-white p-5 rounded-lg shadow-lg w-1/3">
            <div class="flex justify-between items-center mb-5">
                <h2 class="text-2xl font-bold">Create Salle</h2>
                <button class="text-gray-500 hover:text-gray-700">
                    <a href="/Salles">
                        <i class="fas fa-times"></i>
                    </a>
                </button>
            </div>
            <form action="/Salles/updateSalle" method="GET">
                <div class="mb-4">
                    <label class="block text-gray-700">Photo URL</label>
                    <input type="text" class="w-full px-3 py-2 border rounded-lg" value={{$salle['photo']}} name="photo" placeholder="Enter photo URL">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700">Name</label>
                    <input type="text" class="w-full px-3 py-2 border rounded-lg" value={{$salle['name']}} name="name" placeholder="Enter name">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700">Numero</label>
                    <input type="text" class="w-full px-3 py-2 border rounded-lg" value={{$salle['numero']}} name="numero" placeholder="Enter numero">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700">Type</label>
                    <input type="text" class="w-full px-3 py-2 border rounded-lg" value={{$salle['type']}} name="type" placeholder="Enter type">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700">Capacite</label>
                    <input type="text" class="w-full px-3 py-2 border rounded-lg" value={{$salle['capacite']}} name="capacite" placeholder="Enter capacite">
                </div>
                <div class="mb-4">
                    
                    <input type="hidden" class="w-full px-3 py-2 border rounded-lg" value={{$salle['id']}} name="id" placeholder="Enter  capacite ">
                </div>
                <div class="flex justify-end">
                    <button type="submit" class="bg-gray-800 text-white px-4 py-2 rounded-lg hover:bg-gray-700">
                        Update
                    </button>
                </div>
            </form>
        </div>
    </div>

</body>

</html>
