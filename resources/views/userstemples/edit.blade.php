@extends('layouts.app')

@section('content')
<div class="card">
	<div class="card-header py-3">
	  <h6 class="m-0 font-weight-bold text-primary">Asignar Templo</h6>
	</div>
	<div class="card-body">
		<form action="{{route('userstemples.update',$userstemple->id)}} " method="post">
			@csrf
			<div class="form-group row">
				<div class="col-sm-6 mb-3 mb-sm-0">
				<label class="form-control-label" for="tipo">Templos</label>
                <select class="form-control" id="temple_id" name="temple_id">
                	@foreach($temples as $temple)
                	<option value="{{$temple->id}}" @if($temple->id == old('temple_id', $temple->temple_id)) selected @endif>{{$temple->name_temple}} </option>
                	@endforeach
                </select>
              </div>
              <div class="col-sm-6 mb-3 mb-sm-0">
              	<label class="form-control-label">Usuario</label>
                <select class="form-control" id="user_id" name="status_id">
                	@foreach($users as $user)
                	<option value="{{$user->id}}" @if($user->id == old('user_id', $user->user_id)) selected @endif>{{$user->username}} </option>
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