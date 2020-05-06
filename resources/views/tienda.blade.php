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
    <header>
        <div class="main-header">
            <div class="toggle-icons open">
                <i class="fas fa-bars"></i>
            </div>
            <div class="toggle-icons close">
                <i class="fas fa-times"></i>
            </div>
            <a href="index.html"><img src="logo.svg"></a>
            <div class="search-box">
                <input type="text" name="" id="" class="search-text" placeholder="Buscar Puesto">
                <button type="submit" class="search-input"><i class="fas fa-search"></i>
                </button>
                <button type="reset" class="search-close"><i class="fas fa-times"></i>
                </button>
            </div>
            <a href="" class="nav-a">Solicita tu Puesto</a>
        </div>
    </header>
    <!-- END HEADER -->

    <!-- SUBMENU -->
    <div class="nav-link">
        <div class="scroll-container">
            <nav>
                <ul>
                    <li><a href="">Inicio</a></li>
                    <li><a href="">Vender</a></li>
                    <li><a href="">Recomendados</a></li>
                    <li><a href="">Anunciar Aquí</a></li>
                    <li><a href="">Ayuda</a></li>
                    <li><a href="">Contáctanos</a></li>
                </ul>
            </nav>
        </div>
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
    <!-- PAGINACION -->
    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center" style="max-width: 50%;">
            {{ $puestos->links() }}
        </ul>
    </nav><hr><br>
    <!-- END PAGINACION -->
    </div><hr>

@endsection

@section('scripts')
<script src="{{ asset('/js/component/panel.min.js') }}"></script>
@endsection