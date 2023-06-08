<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body class="bg-dark ">
    <div class="d-flex flex-column flex-md-row align-items-center p-3 p-md-4 mb-3">
        <h5 class="my-0 mr-md-auto font-weight-normal">ITBLOG</h5>
        <nav>
            <a class="p-2 btn text-white btn-outline-secondary" href="/">Главная</a>
            <a class="p-2 btn text-white btn-outline-secondary" href="/about">Про нас</a>
            <a class="p-2 btn text-white btn-outline-secondary" href="/login">Войти в систему</a>
            <a class="p-2 btn text-white btn-outline-secondary" href="/registration">Регистрация</a>
            <a class="p-2 btn text-white btn-outline-secondary" href="/form">Отзывы</a>
        </nav>


    </div>
    @yield("main_content")

</body>
</html>