@extends('layouts.app02')

@section('title')
    Institut des Métiers du Numérique (IMeN) | Formations - Pôle Design
@endsection

@section('content')
    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg_design">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                            <h2>DÉPARTEMENT DESIGN</h2>
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
                        <a href="{{ route('design_ui') }}"><img src="img/formations/design.avif" class="special_img" alt=""></a>
                        <div class="special_cource_text">
                            <a href="{{ route('design_ui') }}"><h3>DESIGN UI UX</h3></a>
                            <p>Le Design UI/UX (Interface Utilisateur / Expérience Utilisateur) est un domaine en plein essor, centré sur la création de produits numériques intuitifs et esthétiques. </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="single_special_cource">
                        <a href="{{ route('graphique') }}"><img src="img/formations/graphique.avif" class="special_img" alt=""></a>
                        <div class="special_cource_text">
                            <a href="{{ route('graphique') }}"> <h3>DESIGN GRAPHIQUE</h3></a>
                            <p>Le Design Graphique est une discipline artistique et technique qui consiste à créer des visuels pour communiquer des idées, des messages et des informations. </p>
                        </div>

                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="single_special_cource">
                        <a href="{{ route('motion') }}"><img src="img/formations/motion.jpg" class="special_img" alt=""></a>
                        <div class="special_cource_text">
                            <a href="{{ route('motion') }}">  <h3>MOTION DESIGN</h3> </a>
                            <p>Le Motion Design, ou design animé, est une discipline qui allie graphisme et animation pour créer des contenus visuels dynamiques. </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--::blog_part end::-->

    <p style="text-align: center; margin: 25px;">
        <a style="padding-left:65px; padding-right:65px;" href="{{ route('inscription_etudiant') }}" class="btn_1">DEVENIR ETUDIANT </a>
        <a href="{{ route('pole_audio') }}" class="btn_2">VOIR DÉPARTEMENT AUDIOVISUEL </a>
    </p>
@endsection