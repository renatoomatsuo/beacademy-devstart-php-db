<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <title>My Shop</title>
</head>
<body style="background: linear-gradient(180deg, rgba(255,252,31,1) 0%, rgba(255,200,0,1) 100%) no-repeat center; height: 100%;">
    <header class="bd-navbar sticky-top d-flex flex-column align-items-center">
        <nav class="navbar bg-light shadow px-5 border rounded-top rounded-pill w-100">
            <div class="container-fluid">
                <a class="navbar-brand fs-3 align-text-center" href="/">
                    <img src="https://cdn-icons-png.flaticon.com/512/5165/5165792.png" alt="" width="30" height="30" class="d-inline-block align-text-top mt-1">
                    MyShop
                </a>
                <ul class="nav justify-content-end me-5">
                    <li class="nav-item btn-outline-warning">
                        <a class="nav-link link-warning" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link-warning" href="/produtos">Produtos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link-warning" href="/categorias">Categorias</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link-warning">Sobre</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="navbar bg-light shadow border rounded-top rounded-pill py-0 px-5 d-flex justify-content-center">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class='breadcrumb-item'><a class='link-warning' href='/'><i class="bi bi-house"></i> Home</a></li>
                    <?php
                        if (isset($_SERVER["PATH_INFO"])) { 
                            $path = explode("/", $_SERVER["PATH_INFO"]);
                            foreach ($path as $valor) {
                                if ($valor != "") {
                                    $active = $valor == end($path) ? "<li class='breadcrumb-item active' aria-current='page'>{$valor}</li>" : "<li class='breadcrumb-item'><a class='link link-warning'href='/{$valor}'>{$valor}</a></li>";
                                    echo $active;
                                }
                            }
                        }    
                    ?> 
                </ol>
            </nav>   
        </div>
    </header>
    