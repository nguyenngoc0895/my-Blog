@extends('admin.layouts.admin')

@section('head')
     <!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('admin/plugins/datatables/dataTables.bootstrap4.css')}}">
@endsection

@section('content')
 <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1>Blank Page</h1>
        </div>
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Blank Page</li>
        </ol>
        <a class="col-lg-offset-4 btn btn-success" href="{{ route('user.create')}}">Add new user</a>
        </div>
    </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">

    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Data Table With Full Features</h3>
            @include('includes.messages')
        </div>
        
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
                <th>S.No</th>
                <th>User Name</th>
                <th>Assigned Roles</th>
                <th>AStatus</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $loop->index + 1}}</td>
                        <td>{{ $user->name }}</td>
                        <td>
                            @foreach ($user->roles as $role)
                                {{ $role->name}} |
                            @endforeach
                        </td>
                        <td>{{ $user->status? 'Active' : 'Not Active' }}</td>
                        <td><a href="{{ route('user.edit', $user->id) }}"><ion-icon name="create"></ion-icon></span></a></td>
                        <td>
                            <form id="delete-form-{{ $user->id }}" method="post" action="{{ route('user.destroy', $user->id) }}" style="display:none">
                                {{ csrf_field()}}
                                {{ method_field('DELETE')}}
                            </form>
                            <a href="" onclick="
                            if( confirm('Mày có chắc với quyết định của mày không?')){
                                event.preventDefault();
                                document.getElementById('delete-form-{{ $user->id}}').submit();
                            }
                            else{
                                event.preventDefault();
                            }    
                            ">
                            <ion-icon name="trash"></ion-icon></a> 
                        </td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
            <tr>
                <th>S.No</th>
                <th>User Name</th>
                <th>Assigned Roles</th>
                <th>Status</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            </tfoot>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
        Footer
    </div>
    <!-- /.card-footer-->
    </div>
    <!-- /.card -->

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection

@section('footer')
    <script src="{{ asset('admin/plugins/datatables/jquery.dataTables.js')}}"></script>
    <script src="{{ asset('admin/plugins/datatables/dataTables.bootstrap4.js')}}"></script>
    <script src="https://unpkg.com/ionicons@4.2.4/dist/ionicons.js"></script>
    <script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>
@endsection