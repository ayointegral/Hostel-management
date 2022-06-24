<?php
  $connection = mysqli_connect("localhost","root","");
  $db = mysqli_select_db($connection,"notice1");

  if(isset($_POST['register'])){
    $query = "insert into users values('$_POST[name]','$_POST[clg_id]','$_POST[course]','$_POST[branch]','$_POST[room_no]','$_POST[university_roll]','$_POST[email]','$_POST[mob]','$_POST[dob]','$_POST[gender]','$_POST[password]',$_POST[semester])";
    $query_run = mysqli_query($connection,$query);
    if($query_run){
      echo "<script>alert('Registration successfully...You may now login.');
      window.location.href = 'index.php';
      </script>";
    }
    else{
      echo "<script>alert('Registration failed...try again');
      window.location.href = 'register.php';
      </script>";
    }
  }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>DeVerse</title>
    <!-- Bootstrap files -->
    <link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
    <script src="bootstrap-4.4.1/js/bootstrap.min.js" charset="utf-8"></script>
    <!-- CSS File -->
    <link rel="stylesheet" href="css/style.css">
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
        <h3>Online Notice Board System</h3>
      </div>
      <div class="col-md-4">
      </div>
    </div> -->

    <!-- Login from code starts here -->
    <section id="login_form">
      <div class="row">
        <div class="col-md-4 m-auto block">
          <center><h4>Registration form</h4></center>
          <form action="" method="post">
          <div class="form-group">
              <lable>NAME :</label>
                <input class="form-control" type="text" name="name" placeholder="Enter your Name">
            </div>
            <div class="form-group">
              <lable>CLG ID :</label>
                <input class="form-control" type="text" name="clg_id" placeholder="Enter your clg id">
            </div>
            <div class="form-group">
              <lable>COURSE :</label>
                <input class="form-control" type="text" name="course" placeholder="Enter your course i.e B.Tech">
            </div>
            <div class="form-group">
              <lable>BRANCH :</label>
                <input class="form-control" type="text" name="branch" placeholder="Enter your branch i.e cse">
            </div>
            <div class="form-group">
              <lable>ROOM NO :</label>
                <input class="form-control" type="text" name="room_no" placeholder="Hostel room no">
            </div>
            <div class="form-group">
              <lable>UNIVERSITY ROLL :</label>
                <input class="form-control" type="text" name="university_roll" placeholder="Enter your university Roll">
            </div>
            <div class="form-group">
              <lable>EMAIL ID :</label>
                <input class="form-control" type="text" name="email" placeholder="Enter your email">
            </div>
            <div class="form-group">
              <lable>PHONE NO :</label>
                <input class="form-control" type="text" name="mob" placeholder="Enter your 10 digit mob no.">
            </div>
            <div class="form-group">
              <lable>DATE OF BIRTH :</label>
                <input class="form-control" type="text" name="dob" placeholder="Enter your dob in dd/mm/yyyy">
            </div>
            <div class="form-group">
              <lable>GENDER :</label>
                <input class="form-control" type="text" name="gender" placeholder="male/female/other">
            </div>
            <div class="form-group">
              <lable>PASSWORD :</label>
                <input class="form-control" type="password" name="password" placeholder="Enter your Password">
            </div>
            <div class="form-group">
              <lable>SELECT YOUR SEMESTER :</label>
                <select class="form-control" name="semester">
                  <option>-Select-</option>
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                  <option>6</option>
                  <option>7</option>
                  <option>8</option>
                </select>
            </div>
            <div class="form-group">
              <lable>Upload profile photo</label>
                <input class="form-control" type="file" name="uploadfile" value=""/>
            </div>
            <button class="btn btn-primary" type="submit" name="register">Register</button>
          </form>
          <a href="index.php">Click here to login</a>
        </div>
      </div>
    </section>
  </body>
</html>
