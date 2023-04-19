@extends('layouts.app')

@section('content')

  <div class="container">
    @if(Session::has('message'))
      <div class="alert alert-info alert-dismissible fade show" role="alert">
        {{ Session::get('message') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    @endif

    @if ($errors->any())
        @foreach ($errors->all() as $error)
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ $error }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        @endforeach
    @endif

    @if(Session::has('error'))
      <div class="alert alert-danger alert-dismissible fade show">
        {{ Session::get('error') }}
        <button type="button" class="close" data-dismiss="alert">&times;</button>
      </div>
    @endif
    
    <div class="row justify-content-center">
      <div class="col-lg-4">
        <h4>Información de la cuenta</code></h5>
          <span class="text-justify mb-3" style="padding-top:-3px;">Actualice la información de perfil y la dirección de correo electrónico de su cuenta.</span>
        </div>

        <div class="col-lg-8 text-center pt-0">
          <div class="card py-4 mb-5 mt-md-3 bg-white rounded " style="box-shadow: 0 1rem 3rem rgba(0, 0, 0, 0.175)">

            {!! Form::model($user, ['method'=>'PATCH', 'action'=> ['App\Http\Controllers\Auth\ProfileController@update',$user->uid]]) !!}
            {!! Form::open() !!}

            <div class="form-group px-3">
              {!! Form::label('displayName', 'Name ',['class'=>'col-12 text-left pl-0']) !!}
              {!! Form::text('displayName', null, ['class'=>' col-md-8 form-control'])!!}

              {!! Form::label('email', 'Email ',['class'=>'pt-3 col-12 text-left pl-0']) !!}
              {!! Form::email('email', null, ['class'=>'col-md-8 form-control'])!!}

            </div>

            <div class="form-group row mb-0 mr-4">
              <div class="col-md-8 offset-md-4 text-right">
                {!! Form::submit('Save', ['class'=>'btn btn-primary']) !!}
              </div>
            </div>

          </div>
        </div>

      </div>
      <div class="border-bottom border-grey"></div>

      <div class="row justify-content-center pt-5">
        <div class="col-lg-4">
          <h4>Actualizar contraseña</code></h5>
            <span class="text-justify" style="padding-top:-3px;">Asegúrese de que su cuenta esté usando una contraseña larga y aleatoria para mantenerse seguro.</span>
          </div>

          <div class="col-lg-8 text-center pt-0">
            <div class="card py-4 mb-5 mt-md-3 bg-white rounded" style="box-shadow: 0 1rem 3rem rgba(0, 0, 0, 0.175)">

              <div class="form-group px-3">
                {!! Form::label('new_password', 'New Password:',['class'=>'col-12 text-left pl-0']) !!}
                {!! Form::password('new_password', ['class'=>'col-md-8 form-control'])!!}
              </div>

              <div class="form-group px-3">
                {!! Form::label('new_confirm_password', 'Confirm Password:',['class'=>'col-12 text-left pl-0']) !!}
                {!! Form::password('new_confirm_password', ['class'=>'col-md-8 form-control'])!!}
              </div>

              <div class="form-group row mb-0 mr-4">
                <div class="col-md-8 offset-md-4 text-right">
                  {!! Form::submit('Save', ['class'=>'btn btn-primary']) !!}
                </div>
              </div>
              {!! Form::close() !!}
            </div>
          </div>

        </div>

        <div class="border-bottom border-grey"></div>

        <div class="row justify-content-center pt-5">
          <div class="col-lg-4">
            <h4>Eliminar cuenta</code></h5>
              <span class="text-justify" style="padding-top:-3px;">Elimina tu cuenta de forma permanente.</span>
            </div>

            <div class="col-lg-8 pt-0">
              <div class="card py-4 mb-5 mt-md-3 bg-white rounded" style="box-shadow: 0 1rem 3rem rgba(0, 0, 0, 0.175)">
                <div class="text-left px-3">
                Una vez que se elimine su cuenta, todos sus recursos y datos se eliminarán de forma permanente. Antes de eliminar su cuenta, descargue cualquier dato o información que desee conservar.
                </div>

                {!! Form::open(['method'=>'DELETE', 'action' =>['App\Http\Controllers\Auth\ProfileController@destroy',$user->uid]]) !!}
                {!! Form::open() !!}
                <div class="form-group row mb-0 mr-4 pt-4 px-3">
                  <div class="col-md-8 offset-l-4 text-left">
                    {!! Form::submit('Delete Account', ['class'=>'btn btn-danger pl-3']) !!}
                  </div>
                </div>
                {!! Form::close() !!}
              </div>
            </div>

          </div>

        </div>

      @endsection
