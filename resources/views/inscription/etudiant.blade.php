@extends('layouts.app02')

@section('title')
    Institut des Métiers du Numérique (IMeN) | Devenir Etudiant
@endsection

@section('content')
    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg_workshops">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                            <H2>PAGE BIENTOT DISPONIBLE</H2>
                            <!-- <h2>NOTRE RESEAU</h2> -->
                            <!-- <p>Home<span>/</span>Course Details</p> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->

    <section>
        <h2></h2>
    </section>

    <p style="text-align: center; margin: 25px;">
        <!-- <a href="{{ route('inscription_etudiant') }}" class="btn_1">DEVENIR ETUDIANT </a> -->
        <a href="{{ route('decouvrir_certif') }}" class="btn_2">LE PARCOURS DE CERTIFICATION </a>
    </p>
@endsection