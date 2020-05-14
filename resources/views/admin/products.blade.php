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
                    <h1 class="m-0 text-dark">Manage Products</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">Product</li>
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
                        <i class="fas fa-cube"></i>
                        Product
                    </div>
                    <div class="col-6 mt-2">
                        <a href="/products/add" class="btn btn-secondary btn-xs text-white">
                            <i class="fas fa-plus"></i>
                            Add Product
                        </a>
                    </div>


                </div>
                <div class="card-body">
                    <table class="table table-striped table-bordered" id="datatables">
                        <thead>
                            <th>No</th>
                            <th>Image</th>
                            <th>SKU</th>
                            <th>Product Name</th>
                            <th>Price</th>
                            <th>Qty</th>
                            <th>Store</th>
                            <th>Availability</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</div>
@include('layouts.footer')

{{-- Add Modal --}}
<div class="modal fade" tabindex="-1" role="dialog" id="addModal">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Product</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>

            <form role="form" action="" method="post" enctype="multipart/form-data">

                <div class="modal-body">

                    <div class="form-group">

                        <label for="product_image">Image</label>
                        <div class="kv-avatar">
                            <div class="file-loading">
                                <input id="product_image" name="product_image" type="file">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="product_name">Product name</label>
                        <input type="text" class="form-control" id="product_name" name="product_name"
                            placeholder="Enter product name" autocomplete="off" />
                    </div>

                    <div class="form-group">
                        <label for="sku">SKU</label>
                        <input type="text" class="form-control" id="sku" name="sku" placeholder="Enter sku"
                            autocomplete="off" />
                    </div>

                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="text" class="form-control" id="price" name="price" placeholder="Enter price"
                            autocomplete="off" />
                    </div>

                    <div class="form-group">
                        <label for="qty">Qty</label>
                        <input type="text" class="form-control" id="qty" name="qty" placeholder="Enter Qty"
                            autocomplete="off" />
                    </div>

                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea type="text" class="form-control" id="description" name="description" placeholder="Enter 
                        description" autocomplete="off">
                        </textarea>
                    </div>


                    <div class="form-group">
                        <label for="brands">Brands</label>
                        <select class="form-control select_group" id="brands" name="brands[]" multiple="multiple">
                            <option value="4">ABC Inc.</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="category">Category</label>
                        <select class="form-control select_group" id="category" name="category[]" multiple="multiple">
                            <option value="4">Microscope</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="store">Store</label>
                        <select class="form-control select_group" id="store" name="store">
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="store">Availability</label>
                        <select class="form-control" id="availability" name="availability">
                            <option value="1">Yes</option>
                            <option value="2">No</option>
                        </select>
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
