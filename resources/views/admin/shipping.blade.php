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
                    <h1 class="m-0 text-dark">Manage Shipping</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">Shipping</li>
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
                        Shipping
                    </div>
                    <div class="col-6 mt-2">
                        <a data-toggle="modal" data-target="#addModal" class="btn btn-secondary btn-xs text-white">
                            <i class="fas fa-plus"></i>
                            Shipping
                        </a>
                    </div>


                </div>
                <div class="card-body">
                    <table class="table table-striped table-bordered text-center" id="datatables">
                        <thead>
                            <th style="width: 5%">No</th>
                            <th style="width: 15%">Item</th>
                            <th style="width: 10%">Qty</th>
                            <th style="width: 5%">Type</th>
                            <th style="width: 15%">Store</th>
                            <th style="width: 11%">User</th>
                            <th style="width: 11%">Time</th>
                            <th style="width: 11%">Action</th>
                        </thead>
                        <tbody>
                            <?php $no = 1 ?>
                            @foreach ($Shipping as $shp)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $shp['name']}}</td>
                                <td>{{ $shp['qty']}}</td>
                                <td>{{ $shp['type']}}</td>
                                <td>{{ $shp['store_name']}}</td>
                                <td>{{ $shp['username']}}</td>
                                <td>{{ $shp['time']}}</td>
                                <td>
                                    <a href="/Shipping/hapus/{{ $shp['id'] }}" class="btn btn-danger">Delete</a>
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

<!-- Insert -->
<div class="modal fade" tabindex="-1" role="dialog" id="addModal">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Shipping</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <form action="/Shipping/add" method="post">
                {{ csrf_field() }}
                <div class="modal-body">
                    <div class="form-group">
                        <label for="item_id">Item</label>
                        <select name="item_id" class="form-control select2" required>
                            @foreach ($Items as $item)
                            <option value="{{ $item['id'] }}">{{ $item['name'] }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="qty">Qty</label>
                        <input type="number" class="form-control" name="qty" placeholder="Enter Qty" autocomplete="off" required>
                    </div>
                    <div class="form-group">
                        <label for="type">Type</label>
                        <select name="type" class="form-control">
                            <option value="In">In</option>
                            <option value="out">Out</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="store_id">Store</label>
                        <select name="store_id" class="form-control select2" required>
                            @foreach ($Stores as $store)
                            <option value="{{ $store['id'] }}">{{ $store['store_name'] }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="user_id">User</label>
                        <select name="user_id" class="form-control select2" required>
                            @foreach ($Users as $user)
                            <option value="{{ $user['id'] }}">{{ $user['name'] }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="time">Time</label>
                        <input type="text" class="form-control" name="qty" value="<?= date("Y-m-d H:i:s") ?>" disabled>
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

@include('layouts.footer')
