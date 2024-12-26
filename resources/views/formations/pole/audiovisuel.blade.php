@extends('layouts.app02')

@section('title')
    Institut des Métiers du Numérique (IMeN) | Formations - Pôle Audiovisuel
@endsection

@section('content')
    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg_audio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                            <h2>DÉPARTEMENT AUDIOVISUEL</h2>
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
                        <a href="{{ route('montage') }}"><img src="img/formations/cadrage.avif" class="special_img" alt=""></a>
                        <div class="special_cource_text">
                            <a href="{{ route('montage') }}"><h3>MONTAGE VIDEO</h3></a>
                            <p>La filière Cadrage et Montage Vidéo forme des techniciens spécialisés dans la capture, le traitement et le montage d’images pour la production audiovisuelle.</p>
                        </div>

                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="single_special_cource">
                        <a href="{{ route('cadrage') }}"><img src="img/formations/photographie.jpg" class="special_img" alt=""></a>
                        <div class="special_cource_text">
                            <a href="{{ route('cadrage') }}"><h3>CADRAGE & PHOTOGRAPHIE</h3></a>
                            <p>La filière Photographie forme des professionnels capables de capturer des images esthétiques, informatives et émotionnelles pour diverses applications, notamment...</p>
                        </div>

                    </div>
                </div>
                <!-- <div class="col-sm-6 col-lg-4">
                    <div class="single_special_cource">
                        <img src="img/special_cource_3.png" class="special_img" alt="">
                        <div class="special_cource_text">
                            <a href="/course">  <h3>WEB DESIGN</h3> </a>
                            <p>Cette formation s’adapte aux adultes en quête d’emploi ou de nouvelles compétences,
                                 en reconversion professionnelle et aux cadres qui souhaitent approfondir leurs
                                  connaissances dans le domaine du Web Design et décrocher un certificat.   </p>
                        </div>

                    </div>
                </div> -->
            </div>
        </div>
    </section>
    <!--::blog_part end::-->

    <p style="text-align: center; margin: 25px;">
        <a style="padding-left:65px; padding-right:65px;" href="{{ route('inscription_etudiant') }}" class="btn_1">DEVENIR ETUDIANT </a>
        <a href="{{ route('formations_continues') }}" class="btn_2">VOIR FORMATIONS CONTINUES </a>
    </p>
@endsection