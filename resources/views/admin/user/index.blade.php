@extends('admin.layouts.master')

@push('css')
    
@endpush

@section('content')
<div class="row">
    <div class="col-md-6 offset-md-3">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Bordered Table</h3>
          @isset(auth()->user()->role->permission['permission']['user']['add'])
            <a href="{{ route('user.create') }}" class="btn btn-primary">Add user</a>
          @endisset
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table class="table table-bordered">
            <tr>
              <th style="width: 10px">#</th>
              <th>Name</th>
              <th>Email</th>
              <th>Role</th>
              <th>Action</th>
            </tr>
            @foreach ($users as $user)
              <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->role->name}}</td>
                <td>
                  @isset(auth()->user()->role->permission['permission']['user']['edit'])
                    <a href="{{ route('user.edit', $user->id) }}" class="btn btn-primary">Edit</a>
                  @endisset
                   
                   @isset(auth()->user()->role->permission['permission']['user']['delete'])
                    <form action="{{ route('user.destroy', $user->id) }}" method="POST">
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
</div>
@endsection

@push('js')
    
@endpush