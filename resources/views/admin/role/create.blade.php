@extends('admin.layouts.master')

@push('css')
    
@endpush

@section('content')
<div class="row">
    <div class="col-md-6 offset-md-3">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Role Form</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <form action="{{ route('role.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Role Name</label>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Role Name" name="name">
              </div>
              <button type="submit" class="btn btn-info">Submit</button>
          </form>
        </div>
    </div>
@endsection

@push('js')
    
@endpush