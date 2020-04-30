@extends('layouts.form')

@section('title','Registro')
@section('subtitle','Ingresa tus datos para registrarte!')

@section('content')
<div class="container mt--8 pb-5">
      <!-- Table -->
      <div class="row justify-content-center">
        <div class="col-lg-6 col-md-8">
          <div class="card bg-secondary shadow border-0">
            <div class="card-body px-lg-5 py-lg-5">
                @if($errors->any())
                    <div class="alert alert-danger" role="alert">
                        {{ $errors->first() }}
                    </div>
                @endif
              <form role="form" method="POST" action="{{ route('register') }}">
              @csrf
                <div class="form-group">
                  <div class="input-group input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                    </div>
                    <input class="form-control" placeholder="Nombre" type="text" name="name"
                    value="{{ old('name') }}" required autocomplete="name" autofocus>
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                    </div>
                    <input class="form-control" placeholder="Email" type="email" name="email"
                    value="{{ old('email') }}" required autocomplete="email">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                    </div>
                    <input class="form-control" placeholder="Contraseña" type="password"
                    name="password" required autocomplete="new-password">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                    </div>
                    <input class="form-control" placeholder="Confirmar Contraseña" type="password"
                    name="password_confirmation" required autocomplete="new-password">
                  </div>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary mt-4">Confirmar Registro</button>
                </div>
              </form>
            </div>
          </div>
          <hr>
        </div>
        <div class="col-md-4">
          <div class="card">
              <div class="card-header">{{ __("Socialite") }}</div>
                <div class="card-body" >
                <a
                    href="{{ route('social_auth' , ['driver' => 'facebook']) }}"
                    class="btn btn-facebook btn-lg btn-block" style="color:#fff !important;"
                >
                    {{ __("Facebook") }} <i class="fa fa-facebook"></i>
                </a>

                <a
                    href="{{ route('social_auth' , ['driver' => 'google']) }}"
                    class="btn btn-google btn-lg btn-block" style="color:#fff !important;"
                >
                    {{ __("Google") }} <i class="fa fa-google"></i>
                </a>
                <a
                    href="{{ route('social_auth' , ['driver' => 'github']) }}"
                    class="btn btn-github btn-lg btn-block" style="color:#fff !important;"
                >
                    {{ __("Github") }} <i class="fa fa-github" ></i>
                </a>
              </div>
          </div>
        </div>
      </div>
    </div>
@endsection

