<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SocialVerse</title>

    @vite(['resources/css/app.css'])   
</head>
<body class="d-flex flex-column min-vh-100">
    
    <x-navbar/>
    <div class="container wrapper d-flex justify-content-center align-items-center flex-column flex-grow-1">
        {{ $slot }}
    </div>

    @vite(['resources/js/app.js'])
</body>
</html>