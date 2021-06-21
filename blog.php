<!DOCTYPE html>

<html lang="da">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>L'æKARi | Blog</title>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet" type="text/css">

</head>

<body>

<?php include "header.php"; ?>
<?php include "social-icons.php" ?>
<?php include "chat-box.php" ?>

<div id="blog-hero" class="d-flex justify-content-center align-items-center">
    <div class="hero-overlay"></div>
    <div class="container">
        <h1 class="display-1 text-center">Her kan du finde en oversigt over vores seneste blog indlæg</h1>
    </div>
</div>

<div id="blog-posts" class="bg-gradient pt-5 pb-5">
    <div class="container">
        <div class="section-headings text-center">
            <h3>Hver kage har en god fortælling</h3>
            <h2 class="display-1 text-uppercase">Vi deler fortællingen med dig</h2>
            <p class="lead mt-5">Klik ind og læs vores seneste blog posts</p>
        </div>
        <div id="blog-posts-overview" class="row pt-5 pb-5">
            <div class="mt-4 col-md-6 col-lg-4">
                <a href="blog-post.php" class="card bg-dark text-white border-light border-2 rounded-0">
                    <img src="images/blog-post-image.png" class="card-img" alt="En kage lavet ud fra en tegning">
                    <div class="card-img-overlay">
                        <h5 class="card-title">Fødselsdagsfesten gjort ekstra speciel</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur corporis deleniti doloremque fugiat magnam quo saepe sed similique tempore velit.</p>
                        <p class="card-text fw-bold">Tilføjet: 16/06/2021</p>
                    </div>
                </a>
            </div>
            <div class="mt-4 col-md-6 col-lg-4">
                <a href="" class="card bg-dark text-white border-light border-2 rounded-0">
                    <img src="images/blog-post-image-2.png" class="card-img" alt="Holder med fingerspidserne om en mini donut">
                    <div class="card-img-overlay">
                        <h5 class="card-title">Hver en krumme tæller</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad distinctio maxime nihil quasi totam! Consequuntur doloremque eum labore quaerat quos.</p>
                        <p class="card-text fw-bold">Tilføjet: 13/05/2021</p>
                    </div>
                </a>
            </div>
            <div class="mt-4 col-md-6 col-lg-4">
                <a href="" class="card bg-dark text-white border-light border-2 rounded-0">
                    <img src="images/blog-post-image-3.png" class="card-img" alt="L'æKARi butiksfacade">
                    <div class="card-img-overlay">
                        <h5 class="card-title">Vores fortælling</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis deleniti dolorum excepturi facilis id placeat provident quidem quisquam ut veritatis.</p>
                        <p class="card-text fw-bold">Tilføjet: 03/04/2021</p>
                    </div>
                </a>
            </div>
            <div class="mt-4 col-md-6 col-lg-4">
                <a href="" class="card bg-dark text-white border-light border-2 rounded-0">
                    <img src="images/blog-post-image-4.png" class="card-img" alt="Hjerteformet donuts sammen med buket blomster">
                    <div class="card-img-overlay">
                        <h5 class="card-title">Vi elsker valentinsdag</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi corporis cum impedit ipsam, modi officia pariatur quibusdam quisquam repellat ut!</p>
                        <p class="card-text fw-bold">Tilføjet: 07/02/2021</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>

<?php include "footer.php"; ?>

<script src="js/script.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>

</html>
