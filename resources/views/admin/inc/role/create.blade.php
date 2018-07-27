@extends('admin.layouts.admin')

@section('content')
    <div class="content-wrapper">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Create your role </h3>
            </div>
            @include('includes.messages')
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" action="{{ route('role.store')}}" method="post">
            {{ csrf_field()}}
                <div class="card-body">
                    <div class="col-lg-offset-3 col-lg-6">
                        <div class="form-group">
                            <label for="name">role title</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Role">
                        </div>
                    </div>
                    {{-- add permission --}}
                    <div class="row">
                        <div class="col-lg-2">
                            <label for="name">Post Permission</label>
                            @foreach ($permissions as $permission )
                                @if ($permission->for == 'post')
                                    <div class="checkbox">
                                        <label><input type="checkbox" name="permission[]" value="{{ $permission->id }}">{{ $permission->name}}</label>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                        <div class="col-lg-2">
                            <label for="name">User Permission</label>
                            @foreach ($permissions as $permission )
                                @if ($permission->for == 'user')
                                    <div class="checkbox">
                                        <label><input type="checkbox" name="permission[]" value="{{ $permission->id }}">{{ $permission->name}}</label>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                        <div class="col-lg-2">
                            <label for="name">Other Permission</label>
                            @foreach ($permissions as $permission )
                                @if ($permission->for == 'other')
                                    <div class="checkbox">
                                        <label><input type="checkbox" name="permission[]" value="{{ $permission->id }}">{{ $permission->name}}</label>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                    {{-- add permission --}}
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a type="button" class="btn btn-warning" href="{{ route('role.index')}}">Back</a>
                </div>
            </form>
        </div>
    </div>
@endsection