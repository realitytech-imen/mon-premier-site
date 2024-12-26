@extends('layouts.app02')

@section('title')
    Institut des Métiers du Numérique (IMeN) | Formations continues - DEVELOPPEMENT WEB
@endsection

@section('content')
    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg_fcont">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                            <h2>DEVELOPPEMENT WEB</h2>
                            <!-- <p>Home<span>/</span>Course Details</p> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->

    <!--================ Start Course Details Area =================-->
    <section class="course_details_area section_paddings">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 course_details_left">
                    <div class="main_image">
                        <img class="img-fluid" src="img/formations/devweb.jpg" alt="">
                    </div>
                    <div class="content_wrapper">
                        <h4 class="title_top">PRESENTATION</h4>
                        <div class="content">
                            Cette formation est destinée aux personnes en quête d’emploi, en situation de transition professionnelle, aux adultes qui souhaitent approfondir leurs connaissances dans le domaine du développement web et obtenir un certificat. La formation en Développement Web initie les participants aux concepts et outils fondamentaux pour créer et gérer des sites web. Elle couvre les langages de programmation essentiels (HTML, CSS, et JavaScript), les bonnes pratiques de conception web, ainsi que des bases en développement front-end et back-end. Les participants apprendront à concevoir des sites web interactifs et responsifs, adaptés aux besoins actuels du numérique. Elle permet d’acquérir les armes nécessaires en termes de compétences, d’aptitudes et de méthodologie de travail pour vous rendre opérationnel en 03 mois de formation continue en cours du soir.
                        </div>

                        <h4 class="title">Objectifs de la formation</h4>
                        <div class="content">
                            <ul>
                                <li>Acquérir une compréhension des langages de base du développement web (HTML, CSS, JavaScript).</li>
                                <li>Apprendre à structurer, styliser et dynamiser des pages web.</li>
                                <li>Découvrir les principes du développement front-end et une introduction au back-end.</li>
                                <li>Savoir utiliser des outils de développement web courants (éditeur de code, navigateur pour le test, etc.).</li>
                            </ul>
                        </div>

                        <h4 class="title">Débouchés et Compétences Acquises</h4>
                        <div class="content">
                        À l’issue de la formation, les participants seront en mesure de :
	Créer des pages web statiques et dynamiques.
;	Comprendre les bases de la création de sites web responsifs, adaptés aux différents types d’appareils.
;	Utiliser des outils de développement web pour tester et déboguer leur code.
;	Appliquer les principes de base du développement front-end et être initiés au développement back-end.
                        </div>

                        <h4 class="title">Public cible</h4>
                        <div class="content">
                             Cette formation s'adresse aux débutants souhaitant s'initier au développement web, aux professionnels souhaitant ajouter des compétences techniques à leur profil, ainsi qu'aux personnes en reconversion intéressées par une première immersion dans le domaine du web.
                        </div>

                        <h4 class="title">Matériel requis</h4>
                        <div class="content">
                        	Ordinateur : Pour la pratique du codage et l'utilisation d'outils de développement.
;	Éditeur de code : Logiciels comme Visual Studio Code, Sublime Text ou Atom.
;	Navigateurs web : Pour tester et visualiser les projets. <br><br>
Cette formation courte en développement web offre des compétences de base qui permettent aux participants de créer leurs premières pages et de comprendre les aspects techniques essentiels pour évoluer dans le domaine.
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 right-contents">
                    <div class="sidebar_top">
                        <ul>
                            <li>
                                <a class="justify-content-between d-flex" href="">
                                    <p class="color">Durée de la formation : </p>
                                    <span class="color">03 MOIS</span>
                                </a>
                            </li>
                            <li>
                                <a class="justify-content-between d-flex" href="">
                                    <p class="color">Scolarité : </p>
                                    <span class="color">280 000 FCFA</span>
                                </a>
                            </li>
                            <li>
                                <a class="justify-content-between d-flex" href="">
                                    <p class="color">Prochaine Rentrée : </p>
                                    <span class="color">24 Février 2025</span>
                                </a>
                            </li>

                        </ul>
                        <a href="{{ route('inscription_etudiant') }}" class="btn_1 d-block">Devenir Etudiant </a>
                        <a href="/doc/IMeN_MODALITES_PAYEMENT.png" class="btn_1 d-block">Téléchargez les modalités</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ End Course Details Area =================-->
@endsection