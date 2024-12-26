@extends('layouts.app02')

@section('title')
    Institut des Métiers du Numérique (IMeN) | Formations continues - MONTAGE VIDEO
@endsection

@section('content')
    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg_fcont">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                            <h2>MONTAGE VIDEO</h2>
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
                        <img class="img-fluid" src="img/formations/cadrage.avif" alt="">
                    </div>
                    <div class="content_wrapper">
                        <h4 class="title_top">PRESENTATION</h4>
                        <div class="content">
                            Cette formation est destinée aux personnes en quête d’emploi, en situation de transition professionnelle, aux adultes qui souhaitent approfondir leurs connaissances dans le domaine de la Maintenance Informatique et obtenir un certificat.  La formation en Montage Vidéo permet aux participants d’acquérir les compétences de base pour réaliser des vidéos professionnelles. Elle couvre les principes du montage, la gestion des séquences, l'ajout d'effets visuels et sonores, et l'exportation de projets finalisés. Les participants apprendront à manipuler les outils de montage, à structurer des récits visuels et à intégrer des effets et transitions pour des vidéos dynamiques et captivantes. Elle permet d’acquérir les armes nécessaires en termes de compétences, d’aptitudes et de méthodologie de travail pour vous rendre opérationnel en 03 mois de formation continue en cours du soir.
                        </div>

                        <h4 class="title">Objectifs de la formation</h4>
                        <div class="content">
                            <ul>
                                <li>Maîtriser les bases du montage vidéo et de la narration visuelle.</li>
                                <li>Apprendre à utiliser un logiciel de montage pour assembler, couper et ajuster des séquences.</li>
                                <li>Découvrir les techniques d'ajout d'effets, de transitions, et de bande sonore.</li>
                                <li>Comprendre les étapes d'exportation et de préparation d’un projet pour différentes plateformes.</li>
                            </ul>
                        </div>

                        <h4 class="title">Débouchés et Compétences Acquises</h4>
                        <div class="content">
                        À l’issue de la formation, les participants seront en mesure de :
	Réaliser des montages vidéo simples pour des projets personnels ou professionnels.
;	Utiliser un logiciel de montage pour manipuler les séquences vidéo, audio et visuelles.
;	Appliquer des effets visuels de base et ajouter une bande sonore adaptée.
;	Exporter des vidéos optimisées pour divers supports (réseaux sociaux, plateformes de streaming, présentations).
                        </div>

                        <h4 class="title">Public cible</h4>
                        <div class="content">
                             Cette formation s'adresse aux débutants souhaitant acquérir des compétences de base en maintenance informatique, aux techniciens débutants en informatique, ainsi qu’aux professionnels d’autres domaines souhaitant se former à la gestion des équipements informatiques.
                        </div>

                        <h4 class="title">Matériel requis</h4>
                        <div class="content">
                        	Ordinateur performant : Pour exécuter les logiciels de montage vidéo sans ralentissement.
;	Logiciel de montage : Adobe Premiere Pro, Final Cut Pro, ou DaVinci Resolve.
;	Casque audio (facultatif) : Pour affiner la bande sonore et la synchronisation audio.
;	Stockage externe (facultatif) : Pour stocker des fichiers vidéo de grande taille.
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