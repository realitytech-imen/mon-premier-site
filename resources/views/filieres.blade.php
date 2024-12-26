@extends('layouts.app02')

@section('title')
    Institut des Métiers du Numérique (IMeN) | Formations - Pôle Numérique
@endsection

@section('content')
    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                            <h2>Pôle Numérique</h2>
                            <!-- <p>Voir<span>/</span>Pôle Design</p> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->

    <!--::review_part start::-->
    <section class="special_cource padding_top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5">
                    <div class="section_tittle text-center">
                        <h2>Nos Formations</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-lg-4">
                    <div class="single_special_cource">
                        <img src="img/special_cource_1.png" class="special_img" alt="">
                        <div class="special_cource_text">
                            <a href="/course"><h3>DEVELOPPEMENT WEB</h3></a>
                            <p>Cette formation est destinée aux personnes en quête d’emploi, en situation
                                 de transition professionnelle, aux adultes qui souhaitent approfondir leurs
                                  connaissances dans le domaine du développement web et obtenir un certificat</p>
                        </div>

                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="single_special_cource">
                        <img src="img/special_cource_2.png" class="special_img" alt="">
                        <div class="special_cource_text">
                            <a href="/course"> <h3>ANALYSE DES DONNEES</h3></a>
                            <p>Cette formation est destinée aux personnes en quête d’emploi, en situation 
                                de transition professionnelle, aux adultes qui souhaitent approfondir leurs
                                 connaissances dans le domaine de l’Analyse des Données et obtenir un certificat </p>
                        </div>

                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="single_special_cource">
                        <img src="img/special_cource_3.png" class="special_img" alt="">
                        <div class="special_cource_text">
                            <a href="/course">  <h3>WEB DESIGN</h3> </a>
                            <p>Cette formation s’adapte aux adultes en quête d’emploi ou de nouvelles compétences,
                                 en reconversion professionnelle et aux cadres qui souhaitent approfondir leurs
                                  connaissances dans le domaine du Web Design et décrocher un certificat.   </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--::blog_part end::-->

    <p style="text-align: center; margin: 25px;">
        <a href="{{ route('filieres') }}" class="btn_1">VOIR POLE DESIGN </a>
        <a href="{{ route('apropos') }}" class="btn_2">VOIR POLE AUDIOVISUEL </a>
    </p>
@endsection