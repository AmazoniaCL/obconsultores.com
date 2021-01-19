@extends('layout.app')

@section('content')

<div class="page-title">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="content">
                    <h2 class="title-banner">Detalle de proceso</h2>
                    <p>Aqui encontrará el detalle de su proceso con ObConsultores.</p>
                </div>
            </div>
            <div class="col-lg-6">
                <ul class="breadcrumb">
                    <li><a href="/" class="active">Inicio</a></li>
                    <li><a href="javascript:;">Proceso</a></li>
                </ul>
            </div>
        </div>
    </div>
</div><!-- page-title -->

@if (session('proceso') && session('proceso') == $proceso[0]->codigo)
    <div class="case-details">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="challange case-dt mg-case-details">
                        <h3 class="title"><a href="#">Proceso {{ $proceso[0]->num_proceso }}</a></h3>
                        <p>
                            {{ $proceso[0]->descripcion ?? 'Este proceso no tiene descripción.' }}
                        </p>
                        <ul class="list-challange">
                            <li>
                                <span class="text">Señor/a: <b>{{ $proceso[0]->clientes->nombre }}</b></span>
                            </li>
                            <li>
                                <span class="text">Ciudad: <b>{{ $proceso[0]->ciudad }}, {{ $proceso[0]->departamento }}</b></span>
                            </li>
                            <li>
                                <span class="text">Area: <b>{{ $proceso[0]->tipo }}</b></span>
                            </li>
                            <li>
                                <span class="text mt-3">Responsable: <b>{{ $proceso[0]->users->name }}</b></span>
                            </li>
                        </ul>
                        <p class="mt-4">
                            @if ($proxima_audiencia == NULL)
                                Proxima Audiencia en: <b>No aplica</b>
                            @else
                                Proxima Audiencia en: <b>{{ ($proxima_audiencia == 'Hoy') ? 'Hoy' : $proxima_audiencia.' Dias' }}</b>
                            @endif
                        </p>
                    </div>
                    <div class="process case-dt mg-case-details">
                        <h3 class="title"><a href="#">Actuaciones</a></h3>
                        <ul class="process-steps">
                            <?php $count = 1; ?>
                            @foreach ($proceso[0]->actuaciones as $actuacion)
                                <li class="steps">
                                    <div class="steps-name">
                                        <span class="number">{{ $count }}</span>
                                        <span class="name">{{ $actuacion->actuacion }}</span>
                                    </div>
                                    <div class="content-steps">
                                        {{ $actuacion->anotacion }}
                                    </div>
                                    <p class="mt-2">
                                        <b>Fecha Inicio de Termino: </b>{{ $actuacion->f_inicio_termino ?? 'No aplica' }} <br>
                                        <b>Fecha Fin de Termino: </b>{{ $actuacion->f_fin_termino ?? 'No aplica' }} <br>
                                    </p>
                                </li>
                                <?php $count++; ?>
                            @endforeach
                        </ul>
                    </div>
                    {{-- <div class="result case-dt mg-case-details">
                        <h3 class="title"><a href="#">Result</a></h3>
                        <p>
                            Duis aute irure dolor in reprehenderit in vount in culpa qui officia deserunt mollit anim id est laborum. Sediste natus error sit voluptatem accusantium doloremque laudariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                    </div> --}}
                </div>
            </div>
        </div>
    </div><!-- case-details -->
@else
    <form action="/procesos/validar" method="POST" class="form-message-pct p-5 my-5">
        @csrf

        <div class="text-wrap d-md-flex clearfix">
            <div class="col-12">
                <label for="codigo">Para poder visualizar el proceso, ingrese el codigo: </label>
                <input type="text" class="your-name" name="codigo" id="codigo" placeholder="Escriba el codigo">
            </div>
            <input type="hidden" name="id" value="{{ $id }}">
        </div>
        <div class="fl-btn col-12">
            <button class="hvr-vertical">Enviar</button>
        </div>
    </form>
@endif


@endsection
