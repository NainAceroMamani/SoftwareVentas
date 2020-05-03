<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="google-site-verification" content="8rlQZ5Bopk-H2pzeDYI7EvsUaQ1MyvAGZkbCGtDTJJE" />

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <script src="https://kit.fontawesome.com/882059baa9.js" crossorigin="anonymous"></script>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark"">
            <div class="container">
                <a class="navbar-brand" href="#">FERIA TACNA</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <hr>
                    <input class="form-control mr-sm-2" type="search" placeholder="Encuentra tu producto" aria-label="Search">
                    <button class="btn btn-outline-light my-2 my-sm-0" style="width:200px;font-size:16px" type="submit">Solicitar Puesto</button>
                </div>
            </div>
        </nav>
        <div class="mt-0.5 navbar-dark bg-secondary text-light bg-dark">
            <ul class="nav nav-pills mb-3 justify-content-center">
                <li class="nav-item">
                    <a class="nav-link active" style="color:#fff" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color:#fff" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color:#fff" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color:#fff" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color:#fff" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color:#fff" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color:#fff" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color:#fff" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color:#fff" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Contact</a>
                </li>
            </ul>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="accordion" id="accordionExample">
                        <div class="card">
                            <div class="card-header bg-dark" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-link" style="font-size:15px;color:#fff" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Ropa & Calzado
                                </button>
                            </h2>
                            </div>
                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body">
                                <ul class="list-group">
                                    <li class="list-group-item">
                                        <div class="container-fluid">
                                            <input type="checkbox" style="width:20px;height:20px;" class="form-check-input" id="exampleCheck1">
                                            <label class="form-check-label ml-2" for="exampleCheck1">Check me out</label>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="container-fluid">
                                            <input type="checkbox" style="width:20px;height:20px;" class="form-check-input" id="exampleCheck1">
                                            <label class="form-check-label ml-2" for="exampleCheck1">Check me out</label>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="container-fluid">
                                            <input type="checkbox" style="width:20px;height:20px;" class="form-check-input" id="exampleCheck1">
                                            <label class="form-check-label ml-2" for="exampleCheck1">Check me out</label>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="container-fluid">
                                            <input type="checkbox" style="width:20px;height:20px;" class="form-check-input" id="exampleCheck1">
                                            <label class="form-check-label ml-2" for="exampleCheck1">Check me out</label>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="container-fluid">
                                            <input type="checkbox" style="width:20px;height:20px;" class="form-check-input" id="exampleCheck1">
                                            <label class="form-check-label ml-2" for="exampleCheck1">Check me out</label>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="container-fluid">
                                            <input type="checkbox" style="width:20px;height:20px;" class="form-check-input" id="exampleCheck1">
                                            <label class="form-check-label ml-2" for="exampleCheck1">Check me out</label>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="container-fluid">
                                            <input type="checkbox" style="width:20px;height:20px;" class="form-check-input" id="exampleCheck1">
                                            <label class="form-check-label ml-2" for="exampleCheck1">Check me out</label>
                                        </div>
                                    </li>
                                </ul>  
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                            <h2 class="mb-0">
                                <button class="btn btn-link" style="font-size:15px;color:#000" type="button" data-toggle="collapse" data-target="#collapsetwo" aria-expanded="true" aria-controls="collapsetwo">
                                    Ropa & Calzado
                                </button>
                            </h2>
                            </div>
                            <div id="collapsetwo" class="collapse" data-parent="#accordionExample">
                                <div class="card-body">
                                <ul class="list-group">
                                    <li class="list-group-item">
                                        <div class="container-fluid">
                                            <input type="checkbox" style="width:20px;height:20px;" class="form-check-input" id="exampleCheck1">
                                            <label class="form-check-label ml-2" for="exampleCheck1">Check me out</label>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="container-fluid">
                                            <input type="checkbox" style="width:20px;height:20px;" class="form-check-input" id="exampleCheck1">
                                            <label class="form-check-label ml-2" for="exampleCheck1">Check me out</label>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="container-fluid">
                                            <input type="checkbox" style="width:20px;height:20px;" class="form-check-input" id="exampleCheck1">
                                            <label class="form-check-label ml-2" for="exampleCheck1">Check me out</label>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="container-fluid">
                                            <input type="checkbox" style="width:20px;height:20px;" class="form-check-input" id="exampleCheck1">
                                            <label class="form-check-label ml-2" for="exampleCheck1">Check me out</label>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="container-fluid">
                                            <input type="checkbox" style="width:20px;height:20px;" class="form-check-input" id="exampleCheck1">
                                            <label class="form-check-label ml-2" for="exampleCheck1">Check me out</label>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="container-fluid">
                                            <input type="checkbox" style="width:20px;height:20px;" class="form-check-input" id="exampleCheck1">
                                            <label class="form-check-label ml-2" for="exampleCheck1">Check me out</label>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="container-fluid">
                                            <input type="checkbox" style="width:20px;height:20px;" class="form-check-input" id="exampleCheck1">
                                            <label class="form-check-label ml-2" for="exampleCheck1">Check me out</label>
                                        </div>
                                    </li>
                                </ul>  
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="col-sm-6 col-md-8 col-lg-9">
                    <nav class="navbar navbar-light bg-dark mt-1">
                        <img src="{{ asset('/img/descarga.jpg') }}" class="img-fluid" style="margin:auto; height:140px !important" alt="">
                    </nav>
                    <div class="row">
                        <div class="col-sm-12 col-md-4 col-lg-4 mt-2">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title ">Doña Meche <span>C-045</span> </h5>
                                    <label style="font-size:20px">★★★★★</label><br>
                                <label><i class="fas fa-phone-volume"></i> llamar 931375941</label>
                                <div class="card">
                                <div class="card-body">
                                    <label> Vestidos de verano, faldas , bufandas ... </label>
                                </div>
                                </div>
                                <hr>
                                <a href="#" class="btn btn-primary">Ir al puesto</a>
                            </div>
                        </div>
                        </div>
                        <div class="col-sm-12 col-md-4 col-lg-4 mt-2">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title ">Doña Meche <span>C-045</span> </h5>
                                    <label style="font-size:20px">★★★★★</label><br>
                                <label><i class="fas fa-phone-volume"></i> llamar 931375941</label>
                                <div class="card">
                                <div class="card-body">
                                    <label> Vestidos de verano, faldas , bufandas ... </label>
                                </div>
                                </div>
                                <hr>
                                <a href="#" class="btn btn-primary">Ir al puesto</a>
                            </div>
                        </div>
                        </div>
                        <div class="col-sm-12 col-md-4 col-lg-4 mt-2">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title ">Doña Meche <span>C-045</span> </h5>
                                    <label style="font-size:20px">★★★★★</label><br>
                                <label><i class="fas fa-phone-volume"></i> llamar 931375941</label>
                                <div class="card">
                                <div class="card-body">
                                    <label> Vestidos de verano, faldas , bufandas ... </label>
                                </div>
                                </div>
                                <hr>
                                <a href="#" class="btn btn-primary">Ir al puesto</a>
                            </div>
                        </div>
                        </div>
                        <div class="col-sm-12 col-md-4 col-lg-4 mt-2">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title ">Doña Meche <span>C-045</span> </h5>
                                    <label style="font-size:20px">★★★★★</label><br>
                                <label><i class="fas fa-phone-volume"></i> llamar 931375941</label>
                                <div class="card">
                                <div class="card-body">
                                    <label> Vestidos de verano, faldas , bufandas ... </label>
                                </div>
                                </div>
                                <hr>
                                <a href="#" class="btn btn-primary">Ir al puesto</a>
                            </div>
                        </div>
                        </div>
                        <div class="col-sm-12 col-md-4 col-lg-4 mt-2">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title ">Doña Meche <span>C-045</span> </h5>
                                    <label style="font-size:20px">★★★★★</label><br>
                                <label><i class="fas fa-phone-volume"></i> llamar 931375941</label>
                                <div class="card">
                                <div class="card-body">
                                    <label> Vestidos de verano, faldas , bufandas ... </label>
                                </div>
                                </div>
                                <hr>
                                <a href="#" class="btn btn-primary">Ir al puesto</a>
                            </div>
                        </div>
                        </div>
                        <div class="col-sm-12 col-md-4 col-lg-4 mt-2">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title ">Doña Meche <span>C-045</span> </h5>
                                    <label style="font-size:20px">★★★★★</label><br>
                                <label><i class="fas fa-phone-volume"></i> llamar 931375941</label>
                                <div class="card">
                                <div class="card-body">
                                    <label> Vestidos de verano, faldas , bufandas ... </label>
                                </div>
                                </div>
                                <hr>
                                <a href="#" class="btn btn-primary">Ir al puesto</a>
                            </div>
                        </div>
                        </div>
                        <div class="col-sm-12 col-md-4 col-lg-4 mt-2">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title ">Doña Meche <span>C-045</span> </h5>
                                    <label style="font-size:20px">★★★★★</label><br>
                                <label><i class="fas fa-phone-volume"></i> llamar 931375941</label>
                                <div class="card">
                                <div class="card-body">
                                    <label> Vestidos de verano, faldas , bufandas ... </label>
                                </div>
                                </div>
                                <hr>
                                <a href="#" class="btn btn-primary">Ir al puesto</a>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>  
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    </body>
</html>
