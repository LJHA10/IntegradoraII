<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Bienvenido</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <style>
	body{
		background-image: url('https://pin.it/2GGlzJS');
		background-size:cover;
	}
  </style>
</head>
<!-- Contenido de la vista -->
<body >
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
	  <a class="navbar-brand" href="#">PanicSOS</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		
		<div class="ml-auto">
			@if (Route::has('login'))
			<div class="top-right links">
				@auth
                <p><a href="{{ url('/home') }}" class="link-secondary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Secondary link</a></p>
				@else
				<a href="{{ route('login') }}" class="link-secondary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">|  Iniciar sesion  | </a>
				@endauth
			</div>
			@endif
		</div>
	</nav>

	<!-- Agregar los archivos JavaScript de Bootstrap -->  
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

	<div class="bg-image" style="background-image: url('https://pin.it/6ueLWSW');">
	<div class="container-fluid">
  <div class="row justify-content-center align-items-center min-vh-100">
    <div class="col-md-4">
      <div class="card text-center">
        <div class="card-body">
          <h2>Bienvenido Administrador</h2>
          <p>Inicia sesión para continuar</p>
          <a href="{{ route('login') }}" class="btn btn-primary">Iniciar sesión</a>
        </div>
      </div>
    </div>
</div>
</div>
	</div>
</body>
<footer class="bg-light text-center text-lg-start">
	<div class="container p-4">
		<div class="row">
			<div class="col-lg-6 col-md-12 mb-4 mb-md-0">
				<h5 class="text-uppercase">Términos y Condiciones</h5>
				<p>Los botones de pánico son dispositivos diseñados para ser utilizados en situaciones de emergencia para alertar a las autoridades y/o a personas de confianza.
				   Los botones de pánico de Mulam están diseñados para ser utilizados únicamente en situaciones de emergencia y no deben ser utilizados de forma indebida o frívola.

</p>
			</div>
			<div class="col-lg-6 col-md-12 mb-4 mb-md-0">
				<h5 class="text-uppercase">Contacto</h5>
				<p>Para cualquier consulta o comentario, por favor contáctanos a través del siguiente correo electrónico: luisjavierhernandez150@gmail.com</p>
			</div>
    </div>
</div>
</footer>
</html>
