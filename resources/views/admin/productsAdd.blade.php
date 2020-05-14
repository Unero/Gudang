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
                        Add Product
                    </div>
                    <div class="col-6 mt-2">
                        <a href="/products" class="btn btn-warning btn-xs">
                            <i class="fas fa-arrow-left"></i>
                            Back
                        </a>
                    </div>


                </div>
                <div class="card-body">
                    <form role="form" action="" method="post" enctype="multipart/form-data">
                        <div class="box-body">


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
                                <input type="number" class="form-control" id="price" name="price"
                                    placeholder="Enter price" autocomplete="off" />
                            </div>

                            <div class="form-group">
                                <label for="qty">Qty</label>
                                <input type="number" class="form-control" id="qty" name="qty" placeholder="Enter Qty"
                                    autocomplete="off" />
                            </div>

                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea type="text" class="form-control textarea" id="description" name="description"
                                    placeholder="Enter 
                            description" autocomplete="off">
                            </textarea>
                            </div>


                            <div class="form-group">
                                <label for="brands">Brands</label>
                                <select class="form-control select2" multiple="multiple" data-placeholder="Select a Brand" id="brands" name="brands[]"
                                    multiple="multiple">
                                    <option value="4">ABC Inc.</option>
                                    <option value="4">2Kelinci</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="category">Category</label>
                                <select class="form-control select2" id="category" name="category[]"
                                    multiple="multiple">
                                    <option value="4">Microscope</option>
                                    <option value="4">Food</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="store">Store</label>
                                <select class="form-control select2" id="store" name="store">
                                    <option value="">Name Store</option>
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
                        <!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Save Changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
@include('layouts.footer')

<script type="text/javascript">
    $(document).ready(function() {
      $("#description").wysihtml5();
  
      $("#mainProductNav").addClass('active');
      $("#addProductNav").addClass('active');
      
      var btnCust = '<button type="button" class="btn btn-secondary" title="Add picture tags" ' + 
          'onclick="alert(\'Call your custom code here.\')">' +
          '<i class="glyphicon glyphicon-tag"></i>' +
          '</button>'; 
      $("#product_image").fileinput({
          overwriteInitial: true,
          maxFileSize: 1500,
          showClose: false,
          showCaption: false,
          browseLabel: '',
          removeLabel: '',
          browseIcon: '<i class="glyphicon glyphicon-folder-open"></i>',
          removeIcon: '<i class="glyphicon glyphicon-remove"></i>',
          removeTitle: 'Cancel or reset changes',
          elErrorContainer: '#kv-avatar-errors-1',
          msgErrorClass: 'alert alert-block alert-danger',
          // defaultPreviewContent: '<img src="/uploads/default_avatar_male.jpg" alt="Your Avatar">',
          layoutTemplates: {main2: '{preview} ' +  btnCust + ' {remove} {browse}'},
          allowedFileExtensions: ["jpg", "png", "gif"]
      });
  
    });
  </script>
