<?php

if(isset($_POST['name'])){
      $server = "localhost";

      $username = "root";
  
      $password = "";

      $con = mysqli_connect($server, $username, $password);

      if(!$con)
      {echo "Success connecting to the db";}

       // Check for connection success
    if(!$con){
      die("connection to this database failed due to" . mysqli_connect_error());
  }
    //echo "Success connecting to the db";

  // Collect post variables
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $desc = $_POST['desc'];
    $age = $_POST['age'];
    $desc = $_POST['desc'];
    $sql = "INSERT INTO `getweb`.`getweb` (`name`, `email`, `phone`, `age`, `desc`,  `dt`) VALUES ('$name', '$email', '$phone', '$age', '$desc', current_timestamp());";


  if($con->query($sql) == true){
    //echo "Successfully inserted";
  }
  else{
    echo "ERROR: $sql <br> $con->error";
  }

    $con->close();
}
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="assets/css/styles.css">

        <!-- =====BOX ICONS===== -->
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

        <title>Portfolio website complete</title>
    </head>
    <body>
        <!--===== HEADER =====-->
        <header class="l-header">
            <nav class="nav bd-grid">
                <div>
                    <a href="#" class="nav__logo">Kaushik</a>
                </div>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item"><a href="index.html" class="nav__link active">Home</a></li>
                        <li class="nav__item"><a href="#about" class="nav__link">About</a></li>
                        <li class="nav__item"><a href="#skills" class="nav__link">Skills</a></li>
                        <li class="nav__item"><a href="#work" class="nav__link">Work</a></li>
                        <li class="nav__item"><a href="#contact" class="nav__link">Contact</a></li>
                        <li class="nav__item"><a href="service.html" class="nav__link">Service</a></li>
                    </ul>
                </div>

                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-menu'></i>
                </div>
            </nav>
        </header>

        <main class="l-main">
            <!--===== HOME =====-->
            <section class="home bd-grid" id="home">
                <div class="home__data">
                    <h1 class="home__title">I <br>Create <span class="home__title-color">Websites</span><br> </h1>
                    <h1 class="home__title"> For <br> You</h1>

                    <a href="#" class="button">Contact</a>
                </div>

                <div class="home__social">
                    <a href="" class="home__social-icon"><i class='bx bxl-linkedin'></i></a>
                    <a href="" class="home__social-icon"><i class='bx bxl-behance' ></i></a>
                    <a href="" class="home__social-icon"><i class='bx bxl-github' ></i></a>
                </div>

                
            </section>

            

            
            <!--===== CONTACT =====-->
            <section class="contact section" id="contact">
                <h2 class="section-title">Contact</h2>
            
                <div class="contact__container bd-grid">
                    <form action="index.php" method="post" class="contact__form">
                        <input type="text" id="name" name="name" placeholder="Name" class="contact__input">
                        <input type="email" id="email" name="email" placeholder="Email" class="contact__input">
                        <input type="phone" id="phone" name="phone" placeholder="Phone Number" class="contact__input">
                        <input type="age" id="age" name="age" placeholder="Age" class="contact__input">
                        <textarea name="desc" id="desc" cols="0" rows="10" class="contact__input"></textarea>
                        <button style="color:#fff; padding: 20px; background-color: blue;">Submit</button>
                       
                    </form>
                </div>
            </section>
        </main>

        <!--===== FOOTER =====-->
        <footer class="footer">
            <p class="footer__title">@copyright</p>
            <div class="footer__social">
                <a href="#" class="footer__icon"><i class='bx bxl-facebook' ></i></a>
                <a href="#" class="footer__icon"><i class='bx bxl-instagram' ></i></a>
                <a href="#" class="footer__icon"><i class='bx bxl-twitter' ></i></a>
            </div>
            <p class="cp">&#169; 2020 copyright all right reserved</p>
        </footer>


        <!--===== SCROLL REVEAL =====-->
        <script src="https://unpkg.com/scrollreveal"></script>

        <!--===== MAIN JS =====-->
        <script src="assets/js/main.js"></script>
    </body>
</html>