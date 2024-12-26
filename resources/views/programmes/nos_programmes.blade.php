@extends('layouts.app02')

@section('title')
    Institut des Métiers du Numérique (IMeN) | NOS PROGRAMMES
@endsection

@section('content')
    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg_emploi">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                            <h2>NOS PROGRAMMES</h2>
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
                <div class="col-lg-10 course_details_left">
                    <!-- <div class="main_image">
                        <img class="img-fluid" src="img/formations/programmation.avif" alt="">
                    </div> -->
                    <div class="content_wrapper">
                        <h4 class="title_top">PROGRAMME D’INSERTION PROFESSIONNELLE</h4>
                        <div class="content">
                        Le <strong>Programme d'Insertion Professionnelle (PIP)</strong> est une initiative sur mesure conçue pour faciliter l’intégration professionnelle des étudiants de l’IMeN. Ce programme vise à les accompagner dans leurs premiers pas en entreprise, leur permettant ainsi de décrocher rapidement un emploi à l’issue de leur formation.<br><br>
Animé par des consultants expérimentés et des coachs spécialisés dans le développement de carrière et l’employabilité des jeunes, le PIP propose un parcours complet. Les étudiants y apprennent à valoriser leurs compétences, à maîtriser les techniques de recherche d’emploi, et à produire des candidatures percutantes (CV et lettres de motivation). Une importance particulière est accordée à la préparation aux entretiens d’embauche ainsi qu’à l’assimilation des codes de la culture d’entreprise.<br><br>
Le programme adopte une approche concrète et pratique, intégrant des ateliers interactifs, des exercices d’auto-évaluation et des simulations. Ces activités permettent aux participants de renforcer leur confiance et leur adaptabilité face aux exigences du marché de l’emploi.<br><br>
En participant au PIP, les étudiants sortent pleinement équipés sur le plan technique, psychologique et professionnel pour réussir dans leur domaine et décrocher leur emploi de rêve.

                        </div>

                        <h4 class="title">PROGRAMME DE FORMATION EN ENTREPRENEURIAT</h4>
                        <div class="content">
                        Le <strong>PFE</strong> est un programme dédié aux étudiants porteurs de projet ou aspirants à l’entrepreneuriat. Il s’agit d’un accompagnement offert après le parcours de formation qui vise à préparer le futur entrepreneur aux challenges qui l’attendent. Le but de ce programme est de former et d’outiller efficacement les jeunes porteurs de projet à lancer, amorcer et gérer leur entreprise. Ils sont dopés du ‘’Mindset’’ d’entrepreneur et capables de limiter les risques d’un échec lamentable pour assurer le succès de leur projet.<br><br>

Les formations de ce programme sont assurées par des consultants, coach et cabinets partenaires de l’IMeN. Elles impliquent des ateliers pratiques, des workshops et des séminaires pour transmettre aux étudiants et futures entrepreneurs le leadership et les compétences nécessaires indispensables à leur succès.

                        </div>

                        <h4 class="title">La Foire de l’Emploi </h4>
                        <div class="content">
                            Cet évènement qui se déroule sur plusieurs jours est pensé par l’IMeN pour ses étudiants certifiés et ses entreprises partenaires. Il a pour but de créer le contact entre les deux parties, donnant l’occasion des entretiens et du recrutement des nouveaux certifiés.
                        </div>

                        <h4 class="title">IMeN Boost Days </h4>
                        <div class="content">
                            Des séances de partage d’expériences, des séminaires thématiques et autres pour permettre aux étudiants d’apprendre à se vendre, à vendre et se préparer à affronter la vie professionnelle avec sérénité. <br><br>
                            Ces programmes sont offerts gratuitement, garantissant à chaque étudiant un soutien concret pour sa carrière, qu’il choisisse de rejoindre une entreprise ou de se lancer dans l’aventure entrepreneuriale.
                       </div>
                    </div>
                </div>
                <!-- <div class="col-lg-4 right-contents">
                    <div class="sidebar_top">
                        <ul>
                            <li>
                                <a class="justify-content-between d-flex" href="">
                                    <p class="color">Durée de la formation : </p>
                                    <span class="color">02 ANS</span>
                                </a>
                            </li>
                            <li>
                                <a class="justify-content-between d-flex" href="">
                                    <p class="color">Scolarité : </p>
                                    <span class="color">1 000 000 FCFA</span>
                                </a>
                            </li>
                            <li>
                                <a class="justify-content-between d-flex" href="">
                                    <p class="color">Prochaine Rentrée : </p>
                                    <span class="color">24 Février 2025</span>
                                </a>
                            </li>
                        </ul>
                        <a href="{{ route('inscription_etudiant') }}" class="btn_1 d-block">DEVENIR ETUDIANT </a>
                        <a href="/doc/IMeN_MODALITES_PAYEMENT.png" class="btn_1 d-block">Télécharger les modalités</a>
                    </div>
                </div> -->
            </div>
        </div>
    </section>
    <!--================ End Course Details Area =================-->

    <p style="text-align: center; margin: 25px;">
        <a style="padding-left:47px; padding-right:47px;" href="{{ route('inscription_etudiant') }}" class="btn_1">DEVENIR ETUDIANT </a>
        <a href="{{ route('decouvrir_ecole') }}" class="btn_2">DECOUVRIR NOTRE ECOLE </a>
    </p>
@endsection