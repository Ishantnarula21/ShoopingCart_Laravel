@extends('common')
@section('content')
    <!-- carousel starts here -->
    <div id="carouselExampleIndicators" class="carousel slider mt-3" data-bs-ride="carousel">
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
                <img src="HomePage/slider/1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="HomePage/slider/2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="HomePage/slider/3.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="HomePage/slider/4.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="HomePage/slider/5.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="HomePage/slider/6.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
    </div>
    <!-- carousel ends here -->

    <!-- Deals of the day starts here-->
    <div class="col-12 d-flex justify-content-center mt-5 mb-3">
        <div class="col-11 headings">
            <h3>Deals Of The Day</h3>
        </div>
    </div>
    <div class="d-flex col-12 justify-content-evenly flex-wrap mt-4 mb-4">
        <div class="card">
            <img src="HomePage/DealOfTheDay/1.jpg" class="card-img-top" alt="...">
        </div>
        <div class="card">
            <img src="HomePage/DealOfTheDay/2.jpg" class="card-img-top" alt="...">
        </div>
        <div class="card">
            <img src="HomePage/DealOfTheDay/3.jpg" class="card-img-top" alt="...">
        </div>
        <div class="card">
            <img src="HomePage/DealOfTheDay/4.jpg" class="card-img-top" alt="...">
        </div>
        <div class="card">
            <img src="HomePage/DealOfTheDay/5.jpg" class="card-img-top" alt="...">
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
                <img src="HomePage/Categories/Mobiles.jpeg" alt="" class="category">
            </a>
            <p class="mt-2"><b>Mobiles</b></p>
        </div>
        <div class="text-center">
            <a href="#">
                <img src="HomePage/Categories/shirts.jpeg" alt="" class="category">
            </a>
            <p class="mt-2"><b>Shirts</b></p>
        </div>
        <div class="text-center">
            <a href="#">
                <img src="HomePage/Categories/kurtas.jpeg" alt="" class="category">
            </a>
            <p class="mt-2"><b>Kurtas</b></p>
        </div>
        <div class="text-center">
            <a href="#">
                <img src="HomePage/Categories/winters.jpg" alt="" class="category">
            </a>
            <p class="mt-2"><b>Winters</b></p>
        </div>
        <div class="text-center">
            <a href="#">
                <img src="HomePage/Categories/footwear.jpeg" alt="" class="category">
            </a>
            <p class="mt-2"><b>Footwear</b></p>
        </div>
    </div>
    <!-- categories ends here -->
@endsection
