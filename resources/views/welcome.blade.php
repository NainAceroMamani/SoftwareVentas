@extends('layouts.app')

@section('content')
    <!-- Header -->
    <div class="bg-dark" style="height: 100vh;">
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    <h1 class="welcome-text text-bold derecha">{{ _('FERIA TACNA') }}</h1>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        var explode = function(){
            window.location.href = "{{ url('inicio') }}";
        };
        setTimeout(explode, 2000);
    </script>
@endsection