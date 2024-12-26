@extends('layouts.app02')

@section('title')
    Institut des Métiers du Numérique (IMeN) | Formations - CADRAGE ET PHOTOGRAPHIE
@endsection

@section('content')
    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg_audio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                            <h2>CADRAGE & PHOTOGRAPHIE</h2>
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
                        <img class="img-fluid" src="img/formations/photographie.jpg" alt="">
                    </div>
                    <div class="content_wrapper">
                        <h4 class="title_top">PRESENTATION</h4>
                        <div class="content">
                            La filière Photographie forme des professionnels capables de capturer des images esthétiques, informatives et émotionnelles pour diverses applications, notamment dans les domaines de la communication, de la publicité, de l’art, et du reportage. Les étudiants y apprennent les techniques de prise de vue, la maîtrise de la lumière, la composition, ainsi que la retouche et le post-traitement d’images pour produire des photos de haute qualité. Cette formation permet de répondre aux besoins de nombreux secteurs où l’image est un puissant outil de communication visuelle..
                        </div>

                        <h4 class="title">DEBOUCHES</h4>
                        <div class="content">
                        En choisissant ce parcours de formation, vous pouvez exercer plusieurs métiers dont entre autres :
	Photographe professionnel
;	Photographe de mode
;	Photographe publicitaire
;	Photojournaliste
;	Photographe d’art
;	Retoucheur photo


                        </div>

                        <h4 class="title">MATERIELS RECQUIS</h4>
                        <div class="content">
                        	Appareil photo reflex ou mirrorless de qualité professionnelle
;	Objectifs variés
;	Trépied
;	Éclairage de studio
;	Ordinateur avec logiciel de retouche
;	Disque dur externe


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