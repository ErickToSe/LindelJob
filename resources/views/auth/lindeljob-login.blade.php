<head>
    <title> Iniciar sesion </title>
    <script src="{{ asset('js\jquery-1.12.4.min.js')}}"></script>
    <link href="{{ asset('css\bootstrap.min.css')}}" rel="stylesheet" id="bootstrap-css">
    <script src="{{ asset('js\bootstrap.min.js')}}"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('css\lindeljob-login.css')}}">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<link rel="stylesheet" type="{{ asset('css\style.css')}}">
    

</head>


<body>
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Inicar sesion</h3>
			</div>
			<div class="card-body">
				<form method="POST" action="{{route('login')}}">
                    @csrf
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="email" class="form-control" placeholder="Correo@ejemplo.com" name="email" id="email">
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" class="form-control" placeholder="Contraseña" name="password" id="password">
					</div>
                    <div class="row align-items-center remember">
						<input type="checkbox">Recordarme
					</div>
					<div class="form-group">
						<input type="submit" value="Login" class="btn float-right login_btn">
					</div>
                    <img src="images\logo-transparente-mediano.png">
				</form>
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center links">
					¿No tienes una cuenta?<a href="{{ route('register') }}">Registrate!</a>
				</div>
				<div class="d-flex justify-content-center">
					<a href="{{ route('password.request') }}">Olvidaste tu contraseña?</a>
				</div>
			</div>
		</div>
	</div>
</div>
</body>