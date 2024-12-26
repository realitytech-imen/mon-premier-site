    <!--::header part start::-->
    <header class="main_menu single_page_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand logo_1" href="{{ route('accueil') }}"> <img src="img/logo_imen_blanc.png" alt="logo"> </a>
                        <a class="navbar-brand logo_2" href="{{ route('accueil') }}"> <img src="img/logo_imen.png" alt="logo"> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item justify-content-end"
                            id="navbarSupportedContent">
                            <ul class="navbar-nav align-items-center">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('accueil') }}">ACCUEIL</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        DECOUVRIR IMeN
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('decouvrir_ecole') }}">L'école</a>
                                        <a class="dropdown-item" href="{{ route('decouvrir_vision') }}">Notre vision</a>
                                        <a class="dropdown-item" href="{{ route('decouvrir_reseau') }}">Notre réseau</a>
                                        <a class="dropdown-item" href="{{ route('decouvrir_certif') }}">Le parcours de certification</a>
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        NOS FORMATIONS
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('pole_num') }}">Département Numérique</a>
                                        <a class="dropdown-item" href="{{ route('pole_design') }}">Département Design</a>
                                        <a class="dropdown-item" href="{{ route('pole_audio') }}">Département Audiovisuel</a>
                                        <a class="dropdown-item" href="{{ route('formations_continues') }}">Formations Continues</a>
                                        <a class="dropdown-item" href="{{ route('workshops') }}">Workshops & Ateliers</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('nos_programmes') }}">NOS PROGRAMMES</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        ACTUALITES
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('blog') }}">Blog</a>
                                        <a class="dropdown-item" href="#">Événements</a>
                                        <a class="dropdown-item" href="#">Recrutements</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('contact') }}">CONTACT</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('portfolio_etudants') }}">PORTFOLIO ETUDIANTS </a>
                                </li>
                                <!-- <li class="d-none d-lg-block">
                                    <a class="btn_1" href="#">Portfolio Etudiants</a>
                                </li> -->
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header part end-->