@extends('layouts.app')

@section('content')
<div class="card">
	<div class="card-header py-3">
	  <h6 class="m-0 font-weight-bold text-primary">Crear Templo</h6>
	</div>
	<div class="card-body">
		<form action="{{route('temples.update',$temple->id)}} " method="post">
			@csrf
			<div class="form-group row">
				<div class="col-sm-6 mb-3 mb-sm-0">
				<label class="form-control-label" for="name_temple">Nombre</label>
                <input type="text" id="name_temple" name="name_temple" class="form-control form-control-user"value="{{old('name_temple',$temple->name_temple)}}" required>
              </div>
              <div class="col-sm-6 mb-3 mb-sm-0">
              	<label class="form-control-label">Direccion</label>
                <input type="text" id="address" name="address" class="form-control form-control-user" value="{{old('address',$temple->address)}}" required>
              </div>
			</div>
			<div class="form-group row">
				<div class="col-sm-6 mb-3 mb-sm-0">
				<label class="form-control-label" for="email">Correo</label>
                <input type="text" id="email" name="email" class="form-control form-control-user" value="{{old('email',$temple->email)}}" required>
              </div>
              <div class="col-sm-6 mb-3 mb-sm-0">
              	<label class="form-control-label">Telefono</label>
                <input type="text" id="phone" name="phone" class="form-control form-control-user" value="{{old('phone',$temple->phone)}}" required>
              </div>
			</div>
			<div class="form-group row">
				<div class="col-sm-6 mb-3 mb-sm-0">
				<label class="form-control-label" for="length">Longitud</label>
                <input type="text" id="length" name="length" class="form-control form-control-user" value="{{old('length',$temple->length)}} " required>
              </div>
              <div class="col-sm-6 mb-3 mb-sm-0">
              	<label class="form-control-label">Latitud</label>
                <input type="text" id="latitude" name="latitude" class="form-control form-control-user" value="{{old('latitude',$temple->latitude)}}" required>
              </div>
			</div>
			<div class="form-group row">
				<div class="col-sm-6 mb-3 mb-sm-0">
				<label class="form-control-label" for="tipo">Tipo</label>
                <select class="form-control" name="type" value="{{old('type','$temple->type')}} ">
                	<option value="capilla">Capilla</option>
                	<option value="iglesia">Iglesia</option>
                </select>
              </div>
              <div class="col-sm-6 mb-3 mb-sm-0">
              	<label class="form-control-label">Status</label>
                <select class="form-control" id="status_id" name="status_id">
                	@foreach($status as $statu)
                	<option value="{{$statu->id}}" @if($statu->id == old('status_id', $temple->status_id)) selected @endif>{{$statu->name_sta}} </option>
                	@endforeach
                </select>
              </div>
			</div>
			<div class="form-group row">
				<div class="col-sm-6 mb-3 mb-sm-0">
					<label>Descripción</label>
					<textarea type="text" name="description" class="form-control form-control-user" required>{{old('description',$temple->description)}}</textarea>
				</div>
				<div class="col-sm-6 mb-3 mb-sm-0">
					<label>Manager</label>
					<select class="form-control" id="manager_id" name="manager_id">
						@foreach($managers as $manager)
						<option value="{{$manager->id}}" @if($manager->id == old('manager_id', $temple->manager_id)) selected @endif>{{$manager->firstname}} </option>
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