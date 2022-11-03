<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>

    <link rel="stylesheet" href="http://localhost/laravel/ShoppingCart/resources/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <!-- header div starts here -->
    <div class="col-12">

        <marquee width="100%" direction="left" height="30px" style="background-color: #293241; color:white">
            <h6><b>Get 50% discount on all latest arrivals</b> </h6>
        </marquee>

        <div class="col-12 d-flex justify-content-center">
            <div class="col-11 inner-logo d-flex justify-content-between">
                <div class="logo-div col-5 float-start">
                    <h1>
                        <span class="aura">Aura</span>
                        <span class="bee">Bee</span>
                    </h1>
                    <h5><b>THE BIGGEST CHOICE OF THE WEB</b></h5>
                </div>
                <div class="col-7 user">
                    <div class="float-end mt-3">
                        <div class="dropdown">
                            <button>
                                <a href="http://localhost/laravel/ShoppingCart/public/userlogin"><i
                                        class="fas fa-user fa-2x user-logo"></i></a>
                            </button>
                        </div>
                        <button>
                            <a href="wishlist"><i class="fas fa-heart fa-2x user-logo"></i></a>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- header div ends here -->

        <!-- navigation starts here -->
        <div class="col-12 d-flex justify-content-center">
            <div class="col-10 d-flex justify-content-between align-items-center">
                <div class="col-5 float-start mt-3">
                    <ul class="navigation">
                        <a href="http://localhost/laravel/ShoppingCart/public/">
                            <li>Home</li>
                        </a>
                        <a href="MenCollection">
                            <li>Men</li>
                        </a>
                        <a href="WomenCollection">
                            <li>Women</li>
                        </a>
                        <a href="KidsCollection">
                            <li>Kids</li>
                        </a>
                        <a href="Contact">
                            <li>Contact Us</li>
                        </a>
                    </ul>
                </div>
                <div class="col-md-4 search float-end">
                    <div class="col-md-12 search-inner">
                        <input type="text" name="" placeholder="Search entire store here.." value=""
                            onChange="" />
                        <Link to="">
                        <button type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                        </Link>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- navigation ends here -->

    <!-- content starts here -->
    <div class="col-12">
        <a href="#" role="button" class="btn btn-outline-warning scrollup"><i
                class="fa-solid fa-up-long"></i></a>
        @yield('content')
    </div>
    <!-- content ends here -->

    {{-- products starts here --}}
    <div class="col-12 d-flex justify-content-center">
        <div class="col-10 d-flex ">
            <div class="col-2 productcategory">
                <p><b>Filter by category</b></p>
                @isset($categories)
                    <ul>
                        @foreach ($categories as $category)
                            <a href="http://localhost/laravel/ShoppingCart/public/{{ $category->categoryname }}">
                                <li class="pcul">{{ $category->categoryname }}</li>
                            </a>
                        @endforeach
                    </ul>
                @endisset
            </div>
            <div class="col-10 d-flex flex-wrap productdisplay justify-content-evenly pt-4 ">
                @isset($data)
                    @foreach ($data as $data)
                        <a href="http://localhost/laravel/ShoppingCart/public/{{ $data->category }}">
                            <div class="productmain mb-4">
                                <div class="productimage">
                                    <img src="http://localhost/laravel/ShoppingCart/public/Products/{{ $data->image }}"
                                        class="pimage" />
                                </div>
                                <div class="productinfo">
                                    <p style="font-size:16px;"><b>{{ $data->brand }}</b></p>
                                    <p style="color: #535766;">{{ $data->description }}</p>
                                    <p><b>Rs:{{ $data->price }}</b></p>
                                </div>
                                <div class="buynow ">
                                    <a href="Addtocart/{{ $data->id }}" class="btn btn-primary"><i
                                            class="fa-solid fa-cart-shopping"></i></a>
                                    <a href="Buynow/{{ $data->id }}" class="btn btn-primary">Buy Now</a>
                                </div>
                            </div>
                        </a>
                    @endforeach
                @endisset
            </div>
        </div>
    </div>
    </div>
    </div>
    {{-- products ends here here --}}

    <div class="col-12 footer-2"></div>

    <!-- footer starts here -->
    <div class="container-fluid footer d-flex align-items-center mt-5">
        <div class="col-md-12 footer-inner">
            <ul class="footer-navigation">
                <a href="http://localhost/laravel/ShoppingCart/public/">
                    <li>Home</li>
                </a>
                <a href="MenCollection">
                    <li>Men</li>
                </a>
                <a href="WomenCollection">
                    <li>Women</li>
                </a>
                <a href="KidsCollection">
                    <li>Kids</li>
                </a>
                <a href="Contact">
                    <li>Contact</li>
                </a>
            </ul>
            <p class="float-end"><b><i>Copyright@2022 AuraBee</i></b></p>
        </div>
    </div>
    <!-- footer ends here -->
</body>

</html>
