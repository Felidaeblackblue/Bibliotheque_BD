<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/@yield('css').css">
    <script src="https://kit.fontawesome.com/45e38e596f.js" crossorigin="anonymous"></script>
    <title>@yield('title')</title>
</head>
<body>
    <header>
        <nav>
        <div class="accueil"><a href="/">Accueil</a></div>
        <div><a href="/list_caracter">Personnages de BD</a></div>
        <div class="ajout"><a href="/ajout">Ajouter</a></div>
        </nav>
    </header>
<main>
    @yield('content')
</main>

</body>
</html>