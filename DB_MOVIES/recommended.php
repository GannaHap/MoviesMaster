<?php 

  require "functions.php";

  if( isset($_POST['btn-search'])) {
    $keyword = $_POST["keyword"];
  
    header("Location: search?s=$keyword");
  } 
  

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Movies Master</title>
<!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<!-- Font Roboto Slab -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300&display=swap" rel="stylesheet">
<!-- CSS Vanilla -->
  <link rel="stylesheet" href="css/style.css">

</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">

      <a class="navbar-brand" href="./">
        <img src="img/brand.png" alt="Movie Master">
      </a>

      <!-- Ini toggle, jika mode mobile -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
<!-- Home -->
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="./" id="theLink">Home</a>
          </li>
<!-- Populer -->
          <li class="nav-item">
            <a class="nav-link" href="populer" id="theLink">Populer</a>
          </li>
<!-- Genre -->   
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Genre
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <div class="dropdownMenu2">
                <a class="dropdown-item" href="genre/action">Action</a>
                <a class="dropdown-item" href="genre/animation">Animation</a>
                <a class="dropdown-item" href="genre/comedy">Comedy</a>
                <a class="dropdown-item" href="genre/horror">Horror</a>
              </div>
            </div>
          </li>
<!-- Country -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Country
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <div class="dropdownMenu2">
                <a class="dropdown-item col" href="">Indonesia</a>
                <a class="dropdown-item col" href="">Jepang</a>
                <a class="dropdown-item col" href="#">India</a>
                <a class="dropdown-item col" href="#">Thailand</a>
                <a class="dropdown-item col" href="#">Inggris</a>
                <a class="dropdown-item col" href="#">Amerika Serikat</a>
              </div> 
            </div>
          </li>
        </ul>

<!-- Button Search -->
        <form class="d-flex" action="" method="POST">
          <input class="form-control me-2 searchKu" type="text" placeholder="Search" id="search-input" name="keyword">
          <button class="btn btn-outline-success" type="submit" id="search-button" name="btn-search">Search</button>
        </form>

      </div>
    
    </div>
  </nav>

  <div class="content-result">
    <h2 class="titleR">Movies Recommended</h2>
      <hr>
    <div class="content-search">
  
    </div>
  </div>

  <div class="pagination-container" id="pagein">
    <nav aria-label="Page navigation example">
      <ul class="pagination justify-content-center">
      
      </ul>
    </nav>
  </div>

  <footer>
    <div class="footers">
      <div class="footer1">
        <img src="img/brand.png" alt="Logo Movie Master">

      </div>

      <div class="footer2">
        <h4>Follow Me</h4>
          <hr>
        <div class="sosmed">
          <a href="https://t.me/GannaHap" target="_blank">
            <img src="img/tele1.png" alt="Telegram" class="sosmedKu">
          </a>
          <a href="https://www.facebook.com/ganna.gilang/" target="_blank">
            <img src="img/fb.png" alt="Facebook" class="sosmedKu">
          </a>
          <a href="https://www.instagram.com/ganna_prasetya/" target="_blank">
            <img src="img/ig1.png" alt="Instagram" class="sosmedKu">
          </a>
          <a href="https://www.github.com/GannaHap" target="_blank">
            <img src="img/github.png" alt="Github" class="sosmedKu">
          </a>
        </div>
      </div>
    </div>

    <div class="barCopy">
      <span>Copyright &#169; 2021, Movie Master</span>
      <span>Jakarta - Indonesia</span>
    </div>
  </footer>
   

<!-- Bootstrap Js -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<!-- JQuery -->
  <script src="js/jquery-3.5.1.min.js"></script>
<!-- Script Sendiri -->
  <script type="module" src="js/recommend.js"></script>
</body>
</html>