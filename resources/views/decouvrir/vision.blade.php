@extends('layouts.app02')

@section('title')
    Institut des Métiers du Numérique (IMeN) | Quel est notre vision ?
@endsection

@section('content')
    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                            <h2>NOTRE VISION</h2>
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
                <div class="col-lg-10 course_details_left">
                    <!-- <div class="main_image">
                        <img class="img-fluid" src="img/formations/programmation.avif" alt="">
                    </div> -->
                    <div class="content_wrapper">
                        <h4 class="title_top">LA VISION DE L’IMeN</h4>
                        <div class="content">
                            Être un modèle d’excellence en Afrique de l’Ouest, en formant une nouvelle génération de professionnels innovants, compétents et éthiques dans les métiers du numérique, capables de relever les défis technologiques mondiaux et de contribuer à un développement socio-économique durable.
                        </div>

                        <h4 class="title">LA MISSION DE L’IMeN</h4>
                        <div class="content">
                        Notre mission est de former des professionnels qualifiés dans les métiers du numérique, de l’audiovisuel et du design graphique. Tout en les accompagnant à bâtir une vie et une carrière réussies. En d’autres termes, nous mettons l’homme au cœur de toutes nos actions.
                        </div>

                        <h4 class="title">NOTRE PARTICULARITE</h4>
                        <div class="content">
                            En plus de la formation académique spécialisée l’IMeN offre un accompagnement pratique pour assurer l'insertion professionnelle de ses étudiants. Quatre programmes phares illustrent cet engagement : <br><br>
                                <span style="font-weight: bold;">1.	Le Programme d’Insertion Professionnelle (PIP)  :</span><br>
                                Ce programme est conçu pour aider les étudiants à décrocher un emploi immédiatement après leur formation. Il propose un accompagnement sur mesure pour faciliter leur transition vers le monde professionnel et répondre aux attentes des recruteurs. <a href="{{ route('nos_programmes') }}">Cliquez pour en savoir plus.</a> <br><br>

<span style="font-weight: bold;">2.	La Foire de l’Emploi : </span><br>
Cet évènement qui se déroule sur plusieurs jours est pensé par l’IMeN pour ses étudiants certifiés et ses entreprises partenaires. Il a pour but de créer le contact entre les deux parties, donnant l’occasion des entretiens et du recrutement des nouveaux certifiés. <a href="{{ route('nos_programmes') }}">Cliquez pour en savoir plus.</a><br><br>

<span style="font-weight: bold;">3.	Le Programme de Formation en Entrepreneuriat (PFE)  :</span><br>
Destiné aux étudiants désireux de créer leur propre entreprise, ce programme leur fournit les outils nécessaires pour démarrer et gérer leur projet entrepreneurial avec succès. <a href="{{ route('nos_programmes') }}">Cliquez pour en savoir plus.</a><br><br>

<span style="font-weight: bold;">4.	IMeN Boost Days  :</span><br>
Destiné aux étudiants désireux de créer leur propre entreprise, ce programme leur fournit les outils nécessaires pour démarrer et gérer leur projet entrepreneurial avec succès. <a href="{{ route('nos_programmes') }}">Cliquez pour en savoir plus.</a><br><br>
Ces programmes sont offerts gratuitement, garantissant à chaque étudiant un soutien concret pour sa carrière, qu’il choisisse de rejoindre une entreprise ou de se lancer dans l’aventure entrepreneuriale.

                        </div>

                        <h4 class="title">UNE FORMATION DE QUALITE</h4>
                        <div class="content">
                            L’IMeN se distingue par son réseau de formateurs composé d'experts expérimentés. Les étudiants bénéficient d'une formation rigoureuse dès leur inscription, structurée autour de plusieurs étapes clés. Le parcours de certification inclut une formation 100% pratique, des examens internes d’application, la réalisation de projets réels, et une soutenance finale. Ces éléments témoignent du sérieux et du professionnalisme de l'école, qui s'engage à fournir des compétences concrètes et appliquées. L’objectif ultime de l'IMeN est de former des professionnels hautement qualifiés, capables d'apporter une réelle valeur ajoutée dans leurs domaines d'expertise.
                        </div>
                    </div>
                </div>
                <!-- <div class="col-lg-4 right-contents">
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
                        <a href="{{ route('inscription_etudiant') }}" class="btn_1 d-block">DEVENIR ETUDIANT </a>
                        <a href="/doc/IMeN_MODALITES_PAYEMENT.png" class="btn_1 d-block">Télécharger les modalités</a>
                    </div>
                </div> -->
            </div>
        </div>
    </section>
    <!--================ End Course Details Area =================-->

    <p style="text-align: center; margin: 25px;">
        <a id="pied_btn1" href="{{ route('inscription_etudiant') }}" class="btn_1">DEVENIR ETUDIANT </a>
        <a href="{{ route('decouvrir_reseau') }}" class="btn_2">DECOUVRIR NOTRE RESEAU </a>
    </p>
@endsection