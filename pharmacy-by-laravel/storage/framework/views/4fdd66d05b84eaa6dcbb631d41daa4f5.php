<?php $__env->startSection('content'); ?>
    
<!-- content @s -->
<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-between">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">Add Wastage Return</h3>
                            <div class="nk-block-des text-soft">
                                <p>You can add a wastage return by fill these field.</p>
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
                                        <label class="form-label" for="name">Customer</label>
                                        <input type="text" class="form-control" id="name" placeholder="Customer" required>
                                    </div>
                                </div><!-- .col -->
                                <div class="col-xxl-3 col-md-4">
                                    <div class="form-group">
                                        <label class="form-label" for="seller">Seller</label>
                                        <input type="text" class="form-control" id="seller" placeholder="Seller" required>
                                    </div>
                                </div><!-- .col -->
                                <div class="col-xxl-3 col-md-4">
                                    <div class="form-group">
                                        <label class="form-label" for="mail">Email</label>
                                        <input type="email" class="form-control" id="mail" placeholder="Email">
                                    </div>
                                </div><!-- .col -->
                                <div class="col-xxl-3 col-md-4">
                                    <div class="form-group">
                                        <label class="form-label" for="name">Product Name</label>
                                        <input type="text" class="form-control" id="name" placeholder="Name" required>
                                    </div>
                                </div><!-- .col -->
                                <div class="col-xxl-3 col-md-4">
                                    <div class="form-group">
                                        <label class="form-label" for="gname">Generic Name</label>
                                        <input type="text" class="form-control" id="gname" placeholder="Generic Name" required>
                                    </div>
                                </div><!-- .col -->
                                <div class="col-xxl-3 col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Category</label>
                                        <div class="form-control-wrap">
                                            <select class="form-select js-select2">
                                                <option value="default_option">Select</option>
                                                <option value="option_select_reason">Tablet</option>
                                                <option value="option_select_reason">Syrup</option>
                                                <option value="option_select_reason">Vitamin</option>
                                                <option value="option_select_reason">Inhealer</option>
                                            </select>
                                        </div>
                                    </div>
                                </div><!--col-->
                                <div class="col-xxl-3 col-md-4">
                                    <div class="form-group">
                                        <label class="form-label" for="amount">Amount</label>
                                        <input type="number" class="form-control" id="amount" placeholder="Amount" required>
                                    </div>
                                </div><!-- .col -->
                                <div class="col-xxl-3 col-md-4">
                                    <div class="form-group">
                                        <label class="form-label" for="invoice">Invoice No</label>
                                        <input type="number" class="form-control" id="invoice" placeholder="Invoice No" required>
                                    </div>
                                </div><!-- .col -->
                                <div class="col-xxl-3 col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Reason</label>
                                        <div class="form-control-wrap">
                                            <select class="form-select js-select2">
                                                <option value="default_option">Select</option>
                                                <option value="option_select_reason">Wrong medication</option>
                                                <option value="option_select_reason">Wrong dispensing</option>
                                                <option value="option_select_reason">Subsidence symptoms</option>
                                            </select>
                                        </div>
                                    </div>
                                </div><!--col-->
                                <div class="col-xxl-3 col-md-4">
                                    <div class="form-group">
                                        <label class="form-label" for="quantity">Quantity</label>
                                        <input type="number" class="form-control" id="quantity" placeholder="Quantity" required>
                                    </div>
                                </div><!-- .col -->
                                <div class="col-xxl-3 col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Date</label>
                                        <div class="form-control-wrap">
                                            <input type="text" class="form-control date-picker" placeholder="Date">
                                        </div>
                                    </div>
                                </div>
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
                                    <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                        <li>
                                            <a href="#" data-bs-dismiss="modal" class="btn btn-primary">Add Return</a>
                                        </li>
                                        <li>
                                            <a href="#" data-bs-dismiss="modal" class="link link-light">Cancel</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- .card-inner-group -->
                    </div><!-- .card -->
                </div><!-- .nk-block -->
            </div>
        </div>
    </div>
</div>
<!-- content @e -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\laravel\pharmacy-by-laravel\resources\views/admin-pages/returns/addwastagereturn.blade.php ENDPATH**/ ?>