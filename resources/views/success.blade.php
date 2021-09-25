@extends('layouts.master')

@section('title', 'Home')

@section('content')
    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/img/sale-1.jpg" aria-hidden="true" class="img-fluid carousel-image" alt="crousel image" />

                <div class="container">
                    <div class="carousel-caption text-start">
                        <h1>Example headline.</h1>
                        <p>
                            Some representative placeholder content for the first slide of
                            the carousel.
                        </p>
                        <p>
                            <a class="btn btn-lg btn-primary" href="#">Sign up today</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="/img/sale-2.jpg" aria-hidden="true" class="img-fluid carousel-image" alt="crousel image" />

                <div class="container">
                    <div class="carousel-caption">
                        <h1>Another example headline.</h1>
                        <p>
                            Some representative placeholder content for the second slide
                            of the carousel.
                        </p>
                        <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="/img/sale-3.jpg" aria-hidden="true" class="img-fluid carousel-image" alt="crousel image" />

                <div class="container">
                    <div class="carousel-caption text-end">
                        <h1>One more for good measure.</h1>
                        <p>
                            Some representative placeholder content for the third slide of
                            this carousel.
                        </p>
                        <p>
                            <a class="btn btn-lg btn-primary" href="#">Browse gallery</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- Marketing messaging and featurettes
      ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing py-4">
        <div class="d-flex justify-content-between mb-4">
            <h2>Baju Keren</h2>
            <button type="button" class="btn btn-primary">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill"
                    viewBox="0 0 16 16">
                    <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                    <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                </svg>
                <span>Lihat Semua</span>
            </button>
        </div>

        <div class="row row-cols gap-3">
            <div class="card col" style="width: 18rem">
                <img src="img/produk/baju-1.jpg" class="card-img-top" alt="baju-1-image" />
                <div class="card-body">
                    <h5 class="card-title">Baju Keren</h5>
                    <p class="card-text">$430.99</p>
                    <a href="./detail.html" class="btn btn-primary">Detail</a>
                </div>
            </div>

            <div class="card col" style="width: 18rem">
                <img src="img/produk/baju-2.jpg" class="card-img-top" alt="baju-2-image" />
                <div class="card-body">
                    <h5 class="card-title">Baju Keren</h5>
                    <p class="card-text">$430.99</p>
                    <a href="./detail.html" class="btn btn-primary">Detail</a>
                </div>
            </div>

            <div class="card col" style="width: 18rem">
                <img src="img/produk/baju-3.jpg" class="card-img-top" alt="baju-3-image" />
                <div class="card-body">
                    <h5 class="card-title">Baju Keren</h5>
                    <p class="card-text">$430.99</p>
                    <a href="./detail.html" class="btn btn-primary">Detail</a>
                </div>
            </div>

            <div class="card col" style="width: 18rem">
                <img src="img/produk/baju-4.jpg" class="card-img-top" alt="baju-4-image" />
                <div class="card-body">
                    <h5 class="card-title">Baju Keren</h5>
                    <p class="card-text">$430.99</p>
                    <a href="./detail.html" class="btn btn-primary">Detail</a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://khaalipaper.com/js/jquery-3.2.1.min.js"></script>

    <script type="text/javascript">
        $(window).on("load", function() {
            $("#myModal").modal("show");
        });
    </script>
@endsection
