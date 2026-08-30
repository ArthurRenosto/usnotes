<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>DevBlog</title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

</head>

<body class="bg-light">


<!-- NAVBAR -->

<nav class="navbar navbar-expand-lg bg-white border-bottom">

    <div class="container">

        <a class="navbar-brand fw-bold fs-4" href="#">
            DevBlog
        </a>

        <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbar"
        >
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbar">

            <ul class="navbar-nav ms-auto">

                <li class="nav-item">
                    <a class="nav-link active" href="#">
                        Início
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">
                        Programação
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">
                        Segurança
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">
                        Sobre
                    </a>
                </li>

            </ul>

        </div>

    </div>

</nav>


<!-- HERO -->

<section class="bg-dark text-white py-5">

    <div class="container py-4">

        <div class="row align-items-center">

            <div class="col-lg-8">

                <span class="badge text-bg-primary mb-3">
                    DESENVOLVIMENTO WEB
                </span>

                <h1 class="display-4 fw-bold">
                    Aprenda tecnologia
                    de forma simples.
                </h1>

                <p class="lead text-white-50 mt-3">
                    Tutoriais, programação, segurança e desenvolvimento
                    web para quem quer evoluir suas habilidades.
                </p>

                <div class="mt-4">

                    <a href="#" class="btn btn-primary btn-lg me-2">
                        Ver artigos
                    </a>

                    <a href="#" class="btn btn-outline-light btn-lg">
                        Sobre o blog
                    </a>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- POSTS -->

<main class="container py-5">

    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>

            <h2 class="fw-bold mb-1">
                Artigos recentes
            </h2>

            <p class="text-secondary mb-0">
                Conteúdo novo sobre tecnologia.
            </p>

        </div>

        <a href="#" class="btn btn-outline-primary">
            Ver todos
        </a>

    </div>


    <div class="row g-4">


        <!-- POST 1 -->

        <div class="col-md-6 col-lg-4">

            <article class="card border-0 shadow-sm h-100">

                <div class="card-body p-4">

                    <span class="badge text-bg-primary mb-3">
                        PHP
                    </span>

                    <h3 class="card-title fw-bold">
                        Como começar com PHP
                    </h3>

                    <p class="card-text text-secondary">
                        Aprenda os conceitos fundamentais de PHP
                        e comece a criar aplicações web.
                    </p>

                    <div class="d-flex justify-content-between
                                align-items-center mt-4">

                        <small class="text-secondary">
                            30 Ago 2026
                        </small>

                        <a href="#" class="btn btn-sm btn-primary">
                            Ler artigo
                        </a>

                    </div>

                </div>

            </article>

        </div>


        <!-- POST 2 -->

        <div class="col-md-6 col-lg-4">

            <article class="card border-0 shadow-sm h-100">

                <div class="card-body p-4">

                    <span class="badge text-bg-success mb-3">
                        DATABASE
                    </span>

                    <h3 class="card-title fw-bold">
                        MySQL e MariaDB
                    </h3>

                    <p class="card-text text-secondary">
                        Entenda como bancos de dados funcionam
                        e como utilizá-los em aplicações PHP.
                    </p>

                    <div class="d-flex justify-content-between
                                align-items-center mt-4">

                        <small class="text-secondary">
                            28 Ago 2026
                        </small>

                        <a href="#" class="btn btn-sm btn-success">
                            Ler artigo
                        </a>

                    </div>

                </div>

            </article>

        </div>


        <!-- POST 3 -->

        <div class="col-md-6 col-lg-4">

            <article class="card border-0 shadow-sm h-100">

                <div class="card-body p-4">

                    <span class="badge text-bg-danger mb-3">
                        SECURITY
                    </span>

                    <h3 class="card-title fw-bold">
                        Introdução ao Pentest Web
                    </h3>

                    <p class="card-text text-secondary">
                        Conheça conceitos importantes de segurança
                        em aplicações web.
                    </p>

                    <div class="d-flex justify-content-between
                                align-items-center mt-4">

                        <small class="text-secondary">
                            25 Ago 2026
                        </small>

                        <a href="#" class="btn btn-sm btn-danger">
                            Ler artigo
                        </a>

                    </div>

                </div>

            </article>

        </div>


        <!-- POST 4 -->

        <div class="col-md-6 col-lg-4">

            <article class="card border-0 shadow-sm h-100">

                <div class="card-body p-4">

                    <span class="badge text-bg-warning mb-3">
                        HTML
                    </span>

                    <h3 class="card-title fw-bold">
                        Estrutura semântica do HTML
                    </h3>

                    <p class="card-text text-secondary">
                        Entenda como utilizar article, section,
                        header, main e outras tags.
                    </p>

                    <div class="d-flex justify-content-between
                                align-items-center mt-4">

                        <small class="text-secondary">
                            22 Ago 2026
                        </small>

                        <a href="#" class="btn btn-sm btn-warning">
                            Ler artigo
                        </a>

                    </div>

                </div>

            </article>

        </div>


        <!-- POST 5 -->

        <div class="col-md-6 col-lg-4">

            <article class="card border-0 shadow-sm h-100">

                <div class="card-body p-4">

                    <span class="badge text-bg-info mb-3">
                        CSS
                    </span>

                    <h3 class="card-title fw-bold">
                        Flexbox na prática
                    </h3>

                    <p class="card-text text-secondary">
                        Aprenda como organizar elementos utilizando
                        Flexbox.
                    </p>

                    <div class="d-flex justify-content-between
                                align-items-center mt-4">

                        <small class="text-secondary">
                            20 Ago 2026
                        </small>

                        <a href="#" class="btn btn-sm btn-info">
                            Ler artigo
                        </a>

                    </div>

                </div>

            </article>

        </div>


        <!-- POST 6 -->

        <div class="col-md-6 col-lg-4">

            <article class="card border-0 shadow-sm h-100">

                <div class="card-body p-4">

                    <span class="badge text-bg-dark mb-3">
                        LINUX
                    </span>

                    <h3 class="card-title fw-bold">
                        Começando no Linux
                    </h3>

                    <p class="card-text text-secondary">
                        Comandos essenciais e conceitos importantes
                        para quem está começando.
                    </p>

                    <div class="d-flex justify-content-between
                                align-items-center mt-4">

                        <small class="text-secondary">
                            18 Ago 2026
                        </small>

                        <a href="#" class="btn btn-sm btn-dark">
                            Ler artigo
                        </a>

                    </div>

                </div>

            </article>

        </div>


    </div>

</main>


<!-- NEWSLETTER -->

<section class="bg-white border-top border-bottom">

    <div class="container py-5">

        <div class="row justify-content-center text-center">

            <div class="col-lg-7">

                <h2 class="fw-bold">
                    Fique por dentro
                </h2>

                <p class="text-secondary">
                    Receba novos artigos e conteúdos sobre tecnologia.
                </p>

                <div class="input-group mt-4">

                    <input
                        type="email"
                        class="form-control form-control-lg"
                        placeholder="Seu e-mail"
                    >

                    <button class="btn btn-primary">
                        Inscrever
                    </button>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- FOOTER -->

<footer class="bg-dark text-white">

    <div class="container py-5">

        <div class="row">

            <div class="col-md-6">

                <h4 class="fw-bold">
                    DevBlog
                </h4>

                <p class="text-white-50">
                    Conteúdo sobre programação,
                    tecnologia e segurança.
                </p>

            </div>


            <div class="col-md-6 text-md-end">

                <a href="#" class="text-white text-decoration-none me-3">
                    GitHub
                </a>

                <a href="#" class="text-white text-decoration-none">
                    Contato
                </a>

            </div>

        </div>

        <hr>

        <p class="text-center text-white-50 mb-0">
            © 2026 DevBlog
        </p>

    </div>

</footer>


<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js">
</script>

</body>
</html>
