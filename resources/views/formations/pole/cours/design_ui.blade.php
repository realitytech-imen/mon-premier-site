@extends('layouts.app02')

@section('title')
    Institut des Métiers du Numérique (IMeN) | Formations - UI UX Design
@endsection

@section('content')
    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg_design">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                            <h2>DESIGN UI UX</h2>
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
                        <img class="img-fluid" src="img/formations/design.avif" alt="">
                    </div>
                    <div class="content_wrapper">
                        <h4 class="title_top">PRESENTATION</h4>
                        <div class="content">
                        Le Design UI/UX (Interface Utilisateur / Expérience Utilisateur) est un domaine en plein essor, centré sur la création de produits numériques intuitifs et esthétiques. Les designers UI/UX s'assurent que les interfaces des applications et sites web sont non seulement visuellement attrayantes, mais aussi faciles à naviguer pour offrir une expérience utilisateur optimale.
                        </div>

                        <h4 class="title">DEBOUCHES</h4>
                        <div class="content">
                        En choisissant ce parcours de formation, vous pouvez exercer plusieurs métiers dont entre autres :
 	Designer UI/UX
; 	UX Researcher
; 	Product Designer
; 	Consultant en Design
; 	Responsable de la conception
                        </div>

                        <h4 class="title">MATERIELS RECQUIS</h4>
                        <div class="content">
                            Ordinateur portable ; Clé USB ou disque dur externe ; Tablette graphique (facultatif) : Pour le dessin et la création d'illustrations. ; Rallonge Multi-prise

                        </div>
                    </div>
                </div>


                <div class="col-lg-4 right-contents">
                    <div class="sidebar_top">
                        <ul>
                            <li>
                                <a class="justify-content-between d-flex" href="">
                                    <p class="color">Durée de la formation : </p>
                                    <span class="color">01 AN</span>
                                </a>
                            </li>
                            <li>
                                <a class="justify-content-between d-flex" href="">
                                    <p class="color">Scolarité : </p>
                                    <span class="color">500 000 FCFA</span>
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