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
                    <h1 class="m-0 text-dark">Manage Item</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">Items</li>
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
                        Items
                    </div>
                    <div class="col-6 mt-2">
                        <a data-toggle="modal" data-target="#addModal" class="btn btn-secondary btn-xs text-white">
                            <i class="fas fa-plus"></i>
                            Add Item
                        </a>
                    </div>


                </div>
                <div class="card-body">
                    <table class="table table-striped table-bordered" id="datatables">
                        <thead>
                            <th style="width: 5%">No</th>
                            <th style="width: 15%">Name</th>
                            <th style="width: 10%">Price</th>
                            <th style="width: 5%">Qty</th>
                            <th style="width: 15%">Description</th>
                            <th style="width: 11%">Room</th>
                            <th style="width: 11%">Brand</th>
                            <th style="width: 11%">Category</th>
                            <th style="width: 15%">Action</th>
                        </thead>
                        <tbody>
                            <?php $no=1 ?>
                            @foreach ($Items as $item)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $item['name']}}</td>
                                    <td>{{ $item['price']}}</td>
                                    <td>{{ $item['qty']}}</td>
                                    <td>{{ $item['description']}}</td>
                                    <td>{{ $item['location']}}</td>
                                    <td>{{ $item['brand_name']}}</td>
                                    <td>{{ $item['category_name']}}</td>
                                    <td>
                                        <a data-toggle="modal" data-target="#updateModal-{{ $item['id'] }}" class="btn btn-default mr-2">Update</a>
                                        <a href="/Items/hapus/{{ $item['id'] }}" class="btn btn-danger">Delete</a>
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

<div class="modal fade" tabindex="-1" role="dialog" id="addModal">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Item</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>

            <form action="/Items/add" method="post">
                {{ csrf_field() }}
                <div class="modal-body">
                    <div class="row">

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" name="name"
                                    placeholder="Enter Name" autocomplete="off" required>
                            </div>
                            <div class="form-group">
                                <label for="price">Price</label>
                                <input type="text" class="form-control" name="price"
                                    placeholder="Enter Price" autocomplete="off" required>
                            </div>
                            <div class="form-group">
                                <label for="qty">Qty</label>
                                <input type="text" class="form-control" name="qty"
                                    placeholder="Enter Qty" autocomplete="off" required>
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <input type="text" class="form-control" name="description"
                                    placeholder="Enter Description" autocomplete="off" required>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="room_id">Room</label>
                                <select name="room_id" class="form-control" required>
                                    @foreach ($Rooms as $room)
                                        <option value="{{ $room['id'] }}">{{ $room['location'] }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="brand_id">Brand</label>
                                <select name="brand_id" class="form-control" required>
                                    @foreach ($Brands as $brand)
                                        <option value="{{ $brand['id'] }}">{{ $brand['brand_name'] }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="category_id">Category</label>
                                <select name="category_id" class="form-control" required>
                                    @foreach ($Category as $category)
                                        <option value="{{ $category['id'] }}">{{ $category['category_name'] }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
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

@foreach ($Items as $data)
{{-- Modal Update --}}
<div class="modal fade" tabindex="-1" role="dialog" id="updateModal-{{ $data['id'] }}">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Update Item</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>

            <form action="/Items/update/{{ $data['id'] }}" method="POST">
                {{ csrf_field() }}
                <div class="modal-body">
                    <div class="row">

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" name="name"
                                    placeholder="Enter Name" autocomplete="off" value="{{ $data['name'] }}">
                            </div>
                            <div class="form-group">
                                <label for="price">Price</label>
                                <input type="text" class="form-control" name="price"
                                    placeholder="Enter Price" autocomplete="off" value="{{ $data['price'] }}">
                            </div>
                            <div class="form-group">
                                <label for="qty">Qty</label>
                                <input type="text" class="form-control" name="qty"
                                    placeholder="Enter Qty" autocomplete="off" value="{{ $data['qty'] }}">
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <input type="text" class="form-control" name="description"
                                    placeholder="Enter Description" autocomplete="off" value="{{ $data['description'] }}">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="room_id">Room</label>
                                <select name="room_id" class="form-control">
                                    <option value="{{ $data['room_id'] }}">{{ $data['room_id'] }}</option>
                                    @foreach ($Rooms as $room)
                                        <option value="{{ $room['id'] }}">{{ $room['location'] }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="brand_id">Brand</label>
                                <select name="brand_id" class="form-control">
                                    <option value="{{ $data['brand_id'] }}">{{ $data['brand_id'] }}</option>
                                    @foreach ($Brands as $brand)
                                        <option value="{{ $brand['id'] }}">{{ $brand['brand_name'] }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="category_id">Category</label>
                                <select name="category_id" class="form-control">
                                    <option value="{{ $data['category_id'] }}">{{ $data['category_id'] }}</option>
                                    @foreach ($Category as $category)
                                        <option value="{{ $category['id'] }}">{{ $category['category_name'] }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
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

@include('layouts.footer')
