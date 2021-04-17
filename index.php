<!DOCTYPE html>
<html lang="en">

<head>
    <!-- <title>Find Your Favorite Gym!</title> -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="Front-files/imgs/gym_cover_photo.jpg" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="Front-files/assets/css/bootstrap.css">

    <!-- Font-Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- User defined CSS -->
    <link rel="stylesheet" href="Front-files\user-defined-style.css">
</head>


<nav class="topnav fixed-top" id="top-nav">
            <a href="index.php?page=home"><i class="fa fa-home"></i>  Home</a>
            <!-- <a href="index.php?page=about-us"><i class="fa fa-info"></i>  About Us</a> -->
            <!-- <a href="index.php?page=contact-us"><i class="fa fa-phone"></i>  Contact Us</a> -->
            <a href="index.php?page=gym">Gym</a>
            <a href="index.php?page=my-activities"><i class="fa fa-tasks"></i>  My Activities</a>
            <a href="index.php?page=my-account" class="float-sm-right"><i class="fa fa-user">  My Account</a>
            <!-- <li> <a href="home.html">Home</a></li> -->
</nav>

<body>
    <article>
        <main role="main" class="container-fluid">
            <?php
            if (isset($_GET['page'])) {
                $page = $_GET['page'];
                if ($page == 'about-us') {
                    include 'Front-files/about-us.html';
                } elseif ($page == 'contact-us') {
                    include 'Front-files/contact-us.html';
                } elseif ($page == 'gym') {
                    include 'Front-files/gym.html';
                } elseif ($page == 'gym-view') {
                    include 'Front-files/gymview.html';
                } elseif ($page == 'book') {
                    include 'Front-files/book.html';
                } elseif ($page == 'my-activities') {
                    include 'Front-files/my-activities.html';
                } elseif ($page == 'my-account') {
                    include 'Front-files/my-account.html';
                } else {
                    include 'Front-files\home.html';
                }
            } else {
                include 'Front-files/home.html';
            }
            ?>

        </main>

        <div>
            <!-- Top Gyms will appear here -->
        </div>
    </article>

    <br>

    <hr>

    <!-- User defined JS -->
    <!-- <script src="Front-files\user-defined-style.css"></script> -->

</body>

</html>
