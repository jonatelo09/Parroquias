@extends('layouts.app')

@section('content')
<div class="card">
	<div class="card-header py-3">
	  <h6 class="m-0 font-weight-bold text-primary">Crear Templo</h6>
	</div>
	<!-- enctype="multipart/form-data" -->
	<div class="card-body">
		<form action="{{route('props.store')}}" method="post" enctype="multipart/form-data" >
			@csrf
			<div class="form-group row">
				<div class="col-sm-6 mb-3 mb-sm-0">
				<label class="form-control-label" for="name_props">Nombre</label>
                <input type="text" id="name_props" name="name_props" class="form-control form-control-user"  placeholder="Nombre de la Utileria" required>
              </div>
              <div class="col-sm-6 mb-3 mb-sm-0">
				<label class="form-control-label" for="quantity">Cantidad</label>
                <input type="text" id="quantity" name="quantity" class="form-control form-control-user"  placeholder="Cantidad..." required>
              </div>
            </div>
            <div class="form-group row">
            	<div class="col-sm-12 mb-3 mb-sm-0">
              	<label class="form-control-label">Descripcion</label>
                <input type="text" id="description_props" name="description_props" class="form-control form-control-user"  placeholder="Descripcion de la Utileria" required>
              </div>
			</div>
			<div class="form-group row">

              <div class="col-sm-6 mb-3 mb-sm-0">
              	<label class="form-control-label">Es Reliquia</label>
                <select class="form-control" name="is_reliquia">
                	<option value="0">Si</option>
                	<option value="1">No</option>
                </select>
              </div>
              <div class="col-sm-6 mb-3 mb-sm-0">
				<label class="form-control-label" for="tipo">Templo</label>
                <select class="form-control" id="temple_id" name="temple_id">
                	@foreach($temples as $temple)
                	<option value="{{$temple->id}}">{{$temple->name_temple}}</option>
                	@endforeach
                </select>
              </div>
			</div>
			<div class="form-group row">
				<div class="col-sm-6 mb-3 mb-sm-0">
				<label class="form-control-label" for="length">Precio</label>
                <input type="number" name="price" class="form-control form-control-user" >
              </div>
              <div class="col-sm-6 mb-3 mb-sm-0">
				<label class="form-control-label" for="tipo">Categoria</label>
                <select class="form-control" id="category_id" name="category_id">
                	@foreach($categories as $category)
                	<option value="{{$category->id}}">{{$category->name_cat}}</option>
                	@endforeach
                </select>
              </div>
			</div>
			<div class="form-group row">

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