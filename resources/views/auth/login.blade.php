@extends('layouts.form')

@section('title','Inicio de sesión')
@section('subtitle','Ingresa tus datos para iniciar sesión')

@section('content')
    <div class="container mt--8 pb-5">
      <div class="row justify-content-center">
        <div class="col-lg-5 col-md-7">
          <div class="card bg-secondary shadow border-0">
            <div class="card-body px-lg-5 py-lg-5">
                @if($errors->any())
                    <div class="alert alert-danger" role="alert">
                        {{ $errors->first() }}
                    </div>
                @endif
              <form role="form" method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group mb-3">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                    </div>
                    <input class="form-control" placeholder="Email" type="email" name="email"
                    value="{{ old('email') }}" required autocomplete="email" autofocus>
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                    </div>
                    <input class="form-control" placeholder="Contraseña" type="password"
                    name="password" required autocomplete="current-password">
                  </div>
                </div>
                <div class="custom-control custom-control-alternative custom-checkbox">
                  <input class="custom-control-input" type="checkbox" name="remember" id="remember"
                  {{ old('remember') ? 'checked' : '' }}>
                  <label class="custom-control-label" for="remember">
                    <span class="text-muted">Recordar sesión</span>
                  </label>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary my-4">Ingresar</button>
                </div>
              </form>
            </div>
          </div>
          <div class="row mt-3">
            <div class="col-6">
                <a href="{{ route('password.request') }}" class="text-light">
                    <small>¿Olvidaste tu contraseña?</small>
                </a>
            </div>
            <div class="col-6 text-right">
                <a href="{{ route('register') }}" class="text-light">
                    <small>¿Aún no te has registrado?</small>
                </a>
            </div>
            <hr>
          </div>
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
