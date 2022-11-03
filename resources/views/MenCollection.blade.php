@extends('common')
@section('content')
    <!-- carousel starts here -->
    <div id="carouselExampleIndicators" class="carousel slide mt-3" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                aria-label="Slide 4"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4"
                aria-label="Slide 5"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5"
                aria-label="Slide 6"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <a href="#">
                    <img src="Men/slider/1.jpg" class="d-block w-100" alt="...">
                </a>
            </div>
            <div class="carousel-item">
                <a href="#">
                    <img src="Men/slider/2.jpg" class="d-block w-100" alt="...">
                </a>
            </div>
            <div class="carousel-item">
                <a href="#">
                    <img src="Men/slider/3.jpg" class="d-block w-100" alt="...">
                </a>
            </div>
            <div class="carousel-item">
                <a href="#">
                    <img src="Men/slider/4.jpg" class="d-block w-100" alt="...">
                </a>
            </div>
            <div class="carousel-item">
                <a href="#">
                    <img src="Men/slider/5.jpg" class="d-block w-100" alt="...">
                </a>
            </div>
            <div class="carousel-item">
                <a href="#">
                    <img src="Men/slider/6.jpg" class="d-block w-100" alt="...">
                </a>
            </div>
        </div>
    </div>
    <!-- carousel ends here -->

    <!-- Deals of the day starts here-->
    <div class="col-12 d-flex justify-content-center mt-5 mb-3">
        <div class="col-11 headings">
            <h3>Biggest Deals On Top Brands</h3>
        </div>
    </div>
    <div class="d-flex col-12 justify-content-evenly flex-wrap mt-4 mb-4">
        <div class="card">
            <a href="">
                <img src="Men/DealOfTheDay/1.jpg" class="card-img-top" alt="...">
            </a>
        </div>
        <div class="card">
            <a href="">
                <img src="Men/DealOfTheDay/2.jpg" class="card-img-top" alt="...">
            </a>
        </div>
        <div class="card">
            <a href="">
                <img src="Men/DealOfTheDay/3.jpg" class="card-img-top" alt="...">
            </a>
        </div>
        <div class="card">
            <a href="">
                <img src="Men/DealOfTheDay/4.jpg" class="card-img-top" alt="...">
            </a>
        </div>
    </div>

    <div class="d-flex col-12 justify-content-evenly flex-wrap mt-4 mb-4">
        <div class="card">
            <a href="">
                <img src="Men/DealOfTheDay/5.jpg" class="card-img-top" alt="...">
            </a>
        </div>
        <div class="card">
            <a href="">
                <img src="Men/DealOfTheDay/6.jpg" class="card-img-top" alt="...">
            </a>
        </div>
        <div class="card">
            <a href="">
                <img src="Men/DealOfTheDay/7.jpg" class="card-img-top" alt="...">
            </a>
        </div>
        <div class="card">
            <a href="">
                <img src="Men/DealOfTheDay/8.jpg" class="card-img-top" alt="...">
            </a>
        </div>
    </div>
    <!-- Deals of the day ends here -->

    <div class="col-12 d-flex justify-content-center mt-5 mb-3">
        <div class="col-11 headings">
            <h3>Categories To Bag</h3>
        </div>
    </div>
    <!-- categories starts here -->
    <div class="d-flex flex-wrap justify-content-evenly mt-5 mb-5">
        <div class="text-center">
            <a href="#">
                <img src="Men/Categories/1.jpg" alt="" class="categorymen">
            </a>
        </div>
        <div class="text-center">
            <a href="#">
                <img src="Men/Categories/2.jpg" alt="" class="categorymen">
            </a>
        </div>
        <div class="text-center">
            <a href="#">
                <img src="Men/Categories/3.jpg" alt="" class="categorymen">
            </a>
        </div>
        <div class="text-center">
            <a href="#">
                <img src="Men/Categories/4.jpg" alt="" class="categorymen">
            </a>
        </div>
        <div class="text-center">
            <a href="#">
                <img src="Men/Categories/5.jpg" alt="" class="categorymen">
            </a>
        </div>
        <div class="text-center">
            <a href="#">
                <img src="Men/Categories/6.jpg" alt="" class="categorymen">
            </a>
        </div>

    </div>
    <!-- categories ends here -->
@endsection
