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
                            <h3 class="nk-block-title page-title">Salary</h3>
                        </div><!-- .nk-block-head-content -->
                    </div><!-- .nk-block-between -->
                </div><!-- .nk-block-head -->
                <div class="nk-block">
                    <div class="row gy-5">
                        <div class="col-lg-12">
                            <div class="nk-block-head">
                                <div class="nk-block-head-content">
                                    <h5 class="nk-block-title title">Add a salary</h5>
                                </div>
                            </div><!-- .nk-block-head -->
                            <div class="card card-bordered">
                                <div class="card-inner">
                                    <form action="#">
                                        <div class="row gy-4">
                                            <div class="col-xxl-3 col-sm-6">
                                                <div class="form-group">
                                                    <label class="form-label" for="member">Member</label>
                                                    <input type="text" class="form-control" id="member" placeholder="Member" required>
                                                </div>
                                            </div>
                                            <div class="col-xxl-3 col-sm-6">
                                                <div class="form-group">
                                                    <label class="form-label">Date</label>
                                                    <div class="form-control-wrap">
                                                        <div class="form-icon form-icon-right">
                                                            <em class="icon ni ni-calendar"></em>
                                                        </div>
                                                        <input type="text" class="form-control date-picker" data-date-format="yyyy-mm-dd" placeholder="yyyy-mm-dd">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xxl-3 col-sm-6">
                                                <div class="form-group">
                                                    <label class="form-label" for="salary">Total Salary</label>
                                                    <input type="number" class="form-control" id="salary" placeholder="Salary" required>
                                                </div>
                                            </div>
                                            <div class="col-xxl-3 col-sm-6">
                                                <div class="form-group">
                                                    <label class="form-label" for="days">Working Days</label>
                                                    <input type="number" class="form-control" id="days" placeholder="Working Days" required>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                                        <li>
                                                            <button type="submit" class="btn btn-primary ">Save Informations</button>
                                                        </li>
                                                        <li>
                                                            <button data-bs-dismiss="modal" class="btn btn-danger">Cancel</button>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div><!--row-->
                                    </form><!--form-->
                                </div>
                            </div>
                        </div><!-- .col -->
                        <div class="col-lg-12">
                            <div class="nk-block-head">
                                <div class="nk-block-head-content">
                                    <h5 class="nk-block-title title">Salary List</h5>
                                </div>
                            </div><!-- .nk-block-head -->
                            <div class="nk-block">
                                <div class="card card-bordered card-stretch">
                                    <div class="card-inner-group">
                                        <div class="card-inner position-relative card-tools-toggle">
                                            <div class="card-title-group">
                                                <div class="card-tools">
                                                    <div class="form-control-wrap">
                                                        <div class="input-daterange date-picker-range input-group">
                                                            <input type="text" class="form-control" placeholder="Start Date" />
                                                            <div class="input-group-addon">TO</div>
                                                            <input type="text" class="form-control" placeholder="End Date" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-tools me-n1">
                                                    <ul class="btn-toolbar gx-1">
                                                        <li>
                                                            <a href="#" class="btn btn-icon search-toggle toggle-search" data-target="search"><em class="icon ni ni-search"></em></a>
                                                        </li><!-- li -->
                                                    </ul><!-- .btn-toolbar -->
                                                </div><!-- .card-tools -->
                                                <div class="card-search search-wrap" data-search="search">
                                                    <div class="card-body">
                                                        <div class="search-content">
                                                            <a href="#" class="search-back btn btn-icon toggle-search" data-target="search"><em class="icon ni ni-arrow-left"></em></a>
                                                            <input type="text" class="form-control border-transparent form-focus-none" placeholder="Search by name">
                                                            <button class="search-submit btn btn-icon"><em class="icon ni ni-search"></em></button>
                                                        </div>
                                                    </div>
                                                </div><!-- .card-search -->
                                            </div><!-- .card-title-group -->
                                        </div><!-- .card-inner -->
                                        <div class="card-inner p-0">
                                            <div class="nk-tb-list nk-tb-ulist">
                                                <div class="nk-tb-item nk-tb-head  bg-lighter">
                                                    <div class="nk-tb-col"><span class="sub-text">Member</span></div>
                                                    <div class="nk-tb-col tb-col-sm"><span class="sub-text">Date</span></div>
                                                    <div class="nk-tb-col"><span class="sub-text">Total salary</span></div>
                                                    <div class="nk-tb-col tb-col-md"><span class="sub-text">Working Days</span></div>
                                                    <div class="nk-tb-col tb-col-lg"><span class="sub-text">Generated By</span></div>
                                                    <div class="nk-tb-col tb-col-md"><span class="sub-text">Status</span></div>
                                                    <div class="nk-tb-col nk-tb-col-tools">
                                                        <ul class="nk-tb-actions gx-1 my-n1">
                                                            <li>
                                                                <div class="drodown">
                                                                    <a href="#" class="dropdown-toggle btn btn-icon btn-trigger me-n1" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                    <div class="dropdown-menu dropdown-menu-end">
                                                                        <ul class="link-list-opt no-bdr">
                                                                            <li><a data-bs-toggle="modal" href="#editSalary"><em class="icon ni ni-edit"></em><span>Edit Selected</span></a></li>
                                                                            <li><a data-bs-toggle="modal" href="#modalDelete"><em class="icon ni ni-trash"></em><span>Remove Seleted</span></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div><!-- .nk-tb-item -->
                                                <div class="nk-tb-item">
                                                    <div class="nk-tb-col">
                                                        <a href="#">
                                                            <div class="user-card">
                                                                <div class="user-info">
                                                                    <span class="tb-lead">Abu Bin Ishtiyak</span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="nk-tb-col tb-col-sm">
                                                        <span>19/12/2020</span>
                                                    </div>
                                                    <div class="nk-tb-col">
                                                        <span class="tb-amount">54000.00<span class="currency">USD</span></span>
                                                    </div>
                                                    <div class="nk-tb-col tb-col-md">
                                                        <span class="badge bg-secondary">28Days</span>
                                                    </div>
                                                    <div class="nk-tb-col tb-col-lg">
                                                        <spa>Admin</spa>
                                                    </div>
                                                    <div class="nk-tb-col tb-col-md">
                                                        <span class="tb-status text-danger">Unpaid</span>
                                                    </div>
                                                    <div class="nk-tb-col nk-tb-col-tools">
                                                        <ul class="nk-tb-actions gx-1">
                                                            <li>
                                                                <div class="drodown">
                                                                    <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                    <div class="dropdown-menu dropdown-menu-end">
                                                                        <ul class="link-list-opt no-bdr">
                                                                            <li><a data-bs-toggle="modal" href="#addPay"><em class="icon ni ni-coin-alt"></em><span>Pay Now</span></a></li>
                                                                            <li><a data-bs-toggle="modal" href="#editSalary"><em class="icon ni ni-edit"></em><span>Edit</span></a></li>
                                                                            <li><a data-bs-toggle="modal" href="#modalDelete"><em class="icon ni ni-trash"></em><span>Remove</span></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div><!-- .nk-tb-item -->
                                                <div class="nk-tb-item">
                                                    <div class="nk-tb-col">
                                                        <a href="#">
                                                            <div class="user-card">
                                                                <div class="user-info">
                                                                    <span class="tb-lead">Ashley Lawson</span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="nk-tb-col tb-col-sm">
                                                        <span>17/05/2021</span>
                                                    </div>
                                                    <div class="nk-tb-col">
                                                        <span class="tb-amount">620.00<span class="currency">USD</span></span>
                                                    </div>
                                                    <div class="nk-tb-col tb-col-md">
                                                        <span class="badge bg-primary">20Days</span>
                                                    </div>
                                                    <div class="nk-tb-col tb-col-lg">
                                                        <span>Admin</span>
                                                    </div>
                                                    <div class="nk-tb-col tb-col-md">
                                                        <span class="tb-status text-success">Paid</span>
                                                    </div>
                                                    <div class="nk-tb-col nk-tb-col-tools">
                                                        <ul class="nk-tb-actions gx-1">
                                                            <li>
                                                                <div class="drodown">
                                                                    <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                    <div class="dropdown-menu dropdown-menu-end">
                                                                        <ul class="link-list-opt no-bdr">
                                                                            <li><a data-bs-toggle="modal" href="#addPay"><em class="icon ni ni-coin-alt"></em><span>Pay Now</span></a></li>
                                                                            <li><a data-bs-toggle="modal" href="#editSalary"><em class="icon ni ni-edit"></em><span>Edit</span></a></li>
                                                                            <li><a data-bs-toggle="modal" href="#modalDelete"><em class="icon ni ni-trash"></em><span>Remove</span></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div><!-- .nk-tb-item -->
                                                <div class="nk-tb-item">
                                                    <div class="nk-tb-col">
                                                        <a href="#">
                                                            <div class="user-card">
                                                                <div class="user-info">
                                                                    <span class="tb-lead">Joe Larson </span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="nk-tb-col tb-col-sm">
                                                        <span>19/12/2020</span>
                                                    </div>
                                                    <div class="nk-tb-col">
                                                        <span class="tb-amount">5000.00 <span class="currency">USD</span></span>
                                                    </div>
                                                    <div class="nk-tb-col tb-col-md">
                                                        <span class="badge bg-warning">20Days</span>
                                                    </div>
                                                    <div class="nk-tb-col tb-col-lg">
                                                        <span>Manager</span>
                                                    </div>
                                                    <div class="nk-tb-col tb-col-md">
                                                        <span class="tb-status text-danger">Unpaid</span>
                                                    </div>
                                                    <div class="nk-tb-col nk-tb-col-tools">
                                                        <ul class="nk-tb-actions gx-1">
                                                            <li>
                                                                <div class="drodown">
                                                                    <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                    <div class="dropdown-menu dropdown-menu-end">
                                                                        <ul class="link-list-opt no-bdr">
                                                                            <li><a data-bs-toggle="modal" href="#addPay"><em class="icon ni ni-coin-alt"></em><span>Pay Now</span></a></li>
                                                                            <li><a data-bs-toggle="modal" href="#editSalary"><em class="icon ni ni-edit"></em><span>Edit</span></a></li>
                                                                            <li><a data-bs-toggle="modal" href="#modalDelete"><em class="icon ni ni-trash"></em><span>Remove</span></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div><!-- .nk-tb-item -->
                                                <div class="nk-tb-item">
                                                    <div class="nk-tb-col">
                                                        <a href="#">
                                                            <div class="user-card">
                                                                <div class="user-info">
                                                                    <span class="tb-lead">Jane Montgomery</span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="nk-tb-col tb-col-sm">
                                                        <span>02/04/2021</span>
                                                    </div>
                                                    <div class="nk-tb-col">
                                                        <span class="tb-amount">5500.00 <span class="currency">USD</span></span>
                                                    </div>
                                                    <div class="nk-tb-col tb-col-md">
                                                        <span class="badge bg-success">26Days</span>
                                                    </div>
                                                    <div class="nk-tb-col tb-col-lg">
                                                        <span>Manager</span>
                                                    </div>
                                                    <div class="nk-tb-col tb-col-md">
                                                        <span class="tb-status text-success">Paid</span>
                                                    </div>
                                                    <div class="nk-tb-col nk-tb-col-tools">
                                                        <ul class="nk-tb-actions gx-1">
                                                            <li>
                                                                <div class="drodown">
                                                                    <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                    <div class="dropdown-menu dropdown-menu-end">
                                                                        <ul class="link-list-opt no-bdr">
                                                                            <li><a data-bs-toggle="modal" href="#addPay"><em class="icon ni ni-coin-alt"></em><span>Pay Now</span></a></li>
                                                                            <li><a data-bs-toggle="modal" href="#editSalary"><em class="icon ni ni-edit"></em><span>Edit</span></a></li>
                                                                            <li><a data-bs-toggle="modal" href="#modalDelete"><em class="icon ni ni-trash"></em><span>Remove</span></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div><!-- .nk-tb-item -->
                                                <div class="nk-tb-item">
                                                    <div class="nk-tb-col">
                                                        <a href="#">
                                                            <div class="user-card">
                                                                <div class="user-info">
                                                                    <span class="tb-lead">Frances Burns</span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="nk-tb-col tb-col-sm">
                                                        <span>01/05/2022</span>
                                                    </div>
                                                    <div class="nk-tb-col">
                                                        <span class="tb-amount">2400.00 <span class="currency">USD</span></span>
                                                    </div>
                                                    <div class="nk-tb-col tb-col-md">
                                                        <span class="badge bg-success">24days</span>
                                                    </div>
                                                    <div class="nk-tb-col tb-col-lg">
                                                        <span>Admin</span>
                                                    </div>
                                                    <div class="nk-tb-col tb-col-md">
                                                        <span class="tb-status text-success">Paid</span>
                                                    </div>
                                                    <div class="nk-tb-col nk-tb-col-tools">
                                                        <ul class="nk-tb-actions gx-1">
                                                            <li>
                                                                <div class="drodown">
                                                                    <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                    <div class="dropdown-menu dropdown-menu-end">
                                                                        <ul class="link-list-opt no-bdr">
                                                                            <li><a data-bs-toggle="modal" href="#addPay"><em class="icon ni ni-coin-alt"></em><span>Pay Now</span></a></li>
                                                                            <li><a data-bs-toggle="modal" href="#editSalary"><em class="icon ni ni-edit"></em><span>Edit</span></a></li>
                                                                            <li><a data-bs-toggle="modal" href="#modalDelete"><em class="icon ni ni-trash"></em><span>Remove</span></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div><!-- .nk-tb-item -->
                                                <div class="nk-tb-item">
                                                    <div class="nk-tb-col">
                                                        <a href="#">
                                                            <div class="user-card">
                                                                <div class="user-info">
                                                                    <span class="tb-lead">Alan Butler </span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="nk-tb-col tb-col-sm">
                                                        <span>07/07/2022</span>
                                                    </div>
                                                    <div class="nk-tb-col">
                                                        <span class="tb-amount">4500.00 <span class="currency">USD</span></span>
                                                    </div>
                                                    <div class="nk-tb-col tb-col-md">
                                                        <span class="badge bg-danger">26Days</span>
                                                    </div>
                                                    <div class="nk-tb-col tb-col-lg">
                                                        <span>Manager</span>
                                                    </div>
                                                    <div class="nk-tb-col tb-col-md">
                                                        <span class="tb-status text-danger">Unpaid</span>
                                                    </div>
                                                    <div class="nk-tb-col nk-tb-col-tools">
                                                        <ul class="nk-tb-actions gx-1">
                                                            <li>
                                                                <div class="drodown">
                                                                    <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                    <div class="dropdown-menu dropdown-menu-end">
                                                                        <ul class="link-list-opt no-bdr">
                                                                            <li><a data-bs-toggle="modal" href="#addPay"><em class="icon ni ni-coin-alt"></em><span>Pay Now</span></a></li>
                                                                            <li><a data-bs-toggle="modal" href="#editSalary"><em class="icon ni ni-edit"></em><span>Edit</span></a></li>
                                                                            <li><a data-bs-toggle="modal" href="#modalDelete"><em class="icon ni ni-trash"></em><span>Remove</span></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div><!-- .nk-tb-item -->
                                                <div class="nk-tb-item">
                                                    <div class="nk-tb-col">
                                                        <a href="#">
                                                            <div class="user-card">
                                                                <div class="user-info">
                                                                    <span class="tb-lead">Victoria Lynch </span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="nk-tb-col tb-col-sm">
                                                        <span>19/12/2020</span>
                                                    </div>
                                                    <div class="nk-tb-col">
                                                        <span class="tb-amount">2200.00 <span class="currency">USD</span></span>
                                                    </div>
                                                    <div class="nk-tb-col tb-col-md">
                                                        <span class="badge bg-info">28Days</span>
                                                    </div>
                                                    <div class="nk-tb-col tb-col-lg">
                                                        <span>Admin</span>
                                                    </div>
                                                    <div class="nk-tb-col tb-col-md">
                                                        <span class="tb-status text-success">Paid</span>
                                                    </div>
                                                    <div class="nk-tb-col nk-tb-col-tools">
                                                        <ul class="nk-tb-actions gx-1">
                                                            <li>
                                                                <div class="drodown">
                                                                    <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                    <div class="dropdown-menu dropdown-menu-end">
                                                                        <ul class="link-list-opt no-bdr">
                                                                            <li><a data-bs-toggle="modal" href="#addPay"><em class="icon ni ni-coin-alt"></em><span>Pay Now</span></a></li>
                                                                            <li><a data-bs-toggle="modal" href="#editSalary"><em class="icon ni ni-edit"></em><span>Edit</span></a></li>
                                                                            <li><a data-bs-toggle="modal" href="#modalDelete"><em class="icon ni ni-trash"></em><span>Remove</span></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div><!-- .nk-tb-item -->
                                                <div class="nk-tb-item">
                                                    <div class="nk-tb-col">
                                                        <a href="#">
                                                            <div class="user-card">
                                                                <div class="user-info">
                                                                    <span class="tb-lead">Patrick Newman</span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="nk-tb-col tb-col-sm">
                                                        <span>03/04/2021</span>
                                                    </div>
                                                    <div class="nk-tb-col">
                                                        <span class="tb-amount">5000.00 <span class="currency">USD</span></span>
                                                    </div>
                                                    <div class="nk-tb-col tb-col-md">
                                                        <span class="badge bg-warning">30Days</span>
                                                    </div>
                                                    <div class="nk-tb-col tb-col-lg">
                                                        <span>Manager</span>
                                                    </div>
                                                    <div class="nk-tb-col tb-col-md">
                                                        <span class="tb-status text-success">Paid</span>
                                                    </div>
                                                    <div class="nk-tb-col nk-tb-col-tools">
                                                        <ul class="nk-tb-actions gx-1">
                                                            <li>
                                                                <div class="drodown">
                                                                    <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                    <div class="dropdown-menu dropdown-menu-end">
                                                                        <ul class="link-list-opt no-bdr">
                                                                            <li><a data-bs-toggle="modal" href="#addPay"><em class="icon ni ni-coin-alt"></em><span>Pay Now</span></a></li>
                                                                            <li><a data-bs-toggle="modal" href="#editSalary"><em class="icon ni ni-edit"></em><span>Edit</span></a></li>
                                                                            <li><a data-bs-toggle="modal" href="#modalDelete"><em class="icon ni ni-trash"></em><span>Remove</span></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div><!-- .nk-tb-item -->
                                                <div class="nk-tb-item">
                                                    <div class="nk-tb-col">
                                                        <a href="#">
                                                            <div class="user-card">
                                                                <div class="user-info">
                                                                    <span class="tb-lead">Jane Harris</span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="nk-tb-col tb-col-sm">
                                                        <span>02/04/2022</span>
                                                    </div>
                                                    <div class="nk-tb-col">
                                                        <span class="tb-amount">2000.00 <span class="currency">USD</span></span>
                                                    </div>
                                                    <div class="nk-tb-col tb-col-md">
                                                        <span class="badge bg-dark">28Days</span>
                                                    </div>
                                                    <div class="nk-tb-col tb-col-lg">
                                                        <span>Admin</span>
                                                    </div>
                                                    <div class="nk-tb-col tb-col-md">
                                                        <span class="tb-status text-success">Paid</span>
                                                    </div>
                                                    <div class="nk-tb-col nk-tb-col-tools">
                                                        <ul class="nk-tb-actions gx-1">
                                                            <li>
                                                                <div class="drodown">
                                                                    <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                    <div class="dropdown-menu dropdown-menu-end">
                                                                        <ul class="link-list-opt no-bdr">
                                                                            <li><a data-bs-toggle="modal" href="#addPay"><em class="icon ni ni-coin-alt"></em><span>Pay Now</span></a></li>
                                                                            <li><a data-bs-toggle="modal" href="#editSalary"><em class="icon ni ni-edit"></em><span>Edit</span></a></li>
                                                                            <li><a data-bs-toggle="modal" href="#modalDelete"><em class="icon ni ni-trash"></em><span>Remove</span></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div><!-- .nk-tb-item -->
                                                <div class="nk-tb-item">
                                                    <div class="nk-tb-col">
                                                        <a href="#">
                                                            <div class="user-card">
                                                                <div class="user-info">
                                                                    <span class="tb-lead">Emma Walker</span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="nk-tb-col tb-col-sm">
                                                        <span>12/12/2021</span>
                                                    </div>
                                                    <div class="nk-tb-col">
                                                        <span class="tb-amount">7800.00 <span class="currency">USD</span></span>
                                                    </div>
                                                    <div class="nk-tb-col tb-col-md">
                                                        <span class="badge bg-danger">22Days</span>
                                                    </div>
                                                    <div class="nk-tb-col tb-col-lg">
                                                        <span>Manager</span>
                                                    </div>
                                                    <div class="nk-tb-col tb-col-md">
                                                        <span class="tb-status text-danger">Unpaid</span>
                                                    </div>
                                                    <div class="nk-tb-col nk-tb-col-tools">
                                                        <ul class="nk-tb-actions gx-1">
                                                            <li>
                                                                <div class="drodown">
                                                                    <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                    <div class="dropdown-menu dropdown-menu-end">
                                                                        <ul class="link-list-opt no-bdr">
                                                                            <li><a data-bs-toggle="modal" href="#addPay"><em class="icon ni ni-coin-alt"></em><span>Pay Now</span></a></li>
                                                                            <li><a data-bs-toggle="modal" href="#editSalary"><em class="icon ni ni-edit"></em><span>Edit</span></a></li>
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
                        </div><!-- .col -->
                    </div><!-- .row -->
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
<!-- Edit Salary-->
<div class="modal fade" tabindex="-1" role="dialog" id="editSalary">
<div class="modal-dialog modal-lg" role="document">
<div class="modal-content">
<a href="#" class="close" data-bs-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
<div class="modal-body modal-body-md">
    <h5 class="modal-title">Edit Salary</h5>
    <form action="#" class="mt-4">
        <div class="row g-gs">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="form-label" for="member">Member</label>
                    <input type="text" class="form-control" id="member" placeholder="Member" required>
                </div>
            </div><!--col-->
            <div class="col-md-6">
                <div class="form-group">
                    <label class="form-label">Date</label>
                    <div class="form-control-wrap">
                        <div class="form-icon form-icon-right">
                            <em class="icon ni ni-calendar"></em>
                        </div>
                        <input type="text" class="form-control date-picker" data-date-format="yyyy-mm-dd" placeholder="yyyy-mm-dd">
                    </div>
                </div>
            </div><!-- .col -->
            <div class="col-md-6">
                <div class="form-group">
                    <label class="form-label" for="salary">Total Salary</label>
                    <input type="text" class="form-control" id="salary" placeholder="Total Salary" required>
                </div>
            </div><!--col-->
            <div class="col-12">
                <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                    <li>
                        <a href="#" data-bs-dismiss="modal" class="btn btn-primary">Edit Salary</a>
                    </li>
                    <li>
                        <a href="#" data-bs-dismiss="modal" class="link link-light">Cancel</a>
                    </li>
                </ul>
            </div>
        </div>
</div>
</form>
</div><!-- .modal-body -->
</div><!-- .modal-content -->
</div><!-- .modal-dialog -->
<!-- Add  Pay-->
<div class="modal fade" tabindex="-1" role="dialog" id="addPay">
<div class="modal-dialog modal-lg" role="document">
<div class="modal-content">
<a href="#" class="close" data-bs-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
<div class="modal-body modal-body-md">
    <h5 class="modal-title">Pay Salary</h5>
    <form action="#" class="mt-4">
        <div class="row g-gs">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="form-label" for="member">Member</label>
                    <input type="text" class="form-control" id="member" placeholder="Member" required>
                </div>
            </div><!--col-->
            <div class="col-md-6">
                <div class="form-group">
                    <label class="form-label">Date</label>
                    <div class="form-control-wrap">
                        <div class="form-icon form-icon-right">
                            <em class="icon ni ni-calendar"></em>
                        </div>
                        <input type="text" class="form-control date-picker" data-date-format="yyyy-mm-dd" placeholder="yyyy-mm-dd">
                    </div>
                </div>
            </div><!-- .col -->
            <div class="col-md-6">
                <div class="form-group">
                    <label class="form-label" for="amount">Salary Amount</label>
                    <input type="text" class="form-control" id="amount" placeholder="Amount" required>
                </div>
            </div><!--col-->
            <div class="col-md-6">
                <div class="form-group">
                    <label class="form-label" for="bonous">Bonous%</label>
                    <input type="text" class="form-control" id="bonous" placeholder="Bonous" required>
                </div>
            </div><!--col-->
            <div class="col-12">
                <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                    <li>
                        <a href="#" data-bs-dismiss="modal" class="btn btn-primary">Comfirm</a>
                    </li>
                    <li>
                        <a href="#" data-bs-dismiss="modal" class="link link-light">Cancel</a>
                    </li>
                </ul>
            </div>
        </div>
</div>
</form>
</div><!-- .modal-body -->
</div><!-- .modal-content -->
</div><!-- .modal-dialog -->

@endsection
