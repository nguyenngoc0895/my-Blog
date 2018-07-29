@extends('admin.layouts.admin')

@section('content')
    <div class="content-wrapper">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Update Acc Admin </h3>
            </div>
            @include('includes.messages')
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" action="{{ route('user.update', $user->id)}}" method="post">
            {{ csrf_field()}}
            {{ method_field('PUT')}}
            <div class="card-body">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="name">Name User</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="User Name" value="@if (old('name')) {{ old('name')}} @else{{ $user->name }} @endif">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" name="email" id="email" placeholder="Email" value="@if (old('email')) {{ old('email')}} @else{{ $user->email }} @endif">
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone" value="@if (old('phone')) {{ old('phone')}} @else{{ $user->phone }} @endif">
                    </div>
                    <div class="form-group">
                        <label for="Confirm_password">Checkbox</label>
                        <div class="checkbox">
                            <label><input type="checkbox" name="status" @if (old('status') == 1 || $user->status == 1) checked @endif value="1"> Status</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Assign Role</label>
                        <div class="row">
                            @foreach ($roles as $role)
                                <div class="col-lg-3">
                                    <div class="checkbox">
                                        <label><input type="checkbox" name="role[]" value="{{ $role->id}}"
                                            @foreach ($user->roles as $user_role)
                                                @if ($user_role->id == $role->id)
                                                    checked
                                                @endif
                                            @endforeach
                                            >{{ $role->name}}</label>
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