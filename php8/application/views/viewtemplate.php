<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Главная</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <div class=" navbar-collapse">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/">Главная</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/catalog">Каталог</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/basket">Корзина <?php if (BASKET::getCountBasket()) { echo '('.BASKET::getCountBasket().')';} ?></a>
                        </li>
                    </ul>
                    <?php if (auth::isauth()) { ?>
                        <ul class="navbar-nav ml-auto">
                            <?php if (auth::isadmin()) { ?>
                                <li class="nav-item"><a class="nav-link" href="/admin">Панель управления</a></li>
                            <?php } ?>
                        </ul>
                        <form action="/login/logout/" method="POST">
                            <input type="submit" value="Выйти" class="">
                        </form>
                    <?php } else { ?>
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item"><a class="nav-link" href="/login">Войти</a></li>
                            <li class="nav-item"><a class="nav-link" href="/registration">Регистрация</a></li>
                        </ul>
                    <?php } ?>

                </div>
            </div>
        </nav>
    </header>
    <main class=" my-3">

        <div class="container">
            <?php include 'application/views/'.$content_view; ?>
        </div>

    </main>
    <footer>
<pre>
        <?php
        /*
        echo '<br> session ';
        print_r($_SESSION);
        echo '<br> post ';
        print_r($_POST);
        echo '<br> get ';
        print_r($_GET);
        echo '<br> request ';
        print_r($_REQUEST);
        echo '<br>';
*/
        ?>
    </pre>
    </footer>
</body>
</html>