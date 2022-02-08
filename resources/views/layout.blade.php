<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-dark text-white">
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 bg-dark text-white pb-3 mb-3 border-bottom">
        <h5 class="my-0 mr-md-auto font-weight-normal">ДПСЗ</h5>

        <nav class="my-2 my-md-0 mr-md-3 d-inline-flex mt-2 mt-md-0 ms-md-auto">
            <a class="me-2 p-2 text-white" href="/">Головна</a>
            <a class="me-2 p-2 text-white" href="/about">Про нас</a>
        </nav>
        <a class="btn btn-warning" href="/review">Відгуки</a>
    </div>
    <div class="container mt-5">
        @yield('main_content')
    </div>
</body>

</html>
