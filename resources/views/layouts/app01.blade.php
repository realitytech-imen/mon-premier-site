<!doctype html>
<html lang="fr">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> @yield('title') </title>
    <link rel="icon" href="img/favicon.ico">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- themify CSS -->
    <link rel="stylesheet" href="css/themify-icons.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="css/flaticon.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="css/slick.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Font awesome Icons  -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <!-- Montserrat Font  -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">

    @if(Route::is('accueil'))
        <style>
            /* Style général du pop-up */
            #popup-content {
            background: #fff;
            padding: 20px;
            text-align: center;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
            max-width: 400px;
            margin: auto;
            }

            #popup-content h2 {
            margin-top: 0;
            font-size: 24px;
            }

            #popup-content p {
            margin: 15px 0;
            font-size: 16px;
            }

            /* Style des boutons */
            .popup-button,
            .popup-close-button {
            display: inline-block;
            padding: 10px 20px;
            margin: 10px;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            font-size: 16px;
            cursor: pointer;
            }

            .popup-button {
            background-color: #007bff;
            color: #fff;
            }

            .popup-close-button {
            background-color: #dc3545;
            color: #fff;
            }

            .popup-button:hover {
            background-color: #fda711;
            color: #000;
            }

            .popup-close-button:hover {
            background-color: #a71d2a;
            }

        </style>
    @endif
</head>

<body>
    @if(Route::is('accueil'))
        <!-- Contenu du pop-up -->
        <div id="popup-content" class="mfp-hide">
            <h2>Bienvenue !</h2>
            <p>Notre plateforme est toujours en cours de construction.</p>
            <!-- <p>Vous pouvez néanmoins visité pour avoir les informatique clés</p> -->
            <div style="margin-top: 20px;">
                <a href="/doc/IMeN_MODALITES_PAYEMENT.png" class="popup-button" target="_blank">Télécharger la brochure</a>
                <button class="popup-close-button">Fermer</button>
            </div>
        </div>
    @endif

    @include('partials.header01')

    <div>
        @yield('content')
    </div>

    @include('partials.footer')
</body>
</html>