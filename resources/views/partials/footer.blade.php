    <!-- footer part start-->
    <footer class="footer-area">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-sm-6 col-md-4 col-xl-3">
                    <div class="single-footer-widget footer_1">
                        <a href="{{ route('accueil') }}"> <img src="img/footer_logo_imen_noir.png" alt=""> </a>
                        <!-- <p>But when shot real her. Chamber her one visite removal six
                            sending himself boys scot exquisite existend an </p> -->
                        <!-- <p>Premiere école d'expertise numérique </p> -->
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-xl-4">
                    <div class="single-footer-widget footer_2">
                        <h4>Newsletter</h4>
                        <!-- <p>Stay updated with our latest trends Seed heaven so said place winged over given forth fruit.
                        </p> -->
                        <p>Restez en contact avec nous.</p>
                        <form action="#">
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder='Enter email address'
                                        onfocus="this.placeholder = ''"
                                        onblur="this.placeholder = 'Enter email address'">
                                    <div class="input-group-append">
                                        <button class="btn btn_1" type="button"><i class="ti-angle-right"></i></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="social_icon">
                            <a target="_blank" href="https://www.facebook.com/imenbeninofficiel?mibextid=ZbWKwL"> <i class="ti-facebook"></i> </a>
                            <a target="_blank" href="https://www.linkedin.com/company/institut-des-m%C3%A9tiers-dunum%C3%A9rique/"> <i class="ti-twitter-alt"></i> </a>
                            <a target="_blank" href="https://www.imen.school/instagram.com/imenbeninofficiel"> <i class="ti-instagram"></i> </a>
                            <a target="_blank" href="https://x.com/imenbenin?t=4GfOvmZc7HpoAwaNDBdKww&s=09"> <i class="ti-linkedin"></i> </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-md-4">
                    <div class="single-footer-widget footer_2">
                        <h4>Contactez-nous</h4>
                        <div class="contact_info">
                            <p><span> Address : </span>Bénin, Abomey-Calavi, Parana </p>
                            <p><span> Phone  :</span> +229 01 95 92 23 45</p>
                            <p><span> Email : </span>info@imen.school </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="copyright_part_text text-center">
                        <div class="row">
                            <div class="col-lg-12">
                                <p class="footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright IMeN &copy; <script>document.write(new Date().getFullYear());</script> | All rights reserved
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer part end-->

    <!-- jquery plugins here-->
    <!-- jquery -->
    <script src="js/jquery-1.12.1.min.js"></script>
    <!-- popper js -->
    <script src="js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- easing js -->
    <script src="js/jquery.magnific-popup.js"></script>
    <!-- swiper js -->
    <script src="js/swiper.min.js"></script>
    <!-- swiper js -->
    <script src="js/masonry.pkgd.js"></script>
    <!-- particles js -->
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <!-- swiper js -->
    <script src="js/slick.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <!-- custom js -->
    <script src="js/custom.js"></script>

    @if(Route::is('accueil'))
        <!-- <script>
            $(document).ready(function () {
                // Activer le pop-up automatiquement
                $.magnificPopup.open({
                items: {
                    src: '#popup-content' // ID du contenu à afficher
                },
                type: 'inline', // Type de contenu
                closeBtnInside: false, // Désactiver le bouton de fermeture intégré
                modal: true // Empêcher la fermeture sans action utilisateur
                });

                // Fermer le pop-up via le bouton "Fermer"
                $(document).on('click', '.popup-close-button', function () {
                $.magnificPopup.close();
                });
            });
        </script> -->

        <!-- Cookies qui s'expire dans 7 Jours  -->
         <script>
            // Fonction pour créer un cookie
            function setCookie(name, value, days) {
                var expires = "";
                if (days) {
                    var date = new Date();
                    date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
                    expires = "; expires=" + date.toUTCString();
                }
                document.cookie = name + "=" + (value || "") + expires + "; path=/";
            }

            // Fonction pour récupérer un cookie
            function getCookie(name) {
                var nameEQ = name + "=";
                var ca = document.cookie.split(';');
                for (var i = 0; i < ca.length; i++) {
                    var c = ca[i];
                    while (c.charAt(0) == ' ') c = c.substring(1, c.length);
                    if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
                }
                return null;
            }

            $(document).ready(function () {
                // Vérifie si le cookie "popupDisplayed" existe
                if (!getCookie('popupDisplayed')) {
                    // Affiche le pop-up si le cookie n'existe pas
                    $.magnificPopup.open({
                        items: {
                            src: '#popup-content',
                        },
                        type: 'inline',
                        closeBtnInside: true,
                        modal: true
                    });

                    // Ferme le pop-up sur clic du bouton "Fermer"
                    $(document).on('click', '.popup-close-button', function () {
                        $.magnificPopup.close();
                    });

                    // Crée le cookie pour enregistrer que le pop-up a été affiché
                    setCookie('popupDisplayed', 'true', 7); // Expire dans 7 jours
                }
            });
        </script>
    @endif