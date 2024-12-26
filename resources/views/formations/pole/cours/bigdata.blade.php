@extends('layouts.app02')

@section('title')
    Institut des Métiers du Numérique (IMeN) | Formations - Big Data & IA
@endsection

@section('content')
    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg_num">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                            <h2>BIG DATA ET INTELLIGENCE ARTIFICIELLE</h2>
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
                        <img class="img-fluid" src="img/formations/bigdata.avif" alt="">
                    </div>
                    <div class="content_wrapper">
                        <h4 class="title_top">PRESENTATION</h4>
                        <div class="content">
                             La filière Big Data et Intelligence Artificielle forme des experts capables de traiter, analyser et exploiter de grandes quantités de données pour en extraire des informations stratégiques et des modèles prédictifs. Elle couvre des domaines tels que la science des données, l’apprentissage automatique, le traitement du langage naturel et la visualisation de données, permettant ainsi de développer des solutions innovantes pour la prise de décision et l’automatisation des tâches. Cette formation répond aux besoins croissants des entreprises souhaitant optimiser leurs performances à l’aide des technologies avancées de l’IA et du Big Data.
                        </div>

                        <h4 class="title">DEBOUCHES</h4>
                        <div class="content">
                             En choisissant ce parcours de formation, vous pouvez exercer plusieurs métiers dont entre autres : Data Scientist ; Data Engineer ; Ingénieur en Intelligence Artificielle ; Analyste Big Data ; Consultant en transformation digitale ;	Développeur en Machine Learning 
                        </div>

                        <h4 class="title">MATERIELS RECQUIS</h4>
                        <div class="content">
                            Ordinateur portable ; Clé USB ou disque dur externe ; Rallonge Multi-prise

                        </div>
                    </div>
                </div>


                <div class="col-lg-4 right-contents">
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
                        <a href="{{ route('inscription_etudiant') }}" class="btn_1 d-block">Devenir Etudiant </a>
                        <a href="/doc/IMeN_MODALITES_PAYEMENT.png" class="btn_1 d-block">Téléchargez les modalités</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ End Course Details Area =================-->
@endsection