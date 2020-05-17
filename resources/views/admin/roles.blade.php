@include('layouts.master')

<!-- /.navbar -->
@include('layouts.header')

<!-- Main Sidebar Container -->
@include('layouts.sidebar')

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Manage Role</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">Roles</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>


    <section class="content">
        <div class="container-fluid">
            <!-- COLOR PALETTE -->
            <div class="card">
                <div class="card-header">


                    <div class="col-6">
                        <i class="fas fa-copy"></i>
                        Roles
                    </div>
                    <div class="col-6 mt-2">
                        @if (session('active_role_id') != 3)
                        <a data-toggle="modal" data-target="#addModal" class="btn btn-secondary btn-xs text-white">
                            <i class="fas fa-plus"></i>
                            Add Role
                        </a>
                        @endif
                    </div>


                </div>
                <div class="card-body text-center">
                    <table class="table table-striped table-bordered" id="datatables">
                        @if (session('active_role_id') != 3)
                        <thead>
                            <th style="width: 10%">No</th>
                            <th style="width: 45%">Role Name</th>
                            <th style="width: 20%">Action</th>
                        </thead>
                        <tbody>
                            <?php $no = 1 ?>
                            @foreach ($Roles as $r)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $r['role_name']}}</td>
                                <td>
                                    <a data-toggle="modal" data-target="#updateModal-{{ $r['id'] }}" class="btn btn-default mr-2">Update</a>
                                    <a href="/Roles/hapus/{{ $r['id'] }}" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        @else
                        <thead>
                            <th style="width: 10%">No</th>
                            <th style="width: 45%">Role Name</th>
                        </thead>
                        <tbody>
                            <?php $no = 1 ?>
                            @foreach ($Roles as $r)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $r['role_name']}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                        @endif
                    </table>
                </div>
            </div>
        </div>
    </section>
</div>
@include('layouts.footer')

<div class="modal fade" tabindex="-1" role="dialog" id="addModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Role</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>

            <form action="/Roles/add" method="post">
                {{ csrf_field() }}
                <div class="modal-body">

                    <div class="form-group">
                        <label for="brand_name">Role Name</label>
                        <input type="text" class="form-control" name="rolename" placeholder="Enter Role name" autocomplete="off" required>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>

            </form>


        </div>
    </div>
</div>

@foreach ($Roles as $data)
{{-- Modal Update --}}
<div class="modal fade" tabindex="-1" role="dialog" id="updateModal-{{ $data['id'] }}">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Update Role</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>

            <form action="/Roles/update/{{ $data['id'] }}" method="POST">
                {{ csrf_field() }}
                <div class="modal-body">

                    <div class="form-group">
                        <label for="brand_name">Role Name</label>
                        <input type="text" class="form-control" name="rolename" placeholder="Enter Role name" autocomplete="off" value="{{ $data['role_name'] }}">
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>

            </form>


        </div>
    </div>
</div>
@endforeach
