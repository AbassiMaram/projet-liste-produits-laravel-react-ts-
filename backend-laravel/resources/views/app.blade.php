<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Laravel App</title>
    
    <!-- Utilisation de Vite pour charger les scripts -->
    @viteReactRefresh
    
    
    <!-- Autres balises de tête nécessaires -->
</head>
<body>
    <!-- Contenu de votre application -->
    @inertia
</body>
</html>
