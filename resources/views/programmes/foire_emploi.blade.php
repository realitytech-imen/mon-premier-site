@extends('layouts.app02')

@section('title')
    Institut des Métiers du Numérique (IMeN) | La Foire de L'Emploi
@endsection

@section('content')
    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg_emploi">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                            <h2>La Foire de L'Emploi</h2>
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
                        Le PIP est le programme d’accompagnement sur mesure dédié à l’insertion professionnelle des étudiants de l’IMeN. Il est mis en place pour aider ses étudiants à démarrer immédiatement leur carrière professionnelle en entreprise en décrochant le premier emploi après leur formation. <br>

Elle s’étend sur une assurée par des consultants et coach en développement de carrière et spécialisés dans l’employabilité des jeunes en partenariat avec notre école. Durant cette formation, nos étudiants sont formés sur l’art de vendre et de se vendre, les bonnes méthodes et techniques de recherche d’un emploi décent. Ils apprennent à produire un CV et un courrier percutants, à réussir un entretien d’embauche et sont briefés sur la culture d’entreprise. <br>

Ce programme implique des ateliers pratiques d’application, une auto-évaluation et une évaluation car il est pratique et concret. <br>

Nos étudiants s’en sortent outillés, mentalement, psychologiquement et techniquement pour décrocher leur emploi de rêve.

                        </div>

                        <h4 class="title">PROGRAMME DE FORMATION EN ENTREPRENEURIAT</h4>
                        <div class="content">
                        Le PFE est un programme dédié aux étudiants porteurs de projet ou aspirants à l’entrepreneuriat. Il s’agit d’un accompagnement offert après le parcours de formation qui vise à préparer le futur entrepreneur aux challenges qui l’attendent. Le but de ce programme est de former et d’outiller efficacement les jeunes porteurs de projet à lancer, amorcer et gérer leur entreprise. Ils sont dopés du ‘’Mindset’’ d’entrepreneur et capables de limiter les risques d’un échec lamentable pour assurer le succès de leur projet. <br><br>

Les formations de ce programme sont assurées par des consultants, coach et cabinets partenaires à notre de l’IMeN. Elles impliquent des ateliers pratiques, des workshops et des séminaires pour transmettre aux étudiants et futures entrepreneurs le leadership et les compétences nécessaires indispensables à leur succès.

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
        <a href="{{ route('inscription_etudiant') }}" class="btn_1">DEVENIR ETUDIANT </a>
        <a href="{{ route('imen_english') }}" class="btn_2">IMeN ENGLISH ACADEMY </a>
    </p>
@endsection