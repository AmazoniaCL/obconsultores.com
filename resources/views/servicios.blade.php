@extends('layout.app')

@section('content')
<div class="page-title">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="content">
                    <h2 class="title-banner">Nuestros Servicio</h2>
                    <p>Gracias a nuestra experiencia y relación en cuanto al manejo de casos jurídicos con nuestros clientes, somos capaces de brindarle una amplia gama de servicios jurídicos de alto nivel.</p>
                </div>
            </div>
            <div class="col-lg-4">
                <ul class="breadcrumb">
                    <li><a href="/" class="active">Inicio</a></li>
                    <li><a href="#">Nuestros Servicios</a></li>
                </ul>
            </div>
        </div>
    </div>
</div><!-- page-title -->


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
                                <p class="description">Asesoría y representación integral en materia penal, mediante estrategias frente a actos delictivos o ilegales que puedan afectar en casos de personas jurídicas, a directivos y funcionarios de empresas, clientes, proveedores y terceros relacionados con la actividad empresarial, al igual que a personas naturales.</p>
                                <a href="#DerechoPenal">Ver mas</a>
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
                                <p class="description">Contamos con excelentes experiencia y condiciones académicas y profesionales en todos los aspectos relacionados con el Derecho Privado, cuya práctica se desarrolla desde la asesoría, consultoría y acompañamiento en las diferentes especialidades de ésta área, llegando hasta la representación judicial y extrajudicial garantizando los intereses de todos nuestros clientes.</p>
                                <a href="#DerechoPrivado">Ver mas</a>
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
                                <p class="description">Nuestra práctica se encuentra conformada por profesionales especializados en Derecho Laboral y Seguridad Social, con experiencia en consultorías en Derecho Laboral Individual y en Derecho Laboral Colectivo, en litigio en procesos laborales en primera instancia, segunda instancia y Corte Suprema de Justicia.</p>
                                <a href="#DerechoLaboral">Ver mas</a>
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
                                <p class="description">Nuestra experiencia nos permite brindar una asesoría especializada a cualquier persona que presente inconsistencias en sus aportes pensionales y/o se sienta vulnerado en sus derechos pensionales adquiridos; nuestro trabajo va desde una corrección en su historial laboral hasta la representación legal que le permita el reconocimiento y goce de éste derecho.</p>
                                <a href="#Pensiones">Ver mas</a>
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
                                <p class="description">De la mano de nuestro prestigioso equipo de abogados expertos en las diferentes disciplinas del derecho, ofrecemos asesoría, representación y acompañamiento en cualquier caso que se le presente, bien sea como persona natural o jurídica, dentro de las siguientes áreas legales.
                                <br>Acciones de Tutela <br>
                                Derechos de Petición <br>
                                Consultoría general
                                </p>
                                <a href="#otros">Ver mas</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- practice -->
</section><!-- practice-featured -->

<div class="blog-content">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="post-blog">
                    <article class="main-post mg-bottom-bl" id="DerechoPenal">
                        <div class="featured-post">
                            <div class="entry-img">
                                <a href="javascript:;"><img src="{{ asset('assets/images/practice/09.jpg') }}" alt="images"></a>
                            </div>
                        </div>
                        <div class="post-content content-blog clearfix">
                            <div class="post-meta-right">
                                <div class="entry-content-bl">
                                    <h3 class="title"><a href="javascript:;">DERECHO PENAL</a></h3>
                                    <p class="text-justify">
                                        Asesoría y representación integral en materia penal, mediante estrategias frente a actos delictivos o ilegales que puedan afectar en casos de personas jurídicas, a directivos y funcionarios de empresas, clientes, proveedores y terceros relacionados con la actividad empresarial, al igual que a personas naturales.
                                        <br>En materia penal estamos capacitados para desarrollar estrategias frente a actos ilegales o delictivos que puedan afectar los bienes jurídicos de nuestros clientes. Realizamos la representación jurídica en las estapas de indagación y juicio oral en calidad de representante de víctima como, de defensa.
                                        <br>Representación judicial y extrajudicial en las etapas del proceso penal, incluyendo la investigación, el juicio y el incidente de reparación integral.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class="main-post mg-bottom-bl" id="DerechoPrivado">
                        <div class="featured-post">
                            <div class="entry-img">
                                <a href="javascript:;"><img src="{{ asset('assets/images/practice/09.jpg') }}" alt="images"></a>
                            </div>
                        </div>
                        <div class="post-content content-blog clearfix">
                            <div class="post-meta-right">
                                <div class="entry-content-bl">
                                    <h3 class="title"><a href="javascript:;">DERECHO PRIVADO</a></h3>
                                    <p class="text-justify">
                                        Contamos con excelentes experiencia y condiciones académicas y
                                        profesionales en todos los aspectos relacionados con el Derecho Privado,
                                        cuya práctica se desarrolla desde la asesoría, consultoría y acompañamiento
                                        en las diferentes especialidades de ésta área, llegando hasta la representación
                                        judicial y extrajudicial garantizando los intereses de todos nuestros clientes.
                                        En Derecho Privado y resolución de conflictos, ofrecemos consultorías y
                                        asesoría integral a todas las personas naturales y jurídica en:
                                        <br><br>
                                            Consultoría y acompañamiento en las etapas pre-contractuales,
                                                contractuales y post contractuales en todo lo relacionado con la
                                                contratación mercantil.<br>
                                            Representación legal en procesos judiciales de naturaleza civil,
                                                responsabilidad contractual y extracontractual, cobros coactivos,
                                                sucesiones, propiedad y bienes, pertenencias, posesiones, obras civiles,
                                                propiedad horizontal, bienes raíces, garantías, derecho policivo, entre
                                                otros.<br>
                                            Elaboración de minutas, contratos civiles y comerciales, suscripción de
                                                convenios.<br>
                                            Soporte en procesos de negociación de contratación civil y comercial.<br>
                                            Etapas Prejudiciales, Notariales y Judiciales en asuntos de Derecho de
                                                Sucesiones, el cual contempla la investigación de bienes del causante.<br>
                                            Consultoría y soporte en procesos pre jurídicos y jurídicos en personas
                                                naturales y a nivel empresarial.<br>
                                            Asesoría y asistencia legal en procesos de negociación; celebración,
                                                ejecución, terminación y liquidación de contratos civiles y comerciales.<br>
                                            Asuntos y trámites concernientes al derecho de familia, alimentos,
                                                custodia, patria potestad, visitas, matrimonio, liquidación y disolución
                                                de sociedades conyugales y/o uniones maritales de hecho.<br>
                                            Absolución de consultas jurídicas y elaboración de conceptos en materia
                                                civil y comercial.<br>
                                            Asesoría y representación en actuaciones administrativas adelantadas
                                                ante la superintendencia de industria y comercio en asuntos
                                                relacionados con la protección del consumidor y derecho de la
                                                competencia.<br>
                                            Trámite y culminación de procesos ante la jurisdicción civil.<br>

                                    </p>

                                </div>
                            </div>
                        </div>
                    </article>
                    <article class="main-post mg-bottom-bl" id="DerechoLaboral">
                        <div class="featured-post">
                            <div class="entry-img">
                                <a href="javascript:;"><img src="{{ asset('assets/images/practice/09.jpg') }}" alt="images"></a>
                            </div>
                        </div>
                        <div class="post-content content-blog clearfix">
                            <div class="post-meta-right">
                                <div class="entry-content-bl">
                                    <h3 class="title"><a href="javascript:;">DERECHO LABORAL Y SEGURIDAD SOCIAL</a></h3>
                                    <p class="text-justify">
                                        Nuestra práctica se encuentra conformada por profesionales especializados
                                        en Derecho Laboral y Seguridad Social, con experiencia en consultorías en
                                        Derecho Laboral Individual y en Derecho Laboral Colectivo, en litigio en
                                        procesos laborales en primera instancia, segunda instancia y Corte Suprema
                                        de Justicia.
                                        <br>
                                        Tenemos la competencia para prestar asesoría integral en materia laboral y
                                        seguridad social a personas naturales y jurídicas, en lo siguiente:

                                        <br><br>

                                        La absolución de consultas.
                                        <br> Representación extraprocesal y judicialmente de clientes, en defensa de
                                        sus derechos laborales.
                                        Ÿ<br>Asesoría, elaboración y revisión de contratos laborales
                                        <br> Asesoría preventiva a empresas, en búsqueda de la prevención de
                                        futuras demandas.
                                        <br> Modalidades de contratación laboral.
                                        <br> Asesoría legal en procesos de selección y búsqueda de candidato.
                                        <br> Asesoría en modalidad de contratación.
                                        <br> Asesoría en modalidades de pago de salarios y prebendas.
                                        <br> Asesoría en llamados de atención, descargos y sanciones de empleado.
                                        <br> Asesoría y acompañamiento en despidos y liquidación de acreencias o
                                        créditos laborales.
                                        <br> Asesoría en incapacidades laborales.
                                        <br> Asesoría en enfermedades profesionales.
                                        <br> Asesoría en reservas de confidencialidad para empleados.
                                        <br> Asesorías en estudios de seguridad para empleados.
                                        <br> Elaboración y cumplimiento de reglamentos internos de trabajo.
                                        <br> Manejo de caso en fuero de maternidad.
                                        <br> Manejo de caso en fuero de salud.
                                        <br> Negociaciones y pactos sindicales.
                                        <br> Juicios y conciliaciones laborales.
                                        <br> Tercerización de personal.
                                        <br> Relaciones empresariales con colaboradores.
                                        <br> Relaciones con contratistas bajo contratos de prestación de servicios.
                                        <br> Asesoría y representación en caso de seguridad social, salud, pensión o
                                        ARL.
                                        <br> Cambios en las condiciones laborales.
                                        <br> Gestión migratoria de empleados.
                                        <br> Procesos sancionatorios ante el Ministerio del Trabajo y la Unidad de
                                        Gestión Pensional y de Parafiscales.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class="main-post mg-bottom-bl" id="Pensiones">
                        <div class="featured-post">
                            <div class="entry-img">
                                <a href="javascript:;"><img src="{{ asset('assets/images/practice/09.jpg') }}" alt="images"></a>
                            </div>
                        </div>
                        <div class="post-content content-blog clearfix">
                            <div class="post-meta-right">
                                <div class="entry-content-bl">
                                    <h3 class="title"><a href="javascript:;">PENSIONES</a></h3>
                                    <p class="text-justify">
                                        Nuestra experiencia nos permite brindar una asesoría especializada a
                                        cualquier persona que presente inconsistencias en sus aportes pensionales
                                        y/o se sienta vulnerado en sus derechos pensionales adquiridos; nuestro
                                        trabajo va desde una corrección en su historial laboral hasta la
                                        representación legal que le permita el reconocimiento y goce de éste derecho.

                                        <br><br>
                                        Pensiones por vejez, invalidez y muerte.<br>
                                        Reajustes pensiónales.<br>
                                        Indemnizaciones sustitutivas.<br>
                                        Reclamaciones ante EPS, Aseguradoras de Riesgos Laborales y fondos<br>
                                        de pensiones.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </article>

                    {{-- <article class="main-post mg-bottom-bl">
                        <div class="featured-post">
                            <div class="entry-img">
                                <a href="#"><img src="{{ asset('assets/images/practice/09.jpg') }}" alt="images"></a>
                            </div>
                        </div>
                        <div class="post-content content-blog clearfix">
                            <div class="post-meta-left">
                                <div class="clendar-wrap">
                                    <div class="day">17</div>
                                    <div class="month">sep</div>
                                </div>
                            </div>
                            <div class="post-meta-right">
                                <div class="entry-content-bl">
                                    <h3 class="title"><a href="#">Mauris et neque hendrerit bortis turpis giat nisl</a></h3>
                                    <p>
                                        quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="post-footer-bl d-sm-flex">
                            <ul class="post-author d-flex align-items-center">
                                <li class="author"><a href="#" title="">Johnson Doe</a></li>
                                <li class="comment"><a href="#" title="">234</a></li>
                            </ul>
                            <div class="fl-btn d-flex">
                                <a href="#" class="hvr-vertical">read more</a>
                            </div>
                        </div>
                    </article>
                    <article class="main-post mg-bottom-bl">
                        <div class="featured-post">
                            <div class="entry-img">
                                <a href="#"><img src="{{ asset('assets/images/practice/09.jpg') }}" alt="images"></a>
                            </div>
                        </div>
                        <div class="post-content content-blog clearfix">
                            <div class="post-meta-left">
                                <div class="clendar-wrap">
                                    <div class="day">17</div>
                                    <div class="month">sep</div>
                                </div>
                            </div>
                            <div class="post-meta-right">
                                <div class="entry-content-bl">
                                    <h3 class="title"><a href="#">Mauris et neque hendrerit bortis turpis giat nisl</a></h3>
                                    <p>
                                        quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="post-footer-bl d-sm-flex">
                            <ul class="post-author d-flex align-items-center">
                                <li class="author"><a href="#" title="">Johnson Doe</a></li>
                                <li class="comment"><a href="#" title="">234</a></li>
                            </ul>
                            <div class="fl-btn d-flex">
                                <a href="#" class="hvr-vertical">read more</a>
                            </div>
                        </div>
                    </article> --}}
                </div>
            </div>
            {{-- <div class="col-12">
                <div class="post-blog">
                    <article class="main-post mg-bottom-bl">
                        <div class="featured-post">
                            <div class="entry-img">
                                <a href="#"><img src="images/blog/10.png" alt="images"></a>
                            </div>
                        </div>
                        <div class="post-content content-blog clearfix">
                            <div class="post-meta-left">
                                <div class="clendar-wrap">
                                    <div class="day">17</div>
                                    <div class="month">sep</div>
                                </div>
                            </div>
                            <div class="post-meta-right">
                                <div class="entry-content-bl">
                                    <h3 class="title"><a href="#">Mauris et neque hendrerit bortis turpis giat nisl</a></h3>
                                    <p>
                                        quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="post-footer-bl d-sm-flex">
                            <ul class="post-author d-flex align-items-center">
                                <li class="author"><a href="#" title="">Johnson Doe</a></li>
                                <li class="comment"><a href="#" title="">234</a></li>
                            </ul>
                            <div class="fl-btn d-flex">
                                <a href="#" class="hvr-vertical">read more</a>
                            </div>
                        </div>
                    </article>
                    <article class="main-post mg-bottom-bl">
                        <div class="featured-post">
                            <div class="entry-img">
                                <a href="#"><img src="images/blog/11.png" alt="images"></a>
                            </div>
                        </div>
                        <div class="post-content content-blog clearfix">
                            <div class="post-meta-left">
                                <div class="clendar-wrap">
                                    <div class="day">17</div>
                                    <div class="month">sep</div>
                                </div>
                            </div>
                            <div class="post-meta-right">
                                <div class="entry-content-bl">
                                    <h3 class="title"><a href="#">Mauris et neque hendrerit bortis turpis giat nisl</a></h3>
                                    <p>
                                        quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="post-footer-bl d-sm-flex">
                            <ul class="post-author d-flex align-items-center">
                                <li class="author"><a href="#" title="">Johnson Doe</a></li>
                                <li class="comment"><a href="#" title="">234</a></li>
                            </ul>
                            <div class="fl-btn d-flex">
                                <a href="#" class="hvr-vertical">read more</a>
                            </div>
                        </div>
                    </article>
                    <article class="main-post mg-bottom-bl">
                        <div class="featured-post">
                            <div class="entry-img">
                                <a href="#"><img src="images/blog/12.png" alt="images"></a>
                            </div>
                        </div>
                        <div class="post-content content-blog clearfix">
                            <div class="post-meta-left">
                                <div class="clendar-wrap">
                                    <div class="day">17</div>
                                    <div class="month">sep</div>
                                </div>
                            </div>
                            <div class="post-meta-right">
                                <div class="entry-content-bl">
                                    <h3 class="title"><a href="#">Mauris et neque hendrerit bortis turpis giat nisl</a></h3>
                                    <p>
                                        quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="post-footer-bl d-sm-flex">
                            <ul class="post-author d-flex align-items-center">
                                <li class="author"><a href="#" title="">Johnson Doe</a></li>
                                <li class="comment"><a href="#" title="">234</a></li>
                            </ul>
                            <div class="fl-btn d-flex">
                                <a href="#" class="hvr-vertical">read more</a>
                            </div>
                        </div>
                    </article>
                </div>
            </div> --}}
            {{-- <div class="col-lg-4 col-md-12">
                <div class="sidebar">
                    <div class="widget widget-search">
                        <h3 class="widget-title"><span>search</span></h3>
                        <form action="#" class="form-search">
                            <input type="text" class="search" placeholder="Search">
                            <button class="btn-search"><i class="fa fa-search" aria-hidden="true"></i></button>
                        </form>
                    </div>
                    <div class="widget widget-recent-posts">
                        <h3 class="widget-title"><span>recent posts</span></h3>
                        <ul>
                            <li>
                                <div class="thumb-new">
                                    <img src="images/blog/07.png" alt="images">
                                </div>
                                <div class="thumb-new-content ">
                                    <h4 class="thumb-title">
                                        Interdum et malesuada fames ac ante ipsum
                                    </h4>
                                    <p class="thumb-time">September 17, 2019</p>
                                </div>
                            </li>
                            <li>
                                <div class="thumb-new">
                                    <img src="images/blog/08.png" alt="images">
                                </div>
                                <div class="thumb-new-content ">
                                    <h4 class="thumb-title">
                                        Duis aliquet lectus nec faucibus laoreet feugiat
                                    </h4>
                                    <p class="thumb-time">September 17, 2019</p>
                                </div>
                            </li>
                            <li>
                                <div class="thumb-new">
                                    <img src="images/blog/09.png" alt="images">
                                </div>
                                <div class="thumb-new-content ">
                                    <h4 class="thumb-title">
                                        Sed condi mentum nim id luctus tempu que nibh
                                    </h4>
                                    <p class="thumb-time">September 17, 2019</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="widget widget-list-common">
                        <h3 class="widget-title"><span>categories</span></h3>
                        <ul>
                            <li><a href="#" class="active">treding news</a></li>
                            <li><a href="#">research & analycis</a></li>
                            <li><a href="#">case story</a></li>
                            <li><a href="#">bar news</a></li>
                            <li><a href="#">lawyer lifestyle</a></li>
                            <li><a href="#">law resources</a></li>
                            <li><a href="#">events & occasions</a></li>
                        </ul>
                    </div>
                    <div class="widget widget-tags">
                        <h3 class="widget-title"><span>tags</span></h3>
                        <div class="tags-list">
                            <a href="#" class="active">mirgbai</a>
                            <a href="#">bangla</a>
                            <a href="#">algorihm</a>
                            <a href="#">facebook</a>
                            <a href="#">social network</a>
                            <a href="#">los</a>
                            <a href="#">bootstraping</a>
                            <a href="#">android</a>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
</div>

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

{{-- <div class="featured featured-style1">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-12">
                <div class="featured-post">
                    <div class="entry-image">
                        <img src="{{ asset('assets/images/practice/10.png') }}" alt="images">
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="flat-spacer" data-desktop="38" data-sdesktop="0" data-mobi="0" data-smobi="0"></div>
                <div class="content">
                    <div class="caption">Our Features</div>
                    <h4 class="heading">Reason to choose us over others in market</h4>
                    <p class="description">
                        Lorem ipsum dolor sit amet, consecte dunt ut labore et dot  nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                    </p>
                </div>
                <div class="iconbox-features type1">
                    <div class="iconbox">
                        <div class="iconbox-icon">
                            <img src="{{ asset('assets/images/practice/11.png') }}" alt="images">
                        </div>
                        <div class="iconbox-content">
                            <h5 class="title"><a href="#">Best Legal Security</a></h5>
                            <p class="description">
                                orem ipsum dolor sit dot nostrud exercitation ulla mco labectetur adi pisicing elit, sed do eiusmod
                            </p>
                        </div>
                    </div>
                    <div class="iconbox">
                        <div class="iconbox-icon">
                            <img src="{{ asset('assets/images/practice/12.png') }}" alt="images">
                        </div>
                        <div class="iconbox-content">
                            <h5 class="title"><a href="#">Top Skilled Attorney</a></h5>
                            <p class="description">
                                orem ipsum dolor sit dot nostrud exercitation ulla mco labectetur adi pisicing elit, sed do eiusmod
                            </p>
                        </div>
                    </div>
                    <div class="iconbox">
                        <div class="iconbox-icon">
                            <img src="{{ asset('assets/images/practice/13.png') }}" alt="images">
                        </div>
                        <div class="iconbox-content">
                            <h5 class="title"><a href="#">All Time Support</a></h5>
                            <p class="description">
                                orem ipsum dolor sit dot nostrud exercitation ulla mco labectetur adi pisicing elit, sed do eiusmod
                            </p>
                        </div>
                    </div>
                    <div class="iconbox">
                        <div class="iconbox-icon">
                            <img src="{{ asset('assets/images/practice/14.png') }}" alt="images">
                        </div>
                        <div class="iconbox-content">
                            <h5 class="title"><a href="#">Resonable Pricing</a></h5>
                            <p class="description">
                                orem ipsum dolor sit dot nostrud exercitation ulla mco labectetur adi pisicing elit, sed do eiusmod
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="featured-banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-sm-12">
                <div class="content">
                    <h6 class="title">Lets solve your problem today</h6>
                    <p>Lorem ipsum dolor sit amet, consecte dunt ut labore</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-12">
                <div class="fl-btn">
                    <a href="#" class="hvr-vertical">read more</a>
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection
