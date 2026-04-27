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


    <!-- Start Most Popular Course -->
    <div class="container mt-5">
        <h1 class="text-center">Popular Course</h1>
        <!-- Start Most Popular Course 1st Card Deck -->
        <div class="card-deck mt-4">
            <a href="#" class="btn" style="text-align:left;padding:0px;margin:0px;">
                <div class="card">
                    <img src="image/courseimg/guitar.jpg" alt="Guitar" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">
                            Learn Guitar Easy Way
                        </h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe quae corporis illo a quibusdam delectus ad consequatur quasi fugit, commodi incidunt ducimus, ut quas laudantium quod quis enim similique voluptas.</p>
                    </div>
                    <div class="card-footer">
                        <p class="card-text d-inline">
                            <span class="font-weight-bolder">
                                Price: &#8377 200
                            </span>
                            <small><del>&#8377 2000</del></small>
                        </p>
                        <a href="#" class="btn btn-primary text-white font-weight-boalder float-right m-2">Enroll</a>
                    </div>
                </div>
            </a>
        </div>
        <!-- End Most Popular Course 1st Card Deck -->
        <!-- Start Most Popular Course 2nd Card Deck -->
        <div class="card-deck mt-4">
            <a href="#" class="btn" style="text-align:left;padding:0px;margin:0px;">
                <div class="card">
                    <img src="image/courseimg/python.png" alt="Python" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">
                            Learn Python
                        </h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe quae corporis illo a quibusdam delectus ad consequatur quasi fugit, commodi incidunt ducimus, ut quas laudantium quod quis enim similique voluptas.</p>
                    </div>
                    <div class="card-footer">
                        <p class="card-text d-inline">
                            <span class="font-weight-bolder">
                                Price: &#8377 300
                            </span>
                            <small><del>&#8377 3000</del></small>
                        </p>
                        <a href="#" class="btn btn-primary text-white font-weight-boalder float-right m-2">Enroll</a>
                    </div>
                </div>
            </a>
        </div>
        <!-- End Most Popular Course 2nd Card Deck -->
        <div class="text-center m-2">
            <a href="#" class="btn btn-danger btn-sm">View All Courses</a>
        </div>
    </div>

    <!-- End Most Popular Course -->

    <!-- Start Contact Us -->
    <div class="container mt-4" id="Contact">
        <h2 class="text-center mb-4">Contact Us</h2>
        <div class="row">
            <div class="col-md-8">
                <form action="" method="post">
                    <input type="text" name="name" placeholder="Name" class="form-control"><br>
                    <input type="text" name="subject" placeholder="Subject" class="form-control"><br>
                    <input type="text" name="email" placeholder="Email" class="form-control"><br>
                    <textarea name="message" class="form-control" placeholder="How Can We Help You?" style="height:150px;" id=""></textarea><br>
                    <input type="submit" value="Semd" name="submit" class="btn btn-primary"><br><br>
                </form>
            </div>
            <div class="col-md-4 stripe text-white text-center">
                <h4>MySchool</h4>
                <p>MySchool, Near Khardah Police Station, Kolkata <br>
                    West Bengal <br>
                    phone-+9100000000 <br>
                </p>

            </div>
        </div>

    </div>
    <!-- End Contact Us -->

    <!-- Start Social Follow -->

    <div class="container-fluid bg-danger">
        <div class="row text-white text-center p-1">
            <div class="col-sm">
                <a href="#" class="text-white social-hover"><i class="fab fa-facebook-f"></i>Facebook</a>
            </div>


            <div class="col-sm">
                <a href="#" class="text-white social-hover"><i class="fab fa-twitter"></i>Twitter</a>
            </div>

            <div class="col-sm">
                <a href="#" class="text-white social-hover"><i class="fab fa-whatsapp"></i>WhatsApp</a>
            </div>
            <div class="col-sm">
                <a href="#" class="text-white social-hover"><i class="fab fa-instagram"></i>Instagram</a>
            </div>
        </div>
    </div>

    <!-- start about us section -->

    <div class="container-fluid p-4" style="background-color:#E9ECEF">
        <div class="container-fluid p-4" style="background-color:#E9ECEF">
            <div class="row text-center">
                <div class="col-sm">
                    <h5>About Us</h5>
                    <p>
                        MySchool provides universal access to the world's best education, partnering
                        with top universities and organizations to offer courses online.
                    </p>
                </div>
                <div class="col-sm">
                    <h5>Category</h5>
                    <a href="#" class="text-dark">Web Development</a><br>
                    <a href="#" class="text-dark">Web Designing</a><br>
                    <a href="#" class="text-dark">Android App Dev</a><br>
                    <a href="#" class="text-dark">iOS Development</a><br>
                    <a href="#" class="text-dark">Data Analysis</a><br>
                    <a href="#" class="text-dark">Data Analysis</a><br>
                </div>
                <div class="col-sm">
                    <h5>Contact Us</h5>
                    <p>MySchool Private Limited <br> Near Police Station, <br> kolkata-700001</p>
                </div>
            </div>


        </div>

    </div>

    <!-- start footer -->
    <footer class="container-fluid bg-dark text-center p-2">
        <small class="text-white">
            Copyright &copy; 2026 || Made With ❤️ by Sayan Sarkar || Admin Login
        </small>
    </footer>







    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/all.min.js"></script>
</body>

</html>