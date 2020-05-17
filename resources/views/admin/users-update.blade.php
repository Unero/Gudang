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
                        <i class="fas fa-user"></i>Update User
                    </div>
                    <div class="col-6 mt-2">
                        <a href="/Users">👈 Back</a>
                    </div>
                </div>
            </div>

            <div class="container-fluid card pb-2 pt-2">
                <div class="row">
                    <div class="col-md-6">
                        <form action="/Users/u_process/{{ $data[0]['id'] }}" method="POST">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" id="username" name="username" value="{{ $data[0]['username'] }}">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" name="password" value="{{ $data[0]['password'] }}">
                            </div>
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{ $data[0]['name']}}">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" value="{{ $data[0]['email']}}">
                            </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="gender">Gender</label>
                            <div class="radio">
                                <label class="mr-2">
                                    <input type="radio" name="gender" id="male" value="Male" checked>
                                    Male
                                </label>
                                <label>
                                    <input type="radio" name="gender" id="female" value="Female" checked>
                                    Female
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="phone" class="form-control" id="phone" name="phone" value="{{ $data[0]['phone'] }}">
                        </div>
                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" class="form-control" id="address" name="address" value="{{ $data[0]['address'] }}">
                        </div>
                        <div class="form-group">
                            <label for="role_id">Role</label>
                            <select name="role_id" class="form-control">
                                <option value="{{ $data[0]['role_id'] }}">{{ $data[0]['role_name'] }}</option>
                                @foreach ($roles as $role)
                                    @if ($role['id'] != $data[0]['role_id'])
                                        <option value="{{ $role['id'] }}">{{ $role['role_name'] }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary ml-2">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
@include('layouts.footer')
