@extends('layouts.app')

@section('content')
<div class="card">
	<div class="card-header py-3">
	  <h6 class="m-0 font-weight-bold text-primary">Crear Templo</h6>
	</div>
	<!-- enctype="multipart/form-data" -->
	<div class="card-body">
		<form action="{{route('folders.store')}}" method="post">
			@csrf
			<div class="form-group row">
				<div class="col-sm-12 mb-3 mb-sm-0">
				<label class="form-control-label" for="name_fol">Nombre</label>
          <input type="text" id="name_fol" name="name_fol" class="form-control form-control-user"  placeholder="Nombre del Folder..." required>
        </div>
      </div>
      <div class="form-group row">
      	<div class="col-sm-12 mb-3 mb-sm-0">
        	<label class="form-control-label">Descripcion</label>
          <input type="text" id="description_fol" name="description_fol" class="form-control form-control-user"  placeholder="Descripcion de Folder" required>
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