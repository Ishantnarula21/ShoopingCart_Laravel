@if ($errors->any())
    <h4 style="color:red">{{ $errors->first() }}</h4>
@endif
@if (session()->has('message'))
    <h4 style="color:red">{{ session()->get('message') }}</h4>
@endif
@if (session()->has('user_session'))
    <?php
    session()->flush();
    ?>
@endif
<html>

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
                                <a href="userlogin"><i class="fas fa-user fa-2x user-logo"></i></a>
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
        @if (session()->has('user_session'))
            Login successfull
        @else
            <div class="col-12 d-flex justify-content-center mt-5">
                <div class="col-4">
                    <div class="col-12 text-center">
                        <h3>Login</h3>
                    </div>
                    <form action={{ url('sessionform') }} method="post">
                        {{ csrf_field() }}
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" name="email">
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    <p>New to Aura bee? <a href="register">Register now</a></p>
                </div>
            </div>
        @endif
</body>

</html>
