@extends('layout.app')

@section('content')
<div class="page-title">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="content">
                    <h2 class="title-banner">Contacto</h2>
                    {{-- <p>Lorem ipsum dolor sit amet consectetur adipisicing<br> elit sed do eius mod tempor incididunt</p> --}}
                </div>
            </div>
            <div class="col-lg-6">
                <ul class="breadcrumb">
                    <li><a href="/" class="active">Inicio</a></li>
                    <li><a href="#">Contacto</a></li>
                </ul>
            </div>
        </div>
    </div>
</div><!-- page-title -->
<div class="contact clearfix">
    <div class="container">
        <div class="contact-us">
            <div class="title-section text-center">
                <h3 class="flat-title">Contactenos</h3>
                {{-- <p class="sub-title">Dolore magna aliqu onoet enim ad minim veniam</p> --}}
            </div>
            <div class="contact-options">
                <div class="icon-box">
                    <div class="icon">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                    </div>
                    <div class="content-info">
                        <h4 class="name">Direccion</h4>
                        <div class="info-wrap">
                            <p>Cra. 4 # 9 -25 | Oficina 210, Edf. Diego de Ospina | Neiva - Huila</p>
                        </div>
                    </div>
                </div>
                <div class="icon-box border-both-sides">
                    <div class="icon">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                    </div>
                    <div class="content-info">
                        <h4 class="name">Telefono</h4>
                        <div class="info-wrap">
                            <p>(+57) 316 875 6444</p>
                        </div>
                    </div>
                </div>
                <div class="icon-box">
                    <div class="icon">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                    </div>
                    <div class="content-info">
                        <h4 class="name">Correo electronico</h4>
                        <div class="info-wrap">
                            <p>gerencia@obconsultores.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- contact -->
<div class="write-something">
    <div class="container">
        <div class="title-section text-center">
            <h3 class="flat-title">Escribenos</h3>
        </div>
        <form action="#" class="form-message-pct">
            <div class="text-wrap d-md-flex clearfix">
                <div class="wr-sm">
                    <input type="text" class="your-name" placeholder="Nombre Completo">
                </div>
                <div class="wr-sm">
                    <input type="text" class="your-email" placeholder="Correo electronico">
                </div>
                <div class="wr-sm">
                    <input type="text" class="your-phone" placeholder="Telefono">
                </div>
            </div>
            <textarea name="comment" id="comment-message" rows="8" placeholder="Escriba aqui el mensaje"></textarea>
            <div class="fl-btn">
                <button class="hvr-vertical">Enviar</button>
            </div>
        </form>
    </div>
</div><!-- write-something -->
<div class="flat-map">

</div><!-- flat-map -->
@endsection
