@extends('layouts.app02')

@section('title')
    Institut des Métiers du Numérique (IMeN) | Formations continues - ANALYSE DES DONNEES
@endsection

@section('content')
    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg_fcont">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                            <h2>ANALYSE DES DONNEES</h2>
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
                        <img class="img-fluid" src="img/formations/data.avif" alt="">
                    </div>
                    <div class="content_wrapper">
                        <h4 class="title_top">PRESENTATION</h4>
                        <div class="content">
                        Cette formation est destinée aux personnes en quête d’emploi, en situation de transition professionnelle, aux adultes qui souhaitent approfondir leurs connaissances dans le domaine de l’Analyse des Données et obtenir un certificat.  L'Analyse des Données est également un domaine essentiel pour les entreprises et les organisations souhaitant exploiter de manière efficace leurs informations et orienter leurs prises de décision. Cette formation en analyse des données couvre les fondamentaux de la collecte, de l'interprétation et de la visualisation des données pour en tirer des conclusions exploitables. Les participants apprendront à utiliser des outils et des méthodes statistiques, tout en découvrant comment transformer des données brutes en informations utiles. Elle permet d’acquérir les armes nécessaires en termes de compétences, d’aptitudes et de méthodologie de travail pour vous rendre opérationnel en 03 mois de formation continue en cours du soir.
                        </div>

                        <h4 class="title">Objectifs de la formation</h4>
                        <div class="content">
                            <ul>
                                <li>Comprendre les principes de base de l'analyse des données.</li>
                                <li>Maîtriser les techniques de collecte, nettoyage et préparation des données.</li>
                                <li>Découvrir les outils d'analyse de données couramment utilisés (Excel, Power BI, Python, ou R).</li>
                                <li>Apprendre à interpréter les résultats et à les communiquer de manière claire et visuelle.</li>
                            </ul>
                        </div>

                        <h4 class="title">Débouchés et Compétences Acquises</h4>
                        <div class="content">
                        À l’issue de la formation, les participants seront en mesure de :
	Réaliser des analyses de données simples et interpréter les résultats pour répondre à des problématiques spécifiques.
;	Utiliser des outils de visualisation de données pour créer des graphiques et des tableaux de bord.
;	Contribuer à des projets d'analyse de données dans des secteurs variés (marketing, finance, RH, etc.).
                        </div>

                        <h4 class="title">Public cible</h4>
                        <div class="content">
                            Cette formation s'adresse aux professionnels souhaitant développer leurs compétences en analyse de données, ainsi qu'aux étudiants ou aux individus en reconversion qui souhaitent acquérir des connaissances de base dans ce domaine.
                        </div>

                        <h4 class="title">Matériel requis</h4>
                        <div class="content">
                        	Ordinateur : Pour accéder aux logiciels d’analyse.
;	Logiciels de traitement de données : Excel, Power BI, ou un langage de programmation comme Python ou R (selon le programme de formation).
<br><br>
Cette formation courte et pratique permet d’acquérir des compétences essentielles en analyse des données, utiles pour une multitude de fonctions professionnelles.
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