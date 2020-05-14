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
                    <h1 class="m-0 text-dark">Manage Orders</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">Order</li>
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
                        <i class="fas fa-dollar-sign"></i>
                        Order
                    </div>
                    <div class="col-6 mt-2">
                        <a href="/orders/add" class="btn btn-secondary btn-xs text-white">
                            <i class="fas fa-plus"></i>
                            Add Order
                        </a>
                    </div>


                </div>
                <div class="card-body">
                    <table class="table table-striped table-bordered" id="datatables">
                        <thead>
                            <th>No</th>
                            <th>Bill No</th>
                            <th>Customer Name</th>
                            <th>Customer Phone</th>
                            <th>Date Time</th>
                            <th>Total Products</th>
                            <th>Total Amount</th>
                            <th>Paid Status</th>
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
                <h4 class="modal-title">Add Order</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>

            <form role="form" action="" method="post" class="form-horizontal">

                <div class="modal-body">

                    <div class="form-group">
                        <label for="gross_amount" class="col-sm-12 control-label">Date: 2020-05-14</label>
                    </div>
                    <div class="form-group">
                        <label for="gross_amount" class="col-sm-12 control-label">Date: 08:26 pm</label>
                    </div>

                    <div class="col-md-4 col-xs-12 pull pull-left">

                        <div class="form-group">
                            <label for="gross_amount" class="col-sm-5 control-label" style="text-align:left;">Customer
                                Name</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="customer_name" name="customer_name"
                                    placeholder="Enter Customer Name" autocomplete="off" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="gross_amount" class="col-sm-5 control-label" style="text-align:left;">Customer
                                Address</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="customer_address" name="customer_address"
                                    placeholder="Enter Customer Address" autocomplete="off">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="gross_amount" class="col-sm-5 control-label" style="text-align:left;">Customer
                                Phone</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="customer_phone" name="customer_phone"
                                    placeholder="Enter Customer Phone" autocomplete="off">
                            </div>
                        </div>
                    </div>


                    <br /> <br />
                    <table class="table table-bordered" id="product_info_table">
                        <thead>
                            <tr>
                                <th style="width:50%">Product</th>
                                <th style="width:10%">Qty</th>
                                <th style="width:10%">Rate</th>
                                <th style="width:20%">Amount</th>
                                <th style="width:10%"><button type="button" id="add_row" class="btn btn-default"><i
                                            class="fa fa-plus"></i></button></th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr id="row_1">
                                <td>
                                    <select class="form-control select_group product" data-row-id="row_1" id="product_1"
                                        name="product[]" style="width:100%;" onchange="getProductData(1)" required>
                                        <option value=""></option>
                                    </select>
                                </td>
                                <td><input type="text" name="qty[]" id="qty_1" class="form-control" required
                                        onkeyup="getTotal(1)"></td>
                                <td>
                                    <input type="text" name="rate[]" id="rate_1" class="form-control" disabled
                                        autocomplete="off">
                                    <input type="hidden" name="rate_value[]" id="rate_value_1" class="form-control"
                                        autocomplete="off">
                                </td>
                                <td>
                                    <input type="text" name="amount[]" id="amount_1" class="form-control" disabled
                                        autocomplete="off">
                                    <input type="hidden" name="amount_value[]" id="amount_value_1" class="form-control"
                                        autocomplete="off">
                                </td>
                                <td><button type="button" class="btn btn-default" onclick="removeRow('1')"><i
                                            class="fa fa-close"></i></button></td>
                            </tr>
                        </tbody>
                    </table>

                    <br /> <br />

                    <div class="col-md-6 col-xs-12 pull pull-right">

                        <div class="form-group">
                            <label for="gross_amount" class="col-sm-5 control-label">Gross Amount</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="gross_amount" name="gross_amount" disabled
                                    autocomplete="off">
                                <input type="hidden" class="form-control" id="gross_amount_value"
                                    name="gross_amount_value" autocomplete="off">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="service_charge" class="col-sm-5 control-label">S-Charge 13 %</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="service_charge" name="service_charge"
                                    disabled autocomplete="off">
                                <input type="hidden" class="form-control" id="service_charge_value"
                                    name="service_charge_value" autocomplete="off">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="vat_charge" class="col-sm-5 control-label">Vat 10 %</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="vat_charge" name="vat_charge" disabled
                                    autocomplete="off">
                                <input type="hidden" class="form-control" id="vat_charge_value" name="vat_charge_value"
                                    autocomplete="off">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="discount" class="col-sm-5 control-label">Discount</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="discount" name="discount"
                                    placeholder="Discount" onkeyup="subAmount()" autocomplete="off">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="net_amount" class="col-sm-5 control-label">Net Amount</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="net_amount" name="net_amount" disabled
                                    autocomplete="off">
                                <input type="hidden" class="form-control" id="net_amount_value" name="net_amount_value"
                                    autocomplete="off">
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
