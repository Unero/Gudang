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
                    <h1 class="m-0 text-dark">Manage Room</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">Rooms</li>
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
                        Rooms
                    </div>
                    <div class="col-6 mt-2">
                        <a data-toggle="modal" data-target="#addModal" class="btn btn-secondary btn-xs text-white">
                            <i class="fas fa-plus"></i>
                            Add Room
                        </a>
                    </div>


                </div>
                <div class="card-body">
                    <table class="table table-striped table-bordered" id="datatables">
                        <thead>
                            <th style="width: 10%">No</th>
                            <th style="width: 15%">Location</th>
                            <th style="width: 30%">Description</th>
                            <th style="width: 20%">Action</th>
                        </thead>
                        <tbody>
                            <?php $no=1 ?>
                            @foreach ($Rooms as $room)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $room['location']}}</td>
                                    <td>{{ $room['desc']}}</td>
                                    <td>
                                        <a data-toggle="modal" data-target="#updateModal-{{ $room['id'] }}" class="btn btn-default mr-2">Update</a>
                                        <a href="/Rooms/hapus/{{ $room['id'] }}" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
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
                <h4 class="modal-title">Add Rooms</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>

            <form action="/Rooms/add" method="post">
                {{ csrf_field() }}
                <div class="modal-body">

                    <div class="form-group">
                        <label for="location">Location</label>
                        <input type="text" class="form-control" name="location"
                            placeholder="Enter Location" autocomplete="off" required>
                    </div>
                    <div class="form-group">
                        <label for="desc">Description</label>
                        <input type="text" class="form-control" name="desc"
                            placeholder="Enter Description" autocomplete="off" required>
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

@foreach ($Rooms as $data)
{{-- Modal Update --}}
<div class="modal fade" tabindex="-1" role="dialog" id="updateModal-{{ $data['id'] }}">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Update Rooms</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>

            <form action="/Rooms/update/{{ $data['id'] }}" method="POST">
                {{ csrf_field() }}
                <div class="modal-body">

                    <div class="form-group">
                        <label for="location">Location</label>
                        <input type="text" class="form-control" name="location"
                        placeholder="Enter Location" autocomplete="off" required value="{{ $data['location'] }}">
                    </div>
                    <div class="form-group">
                        <label for="desc">Description</label>
                        <input type="text" class="form-control" name="desc"
                            placeholder="Enter Description" autocomplete="off" required value="{{ $data['desc'] }}">
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
