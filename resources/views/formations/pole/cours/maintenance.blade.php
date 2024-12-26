@extends('layouts.app02')

@section('title')
    Institut des Métiers du Numérique (IMeN) | Formations - Installation et Maintenance Informatique
@endsection

@section('content')
    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg_num">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                            <h2>INSTALLATION ET MAINTENANCE INFORMATIQUE</h2>
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
                        <img class="img-fluid" src="img/formations/maintenance.avif" alt="">
                    </div>
                    <div class="content_wrapper">
                        <h4 class="title_top">PRESENTATION</h4>
                        <div class="content">
                             La filière Installation et Maintenance Informatique forme des techniciens qualifiés pour assurer la mise en place, la configuration, l’entretien et la réparation des systèmes informatiques et réseaux. Elle couvre les aspects techniques du matériel (hardware), les logiciels (software), ainsi que la gestion des réseaux et des périphériques. Les étudiants apprennent à diagnostiquer et résoudre des pannes, à effectuer des installations et des mises à jour, et à garantir le bon fonctionnement des infrastructures informatiques. Cette formation est essentielle pour soutenir les entreprises et organisations dans la continuité de leurs opérations informatiques.
                        </div>

                        <h4 class="title">DEBOUCHES</h4>
                        <div class="content">
                        En choisissant ce parcours de formation, vous pouvez exercer plusieurs métiers dont entre autres :
 	Technicien de maintenance informatique 
; 	Technicien réseau 
; 	Administrateur système junior 
; 	Technicien support informatique
; 	Responsable technique en centre de service 
; 	Installateur de matériel informatique 

                        </div>

                        <h4 class="title">MATERIELS RECQUIS</h4>
                        <div class="content">
                            Ordinateur portable ; Clé USB ou disque dur externe ; Rallonge Multi-prise ; Outils de diagnostic matériel et logiciel 

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