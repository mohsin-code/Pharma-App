<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('assets/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <script src="{{ asset('assets/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/dist/js/bootstrap.bundle.min.js') }}"></script>
    <title>{{$product->name}}</title>
</head>
<body>
    <!-- Navbar-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand px-3" href="index.html">Pharmacy</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.html">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="medicines.html">Medicines</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.html">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login.html">Login</a>
                </li>
            </ul>
        </div>
    </nav>
    <main class="container">
        <div class="row my-5">
            <div class="col-4">
                <img class="img-fluid" src="{{ asset('images/medicines/'.$product->slug.'.jpg') }}">
            </div>
            <div class="col mx-4 p-2">
                <h2 class="mt-5">{{$product->name}}</h2>
                <h5>{{$product->category}}</h5>
                <h1 style="color: #198754">Rs {{$product->price}}</h1>
                <p>{{$product->description}}</p>
                <button class="btn btn-success">Buy</button>
                <button class="btn btn-outline-success">Add to Cart</button>
            </div>
        </div>
        <div class="p-5 my-3">
            <h2>You may like...</h2>
            <!-- Cards -->
            <div class="row">
                @foreach ($mightAlsoLike as $product)
                <div class="col my-5">
                    <div class="card" style="width: 100%;">
                        <a href="{{ route('medicines.show', $product->slug) }}"><img src="{{ asset('images/medicines/'.$product->slug.'.jpg') }}" class="card-img-top" alt="..."></a>
                        <div class="card-body">
                            <a style='text-decoration:none; color:black' href="{{ route('medicines.show', $product->slug) }}">
                                <p class="card-text">{{$medicine->name}}</p>
                            </a>
                            <h4 style="color: green;" class="card-text">Rs 99</h4>
                            <button class="btn btn-success">Buy</button>
                            <button class="btn btn-outline-success">Add to Cart</button>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer style="background-color: black; color: white;"> 
        <div class="container pt-5">
            <div class="row">
                <div class="col">
                    <h3 class="my-3">Know Us</h3>
                    <p>About us</p>
                    <p>Contact</p>
                    <p>Become a Seller</p>
                </div>
                <div class="col">
                    <h3 class="my-3">Our Policy</h3>
                    <p>Editorial Policy</p>
                    <p>Terms and Conditions</p>
                    <p>FAQ</p>
                </div>
                <div class="col">
                    <h3 class="my-3">Connect</h3>
                    <p>Facebook</p>
                    <p>Twitter</p>
                    <p>LinkedIn</p>
                </div>
            </div>
            <div class="row mt-5" style="text-align: center;">
                <p>Copyright Reserved</p>
            </div>
        </div>
    </footer>

</body>
</html>