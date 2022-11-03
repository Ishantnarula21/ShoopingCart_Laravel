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
    <div class="d-flex justify-content-between">
        <div class="col-3">
            <h1>Cart</h1>
        </div>
        <div class="col-3">
            <a href="http://localhost/laravel/ShoppingCart/public/" class="btn btn-warning float-end m-2">Home</a>
        </div>
    </div>
    <table border="1" width="80%">
        <tr>
            <th>image</th>
            <th>brand</th>
            <th>description</th>
            <th>quanity</th>
            <th>Remove</th>
        </tr>
        @foreach ($data as $data)
            <tr>
                <td><img src="Products/{{ $data->image }}" alt="" style="height: 100px;width:80px;"></td>
                <td>{{ $data->brand }}</td>
                <td>{{ $data->description }}</td>
                <td>{{ $data->quantity }}</td>
                <td><a href="Remove/{{ $data->id }}">Remove</a></td>
            </tr>
        @endforeach
    </table>
</body>

</html>
