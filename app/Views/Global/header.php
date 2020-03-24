<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Bootcamp project</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
    
    
        <nav class="navbar navbar-expand-lg navbar-light bg">
            <img id="img-logo" src="images/logo.png" alt=""  style="position: fixed" class="d-inline-block align-top">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarText">
                <ul id="header-navbar" class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="?">home<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?page=humor">humor</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?page=about-me">about me</a>
                    </li>

                    <?php if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn']) { ?>
                        <li class="nav-item">
                            <a class="nav-link" href="?page=log-out">log out</a>
                        </li>
                    <?php } else { ?>
                        <li class="nav-item">
                            <a class="nav-link" href="?page=login">log in</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?page=registration">registration</a>
                        </li> 
                    <?php } ?>   
                </ul>
            </div>
        </nav>
    </header>
    
    

