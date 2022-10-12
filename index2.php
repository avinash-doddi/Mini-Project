<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Explore.in</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Lobster&family=Roboto:ital,wght@0,300;1,400&display=swap" rel="stylesheet">  
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<style>
    * {
                margin: 0px;
                border: 0px;
            }
            
            body {
                background: url(wall1.jpg);
                background-repeat: no-repeat;
                background-size: cover;
                height: 100%;
                width: 100%;
                overflow: hidden;
            }
            
            a:hover{
                background-color: rgba(0, 0, 0, 0.05);
                border-radius: 6px;
            }

            .value { 
            pointer-events: none;
            text-decoration: none;
            font-family: 'Dancing Script', cursive;
            font-family: 'Lobster', cursive;
            /* font-family: 'Roboto', sans-serif; */
            color: white;
            text-align: center;
            justify-content: center;
            }
            .txt
            {
                width: 100%;
                display: inline-flex;
                box-sizing: border-box;
                color: black;
                animation: textanimate 3.5s infinite linear;
                font-size: 5rem;
                padding-top : 10%;
                /* padding-left: 40%; */
                left: 40%;
                position: relative;
                overflow: hidden;
            }

            @keyframes textanimate {
                from { transform: translate(0px); color:black; text-shadow: white; opacity: 0;}
                to {
                    transform: translate(20px);
                    color:  black;
                    text-shadow: white;
                }
            }

            .value1
            {
                color: white;
                font-family: 'Roboto', sans-serif;
            }

            .btngrp
            {
                max-width: 100%;
                max-height: 100%;
                width: 100%;
                box-sizing: border-box;
                padding-left: 60%;
                padding-top: 5%;
                /* float: right; */
                padding-right: 25%;
                padding-bottom: 15%;
                display: flex;
                overflow: hidden;
            }
            .btn
            {
                border-color: rgba(0, 0, 0, 0.3);
                color:black;
                box-sizing: content-box;
                margin: 5%;
                padding-left: 25%;
                padding-top: 1%;
                padding-bottom: 1%;
                padding-right: 50%;
                overflow: hidden;
                text-align:justify;
            }

</style>
<body>
<nav class="navbar navbar-expand-lg navbar-dark  bg-transparent">
        <div class="container-fluid">
            <a class="navbar-brand" href="#" style="pointer-events: none;">
                <a class = "value" >Hello, <?php echo $user_data['user_name']?> </a>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index2.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="frontpage.php">Locations</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Tour Packages 
                </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="#">one day package</a></li>
                            <li><a class="dropdown-item" href="#">less than a week package </a></li>
                            <li><a class="dropdown-item" href="#">more thana a week package   </a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="value.php">LogOut</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
        <div class = "container-fluid">
            <h1 class = "txt"> let's Explore !! </h1>
        </div>
        <div class = "btngrp">
            <button type="button" class="btn btn-outline-info" onClick="window.location.href='value.php';"><span style="padding: 60%" class = "value1">LogOut</span></button>
            <button type="button" class="btn btn-outline-info"><span style="padding: 60%" onClick="window.location.href='beachesafterlogin.php';"><span style="padding: 60%" class = "value1">Explore</span></button>
        </div>



















    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>