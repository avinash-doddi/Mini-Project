<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Locations</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<style>
    .btn{
        float: right;
    }
    body {
        background-image: linear-gradient(rgba(0, 0, 0, 0.5),transparent),url(background2.jpg);
        background-size: cover;
    }
    .cardset
    {
        margin-top: 5%;
    }
    .h1 { 
        font-family: 'Lobster', cursive; 
        color: white;
        text-align: center;
        justify-content: center;
    }
    .card{
        box-shadow: 0px 0px 10px white;
        transition: ease 0.2s;
    }
    .card:hover{
        box-shadow: 0px 0px 10px rgb(117, 232, 255);
        transform: scale(1.04);
    }
    .textshadow
    {
        text-shadow: 0px 0px 10px white;
        transition: ease 0.2s;
    }
    .textshadow:hover{
        text-shadow: 0px 0px 10px rgb(117, 232, 255);
        transform: scale(1.04);
    }
</style>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark  bg-transparent">
        <div class="container-fluid">
            <a class="navbar-brand" href="#" style="pointer-events: none;">
                <img src="explore 2 white.png" alt="" width="100" height="40">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active textshadow" aria-current="page" href="index2.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link textshadow" href="login.php">Login or signup</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link textshadow" href="#">Locations</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle textshadow" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Tour Packages 
                </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="#">one day package</a></li>
                            <li><a class="dropdown-item" href="#">less than a week package </a></li>
                            <li><a class="dropdown-item" href="#">more thana a week package   </a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row cardset">
            <p class="h1 textshadow">Places to visit</p>
        </div>
        <div class="row cardset">
            <div class="col-sm-4">
                <div class="card" style="width: 18rem;">
                    <img src="1.jpg" class="card-img-top" alt="beaches" height="200px">
                    <div class="card-body">
                    <h5 class="card-title">Beaches</h5>
                    <p class="card-text">Visakhapatnam has about 74.6 km of coastline with a variety of beaches...</p>
                    <a href="beaches.php" class="btn btn-primary">Visit</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card" style="width: 18rem;">
                    <img src="2.jpg" class="card-img-top" alt="yarada beach"height="200px">
                    <div class="card-body">
                    <h5 class="card-title">Boating Spots</h5>
                    <p class="card-text">There are many areas where tourists can go and enjoy boating and explore...</p>
                    <a href="boating.php" class="btn btn-primary">Visit</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card" style="width: 18rem;">
                    <img src="6.jpg" class="card-img-top" alt="rama krishna beach" height="200px">
                    <div class="card-body">
                    <h5 class="card-title">Valleys</h5>
                    <p class="card-text">Visakhapatnam has a wide range of valleys like Aruku Valley to visit and explore...</p>
                    <a href="#" class="btn btn-primary">Visit</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row cardset">
            <div class="col-sm-4">
                <div class="card" style="width: 18rem;">
                    <img src="11.jpg" class="card-img-top" alt="gangavaram beach" height="200px">
                    <div class="card-body">
                    <h5 class="card-title">Forests and wildlife</h5>
                    <p class="card-text">There are many areas in Visakhapatnam where people can explore wildlife...</p>
                    <a href="#" class="btn btn-primary">Visit</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card" style="width: 18rem;">
                    <img src="12.jpg" class="card-img-top" alt="bheemili beach" height="200px">
                    <div class="card-body">
                    <h5 class="card-title">Temples</h5>
                    <p class="card-text">Visakhapatnam has a wide range of temples with rich history and culture ...</p>
                    <a href="temples.php" class="btn btn-primary">Visit</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card" style="width: 18rem;">
                    <img src="11111.jpg" class="card-img-top" alt="rama krishna beach" height="200px">
                    <div class="card-body">
                    <h5 class="card-title">Historical Places</h5>
                    <p class="card-text">Visakhapatnam has a wide range of areas to explore with rich history and culture ...</p>
                    <a href="#" class="btn btn-primary">Visit</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">col-sm-8</div>
            <div class="col-sm-4">col-sm-4</div>
            <div class="col-sm-4">col-sm-4</div>
        </div>
    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>