@extends('layouts.app')

@section('content')
@if(session('info'))
<div class="row justify-content-center">
    <div class="col-md-12 col-md-offset-2">
        <div class="alert alert-success">
            {{ session('info')}}
        </div>
    </div>
</div>
@endif
<!-- DataTales Example -->
<div class="card shadow mb-4">
<div class="card-header py-3">
  <h6 class="m-0 font-weight-bold text-primary">Lista de Folders</h6>
  <div class="text-md-right">
    <a href="{{route('folders.create')}}" class="btn btn-sm btn-success">Crear</a>
  </div>
</div>
<div class="card-body">
  <div class="table-responsive">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
      <thead>
        <tr>
          <th>Nombre</th>
          <th>Descripcion</th>
          <th></th>
        </tr>
      </thead>

      <tbody>
      	@foreach($folders as $folder)
      	<tr>
      		<td>{{$folder->name_fol}} </td>
          <td>{{$folder->description_fol}} </td>
          <td>
      			<div class="text-md-right">
      				<div class="dropdown">
                  <a class="btn btn-sm btn-icon-only text-dark" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-ellipsis-v"></i>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                    <form method="post" action="{{route('folders.destroy',$folder->id)}} ">
                      @csrf
                      <a class="dropdown-item" href="{{route('folders.edit',$folder->id)}} "><i class="ni ni-align-center"></i>Editar</a>
                      <button class="dropdown-item" href="#"><i class="ni ni-fat-remove"></i>Eliminar</button>
                    </form>
                  </div>
                </div>
      			</div>
      		</td>

      	</tr>
      	@endforeach
      </tbody>
    </table>
    {{$folders->links()}}
  </div>
</div>
</div>
@endsection