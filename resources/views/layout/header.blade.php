<div class="top-bar">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <ul class="flat-information d-lg-flex align-items-center">
                    <li class="email"><a href="#" title="Email">{{ App\Models\Config_pagina::first()->correo ?? '' }}</a></li>
                    <li class="address"><a href="#" title="Address">{{ App\Models\Config_pagina::first()->direccion ?? '' }}</a></li>
                </ul>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="flat-contact-us d-lg-flex align-items-center">
                    <a href="#" class="phone">(+57) {{ App\Models\Config_pagina::first()->telefono ?? '' }}</a>
                    <a href="#consulta" class="cosulting hvr-vertical">SOLICITAR CONSULTA
                        <div class="border-animate">
                            <div class="top"></div>
                            <div class="right"></div>
                            <div class="bottomb"></div>
                            <div class="left"></div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div><!-- top-bar -->
<header id="header" class="header bg-color">
    <div class="container">
        <div class="flex-header">
            <div id="logo" class="logo">
                <a href="/" title="Logo"><img src="{{ asset('assets/images/logo/01.png') }}" data-width="120" data-height="34" alt="images" data-retina="{{ asset('assets/images/logo/01.png') }}"></a>
            </div>
            <div class="content-menu">
                <div class="nav-wrap">
                    <div class="btn-menu"><span></span></div>
                    <nav id="mainnav" class="mainnav">
                        <ul class="menu">
                            <li>
                                <a href="/" class="{{ Request::is('/') ? 'active' : '' }}">Inicio</a>
                            </li>
                            <li>
                                <a href="/nosotros" class="{{ Request::is('nosotros') ? 'active' : '' }}">Nosotros</a>
                            </li>
                            <li>
                                <a href="/servicios" class="{{ Request::is('servicios') ? 'active' : '' }}">Servicios</a>
                            </li>
                            <li>
                                <a href="/contacto" class="{{ Request::is('contacto') ? 'active' : '' }}">Contacto</a>
                            </li>
                            <li>
                                <a href="{{ asset('assets/revista/ObConsultores/index.html') }}" target="_blank">BROCHURE</a>
                            </li>
                            <li>
                                <a href="http://admin.obconsultores.com">APP</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header><!-- header -->

