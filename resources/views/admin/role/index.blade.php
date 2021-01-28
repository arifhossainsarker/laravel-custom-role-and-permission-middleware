@extends('admin.layouts.master')

@push('css')
    
@endpush

@section('content')
<div class="row">
    <div class="col-md-6 offset-md-3">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Bordered Table</h3>
          @isset(auth()->user()->role->permission['permission']['role']['add'])
            <a href="{{ route('role.create') }}" class="btn btn-primary">Add Role</a>
          @endisset
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table class="table table-bordered">
            <tr>
              <th style="width: 10px">#</th>
              <th>Role Name</th>
              <th>Action</th>
            </tr>
            @foreach ($roles as $role)
              <tr>
                <td>{{$role->id}}</td>
                <td>{{$role->name}}</td>
                <td>
                  @isset(auth()->user()->role->permission['permission']['role']['edit'])
                    <a href="{{ route('role.edit', $role->id) }}" class="btn btn-primary">Edit</a> 
                  @endisset
                  
                  @isset(auth()->user()->roel->permission['permission']['role']['delete'])
                    <form action="{{ route('role.destroy', $role->id) }}" method="POST">
                      @csrf
                      @method('DELETE')
                      <button class="btn btn-danger">Delete</button>
                    </form>
                  @endisset
                 
                  

                </td>
              </tr>
            @endforeach
            
          </table>
        </div>
    </div>
@endsection

@push('js')
    
@endpush