@extends('layouts.app01')

@section('title')
    Institut des Métiers du Numérique (IMeN) | Premiere école d'expertise numérique
@endsection

@section('content')
    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg_imen" id="entete_section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                        <h2 id="entete_titre">Premiere école d'expertise numérique</h2>
                        <p id="para_btn">
                            <a id="entete_btn1" href="{{ route('decouvrir_ecole') }}" class="btn_1">DECOUVRIR IMEN </a>
                            <a id="entete_btn2" href="{{ route('inscription_etudiant') }}" class="btn_2">DEVENIR ETUDIANT </a>
                        </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->

    <!-- feature_part start-->
    <section class="feature_part">
        <div class="section_tittle text-center">
            <h2>Nos trois <br> piliers fondamentaux</h2>
        </div>
        <div class="container">
            <div class="row"> <!-- align-self-center -->
                <!-- <div class="col-sm-6 col-xl-3"> 
                    <div class="single_feature_text ">
                        <h2>Nos trois piliers fondamentaux</h2>
                        <p>Première école d'expertise informatique en Afrique de l'Ouestn </p>
                        <a href="{{ route('decouvrir_ecole') }}" class="btn_1">DECOUVRIR IMeN</a>
                    </div>
                </div> -->
                <div class="col-sm-7 col-xl-4">
                    <div class="single_feature">
                        <div class="single_feature_part">
                            <span class="single_feature_icon"><i class="fa-solid fa-graduation-cap"></i></span>
                            <h4>Formation Métier</h4>
                            <p>Nous formons à un métier. Par la pratique pour rendre l’étudant oppérationnel sur le terrain.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-7 col-xl-4">
                    <div class="single_feature">
                        <div class="single_feature_part">
                            <span class="single_feature_icon"><i class="fa-solid fa-users"></i></span>
                            <h4>Centré sur l'humain</h4>
                            <p>Nous mettons l’homme au coeur de nos formations, afin de fabriquer des professionnels aguerris et resilients </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-7 col-xl-4">
                    <div class="single_feature">
                        <div class="single_feature_part single_feature_part_2">
                            <span class="single_service_icon style_icon"><i class="fa-solid fa-business-time"></i></span>
                            <h4>Employabilités des Jeunes</h4>
                            <p>Nous formons à l’emploi et à l’auto-emploi, pour combattre le chômage galoppant.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- upcoming_event part start-->

    <!-- member_counter counter start -->
    <section class="member_counter">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="single_member_counter">
                        <span class="counter">72</span>
                        <h4>Etudiants Statisfaits</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_member_counter">
                        <span class="counter">16</span>
                        <h4> Formations Réalisées</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_member_counter">
                        <span class="counter">39</span>
                        <h4>Etudiants certifiés</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_member_counter">
                        <span>+</span>
                        <span class="counter">100</span>
                        <h4>Partenaires</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- member_counter counter end -->

    <!--::review_part start::-->
    <section class="special_cource padding_top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5">
                    <div class="section_tittle text-center">
                        <h2>Formations Longues</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-lg-4">
                    <div class="single_special_cource">
                        <a href="{{ route('programmation') }}"><img src="img/formations/programmation.avif" class="special_img" alt=""></a>
                        <div class="special_cource_text">
                            <a href="{{ route('pole_num') }}" class="btn_4">Pôle Numérique</a>
                            <!-- <h4>02 ANS</h4> -->
                            <a href="{{ route('programmation') }}"><h3>PROGRAMMATION INFORMATIQUE</h3></a>
                            <p>La filière Programmation Informatique forme des professionnels capables de concevoir, développer et optimiser des logiciels, applications web et mobiles ainsi que des systèmes informatiques. </p>
                            <!-- <div class="author_info">
                                <div class="author_img">
                                    <img src="img/author/author_1.png" alt="">
                                    <div class="author_info_text">
                                        <p>DUREE</p>
                                        <h5><a href="#">02 ANNEES</a></h5>
                                    </div>
                                </div>
                                <div class="author_rating">
                                    <div class="rating">
                                        <a href="#"><img src="img/icon/color_star.svg" alt=""></a>
                                        <a href="#"><img src="img/icon/color_star.svg" alt=""></a>
                                        <a href="#"><img src="img/icon/color_star.svg" alt=""></a>
                                        <a href="#"><img src="img/icon/color_star.svg" alt=""></a>
                                        <a href="#"><img src="img/icon/star.svg" alt=""></a>
                                    </div>
                                    <p>3.8 Ratings</p>
                                </div>
                            </div> -->
                        </div>

                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="single_special_cource">
                    <a href="{{ route('design_ui') }}"><img src="img/formations/design.avif" class="special_img" alt=""></a>
                        <div class="special_cource_text">
                            <a href="{{ route('pole_design') }}" class="btn_4">Pôle Design</a>
                            <!-- <h4>$160.00</h4> -->
                            <a href="{{ route('design_ui') }}"> <h3>DESIGN UI UX</h3></a>
                            <p>Le Design UI/UX (Interface Utilisateur / Expérience Utilisateur) 
                                est un domaine en plein essor, centré sur la création de produits 
                                numériques intuitifs et esthétiques. </p>
                            <!-- <div class="author_info">
                                <div class="author_img">
                                    <img src="img/author/author_2.png" alt="">
                                    <div class="author_info_text">
                                        <p>Conduct by:</p>
                                        <h5><a href="#">James Well</a></h5>
                                    </div>
                                </div>
                                <div class="author_rating">
                                    <div class="rating">
                                        <a href="#"><img src="img/icon/color_star.svg" alt=""></a>
                                        <a href="#"><img src="img/icon/color_star.svg" alt=""></a>
                                        <a href="#"><img src="img/icon/color_star.svg" alt=""></a>
                                        <a href="#"><img src="img/icon/color_star.svg" alt=""></a>
                                        <a href="#"><img src="img/icon/star.svg" alt=""></a>
                                    </div>
                                    <p>3.8 Ratings</p>
                                </div>
                            </div> -->
                        </div>

                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="single_special_cource">
                    <a href="{{ route('montage') }}"><img src="img/formations/cadrage.avif" class="special_img" alt=""></a>
                        <div class="special_cource_text">
                            <a href="{{ route('pole_audio') }}" class="btn_4">Pôle Audiovisuel</a>
                            <!-- <h4>$140.00</h4> -->
                            <a href="{{ route('montage') }}">  <h3>MONTAGE VIDEO</h3> </a> 
                            <p>La filière Cadrage et Montage Vidéo forme des techniciens spécialisés
                                 dans la capture, le traitement et le montage d’images pour la production audiovisuelle.  </p>
                            <!-- <div class="author_info">
                                <div class="author_img">
                                    <img src="img/author/author_3.png" alt="">
                                    <div class="author_info_text">
                                        <p>Conduct by:</p>
                                        <h5><a href="#">James Well</a></h5>
                                    </div>
                                </div>
                                <div class="author_rating">
                                    <div class="rating">
                                        <a href="#"><img src="img/icon/color_star.svg" alt=""></a>
                                        <a href="#"><img src="img/icon/color_star.svg" alt=""></a>
                                        <a href="#"><img src="img/icon/color_star.svg" alt=""></a>
                                        <a href="#"><img src="img/icon/color_star.svg" alt=""></a>
                                        <a href="#"><img src="img/icon/star.svg" alt=""></a>
                                    </div>
                                    <p>3.8 Ratings</p>
                                </div>
                            </div> -->
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--::blog_part end::-->

    <!-- learning part start-->

    <section class="learning_part">
        <div class="section_tittle text-center">
                <h2>Pourquoi nous choisir ?</h2>
        </div>
        <div class="container">
            <div class="row align-items-sm-center align-items-lg-stretch">
                <div class="col-md-7 col-lg-7">
                    <div class="learning_img">
                        <img src="img/nos-etus.avif" alt="">
                    </div>
                </div>
                <div class="col-md-5 col-lg-5">
                    <div class="learning_member_text">
                        <!-- <h5>About us</h5> -->
                        <!-- <h2>Pourquoi nous choisir ?</h2> -->
                        <!-- <p>La création de IMeN est partie d’un constat selon lequel les formations et filières classiques ne répondent plus efficacement aux besoins de compétences des entreprises. Ces formations démontrent ainsi à suffisance leur inadéquation en rapport avec les nouveaux besoins de compétences et de main d’œuvre et du marché de l’emploi </p> -->
                        <ul>
                            <li><span class="ti-crown"></span>Meilleur dans votre domaine,
                            nous vous formons pour l'expertise et l'excellence.</li>
                            <li><span class="ti-light-bulb"></span>100% Pratique,
                            la praticité de nos cours vous rend opérationnel sur le terrain.</li>
                            <li><span class="ti-bag"></span>Employabilité
                            Stage garanti, Emploi certain.</li>
                            <li><span class="ti-notepad"></span>Certificats
                            Votre parcours est couronné par un certificat reconnu par l'Etat.</li>
                        </ul>
                        <div id="center_bouton">
                            <a href="{{ route('inscription_etudiant') }}" class="btn_1">DEVENIR ETUDIANT</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- learning part end-->

    <!--::review_part start::-->
    <section style="padding-bottom: 25px;" class="special_cource padding_top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5">
                    <div class="section_tittle text-center">
                        <h2>Formations Continues</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-lg-4">
                    <div class="single_special_cource">
                        <a href="{{ route('continues_dev') }}"><img src="img/formations/devweb.jpg" class="special_img" alt=""></a>
                        <div class="special_cource_text">
                            <!-- <a href="course-details.html" class="btn_4">Pôle Numérique</a> -->
                            <!-- <h4>02 ANS</h4> -->
                            <a href="{{ route('continues_dev') }}"><h3>DEVELOPPEMENT WEB</h3></a>
                            <p>Cette formation est destinée aux personnes en quête d’emploi, en situation
                                 de transition professionnelle, aux adultes qui souhaitent approfondir leurs
                                  connaissances dans le domaine du développement web et obtenir un certificat</p>
                            <!-- <div class="author_info">
                                <div class="author_img">
                                    <img src="img/author/author_1.png" alt="">
                                    <div class="author_info_text">
                                        <p>DUREE</p>
                                        <h5><a href="#">02 ANNEES</a></h5>
                                    </div>
                                </div>
                                <div class="author_rating">
                                    <div class="rating">
                                        <a href="#"><img src="img/icon/color_star.svg" alt=""></a>
                                        <a href="#"><img src="img/icon/color_star.svg" alt=""></a>
                                        <a href="#"><img src="img/icon/color_star.svg" alt=""></a>
                                        <a href="#"><img src="img/icon/color_star.svg" alt=""></a>
                                        <a href="#"><img src="img/icon/star.svg" alt=""></a>
                                    </div>
                                    <p>3.8 Ratings</p>
                                </div>
                            </div> -->
                        </div>

                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="single_special_cource">
                        <a href="{{ route('continues_data') }}"><img src="img/formations/data.avif" class="special_img" alt=""></a>
                        <div class="special_cource_text">
                            <!-- <a href="course-details.html" class="btn_4">Pôle Design</a> -->
                            <!-- <h4>$160.00</h4> -->
                            <a href="{{ route('continues_data') }}"> <h3>ANALYSE DES DONNEES</h3></a>
                            <p>Cette formation est destinée aux personnes en quête d’emploi, en situation 
                                de transition professionnelle, aux adultes qui souhaitent approfondir leurs
                                 connaissances dans le domaine de l’Analyse des Données et obtenir un certificat </p>
                            <!-- <div class="author_info">
                                <div class="author_img">
                                    <img src="img/author/author_2.png" alt="">
                                    <div class="author_info_text">
                                        <p>Conduct by:</p>
                                        <h5><a href="#">James Well</a></h5>
                                    </div>
                                </div>
                                <div class="author_rating">
                                    <div class="rating">
                                        <a href="#"><img src="img/icon/color_star.svg" alt=""></a>
                                        <a href="#"><img src="img/icon/color_star.svg" alt=""></a>
                                        <a href="#"><img src="img/icon/color_star.svg" alt=""></a>
                                        <a href="#"><img src="img/icon/color_star.svg" alt=""></a>
                                        <a href="#"><img src="img/icon/star.svg" alt=""></a>
                                    </div>
                                    <p>3.8 Ratings</p>
                                </div>
                            </div> -->
                        </div>

                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="single_special_cource">
                        <a href="{{ route('continues_design') }}"><img src="img/formations/webdesigns.jpg" class="special_img" alt=""></a>
                        <div class="special_cource_text">
                            <!-- <a href="course-details.html" class="btn_4">Pôle Audiovisuel</a> -->
                            <!-- <h4>$140.00</h4> -->
                            <a href="{{ route('continues_design') }}">  <h3>WEB DESIGN</h3> </a>
                            <p>Cette formation s’adapte aux adultes en quête d’emploi ou de nouvelles compétences,
                                 en reconversion professionnelle et aux cadres qui souhaitent approfondir leurs
                                  connaissances dans le domaine du Web Design et décrocher un certificat.   </p>
                            <!-- <div class="author_info">
                                <div class="author_img">
                                    <img src="img/author/author_3.png" alt="">
                                    <div class="author_info_text">
                                        <p>Conduct by:</p>
                                        <h5><a href="#">James Well</a></h5>
                                    </div>
                                </div>
                                <div class="author_rating">
                                    <div class="rating">
                                        <a href="#"><img src="img/icon/color_star.svg" alt=""></a>
                                        <a href="#"><img src="img/icon/color_star.svg" alt=""></a>
                                        <a href="#"><img src="img/icon/color_star.svg" alt=""></a>
                                        <a href="#"><img src="img/icon/color_star.svg" alt=""></a>
                                        <a href="#"><img src="img/icon/star.svg" alt=""></a>
                                    </div>
                                    <p>3.8 Ratings</p>
                                </div>
                            </div> -->
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--::blog_part end::-->


    <!--::review_part start::-->
    <!-- <section class="testimonial_part">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-xl-5">
                    <div class="section_tittle text-center">
                        <h2>Que disent nos alumini ?</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="textimonial_iner owl-carousel">
                        <div class="testimonial_slider">
                            <div class="row">
                                <div class="col-lg-8 col-xl-4 col-sm-8 align-self-center">
                                    <div class="testimonial_slider_text">
                                        <p>Behold place was a multiply creeping creature his domin to thiren open void
                                            hath herb divided divide creepeth living shall i call beginning
                                            third sea itself set</p>
                                        <h4>Michel Hashale</h4>
                                        <h5> Sr. Web designer</h5>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-2 col-sm-4">
                                    <div class="testimonial_slider_img">
                                        <img src="img/testimonial_img_1.png" alt="#">
                                    </div>
                                </div>
                                <div class="col-xl-4 d-none d-xl-block">
                                    <div class="testimonial_slider_text">
                                        <p>Behold place was a multiply creeping creature his domin to thiren open void
                                            hath herb divided divide creepeth living shall i call beginning
                                            third sea itself set</p>
                                        <h4>Michel Hashale</h4>
                                        <h5> Sr. Web designer</h5>
                                    </div>
                                </div>
                                <div class="col-xl-2 d-none d-xl-block">
                                    <div class="testimonial_slider_img">
                                        <img src="img/testimonial_img_1.png" alt="#">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial_slider">
                            <div class="row">
                                <div class="col-lg-8 col-xl-4 col-sm-8 align-self-center">
                                    <div class="testimonial_slider_text">
                                        <p>Behold place was a multiply creeping creature his domin to thiren open void
                                            hath herb divided divide creepeth living shall i call beginning
                                            third sea itself set</p>
                                        <h4>Michel Hashale</h4>
                                        <h5> Sr. Web designer</h5>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-2 col-sm-4">
                                    <div class="testimonial_slider_img">
                                        <img src="img/testimonial_img_2.png" alt="#">
                                    </div>
                                </div>
                                <div class="col-xl-4 d-none d-xl-block">
                                    <div class="testimonial_slider_text">
                                        <p>Behold place was a multiply creeping creature his domin to thiren open void
                                            hath herb divided divide creepeth living shall i call beginning
                                            third sea itself set</p>
                                        <h4>Michel Hashale</h4>
                                        <h5> Sr. Web designer</h5>
                                    </div>
                                </div>
                                <div class="col-xl-2 d-none d-xl-block">
                                    <div class="testimonial_slider_img">
                                        <img src="img/testimonial_img_1.png" alt="#">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial_slider">
                            <div class="row">
                                <div class="col-lg-8 col-xl-4 col-sm-8 align-self-center">
                                    <div class="testimonial_slider_text">
                                        <p>Behold place was a multiply creeping creature his domin to thiren open void
                                            hath herb divided divide creepeth living shall i call beginning
                                            third sea itself set</p>
                                        <h4>Michel Hashale</h4>
                                        <h5> Sr. Web designer</h5>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-2 col-sm-4">
                                    <div class="testimonial_slider_img">
                                        <img src="img/testimonial_img_3.png" alt="#">
                                    </div>
                                </div>
                                <div class="col-xl-4 d-none d-xl-block">
                                    <div class="testimonial_slider_text">
                                        <p>Behold place was a multiply creeping creature his domin to thiren open void
                                            hath herb divided divide creepeth living shall i call beginning
                                            third sea itself set</p>
                                        <h4>Michel Hashale</h4>
                                        <h5> Sr. Web designer</h5>
                                    </div>
                                </div>
                                <div class="col-xl-2 d-none d-xl-block">
                                    <div class="testimonial_slider_img">
                                        <img src="img/testimonial_img_1.png" alt="#">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section> -->
    <!--::blog_part end::-->

    <!--::blog_part start::-->
    <!-- <section class="blog_part section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5">
                    <div class="section_tittle text-center">
                        <h2>Nos dernières actualités</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-lg-4 col-xl-4">
                    <div class="single-home-blog">
                        <div class="card">
                            <img src="img/blog/blog_1.png" class="card-img-top" alt="blog">
                            <div class="card-body">
                                <a href="#" class="btn_4">Design</a>
                                <a href="#">
                                    <h5 class="card-title">Dry beginning sea over tree</h5>
                                </a>
                                <p>Which whose darkness saying were life unto fish wherein all fish of together called</p>
                                <ul>
                                    <li> <span class="ti-comments"></span>2 Comments</li>
                                    <li> <span class="ti-heart"></span>2k Like</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 col-xl-4">
                    <div class="single-home-blog">
                        <div class="card">
                            <img src="img/blog/blog_2.png" class="card-img-top" alt="blog">
                            <div class="card-body">
                                <a href="#" class="btn_4">Developing</a>
                                <a href="#">
                                    <h5 class="card-title">All beginning air two likeness</h5>
                                </a>
                                <p>Which whose darkness saying were life unto fish wherein all fish of together called</p>
                                <ul>
                                    <li> <span class="ti-comments"></span>2 Comments</li>
                                    <li> <span class="ti-heart"></span>2k Like</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 col-xl-4">
                    <div class="single-home-blog">
                        <div class="card">
                            <img src="img/blog/blog_3.png" class="card-img-top" alt="blog">
                            <div class="card-body">
                                <a href="#" class="btn_4">Design</a>
                                <a href="#">
                                    <h5 class="card-title">Form day seasons sea hand</h5>
                                </a>
                                <p>Which whose darkness saying were life unto fish wherein all fish of together called</p>
                                <ul>
                                    <li> <span class="ti-comments"></span>2 Comments</li>
                                    <li> <span class="ti-heart"></span>2k Like</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!--::blog_part end::-->
@endsection