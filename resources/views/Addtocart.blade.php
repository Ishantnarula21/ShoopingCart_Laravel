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
                            <a href="#"><i class="fas fa-heart fa-2x user-logo"></i></a>
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
    <div class="col-12 d-flex justify-content-center mt-5">
        <div class="col-10 d-flex flex-wrap">
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
            {{-- add to cart starts here --}}
            <div class="col-10  productdisplay pt-4">
                @foreach ($data as $data)
                    <div class="col-12 atc d-flex">
                        <div class="col-8 d-flex pinfo">
                            <div class=" mb-4 col-3">
                                <div class="atcimagediv">
                                    <img src="http://localhost/laravel/ShoppingCart/public/Products/{{ $data->image }}"
                                        class="buynowimage mt-2 ms-2" />
                                </div>
                            </div>
                            <div class="pricing col-6 mt-4">
                                <div class="productinfo">
                                    <p style="font-size:16px;"><b>{{ $data->brand }}</b></p>
                                    <p style="color: #535766;">{{ $data->description }}</p>
                                    <form method="POST"
                                        action="/laravel/ShoppingCart/public/finalcart/{{ $data->id }}">
                                        @csrf
                                        <p><b>Rs:{{ $data->price }}</b></p>
                                        <p><b>Quantity: <input type="text" name="quantity"></b></p>
                                        @if (session()->has('user_session'))
                                            <input type="submit" value="Add to cart">
                                            <a href="Checkout/{{ $data->id }}"
                                                class="btn btn-outline-success mt-2">Checkout</a>
                                        @else
                                            <form>
                                                <a href="userlogin" class="btn btn-outline-success mt-2">Login first</a>
                                        @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="m-3 lts d-flex">
                        <div class="col-2">
                            <img src="http://localhost/laravel/ShoppingCart/public/images/products-blurred.jpg"
                                alt="no image found">
                        </div>
                        <div class="col-10">
                            <p class="mt-3 ms-2"><b>Login to see the items from your existing bag and wishlist<a
                                        href="http://localhost/laravel/ShoppingCart/public/userlogin"
                                        class="lbn ms-2"><u>login</u></a></b></p>
                        </div>
                    </div>
                    {{-- suggestions starts here --}}
                    <div class="m-3 col-12">
                        <p class="mt-2"><b>You may also like</b></p>
                        <div class="col-12 d-flex flex-wrap productdisplay justify-content-evenly pt-4 ">
                            @foreach ($random as $data)
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
                                            <div>
                                                <a href="http://localhost/laravel/ShoppingCart/public/Addtocart/{{ $data->id }}"
                                                    class="btn btn-primary atca">Add to
                                                    cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    </div>
                    {{-- suggestions ends here --}}
                @endforeach
            </div>
            {{-- add to cart ends here --}}
        </div>
    </div>
    </div>
    </div>
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
