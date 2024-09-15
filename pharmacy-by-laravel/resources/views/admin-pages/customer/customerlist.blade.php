@extends('layouts.master')

@section('content')

<!-- content @s -->
<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-between">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">Customer Lists</h3>
                            <div class="nk-block-des text-soft">
                                <p>You have total 17890 Customers in Pharmacy.</p>
                            </div>
                        </div><!-- .nk-block-head-content -->
                        <div class="nk-block-head-content">
                            <a href="html/pharmacy/add-customer.html" class="btn btn-icon btn-primary d-md-none"><em class="icon ni ni-plus"></em></a>
                            <a href="html/pharmacy/add-customer.html" class="btn btn-primary d-none d-md-inline-flex"><em class="icon ni ni-plus"></em><span>Add customer</span></a>
                        </div><!-- .nk-block-head-content -->
                    </div><!-- .nk-block-between -->
                </div><!-- .nk-block-head -->
                <div class="nk-block">
                    <div class="card card-bordered card-stretch">
                        <div class="card-inner-group">
                            <div class="card-inner position-relative card-tools-toggle">
                                <div class="card-title-group">
                                    <div class="card-tools">
                                        <div class="form-inline flex-nowrap gx-3">
                                            <div class="form-wrap w-150px">
                                                <select class="form-select form-select-sm js-select2" data-search="off" data-placeholder="Bulk Action">
                                                    <option value="">Bulk Action</option>
                                                    <option value="email">Send Email</option>
                                                    <option value="delete">Delete</option>
                                                </select>
                                            </div>
                                            <div class="btn-wrap">
                                                <span class="d-none d-md-block"><button class="btn btn-dim btn-outline-light disabled">Apply</button></span>
                                                <span class="d-md-none"><button class="btn btn-dim btn-outline-light btn-icon disabled"><em class="icon ni ni-arrow-right"></em></button></span>
                                            </div>
                                        </div><!-- .form-inline -->
                                    </div><!-- .card-tools -->
                                    <div class="card-tools me-n1">
                                        <ul class="btn-toolbar gx-1">
                                            <li>
                                                <a href="#" class="btn btn-icon search-toggle toggle-search" data-target="search"><em class="icon ni ni-search"></em></a>
                                            </li><!-- li -->
                                            <li class="btn-toolbar-sep"></li><!-- li -->
                                            <li>
                                                <div class="toggle-wrap">
                                                    <a href="#" class="btn btn-icon btn-trigger toggle" data-target="cardTools"><em class="icon ni ni-menu-right"></em></a>
                                                    <div class="toggle-content" data-content="cardTools">
                                                        <ul class="btn-toolbar gx-1">
                                                            <li class="toggle-close">
                                                                <a href="#" class="btn btn-icon btn-trigger toggle" data-target="cardTools"><em class="icon ni ni-arrow-left"></em></a>
                                                            </li><!-- li -->
                                                            <li>
                                                                <div class="dropdown">
                                                                    <a href="#" class="btn btn-trigger btn-icon dropdown-toggle" data-bs-toggle="dropdown">
                                                                        <div class="dot dot-primary"></div>
                                                                        <em class="icon ni ni-filter-alt"></em>
                                                                    </a>
                                                                    <div class="filter-wg dropdown-menu dropdown-menu-xl dropdown-menu-end">
                                                                        <div class="dropdown-head">
                                                                            <span class="sub-title dropdown-title">Filter Customers</span>
                                                                            <div class="dropdown">
                                                                                <a href="#" class="btn btn-sm btn-icon">
                                                                                    <em class="icon ni ni-more-h"></em>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="dropdown-body dropdown-body-rg">
                                                                            <div class="row gx-6 gy-3">
                                                                                <div class="col-6">
                                                                                    <div class="custom-control custom-control-sm custom-checkbox">
                                                                                        <input type="checkbox" class="custom-control-input" id="hasBalance">
                                                                                        <label class="custom-control-label" for="hasBalance"> Have Balance</label>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-6">
                                                                                    <div class="custom-control custom-control-sm custom-checkbox">
                                                                                        <input type="checkbox" class="custom-control-input" id="hasKYC">
                                                                                        <label class="custom-control-label" for="hasKYC">Email Verified</label>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-6">
                                                                                    <div class="custom-control custom-control-sm custom-checkbox">
                                                                                        <input type="checkbox" class="custom-control-input" id="active">
                                                                                        <label class="custom-control-label" for="active">Active</label>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-6">
                                                                                    <div class="custom-control custom-control-sm custom-checkbox">
                                                                                        <input type="checkbox" class="custom-control-input" id="inactive">
                                                                                        <label class="custom-control-label" for="inactive">Inactive</label>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-12">
                                                                                    <div class="form-group">
                                                                                        <button type="button" class="btn btn-secondary">Filter</button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="dropdown-foot between">
                                                                            <a class="clickable" href="#">Reset Filter</a>
                                                                            <a href="#">Save Filter</a>
                                                                        </div>
                                                                    </div><!-- .filter-wg -->
                                                                </div><!-- .dropdown -->
                                                            </li><!-- li -->
                                                            <li>
                                                                <div class="dropdown">
                                                                    <a href="#" class="btn btn-trigger btn-icon dropdown-toggle" data-bs-toggle="dropdown">
                                                                        <em class="icon ni ni-setting"></em>
                                                                    </a>
                                                                    <div class="dropdown-menu dropdown-menu-xs dropdown-menu-end">
                                                                        <ul class="link-check">
                                                                            <li><span>Show</span></li>
                                                                            <li class="active"><a href="#">10</a></li>
                                                                            <li><a href="#">20</a></li>
                                                                            <li><a href="#">50</a></li>
                                                                        </ul>
                                                                        <ul class="link-check">
                                                                            <li><span>Order</span></li>
                                                                            <li class="active"><a href="#">DESC</a></li>
                                                                            <li><a href="#">ASC</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div><!-- .dropdown -->
                                                            </li><!-- li -->
                                                        </ul><!-- .btn-toolbar -->
                                                    </div><!-- .toggle-content -->
                                                </div><!-- .toggle-wrap -->
                                            </li><!-- li -->
                                        </ul><!-- .btn-toolbar -->
                                    </div><!-- .card-tools -->
                                </div><!-- .card-title-group -->
                                <div class="card-search search-wrap" data-search="search">
                                    <div class="card-body">
                                        <div class="search-content">
                                            <a href="#" class="search-back btn btn-icon toggle-search" data-target="search"><em class="icon ni ni-arrow-left"></em></a>
                                            <input type="text" class="form-control border-transparent form-focus-none" placeholder="Search by name or customer id">
                                            <button class="search-submit btn btn-icon"><em class="icon ni ni-search"></em></button>
                                        </div>
                                    </div>
                                </div><!-- .card-search -->
                            </div><!-- .card-inner -->
                            <div class="card-inner p-0">
                                <div class="nk-tb-list nk-tb-ulist">
                                    <div class="nk-tb-item nk-tb-head">
                                        <div class="nk-tb-col nk-tb-col-check">
                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                <input type="checkbox" class="custom-control-input" id="uid">
                                                <label class="custom-control-label" for="uid"></label>
                                            </div>
                                        </div>
                                        <div class="nk-tb-col"><span class="sub-text">Customer</span></div>
                                        <div class="nk-tb-col tb-col-md"><span class="sub-text">ID</span></div>
                                        <div class="nk-tb-col tb-col-md"><span class="sub-text">Phone</span></div>
                                        <div class="nk-tb-col tb-col-xxl"><span class="sub-text">Address</span></div>
                                        <div class="nk-tb-col tb-col-lg"><span class="sub-text">Purchase Details</span></div>
                                        <div class="nk-tb-col tb-col-sm"><span class="sub-text">Amount</span></div>
                                        <div class="nk-tb-col tb-col-md"><span class="sub-text">Status</span></div>
                                        <div class="nk-tb-col nk-tb-col-tools">
                                            <ul class="nk-tb-actions gx-1 my-n1">
                                                <li>
                                                    <div class="drodown">
                                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger me-n1" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <ul class="link-list-opt no-bdr">
                                                                <li><a href="#"><em class="icon ni ni-mail"></em><span>Send Email to All</span></a></li>
                                                                <li><a href="#"><em class="icon ni ni-edit"></em><span>Edit Selected</span></a></li>
                                                                <li><a data-bs-toggle="modal" href="#modalDelete"><em class="icon ni ni-trash"></em><span>Remove Seleted</span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div><!-- .nk-tb-item -->
                                    <div class="nk-tb-item">
                                        <div class="nk-tb-col nk-tb-col-check">
                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                <input type="checkbox" class="custom-control-input" id="uid1">
                                                <label class="custom-control-label" for="uid1"></label>
                                            </div>
                                        </div>
                                        <div class="nk-tb-col">
                                            <a href="#">
                                                <div class="user-card">
                                                    <div class="user-avatar bg-primary-dim">
                                                        <span>AB</span>
                                                    </div>
                                                    <div class="user-info">
                                                        <span class="tb-lead">Abu Bin Ishtiyak <span class="dot dot-warning d-md-none ms-1"></span></span>
                                                        <span>info@softnio.com</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="nk-tb-col tb-col-md">
                                            <a href="#">
                                                <span class="fw-medium">#P6985</span>
                                            </a>
                                        </div>
                                        <div class="nk-tb-col tb-col-md">
                                            <span>+811 847-4958</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-xxl">
                                            <span>Large cottage</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-lg">
                                            <div>
                                                <span>Item: Omidon10mg</span>
                                            </div>
                                            <div>
                                                <span>Quantity: 10pcs</span>
                                            </div>
                                        </div>
                                        <div class="nk-tb-col tb-col-sm">
                                            <span class="tb-amount">78.55 <span class="currency">USD</span></span>
                                        </div>
                                        <div class="nk-tb-col tb-col-md">
                                            <span class="tb-status text-warning">Inactive</span>
                                        </div>
                                        <div class="nk-tb-col nk-tb-col-tools">
                                            <ul class="nk-tb-actions gx-1">
                                                <li class="nk-tb-action-hidden">
                                                    <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Send Email">
                                                        <em class="icon ni ni-mail-fill"></em>
                                                    </a>
                                                </li>
                                                <li>
                                                    <div class="drodown">
                                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <ul class="link-list-opt no-bdr">
                                                                <li><a href="#"><em class="icon ni ni-edit"></em><span>Edit</span></a></li>
                                                                <li><a data-bs-toggle="modal" href="#modalDelete"><em class="icon ni ni-trash"></em><span>Remove</span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div><!-- .nk-tb-item -->
                                    <div class="nk-tb-item">
                                        <div class="nk-tb-col nk-tb-col-check">
                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                <input type="checkbox" class="custom-control-input" id="uid2">
                                                <label class="custom-control-label" for="uid2"></label>
                                            </div>
                                        </div>
                                        <div class="nk-tb-col">
                                            <a href="#">
                                                <div class="user-card">
                                                    <div class="user-avatar bg-orange">
                                                        <span>AL</span>
                                                    </div>
                                                    <div class="user-info">
                                                        <span class="tb-lead">Ashley Lawson <span class="dot dot-success d-md-none ms-1"></span></span>
                                                        <span>ashley@softnio.com</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="nk-tb-col tb-col-md">
                                            <a href="#">
                                                <span class="fw-medium">#P6986</span>
                                            </a>
                                        </div>
                                        <div class="nk-tb-col tb-col-md">
                                            <span>+124 394-1787</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-xxl">
                                            <span>Near Roberts Lake</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-lg">
                                            <div>
                                                <span>Item: Zimax50mg</span>
                                            </div>
                                            <div>
                                                <span>Quantity: 12pcs</span>
                                            </div>
                                        </div>
                                        <div class="nk-tb-col tb-col-sm">
                                            <span class="tb-amount">90.20 <span class="currency">USD</span></span>
                                        </div>
                                        <div class="nk-tb-col tb-col-md">
                                            <span class="tb-status text-success">Active</span>
                                        </div>
                                        <div class="nk-tb-col nk-tb-col-tools">
                                            <ul class="nk-tb-actions gx-1">
                                                <li class="nk-tb-action-hidden">
                                                    <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Send Email">
                                                        <em class="icon ni ni-mail-fill"></em>
                                                    </a>
                                                </li>
                                                <li>
                                                    <div class="drodown">
                                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <ul class="link-list-opt no-bdr">
                                                                <li><a href="#"><em class="icon ni ni-edit"></em><span>Edit</span></a></li>
                                                                <li><a data-bs-toggle="modal" href="#modalDelete"><em class="icon ni ni-trash"></em><span>Remove</span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div><!-- .nk-tb-item -->
                                    <div class="nk-tb-item">
                                        <div class="nk-tb-col nk-tb-col-check">
                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                <input type="checkbox" class="custom-control-input" id="uid3">
                                                <label class="custom-control-label" for="uid3"></label>
                                            </div>
                                        </div>
                                        <div class="nk-tb-col">
                                            <a href="#">
                                                <div class="user-card">
                                                    <div class="user-avatar bg-info">
                                                        <span>JL</span>
                                                    </div>
                                                    <div class="user-info">
                                                        <span class="tb-lead">Joe Larson <span class="dot dot-success d-md-none ms-1"></span></span>
                                                        <span>larson@example.com</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="nk-tb-col tb-col-md">
                                            <a href="#">
                                                <span class="fw-medium">#P6987</span>
                                            </a>
                                        </div>
                                        <div class="nk-tb-col tb-col-md">
                                            <span>+168 603-2320</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-xxl">
                                            <span>Uttara,sector 10</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-lg">
                                            <div>
                                                <span>Item: Furosemide</span>
                                            </div>
                                            <div>
                                                <span>Quantity: 1bottle</span>
                                            </div>
                                        </div>
                                        <div class="nk-tb-col tb-col-sm">
                                            <span class="tb-amount">43.98 <span class="currency">USD</span></span>
                                        </div>
                                        <div class="nk-tb-col tb-col-md">
                                            <span class="tb-status text-success">Active</span>
                                        </div>
                                        <div class="nk-tb-col nk-tb-col-tools">
                                            <ul class="nk-tb-actions gx-1">
                                                <li class="nk-tb-action-hidden">
                                                    <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Send Email">
                                                        <em class="icon ni ni-mail-fill"></em>
                                                    </a>
                                                </li>
                                                <li>
                                                    <div class="drodown">
                                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <ul class="link-list-opt no-bdr">
                                                                <li><a href="#"><em class="icon ni ni-edit"></em><span>Edit</span></a></li>
                                                                <li><a data-bs-toggle="modal" href="#modalDelete"><em class="icon ni ni-trash"></em><span>Remove</span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div><!-- .nk-tb-item -->
                                    <div class="nk-tb-item">
                                        <div class="nk-tb-col nk-tb-col-check">
                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                <input type="checkbox" class="custom-control-input" id="uid4">
                                                <label class="custom-control-label" for="uid4"></label>
                                            </div>
                                        </div>
                                        <div class="nk-tb-col">
                                            <a href="#">
                                                <div class="user-card">
                                                    <div class="user-avatar bg-danger">
                                                        <span>JM</span>
                                                    </div>
                                                    <div class="user-info">
                                                        <span class="tb-lead">Jane Montgomery <span class="dot dot-success d-md-none ms-1"></span></span>
                                                        <span>jane84@example.com</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="nk-tb-col tb-col-md">
                                            <a href="#">
                                                <span class="fw-medium">#P6988</span>
                                            </a>
                                        </div>
                                        <div class="nk-tb-col tb-col-md">
                                            <span>+439 271-5360</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-xxl">
                                            <span>Dhanmondi 9/A</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-lg">
                                            <div>
                                                <span>Item: Isoniazid Syrup</span>
                                            </div>
                                            <div>
                                                <span>Quantity: 2bottle</span>
                                            </div>
                                        </div>
                                        <div class="nk-tb-col tb-col-sm">
                                            <span class="tb-amount">80.26 <span class="currency">USD</span></span>
                                        </div>
                                        <div class="nk-tb-col tb-col-md">
                                            <span class="tb-status text-success">Active</span>
                                        </div>
                                        <div class="nk-tb-col nk-tb-col-tools">
                                            <ul class="nk-tb-actions gx-1">
                                                <li class="nk-tb-action-hidden">
                                                    <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Send Email">
                                                        <em class="icon ni ni-mail-fill"></em>
                                                    </a>
                                                </li>
                                                <li>
                                                    <div class="drodown">
                                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <ul class="link-list-opt no-bdr">
                                                                <li><a href="#"><em class="icon ni ni-edit"></em><span>Edit</span></a></li>
                                                                <li><a data-bs-toggle="modal" href="#modalDelete"><em class="icon ni ni-trash"></em><span>Remove</span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div><!-- .nk-tb-item -->
                                    <div class="nk-tb-item">
                                        <div class="nk-tb-col nk-tb-col-check">
                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                <input type="checkbox" class="custom-control-input" id="uid5">
                                                <label class="custom-control-label" for="uid5"></label>
                                            </div>
                                        </div>
                                        <div class="nk-tb-col">
                                            <a href="#">
                                                <div class="user-card">
                                                    <div class="user-avatar bg-indigo-dim">
                                                        <span>FB</span>
                                                    </div>
                                                    <div class="user-info">
                                                        <span class="tb-lead">Frances Burns <span class="dot dot-warning d-md-none ms-1"></span></span>
                                                        <span>frances@example.com</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="nk-tb-col tb-col-md">
                                            <a href="#">
                                                <span class="fw-medium">#P6989</span>
                                            </a>
                                        </div>
                                        <div class="nk-tb-col tb-col-md">
                                            <span>+639 130-3150</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-xxl">
                                            <span>HNo 76</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-lg">
                                            <div>
                                                <span>Item: Pantonix20mg</span>
                                            </div>
                                            <div>
                                                <span>Quantity: 8pcs</span>
                                            </div>
                                        </div>
                                        <div class="nk-tb-col tb-col-sm">
                                            <span class="tb-amount">120.20 <span class="currency">USD</span></span>
                                        </div>
                                        <div class="nk-tb-col tb-col-md">
                                            <span class="tb-status text-warning">Inactive</span>
                                        </div>
                                        <div class="nk-tb-col nk-tb-col-tools">
                                            <ul class="nk-tb-actions gx-1">
                                                <li class="nk-tb-action-hidden">
                                                    <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Send Email">
                                                        <em class="icon ni ni-mail-fill"></em>
                                                    </a>
                                                </li>
                                                <li>
                                                    <div class="drodown">
                                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <ul class="link-list-opt no-bdr">
                                                                <li><a href="#"><em class="icon ni ni-edit"></em><span>Edit</span></a></li>
                                                                <li><a data-bs-toggle="modal" href="#modalDelete"><em class="icon ni ni-trash"></em><span>Remove</span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div><!-- .nk-tb-item -->
                                    <div class="nk-tb-item">
                                        <div class="nk-tb-col nk-tb-col-check">
                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                <input type="checkbox" class="custom-control-input" id="uid6">
                                                <label class="custom-control-label" for="uid6"></label>
                                            </div>
                                        </div>
                                        <div class="nk-tb-col">
                                            <a href="#">
                                                <div class="user-card">
                                                    <div class="user-avatar bg-pink">
                                                        <span>AB</span>
                                                    </div>
                                                    <div class="user-info">
                                                        <span class="tb-lead">Alan Butler <span class="dot dot-success d-md-none ms-1"></span></span>
                                                        <span>butler@example.com</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="nk-tb-col tb-col-md">
                                            <a href="#">
                                                <span class="fw-medium">#P6990</span>
                                            </a>
                                        </div>
                                        <div class="nk-tb-col tb-col-md">
                                            <span>+963 309-1706</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-xxl">
                                            <span>Dhanmondi 15,Staff Quater</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-lg">
                                            <div>
                                                <span>Item: Disopan0.mg</span>
                                            </div>
                                            <div>
                                                <span>Quantity: 1boc</span>
                                            </div>
                                        </div>
                                        <div class="nk-tb-col tb-col-sm">
                                            <span class="tb-amount">45.00 <span class="currency">USD</span></span>
                                        </div>
                                        <div class="nk-tb-col tb-col-md">
                                            <span class="tb-status text-success">Active</span>
                                        </div>
                                        <div class="nk-tb-col nk-tb-col-tools">
                                            <ul class="nk-tb-actions gx-1">
                                                <li class="nk-tb-action-hidden">
                                                    <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Send Email">
                                                        <em class="icon ni ni-mail-fill"></em>
                                                    </a>
                                                </li>
                                                <li>
                                                    <div class="drodown">
                                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <ul class="link-list-opt no-bdr">
                                                                <li><a href="#"><em class="icon ni ni-edit"></em><span>Edit</span></a></li>
                                                                <li><a data-bs-toggle="modal" href="#modalDelete"><em class="icon ni ni-trash"></em><span>Remove</span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div><!-- .nk-tb-item -->
                                    <div class="nk-tb-item">
                                        <div class="nk-tb-col nk-tb-col-check">
                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                <input type="checkbox" class="custom-control-input" id="uid7">
                                                <label class="custom-control-label" for="uid7"></label>
                                            </div>
                                        </div>
                                        <div class="nk-tb-col">
                                            <a href="#">
                                                <div class="user-card">
                                                    <div class="user-avatar bg-warning-dim">
                                                        <span>VL</span>
                                                    </div>
                                                    <div class="user-info">
                                                        <span class="tb-lead">Victoria Lynch <span class="dot dot-warning d-md-none ms-1"></span></span>
                                                        <span>victoria@example.com</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="nk-tb-col tb-col-md">
                                            <a href="#">
                                                <span class="fw-medium">#P6991</span>
                                            </a>
                                        </div>
                                        <div class="nk-tb-col tb-col-md">
                                            <span>+811 985-4846</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-xxl">
                                            <span>Near at spiral School</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-lg">
                                            <div>
                                                <span>Item: Solas10mg</span>
                                            </div>
                                            <div>
                                                <span>Quantity: 5pcs</span>
                                            </div>
                                        </div>
                                        <div class="nk-tb-col tb-col-sm">
                                            <span class="tb-amount">250.00 <span class="currency">USD</span></span>
                                        </div>
                                        <div class="nk-tb-col tb-col-md">
                                            <span class="tb-status text-warning">Inactive</span>
                                        </div>
                                        <div class="nk-tb-col nk-tb-col-tools">
                                            <ul class="nk-tb-actions gx-1">
                                                <li class="nk-tb-action-hidden">
                                                    <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Send Email">
                                                        <em class="icon ni ni-mail-fill"></em>
                                                    </a>
                                                </li>
                                                <li>
                                                    <div class="drodown">
                                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <ul class="link-list-opt no-bdr">
                                                                <li><a href="#"><em class="icon ni ni-edit"></em><span>Edit</span></a></li>
                                                                <li><a data-bs-toggle="modal" href="#modalDelete"><em class="icon ni ni-trash"></em><span>Remove</span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div><!-- .nk-tb-item -->
                                    <div class="nk-tb-item">
                                        <div class="nk-tb-col nk-tb-col-check">
                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                <input type="checkbox" class="custom-control-input" id="uid8">
                                                <label class="custom-control-label" for="uid8"></label>
                                            </div>
                                        </div>
                                        <div class="nk-tb-col">
                                            <a href="#">
                                                <div class="user-card">
                                                    <div class="user-avatar bg-success">
                                                        <span>PN</span>
                                                    </div>
                                                    <div class="user-info">
                                                        <span class="tb-lead">Patrick Newman<span class="dot dot-success d-md-none ms-1"></span></span>
                                                        <span>patrick@example.com</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="nk-tb-col tb-col-md">
                                            <a href="#">
                                                <span class="fw-medium">#P6992</span>
                                            </a>
                                        </div>
                                        <div class="nk-tb-col tb-col-md">
                                            <span>+942 238-4474</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-xxl">
                                            <span>Near at Gulshan Lake</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-lg">
                                            <div>
                                                <span>Item: Indomet25mg</span>
                                            </div>
                                            <div>
                                                <span>Quantity: 3box</span>
                                            </div>
                                        </div>
                                        <div class="nk-tb-col tb-col-sm">
                                            <span class="tb-amount">60.35 <span class="currency">USD</span></span>
                                        </div>
                                        <div class="nk-tb-col tb-col-md">
                                            <span class="tb-status text-success">Active</span>
                                        </div>
                                        <div class="nk-tb-col nk-tb-col-tools">
                                            <ul class="nk-tb-actions gx-1">
                                                <li class="nk-tb-action-hidden">
                                                    <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Send Email">
                                                        <em class="icon ni ni-mail-fill"></em>
                                                    </a>
                                                </li>
                                                <li>
                                                    <div class="drodown">
                                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <ul class="link-list-opt no-bdr">
                                                                <li><a href="#"><em class="icon ni ni-edit"></em><span>Edit</span></a></li>
                                                                <li><a data-bs-toggle="modal" href="#modalDelete"><em class="icon ni ni-trash"></em><span>Remove</span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div><!-- .nk-tb-item -->
                                    <div class="nk-tb-item">
                                        <div class="nk-tb-col nk-tb-col-check">
                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                <input type="checkbox" class="custom-control-input" id="uid9">
                                                <label class="custom-control-label" for="uid9"></label>
                                            </div>
                                        </div>
                                        <div class="nk-tb-col">
                                            <a href="#">
                                                <div class="user-card">
                                                    <div class="user-avatar bg-dark-dim">
                                                        <span>JH</span>
                                                    </div>
                                                    <div class="user-info">
                                                        <span class="tb-lead">Jane Harris <span class="dot dot-success d-md-none ms-1"></span></span>
                                                        <span>harris@example.com</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="nk-tb-col tb-col-md">
                                            <a href="#">
                                                <span class="fw-medium">#P6993</span>
                                            </a>
                                        </div>
                                        <div class="nk-tb-col tb-col-md">
                                            <span>+123 447-2384</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-xxl">
                                            <span>Near at Mountain college</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-lg">
                                            <div>
                                                <span>Item: Indomet25mg</span>
                                            </div>
                                            <div>
                                                <span>Quantity: 3box</span>
                                            </div>
                                        </div>
                                        <div class="nk-tb-col tb-col-sm">
                                            <span class="tb-amount">225.50 <span class="currency">USD</span></span>
                                        </div>
                                        <div class="nk-tb-col tb-col-md">
                                            <span class="tb-status text-success">Active</span>
                                        </div>
                                        <div class="nk-tb-col nk-tb-col-tools">
                                            <ul class="nk-tb-actions gx-1">
                                                <li class="nk-tb-action-hidden">
                                                    <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Send Email">
                                                        <em class="icon ni ni-mail-fill"></em>
                                                    </a>
                                                </li>
                                                <li>
                                                    <div class="drodown">
                                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <ul class="link-list-opt no-bdr">
                                                                <li><a href="#"><em class="icon ni ni-edit"></em><span>Edit</span></a></li>
                                                                <li><a data-bs-toggle="modal" href="#modalDelete"><em class="icon ni ni-trash"></em><span>Remove</span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div><!-- .nk-tb-item -->
                                    <div class="nk-tb-item">
                                        <div class="nk-tb-col nk-tb-col-check">
                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                <input type="checkbox" class="custom-control-input" id="uid10">
                                                <label class="custom-control-label" for="uid10"></label>
                                            </div>
                                        </div>
                                        <div class="nk-tb-col">
                                            <a href="#">
                                                <div class="user-card">
                                                    <div class="user-avatar bg-purple">
                                                        <span>EW</span>
                                                    </div>
                                                    <div class="user-info">
                                                        <span class="tb-lead">Emma Walker <span class="dot dot-warning d-md-none ms-1"></span></span>
                                                        <span>walker@example.com</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="nk-tb-col tb-col-md">
                                            <a href="#">
                                                <span class="fw-medium">#P6994</span>
                                            </a>
                                        </div>
                                        <div class="nk-tb-col tb-col-md">
                                            <span>+463 471-7173</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-xxl">
                                            <span>HNo 58,Banani</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-lg">
                                            <div>
                                                <span>Item: Omep20mg</span>
                                            </div>
                                            <div>
                                                <span>Quantity: 4pcs</span>
                                            </div>
                                        </div>
                                        <div class="nk-tb-col tb-col-sm">
                                            <span class="tb-amount">35.55 <span class="currency">USD</span></span>
                                        </div>
                                        <div class="nk-tb-col tb-col-md">
                                            <span class="tb-status text-warning">Inactive</span>
                                        </div>
                                        <div class="nk-tb-col nk-tb-col-tools">
                                            <ul class="nk-tb-actions gx-1">
                                                <li class="nk-tb-action-hidden">
                                                    <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Send Email">
                                                        <em class="icon ni ni-mail-fill"></em>
                                                    </a>
                                                </li>
                                                <li>
                                                    <div class="drodown">
                                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <ul class="link-list-opt no-bdr">
                                                                <li><a href="#"><em class="icon ni ni-edit"></em><span>Edit</span></a></li>
                                                                <li><a data-bs-toggle="modal" href="#modalDelete"><em class="icon ni ni-trash"></em><span>Remove</span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div><!-- .nk-tb-item -->
                                </div><!-- .nk-tb-list -->
                            </div><!-- .card-inner -->
                            <div class="card-inner">
                                <div class="nk-block-between-md g-3">
                                    <div class="g">
                                        <ul class="pagination justify-content-center justify-content-md-start">
                                            <li class="page-item"><a class="page-link" href="#">Prev</a></li>
                                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><span class="page-link"><em class="icon ni ni-more-h"></em></span></li>
                                            <li class="page-item"><a class="page-link" href="#">6</a></li>
                                            <li class="page-item"><a class="page-link" href="#">7</a></li>
                                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                        </ul><!-- .pagination -->
                                    </div>
                                    <div class="g">
                                        <div class="pagination-goto d-flex justify-content-center justify-content-md-start gx-3">
                                            <div>Page</div>
                                            <div>
                                                <select class="form-select form-select-sm js-select2" data-search="on" data-dropdown="xs center">
                                                    <option value="page-1">1</option>
                                                    <option value="page-2">2</option>
                                                    <option value="page-4">4</option>
                                                    <option value="page-5">5</option>
                                                    <option value="page-6">6</option>
                                                    <option value="page-7">7</option>
                                                    <option value="page-8">8</option>
                                                    <option value="page-9">9</option>
                                                    <option value="page-10">10</option>
                                                    <option value="page-11">11</option>
                                                    <option value="page-12">12</option>
                                                    <option value="page-13">13</option>
                                                    <option value="page-14">14</option>
                                                    <option value="page-15">15</option>
                                                    <option value="page-16">16</option>
                                                    <option value="page-17">17</option>
                                                    <option value="page-18">18</option>
                                                    <option value="page-19">19</option>
                                                    <option value="page-20">20</option>
                                                </select>
                                            </div>
                                            <div>OF 102</div>
                                        </div>
                                    </div><!-- .pagination-goto -->
                                </div><!-- .nk-block-between -->
                            </div><!-- .card-inner -->
                        </div><!-- .card-inner-group -->
                    </div><!-- .card -->
                </div><!-- .nk-block -->
            </div>
        </div>
    </div>
</div>
<!-- content @e -->
</div>
<!-- wrap @e -->
</div>
<!-- main @e -->
</div>
<!-- app-root @e -->
<!--Delete-->
<div class="modal fade" tabindex="-1" id="modalDelete">
<div class="modal-dialog" role="document">
<div class="modal-content">
<a href="#" class="close" data-bs-dismiss="modal"><em class="icon ni ni-cross"></em></a>
<div class="modal-body modal-body-lg text-center">
    <div class="nk-modal py-4">
        <em class="nk-modal-icon icon icon-circle icon-circle-xxl ni ni-cross bg-danger"></em>
        <h4 class="nk-modal-title">Are You Sure ?</h4>
        <div class="nk-modal-text mt-n2">
            <p class="text-soft">This event data will be removed permanently.</p>
        </div>
        <ul class="d-flex justify-content-center gx-4 mt-4">
            <li>
                <button data-bs-dismiss="modal" id="deleteEvent" class="btn btn-success">Yes, Deleteit</button>
            </li>
            <li>
                <button data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#editEventPopup" class="btn btn-danger btn-dim">Cancel</button>
            </li>
        </ul>
    </div>
</div>
</div>
</div>
</div><!-- .Delete Modal-content -->

@endsection
