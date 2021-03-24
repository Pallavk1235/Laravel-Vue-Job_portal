@extends('layouts.app')
@section('title')
Role
@endsection
@section('content')
<div class="card">
	<div class="card-header">
		<h3 class="card-title">Role table</h3>
		<div class="card-tools">
			<a href="{{route('role.create')}}" class="btn btn-primary">Add New Role</a>
		</div>
	</div>
	<div class="card-body table-responsive p-0">
		<table class="table table-hover text-nowrap">
			<thead>
				<tr>
					<th>ID</th>
					<th>Role</th>
					<th>Permission</th>
					<th>Date Posted</th>
				</tr>
			</thead>
			<tbody>
				@forelse($roles as $allrole)
				<tr>
					<td>{{$allrole->id}}</td>
					<td>{{$allrole->name}}</td>
					<td>
						@foreach($allrole->permissions as $permission)
						<button class="btn btn-warning" role="button">{{$permission->name}}</button>
						@endforeach
					</td>
					<td><span class="tag tag-success">{{ $role->created_at }}</span></td>
                        {{--  <td>
                            <a href="{{ route('role.show', $role->id ) }}" class="btn btn-info">Change Permission</a>
                            <a href="{{ route('role.destroy',$role->id ) }}" class="btn btn-danger">Delete</a>
                        </td>  --}}
                    </tr>
                    @empty
                    <tr>
                    	<td><i class="fas fa-folder-open"></i> No Record found</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection