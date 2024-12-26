@extends('layouts.app02')

@section('title')
    Institut des Métiers du Numérique (IMeN) | Formations continues - WEB DESIGN
@endsection

@section('content')
    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg_fcont">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                            <h2> WEB DESIGN</h2>
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
                        <img class="img-fluid" src="img/formations/webdesign.avif" alt="">
                    </div>
                    <div class="content_wrapper">
                        <h4 class="title_top">PRESENTATION</h4>
                        <div class="content">
                            Cette formation s’adapte aux adultes en quête d’emploi ou de nouvelles compétences, en reconversion professionnelle et aux cadres qui souhaitent approfondir leurs connaissances dans le domaine du Web Design et décrocher un certificat. La formation en Web Design permet aux participants d'acquérir les compétences nécessaires pour concevoir des interfaces de sites web esthétiques, intuitives et adaptées aux utilisateurs. Elle aborde les fondamentaux de l’ergonomie, du design d'interface (UI) et de l'expérience utilisateur (UX). Les participants apprendront à utiliser des outils de conception pour créer des maquettes visuelles de sites web et maîtriseront les bases de la conception responsive, adaptée aux différents écrans. Elle permet d’acquérir les armes nécessaires en termes de compétences, d’aptitudes et de méthodologie de travail pour vous rendre opérationnel en 03 mois de formation continue en cours du soir.
                        </div>

                        <h4 class="title">Objectifs de la formation</h4>
                        <div class="content">
                            <ul>
                                <li>Comprendre les principes de base du Web Design et de l’ergonomie des interfaces.</li>
                                <li>Maîtriser l’utilisation d’outils de création de maquettes (Adobe XD, Figma).</li>
                                <li>Apprendre à concevoir des interfaces visuellement harmonieuses et fonctionnelles.</li>
                                <li>Découvrir les bases de la conception responsive pour adapter les sites aux appareils mobiles et tablettes.</li>
                            </ul>
                        </div>

                        <h4 class="title">Débouchés et Compétences Acquises</h4>
                        <div class="content">
                            Découvrir les bases de la conception responsive pour adapter les sites aux appareils mobiles et tablettes.
                        </div>

                        <h4 class="title">Public cible</h4>
                        <div class="content">
                            Cette formation s'adresse aux débutants intéressés par la conception de sites web, aux designers souhaitant se spécialiser dans le web, et aux professionnels de la communication et du marketing digital.
                        </div>

                        <h4 class="title">Matériel requis</h4>
                        <div class="content">
                        	Ordinateur : Suffisamment puissant pour exécuter des logiciels de design. ;	Logiciels de Web Design : Adobe XD, Figma ou Sketch pour les utilisateurs Mac.
                        <br><br>
                        Cette formation en Web Design offre les compétences essentielles pour créer des interfaces web modernes et fonctionnelles, en tenant compte de l'expérience utilisateur et des tendances actuelles du design digital.
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