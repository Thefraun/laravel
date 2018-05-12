@extends('layouts.master') @section('content')
<main role="main">
    <div class="container mt-3">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="first-slide" src="http://via.placeholder.com/1100x350" alt="First slide">
                    <div class="container">
                        Game 1
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="second-slide" src="http://via.placeholder.com/1100x350" alt="Second slide">
                    <div class="container">
                        Game 2
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="third-slide" src="http://via.placeholder.com/1100x350" alt="Third slide">
                    <div class="container">
                        Game 3
                    </div>
                </div>
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
    <div class="container mt-5">
      <h2>Welcome To The thefraun.com</h2>
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