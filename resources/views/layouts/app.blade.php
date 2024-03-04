<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Literie 3000</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>

</head>

<body>

    <div class="font-[Inter] bg-gray-200">
        <header class="bg-blue-800 shadow flex items-center justify-between px-3 py-4"> <!-- Added padding -->
            <div>
                <img src="./logo-fond-transparent.png" alt="" class="mr-4"> <!-- Added margin right class -->
            </div>
            <div>
                <nav class="text-gray-100 space-x-4">
                    <a href="/home" class="text-lg">Accueil</a>
                    <a href="/matelas" class="text-lg">Matelas</a>
                </nav>
            </div>
        </header>
    </div>
    <div class="max-w-6xl mx-auto px-3 py-8">
        @yield('content')
    </div>
</body>

</html>
