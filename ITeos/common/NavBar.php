
        <!-- Navbar Section -->
        <nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom fixed-top">
            <div class="container">
                <!-- Logo -->
                <a class="navbar-brand" href="#">
                    <img src="../assets/images/Navbar/ITeos Logo.svg" alt="Logo" class="navbar-logo">
                </a>
    
                <!-- Hamburger Menu for Mobile -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
    
                <!-- Navigation Links and Button -->
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="../../index.php" style="color: #008080;">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../../AboutUs.php">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../../Service.php">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../../portfolio.php">Portfolio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../../blogs.php">Blogs</a>
                        </li>
                    </ul>
                    <div class="btn-container ms-lg-3 text-center">
                        <a href="../../ContactUs.php" class="btn btn-outline-primary">Contact Us</a>
                    </div>
                </div>
            </div>
        </nav>
 <style>
        /* General styles for the navbar */
        .navbar {
        padding: 1rem 0;
    }
    
    .navbar-logo {
        width: 120px; /* Adjust logo width */
        height: auto;
    }
    
    /* Style for the nav links */
    .nav-link {
        padding-right:20px;
        color: #111827 !important;
        font-size: 16px !important;
        font-style: bold;
        margin-right: 10px;
        transition: color 0.3s ease;
        font-family: "Ubuntu", serif;
    }
    
    .nav-link:hover {
        color: #008080 !important; /* Hover color for links */
    }
    
    .nav-link.active {
        color: #111827 !important;/* Active link color */
    }
    /* Style for the button */
    .btn-outline-primary {
        color: #003566 !important;
        border-color: #003566 !important;
        padding: 10px 30px;
        border-radius: 7px;
        font-family: "Ubuntu", serif !important;
        transition: background-color 0.3s ease, color 0.3s ease;
    }
    
    .btn-outline-primary:hover {
        background-color: #003566 !important;
        color: white !important;
        font-family: "Ubuntu", serif;
        
    }
    
    /* For mobile view */
    @media (max-width: 992px) {
        .navbar-nav {
            text-align: center;
        }
    
    
    }
 </style>