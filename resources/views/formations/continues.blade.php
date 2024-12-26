@extends('layouts.app02')

@section('title')
    Institut des Métiers du Numérique (IMeN) | Formations Continues
@endsection

@section('content')
    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg_fcont">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                            <h2>NOS FORMATIONS CONTINUES</h2>
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
            <!-- <div class="row justify-content-center">
                <div class="col-xl-5">
                    <div class="section_tittle text-center">
                        <h2>Nos Formations</h2>
                    </div>
                </div>
            </div> -->
            <div class="row">
                <div class="col-sm-6 col-lg-4">
                    <div class="single_special_cource">
                        <a href="{{ route('continues_dev') }} "><img src="img/formations/devweb.jpg" class="special_img" alt=""></a>
                        <div class="special_cource_text">
                            <a href="{{ route('continues_dev') }} "><h3>DEVELOPPEMENT WEB</h3></a>
                            <p>Cette formation est destinée aux personnes en quête d’emploi, en situation
                                 de transition professionnelle, aux adultes qui souhaitent approfondir leurs
                                  connaissances dans le domaine du développement web et obtenir un certificat</p>
                        </div>

                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="single_special_cource">
                        <a href="{{ route('continues_data') }} "><img src="img/formations/data.avif" class="special_img" alt=""></a>
                        <div class="special_cource_text">
                            <a href="{{ route('continues_data') }} "> <h3>ANALYSE DES DONNEES</h3></a>
                            <p>Cette formation est destinée aux personnes en quête d’emploi, en situation 
                                de transition professionnelle, aux adultes qui souhaitent approfondir leurs
                                 connaissances dans le domaine de l’Analyse des Données et obtenir un certificat </p>
                        </div>

                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="single_special_cource">
                        <a href="{{ route('continues_maintenance') }} "><img src="img/formations/maintenance.avif" class="special_img" alt=""></a>
                        <div class="special_cource_text">
                            <a href="{{ route('continues_maintenance') }} "><h3>MAINTENANCE INFORMATIQUE</h3> </a>
                            <p>Cette formation est destinée aux personnes en quête d’emploi, en situation de transition professionnelle, aux adultes qui souhaitent approfondir leurs connaissances dans le domaine de la Maintenance Informatique et obtenir un certificat.  </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--::blog_part end::-->

        <!--::review_part start::-->
        <section class="special_cource padding_top">
        <div class="container">
            <!-- <div class="row justify-content-center">
                <div class="col-xl-5">
                    <div class="section_tittle text-center">
                        <h2>Nos Formations</h2>
                    </div>
                </div>
            </div> -->
            <div class="row">
                <div class="col-sm-6 col-lg-4">
                    <div class="single_special_cource">
                        <a href="{{ route('continues_montage') }} "><img src="img/formations/cadrage.avif" class="special_img" alt=""></a>
                        <div class="special_cource_text">
                            <a href="{{ route('continues_montage') }} "><h3>MONTAGE VIDEO</h3></a>
                            <p>Cette formation est destinée aux personnes en quête d’emploi, en situation de transition professionnelle, aux adultes qui souhaitent approfondir leurs connaissances dans le domaine de la Maintenance Informatique et obtenir un certificat.  </p>
                        </div>

                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="single_special_cource">
                        <a href="{{ route('continues_graphisme') }} "><img src="img/formations/graphisme.avif" class="special_img" alt=""></a>
                        <div class="special_cource_text">
                            <a href="{{ route('continues_graphisme') }} "><h3>GRAPHISME</h3></a>
                            <p>Cette formation s’adapte aux adultes en quête d’emploi ou de nouvelles compétences, en reconversion professionnelle et aux cadres qui souhaitent approfondir leurs connaissances dans le domaine du Design Graphique et décrocher un certificat. </p>
                        </div>

                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="single_special_cource">
                        <a href="{{ route('continues_design') }} "><img src="img/formations/webdesigns.jpg" class="special_img" alt=""></a>
                        <div class="special_cource_text">
                            <a href="{{ route('continues_design') }} "><h3>WEB DESIGN</h3> </a>
                            <p>Cette formation s’adapte aux adultes en quête d’emploi ou de nouvelles compétences, en reconversion professionnelle et aux cadres qui souhaitent approfondir leurs connaissances dans le domaine du Web Design et décrocher un certificat. </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--::blog_part end::-->

    <p style="text-align: center; margin: 25px;">
        <a style="padding-left:45px; padding-right:45px;" href="{{ route('inscription_etudiant') }}" class="btn_1">DEVENIR ETUDIANT </a>
        <a href="{{ route('workshops') }}" class="btn_2">WORKSHOPS & ATELIERS </a>
    </p>
@endsection