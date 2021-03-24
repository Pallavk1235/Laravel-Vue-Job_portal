@extends('layouts.app')
@section('title')
Create Permission
@endsection

@section('content')
<div class="card card-primary">
	<div class="card-header">
		<h3 class="card-title">Add New Permission</h3>
		<div class="card-tools">
			<a href="{{route('permission.index')}}" class="btn btn-danger">Show All Permission</a>
		</div>
	</div>
	<form method="POST" action="{{route('permission.store')}}">
		@csrf
		<div class="card-body">
			<div class="form-group">
				<input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{old('name')}}" placeholder="Add Permission">
				@error('name')
					<span class="invalid-feedback" role='alert'>
                        <strong>{{ $message }}</strong>						
					</span>
				@enderror
			</div>
		</div>
		<div class="card-footer">
			<button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Create a Permission</button>
		</div>
	</form>
</div>
@endsection
