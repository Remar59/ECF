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
        <header class="bg-green-800 shadow">
            <img src="/public/uploads/logo fond transparent.png" alt="logo" class="h-8 w-8">
            <div class="flex items-center w-full">
                <div class="max-w-6xl mx-auto px-3 py-8">
                    <nav class="text-gray-100 space-x-4">
                        <a href="/" class="text-lg">Accueil</a>
                        <a href="/matelas" class="text-lg">Matelas</a>
                    </nav>
                </div>
            </div>
        </header>
        </div>
        <div class="max-w-6xl mx-auto px-3 py-8">
            @yield('content')
        </div>
    </body>

</html>
