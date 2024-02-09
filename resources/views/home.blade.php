<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Football Teams</title>
    {{-- BOOTSTRAP --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
</head>

<body class="bg-dark text-white">
    <header>
        <h1 class="text-center text-uppercase fw-bolder pt-3">Football Leagues</h1>
    </header>
    <main>
        <div class="container py-5">
            <div class="row d-flex justify-content-center">
                <div class="col-4">
                    <div class="py-3 d-flex flex-column align-items-center border border-light border-4">
                        <h1 class="fw-bolder">Serie A</h1>
                        <img src="https://www.fifplay.com/img/public/serie-a-logo.png" alt="serieA"
                            class="logoita my-3">
                        <div class="my-3">
                            <a href="/italian_league" class="btn btn-primary">SEARCH</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row py-3 d-flex justify-content-center">
                <div class="col-4">
                    <div class="py-3 d-flex flex-column align-items-center border border-light border-4">
                        <h1 class="fw-bolder">Premier League</h1>
                        <img src="https://1.bp.blogspot.com/-GsXX3p7KkbI/YLUwmAwbxoI/AAAAAAAAUbE/d0PVC3Jj09A9VGhXeYtA7Wd2IFJqwZMMgCLcBGAsYHQ/w1200-h630-p-k-no-nu/Premier%2BLeague.png"
                            alt="logoeng" class="logoeng my-3">
                        <div class="my-3">
                            <a href="/england_league" class="btn btn-primary">SEARCH</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>
