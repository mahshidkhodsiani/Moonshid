
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="jquery-3.6.0.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <title>Online Learning</title>
</head>
<body>

  <!-- Dropdown Structure -->
<ul id="dropdown1" class="dropdown-content">
  <li><a href="#!">Programing</a></li>
  <li><a href="#!">Languages</a></li>
</ul>
<nav>
  <div class="nav-wrapper">
    <ul class="left hide-on-med-and-down">
      <li><a href="">About us</a></li>
      <li><a href="">Classes</a></li>
      <!-- Dropdown Trigger -->
      <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Categories
        <i class="material-icons right">arrow_drop_down</i></a></li>
    </ul>
  </div>
</nav>
  
  <br>
  <div class="container">
    <h1>Online Learning</h1>
    <div class="slideshow-container">
      <div class="mySlides fade">
        <div class="numbertext">1 / 3</div>
        <img src="./img/HD-wallpaper-dreams-dont-work-unless-you-do-ultra-computers-hardware-internet-laptop-desk-dream-work-technology-computer-office-smartphone-macbook-topview-workplace-woodentable-hotdrink.jpg" style="width:100%">
        <div class="text">Caption Text</div>
      </div>

      <div class="mySlides fade">
        <div class="numbertext">2 / 3</div>
        <img src="./img/tumblr_nay1gtEjIH1tzbkf0o1_1280.jpg" style="width:100%">
        <div class="text">Caption Two</div>
      </div>

      <div class="mySlides fade">
        <div class="numbertext">3 / 3</div>
        <img src="./img/photo-1614624532983-4ce03382d63d.jpg" style="width:100%">
        <div class="text">Caption Three</div>
      </div>

    </div>
    <br>

    <div style="text-align:center">
      <span class="dot"></span> 
      <span class="dot"></span> 
      <span class="dot"></span> 
    </div>

    <script>
     
      let slideIndex = 0;
      showSlides();

      function showSlides() {
      let i;
      let slides = document.getElementsByClassName("mySlides");
      let dots = document.getElementsByClassName("dot");
      for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";  
      }
      slideIndex++;
      if (slideIndex > slides.length) {slideIndex = 1}    
      for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex-1].style.display = "block";  
      dots[slideIndex-1].className += " active";
      setTimeout(showSlides, 4000); // Change image every 4 seconds
      }
     
    </script>
    

<div class="card">
  <div class="card-content">
    <div id="card1" class="row">

        <div class="left-align col m6">
          <a href="./info/informations.php"><h3>5 Benefits to Group Learning</h3></a>
          When a student is working on their own they have only their mind to rely on. 
          This isn’t a bad thing in and of itself but, 
          if a student is fixated on a problem they don’t understand they may be too embarrassed to ask for help from a teacher. 
          One of the benefits of small group learning is the ability to speak with your peers for help
        </div>

        <div class="right-align col m6">
          <img height="300px" width="350px" src="./img/11062b_496222cedb7143af94157973022fc13c_mv2_d_4000_2029_s_2.jpg">
        </div>

    </div>
  </div>
</div>
<script>
    $( document ).ready(function() {
    console.log( "ready!" );
    $(".dropdown-trigger").dropdown();

  });
</script>

</div>
</body>
</html>