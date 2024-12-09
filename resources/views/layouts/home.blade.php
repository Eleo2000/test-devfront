<!DOCTYPE html>
<html lang="fr">

<head>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- Ajouter Font Awesome via CDN -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

        @vite(['resources/scss/app.scss', 'resources/js/app.js'])
</head>


<body>
<main role="main">
        @yield('content')
</main>
</body>

</html>
