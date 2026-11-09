
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Biblioteca Virtual | SESI</title>

    <!-- Bootstrap -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

    <!-- Bootstrap Icons -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
        rel="stylesheet"
    >

    <style>
        body {
            background-color: #f5f5f5;
        }

        .imagem-biblioteca {
            width: 100%;
            height: 100%;
            min-height: 100vh;
            object-fit: cover;
        }

        .area-login {
            min-height: 100vh;
        }

        .cartao-login {
            max-width: 520px;
            border: none;
        }

        .logo-biblioteca {
            width: 52px;
            height: 52px;
            background-color: #dc3545;
            color: white;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 25px;
        }

        .form-control {
            border-radius: 10px;
        }

        .form-control:focus {
            border-color: #dc3545;
            box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.15);
        }

        .btn-entrar {
            border-radius: 10px;
        }

        .link-funcionario {
            color: #dc3545;
            font-weight: bold;
            text-decoration: none;
        }

        .link-funcionario:hover {
            text-decoration: underline;
        }

        @media (max-width: 991px) {
            .area-login {
                min-height: 100vh;
            }
        }
    </style>
</head>

<body>

    <div class="container-fluid p-0">
        <div class="row g-0 min-vh-100">

            <!-- Imagem lateral -->
            <div class="col-lg-6 d-none d-lg-block">
                <img
                    src="unnamed.png"
                    class="imagem-biblioteca"
                    alt="Ambiente da biblioteca"
                >
            </div>

            <!-- Área de login -->
            <div class="col-12 col-lg-6 d-flex justify-content-center align-items-center p-4 area-login">

                <div class="card cartao-login shadow-sm rounded-4 p-4 p-md-5 w-100">

                    <!-- Logo e nome -->
                    <div class="d-flex align-items-center mb-5">

                        <div class="logo-biblioteca me-3">
                            <i class="bi bi-book-fill"></i>
                        </div>

                        <div>
                            <h5 class="fw-bold mb-0">
                                Biblioteca Virtual
                            </h5>

                            <small class="text-danger">
                                SESI
                            </small>
                        </div>

                    </div>

                    <!-- Título -->
                    <h1 class="fw-bold fs-2 mb-2">
                        Bem-vindo à sua<br>
                        biblioteca!
                    </h1>

                    <p class="text-secondary mb-4">
                        Entre para continuar sua jornada de leitura.
                    </p>

                    <!-- Formulário apenas visual -->
                    <form id="formLogin">

                        <div class="mb-3">
                            <label for="email" class="form-label fw-semibold">
                                E-mail
                            </label>

                            <input
                                type="email"
                                id="email"
                                class="form-control p-3"
                                placeholder="Digite seu e-mail"
                                autocomplete="email"
                                required
                            >
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label fw-semibold">
                                Senha
                            </label>

                            <input
                                type="password"
                                id="password"
                                class="form-control p-3"
                                placeholder="Digite sua senha"
                                autocomplete="current-password"
                                required
                            >
                        </div>

                        <button
                            type="submit"
                            class="btn btn-danger btn-entrar w-100 py-3 fw-bold"
                        >
                            Entrar
                        </button>

                        <!-- Mensagem demonstrativa -->
                        <div
                            id="mensagem"
                            class="alert alert-info mt-3 d-none"
                            role="status"
                        >
                            Esta é uma tela demonstrativa.
                            O login ainda não está conectado ao sistema.
                        </div>

                    </form>

                    <!-- Acesso de funcionário -->
                    <p class="text-center text-secondary mt-4 mb-0">
                        É funcionário da biblioteca?

                        <a
                            href="#"
                            id="linkFuncionario"
                            class="link-funcionario"
                        >
                            Acesse a área de funcionário
                        </a>
                    </p>

                    <hr class="my-4">

                    <div class="text-center">
                        <small class="text-secondary">
                            Explore livros, autores e novas histórias.
                        </small>
                    </div>

                </div>

            </div>

        </div>
    </div>

    
</body>
</html>