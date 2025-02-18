<?php session_start(); ?>

<?php $page = substr($_SERVER['SCRIPT_NAME'], strrpos($_SERVER['SCRIPT_NAME'], "/") + 1); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prelim - exam</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="assets\fontawesome\css\all.css">
    <link rel="stylesheet" href="assets\fontawesome\css\regular.css">
    <link rel="stylesheet" href="assets\custom\style-custom.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light shadow-sm bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="https://webstockreview.net/images/win-clipart-closed-window-13.png" alt="" width="60">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link <?= $page == 'index.php' ? 'active' : '' ?>" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= $page == 'contactUs.php' ? 'active' : '' ?>" href="contactUs.php">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= $page == 'enroll.php' ? 'active' : '' ?>" href="enroll.php">Enroll Now</a>
                    </li>
                </ul>
                <button class="btn btn-outline-primary rounded-pill px-4" data-bs-toggle="modal" data-bs-target="#loginModal">
                    Login
                </button>

                <?php include 'login-modal.php'; ?>

            </div>
        </div>
    </nav>