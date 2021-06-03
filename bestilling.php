<!DOCTYPE html>

<html lang="da">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>L'æKARi | Bestilling</title>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet" type="text/css">

</head>

<body>

    <?php include "header.php"; ?>

    <div id="order-hero" class="d-flex justify-content-center align-items-center text-center">

        <div class="container">

            <h1 class="display-1 m-auto">Bestil en personlig lavet kage til dit næste festlige arrangement, eller nogle af vores lækre donuts, som kan afhentes direkte i butikken</h1>

        </div>

    </div>

    <div id="order-info" class="bg-gradient">

        <div class="container pt-5 pb-5">

            <div class="row align-items-center">

                <div class="col-lg-6 text-center">
                    <img src="images/order-donuts.png" alt="Lyserøde donuts" class="img-fluid">
                </div>

                <div class="col-lg-6 mt-5 mt-lg-0">

                    <h2 class="display-1 mb-4 text-secondary">HJEMMELAVET FRA HJERTET</h2>

                    <p>
                        Hos L’æKARi bager vi med passion og kærlighed for det traditionelle bagerhåndværk.<br>
                        Ved hjælp af vores bestillingsformular kan du bestille din helt egen personlige kage, der afspejler lige netop det tema du ønsker at fejre. Om det er en mindre fødselsdag, eller et større bryllup, så kan du være sikker på at vi leverer varen.
                    </p>
                    <p>
                        Udfyld formularen eller kontakt os via. telefon/mail, så sørger vi for at få lavet den helt perfekte kage til dig. Du er også altid velkommen til at komme forbi butikken og få en snak.
                    </p>
                </div>

            </div>

        </div>

    </div>

    <div id="order-form" class="bg-dark">

        <div class="container pt-5 pb-5">

            <h3 class="text-center">Vi er klar til at skabe den perfekte kage for dig</h3>
            <h2 class="display-1 text-uppercase text-center">Bestil nemt og hurtigt her</h2>

            <p class="lead text-center me-auto ms-auto mt-5">Udfyld formularen og beskriv bedst muligt hvilke ønsker og kriterier du har til kagen</p>

            <div class="row mt-5 pt-lg-5">

                <div class="col-lg-6">

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" disabled>
                        <label class="form-check-label" for="inlineRadio1">Bestil donuts</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2" checked>
                        <label class="form-check-label" for="inlineRadio2">Bestil personlig kage</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3" disabled>
                        <label class="form-check-label" for="inlineRadio3">Bestil begge</label>
                    </div>

                    <form class="row g-3 mt-3 mt-lg-5">

                        <div class="col-md-6">
                            <label for="inputName" class="form-label text-uppercase">Navn: *</label>
                            <input type="text" class="form-control" id="inputName" placeholder="Indtast Navn">
                        </div>

                        <div class="col-md-6">
                            <label for="inputEmail" class="form-label text-uppercase">Email: *</label>
                            <input type="email" class="form-control" id="inputEmail" placeholder="Indtast Email">
                        </div>

                        <div class="col-md-6">
                            <label for="inputPhone" class="form-label text-uppercase">Tlf. nummer:</label>
                            <input type="number" class="form-control" id="inputPhone" placeholder="Indtast Telefonnummer">
                        </div>

                        <div class="col-md-6">
                            <label for="inputGuests" class="form-label text-uppercase">Antal Gæster: *</label>
                            <input type="number" class="form-control" id="inputGuests" placeholder="10">
                        </div>

                        <div class="mb-3">
                            <label for="inputDescription" class="form-label text-uppercase">Beskrivelse: *</label>
                            <textarea class="form-control" id="inputDescription" rows="3" placeholder="Beskriv så detaljeret som muligt dine ønsker"></textarea>
                        </div>

                        <div class="col-12">
                            <button id="submitCakeOrder" type="submit" class="btn btn-secondary border-0 rounded-0 text-uppercase">Send Bestilling</button>
                        </div>
                        <div id="cakeOrderErrorMessage" class="text-danger mt-3 hide">
                            <strong>Udfyld venligst alle felter markeret med *</strong>
                        </div>

                    </form>

                </div>

                <div class="col-lg-6 d-lg-flex flex-row-reverse mt-5 mt-lg-0 text-center">

                    <img src="images/festive-cake.png" alt="Festkage" class="img-fluid">

                </div>

            </div>

        </div>

    </div>

    <div id="order-page-parallax-image"></div>

    <?php include "footer.php"; ?>

    <script src="js/script.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>

</html>