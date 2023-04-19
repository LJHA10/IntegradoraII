@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Verifica tu correo</div>

                <div class="card-body">
                  @if (session('resent'))
                      <div class="alert alert-success" role="alert">
                          {{ __('Se ha enviado un nuevo enlace de verificación a su dirección de correo electrónico.') }}
                      </div>
                  @endif
                  @if(Session::has('error'))
                    <p class=" pb-3 alert {{ Session::get('alert-class', 'alert-danger') }}">{{ Session::get('error') }}</p>
                  @endif

                  Antes de continuar, verifique su correo electrónico para obtener un enlace de verificación.
                    Si no recibiste el correo electrónico

                        <form class="d-inline" method="POST" action="App\Http\Controllers\Auth\ResetController@verify">
                            @csrf
                            <button type="submit" class="btn btn-link p-0 m-0 align-baseline" style="text-decoration:none;">{{ __('haga clic aquí para solicitar otro') }}</button>.
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
