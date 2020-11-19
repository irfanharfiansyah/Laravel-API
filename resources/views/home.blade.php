<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body style="background-color: rgb(216, 255, 204)">
      {{-- navbar --}}
   <nav class="navbar navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand">Laravel-News</a>
            <form class="form-inline">
                @csrf
            <input class="form-control mr-sm-2" type="search" placeholder="Search" name="keyword" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>   
    </nav>  

<section class="content" style="padding-top: 70px">
    <div class="container">
        <h2 style="margin-bottom: 30px">Daftar Artikel</h2>
            @foreach($artikel as $a)
                <div class="card mb-5" style="width: 50rem;">
                    <img src="{{ $a->urlToImage}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">{{ $a->title}}</h5>
                      <p class="card-text">{{ $a->description}}</p>
                      <a href="{{ $a->url}}" class="btn btn-primary">Go somewhere</a>
                    </div>
                  </div>
            @endforeach
            </section>
    </div>
                
    
  </body>
</html>   