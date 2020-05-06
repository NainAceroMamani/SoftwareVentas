@extends('layouts.app')

@section('content')
    <main>
        <!-- HEADER -->
        <section>
            <div class="main">
                <div class="row">
                    <div class="col-sm-6 col-md-6 col-lg-6">
                        <h1 class="text-center text-bold text-welcome derecha-welcome">{{ _('FERIA TACNA') }}</h1><br>
                        <div class="row">
                            <div class="col-sm-6 col-md-6 col-lg-6 mt-2">
                                <a href="{{ url('/tienda') }}">
                                    <button class="btn btn-light btn-lg btn-block my-2 my-sm-0" type="submit">{{ _('Comerciante') }}</button>
                                </a>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-6 mt-2">
                                <button class="btn btn-dark btn-lg btn-block my-2 my-sm-0" type="submit">{{ _('Comprador') }}</button>
                            </div>
                        </div><br><br>
                        <h3 class="text-center mt-3 white m-auto">{{ _('Bienvenidos a la única feria virtual en Tacna') }}</h3>
                        
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-6">
                        <img src="{{ asset('/img/logo-tienda.png') }}" class="img-fluid  mx-auto d-block img-welcome izquierda-welcome">
                        
                    </div>
                </div>
            </div>
            <div class="wave">
                <div style="height: 150px; overflow: hidden;" >
                    <svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
                        <path d="M0.00,49.99 C150.00,150.00 349.20,-49.99 500.00,49.99 L500.00,150.00 L0.00,150.00 Z" 
                            style="stroke: none; fill: #fff;">
                        </path>
                    </svg>
                </div>
            </div>
        </section>
        <!-- END HEADER -->

        <!-- CARUSEL -->
        <section>      
        <div class="pl-4 pr-4">
            <div class="row">
                <div id="content" class="col-lg-12">
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
        </div>
        </section>
        <!-- END CARUSEL -->
    </main>
@endsection

@section('scripts')
<script src="{{ asset('/js/component/panel.min.js') }}"></script>
@endsection