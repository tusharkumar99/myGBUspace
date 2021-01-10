<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css\login.css">



    <title>Log In | myGBUspace</title>
</head>

<body>
    <div class="navigation sticky-top">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
            <div class="container-fluid">
                <a href="index.html"><img src="photos/logo.png" alt="" width="90" height="40" style="margin-left:-1em;"></a>
                <a class="navbar-brand" href="index.html">myGBUspace</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="index.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="news.html">News <span class="badge bg-danger"
                                    style="font-size: 10px;">New</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Portal</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Academics
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Notes</a></li>
                                <li><a class="dropdown-item" href="#">E-Books</a></li>
                                <li><a class="dropdown-item" href="#">Research Paper</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Explore More</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Entertainment</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact Us</a>
                        </li>
                    </ul>

                    <button class="btn btn-success active" onclick="login.html">Log In</button>
                    <button class="btn btn-success mx-4" onclick="document.location='signup.html'">Sign Up</button>

                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </div>
    <div id="login">
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12" style="height: 265px;">
                        <form id="login-form" class="form" action="" method="post">
                            <h3 class="text-center" style="color: rgb(0, 0, 95);">Log In</h3>
                            <div class="form-group">
                                <input type="text" name="username" id="username" class="form-control" placeholder="Username/E-mail">
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <label for="remember-me" style="color: rgb(0,0,95);"><span>Remember me</span> <span><input
                                            id="remember-me" name="remember-me" type="checkbox"></span></label><br>
                                <input type="submit" name="submit" class="btn btn-success btn-md" value="Submit">
                            </div>
                            <div id="register-link" class="text-right">
                                <a href="signup.html" >Register here</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer style="color: #dadada; background-color: rgb(0,0,95); margin-top: 6.95em; height: 10em;">
        <a href="#" style="text-decoration: none;" class="float-end text-success"><svg
                xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor"
                class="bi bi-arrow-up-circle-fill" viewBox="0 0 16 16" style="margin: 0.5em;">
                <path
                    d="M16 8A8 8 0 1 0 0 8a8 8 0 0 0 16 0zm-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z" />
            </svg>
        </a>
        <p class="h3" style="margin-left: 0.5em;">myGBUspace.co.in</p>
        <p style="margin-left: 1em;">
            Gautam Buddha University <br>
            Greater Noida, Uttar Pradesh <br>
            Contact Us: 8860542694
        </p>
        <p class="text-center">© 2020-2021 myGBUspace, Inc. · <a href="#">Privacy</a> · <a href="#">Terms</a></p>
    </footer>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
        crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
</body>

</html>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="minor";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);


// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";


if(isset($_POST['submit']))
{
   $email=$_POST['username'];
   $password=$_POST['password'];
    $res=mysqli_query($conn, "INSERT INTO LOGIN(email,password) VALUES('$email','$password')");
    

  }
     if($res)
  {

  echo "data inserted successfuly";
  
} 

  else {
  
    echo "unsuccessfull data";
  
  
         }
         mysqli_close($conn);

?>