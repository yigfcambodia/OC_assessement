<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Navbar</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <?php include 'connect.php'; ?>
    <!-- Navbar and Hero Section -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Logo</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#how-it-works">How It Works</a></li>
                    <li class="nav-item"><a class="nav-link" href="#rental-details">Rental Details</a></li>
                    <li class="nav-item"><a class="nav-link" href="#why-choose-us">Why Choose Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="#testimonial">Testimonials</a></li>
                    <li class="nav-item"><a class="nav-link" href="#register">Register</a></li>
                </ul>
                <a class="btn btn-primary" href="#login">Log In</a>
            </div>
        </div>
    </nav>
    <div class="container mt-5 d-flex align-items-center">
        <div style="flex: 1;">
            <h1>Fast and Easy Way to Rent a Car</h1>
            <p>Our car rental online booking system is designed to meet the specific needs of car rental business owners. This easy-to-use car rental software will let you manage.</p>
            <a class="btn btn-outline-primary" href="#booking">Book Now</a>
        </div>
        <div style="flex: 1; text-align: center;">
            <img src="car.jfif" alt="Car" style="max-width: 100%;">
        </div>
    </div>
    <div style="background-color: gray;">
        <div>
            <h2 style="text-align: center; margin-top: 100px;">How it Works</h2>
            <p style="text-align: center;">A high-performing web-based car rental system for any rent-a-car company and website</p>
        </div>
        <div class="container text-center">
            <div class="row mt-4">
                <div class="col-md-4">
                    <img src="icons8-location-50.png" alt="">
                    <h4>Choose Location</h4>
                    <p>Aliquam erat volutpat. Integer malesuada turpis id fringilla suscipit. Maecenas ultrices, orci vitae convallis mattis.</p>
                </div>
                <div class="col-md-4">
                    <img src="icons8-data-quality-48.png" alt="">
                    <h4>Pick-up Date</h4>
                    <p>Aliquam erat volutpat. Integer malesuada turpis id fringilla suscipit. Maecenas ultrices, orci vitae convallis mattis.</p>
                </div>
                <div class="col-md-4">
                    <img src="icons8-car-40.png" alt="">
                    <h4>Book Your Car</h4>
                    <p>Aliquam erat volutpat. Integer malesuada turpis id fringilla suscipit. Maecenas ultrices, orci vitae convallis mattis.</p>
                </div>
            </div>
        </div>
    </div>
    <div style="background-color: aqua;">
        <div style="margin-top: 100px; background-color: aqua;">
            <div style="text-align: center;">
                <h2 class="text-center">Most popular car rental deals</h2>
                <p class="text-center">A high-performing web-based car rental system for any rent-a-car company and website</p>
            </div>
            <div class="container mt-5">
                <div class="row">
                    <?php
                    $result = $conn->query("SELECT * FROM cars");
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo '
                            <div class="col-md-4 mb-4">
                                <div class="card">
                                    <img src="' . $row["image_url"] . '" class="card-img-top" alt="' . $row["name"] . '">
                                    <div class="card-body">
                                        <h5 class="card-title">' . $row["name"] . '</h5>
                                    </div>
                                </div>
                            </div>';
                        }
                    } else {
                        echo "0 results";
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <footer class="bg-dark text-white pt-5 pb-4">
            <div class="container text-md-left">
                <div class="row text-md-left">
                    <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                        <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Company Name</h5>
                        <p>Here you can use rows and columns to organize your footer content. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                        <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Quick Links</h5>
                        <p><a href="#" class="text-white" style="text-decoration: none;">Home</a></p>
                        <p><a href="#" class="text-white" style="text-decoration: none;">About</a></p>
                        <p><a href="#" class="text-white" style="text-decoration: none;">Services</a></p>
                        <p><a href="#" class="text-white" style="text-decoration: none;">Contact</a></p>
                    </div>
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                        <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Contact</h5>
                        <p><i class="fas fa-home mr-3"></i> 123 Street, City, State</p>
                        <p><i class="fas fa-envelope mr-3"></i> info@example.com</p>
                        <p><i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
                        <p><i class="fas fa-print mr-3"></i> + 01 234 567 89</p>
                    </div>
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                        <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Follow Us</h5>
                        <a href="#" class="text-white" style="text-decoration: none;"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-white" style="text-decoration: none;"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-white" style="text-decoration: none;"><i class="fab fa-google-plus-g"></i></a>
                        <a href="#" class="text-white" style="text-decoration: none;"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" class="text-white" style="text-decoration: none;"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <hr class="mb-4">
                <div class="row align-items-center">
                    <div class="col-md-7 col-lg-8">
                        <p class="text-center text-md-left">© 2024 Company Name. All rights reserved.</p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
