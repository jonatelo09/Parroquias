@extends('layouts.app')

@section('content')
<div class="card">
	<div class="card-header py-3">
	  <h6 class="m-0 font-weight-bold text-primary">Crear Templo</h6>
	</div>
	<!-- enctype="multipart/form-data" -->
	<div class="card-body">
		<form action="{{route('managers.store')}}" method="post" enctype="multipart/form-data" >
			@csrf
			<div class="form-group row">
				<div class="col-sm-6 mb-3 mb-sm-0">
				<label class="form-control-label" for="firstname">Nombre</label>
                <input type="text" id="firstname" name="firstname" class="form-control form-control-user"  placeholder="Nombre del Manager" required>
              </div>
              <div class="col-sm-6 mb-3 mb-sm-0">
              	<label class="form-control-label">Appelido</label>
                <input type="text" id="lastname" name="lastname" class="form-control form-control-user"  placeholder="Appelido del Manager" required>
              </div>
			</div>
			<div class="form-group row">
				<div class="col-sm-6 mb-3 mb-sm-0">
				<label class="form-control-label" for="email">Correo</label>
                <input type="text" id="email" name="email" class="form-control form-control-user"  placeholder="Correo del Manager" required>
              </div>
              <div class="col-sm-6 mb-3 mb-sm-0">
              	<label class="form-control-label">Telefono</label>
                <input type="text" id="phone" name="phone" class="form-control form-control-user"  placeholder="Telefono del Manager" required>
              </div>
			</div>
			<div class="form-group row">
				<div class="col-sm-6 mb-3 mb-sm-0">
				<label class="form-control-label" for="length">Imagen de perfil</label>
                <input type="file" name="image" class="form-control form-control-user" >
              </div>
              <div class="col-sm-6 mb-3 mb-sm-0">
				<label class="form-control-label" for="tipo">Tipo</label>
                <select class="form-control" name="type">
                	<option value="parroco">Parroco</option>
                	<option value="vicario">Vicario</option>
                </select>
              </div>
			</div>
			<div class="form-group row">
				<div class="col-sm-12 mb-3 mb-sm-0">
					<button class="mt-3 btn btn-success btn-lg">Guardar</button>
				</div>
			</div>
		</form>
	</div>
</div>
@endsection