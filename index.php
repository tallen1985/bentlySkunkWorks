<?php 

session_start();

    if (!isset($_SESSION["data"])) {
      $data = file_get_contents("https://openapi.etsy.com/v2/shops/BentlyskunkworksShop/listings/active?method=GET&api_key=r645z2pvk8ptxcr6dz8y0oqp&fields=title,price,url&limit=100&includes=MainImage");
      $_SESSION["data"] = $data;
    } else {
      $data = $_SESSION["data"];
    }
    
 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;300;500&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF"
      crossorigin="anonymous"
    />
    <link href="assets/css/style.css" rel="stylesheet" />
    <title>Bently Skunk Works - Locally made pottery</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
      <div class="container-fluid">
        <a class="navbar-brand" href="/">Bently Skunk Works</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNavDropdown"
          aria-controls="navbarNavDropdown"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="/">Home</a>
            </li>

            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                id="navbarDropdownMenuLink"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                Products
              </a>
              <ul
                class="dropdown-menu"
                aria-labelledby="navbarDropdownMenuLink"
              >
              <li><a class="dropdown-item" href="/bonsai.php">Bonsai Pots</a></li>
                <li><a class="dropdown-item" href="/sake.php">Sake Kits</a></li>
                <li>
                  <a class="dropdown-item" href="/other.php">Misc Cool Stuff</a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/#about">About Bently Skunk Works</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <main>
      <div class="header">
        <div class="content">
          <div class="image">
            <img src="assets/img/palm-tree.jpg" />
          </div>
          <div class="info">
            <div class="infoBox">
              <h1>Bently Skunk Works</h1>
              <p>A division of Purple Flamingo Pottery</p>
            </div>
          </div>
        </div>
      </div>

      <div class="featuredProducts">
        <div class="content">
          <h2>Featured Products</h2>
          <div class="imageBox">
            <div class="item">
              <img src="assets/img/bonsai.jpg" />
              <a href="/bonsai.php" class="btn btn-dark">Bonsai Collection</a>
            </div>
            <div class="item">
              <img src="assets/img/sake.jpg" />
              <a href="/sake.php" class="btn btn-dark">Sake Sets</a>
            </div>
            <div class="item">
              <img src="assets/img/jumbotron.jpeg" />
              <a href="/other.php" class="btn btn-dark">Other Cool Stuff</a>
            </div>
          </div>
        </div>
      </div>

      <div class="about" id="about">
        <div class="content">
          <h2>About</h2>
          <h3>
            The Skunkworks were born due to a budding of a professional shop in
            Dallas Texas. The purpose is to allow a creative culprit an outlet
            in clay. Bently Skunkworks is a complete shop with a Skutt electric
            kiln and Shimpo wheel. Here we are creating products using
            traditional methods and raw materials. However the design and
            finished products come from a woodworkers mind. Utilizing little
            guidance from seasoned potters, we hope you find our wares
            refreshing, useful and beautiful additions to your home.
          </h3>
        </div>
      </div>
      <footer>
        <p>&copy 2022 - Bently Skunk Works</p>
      </footer>
    </main>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
