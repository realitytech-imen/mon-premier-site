@extends('layouts.app02')

@section('title')
    Institut des Métiers du Numérique (IMeN) | Formations - Pôle Numérique
@endsection

@section('content')
    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg_num">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                            <h2>DÉPARTEMENT NUMERIQUE</h2>
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
                        <a href="{{ route('big_data') }} "><img src="img/formations/bigdata.avif" class="special_img" alt=""><a/>
                        <div class="special_cource_text">
                            <a href="{{ route('big_data') }} "><h3>BIG DATA ET INTELLIGENCE ARTIFICIELLE</h3></a>
                            <p>La filière Big Data et Intelligence Artificielle forme des experts capables de traiter, analyser et exploiter de grandes quantités de données pour en extraire des informations stratégiques et des modèles prédictifs. </p>
                        </div>

                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="single_special_cource">
                        <a href="{{ route('programmation') }} "><img src="img/formations/programmation.avif" class="special_img" alt=""></a>
                        <div class="special_cource_text">
                            <a href="{{ route('programmation') }}"> <h3>PROGRAMMATION INFORMATIQUE</h3></a>
                            <p>La filière Programmation Informatique forme des professionnels capables de concevoir, développer et optimiser des logiciels, applications web et mobiles ainsi que des systèmes informatiques. </p>
                        </div>

                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="single_special_cource">
                        <a href="{{ route('securite') }} "><img src="img/formations/securite.avif" class="special_img" alt=""></a>
                        <div class="special_cource_text">
                            <a href="{{ route('securite') }}">  <h3>SECURITE INFORMATIQUE</h3> </a>
                            <p>La filière Sécurité Informatique forme des spécialistes capables de protéger les systèmes d’information, les réseaux et les données contre les cybermenaces. </p>
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
                        <a href="{{ route('maintenance') }} "><img  src="img/formations/maintenance.avif" class="special_img" alt=""></a>
                        <div class="special_cource_text">
                            <a href="{{ route('maintenance') }}"><h3>INSTALLATION ET MAINTENANCE INFORMATIQUE</h3></a>
                            <p>La filière Installation et Maintenance Informatique forme des techniciens qualifiés pour assurer la mise en place, la configuration, l’entretien et la réparation des systèmes informatiques et réseaux. </p>
                        </div>

                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="single_special_cource">
                        <a href="{{ route('devweb') }} "><img  src="img/formations/devweb.jpg" class="special_img" alt=""></a>
                        <div class="special_cource_text">
                            <a href="{{ route('devweb') }}"><h3>DÉVELOPPEMENT WEB & MOBILE</h3></a>
                            <p>La filière Développement Web & Mobile forme des professionnels capables de concevoir, développer et maintenir des applications web et mobiles performantes et sécurisées. </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--::blog_part end::-->

    <p style="text-align: center; margin: 25px;">
        <a style="padding-left:58px; padding-right:58px;" href="{{ route('inscription_etudiant') }}" class="btn_1">DEVENIR ETUDIANT </a>
        <a href="{{ route('pole_design') }}" class="btn_2">VOIR DÉPARTEMENT DESIGN </a>
    </p>
@endsection