@extends('admin.layouts.master')

@push('css')
    
@endpush

@section('content')
<div class="row">
    <div class="col-md-10 offset-md-1">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Add Permission</h3>
        </div>
        <form action="{{ route('permission.store') }}" method="POST">
            @csrf
        <!-- /.card-header -->
        <div class="card-body">
            <div class="from-group">
                <select name="role_id" id="">
                    <option value="">Select user</option>
                    @foreach (\App\Models\Role::get() as $role)
                        <option value="{{ $role->id }}">{{ $role->name }}</option>
                    @endforeach
                </select>
            </div>
          <table class="table table-bordered">
            <tr>
              <th>Permissions</th>
              <th>Add</th>
              <th>Edit</th>
              <th>view</th>
              <th>Delete</th>
              <th>List</th>
            </tr>
            
              <tr>
                <td>Role</td>
                <td><input type="checkbox" name="permission[role][add]" value="1"></td>
                <td><input type="checkbox" name="permission[role][edit]" value="1"></td>
                <td><input type="checkbox" name="permission[role][view]" value="1"></td>
                <td><input type="checkbox" name="permission[role][delete]" value="1"></td>
                <td><input type="checkbox" name="permission[role][list]" value="1"></td>
              </tr>

              <tr>
                <td>Permissions</td>
                <td><input type="checkbox" name="permission[permissions][add]" value="1"></td>
                <td><input type="checkbox" name="permission[permissions][edit]" value="1"></td>
                <td><input type="checkbox" name="permission[permissions][view]" value="1"></td>
                <td><input type="checkbox" name="permission[permissions][delete]" value="1"></td>
                <td><input type="checkbox" name="permission[permissions][list]" value="1"></td>
              </tr>

              <tr>
                <td>User</td>
                <td><input type="checkbox" name="permission[user][add]" value="1"></td>
                <td><input type="checkbox" name="permission[user][edit]" value="1"></td>
                <td><input type="checkbox" name="permission[user][view]" value="1"></td>
                <td><input type="checkbox" name="permission[user][delete]" value="1"></td>
                <td><input type="checkbox" name="permission[user][list]" value="1"></td>
              </tr>
            
          </table>
        </div>
            <button type="submit" class="btn btn-info">Submit</button>
        </form>
    </div>
</div>
@endsection

@push('js')
    
@endpush