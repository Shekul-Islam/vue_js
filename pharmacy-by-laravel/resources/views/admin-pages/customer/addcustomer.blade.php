@extends('layouts.master')

 <!-- content @s -->
@section('content')



        <!-- content @s -->
        <div class="nk-content ">
            <div class="container-fluid">
                <div class="nk-content-inner">
                    <div class="nk-content-body">
                        <div class="nk-block-head nk-block-head-sm">
                            <div class="nk-block-between">
                                <div class="nk-block-head-content">
                                    <h3 class="nk-block-title page-title">Add Customer</h3>
                                    <div class="nk-block-des text-soft">
                                        <p>You can add a customer by fil these field.</p>
                                    </div>
                                </div><!-- .nk-block-head-content -->
                            </div><!-- .nk-block-between -->
                        </div><!-- .nk-block-head -->
                        <div class="nk-block">
                            <div class="card card-bordered">
                                <div class="card-inner">
                                    <div class="row gy-4">
                                        <div class="col-xxl-3 col-md-4">
                                            <div class="form-group">
                                                <label class="form-label" for="name">Name</label>
                                                <input type="text" class="form-control" id="name" placeholder="Name" required>
                                            </div>
                                        </div><!--col-->
                                        <div class="col-xxl-3 col-md-4">
                                            <div class="form-group">
                                                <label class="form-label" for="phone-no">Phone</label>
                                                <input type="number" class="form-control" id="phone-no" placeholder="Phone no">
                                            </div>
                                        </div><!--col-->
                                        <div class="col-xxl-3 col-md-4">
                                            <div class="form-group">
                                                <label class="form-label" for="email">Email</label>
                                                <input type="email" class="form-control" id="email" placeholder="Email">
                                            </div>
                                        </div><!--col-->
                                        <div class="col-xxl-3 col-md-4">
                                            <div class="form-group">
                                                <label class="form-label">Adddress</label>
                                                <input type="text" class="form-control" id="address" placeholder="Address">
                                            </div>
                                        </div><!--col-->
                                        <div class="col-xxl-3 col-md-4">
                                            <div class="form-group">
                                                <label class="form-label" for="name">Purchased Item</label>
                                                <input type="text" class="form-control" id="item" placeholder="item" required>
                                            </div>
                                        </div><!--col-->
                                        <div class="col-xxl-3 col-md-4">
                                            <div class="form-group">
                                                <label class="form-label" for="name">Purchased Quantity</label>
                                                <input type="number" class="form-control" id="quantity" placeholder="quantity" required>
                                            </div>
                                        </div><!--col-->
                                        <div class="col-xxl-3 col-md-4">
                                            <div class="form-group">
                                                <label class="form-label" for="name">Amount</label>
                                                <input type="number" class="form-control" id="amount" placeholder="amount" required>
                                            </div>
                                        </div><!--col-->
                                        <div class="col-xxl-3 col-md-4">
                                            <div class="form-group">
                                                <label class="form-label">Status</label>
                                                <div class="form-control-wrap">
                                                    <select class="form-select js-select2">
                                                        <option value="default_option">Select</option>
                                                        <option value="option_select_status">Active</option>
                                                        <option value="option_select_status">Inactive</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div><!--col-->
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label class="form-label" for="bio">Description</label>
                                                <div class="form-control-wrap">
                                                    <div class="quill-basic">
                                                        <p>Hello World!</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!--col-->
                                        <div class="col-12">
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary">Add Customer</button>
                                            </div>
                                        </div><!--col-->
                                    </div><!--row-->
                                </div><!-- .card-inner-group -->
                            </div><!-- .card -->
                        </div><!-- .nk-block -->
                    </div>
                </div>
            </div>
        </div>
        <!-- content @e -->



@endsection
<!-- content @e -->



