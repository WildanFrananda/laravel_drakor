<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Landing Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
     <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary py-3" data-bs-theme="dark">
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample11" aria-controls="navbarsExample11" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse d-lg-flex" id="navbarsExample11">
                    <a class="navbar-brand col-lg-3 me-0" href="#"><h4>K-DramaCentral</h4></a>
                    <ul class="navbar-nav col-lg-6 justify-content-lg-center">
                        <li class="nav-item mx-0 mx-lg-1">
                            <a class="nav-link active py-3 px-0 px-lg-3 rounded" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item mx-0 mx-lg-1">
                            <a class="nav-link py-3 px-0 px-lg-3 rounded" href="#">Kdrama</a>
                        </li>
                        <li class="nav-item mx-0 mx-lg-1">
                            <a class="nav-link py-3 px-0 px-lg-3 rounded" href="#">Genres</a>
                        </li>
                        <li class="nav-item mx-0 mx-lg-1">
                            <a class="nav-link py-3 px-0 px-lg-3 rounded" href="#">Reviews</a>
                        </li>
                        <li class="nav-item mx-0 mx-lg-1">
                            <a class="nav-link py-3 px-0 px-lg-3 rounded" href="#">Countries</a>
                        </li>
                    </ul>
                <div class="d-lg-flex col-lg-3 justify-content-lg-end">
                    <a href="#" class="btn btn-danger">Login</a>
                </div>
                </div>
            </div>
        </nav>

        <div id="banner" class="banner">
            <div class="banner-img"></div>
            <div class="banner-caption">
                <div class="p-5 mb-4 bg-body-tertiary rounded-3">
                    <div class="container">
                        <div class="row">
                            <div class="container-fluid py-5">
                                <div class="col-md-8 col-md-offset-2 object-non-visible" data-animation-effect="fadeIn">
                                    <h1 class="display-5 fw-bold">Watch Drakor anywhere & anytime.</h1>
                                    <p class="col-md-8 fs-4">Nikmati kisah-kisah yang memikat didunia perdrakoran anda tanpa ada biaya!. Dapatkan rekomendasi terbaru dan pantau drama korea kesukaanmu hanya di K-dramaCentral.</p>
                                    <button class="btn btn-danger btn-lg" type="button">Daftar Sekarang!</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     </header>

     <main>
        <div class="section full mt-3 mb-3">
            <div class="section-title">
                <span class="left" style="size: 30px"><h4>Episod Baru</h4></span>
                <div class="album py-5 bg-body-tertiary">
                    <div class="container">
                        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                            @foreach ($movies as $movie)
                            <div class="col">
                                <div class="card shadow-sm">
                                    <img src="/admin/assets/img/{{$movie->poster}}">
                                    <div class="card-body">
                                        <h4 class="card-title">
                                            <a href="#">{{ $movie->title }}</a>
                                        </h4>
                                        <p class="card-text">Genre: {{ $movie->genre->name }}</p>
                                        <p class="card-text">Rating: {{ $movie->rating }} &#11088;</p>
                                        <p class="card-text">Country: {{ $movie->countries->name }}</p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <button type="button" class="btn btn-sm btn-outline-secondary">{{ $movie->countries->name }}</button>
                                                <button type="button" class="btn btn-sm btn-outline-secondary">{{ $movie->genre->name }}</button>
                                            </div>
                                            <small class="text-body-secondary">{{ $movie->rating }}/10</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section full mt-3 mb-3">
            <div class="section-title">
                <span class="left" style="size: 30px"><h4>Film Korea</h4></span>
                <div class="album py-5 bg-body-tertiary">
                    <div class="container">
                        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                            @foreach ($movies as $movie)
                            <div class="col">
                                <div class="card shadow-sm">
                                    <img src="/admin/assets/img/{{ $movie->poster }}">
                                    <div class="card-body">
                                        <h4 class="card-title">
                                            <a href="#">{{ $movie->title }}</a>
                                        </h4>
                                        <p class="card-text">Genre: {{ $movie->genre->name }}</p>
                                        <p class="card-text">Rating: {{ $movie->rating }} &#11088;</p>
                                        <p class="card-text">Country: {{ $movie->countries->name }}</p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <button type="button" class="btn btn-sm btn-outline-secondary">{{ $movie->countries->name }}</button>
                                                <button type="button" class="btn btn-sm btn-outline-secondary">{{ $movie->genre->name }}</button>
                                            </div>
                                            <small class="text-body-secondary">{{ $movie->rating }}/10</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
     </main>


     
     <div>
        <footer class="py-5 bg-dark">
            <div class="container">
              <p class="m-0 text-center text-white">
                Copyright &copy; Your Website 2023
              </p>
            </div>
        </footer>
     </div>
</body>
</html>