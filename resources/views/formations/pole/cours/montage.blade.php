@extends('layouts.app02')

@section('title')
    Institut des Métiers du Numérique (IMeN) | Formations - MONTAGE VIDEO
@endsection

@section('content')
    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg_audio">
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
                             La filière Montage Vidéo forme des techniciens spécialisés dans la capture, le traitement et le montage d’images pour la production audiovisuelle. Elle aborde les techniques de cadrage, l’utilisation de l’éclairage et la composition des images, ainsi que les logiciels de montage pour raconter une histoire visuelle fluide et captivante. Les étudiants apprennent également à ajuster le rythme, les effets sonores et les transitions pour valoriser les productions. Cette formation répond aux besoins des secteurs de l’audiovisuel, de la publicité, et des réseaux sociaux, où la qualité des contenus visuels est essentielle.
                        </div>

                        <h4 class="title">DEBOUCHES</h4>
                        <div class="content">
                        En choisissant ce parcours de formation, vous pouvez exercer plusieurs métiers dont entre autres :
	Monteur vidéo
;	Cadreur
;	Réalisateur de contenus pour les réseaux sociaux
;	Assistant de production audiovisuelle
;	Monteur FX et effets spéciaux
;	Motion designer junior 

                        </div>

                        <h4 class="title">MATERIELS RECQUIS</h4>
                        <div class="content">
                        ;	Caméra vidéo de qualité professionnelle
	Trépied et stabilisateur
;	Ordinateur puissant
;	Logiciels de montage vidéo
;	Éclairage de studio
;	Casque audio de qualité
;	Microphone externe 

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