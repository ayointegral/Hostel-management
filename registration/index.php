<?php
  session_start();
  $connection = mysqli_connect("localhost","root","");
  $db = mysqli_select_db($connection,"notice1");

  if(isset($_POST['login'])){
    $query = "select * from users where email = '$_POST[email]' AND password = '$_POST[password]'";
    $query_run = mysqli_query($connection,$query);
    if(mysqli_num_rows($query_run)){
      $_SESSION['email'] = $_POST['email'];
      while($row = mysqli_fetch_assoc($query_run)){
        $_SESSION['class'] = $row['class'];
        echo "<script>
        window.location.href = 'user_dashboard.php';
        </script>";
      }
    }
    else{
      echo "<script>alert('Please Enter correct email id and password');

      </script>";
    }
  }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>NOTICE</title>
    <!-- Bootstrap files -->
    <link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
    <script src="bootstrap-4.4.1/js/bootstrap.min.js" charset="utf-8"></script>
    <!-- CSS File -->
    <link rel="stylesheet" href="css/style1.css">
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;600;700&display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
body {
    font-family: 'Raleway', sans-serif;
}
            /* =======Navigation Bar========== */
nav {
    display: grid;
    grid-template-columns: 1fr 1fr;
    font-size: 25px;
    padding: 1em;
    background-color: #27187e70;
}
.logo {
    margin-left: 1em;
}
.logo a {
    cursor: pointer;
    color: #fff;
    text-decoration: none;
}
.logo a:hover {
    text-decoration: underline dashed #758bfd .1em;
}
.nav_items {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
}
.nav_items ul {
    list-style: none;
}
.nav_items ul li a {
    text-decoration: none;
    color: #ffff;
    font-weight: 500;
}
.nav_items ul li .next {
    width: .45em;
    transform: rotate(90deg);
    margin-left: .2em;  
    top: 0;
    opacity: 0;
}
.nav_items ul li:hover .next {
    opacity: 1;
}
.nav_items ul li a:hover {
    color: #758bfd;
    transition: color 400ms ease-in;
}

                /* ================Header============= */
header {
    background-image: linear-gradient(90deg, rgba(0, 0, 0, .5), rgba(0, 0, 0, .5)), url(./images/home.jpg);
    width: 100vw;
    height: 100vh;
    background-size: cover;
}

.naming-container {
    font-size: 3.4em;
    font-weight: 700;
    position: absolute;
    left: 50%;
    bottom: 5%;
    transform: translate(-50%, 100%);
}

.container {
    position: relative;
    text-align: center;
}
.container h1 {
    font-size: 4em;
    color: #fff;
    margin-top: 2em;
}
.welcome_text p {
    color: #fff;
    text-align: center;
    font-size: 1.5em;
    position: relative;
    margin-top: 5%;
    padding: 10%;
}

            /* =====---About_page----======= */
.about_head {
    height: 60vh;
    background-image: linear-gradient(90deg, rgba(0, 0, 0, .5), rgba(0, 0, 0, .5)), url(./images/home.jpg);
    background-repeat: no-repeat;
    background-position: center;
}
.naming-container {
    font-size: 3.4em;
    font-weight: 700;
    position: absolute;
    left: 50%;
    bottom: 5%;
    transform: translate(-50%, 100%);
}
.aboutWel {
    margin-top: 10%;
}
.container {
    position: relative;
    text-align: center;
}
.wardens {
    display: flex;
    flex-direction: column;
}
.abt-warden {
    display: grid;
    gap: 3em;
}
.wardens h1 {
    font-size: 3em;
    text-align: center;
    margin: 1em;
    text-decoration: underline wavy #758bfd 3px;
}
.abt-warden .chief {
    display: flex;
    justify-content: space-around;
    align-items: center;
    padding: 2em;
}
.abt-warden .girls {
    display: flex;
    justify-content: space-around;
    align-items: center;
    padding: 2em;
}
.abt-warden .boys {
    display: flex;
    justify-content: space-around;
    align-items: center;
    padding: 2em;
}
.abt-warden .about {
    width: 50em;
}
.about h2 {
    font-size: 1.7em;
    padding-bottom: .1em;
}
.about span {
    font-weight: 600;
}
.about p {
    padding-top: 1em;
    line-height: 1.6em;
    letter-spacing: .12em;
    font-weight: 500;
}
.abt-warden img{
    border-radius: 0 1em 0 1em;
    box-shadow: 0 1px 10px #111;
    width: 20em;
    height: 20em;
    transition: 600ms;
}
.abt-warden img:hover {
    box-shadow: none;
    border-radius: 1em;
}
.wardens .chief, .girls, .boys {
    text-align: center;
}
.h_title {
    text-align: center;
    font-size: 2em;
    text-decoration: underline wavy #758bfd 3px;
}
.buildings {
    display: grid;
    grid-template-columns: 1fr 1fr;
    /* grid-template-rows: 20em 20em; */
    margin: 2em;
    /* row-gap: 2em; */
    column-gap: 2em;
}
.girl_hostels {
    display: grid;
}
.girlhostel,
.boyhostel {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    text-align: center;
    gap: 1em;
}
.buildings img {
    width: 30em;
    height: 30em;

}
@media screen and (max-width: 970px) {
    .nav_items {
        display: none;
    }
    .container h1 {
        font-size: 2.4em;
    }
    .naming-container {
        font-size: 2.5em;
    }
}
@media screen and (max-width: 768px) {
    .nav_items {
        display: none;
    }
    .container h1 {
        font-size: 2.4em;
    }
    .naming-container {
        font-size: 2.5em;
    } 
    .abt-warden .about {
        width: 100%;
    }
    .abt-warden .chief {
        display: grid;
    }
    .abt-warden .girls {
        display: grid;
    }
    .abt-warden .boys {
        display: grid;
    }
}
@media screen and (max-width: 600px) {
    .nav_items {
        display: none;
    }
    .container h1 {
        font-size: 2em;
    }
    .naming-container {
        font-size: 1.8em;
    }
    .welcome_text p {
        font-size: 1.2em;
        margin-top: 20%;
    } 
    .aboutWel {
        margin-top: 25%;
    }
}
@media screen and (max-width: 600px) {
    .welcome_text p {
        font-size: 1.2em;
        margin-top: 30%;
    } 
}
      </style>
  </head>
  <body>
  <nav id="nav">
            <div class="logo">
                <!-- <img src="" alt=""> -->
                <h1><a href="index1.php">HOSTEL</a></h1>
            </div>
            <div class="nav_items">
                <div class="nav_item">
                    <ul>
                        <li>
                            <a href="index1.php">Home</a>
                            <img src="css/images/nexticon.svg" alt="next" class="next">

                        </li>
                        <li>
                            <a href="about.php">About</a>
                            <img src="css/images/nexticon.svg" alt="next" class="next">
                        </li>
                    </ul>
                </div>
                <div class="nav_item">
                    <ul>
                        <li>
                            <a href="contact.php">Contact</a>
                            <img src="css/images/nexticon.svg" alt="next" class="next">
                        </li>
                        <li>
                            <a href="#">Notice</a>
                            <img src="css/images/nexticon.svg" alt="next" class="next">
                        </li>
                    </ul>
                </div>
                <div class="nav_item">
                    <ul>
                        <li>
                            <a href="gallery.php">Photos</a>
                            <img src="css/images/nexticon.svg" alt="next" class="next">
                        </li>
                        <li>
                            <a href="gallery.php">Event</a>
                            <img src="css/images/nexticon.svg" alt="next" class="next">
                        </li>
                    </ul>
                </div>
                <div class="nav_item">
                    <ul>
                        <li>
                            <a href="index.php">Join</a>
                            <img src="css/images/nexticon.svg" alt="next" class="next">
                        </li>
                        <li>
                            <a href="#">Complain</a>
                            <img src="css/images/nexticon.svg" alt="next" class="next">
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    <!-- Header section code start here  -->
    <!-- <div class="row" id="header">
      <div class="col-md-4">
      </div>
      <div class="col-md-4">
        <h3>NOTICE</h3>
      </div>
      <div class="col-md-4">
      </div>
    </div> -->

    <!-- Login from code starts here -->
    <section id="login_form">
      <div class="row">
        <div class="col-md-4 m-auto block">
          <center><h4>Login form</h4></center>
          <form action="index.php" method="post">
            <div class="form-group">
              <lable>Email ID:</label>
                <input class="form-control" type="text" name="email" placeholder="Enter your email">
            </div>
            <div class="form-group">
              <lable>Passowrd:</label>
                <input class="form-control" type="password" name="password" placeholder="Enter your Password">
            </div>
            <button class="btn btn-primary" type="submit" name="login">Login</button>
          </form>
          <a href="register.php">Click here to register</a>
        </div>
      </div>
    </section>
  </body>
</html>
