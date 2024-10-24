<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css"/>
    <link href = "https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet"/>
    <title>Muhamad Al Fariz</title>
</head>
<body>
    <!-- Navbar -->
    <div class="container first-container">
        <nav class="navbar">
            <div class="nav-content">  
                <!-- Toggle Button for Mobile Menu -->
                <div class="menu-toggle"></div>  
                <div class="nama">
                <ul class="nav-items">
                    <h3>Alfaris</h3>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="About.php">About</a></li>
                    <li><a href="skills.php">Skills</a></li>
                    <li><a href="Projects.php">Projects</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </div>
        </nav>
        <!-- About Section -->
        <section id="about" class="about-section">
            <div class="about-container">
                <div class="profile-image slide-down">
                    <img src="img/WIN_20240925_16_59_56_Pro.jpg" alt="Profile Picture">
                </div>
                <div class="about-text slide-down">
                <?php
                include 'koneksi.php';
                
                $data = 'SELECT * from about';
                
                $hasil = $conn->query($data);
                
                If ($hasil->num_rows > 0) { 
                while($row = $hasil->fetch_assoc()){
                echo '
                <h2>'.$row['about_h2'].'<h2>
                <p>'.$row['about_p1'].'</p>
                <p>'.$row['about_p2'].'</p>
                ';
                }
                }
                ?>
                </div>
            </div>
        </section>
        <footer>
            <div class="credit">
                <p>Created by <a>alfaris</a> | &copy; 2024</p>
            </div>
        </footer>
    </div>
    <!--head-->
    
    
    
    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>