<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="assets/dist/js/bootstrap.min.js"></script>
    <script src="assets/dist/js/bootstrap.bundle.min.js"></script>
    <title>Products</title>
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
    <main class="container row">
        <!--List Group-->
        <div class="col-3 mx-2 my-5">
            <ul class="list-group">
                <li class="list-group-item active">Surgical</li>
                <li class="list-group-item">Pills</li>
                <li class="list-group-item">Syrups</li>
                <li class="list-group-item">Hygiene</li>
                <li class="list-group-item">Herbal</li>
            </ul>
        </div>

        <!-- Cards -->
        <div class="col">
            <input type="text" class="mt-5 form-control" id="search" placeholder="Search...">
            <div class="row">
                <div class="col my-5">
                    <div class="card" style="width: 14rem;">
                        <img src="images/flaygel.webp" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">FlayGel</p>
                            <h4 style="color: green;" class="card-text">Rs 99</h4>
                            <button class="btn btn-primary">Buy</button>
                            <button class="btn btn-secondary">Add to Cart</button>
                        </div>
                    </div>
                </div>
                <div class="col my-5">
                    <div class="card" style="width: 14rem;">
                        <img src="images/panadol.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Panadol</p>
                            <h4 style="color: green;" class="card-text">Rs 299</h4>
                            <button class="btn btn-primary">Buy</button>
                            <button class="btn btn-secondary">Add to Cart</button>
                        </div>
                    </div>
                </div>
                <div class="col my-5">
                    <div class="card" style="width: 14rem;">
                        <img src="images/SurbexZ.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">SurbexZ</p>
                            <h4 style="color: green;" class="card-text">Rs 499</h4>
                            <button class="btn btn-primary">Buy</button>
                            <button class="btn btn-secondary">Add to Cart</button>
                        </div>
                    </div>
                </div>
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