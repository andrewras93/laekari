<!DOCTYPE html>

<html lang="da">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>L'æKARi</title>

    <link href="css/styles.css" rel="stylesheet" type="text/css">    

</head>

<body>

    <?php include "header.php"; ?>

    <div id="front-page-jumbotron" class="d-flex justify-content-center align-items-center text-center">

        <div class="jumbotron container">

            <h1 class="display-1">Velkommen hos L’æKARi</h1>

            <p class="lead">Smag vores lækre hjemmelavet donuts eller få din helt egen
                kage på bestilling, hos din lokale konditor i Slagelse.</p>

            <div class="mt-3">
                <a class="btn btn-light text-uppercase rounded-0 mt-1" href="bestilling.php">Bestilling</a>
                <a class="btn btn-border text-uppercase rounded-0 mt-1" href="donuts.php">Se Udvalg</a>
            </div>

        </div>

    </div>

    <div class="bg-gradient">
        <div class="container">

            <div id="cards-section" class="pt-5 pb-5">

                <h3 class="text-center">L’æKARi</h3>
                <h2 class="display-1 text-uppercase text-center">Noget til enhver lejlighed</h2>

                <p class="lead text-center me-auto ms-auto mt-5">Hver dag er en fest og vi står klar til at hjælpe dig med at fejre livets store såvel som små glæder, med noget lækkert til ganen.</p>

                <div class="row mt-5">

                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="card rounded-0">

                            <div class="card-body p-0">

                                <img src="images/card-donuts.png" alt="Donuts" class="img-fluid">

                                <div class="card-content pe-3 ps-3 pt-3">
                                    <h4 class="card-title text-uppercase">Billige Donuts</h4>
                                    <p>Lad os pirrer dine smagsløg med vores unikke og hjemmelavet donuts, bagt med ekstra meget kærlighed og med respekt for det gamle bagerhåndværk. Hos L’æKARi har vi nogle af de bedste donuts i Slagelse, til overkommelige priser.</p>
                                </div>

                            </div>

                            <div class="card-footer rounded-0 border-0 pb-3 pt-0">
                                <a href="donuts.php" class="btn btn-secondary border-0 rounded-0 text-uppercase">Se Donuts</a>
                            </div>

                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4 col-lg-3 mt-4 mt-sm-0">
                        <div class="card rounded-0">

                            <div class="card-body p-0">

                                <img src="images/card-party-cakes.png" alt="Festkage" class="img-fluid">

                                <div class="card-content pe-3 ps-3 pt-3">
                                    <h4 class="card-title text-uppercase">Festkager</h4>
                                    <p>Vi bager den perfekte kage til netop din store fest, om det er bryllup, babyshower, fødselsdag eller et andet festligt arrangement, så kan du trygt regne med at vi leverer en kage som afspejler det ønskede tema.</p>
                                </div>

                            </div>

                            <div class="card-footer rounded-0 border-0 pb-3 pt-0">
                                <a href="bestilling.php" class="btn btn-secondary border-0 rounded-0 text-uppercase">Se Festkager</a>
                            </div>

                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4 col-lg-3 mt-4 mt-sm-5 mt-md-0">
                        <div class="card rounded-0">

                            <div class="card-body p-0">

                                <img src="images/card-order-cake.png" alt="Bryllupskage" class="img-fluid">

                                <div class="card-content pe-3 ps-3 pt-3">
                                    <h4 class="card-title text-uppercase">Kage Bestilling</h4>
                                    <p>Med vores online bestillingsformular kan du nemt og hurtigt bestille en kage eller lækre donuts til den søde tand, og afhente i butikken samme dag eller på et senere tidspunkt, alt efter aftale.</p>
                                </div>

                            </div>

                            <div class="card-footer rounded-0 border-0 pb-3 pt-0">
                                <a href="bestilling.php" class="btn btn-secondary border-0 rounded-0 text-uppercase">Bestil Kage</a>
                            </div>

                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4 col-lg-3 mt-4 mt-sm-5 mt-lg-0">
                        <div class="card rounded-0">

                            <div class="card-body p-0">

                                <img src="images/card-about.png" alt="L'æKARi skranke" class="img-fluid">

                                <div class="card-content pe-3 ps-3 pt-3">
                                    <h4 class="card-title text-uppercase">OM L’æKARi</h4>
                                    <p>Vi gør en dyd ud af at leverer et godt stykke bagerhåndværk, og med vores hjemmelavet donuts er vi kundens foretrukne donut butik i Slagelse. Hos os er kundetilfredshed første prioritet og du vil derfor altid blive mødt med et smil på læben når du træder ind i vores butik.</p>
                                </div>

                            </div>

                            <div class="card-footer rounded-0 border-0 pb-3 pt-0">
                                <a href="om-laekari.php" class="btn btn-secondary border-0 rounded-0 text-uppercase">Læs Mere</a>
                            </div>

                        </div>
                    </div>

                </div>

            </div>

        </div>
    </div>

    <script src="js/script.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
</body>

</html>