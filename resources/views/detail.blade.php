@extends('layouts.app')

@section('styles')
    <style>
        .welcome:hover {
            color: #fff !important;
        }
    </style>
@endsection

@section('content')
    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-blue">
        <div class="container">
            <a class="navbar-brand text-bold text-lg" href="#">{{ _('FERIA TACNA') }}</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" 
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <hr>
                <input class="form-control mr-sm-2" type="search" placeholder="Encuentra tu producto" aria-label="Search">
                <button class="btn btn-outline-light my-2 my-sm-0" style="width:200px;font-size:16px" type="submit">{{ _('Solicitar Puesto') }}</button>
            </div>
        </div>
    </nav>
    <!-- END HEADER -->

    <!-- SUBMENU -->
    <div class="mt-0.5 navbar-dark text-light bg-blue">
        <ul class="nav nav-pills mb-3 justify-content-center">
            <li class="nav-item mb-2">  <a class="nav-link active active white">{{ _('Inicio') }} </a></li>
            <li class="nav-item mb-2">  <a class="nav-link white">{{ _('Vender') }} </a></li>
            <li class="nav-item mb-2">  <a class="nav-link white">{{ _('Recomendados') }} </a></li>
            <li class="nav-item mb-2">  <a class="nav-link white">{{ _('Anunciar Aquí') }} </a></li>
            <li class="nav-item mb-2">  <a class="nav-link white">{{ _('Ayuda') }} </a></li>
            <li class="nav-item mb-2">  <a class="nav-link white">{{ _('Contáctanos') }} </a></li>
        </ul>
    </div>
    <!-- END SUBMENU -->
    
    <div class="container-fluid">
    <div class="row">

    <!-- MENU LATERAL -->
    <div class="col-sm-6 col-md-4 col-lg-3">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title text-center"><b>{{ __('Datos del Vendedor') }}</b></h5>
                <h4 class="text-center">{{ $puesto->code }}</h4>
                <h1 style="font-size:20px" class="text-center">
                    @for ($i = 0; $i < $puesto->calification; $i++)   
                        <i class="fas fa-star text-primary"></i>
                    @endfor
                    @for ($i = 0; $i < (5 - $puesto->calification); $i++)
                        <i class="far fa-star"></i> 
                    @endfor
                </h1><hr>
                <label><h5>{{ __('Dirección') }}</h5></label><br>
                <h5 class="text-right">{{ __('Asoc. 24 de Junio Mz I Lt 666') }}</h5>
                <label><h5>{{ __('Contacto') }}</h5></label><br>
                <h5 class="text-center">{{ __('931375941') }}<button type="button" class="btn btn-success btn-sm ml-2">Llamar</button></h5>
                <h5 class="text-center">{{ __('931375941') }}<button type="button" class="btn btn-success btn-sm ml-2">Llamar</button></h5>
                <hr>
                <h1 class="text-center">
                    <i class="fab fa-facebook mr-2"></i>
                    <i class="fab fa-skype mr-2"></i>
                    <i class="fab fa-google mr-2"></i>
                </h1>
                <hr>
                <label><h5>{{ __('Métodos de entrega') }}</h5></label><br>
                <h2><i class="fas fa-car"></i><span class="ml-2" style="font-size:18px">{{ __('Recojo en Tienda') }}</span></h2>
                <hr>
                <h1 class="text-center">
                    <i class="far fa-money-bill-alt mr-2"></i>
                    <i class="fab fa-cc-visa mr-2"></i>
                    <i class="fab fa-paypal mr-2"></i>
                    <i class="fas fa-qrcode" data-toggle="modal" data-target="#exampleModalCenter"></i>
                </h1>
                <hr>
            </div>
        </div>
    </div>
    <!-- END MENU LATERAL -->

    <!-- MODAL -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">{{ __('Código Qr YAPE') }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <img class="card-img-top" src="{{ asset('/img/qr-code.jpg') }}" alt="Card image cap">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
    </div>
    <!-- END MODAL -->

    <!-- BODY -->
    <div class="col-sm-6 col-md-8 col-lg-9">
        <div class="card">
            <div class="card-body">
            @foreach([1,1,1,1,1] as $data)
                <div class="card">
                    <div class="card-body">
                    <div id="carrusel">
                        <a href="#" class="left-arrow"><img src="{{ asset('img/carusel/left-arrow.png') }}" /></a>
                        <a href="#" class="right-arrow"><img src="{{ asset('img/carusel/right-arrow.png') }}" /></a>
                        <div class="carrusel">   
                        @foreach($categorias as $categoria)
                            <div class="product" id="product_{{$categoria->id}}">
                                <div class="card">
                                    <div class="mb-1">
                                        <button class="btn btn-outline-dark btn-lg btn-block my-2 my-sm-0" type="submit">{{ $categoria->name }}</button>
                                    </div>
                                    <img src='{{ asset("/storage/categorias/$categoria->url_imagen") }}' class="rounded mx-auto d-block" 
                                        width="200" height="150" />
                                </div>
                            </div>
                        @endforeach
                        </div>
                    </div>
                    </div>
                </div>
                <hr>
            @endforeach
            </div>
        </div>
    </div>
    <!-- END BODY -->

    </div>
    </div>

@endsection

@section('scripts')
<script src="{{ asset('/js/component/panel.min.js') }}"></script>
@endsection