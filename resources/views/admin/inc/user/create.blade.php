@extends('admin.layouts.admin')

@section('content')
    <div class="content-wrapper">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Create User </h3>
            </div>
            @include('includes.messages')
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" action="{{ route('user.store')}}" method="post">
            {{ csrf_field()}}
            <div class="card-body">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="name">Name User</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="User Name">
                    </div>
                    <div class="form-group">
                        <label for="eamil">Email</label>
                        <input type="text" class="form-control" name="eamil" id="eamil" placeholder="Eamil">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="password">
                    </div>
                    <div class="form-group">
                        <label for="Confirm_password">Comfirm password</label>
                        <input type="Confirm_password" class="form-control" name="Confirm_password" id="Confirm_password" placeholder="Confirm password">
                    </div>
                    <div class="form-group">
                        <label>Assign Role</label>
                        <div class="row">
                            @foreach ($roles as $role)
                                <div class="col-lg-3">
                                    <div class="checkbox">
                                        <label><input type="checkbox" name="role" value="{{ $role->id}}">{{ $role->name}}</label>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a type="button" class="btn btn-warning" href="{{ route('user.index')}}">Back</a>
            </div>
            </form>
        </div>
    </div>
@endsection