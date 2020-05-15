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
                    <h1 class="m-0 text-dark">Manage Brand</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">Brands</li>
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
                        Brands
                    </div>
                    <div class="col-6 mt-2">
                        <a data-toggle="modal" data-target="#addModal" class="btn btn-secondary btn-xs text-white">
                            <i class="fas fa-plus"></i>
                            Add Brand
                        </a>
                    </div>


                </div>
                <div class="card-body">
                    <table class="table table-striped table-bordered" id="datatables">
                        <thead>
                            <th style="width: 5%">No</th>
                            <th style="width: 19%">Name</th>
                            <th style="width: 19%">Company</th>
                            <th style="width: 25%">Address</th>
                            <th style="width: 17%">Phone</th>
                            <th style="width: 15%">Action</th>
                        </thead>
                        <tbody>
                            <?php $no=1 ?>
                            @foreach ($Brands as $brand)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $brand['name']}}</td>
                                    <td>{{ $brand['company']}}</td>
                                    <td>{{ $brand['address']}}</td>
                                    <td>{{ $brand['phone']}}</td>
                                    <td>
                                        <a data-toggle="modal" data-target="#updateModal-{{ $brand['id'] }}" class="btn btn-default mr-2">Update</a>
                                        <a href="/Brands/hapus/{{ $brand['id'] }}" class="btn btn-danger">Delete</a>
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
                <h4 class="modal-title">Add Brand</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>

            <form action="/Brands/add" method="post">
                {{ csrf_field() }}
                <div class="modal-body">

                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name"
                            placeholder="Enter Name" autocomplete="off"" required>
                    </div>
                    <div class="form-group">
                        <label for="company">Company</label>
                        <input type="text" class="form-control" name="company"
                            placeholder="Enter Company" autocomplete="off"" required>
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" name="address"
                            placeholder="Enter Address" autocomplete="off"" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="text" class="form-control" name="phone"
                            placeholder="Enter Phone" autocomplete="off"" required>
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

@foreach ($Brands as $data)
{{-- Modal Update --}}
<div class="modal fade" tabindex="-1" role="dialog" id="updateModal-{{ $data['id'] }}">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Update Brand</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>

            <form action="/Brands/update/{{ $data['id'] }}" method="POST">
                {{ csrf_field() }}
                <div class="modal-body">

                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name"
                            placeholder="Enter Name" autocomplete="off" value="{{ $data['name'] }}">
                    </div>
                    <div class="form-group">
                        <label for="company">Company</label>
                        <input type="text" class="form-control" name="company"
                            placeholder="Enter Company" autocomplete="off" value="{{ $data['company'] }}">
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" name="address"
                            placeholder="Enter Address" autocomplete="off" value="{{ $data['address'] }}">
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="text" class="form-control" name="phone"
                            placeholder="Enter Phone" autocomplete="off" value="{{ $data['phone'] }}">
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
