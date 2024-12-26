@extends('layouts.app02')

@section('title')
    Institut des Métiers du Numérique (IMeN) | Formations continues - GRAPHISME
@endsection

@section('content')
    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg_fcont">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                            <h2>GRAPHISME</h2>
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
                        <img class="img-fluid" src="img/formations/graphisme.avif" alt="">
                    </div>
                    <div class="content_wrapper">
                        <h4 class="title_top">PRESENTATION</h4>
                        <div class="content">
                            Cette formation s’adapte aux adultes en quête d’emploi ou de nouvelles compétences, en reconversion professionnelle et aux cadres qui souhaitent approfondir leurs connaissances dans le domaine du Design Graphique et décrocher un certificat. La formation en Graphisme initie les participants aux bases de la conception visuelle et aux outils nécessaires pour créer des supports graphiques impactant. Elle aborde les principes fondamentaux du design, la théorie des couleurs, la typographie, et la composition visuelle. Les participants apprendront à utiliser les logiciels de création graphique pour concevoir des logos, affiches, bannières et autres supports de communication. Elle permet d’acquérir les armes nécessaires en termes de compétences, d’aptitudes et de méthodologie de travail pour vous rendre opérationnel en 03 mois de formation continue en cours du soir.
                        </div>

                        <h4 class="title">Objectifs de la formation</h4>
                        <div class="content">
                            <ul>
                                <li> Maîtriser les bases de la maintenance préventive et corrective Comprendre les bases du graphisme et les principes de la communication visuelle.</li>
                                <li>Maîtriser l’utilisation des logiciels de conception graphique (Photoshop, Illustrator, etc.).</li>
                                <li>Apprendre à structurer des compositions harmonieuses et adaptées aux différents types de supports.</li>
                                <li>Découvrir les bonnes pratiques en matière de choix de couleurs, de typographie et d’illustrations.</li>
                            </ul>
                        </div>

                        <h4 class="title">Débouchés et Compétences Acquises</h4>
                        <div class="content">
                        À l’issue de la formation, les participants seront en mesure de :
	Concevoir des supports graphiques simples et professionnels.
;	Utiliser les outils et fonctionnalités de base des logiciels de graphisme.
;	Créer des visuels attrayants pour des applications variées (print, web, réseaux sociaux).
;	Savoir adapter les créations graphiques aux besoins spécifiques de chaque projet.

                        </div>

                        <h4 class="title">Public cible</h4>
                        <div class="content">
                            Cette formation s'adresse aux débutants souhaitant acquérir des compétences de base en graphisme, aux professionnels souhaitant enrichir leur profil, ainsi qu’aux créateurs de contenu et entrepreneurs ayant besoin de supports graphiques.
                        </div>

                        <h4 class="title">Matériel requis</h4>
                        <div class="content">
                        	Ordinateur : Suffisamment puissant pour faire tourner les logiciels de graphisme.
;	Logiciels de graphisme : Adobe Photoshop, Illustrator, ou des alternatives comme Canva pour les créations de base.
;	Tablette graphique (facultatif) : Pour ceux souhaitant approfondir le dessin numérique.

                        <br><br>
                        Cette formation en graphisme permet de développer rapidement des compétences créatives et techniques, essentielles pour produire des visuels de qualité, adaptés aux besoins actuels du marché.
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