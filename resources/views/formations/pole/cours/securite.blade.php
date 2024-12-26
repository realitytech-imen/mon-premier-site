@extends('layouts.app02')

@section('title')
    Institut des Métiers du Numérique (IMeN) | Formations - Sécurité Informatique
@endsection

@section('content')
    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg_num">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                            <h2>SECURITE INFORMATIQUE</h2>
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
                        <img class="img-fluid" src="img/formations/securite.avif" alt="">
                    </div>
                    <div class="content_wrapper">
                        <h4 class="title_top">PRESENTATION</h4>
                        <div class="content">
                            La filière Sécurité Informatique forme des spécialistes capables de protéger les systèmes d’information, les réseaux et les données contre les cybermenaces. Elle couvre les domaines de la cybersécurité, de la cryptographie, de l’analyse de risques, ainsi que des techniques de défense et de réponse aux incidents. Cette formation enseigne aux étudiants comment détecter, analyser et contrer les menaces de sécurité tout en assurant la confidentialité, l'intégrité et la disponibilité des informations. Dans un contexte de hausse des cyberattaques, cette filière est essentielle pour garantir la sécurité des entreprises et des organisations.
                        </div>

                        <h4 class="title">DEBOUCHES</h4>
                        <div class="content">
                        En choisissant ce parcours de formation, vous pouvez exercer plusieurs métiers dont entre autres :
 	Analyste en cybersécurité 
; 	Ingénieur en sécurité informatique 
; 	Responsable de la sécurité des systèmes d’information (RSSI) 
; 	Pentester (testeur d’intrusion) 
; 	Consultant en sécurité informatique 
;	Auditeur en sécurité informatique 
;	Cryptographe

                        </div>

                        <h4 class="title">MATERIELS RECQUIS</h4>
                        <div class="content">
                            Ordinateur portable ; Clé USB ou disque dur externe ; Rallonge Multi-prise ; Accès à des plateformes virtuelles et cloud (comme VirtualBox, VMware, ou AWS) 

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