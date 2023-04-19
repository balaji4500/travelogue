<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>createaccount</title>
    <link rel="shortcut icon" href="img/favicon.png" type="image/png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
      <!--=============== CSS ===============-->
<link rel="stylesheet" href="create.css">

</head>

<body>
    <header class="header" id="header">
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-transparent ">
            <a class="navbar-brand" href="#"><img src="images/favicon.png" alt=""id="img1"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
                aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
    
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item active ">
                        <a class="nav-link" href="#" id="a1">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active ">
                        <a class="nav-link" href="#" id="a2">About</a>
                    </li>
                    <li class="nav-item active ">
                        <a class="nav-link " href="#" id="a3">Discover</a>
                    </li>
                    <li class="nav-item active  ">
                        <a class="nav-link " href="#" id="a4"> createaccount </a>
                    </li>
                   
                </ul>
            </div>
        </nav>
    </header>
    <form action="acc.php" method="post">
<div class="container" id="div1" >
    <h2>Createnew Account</h2>
    <label for="">first name</label>
<input type="text" name="first" required oninvalid="this.setCustomValidity('Firstname cannot be empty.')" 
                            onchange="this.setCustomValidity('')"><br>
<label for="">Last name </label>
<input type="text" name="second" required oninvalid="this.setCustomValidity('lastname cannot be empty.')" 
                            onchange="this.setCustomValidity('')"><br>
<label for="">Email </label>
<input type="email" name="email" required oninvalid="this.setCustomValidity('please enter the email')" 
onchange="this.setCustomValidity('')" ><br>
<label for=""> set Password</label>
<input type="password" name="pass" required oninvalid="this.setCustomValidity('password cannot be empty.')" 
onchange="this.setCustomValidity('')"><br><br>
<input type="checkbox" required><span><p>  Terms and Conditon Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus doloremque soluta atque!</p></span>
<input type="submit" id="btn" value="create">

</div>
    </form>
    
</body>
</html>
