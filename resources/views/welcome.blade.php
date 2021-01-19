@extends('layout.app')

@section('MyScripts') <script src="{{ asset('assets/javascript/pages/consulta.js') }}"></script> @endsection

@section('content')
<div class="flat-slider clearfix">
    <div class="rev_slider_wrapper fullwidthbanner-container">
        <div id="rev-slider1" class="rev_slider fullwidthabanner">
            <ul>
                <!-- Slide 1 -->
                <li data-transition="random">
                    <!-- Main Image -->
                    <img src="{{ asset('assets/images/transparent-head/01.jpg') }}" alt="" data-bgposition="center center" data-no-retina>

                    <!-- Layers -->
                    {{-- <div class="tp-caption tp-resizeme text-white font-weight-700 text-center"
                        data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                        data-y="['middle','middle','middle','middle']" data-voffset="['-146','-146','-130','-150']"
                        data-fontsize="['30','30','24','16']"
                        data-lineheight="['70','70','36','30']"
                        data-width="full"
                        data-height="none"
                        data-whitespace="normal"
                        data-transform_idle="o:1;"
                        data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                        data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                        data-mask_in="x:0px;y:[100%];"
                        data-mask_out="x:inherit;y:inherit;"
                        data-start="700"
                        data-splitin="none"
                        data-splitout="none"
                        data-responsive_offset="on">
                        BIENVENIDOS
                    </div> --}}

                    {{-- <div class="tp-caption tp-resizeme text-white font-weight-700 text-center"
                        data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                        data-y="['middle','middle','middle','middle']" data-voffset="['-80','-80','-70','-80']"
                        data-fontsize="['72','72','52','40']"
                        data-lineheight="['100','100','64','52']"
                        data-width="auto"
                        data-height="none"
                        data-whitespace="normal"
                        data-transform_idle="o:1;"
                        data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                        data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                        data-mask_in="x:0px;y:[100%];"
                        data-mask_out="x:inherit;y:inherit;"
                        data-start="1000"
                        data-splitin="none"
                        data-splitout="none"
                        data-responsive_offset="on">
                        <img src="{{ asset('assets/images/transparent-head/ob.png') }}" style="margin-top: 20px;" alt="">
                    </div> --}}

                    {{-- <div class="tp-caption tp-resizeme text-description text-white text-center"
                        data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                        data-y="['middle','middle','middle','middle']" data-voffset="['31','31','10','40']"
                        data-fontsize="['21','21','16','16']"
                        data-lineheight="['33','33','28','28']"
                        data-width="full"
                        data-height="none"
                        data-whitespace="normal"
                        data-transform_idle="o:1;"
                        data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                        data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                        data-mask_in="x:0px;y:[100%];"
                        data-mask_out="x:inherit;y:inherit;"
                        data-start="1000"
                        data-splitin="none"
                        data-splitout="none"
                        data-responsive_offset="on">
                        La excelencia, eficacia y responsabilidad<br> en cada servicio prestado
                    </div> --}}

                    {{-- <div class="tp-caption text-center btn-read-more"
                        data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                        data-y="['middle','middle','middle','middle']" data-voffset="['133','106','106','140']"
                        data-width="full"
                        data-height="none"
                        data-whitespace="normal"
                        data-transform_idle="o:1;"
                        data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                        data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                        data-mask_in="x:0px;y:[100%];"
                        data-mask_out="x:inherit;y:inherit;"
                        data-start="1000"
                        data-splitin="none"
                        data-splitout="none"
                        data-responsive_offset="on">
                        <a href="#" class="hvr-vertical">Ver mas</a>
                    </div> --}}
                </li>
                <!-- /End Slide 1 -->

                <!-- Slide 2 -->
                <li data-transition="random">
                    <!-- Main Image -->
                    <img src="{{ asset('assets/images/transparent-head/02.jpg') }}" alt="" data-bgposition="center center" data-no-retina>

                    <!-- Layers -->
                    {{-- <div class="tp-caption tp-resizeme text-white font-weight-700 text-center"
                        data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                        data-y="['middle','middle','middle','middle']" data-voffset="['-146','-146','-130','-150']"
                        data-fontsize="['30','30','24','16']"
                        data-lineheight="['70','70','36','30']"
                        data-width="full"
                        data-height="none"
                        data-whitespace="normal"
                        data-transform_idle="o:1;"
                        data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                        data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                        data-mask_in="x:0px;y:[100%];"
                        data-mask_out="x:inherit;y:inherit;"
                        data-start="700"
                        data-splitin="none"
                        data-splitout="none"
                        data-responsive_offset="on">
                        BIENVENIDOS
                    </div>

                    <div class="tp-caption tp-resizeme text-white font-weight-700 text-center"
                        data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                        data-y="['middle','middle','middle','middle']" data-voffset="['-80','-80','-70','-80']"
                        data-fontsize="['72','72','52','40']"
                        data-lineheight="['100','100','64','52']"
                        data-width="full"
                        data-height="none"
                        data-whitespace="normal"
                        data-transform_idle="o:1;"
                        data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                        data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                        data-mask_in="x:0px;y:[100%];"
                        data-mask_out="x:inherit;y:inherit;"
                        data-start="1000"
                        data-splitin="none"
                        data-splitout="none"
                        data-responsive_offset="on">
                        <img src="{{ asset('assets/images/transparent-head/ob.png') }}" style="margin-top: 20px;" alt="">
                    </div>

                    <div class="tp-caption tp-resizeme text-description text-white text-center"
                        data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                        data-y="['middle','middle','middle','middle']" data-voffset="['31','31','10','40']"
                        data-fontsize="['21','21','16','16']"
                        data-lineheight="['33','33','28','28']"
                        data-width="full"
                        data-height="none"
                        data-whitespace="normal"
                        data-transform_idle="o:1;"
                        data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                        data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                        data-mask_in="x:0px;y:[100%];"
                        data-mask_out="x:inherit;y:inherit;"
                        data-start="1000"
                        data-splitin="none"
                        data-splitout="none"
                        data-responsive_offset="on">
                        La excelencia, eficacia y responsabilidad<br> en cada servicio prestado
                    </div> --}}

                    {{-- <div class="tp-caption text-center btn-read-more"
                        data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                        data-y="['middle','middle','middle','middle']" data-voffset="['133','106','106','140']"
                        data-width="full"
                        data-height="none"
                        data-whitespace="normal"
                        data-transform_idle="o:1;"
                        data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                        data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                        data-mask_in="x:0px;y:[100%];"
                        data-mask_out="x:inherit;y:inherit;"
                        data-start="1000"
                        data-splitin="none"
                        data-splitout="none"
                        data-responsive_offset="on">
                        <a href="#" class="hvr-vertical">Ver mas</a>
                    </div> --}}
                </li>
                <!-- /End Slide 2 -->
            </ul>
        </div>
    </div>
</div><!-- flat-slider -->

<section class="iconbox-home clearfix">
    <div class="container">
        <div class="iconbox-features type2">
            <div class="iconbox iconbox-1">
                <div class="bck-stand"></div>
                <div class="bnc">
                    <div class="iconbox-wrap">
                        <div class="iconbox-icon">
                            <img src="{{ asset('assets/images/home1/01.png') }}" alt="images">
                        </div>
                        <div class="iconbox-content">
                            <h5 class="title"><a href="/nosotros/#quienes-somos">Quiénes Somos </a></h5>
                            <p class="description">
                                OB consultores s.a.s, somos una empresa integrada por un equipo de abogados altamente capacitados y cualificados con valores y principio
                            </p>
                            <div class="fl-btn">
                                <a href="/nosotros/#quienes-somos">Ver mas</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="iconbox iconbox-2 active">
                <div class="bck-stand"></div>
                <div class="bnc">
                    <div class="iconbox-wrap">
                        <div class="iconbox-icon">
                            <img src="{{ asset('assets/images/home1/02.png') }}" alt="images">
                        </div>
                        <div class="iconbox-content">
                            <h5 class="title"><a href="{{ asset('assets/revista/ObConsultores/index.html') }}" target="_blank">Nuestros Servicios </a></h5>
                            <p class="description">
                                Gracias a nuestra experiencia y relación en cuanto al manejo de casos jurídicos con nuestros clientes, somos capaces de brindarle una amplia gama de serviciosjurídicos de alto nivel.
                            </p>
                            <div class="fl-btn">
                                <a href="{{ asset('assets/revista/ObConsultores/index.html') }}" target="_blank">Ver Portafolio</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="iconbox iconbox-3">
                <div class="bck-stand"></div>
                <div class="bnc">
                    <div class="iconbox-wrap">
                        <div class="iconbox-icon">
                            <img src="{{ asset('assets/images/home1/03.png') }}" alt="images">
                        </div>
                        <div class="iconbox-content">
                            <h5 class="title"><a href="/nosotros/#politica-de-calidad">Política de Calidad</a></h5>
                            <p class="description">
                                La excelencia, eficacia y responsabilidad en cada servicio prestado, nos dan la garantia de generar la mayor satisfaccion a nuestros clientes
                            </p>
                            <div class="fl-btn">
                                <a href="/nosotros/#politica-de-calidad">Ver mas</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- iconbox -->

<section class="featured featured-style3 testimonial">
    <div class="container">
        <div class="row">
            {{-- <div class="col-lg-5 col-md-12">
                <div class="content">
                    <h4 class="heading">ASESORÍAS JURÍDICAS</h4>
                    <p class="description text-justify">
                        Nuestras actuaciones están orientadas en prestar un servicio oportuno de asesoría, consultoría y resolución de problemas, la cual nos exige trabajar con disciplina, honestidad y efectividad en las siguientes áreas del derecho.
                        <br>
                        Consultoría en procesos de insolvencia económica en personas naturales no comerciantes e insolvencia empresarial Ley 1116 /2006 y sus Decretos reglamentarios. Consultoría en Tránsito y Transporte (fotomultas, alcoholemia, comparendos, etc)
                    </p>
                </div>
            </div>
            <div class="col-lg-7 col-md-12">
                <div class="iconbox-features type3">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-12">
                            <div class="iconbox">
                                <div class="iconbox-icon">
                                </div>
                                <div class="iconbox-content">
                                    <h5 class="title"><a href="#">Derecho Penal</a></h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-12">
                            <div class="iconbox">
                                <div class="iconbox-icon">
                                </div>
                                <div class="iconbox-content">
                                    <h5 class="title"><a href="#">Derecho Laboral y seguridad social</a></h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-12">
                            <div class="iconbox">
                                <div class="iconbox-icon">
                                </div>
                                <div class="iconbox-content">
                                    <h5 class="title"><a href="#">Derecho Privado</a></h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-12">
                            <div class="iconbox">
                                <div class="iconbox-icon">
                                </div>
                                <div class="iconbox-content">
                                    <h5 class="title"><a href="#">Pensiones</a></h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-12">
                            <div class="iconbox">
                                <div class="iconbox-icon">
                                </div>
                                <div class="iconbox-content">
                                    <h5 class="title"><a href="#">Derecho Administrativo</a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            <img src="{{ asset('assets/images/home1/03.jpg') }}" alt="">
        </div>
    </div>
    {{-- <div class="style-text"></div> --}}
</section><!-- featured -->

<section class="practice-featured">
    <div class="practice-area practice-area-style2">
        <div class="container">
            <div class="title-section text-center">
                <h3 class="flat-title">Nuestros Servicios</h3>
                <p class="sub-title">De la mano de nuestro prestigioso equipo de abogados expertos en las diferentes disciplinas del derecho, ofrecemos asesoría, representación y acompañamiento en cualquier caso que se le presente, bien sea como persona natural o jurídica, dentro de las siguientes áreas legales.</p>
            </div>
            <div class="practice-area-wrap">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="image-box-law">
                            <div class="featured-post">
                                <div class="entry-image">
                                    <a href="#"><img src="{{ asset('assets/images/practice/09.jpg') }}" alt="images"></a>
                                </div>
                                <div class="icon">
                                    <img src="{{ asset('assets/images/practice/15.png') }}" alt="images">
                                </div>
                            </div>
                            <div class="content-law">
                                <h4 class="name">DERECHO PENAL</h4>
                                <p class="description text-justify">Asesoría y representación integral en materia penal, mediante estrategias frente a actos delictivos o ilegales que puedan afectar en casos de personas jurídicas, a directivos y funcionarios de empresas, clientes, proveedores y terceros relacionados con la actividad empresarial, al igual que a personas naturales.</p>
                                <a href="#">Ver mas</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="image-box-law">
                            <div class="featured-post">
                                <div class="entry-image">
                                    <a href="#"><img src="{{ asset('assets/images/practice/04.png') }}" alt="images"></a>
                                </div>
                                <div class="icon">
                                    <img src="{{ asset('assets/images/practice/16.png') }}" alt="images">
                                </div>
                            </div>
                            <div class="content-law">
                                <h4 class="name">DERECHO PRIVADO</h4>
                                <p class="description text-justify">Contamos con excelentes experiencia y condiciones académicas y profesionales en todos los aspectos relacionados con el Derecho Privado, cuya práctica se desarrolla desde la asesoría, consultoría y acompañamiento en las diferentes especialidades de ésta área, llegando hasta la representación judicial y extrajudicial garantizando los intereses de todos nuestros clientes.</p>
                                <a href="#">Ver mas</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="image-box-law">
                            <div class="featured-post">
                                <div class="entry-image">
                                    <a href="#"><img src="{{ asset('assets/images/practice/05.png') }}" alt="images"></a>
                                </div>
                                <div class="icon">
                                    <img src="{{ asset('assets/images/practice/18.png') }}" alt="images">
                                </div>
                            </div>
                            <div class="content-law">
                                <h4 class="name">DERECHO LABORAL Y SEGURIDAD SOCIAL</h4>
                                <p class="description text-justify">Nuestra práctica se encuentra conformada por profesionales especializados en Derecho Laboral y Seguridad Social, con experiencia en consultorías en Derecho Laboral Individual y en Derecho Laboral Colectivo, en litigio en procesos laborales en primera instancia, segunda instancia y Corte Suprema de Justicia.</p>
                                <a href="#">Ver mas</a>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="image-box-law">
                            <div class="featured-post">
                                <div class="entry-image">
                                    <a href="#"><img src="{{ asset('assets/images/practice/06.png') }}" alt="images"></a>
                                </div>
                                <div class="icon">
                                    <img src="{{ asset('assets/images/practice/18.png') }}" alt="images">
                                </div>
                            </div>
                            <div class="content-law">
                                <h4 class="name">Seguridad Social</h4>
                                <p class="description">Yens nessiecte dunt ut labore et dolore magna aliqu tonesl not enim</p>
                                <a href="#">Ver mas</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="image-box-law">
                            <div class="featured-post">
                                <div class="entry-image">
                                    <a href="#"><img src="{{ asset('assets/images/practice/07.png') }}" alt="images"></a>
                                </div>
                                <div class="icon">
                                    <img src="{{ asset('assets/images/practice/19.png') }}" alt="images">
                                </div>
                            </div>
                            <div class="content-law">
                                <h4 class="name">Investigación</h4>
                                <p class="description">Yens nessiecte dunt ut labore et dolore magna aliqu tonesl not enim</p>
                                <a href="#">Ver mas</a>
                            </div>
                        </div>
                    </div> --}}
                    <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="image-box-law">
                            <div class="featured-post">
                                <div class="entry-image">
                                    <a href="#"><img src="{{ asset('assets/images/practice/08.png') }}" alt="images"></a>
                                </div>
                                <div class="icon">
                                    <img src="{{ asset('assets/images/practice/20.png') }}" alt="images">
                                </div>
                            </div>
                            <div class="content-law">
                                <h4 class="name">PENSIONES</h4>
                                <p class="description text-justify">Nuestra experiencia nos permite brindar una asesoría especializada a cualquier persona que presente inconsistencias en sus aportes pensionales y/o se sienta vulnerado en sus derechos pensionales adquiridos; nuestro trabajo va desde una corrección en su historial laboral hasta la representación legal que le permita el reconocimiento y goce de éste derecho.</p>
                                <a href="#">Ver mas</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="image-box-law">
                            <div class="featured-post">
                                <div class="entry-image">
                                    <a href="#"><img src="{{ asset('assets/images/practice/07.png') }}" alt="images"></a>
                                </div>
                                <div class="icon">
                                    <img src="{{ asset('assets/images/practice/19.png') }}" alt="images">
                                </div>
                            </div>
                            <div class="content-law">
                                <h4 class="name">OTROS SERVICIOS</h4>
                                <p class="description text-justify">De la mano de nuestro prestigioso equipo de abogados expertos en las diferentes disciplinas del derecho, ofrecemos asesoría, representación y acompañamiento en cualquier caso que se le presente, bien sea como persona natural o jurídica, dentro de las siguientes áreas legales.
                                <br>Acciones de Tutela <br>
                                Derechos de Petición <br>
                                Consultoría general
                                </p>
                                <a href="#">Ver mas</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- practice -->
    <div class="featured featured-style2">
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
                        <h4 class="heading">Conozca nuestros principios institucionales</h4>
                        <p class="description text-justify">
                            <b>OPORTUNIDAD</b><br>
                            La prevención de los procesos legales frente a cualquier jurisdicción es uno de los propósitos de nuestro actuar, mas que por tendencia actuar por la desjudicialización del conflicto. Es así como la prevención y celeridad de las actuaciones de la firma constituyen nuestra meta y propósito.
                        </p>
                        <p class="description text-justify">
                            <b>PREVENCIÓN:</b><br>
                            Nuestra filosofía corporativa esta orientada a la prestación de servicios de asesoría y consultoría preventiva en virtud de la importancia y efecto que conlleva actuaciones como estas en el desarrollo de los asuntos legales y teniendo como prioridad la solución de los problemas de nuestros clientes y la prevención de sus conflictos con miras a optimizar sus recursos
                        </p>
                        <p class="description text-justify">
                            <b>EFECTIVIDAD:</b><br>
                            Del análisis profundo de las posibles soluciones jurídicas únicamente se adoptan las de mayor beneficio para nuestros clientes, orientando nuestra acción a la defensa de sus intereses, la minimización del impacto y el menoscabo de los mismos
                        </p>
                        <p class="description text-justify">
                            <b>RESPONSABILIDAD, CONFIABILIDAD Y ÉTICA:</b><br>
                            Ofrecemos tranquilidad jurídica a quienes depositan en nuestras manos sus asuntos legales, prejudiciales y judiciales, con la mayor garantía de contar con nuestra especial, diligencia y el mayor sigilo profesional.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- featured -->
</section><!-- practice-featured -->

{{-- <section class="attorneys attorneys-style2 mx-5">
    <div class="container">
        <div class="top-wrap">
            <div class="row">
                <div class="col-lg-4 col-md-12">
                    <div class="content">
                        <div class="caption">Equipo de Trabajo</div>
                        <p class="description">
                            Dolore magna aliqu onoet enim ad minim pisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                        </p>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="attorneys-info attorneys-hv-link mg-attorneys-home custom-align custom-end">
                                <div class="attorneys-content">
                                    <div class="content-wrap rotate-1">
                                        <h3 class="name"><a href="#">Joimer Osorio</a></h3>
                                        <p class="position">Gerente general</p>
                                    </div>
                                </div>
                                <div class="attorneys-avatar hv-link-content">
                                    <div class="image image-full">
                                        <img src="{{ asset('assets/images/attorneys/01.png') }}" alt="images">
                                    </div>
                                    <div class="overlay-box">
                                        <div class="content">
                                            <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="attorneys-info attorneys-hv-link mg-attorneys-home">
                                <div class="attorneys-avatar hv-link-content">
                                    <div class="image image-full">
                                        <img src="{{ asset('assets/images/attorneys/02.png') }}" alt="images">
                                    </div>
                                    <div class="overlay-box">
                                        <div class="content">
                                            <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="attorneys-content">
                                    <div class="content-wrap rotate-2">
                                        <h3 class="name"><a href="#">Johnson Doe</a></h3>
                                        <p class="position">Senior Attorney</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="consulta" class="mx-5"></div>
            </div>
        </div>
    </div>
</section> --}}

<div class="case-evaluation mt-5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-12">
                <div class="go-up">
                    <div class="themesflat-content-box" data-padding="0% 0% 0% 0%" data-sdesktoppadding="0% 0% 0% 0%" data-ssdesktoppadding="0% 0% 0% 0%" data-mobipadding="100px 0% 0% 0%" data-smobipadding="100px 0% 0% 0%">
                        <form action="/consultas/solicitar" method="POST" id="form_solicitar_consulta" class="form-evaluation">
                            @csrf

                            <div class="wrap-evaluation">
                                <h5 class="title">Solicitar Consulta</h5>
                                <div class="your-name mg-text">
                                    <input type="text" class="your-name" name="nombre" placeholder="Nombre completo" required>
                                </div>
                                <div class="your-email mg-text">
                                    <input type="text" class="your-email" name="correo" placeholder="Correo electronico" required>
                                </div>
                                <div class="your-phone mg-text">
                                    <input type="text" class="your-phone" name="telefono" placeholder="Numero de telefono">
                                </div>
                                <div class="subject mg-text">
                                    <input type="text" class="subject" name="asunto" placeholder="Asunto" required>
                                </div>
                                <div class="message-wrap mg-text">
                                    <textarea id="message" name="mensaje" rows="8" placeholder="Mensaje" required></textarea>
                                </div>
                                <div class="fl-btn">
                                    <button type="submit" class="hvr-vertical">ENVIAR</button>
                                </div>
                                <div class="fl-btn">
                                    <div class="alert alert-success mt-2 text-center d-none" id="respuesta_solicitud" role="alert">
                                        <strong>Solicitud enviada correctamente.</strong>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-md-12">
                <div class="content-evaluation">
                    <div class="themesflat-content-box" data-padding="113px 0% 101px 100px" data-sdesktoppadding="113px 0% 101px 0" data-ssdesktoppadding="113px 0% 101px 0" data-mobipadding="50px 0 100px 0" data-smobipadding="50px 0 100px 0">
                        <div class="caption">Escribenos</div>
                        <h4 class="heading">Estamos para atenderte</h4>
                        <p class="description">
                            Consultoría en procesos de insolvencia económica en personas naturales no comerciantes e insolvencia empresarial Ley 1116 /2006 y sus Decretos reglamentarios.
                        </p>
                        <div class="flat-spacer" data-desktop="90" data-sdesktop="60" data-mobi="25" data-smobi="25"></div>
                        <div class="call-us">
                            <div class="text">
                                O llamanos
                            </div>
                            <h3 class="phone-number">
                                (+57) 316 875 6444 <span class="toll-free"></span>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- case-evaluation -->

{{-- <section class="testimonial clearfix">
    <div class="container-fluid">
        <div class="title-section text-center">
            <h3 class="flat-title">Preguntas Frecuentes</h3>
            <p class="sub-title">Dolore magna aliqu onoet enim ad minim veniam</p>
        </div>
        <div class="slider testimonial-wrap testimonial-flexslider equalize sm-equalize-auto">
            <div class="col-left">
                <div class="themesflat-content-box" data-padding="0% 0% 0% 28%" data-sdesktoppadding="0% 0% 0% %0" data-ssdesktoppadding="0% 0% 0% 0%" data-mobipadding="0% 0% 0% 0%" data-smobipadding="0% 0% 0% 0%">
                    <div id="carousel-testimonial" class="flexslider">
                        <ul class="slides client-avatar translate-none">
                            <li class="avatar avatar-1">
                                <img src="{{ asset('assets/images/home1/17.png') }}" alt="images">
                            </li>
                            <li class="avatar avatar-2">
                                <img src="{{ asset('assets/images/home1/18.png') }}" alt="images">
                            </li>
                            <li class="avatar avatar-3">
                                <img src="{{ asset('assets/images/home1/19.png') }}" alt="images">
                            </li>
                            <li class="avatar avatar-4">
                                <img src="{{ asset('assets/images/home1/20.png') }}" alt="images">
                            </li>
                            <li class="avatar avatar-5">
                                <img src="{{ asset('assets/images/home1/21.png') }}" alt="images">
                            </li>
                            <li class="avatar avatar-6">
                                <img src="{{ asset('assets/images/home1/22.png') }}" alt="images">
                            </li>
                            <li class="avatar avatar-7">
                                <img src="{{ asset('assets/images/home1/23.png') }}" alt="images">
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-right">
                <div class="themesflat-content-box" data-padding="5% 31.2% 0% 20%" data-sdesktoppadding="10% 10% 0% 0%" data-ssdesktoppadding="10% 10% 0% 0%" data-mobipadding="40px 0% 0% 0%" data-smobipadding="40px 0% 0% 0%">
                    <div id="slider-testimonial" class="flexslider">
                        <ul class="slides client-info">
                            <li>
                                <div class="heading">They are professional</div>
                                <p class="description">
                                    Lorem ipsum dolor sit amet, consecte dunt ut labore et dot  nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                                </p>
                                <div class="flat-spacer" data-desktop="47" data-sdesktop="47" data-mobi="30" data-smobi="30"></div>
                            </li>
                            <li>
                                <div class="heading">They are professional</div>
                                <p class="description">
                                    Lorem ipsum dolor sit amet, consecte dunt ut labore et dot  nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                                </p>
                                <div class="flat-spacer" data-desktop="47" data-sdesktop="47" data-mobi="30" data-smobi="30"></div>
                            </li>
                            <li>
                                <div class="heading">They are professional</div>
                                <p class="description">
                                    Lorem ipsum dolor sit amet, consecte dunt ut labore et dot  nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                                </p>
                                <div class="flat-spacer" data-desktop="47" data-sdesktop="47" data-mobi="30" data-smobi="30"></div>
                            </li>
                            <li>
                                <div class="heading">They are professional</div>
                                <p class="description">
                                    Lorem ipsum dolor sit amet, consecte dunt ut labore et dot  nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                                </p>
                                <div class="flat-spacer" data-desktop="47" data-sdesktop="47" data-mobi="30" data-smobi="30"></div>
                            </li>
                            <li>
                                <div class="heading">They are professional</div>
                                <p class="description">
                                    Lorem ipsum dolor sit amet, consecte dunt ut labore et dot  nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                                </p>
                                <div class="flat-spacer" data-desktop="47" data-sdesktop="47" data-mobi="30" data-smobi="30"></div>
                            </li>
                            <li>
                                <div class="heading">They are professional</div>
                                <p class="description">
                                    Lorem ipsum dolor sit amet, consecte dunt ut labore et dot  nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                                </p>
                                <div class="flat-spacer" data-desktop="47" data-sdesktop="47" data-mobi="30" data-smobi="30"></div>
                            </li>
                            <li>
                                <div class="heading">They are professional</div>
                                <p class="description">
                                    Lorem ipsum dolor sit amet, consecte dunt ut labore et dot  nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                                </p>
                                <div class="flat-spacer" data-desktop="47" data-sdesktop="47" data-mobi="30" data-smobi="30"></div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}

@endsection
