<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Biblioteca Escolar</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>

        body {
            background: #f8f7fc;
            color: #252525;
            font-family: Arial, Helvetica, sans-serif;
        }

        /* =========================
           NAVBAR
        ========================= */

        .navbar {
            background: white;
            border-bottom: 2px solid #6c4bd8;
            min-height: 65px;
        }

        .logo {
            color: #5b3fc0;
            font-weight: bold;
            line-height: 1;
            font-size: 12px;
            text-align: center;
        }

        .logo i {
            font-size: 28px;
            display: block;
            margin-bottom: 3px;
        }

        .nav-link {
            color: #555 !important;
            font-size: 14px;
            font-weight: 500;
            padding: 10px 18px !important;
            border-radius: 10px;
            transition: 0.2s;
        }

        .nav-link:hover {
            background: #f0ecff;
            color: #6246c9 !important;
        }

        .nav-link i {
            margin-right: 6px;
            color: #6246c9;
        }

        .notification {
            color: #6246c9;
            font-size: 19px;
        }

        .user-photo {
            width: 34px;
            height: 34px;
            border-radius: 50%;
            background: #e5d8ff;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #6246c9;
        }

        .user-info {
            font-size: 11px;
            line-height: 1.2;
        }

        .user-info strong {
            font-size: 12px;
        }


        /* =========================
           CONTEÚDO
        ========================= */

        .main-container {
            padding: 30px 35px;
        }


        /* =========================
           SIDEBAR
        ========================= */

        .filter-sidebar {
            background: white;
            border-radius: 16px;
            padding: 20px 15px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
            min-height: 500px;
        }

        .filter-title {
            font-size: 15px;
            font-weight: bold;
        }

        .filter-button {
            background: #f1edff;
            color: #6246c9;
            border: none;
            border-radius: 20px;
            padding: 7px 15px;
            font-size: 12px;
            font-weight: bold;
        }

        .sidebar-icon {
            width: 32px;
            height: 32px;
            border: 1px solid #e7e2f5;
            border-radius: 9px;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #6246c9;
            background: white;
        }

        .sidebar-search {
            position: relative;
        }

        .sidebar-search i {
            position: absolute;
            left: 12px;
            top: 9px;
            color: #999;
            font-size: 13px;
        }

        .sidebar-search input {
            height: 34px;
            border: 1px solid #eeeeee;
            background: #f8f8f8;
            border-radius: 10px;
            padding-left: 34px;
            font-size: 12px;
        }

        .sidebar-search input:focus {
            border-color: #8b72df;
            box-shadow: 0 0 0 2px #eee9ff;
        }

        .section-title {
            color: #999;
            font-size: 10px;
            margin-top: 17px;
            margin-bottom: 6px;
            padding: 0 8px;
        }

        .filter-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 8px;
            border-radius: 8px;
            font-size: 11px;
            cursor: pointer;
        }

        .filter-item:hover {
            background: #f5f2ff;
        }

        .filter-left {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .filter-square {
            width: 12px;
            height: 12px;
            border: 1.5px solid #6b4bdd;
            border-radius: 3px;
        }

        .filter-detail {
            color: #999;
        }


        /* =========================
           CATÁLOGO
        ========================= */

        .catalog-area {
            padding-left: 25px;
        }

        .catalog-search {
            height: 44px;
            border-radius: 13px;
            border: 1px solid #e8e5ef;
            padding-left: 18px;
            font-size: 12px;
            box-shadow: 0 3px 15px rgba(0, 0, 0, 0.03);
        }

        .catalog-search:focus {
            border-color: #765bd1;
            box-shadow: 0 0 0 3px #eeeaff;
        }

        .catalog-search-box {
            position: relative;
        }

        .catalog-search-box i {
            position: absolute;
            right: 17px;
            top: 13px;
            color: #777;
        }

        .catalog-title {
            font-size: 25px;
            font-weight: 700;
            margin: 28px 0 18px;
        }

        .catalog-subtitle {
            color: #888;
            font-size: 12px;
            margin-top: -12px;
            margin-bottom: 20px;
        }


        /* =========================
           CARDS DOS LIVROS
        ========================= */

        .book-card {
            background: white;
            border: none;
            border-radius: 14px;
            padding: 15px;
            min-height: 135px;
            box-shadow: 0 4px 18px rgba(0, 0, 0, 0.05);
            transition: 0.25s;
        }

        .book-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 8px 25px rgba(76, 54, 150, 0.12);
        }

        .book-image {
            width: 100px;
            height: 105px;
            border-radius: 9px;
            background: #eeeaf8;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #b0a5d2;
            flex-shrink: 0;
        }

        .book-image i {
            font-size: 38px;
        }

        .book-info {
            padding-left: 15px;
        }

        .book-title {
            font-size: 15px;
            font-weight: bold;
            margin-top: 3px;
        }

        .book-author {
            color: #888;
            font-size: 11px;
            margin-top: 5px;
        }

        .book-category {
            display: inline-block;
            background: #f0ebff;
            color: #6246c9;
            font-size: 9px;
            padding: 4px 8px;
            border-radius: 10px;
            margin-top: 8px;
        }

        .book-button {
            border: none;
            background: #6246c9;
            color: white;
            font-size: 10px;
            padding: 6px 11px;
            border-radius: 8px;
            margin-top: 9px;
        }

        .book-button:hover {
            background: #4c35a8;
        }


        /* =========================
           RESPONSIVIDADE
        ========================= */

        @media (max-width: 992px) {

            .catalog-area {
                padding-left: 0;
                margin-top: 25px;
            }

            .navbar-nav {
                gap: 5px;
            }
        }

        @media (max-width: 576px) {

            .main-container {
                padding: 20px 15px;
            }

            .catalog-title {
                font-size: 21px;
            }

            .book-card {
                min-height: 120px;
            }

            .book-image {
                width: 85px;
                height: 90px;
            }

        }

    </style>

</head>

<body>


<!-- =========================
     NAVBAR
========================= -->

<nav class="navbar navbar-expand-lg">

    <div class="container-fluid px-4">

        <!-- LOGO -->

        <a class="navbar-brand" href="logo.png">

            <div class="logo">

                <i class="bi bi-book-half"></i>

                BIBLIOTECA<br>
                ESCOLAR

            </div>

        </a>


        <!-- MENU MOBILE -->

        <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#menu">

            <span class="navbar-toggler-icon"></span>

        </button>


        <!-- MENU -->

        <div class="collapse navbar-collapse" id="menu">

            <ul class="navbar-nav mx-auto">

                <li class="nav-item">

                    <a class="nav-link" href="#">
                        <i class="bi bi-house"></i>
                        Início
                    </a>

                </li>

                <li class="nav-item">

                    <a class="nav-link" href="#">
                        <i class="bi bi-book"></i>
                        Minhas Leituras
                    </a>

                </li>

                <li class="nav-item">

                    <a class="nav-link" href="#">
                        <i class="bi bi-chat-left-text"></i>
                        Comentários
                    </a>

                </li>

            </ul>


            <!-- USUÁRIO -->

            <div class="d-flex align-items-center gap-3">

                <i class="bi bi-bell notification"></i>

                <div class="user-photo">
                    <i class="bi bi-person"></i>
                </div>

                <div class="user-info">

                    <strong>Olá, Ana!</strong>

                    <br>

                    Aluna

                </div>

            </div>

        </div>

    </div>

</nav>



<!-- =========================
     CONTEÚDO
========================= -->

<main class="container-fluid main-container">

    <div class="row">


        <!-- =========================
             FILTROS
        ========================= -->

        <div class="col-lg-3 col-md-4">

            <div class="filter-sidebar">


                <div class="d-flex justify-content-between align-items-center mb-3">

                    <button class="filter-button">

                        <i class="bi bi-funnel me-1"></i>

                        Filtrar por

                    </button>


                    <div class="d-flex gap-2">

                        <div class="sidebar-icon">

                            <i class="bi bi-grid"></i>

                        </div>

                        <div class="sidebar-icon">

                            <i class="bi bi-list"></i>

                        </div>

                    </div>

                </div>


                <!-- PESQUISA -->

                <div class="sidebar-search mb-3">

                    <i class="bi bi-search"></i>

                    <input
                        type="text"
                        class="form-control"
                        placeholder="Pesquisar">

                </div>


                <!-- FILTROS -->

                <div class="filter-item">

                    <div class="filter-left">

                        <span class="filter-square"></span>

                        Título

                    </div>

                    <span class="filter-detail">
                        24
                    </span>

                </div>


                <div class="filter-item">

                    <div class="filter-left">

                        <span class="filter-square"></span>

                        Autor

                    </div>

                    <span class="filter-detail">
                        18
                    </span>

                </div>


                <div class="filter-item">

                    <div class="filter-left">

                        <span class="filter-square"></span>

                        Gênero

                    </div>

                    <span class="filter-detail">
                        12
                    </span>

                </div>


                <div class="filter-item">

                    <div class="filter-left">

                        <span class="filter-square"></span>

                        Ano

                    </div>

                    <span class="filter-detail">
                        10
                    </span>

                </div>


                <div class="section-title">

                    Categorias

                </div>


                <div class="filter-item">

                    <div class="filter-left">

                        <span class="filter-square"></span>

                        Romance

                    </div>

                    <span class="filter-detail">
                        8
                    </span>

                </div>


                <div class="filter-item">

                    <div class="filter-left">

                        <span class="filter-square"></span>

                        Aventura

                    </div>

                    <span class="filter-detail">
                        6
                    </span>

                </div>


                <div class="filter-item">

                    <div class="filter-left">

                        <span class="filter-square"></span>

                        Fantasia

                    </div>

                    <span class="filter-detail">
                        5
                    </span>

                </div>


                <div class="filter-item">

                    <div class="filter-left">

                        <span class="filter-square"></span>

                        Literatura

                    </div>

                    <span class="filter-detail">
                        9
                    </span>

                </div>


            </div>

        </div>



        <!-- =========================
             CATÁLOGO
        ========================= -->

        <div class="col-lg-9 col-md-8 catalog-area">


            <!-- PESQUISA -->

            <div class="catalog-search-box">

                <input
                    type="text"
                    class="form-control catalog-search"
                    placeholder="Pesquise por título, autor ou gênero...">

                <i class="bi bi-search"></i>

            </div>


            <!-- TÍTULO -->

            <h1 class="catalog-title">

                Catálogo completo

            </h1>

            <p class="catalog-subtitle">

                Encontre seu próximo livro favorito.

            </p>



            <!-- =========================
                 LIVROS
            ========================= -->

            <div class="row g-4">


                <!-- LIVRO -->

                <div class="col-xl-6">

                    <div class="book-card">

                        <div class="d-flex">

                            <div class="book-image">

                                <i class="bi bi-book"></i>

                            </div>

                            <div class="book-info">

                                <div class="book-title">
                                    O Pequeno Príncipe
                                </div>

                                <div class="book-author">
                                    Antoine de Saint-Exupéry
                                </div>

                                <span class="book-category">
                                    Literatura
                                </span>

                                <br>

                                <button class="book-button">
                                    Ver detalhes
                                </button>

                            </div>

                        </div>

                    </div>

                </div>



                <!-- LIVRO -->

                <div class="col-xl-6">

                    <div class="book-card">

                        <div class="d-flex">

                            <div class="book-image">

                                <i class="bi bi-book"></i>

                            </div>

                            <div class="book-info">

                                <div class="book-title">
                                    Harry Potter
                                </div>

                                <div class="book-author">
                                    J. K. Rowling
                                </div>

                                <span class="book-category">
                                    Fantasia
                                </span>

                                <br>

                                <button class="book-button">
                                    Ver detalhes
                                </button>

                            </div>

                        </div>

                    </div>

                </div>



                <!-- LIVRO -->

                <div class="col-xl-6">

                    <div class="book-card">

                        <div class="d-flex">

                            <div class="book-image">

                                <i class="bi bi-book"></i>

                            </div>

                            <div class="book-info">

                                <div class="book-title">
                                    Dom Casmurro
                                </div>

                                <div class="book-author">
                                    Machado de Assis
                                </div>

                                <span class="book-category">
                                    Romance
                                </span>

                                <br>

                                <button class="book-button">
                                    Ver detalhes
                                </button>

                            </div>

                        </div>

                    </div>

                </div>



                <!-- LIVRO -->

                <div class="col-xl-6">

                    <div class="book-card">

                        <div class="d-flex">

                            <div class="book-image">

                                <i class="bi bi-book"></i>

                            </div>

                            <div class="book-info">

                                <div class="book-title">
                                    Percy Jackson
                                </div>

                                <div class="book-author">
                                    Rick Riordan
                                </div>

                                <span class="book-category">
                                    Aventura
                                </span>

                                <br>

                                <button class="book-button">
                                    Ver detalhes
                                </button>

                            </div>

                        </div>

                    </div>

                </div>



                <!-- LIVRO -->

                <div class="col-xl-6">

                    <div class="book-card">

                        <div class="d-flex">

                            <div class="book-image">

                                <i class="bi bi-book"></i>

                            </div>

                            <div class="book-info">

                                <div class="book-title">
                                    Coraline
                                </div>

                                <div class="book-author">
                                    Neil Gaiman
                                </div>

                                <span class="book-category">
                                    Fantasia
                                </span>

                                <br>

                                <button class="book-button">
                                    Ver detalhes
                                </button>

                            </div>

                        </div>

                    </div>

                </div>



                <!-- LIVRO -->

                <div class="col-xl-6">

                    <div class="book-card">

                        <div class="d-flex">

                            <div class="book-image">

                                <i class="bi bi-book"></i>

                            </div>

                            <div class="book-info">

                                <div class="book-title">
                                    A Moreninha
                                </div>

                                <div class="book-author">
                                    Joaquim Manuel de Macedo
                                </div>

                                <span class="book-category">
                                    Romance
                                </span>

                                <br>

                                <button class="book-button">
                                    Ver detalhes
                                </button>

                            </div>

                        </div>

                    </div>

                </div>


            </div>

        </div>

    </div>

</main>



<!-- Bootstrap JS -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>