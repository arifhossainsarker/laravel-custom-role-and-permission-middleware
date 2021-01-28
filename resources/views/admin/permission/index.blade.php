@extends('admin.layouts.master')

@push('css')
    
@endpush

@section('content')
<div class="row">
    <div class="col-md-6 offset-md-3">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Bordered Table</h3>
          @isset(auth()->user()->role->permission['permission']['permissions']['add'])
            <a href="{{ route('permission.create') }}" class="btn btn-primary">Add Permission</a>
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
            @foreach ($permissions as $permission)
              <tr>
                <td>{{$permission->id}}</td>
                <td>{{$permission->role->name}}</td>
                <td>
                  @isset(auth()->user()->role->permission['permission']['permissions']['edit'])
                    <a href="{{route('permission.edit', $permission->id)}}" class="btn btn-primary">Edit</a>
                  @endisset
                  
                  @isset(auth()->user()->role->permission['permission']['permissions']['delete'])
                    <form action="{{ route('permission.destroy', $permission->id) }}" method="POST">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-danger">Delete</button>
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