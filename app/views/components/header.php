<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title ?? "Blog" ?></title>
    <base href="<?= PATH ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="public/assets/main.css">
</head>

<body>
    <div class="wrapper">
        <header class="header">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container-fluid container">
                    <a class="navbar-brand" href="#">Блог</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="/">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contacts">Contacts</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="post/create">New post</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="regictration">Register</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="login">Login</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>