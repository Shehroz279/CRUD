<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <title>CRUD operation WEB App</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="css/index1.css">
    <link rel="stylesheet" href="css/branchcss.css">
    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

    <style>
        @media screen and (max-width: 600px) {
            table {
                font-size: 13px;
            }

            .c {
                display: none;
            }
        }

        body {
            font-family: 'Nunito', sans-serif;
        }

        li {
            margin: 15px;
        }

        .nav-link {
            font-weight: bold;

        }

        .nav-link:hover {
            text-decoration: underline;


        }

        td {
            padding: 10px;
        }

        .search {
            display: flex;
        }

        .bhead,.con {
            display: flex;
        }

        .search-button,
        .search-input {
            padding: 7px;
        }
        #code
        {
            padding: 8px;
        }
        .b {
            width: 65px;
        }
    </style>
</head>

<body>
    <div class="container">

        <nav class="navbar navbar-expand-lg navbar-light">
            <img src="https://thumbs.dreamstime.com/b/php-letter-logo-design-white-background-creative-circle-concept-253784795.jpg" alt="" width=120 height=80>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a style="color: #3090C7;" class="nav-link" href="index.php">Home </a>
                    </li>
                    <li class="nav-item">
                        <a style="color: #3090C7;" class="nav-link l" href="branch.php">Branch</a>
                    </li>
                    <li class="nav-item">
                        <a style="color: #3090C7;" class="nav-link l" href="about.php">About Us</a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <?php
                    if ($_SESSION['user']) { ?>
                        <li class="nav-item">
                            <a style="color: #3090C7;" class="nav-link l" href="logout.php">Log Out</a>
                        </li>
                    <?php
                    } else { ?>
                        <li class="nav-item">
                            <a style="color: #3090C7;" class="nav-link l" href="Login.php">Log in</a>
                        </li>
                    <?php
                    } ?>
                </ul>
            </div>
        </nav>