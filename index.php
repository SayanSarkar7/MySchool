<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MySchool</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- Start Navigation -->
    <nav class="navbar navbar-expand-sm navbar-dark ps-3 fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">MySchool</a>
            <span class="navbar-text">Learn and Grow</span>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <ul class="navbar-nav custom-nav ps-5">
                    <li class="nav-item"><a href="index.php" class="nav-link custom-nav-item">Home</a></li>
                    <li class="nav-item"><a href="#" class="nav-link custom-nav-item">Courses</a></li>
                    <li class="nav-item"><a href="#" class="nav-link custom-nav-item">Payment Status</a></li>
                    <li class="nav-item"><a href="#" class="nav-link custom-nav-item">My Profile</a></li>
                    <li class="nav-item"><a href="#" class="nav-link custom-nav-item">Logout</a></li>
                    <li class="nav-item"><a href="#" class="nav-link custom-nav-item">Login</a></li>
                    <li class="nav-item"><a href="#" class="nav-link custom-nav-item">SignUp</a></li>
                    <li class="nav-item"><a href="#" class="nav-link custom-nav-item">Feedback</a></li>
                    <li class="nav-item"><a href="#" class="nav-link custom-nav-item">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>





    <!-- End Navigation -->


    <!-- Start Video Background -->
    <div class="container-fluid remove-vid-marg">
        <div class="vid-parent">
            <video playsinline autoplay loop muted class="video-home">
                <source src="video/banvid.mp4" type="">
            </video>
            <div class="vid-overlay">
            </div>
        </div>
        <div class="vid-content">
            <h1 class="my-content mb-3">Welcome To MySchool</h1>
            <small class="my-content d-block mb-3">Learn and Grow</small>
            <a href="#" class="btn btn-danger">Get Started</a>
        </div>
    </div>

    <!-- End Video Background -->


    <!-- Start Text Banner -->
    <div class="container-fluid bg-danger txt-banner">
        <div class="row bottom-banner">
            <div class="col-sm">
                <h5><i class="fas fa-book-open mr-3"></i>
                    100+ Online Courses</h5>
            </div>
            <div class="col-sm">
                <h5><i class="fas fa-users mr-3"></i>
                    Expert Instructors</h5>
            </div>
            <div class="col-sm">
                <h5><i class="fas fa-keyboard mr-3"></i>
                    Lifetime Access</h5>
            </div>
            <div class="col-sm">
                <h5><i class="fas fa-indian-rupee-sign mr-3"></i>
                    Money Back Gurantee*</h5>
            </div>
        </div>
    </div>


    <!-- End Text Banner -->





    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/all.min.js"></script>
</body>

</html>