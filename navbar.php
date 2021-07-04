



<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<div class="NavbarS fixed-top" >
<div class="progress-bar progress-bar-striped active" role="progressbar"
  aria-valuenow="40" aria-valuemin="20" aria-valuemax="100" id="myProgress">
  <div id="myBar"></div>
</div>
<nav class="navbar navbar-expand-lg navbar-light" style="justify-content: center; background-color: white; box-shadow: 0 8px 26px 0 rgb(0 0 0 / 16%);">
  <div class="container">
  <img src="IMG/lo1.png" style="max-height: 100px; float: left;">
  <a class="navbar-brand" href="HomeServiceApp.php" style="font-family: fantasy; font-size: xx-large; margin-left: 20px; color: cadetblue; ">Serverelax</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent" style="margin-top: 5px;">
    <ul class="navbar-nav mr-auto"style="color: #666666;
    display: block;
    font-family: sans-serif;
    font-size: 15px;
    font-weight: 400;
    line-height: 16px;
    text-transform: capitalize;
    transition: all 0.3s ease 0s;
    text-decoration: none;
    padding: 0px 20px;
    justify-content: center;">
      <li class="nav-item active">
        <a class="nav-link" href="HomeServiceApp.php" style="color: #00b076;font-weight: bold;">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Service
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="Appliances1.php">Appliances Services</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="Carpenter1.php">Carpenter Services</a>
          <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="Electrician1.php">Electrician Services</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="HomeCleaning1.php">HomeCleaning Services</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="Painter1.php">Painter Services</a>
          <div class="dropdown-divider"></div>
           <a class="dropdown-item" href="plumber2.php">Plumber Services</a>
          <div class="dropdown-divider"></div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#f">About us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#M" style="font-size: 20px;"><i class="fa fa-map-marker" aria-hidden="true"></i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" style="font-size: 20px;"><i class="fa fa-phone-square" aria-hidden="true"></i></a>
      </li>
      <!-- <li class="nav-item">
        <a class="nav-link" href="logout.php" style="font-size: 20px;"><button type="button" class="btn btn-outline-success">Login</button></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php" style="font-size: 20px;"><button type="button" class="btn btn-outline-danger">Logout</button></a>
      </li> -->
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</div>
</nav>
<script>
window.onscroll = function() {myFunction()};

function myFunction() {
  var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
  var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
  var scrolled = (winScroll / height) * 100;
  document.getElementById("myBar").style.width = scrolled + "%";
}

</script>
</div>
<!-- header-top-area-End -->
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

</body>
</html>
