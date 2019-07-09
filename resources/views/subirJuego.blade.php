@extends('welcome')

@section('navBar')
@parent
@endsection

@section('Contenido')
<div class="container">

	<!--Este código muestra un mensaje con el resultado de la subida del juego-->
	@if ( Session::has('send') )
	<div class="alert alert-success margin-b-30">
		{{Session::get('send')}}
	</div>
	@endif

	@if (count($errors) > 0)
	<div class="alert alert-danger margin-b-30">
		<ul>
			@foreach ($errors->all() as $error)
			<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
	@endif
	<!--Formulario de subida de juego-->
	<form action="crearJuego" method="post" class="form-horizontal" enctype="multipart/form-data" files=true >
		{!! csrf_field() !!}
		<div class="form-body">
			<div class="row">
				<div class="col-md-4">
					<div class="form-group">
						<label class="control-label col-md-3">Nombre</label>
						<div class="col-md-9">
							<input type="text" class="form-control" name="nombre" placeholder="" required>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group ">
						<label class="control-label col-md-3">Plataforma</label>
						<div class="col-md-9">
							<input type="text" class="form-control" name="plataforma" placeholder="" required>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group ">
						<label class="control-label col-md-3">Puntuación</label>
						<div class="col-md-9">
							<input type="text" class="form-control" name="puntuacion" placeholder="" required>
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<div class="form-group">
						<label class="control-label col-md-3">Descripción</label>
						<div class="col-md-12">
							<textarea name="desc" required></textarea>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<h4>Imagenes</h4>
				<div class="col-md-4">
					<div class="form-group">
						<label class="control-label col-md-3">Imagen 1</label>
						<div class="col-md-12">
							<input type="file" class="form-control" name='imagen1'  required>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
						<label class="control-label col-md-3">Imagen 2</label>
						<div class="col-md-12">
							<input type="file" class="form-control" name='imagen2'  required>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
						<label class="control-label col-md-3">Imagen 3</label>
						<div class="col-md-12">
							<input type="file" class="form-control" name='imagen3'  required>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<h4>Enlaces</h4>
				<div class="col-md-4">
					<div class="form-group">
						<label class="control-label col-md-3">Enlace 1</label>
						<div class="col-md-12">
							<input type="text" class="form-control" name="enlace1" placeholder="" required>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
						<label class="control-label col-md-3">Enlace 2</label>
						<div class="col-md-12">
							<input type="text" class="form-control" name="enlace2" placeholder="" required>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
						<label class="control-label col-md-3">Enlace 1</label>
						<div class="col-md-12">
							<input type="text" class="form-control" name="enlace3" placeholder="" required>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="form-actions">
			<div class="row">
				<div class="col-md-6">
					<div class="row">

						<button type="submit" class="btn btn-success">Subir Juego</button>

					</div>
				</div>
			</div>
		</div>
	</form>
</div>
@endsection

@section('footer')
@parent
@endsection

