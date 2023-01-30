@extends('backend.layouts.master')
@section('pageTitle') edit role @endsection
@section('styles')
    <link rel="stylesheet" href="{{asset('assets/vendor/backend/parsely/css/parsely.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/backend/icheck-bootstrap/icheck-bootstrap.min.css')}}">
@endsection
@section('pageContent')
    <div class="content-header bg-white">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">
                        Role
                    </h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="{{route('backend.dashboard')}}">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="{{route('backend.roles.index')}}">Roles</a>
                        </li>
                        <li class="breadcrumb-item active">edit</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <section class="content mt-4">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card card-default">
                        <form id="editRoleForm" action="{{route('backend.roles.update', $role->id)}}" method="POST">
                            <div class="card-body">
                                @csrf
                                @method('PUT')
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="name">Role Name:</label>
                                        <input type="text" class="form-control @error('name') is-invalid @enderror"
                                               name="name" id="name"
                                               placeholder="Enter role name"
                                               value="{{$role->name}}"
                                               required minlength="3" maxlength="255" autofocus>
                                        @error('name')
                                        <span class="invalid-tooltip" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-12">
                                        <h6 class="lead">Permissions</h6>
                                        <div class="row row-cols-1 row-cols-md-3">
                                            @forelse($permissions as $permission)
                                                <div class="col">
                                                    <div class="icheck-turquoise">
                                                        <input type="checkbox"
                                                               name="permissions[]"
                                                               value="{{$permission->id}}"
                                                               @if($permission->roles->pluck('id')->contains($role->id)) checked
                                                               @endif
                                                               id="permission-{{$permission->id}}">
                                                        <label for="permission-{{$permission->id}}">
                                                            {{$permission->name}}
                                                        </label>
                                                    </div>
                                                </div>
                                            @empty
                                                <div class="col">
                                                    <p class="text-muted">
                                                        There are no permissions
                                                        <a href="{{route('backend.permissions.create')}}"
                                                           class="btn btn-primary btn-sm">
                                                            create</a>
                                                    </p>
                                                </div>
                                            @endforelse
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">
                                    Update
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('scripts')
    <script src="{{asset('assets/vendor/backend/parsely/js/parsley.min.js')}}"></script>
@endsection
