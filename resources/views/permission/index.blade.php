@extends('layouts.app')
@section('title')
Permission
@endsection
@section('content')
<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-header">
				<h3 class="card-title">Permission Table</h3>

				<div class="card-tools">
					<a href="{{route('permission.create')}}" class="btn btn-primary">Create New Permisssion</a>
				</div>
			</div>
			<!-- /.card-header -->
			<div class="card-body table-responsive p-0">
				<table class="table table-hover text-nowrap">
					<thead>
						<tr>
							<th>ID</th>
							<th>Name</th>
							<th>Date Posted</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						@forelse($permissions as $allpermission)
							<tr>
								<td>{{$allpermission->id}}</td>
								<td>{{$allpermission->name}}</td>
								<td>{{$allpermission->created_at}}</td>
								<td>
									<a href="{{route('permission.edit', $allpermission->id)}}" class="btn btn-success">Edit Permission</a>
								</td>
							</tr>
						@empty
							<tr>No result found</tr> 
						@endforelse
					</tbody>
				</table>
			</div>
			<!-- /.card-body -->
		</div>
		<!-- /.card -->
	</div>
</div>
@endsection