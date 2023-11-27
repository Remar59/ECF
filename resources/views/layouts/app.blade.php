<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Literie 3000</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <link rel="stylesheet" type="text/css" href="/resources/css/app.css" />
</head>
<body>
    <body class="font-[Inter] bg-gray-200">
        <header class="bg-gray-300 shadow">
            <div class="flex items-center">
                <img src="/public/uploads/1.png" alt="Logo" class="h-full w-full mr-2">
            <div class="max-w-6xl mx-auto px-3 py-8">
                <nav class="text-gray-100 space-x-4">
                    <a href="/" class="text-lg">Accueil</a>
                    <a href="/matelas" class="text-lg">Matelas</a>
                </nav>
            </div>
        </div></header>
        <div class="max-w-6xl mx-auto px-3 py-8">
            @yield('content')
        </div>
</body>
</html>