@extends('layout.app')

@section('content')
<div class="page-title">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="content">
                    <h2 class="title-banner">Nosotros</h2>
                    <p>OB consultores S.A.S., somos una empresa integrada por un equipo deabogados altamente capacitados y cualificados con valores y principio.</p>
                </div>
            </div>
            <div class="col-lg-4">
                <ul class="breadcrumb">
                    <li><a href="/" class="active">Inicio</a></li>
                    <li><a href="#">Nosotros</a></li>
                </ul>
            </div>
        </div>
    </div>
</div><!-- page-title -->
<div class="about about-style1 overlay" id="quienes-somos">
    <div class="container">
        <div class="text-content">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-sm-12 mb-2">
                    <div class="heading">QUIÉNES SOMOS</div>
                </div>
                <div class="col-sm-12">
                    <p class="description">
                        OB consultores S.A.S., somos una empresa integrada por un equipo de abogados altamente capacitados y cualificados con valores y principio. Dedicados a la consultoría, especializados en derecho penal, civil, laboral, familiar, administrativo, pensiones, insolvencia económica, seguridad social y asesoría en tránsito y transporte. Lo que nos permite ofrecer un servicio multidisciplinar integral para satisfacer las necesidades de nuestros clientes.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div><!-- about -->

{{-- <div class="facts">
    <div class="container">
        <div class="flat-counter">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="counter">
                        <div class="content-counter">
                            <div class="numb-count-wrap">
                                <span class="numb-count" data-from="0" data-to="42" data-speed="2000" data-inviewport="yes">42</span>
                            </div>
                            <div class="name-count">Years of Experience</div>
                            <div class="icon-count"><img src="{{ asset('assets/images/home1/09.png') }}" alt="images"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="counter">
                        <div class="content-counter">
                            <div class="numb-count-wrap">
                                <span class="numb-count" data-from="0" data-to="100" data-speed="2000" data-inviewport="yes">100</span>
                                <span class="numb-bs">+</span>
                            </div>
                            <div class="name-count">Total Attorney</div>
                            <div class="icon-count"><img src="{{ asset('assets/images/home1/10.png') }}" alt="images"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="counter">
                        <div class="content-counter">
                            <div class="numb-count-wrap">
                                <span class="numb-count" data-from="0" data-to="2000" data-speed="2000" data-inviewport="yes">2000</span>
                                <span class="numb-bs">+</span>
                            </div>
                            <div class="name-count">Happy Clients</div>
                            <div class="icon-count"><img src="{{ asset('assets/images/home1/11.png') }}" alt="images"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="counter">
                        <div class="content-counter">
                            <div class="numb-count-wrap">
                                <span class="numb-count" data-from="0" data-to="99" data-speed="2000" data-inviewport="yes">99</span>
                                <span class="numb-bs">%</span>
                            </div>
                            <div class="name-count">Success Rate</div>
                            <div class="icon-count"><img src="{{ asset('assets/images/home1/12.png') }}" alt="images"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}

<section class="about-home">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="featured-post">
                    <div class="entry-image">
                        <img src="{{ asset('assets/images/home1/04.png') }}" alt="images">
                    </div>
                    <div class="image-move">
                        <img src="{{ asset('assets/images/home1/05.png') }}" alt="images" class="oval-one">
                        <img src="{{ asset('assets/images/home1/06.png') }}" alt="images" class="oval-two">
                        <img src="{{ asset('assets/images/home1/07.png') }}" alt="images" class="oval-three">
                        <img src="{{ asset('assets/images/home1/08.png') }}" alt="images" class="oval-four">
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="flat-spacer" data-desktop="36" data-sdesktop="20" data-mobi="0" data-smobi="0"></div>
                <div class="content">
                    <div class="title"><a href="#">Nuestra Entidad</a></div>
                    <p class="description">
                        <b>MISIÓN</b><br>
                        Asesorar y brindar soluciones jurídicas a nuestros clientes, en las diferentes áreas del derecho, ofreciendo un ser vicio de confidencialidad, calidad y excelencia, posicionándonos como una sociedad líder en el departamento del Huila en la prestación de servicios de representación judicial y consultoría jurídicas.
                    </p>
                    <p class="description">
                        <b>VISIÓN</b><br>
                        En 2025 ser reconocida como una firma consultora líder a nivel nacional, comprometida con el desarrollo y posicionamiento de nuestros clientes, basados en la eficiencia jurídica que permita lograr mejores estándares de competitividad.
                    </p>
                    <div class="fl-btn">
                        {{-- <a href="#" class="hvr-vertical">Ver mas</a> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="practice-featured">
    <div class="featured">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="featured-post">
                        <div class="entry-image">
                            <img src="{{ asset('assets/images/home1/14.png') }}" alt="images">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="flat-spacer" data-desktop="63" data-sdesktop="63" data-mobi="30" data-smobi="30"></div>
                    <div class="content">
                        {{-- <div class="caption">Principios Institucionales</div> --}}
                        <h4 class="heading">Principios Institucionales</h4>
                        <p class="description">
                            <b>OPORTUNIDAD</b><br>
                            La prevención de los procesos legales frente a cualquier jurisdicción es uno de los propósitos de nuestro actuar, mas que por tendencia actuar por la desjudicialización del conflicto. Es así como la prevención y celeridad de las actuaciones de la firma constituyen nuestra meta y propósito.
                        </p>
                        <p class="description">
                            <b>PREVENCIÓN:</b><br>
                            Nuestra filosofía corporativa esta orientada a la prestación de servicios de asesoría y consultoría preventiva en virtud de la importancia y efecto que conlleva actuaciones como estas en el desarrollo de los asuntos legales y teniendo como prioridad la solución de los problemas de nuestros clientes y la prevención de sus conflictos con miras a optimizar sus recursos
                        </p>
                        <p class="description">
                            <b>EFECTIVIDAD:</b><br>
                            Del análisis profundo de las posibles soluciones jurídicas únicamente se adoptan las de mayor beneficio para nuestros clientes, orientando nuestra acción a la defensa de sus intereses, la minimización del impacto y el menoscabo de los mismos
                        </p>
                        <p class="description mb-3">
                            <b>RESPONSABILIDAD, CONFIABILIDAD Y ÉTICA:</b><br>
                            Ofrecemos tranquilidad jurídica a quienes depositan en nuestras manos sus asuntos legales, prejudiciales y judiciales, con la mayor garantía de contar con nuestra especial, diligencia y el mayor sigilo profesional.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- featured -->
</section>

<div class="faq" id="politica-de-calidad">
    <div class="container">
        <div class="title-section text-center">
            <h3 class="flat-title">Política de Calidad</h3>
        </div>
            <div class="content-tab">
                <div class="content-inner">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="questions-content">
                                <div class="item-reply">
                                    La excelencia, eficacia y responsabilidad en cada servicio prestado, nos dan la garantia de generar la mayor satisfaccion a nuestros clientes. Nuestro capital humano capacitado, nos permite obtener el éxito esperado por todos. Estamos comprometidos en el cumplimiento legal de todos los requisitos exigidos en los ordenamiento jurídicos actuales siempre buscando la mejora continua de nuestro Sistema de Gestion de Calidad.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
