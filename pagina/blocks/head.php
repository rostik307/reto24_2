<?php

if (!isset($titulo)) {
    $titulo = "Bon Appetit";
};

echo "
<!DOCTYPE html>
<html lang='es'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>$titulo</title>
    <link rel='stylesheet' href='../style/bootstrap.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css'>
    <link rel='stylesheet' href='../style/main.css?v=1a04'>
</head>
<body>
    <div class='container'>
        <header class='row'>
            <nav class='col-12 navbar navbar-expand-lg navbar-light header-tabs navegador'>
                <a class='navbar-brand' href='#'>Mi Sitio</a>
                <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarSupportedContent' aria-controls='navbarSupportedContent' aria-expanded='false' aria-label='Toggle navigation'>
                    <span class='navbar-toggler-icon'></span>
                </button>

                <div class='collapse navbar-collapse' id='navbarSupportedContent'>
                    <ul class='navbar-nav mr-auto'>
                        <li class='nav-item'>
                            <a class='nav-link active' href='#'><i class='fas fa-home'></i> Principal</a>
                        </li>
                        <li class='nav-item'>
                            <a class='nav-link' href='#'><i class='fas fa-box'></i> Pedidos</a>
                        </li>
                        <li class='nav-item'>
                            <a class='nav-link' href='#'><i class='fas fa-tasks'></i> Estado</a>
                        </li>
                        <li class='nav-item'>
                            <a class='nav-link' href='#'><i class='fas fa-user'></i> Usuario</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
    </div>
";
?>