<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width, initial-scale=1.0">
    <title>cancel order</title>
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
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>
<style>


.container{
margin-top: 100px;
}
video{
  width:800px;
  margin-left: -30px;

}
input{
  width:150px;
  padding: 10px;
  background-color: rgb(23, 139, 139);
  color: antiquewhite;
  border: none;
  font-weight: 700;
  border-radius: 20px;
}
input:hover{
  background-color: rgb(43, 203, 217);
  transition: 1s;
  color: black;
}


</style>
<body>

<div class="contanier-fluid">
        <nav class="navbar fixed-top navbar-expand-lg navbar-light " id="navbar">
            <a class="navbar-brand" id="a" href="#"><b>Travelogue</b> 
            </a>
            </div>
          </nav>
          <div class="container">
            <div class="row">
              <div class="col" id="col1">
                <video autoplay muted loop id="myVideo">
                  <source src="waterfall-144310.mp4"type="video/mp4">
                </video>
              </div>
              <div class="col" id="col2"  >
<h3>Cancel Booking</h3><br>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat sunt dolorem aut porro enim maiores! Ut ipsam facilis odio numquam.</p>
<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    why did you cancel the Booking
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#">I mistakenly booked this place</a>
    <a class="dropdown-item" href="#">I'm not available on the date</a>
    <a class="dropdown-item" href="#">personal reasons</a>
  </div>
</div><br><br>

                <form action="fet.php">
                  <input type="submit" value="cancel order">
                      </form>
              </div>
            </div>



  
</body>
</html>