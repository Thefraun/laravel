@extends('layouts.master') @section('content')
<main role="main">
    <div class="container mt-3">
        <div class="row justify-content-center">
        <div class="col-lg-7">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                @foreach ($games->take(3) as $game)
                @if ($loop->first)
                <div class="carousel-item active">
                    <div class="card">
                        @foreach ($game->images->take(1) as $image)
                        <img src="/storage/{{ $image->path }}" alt="{{ $game->name }}" class="card-img-top">
                        @endforeach
                        <h4 class="card-title text-center" style="color:black">
                            {{ $game->title }}
                        </h4>
                    </div>
                </div>
                @else
                <div class="carousel-item">
                <div class="card">
                    @foreach ($game->images->take(1) as $image)
                        <img src="/storage/{{ $image->path }}" alt="{{ $game->name }}" class="card-img-top">
                        @endforeach
                        <h4 class="card-title text-center" style="color:black">
                            {{ $game->title }}
                        </h4>
                    </div>
                </div>
                @endif
                @endforeach
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
        </div>
    </div>
</div>
    </div>
    <div class="container mt-5">
      <h2>Welcome To thefraun.com</h2>
      <p>
          Hello fellow humans, you've stumbled upon a game reviewing website. This is a site completely
        dedicated to opinions, so yell away in the comments! This a hobby, so do not expect things all
        the time, but since you're here you likely know me. I review many new and many relativly old
        games. This site is, and will be for a while under development. So enjoy yourselves, and keep the
        shouting at me to a minimum. 
      </p>
    </div>
    <!-- FOOTER -->
    <footer class="container">
        <p class="float-right"><a href="#">Back to top</a></p>
        <p>&copy; 2017-2018 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
    </footer>
</main>
@endsection