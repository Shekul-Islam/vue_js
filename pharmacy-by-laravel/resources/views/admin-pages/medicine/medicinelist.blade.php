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
                            <h3 class="nk-block-title page-title">Medicine</h3>
                            <div class="nk-block-des text-soft">
                                <p>Here is the medicine list.</p>
                            </div>
                        </div><!-- .nk-block-head-content -->
                        <div class="nk-block-head-content">
                            <div class="toggle-wrap nk-block-tools-toggle">
                                <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1" data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
                                <div class="toggle-expand-content" data-content="pageMenu">
                                    <ul class="nk-block-tools g-3">
                                        <li>
                                            <div class="form-control-wrap">
                                                <div class="form-icon form-icon-right">
                                                    <em class="icon ni ni-search"></em>
                                                </div>
                                                <input type="text" class="form-control" id="default-04" placeholder="Quick search by name">
                                            </div>
                                        </li>
                                        <li>
                                            <div class="drodown">
                                                <a href="#" class="dropdown-toggle btn btn-white btn-dim btn-outline-light" data-bs-toggle="dropdown"><em class="d-none d-sm-inline icon ni ni-filter-alt"></em><span><span class="d-none d-md-inline"></span>Filtered By</span><em class="dd-indc icon ni ni-chevron-right"></em></a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <ul class="link-list-opt no-bdr">
                                                        <li><a href="#"><span>Alphabetically, A-Z</span></a></li>
                                                        <li><a href="#"><span>Alphabetically, Z-A</span></a></li>
                                                        <li><a href="#"><span>Best Selling</span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="nk-block-tools-opt">
                                            <a href="html/pharmacy/add-medicine.html" class="btn btn-icon btn-primary d-md-none"><em class="icon ni ni-plus"></em></a>
                                            <a href="html/pharmacy/add-medicine.html" class="btn btn-primary d-none d-md-inline-flex"><em class="icon ni ni-plus"></em><span>Add Medicine</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- .nk-block-head-content -->
                    </div><!-- .nk-block-between -->
                </div><!-- .nk-block-head -->
                <div class="nk-block">
                    <div class="card card-bordered">
                        <div class="card-inner-group">
                            <div class="card-inner p-0">
                                <div class="nk-tb-list">
                                    <div class="nk-tb-item nk-tb-head">
                                        <div class="nk-tb-col nk-tb-col-check">
                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                <input type="checkbox" class="custom-control-input" id="pid">
                                                <label class="custom-control-label" for="pid"></label>
                                            </div>
                                        </div>
                                        <div class="nk-tb-col"><span>Name</span></div>
                                        <div class="nk-tb-col tb-col-lg"><span>Generic Name</span></div>
                                        <div class="nk-tb-col tb-col-xxl"><span>SKU</span></div>
                                        <div class="nk-tb-col tb-col-lg"><span>Weight</span></div>
                                        <div class="nk-tb-col tb-col-sm"><span>Category</span></div>
                                        <div class="nk-tb-col tb-col-xxl"><span>Manufacturer</span></div>
                                        <div class="nk-tb-col"><span>Price</span></div>
                                        <div class="nk-tb-col tb-col-xxl"><span>Manufacturer Price</span></div>
                                        <div class="nk-tb-col tb-col-md"><span>Stock</span></div>
                                        <div class="nk-tb-col tb-col-xxl"><span>Expire Date</span></div>
                                        <div class="nk-tb-col tb-col-md"><span class="sub-text">Status</span></div>
                                        <div class="nk-tb-col nk-tb-col-tools">
                                            <ul class="nk-tb-actions gx-1 my-n1">
                                                <li class="me-n1">
                                                    <div class="dropdown">
                                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <ul class="link-list-opt no-bdr">
                                                                <li><a href="html/pharmacy/manufacturer.html"><em class="icon ni ni-home-fill"></em>Manufacturer</span></a></li>
                                                                <li><a href="html/pharmacy/medicine-details.html"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                                <li><a data-bs-toggle="modal" href="#editMedicine"><em class="icon ni ni-edit"></em><span>Edit Selected</span></a></li>
                                                                <li><a data-bs-toggle="modal" href="#modalDelete"><em class="icon ni ni-trash"></em><span>Remove Selected</span></a></li>
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
                                                <input type="checkbox" class="custom-control-input" id="pid1">
                                                <label class="custom-control-label" for="pid1"></label>
                                            </div>
                                        </div>
                                        <div class="nk-tb-col">
                                            <a href="html/pharmacy/medicine-details.html">
                                                <span class="tb-product">
                                                    <span class="title">Zimax</span>
                                                </span>
                                            </a>
                                        </div>
                                        <div class="nk-tb-col tb-col-lg">
                                            <span>Azithromycin</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-xxl">
                                            <span class="tb-sub">UY3750</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-lg">
                                            <span>500mg</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-sm">
                                            <span>Tablet</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-xxl">
                                            <span>Healthcare</span>
                                        </div>
                                        <div class="nk-tb-col">
                                            <span class="tb-amount">20.55 <span class="currency">USD</span></span>
                                        </div>
                                        <div class="nk-tb-col tb-col-xxl">
                                            <span class="tb-amount">15.00 <span class="currency">USD</span></span>
                                        </div>
                                        <div class="nk-tb-col tb-col-md">
                                            <span>100</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-xxl">
                                            <span class="tb-date">19/12/2020</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-md">
                                            <span class="tb-status text-success">Available</span>
                                        </div>
                                        <div class="nk-tb-col nk-tb-col-tools">
                                            <ul class="nk-tb-actions gx-1 my-n1">
                                                <li class="me-n1">
                                                    <div class="dropdown">
                                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <ul class="link-list-opt no-bdr">
                                                                <li><a href="html/pharmacy/manufacturer.html"><em class="icon ni ni-home-fill"></em>Manufacturer</span></a></li>
                                                                <li><a href="html/pharmacy/medicine-details.html"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                                <li><a data-bs-toggle="modal" href="#editMedicine"><em class="icon ni ni-edit"></em><span>Edit </span></a></li>
                                                                <li><a data-bs-toggle="modal" href="#modalDelete"><em class="icon ni ni-trash"></em><span>Remove </span></a></li>
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
                                                <input type="checkbox" class="custom-control-input" id="pid2">
                                                <label class="custom-control-label" for="pid2"></label>
                                            </div>
                                        </div>
                                        <div class="nk-tb-col">
                                            <a href="html/pharmacy/medicine-details.html">
                                                <span class="tb-product">
                                                    <span class="title">Oxidon</span>
                                                </span>
                                            </a>
                                        </div>
                                        <div class="nk-tb-col tb-col-lg">
                                            <span>Domperidon</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-xxl">
                                            <span class="tb-sub">UY3749</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-lg">
                                            <span>10mg</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-sm">
                                            <span>Tablet</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-xxl">
                                            <span>Square</span>
                                        </div>
                                        <div class="nk-tb-col">
                                            <span class="tb-amount">15.00 <span class="currency">USD</span></span>
                                        </div>
                                        <div class="nk-tb-col tb-col-xxl">
                                            <span class="tb-amount">12.00 <span class="currency">USD</span></span>
                                        </div>
                                        <div class="nk-tb-col tb-col-md">
                                            <span>50</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-xxl">
                                            <span class="tb-date">17/05/2021</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-md">
                                            <span class="tb-status text-warning">Low</span>
                                        </div>
                                        <div class="nk-tb-col nk-tb-col-tools">
                                            <ul class="nk-tb-actions gx-1 my-n1">
                                                <li class="me-n1">
                                                    <div class="dropdown">
                                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <ul class="link-list-opt no-bdr">
                                                                <li><a href="html/pharmacy/manufacturer.html"><em class="icon ni ni-home-fill"></em>Manufacturer</span></a></li>
                                                                <li><a href="html/pharmacy/medicine-details.html"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                                <li><a data-bs-toggle="modal" href="#editMedicine"><em class="icon ni ni-edit"></em><span>Edit </span></a></li>
                                                                <li><a data-bs-toggle="modal" href="#modalDelete"><em class="icon ni ni-trash"></em><span>Remove </span></a></li>
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
                                                <input type="checkbox" class="custom-control-input" id="pid3">
                                                <label class="custom-control-label" for="pid3"></label>
                                            </div>
                                        </div>
                                        <div class="nk-tb-col">
                                            <a href="html/pharmacy/medicine-details.html">
                                                <span class="tb-product">
                                                    <span class="title">MED-1008</span>
                                                </span>
                                            </a>
                                        </div>
                                        <div class="nk-tb-col tb-col-lg">
                                            <span>hydrazine</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-xxl">
                                            <span class="tb-sub">UY3710</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-lg">
                                            <span>200Doses</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-sm">
                                            <span>Inhealer</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-xxl">
                                            <span>Square</span>
                                        </div>
                                        <div class="nk-tb-col">
                                            <span class="tb-amount">12.45 <span class="currency">USD</span></span>
                                        </div>
                                        <div class="nk-tb-col tb-col-xxl">
                                            <span class="tb-amount">10.00 <span class="currency">USD</span></span>
                                        </div>
                                        <div class="nk-tb-col tb-col-md">
                                            <span>5</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-xxl">
                                            <span class="tb-date">19/12/2020</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-md">
                                            <span class="tb-status text-warning">Low</span>
                                        </div>
                                        <div class="nk-tb-col nk-tb-col-tools">
                                            <ul class="nk-tb-actions gx-1 my-n1">
                                                <li class="me-n1">
                                                    <div class="dropdown">
                                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <ul class="link-list-opt no-bdr">
                                                                <li><a href="html/pharmacy/manufacturer.html"><em class="icon ni ni-home-fill"></em>Manufacturer</span></a></li>
                                                                <li><a href="html/pharmacy/medicine-details.html"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                                <li><a data-bs-toggle="modal" href="#editMedicine"><em class="icon ni ni-edit"></em><span>Edit </span></a></li>
                                                                <li><a data-bs-toggle="modal" href="#modalDelete"><em class="icon ni ni-trash"></em><span>Remove </span></a></li>
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
                                                <input type="checkbox" class="custom-control-input" id="pid4">
                                                <label class="custom-control-label" for="pid4"></label>
                                            </div>
                                        </div>
                                        <div class="nk-tb-col">
                                            <a href="html/pharmacy/medicine-details.html">
                                                <span class="tb-product">
                                                    <span class="title">Ceevit</span>
                                                </span>
                                            </a>
                                        </div>
                                        <div class="nk-tb-col tb-col-lg">
                                            <span>Vitamin C</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-xxl">
                                            <span class="tb-sub">UY3749</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-lg">
                                            <span>250mg</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-sm">
                                            <span>Vitamin</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-xxl">
                                            <span>lupin</span>
                                        </div>
                                        <div class="nk-tb-col">
                                            <span class="tb-amount">5.00 <span class="currency">USD</span></span>
                                        </div>
                                        <div class="nk-tb-col tb-col-xxl">
                                            <span class="tb-amount">2.00 <span class="currency">USD</span></span>
                                        </div>
                                        <div class="nk-tb-col tb-col-md">
                                            <span>200</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-xxl">
                                            <span class="tb-date">02/04/2021</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-md">
                                            <span class="tb-status text-success">Available</span>
                                        </div>
                                        <div class="nk-tb-col nk-tb-col-tools">
                                            <ul class="nk-tb-actions gx-1 my-n1">
                                                <li class="me-n1">
                                                    <div class="dropdown">
                                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <ul class="link-list-opt no-bdr">
                                                                <li><a href="html/pharmacy/manufacturer.html"><em class="icon ni ni-home-fill"></em>Manufacturer</span></a></li>
                                                                <li><a href="html/pharmacy/medicine-details.html"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                                <li><a data-bs-toggle="modal" href="#editMedicine"><em class="icon ni ni-edit"></em><span>Edit</span></a></li>
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
                                                <input type="checkbox" class="custom-control-input" id="pid5">
                                                <label class="custom-control-label" for="pid5"></label>
                                            </div>
                                        </div>
                                        <div class="nk-tb-col">
                                            <a href="html/pharmacy/medicine-details.html">
                                                <span class="tb-product">
                                                    <span class="title">DON A</span>
                                                </span>
                                            </a>
                                        </div>
                                        <div class="nk-tb-col tb-col-lg">
                                            <span>Domperidon</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-xxl">
                                            <span class="tb-sub">UY3798</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-lg">
                                            <span>10mg</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-sm">
                                            <span>Tablet</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-xxl">
                                            <span>Square</span>
                                        </div>
                                        <div class="nk-tb-col">
                                            <span class="tb-amount">50.00 <span class="currency">USD</span></span>
                                        </div>
                                        <div class="nk-tb-col tb-col-xxl">
                                            <span class="tb-amount">40.00 <span class="currency">USD</span></span>
                                        </div>
                                        <div class="nk-tb-col tb-col-md">
                                            <span>300</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-xxl">
                                            <span class="tb-date">01/05/2022</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-md">
                                            <span class="tb-status text-success">Available</span>
                                        </div>
                                        <div class="nk-tb-col nk-tb-col-tools">
                                            <ul class="nk-tb-actions gx-1 my-n1">
                                                <li class="me-n1">
                                                    <div class="dropdown">
                                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <ul class="link-list-opt no-bdr">
                                                                <li><a href="html/pharmacy/manufacturer.html"><em class="icon ni ni-home-fill"></em>Manufacturer</span></a></li>
                                                                <li><a href="html/pharmacy/medicine-details.html"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                                <li><a data-bs-toggle="modal" href="#editMedicine"><em class="icon ni ni-edit"></em><span>Edit </span></a></li>
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
                                                <input type="checkbox" class="custom-control-input" id="pid6">
                                                <label class="custom-control-label" for="pid6"></label>
                                            </div>
                                        </div>
                                        <div class="nk-tb-col">
                                            <a href="html/pharmacy/medicine-details.html">
                                                <span class="tb-product">
                                                    <span class="title">Pantonix</span>
                                                </span>
                                            </a>
                                        </div>
                                        <div class="nk-tb-col tb-col-lg">
                                            <span>Pantoprazol</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-xxl">
                                            <span class="tb-sub">UY3754</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-lg">
                                            <span>20mg</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-sm">
                                            <span>Tablet</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-xxl">
                                            <span>Square</span>
                                        </div>
                                        <div class="nk-tb-col">
                                            <span class="tb-amount">10.00 <span class="currency">USD</span></span>
                                        </div>
                                        <div class="nk-tb-col tb-col-xxl">
                                            <span class="tb-amount">08.00 <span class="currency">USD</span></span>
                                        </div>
                                        <div class="nk-tb-col tb-col-md">
                                            <span>50</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-xxl">
                                            <span class="tb-date">07/07/2022</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-md">
                                            <span class="tb-status text-warning">Low</span>
                                        </div>
                                        <div class="nk-tb-col nk-tb-col-tools">
                                            <ul class="nk-tb-actions gx-1 my-n1">
                                                <li class="me-n1">
                                                    <div class="dropdown">
                                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <ul class="link-list-opt no-bdr">
                                                                <li><a href="html/pharmacy/manufacturer.html"><em class="icon ni ni-home-fill"></em>Manufacturer</span></a></li>
                                                                <li><a href="html/pharmacy/medicine-details.html"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                                <li><a data-bs-toggle="modal" href="#editMedicine"><em class="icon ni ni-edit"></em><span>Edit </span></a></li>
                                                                <li><a data-bs-toggle="modal" href="#modalDelete"><em class="icon ni ni-trash"></em><span>Remove </span></a></li>
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
                                                <input type="checkbox" class="custom-control-input" id="pid7">
                                                <label class="custom-control-label" for="pid7"></label>
                                            </div>
                                        </div>
                                        <div class="nk-tb-col">
                                            <a href="html/pharmacy/medicine-details.html">
                                                <span class="tb-product">
                                                    <span class="title">Isoniazid</span>
                                                </span>
                                            </a>
                                        </div>
                                        <div class="nk-tb-col tb-col-lg">
                                            <span>hydrazine</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-xxl">
                                            <span class="tb-sub">UY3760</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-lg">
                                            <span>1.5ml</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-sm">
                                            <span>Syrup</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-xxl">
                                            <span>Healthcare</span>
                                        </div>
                                        <div class="nk-tb-col">
                                            <span class="tb-amount">25.55 <span class="currency">USD</span></span>
                                        </div>
                                        <div class="nk-tb-col tb-col-xxl">
                                            <span class="tb-amount">15.00 <span class="currency">USD</span></span>
                                        </div>
                                        <div class="nk-tb-col tb-col-md">
                                            <span>40</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-xxl">
                                            <span class="tb-date">19/12/2020</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-md">
                                            <span class="tb-status text-warning">Low</span>
                                        </div>
                                        <div class="nk-tb-col nk-tb-col-tools">
                                            <ul class="nk-tb-actions gx-1 my-n1">
                                                <li class="me-n1">
                                                    <div class="dropdown">
                                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <ul class="link-list-opt no-bdr">
                                                                <li><a href="html/pharmacy/manufacturer.html"><em class="icon ni ni-home-fill"></em>Manufacturer</span></a></li>
                                                                <li><a href="html/pharmacy/medicine-details.html"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                                <li><a data-bs-toggle="modal" href="#editMedicine"><em class="icon ni ni-edit"></em><span>Edit </span></a></li>
                                                                <li><a data-bs-toggle="modal" href="#modalDelete"><em class="icon ni ni-trash"></em><span>Remove </span></a></li>
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
                                                <input type="checkbox" class="custom-control-input" id="pid8">
                                                <label class="custom-control-label" for="pid8"></label>
                                            </div>
                                        </div>
                                        <div class="nk-tb-col">
                                            <a href="html/pharmacy/medicine-details.html">
                                                <span class="tb-product">
                                                    <span class="title">EC Plus</span>
                                                </span>
                                            </a>
                                        </div>
                                        <div class="nk-tb-col tb-col-lg">
                                            <span>Vitamin E</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-xxl">
                                            <span class="tb-sub">UY3740</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-lg">
                                            <span>250mg</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-sm">
                                            <span>Vitamin</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-xxl">
                                            <span>lupin</span>
                                        </div>
                                        <div class="nk-tb-col">
                                            <span class="tb-amount">90.00 <span class="currency">USD</span></span>
                                        </div>
                                        <div class="nk-tb-col tb-col-xxl">
                                            <span class="tb-amount">80.00 <span class="currency">USD</span></span>
                                        </div>
                                        <div class="nk-tb-col tb-col-md">
                                            <span>0</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-xxl">
                                            <span class="tb-date">03/04/2021</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-md">
                                            <span class="tb-status text-danger">Out of stock</span>
                                        </div>
                                        <div class="nk-tb-col nk-tb-col-tools">
                                            <ul class="nk-tb-actions gx-1 my-n1">
                                                <li class="me-n1">
                                                    <div class="dropdown">
                                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <ul class="link-list-opt no-bdr">
                                                                <li><a href="html/pharmacy/manufacturer.html"><em class="icon ni ni-home-fill"></em>Manufacturer</span></a></li>
                                                                <li><a href="html/pharmacy/medicine-details.html"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                                <li><a data-bs-toggle="modal" href="#editMedicine"><em class="icon ni ni-edit"></em><span>Edit </span></a></li>
                                                                <li><a data-bs-toggle="modal" href="#modalDelete"><em class="icon ni ni-trash"></em><span>Remove </span></a></li>
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
                                                <input type="checkbox" class="custom-control-input" id="pid9">
                                                <label class="custom-control-label" for="pid9"></label>
                                            </div>
                                        </div>
                                        <div class="nk-tb-col">
                                            <a href="html/pharmacy/medicine-details.html">
                                                <span class="tb-product">
                                                    <span class="title">Acetylsalicylic Acid</span>
                                                </span>
                                            </a>
                                        </div>
                                        <div class="nk-tb-col tb-col-lg">
                                            <span>Aspirin</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-xxl">
                                            <span class="tb-sub">UY3735</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-lg">
                                            <span>1ml</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-sm">
                                            <span>Syrup</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-xxl">
                                            <span>Sun</span>
                                        </div>
                                        <div class="nk-tb-col">
                                            <span class="tb-amount">30.00 <span class="currency">USD</span></span>
                                        </div>
                                        <div class="nk-tb-col tb-col-xxl">
                                            <span class="tb-amount">25.25.00 <span class="currency">USD</span></span>
                                        </div>
                                        <div class="nk-tb-col tb-col-md">
                                            <span>50</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-xxl">
                                            <span class="tb-date">02/04/2022</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-md">
                                            <span class="tb-status text-warning">Low</span>
                                        </div>
                                        <div class="nk-tb-col nk-tb-col-tools">
                                            <ul class="nk-tb-actions gx-1 my-n1">
                                                <li class="me-n1">
                                                    <div class="dropdown">
                                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <ul class="link-list-opt no-bdr">
                                                                <li><a href="html/pharmacy/manufacturer.html"><em class="icon ni ni-home-fill"></em>Manufacturer</span></a></li>
                                                                <li><a href="html/pharmacy/medicine-details.html"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                                <li><a data-bs-toggle="modal" href="#editMedicine"><em class="icon ni ni-edit"></em><span>Edit </span></a></li>
                                                                <li><a data-bs-toggle="modal" href="#modalDelete"><em class="icon ni ni-trash"></em><span>Remove </span></a></li>
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
                                                <input type="checkbox" class="custom-control-input" id="pid10">
                                                <label class="custom-control-label" for="pid10"></label>
                                            </div>
                                        </div>
                                        <div class="nk-tb-col">
                                            <a href="html/pharmacy/medicine-details.html">
                                                <span class="tb-product">
                                                    <span class="title">Voltaren</span>
                                                </span>
                                            </a>
                                        </div>
                                        <div class="nk-tb-col tb-col-lg">
                                            <span>Diclofenac</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-xxl">
                                            <span class="tb-sub">UY3730</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-lg">
                                            <span>1Kg</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-sm">
                                            <span>Syrup</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-xxl">
                                            <span>Healthcare</span>
                                        </div>
                                        <div class="nk-tb-col">
                                            <span class="tb-amount">22.40 <span class="currency">USD</span></span>
                                        </div>
                                        <div class="nk-tb-col tb-col-xxl">
                                            <span class="tb-amount">18.00 <span class="currency">USD</span></span>
                                        </div>
                                        <div class="nk-tb-col tb-col-md">
                                            <span>500</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-xxl">
                                            <span>12/12/2021</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-md">
                                            <span class="tb-status text-success">Available</span>
                                        </div>
                                        <div class="nk-tb-col nk-tb-col-tools">
                                            <ul class="nk-tb-actions gx-1 my-n1">
                                                <li class="me-n1">
                                                    <div class="dropdown">
                                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <ul class="link-list-opt no-bdr">
                                                                <li><a href="html/pharmacy/manufacturer.html"><em class="icon ni ni-home-fill"></em>Manufacturer</span></a></li>
                                                                <li><a href="html/pharmacy/medicine-details.html"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                                <li><a data-bs-toggle="modal" href="#editMedicine"><em class="icon ni ni-edit"></em><span>Edit </span></a></li>
                                                                <li><a data-bs-toggle="modal" href="#modalDelete"><em class="icon ni ni-trash"></em><span>Remove </span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div><!-- .nk-tb-list -->
                            </div>
                            <div class="card-inner">
                                <div class="nk-block-between-md g-3">
                                    <div class="g">
                                        <ul class="pagination justify-content-center justify-content-md-start">
                                            <li class="page-item"><a class="page-link" href="#"><em class="icon ni ni-chevrons-left"></em></a></li>
                                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><span class="page-link"><em class="icon ni ni-more-h"></em></span></li>
                                            <li class="page-item"><a class="page-link" href="#">6</a></li>
                                            <li class="page-item"><a class="page-link" href="#">7</a></li>
                                            <li class="page-item"><a class="page-link" href="#"><em class="icon ni ni-chevrons-right"></em></a></li>
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
                            </div>
                        </div>
                    </div>
                </div><!-- .nk-block -->
                <div class="nk-add-product toggle-slide toggle-slide-right" data-content="addProduct" data-toggle-screen="any" data-toggle-overlay="true" data-toggle-body="true" data-simplebar>
                    <div class="nk-block-head">
                        <div class="nk-block-head-content">
                            <h5 class="nk-block-title">New Product</h5>
                            <div class="nk-block-des">
                                <p>Add information and add new product.</p>
                            </div>
                        </div>
                    </div><!-- .nk-block-head -->
                    <div class="nk-block">
                        <div class="row g-3">
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="form-label" for="product-title">Product Title</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" id="product-title">
                                    </div>
                                </div>
                            </div>
                            <div class="col-mb-6">
                                <div class="form-group">
                                    <label class="form-label" for="regular-price">Regular Price</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" id="regular-price">
                                    </div>
                                </div>
                            </div>
                            <div class="col-mb-6">
                                <div class="form-group">
                                    <label class="form-label" for="sale-price">Sale Price</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" id="sale-price">
                                    </div>
                                </div>
                            </div>
                            <div class="col-mb-6">
                                <div class="form-group">
                                    <label class="form-label" for="stock">Stock</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" id="stock">
                                    </div>
                                </div>
                            </div>
                            <div class="col-mb-6">
                                <div class="form-group">
                                    <label class="form-label" for="SKU">SKU</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" id="SKU">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="form-label" for="category">Category</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" id="category">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="form-label" for="tags">Tags</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" id="tags">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="upload-zone small bg-lighter my-2">
                                    <div class="dz-message">
                                        <span class="dz-message-text">Drag and drop file</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary"><em class="icon ni ni-plus"></em><span>Add New</span></button>
                            </div>
                        </div>
                    </div><!-- .nk-block -->
                </div>
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
<!-- Edit Medicine-->
<div class="modal fade" tabindex="-1" role="dialog" id="editMedicine">
<div class="modal-dialog modal-lg" role="document">
<div class="modal-content">
<a href="#" class="close" data-bs-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
<div class="modal-body modal-body-md">
    <h5 class="modal-title">Edit Medicine</h5>
    <form action="#" class="mt-4">
        <div class="row g-gs">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="form-label" for="name">Medicine Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Medicine Name" required>
                </div>
            </div><!-- .col -->
            <div class="col-md-6">
                <div class="form-group">
                    <label class="form-label" for="generic">Generic name</label>
                    <input type="number" class="form-control" id="generic" placeholder="Generic Name">
                </div>
            </div><!-- .col -->
            <div class="col-md-6">
                <div class="form-group">
                    <label class="form-label" for="sKU">SKU</label>
                    <input type="email" class="form-control" id="sKU" placeholder="SKU">
                </div>
            </div><!-- .col -->
            <div class="col-md-6">
                <div class="form-group">
                    <label class="form-label" for="weight">Weight</label>
                    <input type="text" class="form-control" id="weight" placeholder="Weight">
                </div>
            </div><!-- .col -->
            <div class="col-md-6">
                <div class="form-group">
                    <label class="form-label">Category</label>
                    <div class="form-control-wrap">
                        <select class="form-select">
                            <option value="default_option">Select</option>
                            <option value="option_select_category">Tablet</option>
                            <option value="option_select_category">Syrup</option>
                            <option value="option_select_category">Vitamin</option>
                            <option value="option_select_category">Inhealer</option>
                        </select>
                    </div>
                </div>
            </div><!-- .col -->
            <div class="col-md-6">
                <div class="form-group">
                    <label class="form-label">Manufacturer</label>
                    <div class="form-control-wrap">
                        <select class="form-select">
                            <option value="default_option">Select</option>
                            <option value="option_select_manufacturer">Healthcare</option>
                            <option value="option_select_category">Square</option>
                            <option value="option_select_category">lupin</option>
                            <option value="option_select_category">Sun</option>
                        </select>
                    </div>
                </div>
            </div><!-- .col -->
            <div class="col-md-6">
                <div class="form-group">
                    <label class="form-label" for="price">Price</label>
                    <input type="number" class="form-control" id="price" placeholder="Price" required>
                </div>
            </div><!-- .col -->
            <div class="col-md-6">
                <div class="form-group">
                    <label class="form-label" for="manufacturer Price">Manufacturer Price</label>
                    <input type="number" class="form-control" id="manufacturer Price" placeholder="Manufacturer Price" required>
                </div>
            </div><!-- .col -->
            <div class="col-md-6">
                <div class="form-group">
                    <label class="form-label">Stock(Box)</label>
                    <div class="form-control-wrap number-spinner-wrap">
                        <button class="btn btn-icon btn-outline-light number-spinner-btn number-minus" data-number="minus"><em class="icon ni ni-minus"></em></button>
                        <input type="number" class="form-control number-spinner" value="0">
                        <button class="btn btn-icon btn-outline-light number-spinner-btn number-plus" data-number="plus"><em class="icon ni ni-plus"></em></button>
                    </div>
                </div>
            </div><!-- .col -->
            <div class="col-md-6">
                <div class="form-group">
                    <label class="form-label">Expire Date</label>
                    <div class="form-control-wrap">
                        <div class="form-icon form-icon-right">
                            <em class="icon ni ni-calendar"></em>
                        </div>
                        <input type="text" class="form-control date-picker" data-date-format="yyyy-mm-dd" placeholder="yyyy-mm-dd">
                    </div>
                </div>
            </div><!--col-->
            <div class="col-12">
                <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                    <li>
                        <a href="#" data-bs-dismiss="modal" class="btn btn-primary">Edit Medicine</a>
                    </li>
                    <li>
                        <a href="#" data-bs-dismiss="modal" class="link link-light">Cancel</a>
                    </li>
                </ul>
            </div>
        </div>
    </form>
</div><!-- .modal-body -->
</div><!-- .modal-content -->
</div><!-- .modal-dialog -->
</div><!-- .modal -->

@endsection
