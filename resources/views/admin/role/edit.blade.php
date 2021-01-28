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
          <form action="{{ route('role.update', $role->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="exampleInputEmail1">Role Name</label>
                <input type="text" class="form-control" id="exampleInputEmail1" value="{{$role->name}}" name="name">
              </div>
              <button type="submit" class="btn btn-info">Update</button>
          </form>
        </div>
    </div>
@endsection

@push('js')
    
@endpush