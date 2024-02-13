@extends('layout.navbar')


@section('content')

<div class="container">
    <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{ asset('assets/photos/pexels-pixabay-159711.jpg') }}" class="d-block w-100" height="500" alt="photo">
            <div class="carousel-caption d-none d-md-block">
            </div>
          </div>
          <div class="carousel-item">
            <img src="{{ asset('assets/photos/pexels-pixabay-159844.jpg') }}" class="d-block w-100" height="500" alt="photo">
            <div class="carousel-caption d-none d-md-block">
              <h3 class="text-primary fw-bold">Accurate education</h3>
              <p>Some representative placeholder content for the second slide.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="{{ asset('assets/photos/pexels-pixabay-289737.jpg') }}" class="d-block w-100" height="500" alt="photo">
            <div class="carousel-caption d-none d-md-block">
              <h3>Better placement</h3>
              <p>Some representative placeholder content for the third slide.</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
</div>

<div class="container-fluid">
    <div class="row mt-5">
        <div class="col-6">
                <img src="{{ asset('assets/photos/pexels-pixabay-289737.jpg') }}" class="img-fluid" alt="">
            </div>
            <div class="col-6 pt-5">
                <h3 class="text-danger fw-bold">It's All About <span class="text-primary">Education</span></h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt provident dolorem <br>error vero minus ipsam maiores. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quod, eligendi.</p>
            </div>
        </div>
    </div>
</div>

@endsection