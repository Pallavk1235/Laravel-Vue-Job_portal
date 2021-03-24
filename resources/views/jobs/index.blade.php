@extends('layouts.app')

@section('content')
    <center>
        <h3>Add Job Type</h3>
    </center>
    <div class="row">
      <!-- left column -->
      <div class="col-md-6">
        <!-- general form elements -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Add jobs</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" method="POST" action="{{route('job.Postjob')}}">
            @csrf
            <div class="card-body">
              <div class="form-group">
                <label for="jobtype">Job Type</label>
                <input type="text" class="form-control" name="job_name" id="jobtype" placeholder="Enter job type">
            </div>
            <div class="form-group">
                <label>Small description about job</label>
                <textarea class="form-control" rows="3" name="job_description" placeholder="Enter ..."></textarea>
            </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
          <button type="submit" class="btn btn-primary">Submit</button>
      </div>
  </form>
</div>
<!-- /.card -->
</div>
<div class="col-md-6">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Jobs List</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table class="table table-bordered">
          <thead>                  
            <tr>
              <th>Id</th>
              <th>Job Type</th>
              <th>Description</th>
          </tr>
      </thead>
    <tbody>
        @foreach($alljobs as $alldata)
        <tr>
          <td>{{ $alldata->id }}</td>
          <td>{{ $alldata->job_name }}</td>
          <td>{{ $alldata->job_description }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
<!-- /.card-body -->
</div>
</div>
@endsection