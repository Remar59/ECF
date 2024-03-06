<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Literie 3000</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
</head>

<body class="flex flex-col min-h-screen">

    <div class="font-[Inter] bg-gray-200">
        <header class="bg-blue-800 shadow flex items-center justify-between px-3 py-4">
            <div>
                <img src="../logo-fond-transparent.png" alt="" class="mr-4"> 
            </div>
            <div class="px-4">
                <nav class="text-gray-100 space-x-4">
                    <a href="/home" class="text-lg">Accueil</a>
                    <a href="/matelas" class="text-lg">Matelas</a>
                </nav>
            </div>
        </header>
    </div>
    <div>
        @yield('content')
    </div>

    <footer class="bg-blue-800 mt-auto h-14"></footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>

</html>
