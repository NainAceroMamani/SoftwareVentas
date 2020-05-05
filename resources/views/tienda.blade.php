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
        <div class="accordion" id="accordionExample">
        @php    $bandera = true;    @endphp
        @foreach($categorias as $categoria)
            <div class="card">
            <div class="card-header bg-blue" id="heading{{$categoria->id}}">
            <h2 class="mb-0">
            <button class="btn btn-link welcome white" style="font-size:15px" type="button" data-toggle="collapse" data-target="#collapse{{$categoria->id}}" aria-expanded="true" aria-controls="collapse{{$categoria->id}}">
                {{ $categoria->name }}
            </button>
            </h2>
            </div>
            @if($bandera == true)
                <div id="collapse{{$categoria->id}}" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
            @else
                <div id="collapse{{$categoria->id}}" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
            @endif
                <div class="card-body">
                <ul class="list-group">
                    <li class="list-group-item">
                    @foreach($categoria->subcategorias as $subcategoria)
                        <div class="container-fluid">
                            <input type="checkbox" style="width:20px;height:20px;" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label ml-2" for="exampleCheck1">{{ $subcategoria->name }}</label>
                        </div>
                    @endforeach
                    </li>
                </ul>  
                </div>
            </div>
            @php    $bandera = false;   @endphp
            </div>
        @endforeach
        </div>
    </div>
    <!-- END MENU LATERAL -->

    <!-- PUESTOS -->
    <div class="col-sm-6 col-md-8 col-lg-9">
        <!-- <nav class="navbar navbar-light bg-dark mt-1">
            <img src="{{ asset('/img/descarga.jpg') }}" class="img-fluid" style="margin:auto; height:140px !important" alt="">
        </nav> -->
        <div class="row">
            @foreach($puestos as $puesto)
                <div class="col-sm-12 col-md-4 col-lg-4 mt-2">
                <a href="{{ url('/detail/'.$puesto->id) }}" class="btn-light" title="Puesto {{ $puesto->code }}">    
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title "> <i class="fas fa-bookmark mr-2 text-primary"></i> {{ $puesto->code }}</h5>
                                <label style="font-size:20px">
                                    @for ($i = 0; $i < $puesto->calification; $i++)   
                                        <i class="fas fa-star"></i>
                                    @endfor
                                    @for ($i = 0; $i < (5 - $puesto->calification); $i++)
                                        <i class="far fa-star"></i> 
                                    @endfor
                                </label><br>
                            <label><i class="fas fa-phone-volume mr-2" style="font-size:25px"></i> llamar {{ $puesto->phone }}</label>
                            <div class="card">
                            <div class="card-body">
                                <label>{{  \Illuminate\Support\Str::limit($puesto->description, 60) }}</label>
                            </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>  
    <!-- END PUESTOS -->
    </div>
    </div><hr>

    <!-- PAGINACION -->
    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
            {{ $puestos->links() }}
        </ul>
    </nav><hr><br>
    <!-- END PAGINACION -->
@endsection

@section('scripts')
<script src="{{ asset('/js/component/panel.min.js') }}"></script>
@endsection