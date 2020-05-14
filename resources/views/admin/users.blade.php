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
                    <h1 class="m-0 text-dark">Manage User</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">User</li>
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
                        <i class="fas fa-user"></i>
                        User
                    </div>
                    <div class="col-6 mt-2">
                        <a data-toggle="modal" data-target="#add_user" class="btn btn-secondary btn-xs text-white">
                            <i class="fas fa-plus"></i>
                            Add User
                        </a>
                    </div>


                </div>
                <div class="card-body">
                    <table class="table table-striped table-bordered" id="datatables">
                        <thead>
                            <th>No</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Group</th>
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
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</div>
@include('layouts.footer')

<div class="modal fade" id="add_user" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" enctype="multipart/form-data" method="POST">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="groups">Groups</label>
                                <select class="form-control" id="groups" name="groups">
                                    <option value="">Select Groups</option>
                                    <option value="4">Owners</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" id="username" name="username"
                                    placeholder="Username" autocomplete="off">
                            </div>

                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email"
                                    autocomplete="off">
                            </div>

                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="text" class="form-control" id="password" name="password"
                                    placeholder="Password" autocomplete="off">
                            </div>

                            <div class="form-group">
                                <label for="cpassword">Confirm password</label>
                                <input type="password" class="form-control" id="cpassword" name="cpassword"
                                    placeholder="Confirm Password" autocomplete="off">
                            </div>
                        </div>
                        <div class="col-md-6">

                            <div class="form-group">
                                <label for="fname">First name</label>
                                <input type="text" class="form-control" id="fname" name="fname" placeholder="First name"
                                    autocomplete="off">
                            </div>

                            <div class="form-group">
                                <label for="lname">Last name</label>
                                <input type="text" class="form-control" id="lname" name="lname" placeholder="Last name"
                                    autocomplete="off">
                            </div>

                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone"
                                    autocomplete="off">
                            </div>

                            <div class="form-group">
                                <label for="gender">Gender</label>
                                <div class="radio">
                                    <label class="mr-2">
                                        <input type="radio" name="gender" id="male" value="1">
                                        Male
                                    </label>
                                    <label>
                                        <input type="radio" name="gender" id="female" value="2">
                                        Female
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
            </form>
        </div>
    </div>
</div>
