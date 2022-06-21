<?php 

session_start();

    if (!isset($_SESSION["data"])) {
      $data = file_get_contents("https://openapi.etsy.com/v2/shops/BentlySkunkworksShop/listings/active?method=GET&api_key=r645z2pvk8ptxcr6dz8y0oqp&fields=title,price,url&limit=100&includes=MainImage");
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
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;300;500&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous" />
    <link href="assets/css/style.css" rel="stylesheet" />
    <title>Bently Skunkworks - Locally made pottery</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">Bently Skunkworks</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Products
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="/bonsai.php">Bonsai Pots</a></li>
                            <li><a class="dropdown-item" href="/sake.php">Sake Kits</a></li>
                            <li>
                                <a class="dropdown-item" href="/other.php">Misc Cool Stuff</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/#about">About Bently Skunkworks</a>
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
                        <h1>Bently Skunkworks</h1>
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
                <p>
                    Bently Skunkworks is a subsidiary of Purple Flamingo Pottery. By definition, in a “Skunkwork”
                    operation, the designs, manufacturing and direction taken at the studio is independent of outside
                    influence. Fortunately, or unfortunately, whichever the case may be…Troy Allen is the instigator in
                    all aspects of these finished products.
                </p>
                <p>
                    With a background in business management during working hours and the creation of woodworking
                    projects, sheep farms, landscaping designs, painting and at one time competition solo bagpiping
                    after hours, ceramics and pottery came naturally. The exciting difference for me is that this media
                    is permanent and waterproof. Since I have always toyed with plants and trees, the creation of bonsai
                    pottery was an easy and rewarding step forward.
                </p>
                <p>
                    I hope you find some of these items interesting. I do, or I would not have snapped my fingers and
                    made them come alive. I’d like to thank Anne Thomas for all she has done to make this dream come
                    alive and prosper. I can be reached at troy@purpleflamingopottery.com for any reason other than
                    delivering food or giving you a ride to the dentist.
                </p>
                <p>
                    Troy Allen
                </p>
            </div>
        </div>
        <footer>
            <p>&copy 2022 - Bently Skunkworks</p>
        </footer>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous">
    </script>
</body>

</html>