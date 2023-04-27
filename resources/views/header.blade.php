<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!--BootStrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!---->

    <!--ION ICON-->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <!---->

    <!--CSS-->
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/mobile.css">
    <link rel="stylesheet" href="/css/admin.css">

    <!---->

    <!--Jquery-->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <!---->

    <!--LitghtBox-->
    <link rel="stylesheet" href="/lightbox2/dist/css/lightbox.min.css">
    <!---->

</head>

<body>
    <nav>
        <div class="row container m-auto">
            <p style="font-size:24px;" class="display-4 col-6 mt-3"><a href="/" style="text-decoration:none; color:black;">SimplesVida</a></p>

            <p id="hamburguer" class="menu-topo-hamburguer col-6">|</p>

        </div>
        <ul id="menu-topo">
            <a href="/">
                <li>Home</li>
            </a>
            <a href="/posts">
                <li>Posts</li>
            </a>
            <a href="/galeria">
                <li>Galeria</li>
            </a>
        </ul>
    </nav>