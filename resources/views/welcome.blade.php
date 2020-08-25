@extends('layout.app')

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
                    <div class="tp-caption tp-resizeme text-white font-weight-700 text-center"
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
                        ObConsultores
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
                    </div>

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
                    <div class="tp-caption tp-resizeme text-white font-weight-700 text-center"
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
                        ObConsultores
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
                    </div>

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
                            <h5 class="title"><a href="#">Quiénes Somos </a></h5>
                            <p class="description">
                                Lorem ipsum dolor sit amet, consecte dunt ut labore et dolore magna aliqua. Ut enim ad minim veis nostrud
                            </p>
                            <div class="fl-btn">
                                <a href="#">Ver mas</a>
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
                            <h5 class="title"><a href="#">Nuestros Servicios </a></h5>
                            <p class="description">
                                Lorem ipsum dolor sit amet, consecte dunt ut labore et dolore magna aliqua. Ut enim ad minim veis nostrud
                            </p>
                            <div class="fl-btn">
                                <a href="#">Ver mas</a>
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
                            <h5 class="title"><a href="#">Política de Calidad</a></h5>
                            <p class="description">
                                Lorem ipsum dolor sit amet, consecte dunt ut labore et dolore magna aliqua. Ut enim ad minim veis nostrud
                            </p>
                            <div class="fl-btn">
                                <a href="#">Ver mas</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- iconbox -->
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
                        Lorem ipsum dolor sit amet, consecte dunt ut labore et dot enim ad minim veniam, quis nostrud exercitation ullamco
                    </p>
                    <p class="description">
                        Lesin reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis ure omnis iste natus error sit voluptatem accusan.
                    </p>
                    <div class="fl-btn">
                        <a href="#" class="hvr-vertical">Ver mas</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- about -->
<section class="facts">
    <div class="container">
        <div class="flat-counter">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="counter">                      
                        <div class="content-counter">
                            <div class="name-count">Investigación</div>
                            <div class="icon-count"><img src="{{ asset('assets/images/home1/11.png') }}" alt="images"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="counter">                            
                        <div class="content-counter">
                            <div class="name-count">Asesorías Juridicas</div>
                            <div class="icon-count"><img src="{{ asset('assets/images/home1/10.png') }}" alt="images"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- facts -->
<section class="practice-featured">
    <div class="practice-area practice-area-style2">
        <div class="container">
            <div class="title-section text-center">
                <h3 class="flat-title">Nuestros Servicios</h3>
                <p class="sub-title">Conozca nuestro portafolio de servicios</p>
            </div>
            <div class="practice-area-wrap">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="image-box-law">
                            <div class="featured-post">
                                <div class="entry-image">
                                    <a href="#"><img src="{{ asset('assets/images/practice/03.png') }}" alt="images"></a>
                                </div>
                                <div class="icon">
                                    <img src="{{ asset('assets/images/practice/15.png') }}" alt="images">
                                </div>
                            </div>
                            <div class="content-law">
                                <h4 class="name">Derecho Laboral - Familiar</h4>
                                <p class="description">Yens nessiecte dunt ut labore et dolore magna aliqu tonesl not enim</p>
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
                                <h4 class="name">Derecho Administrativo</h4>
                                <p class="description">Yens nessiecte dunt ut labore et dolore magna aliqu tonesl not enim</p>
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
                                    <img src="{{ asset('assets/images/practice/17.png') }}" alt="images">
                                </div>
                            </div>
                            <div class="content-law">
                                <h4 class="name">Insolvencia Economica</h4>
                                <p class="description">Yens nessiecte dunt ut labore et dolore magna aliqu tonesl not enim</p>
                                <a href="#">Ver mas</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
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
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
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
                                <h4 class="name">Transporte - Pensiones</h4>
                                <p class="description">Yens nessiecte dunt ut labore et dolore magna aliqu tonesl not enim</p>
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
                        <div class="caption">Principios Institucionales</div>
                        <h4 class="heading">Conozca nuestros principios institucionales</h4>
                        <p class="description">
                            Lorem ipsum dolor sit amet, consecte dunt ut labore et dot enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                        </p>
                        <p class="description">
                            Lorem ipsum dolor sit amet, consecte dunt ut labore et dot enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                        </p>
                        <div class="fl-btn">
                            <a href="#" class="hvr-vertical">Ver mas</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- featured -->
</section><!-- practice-featured -->

<section class="attorneys attorneys-style2 mx-5">
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
</section><!-- attorneys -->
<div class="case-evaluation mt-5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-12">
                <div class="go-up">
                    <div class="themesflat-content-box" data-padding="0% 0% 0% 0%" data-sdesktoppadding="0% 0% 0% 0%" data-ssdesktoppadding="0% 0% 0% 0%" data-mobipadding="100px 0% 0% 0%" data-smobipadding="100px 0% 0% 0%">
                        <form action="#" class="form-evaluation">
                            <div class="wrap-evaluation">
                                <h5 class="title">Solicitar Consulta</h5>
                                <div class="your-name mg-text">
                                    <input type="text" class="your-name" placeholder="Nombre completo">
                                </div>
                                <div class="your-email mg-text">
                                    <input type="text" class="your-email" placeholder="Correo electronico">
                                </div>
                                <div class="your-phone mg-text">
                                    <input type="text" class="your-phone" placeholder="Numero de telefono">
                                </div>
                                <div class="subject mg-text">
                                    <input type="text" class="subject" placeholder="Asunto">
                                </div>
                                <div class="message-wrap mg-text">
                                    <textarea name="message" id="message" rows="8" placeholder="Mensaje"></textarea>
                                </div>
                                <div class="fl-btn">
                                    <button class="hvr-vertical">ENVIAR</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-md-12">
                <div class="content-evaluation">
                    <div class="themesflat-content-box" data-padding="113px 0% 101px 100px" data-sdesktoppadding="113px 0% 101px 0" data-ssdesktoppadding="113px 0% 101px 0" data-mobipadding="50px 0 100px 0" data-smobipadding="50px 0 100px 0">
                        <div class="caption">Get quick response</div>
                        <h4 class="heading">Get a quick response and legal advice  from expert</h4>
                        <p class="description">
                            Lorem ipsum dolor sit amet, consecte dunt ut labore et dot enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                        </p>
                        <div class="flat-spacer" data-desktop="90" data-sdesktop="60" data-mobi="25" data-smobi="25"></div>
                        <div class="call-us">
                            <div class="text">
                                Or Call us 
                            </div>
                            <h3 class="phone-number">
                                123.456.7890 <span class="toll-free">(toll free)</span>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- case-evaluation -->

<section class="testimonial clearfix">
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
</section><!-- testimonial -->

@endsection