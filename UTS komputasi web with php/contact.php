<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css"/>
    <link href = "https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet"/>
    <script src="https://unpkg.com/feather-icons"></script>
    <title>Muhamad Al Fariz</title>
</head>
<body>
    <!-- Navbar -->
    <div class="container first-container">
        <nav class="navbar">
            <div class="nav-content"> 
                <!-- Toggle Button for Mobile Menu -->
                <div class="menu-toggle"></div>                 
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
        <section id="contact">
            <div class="container contact-container">
                <h2>Contact</h2>
                <form action="contact.php" method="post">
                    <div class="form-group">
                        <label for="first-name">First Name</label>
                        <input type="text" id="first-name" name="first-name" required>
                    </div>
                    <div class="form-group">
                        <label for="last-name">Last Name</label>
                        <input type="text" id="last-name" name="last-name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea id="message" name="message" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="btn-submit">Submit</button>
                </form>
                <div class="social">
                    <h3>CONNECT WITH ME</h3>
                    <div class="social-icons">
                <?php
                include 'koneksi.php';
                
                $data = 'SELECT * from kontak WHERE icon = "github" LIMIT 1';
                
                $hasil = $conn->query($data);
                
                If ($hasil->num_rows > 0) { 
                while($row = $hasil->fetch_assoc()){
                echo '
                <a href="https://github.com/malfariss"><i data-feather="'.$row['icon'].'"></i></a>
                ';
                }
                }
                $data = 'SELECT * from kontak WHERE icon = "linkedin" LIMIT 1';
                
                $hasil = $conn->query($data);
                
                If ($hasil->num_rows > 0) { 
                while($row = $hasil->fetch_assoc()){
                echo '
                <a href="#"><i data-feather="'.$row['icon'].'"></i></a>
                ';
                }
                }
                $data = 'SELECT * from kontak WHERE icon = "instagram" LIMIT 1';
                
                $hasil = $conn->query($data);
                
                If ($hasil->num_rows > 0) { 
                while($row = $hasil->fetch_assoc()){
                echo '
                <a href="https://www.instagram.com/alffars11/"><i data-feather="'.$row['icon'].'"></i></a>
                ';
                }
                }
                ?>
                    </div>
                </div> 
            </div>
        </section>
        <footer><div class="credit">
            <p>Created by <a>alfaris</a>
             | &copy; 2024</p>
        </footer>
        
    </div>
    <!--head-->
    
    <?php
    $frstname =  $_POST['first-name'];
        $lstname = $_POST['last-name'];
        $email = $_POST['email'];
        $msg = $_POST['message'];


        $data = "INSERT INTO contact(first_name,last_name,email,message) Values('$frstname', '$lstname', '$email', '$msg')";

        if ($conn->query($data) === TRUE) {
            echo "New record created successfully";
          } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
          }
          $conn->close();
    ?>
    <script>
        feather.replace();
    </script>
    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>