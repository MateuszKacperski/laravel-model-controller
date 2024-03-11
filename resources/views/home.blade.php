<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movies</title>
    @vite('resources/js/app.js')
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <ul class="nav justify-content-center">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Movie</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" aria-disabled="true">About</a>
            </li>
          </ul>
      </nav>
      <div class="container my-4">
        <div class="row">
            @foreach ($movies as $movie)
            <div class="col">
                <div class="card my-4">
                    <div class="card-body">
                      <h5 class="card-title">{{ $movie->title }}</h5>
                      <h6 class="card-subtitle mb-2 text-body-secondary">{{ $movie->original_title }}</h6>
                      <p><strong>Nationality:</strong> {{ $movie->nationality }}</p>
                      <p><strong>Date:</strong> {{ $movie->date }}</p>
                      <p><strong>Vote:</strong> {{ $movie->vote }}</p>
                    </div>
                  </div>
            </div>
            @endforeach
        </div>
      </div>
      <footer>
            <div class="copyright text-center bg-info p-5">
                <p>@  Movies Boolean S.p.a.</p>
            </div>
    </footer>         
</body>
</html>

