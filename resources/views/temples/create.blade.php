@extends('layouts.app')

@section('content')
<div class="card">
	<div class="card-header py-3">
	  <h6 class="m-0 font-weight-bold text-primary">Crear Templo</h6>
	</div>
	<div class="card-body">
		<form action="{{route('temples.store')}} " method="post">
			@csrf
			<div class="form-group row">
				<div class="col-sm-6 mb-3 mb-sm-0">
				<label class="form-control-label" for="name_temple">Nombre</label>
                <input type="text" id="name_temple" name="name_temple" class="form-control form-control-user"  placeholder="Nombre del Templo" required>
              </div>
              <div class="col-sm-6 mb-3 mb-sm-0">
              	<label class="form-control-label">Direccion</label>
                <input type="text" id="address" name="address" class="form-control form-control-user"  placeholder="Direccion del Templo" required>
              </div>
			</div>
			<div class="form-group row">
				<div class="col-sm-6 mb-3 mb-sm-0">
				<label class="form-control-label" for="email">Correo</label>
                <input type="text" id="email" name="email" class="form-control form-control-user"  placeholder="Correo del Templo" required>
              </div>
              <div class="col-sm-6 mb-3 mb-sm-0">
              	<label class="form-control-label">Telefono</label>
                <input type="text" id="phone" name="phone" class="form-control form-control-user"  placeholder="Telefono del Templo" required>
              </div>
			</div>
			<div class="form-group row">
				<div class="col-sm-6 mb-3 mb-sm-0">
				<label class="form-control-label" for="length">Longitud</label>
                <input type="text" id="length" name="length" class="form-control form-control-user"  placeholder="Longitud del Templo" required>
              </div>
              <div class="col-sm-6 mb-3 mb-sm-0">
              	<label class="form-control-label">Latitud</label>
                <input type="text" id="latitude" name="latitude" class="form-control form-control-user"  placeholder="Latitud del Templo" required>
              </div>
			</div>
			<div class="form-group row">
				<div class="col-sm-6 mb-3 mb-sm-0">
				<label class="form-control-label" for="tipo">Tipo</label>
                <select class="form-control" name="type">
                	<option value="capilla">Capilla</option>
                	<option value="iglesia">Iglesia</option>
                </select>
              </div>
              <div class="col-sm-6 mb-3 mb-sm-0">
              	<label class="form-control-label">Status</label>
                <select class="form-control" id="status_id" name="status_id">
                	@foreach($status as $statu)
                	<option value="{{$statu->id}}">{{$statu->name_sta}} </option>
                	@endforeach
                </select>
              </div>
			</div>
			<div class="form-group row">
				<div class="col-sm-6 mb-3 mb-sm-0">
					<label>Descripción</label>
					<textarea type="text" name="description" class="form-control form-control-user" placeholder="Descripcion del Templo" required></textarea>
				</div>
				<div class="col-sm-6 mb-3 mb-sm-0">
					<label>Manager</label>
					<select class="form-control" id="manager_id" name="manager_id">
						@foreach($managers as $manager)
						<option value="{{$manager->id}} ">{{$manager->firstname}}</option>
						@endforeach
					</select>
				</div>
			</div>
			<div class="form-group row">
				<div class="col-sm-12 mb-3 mb-sm-0">
					<button type="submit" class="mt-3 btn btn-success btn-lg text-center">Guardar</button>
				</div>
			</div>
		</form>
	</div>
</div>
@endsection