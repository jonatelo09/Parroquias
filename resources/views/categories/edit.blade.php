@extends('layouts.app')

@section('content')
<div class="card">
	<div class="card-header py-3">
	  <h6 class="m-0 font-weight-bold text-primary">Crear Templo</h6>
	</div>
	<!-- enctype="multipart/form-data" -->
	<div class="card-body">
		<form action="{{route('categories.update',$category->id)}}" method="post">
			@csrf
			<div class="form-group row">
				<div class="col-sm-12 mb-3 mb-sm-0">
				<label class="form-control-label" for="name_cat">Nombre</label>
                <input type="text" id="name_cat" name="name_cat" class="form-control form-control-user"  placeholder="Nombre del Manager" value="{{old('name_cat',$category->name_cat)}}" required>
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