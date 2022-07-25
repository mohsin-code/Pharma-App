<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="assets/dist/js/bootstrap.min.js"></script>
    <script src="assets/dist/js/bootstrap.bundle.min.js"></script>
    <title>Pharmacy App</title>
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
                    <a class="nav-link" href="./medicines">Medicines</a>
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

    
    <!-- Carousel -->
        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                <img src="images/illustration.jpg" class="d-block w-100" alt="Illustration">
            </div>
            <div class="carousel-item">
                <img src="images/store.jpg" class="d-block w-100" alt="medicines">
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="images/medicines.jpg" class="d-block w-100" alt="Pharmacy">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    
    <main role="main" class="container">

        <!-- Cards -->
        <div class="row">
            @foreach($medicines as $medicine)
            <div class="col my-5">
                <div class="card" style="width: 18rem;">
                    <img src="images/flaygel.webp" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">{{$medicine->name}}</p>
                        <h4 style="color: green;" class="card-text">Rs {{$medicine->price}}</h4>
                        <button class="btn btn-primary">Buy</button>
                        <button class="btn btn-secondary">Add to Cart</button>
                    </div>
                </div>
            </div>
            @endforeach
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