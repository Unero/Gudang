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
                    <h1 class="m-0 text-dark">Manage Group</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">Group</li>
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
                        Group
                    </div>
                    <div class="col-6 mt-2">
                        <a data-toggle="modal" data-target="#add_group" class="btn btn-secondary btn-xs text-white">
                            <i class="fas fa-plus"></i>
                            Add Group
                        </a>
                    </div>


                </div>
                <div class="card-body">
                    <table class="table table-striped table-bordered" id="datatables">
                        <thead>
                            <th style="width: 10%">No</th>
                            <th style="width: 60%">Group Name</th>
                            <th style="width: 30%">Action</th>
                        </thead>
                        <tbody>
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

<div class="modal fade" id="add_group" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Group</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form role="form" action="" method="post">
                    <div class="form-group">
                        <label for="group_name">Group Name</label>
                        <input type="text" class="form-control" id="group_name" name="group_name"
                            placeholder="Enter group name">
                    </div>
                    <div class="form-group">
                        <label for="permission">Permission</label>

                        <table class="table">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Create</th>
                                    <th>Update</th>
                                    <th>View</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Users</td>
                                    <td><input type="checkbox" name="permission[]" id="permission" value="createUser"
                                            class="minimal"></td>
                                    <td><input type="checkbox" name="permission[]" id="permission" value="updateUser"
                                            class="minimal"></td>
                                    <td><input type="checkbox" name="permission[]" id="permission" value="viewUser"
                                            class="minimal"></td>
                                    <td><input type="checkbox" name="permission[]" id="permission" value="deleteUser"
                                            class="minimal"></td>
                                </tr>
                                <tr>
                                    <td>Groups</td>
                                    <td><input type="checkbox" name="permission[]" id="permission" value="createGroup"
                                            class="minimal"></td>
                                    <td><input type="checkbox" name="permission[]" id="permission" value="updateGroup"
                                            class="minimal"></td>
                                    <td><input type="checkbox" name="permission[]" id="permission" value="viewGroup"
                                            class="minimal"></td>
                                    <td><input type="checkbox" name="permission[]" id="permission" value="deleteGroup"
                                            class="minimal"></td>
                                </tr>
                                <tr>
                                    <td>Brands</td>
                                    <td><input type="checkbox" name="permission[]" id="permission" value="createBrand"
                                            class="minimal"></td>
                                    <td><input type="checkbox" name="permission[]" id="permission" value="updateBrand"
                                            class="minimal"></td>
                                    <td><input type="checkbox" name="permission[]" id="permission" value="viewBrand"
                                            class="minimal"></td>
                                    <td><input type="checkbox" name="permission[]" id="permission" value="deleteBrand"
                                            class="minimal"></td>
                                </tr>
                                <tr>
                                    <td>Category</td>
                                    <td><input type="checkbox" name="permission[]" id="permission"
                                            value="createCategory" class="minimal"></td>
                                    <td><input type="checkbox" name="permission[]" id="permission"
                                            value="updateCategory" class="minimal"></td>
                                    <td><input type="checkbox" name="permission[]" id="permission" value="viewCategory"
                                            class="minimal"></td>
                                    <td><input type="checkbox" name="permission[]" id="permission"
                                            value="deleteCategory" class="minimal"></td>
                                </tr>
                                <tr>
                                    <td>Stores</td>
                                    <td><input type="checkbox" name="permission[]" id="permission" value="createStore"
                                            class="minimal"></td>
                                    <td><input type="checkbox" name="permission[]" id="permission" value="updateStore"
                                            class="minimal"></td>
                                    <td><input type="checkbox" name="permission[]" id="permission" value="viewStore"
                                            class="minimal"></td>
                                    <td><input type="checkbox" name="permission[]" id="permission" value="deleteStore"
                                            class="minimal"></td>
                                </tr>
                                <tr>
                                    <td>Attributes</td>
                                    <td><input type="checkbox" name="permission[]" id="permission"
                                            value="createAttribute" class="minimal"></td>
                                    <td><input type="checkbox" name="permission[]" id="permission"
                                            value="updateAttribute" class="minimal"></td>
                                    <td><input type="checkbox" name="permission[]" id="permission" value="viewAttribute"
                                            class="minimal"></td>
                                    <td><input type="checkbox" name="permission[]" id="permission"
                                            value="deleteAttribute" class="minimal"></td>
                                </tr>
                                <tr>
                                    <td>Products</td>
                                    <td><input type="checkbox" name="permission[]" id="permission" value="createProduct"
                                            class="minimal"></td>
                                    <td><input type="checkbox" name="permission[]" id="permission" value="updateProduct"
                                            class="minimal"></td>
                                    <td><input type="checkbox" name="permission[]" id="permission" value="viewProduct"
                                            class="minimal"></td>
                                    <td><input type="checkbox" name="permission[]" id="permission" value="deleteProduct"
                                            class="minimal"></td>
                                </tr>
                                <tr>
                                    <td>Orders</td>
                                    <td><input type="checkbox" name="permission[]" id="permission" value="createOrder"
                                            class="minimal"></td>
                                    <td><input type="checkbox" name="permission[]" id="permission" value="updateOrder"
                                            class="minimal"></td>
                                    <td><input type="checkbox" name="permission[]" id="permission" value="viewOrder"
                                            class="minimal"></td>
                                    <td><input type="checkbox" name="permission[]" id="permission" value="deleteOrder"
                                            class="minimal"></td>
                                </tr>
                                <tr>
                                    <td>Reports</td>
                                    <td> - </td>
                                    <td> - </td>
                                    <td><input type="checkbox" name="permission[]" id="permission" value="viewReports"
                                            class="minimal"></td>
                                    <td> - </td>
                                </tr>
                                <tr>
                                    <td>Company</td>
                                    <td> - </td>
                                    <td><input type="checkbox" name="permission[]" id="permission" value="updateCompany"
                                            class="minimal"></td>
                                    <td> - </td>
                                    <td> - </td>
                                </tr>
                                <tr>
                                    <td>Profile</td>
                                    <td> - </td>
                                    <td> - </td>
                                    <td><input type="checkbox" name="permission[]" id="permission" value="viewProfile"
                                            class="minimal"></td>
                                    <td> - </td>
                                </tr>
                                <tr>
                                    <td>Setting</td>
                                    <td>-</td>
                                    <td><input type="checkbox" name="permission[]" id="permission" value="updateSetting"
                                            class="minimal"></td>
                                    <td> - </td>
                                    <td> - </td>
                                </tr>
                            </tbody>
                        </table>

                    </div>

                    <!-- /.box-body -->

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
            </form>
        </div>
    </div>
</div>
