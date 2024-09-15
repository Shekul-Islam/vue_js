<div class="nk-sidebar" data-content="sidebarMenu">
    <div class="nk-sidebar-bar">
        <div class="nk-apps-brand">
            <a href="<?php echo e(url('/admin-layout.home')); ?>" class="logo-link">
                <img class="logo-light logo-img" src="./images/logo-small.png" srcset="./images/logo-small2x.png 2x" alt="logo">
                <img class="logo-dark logo-img" src="./images/logo-dark-small.png" srcset="./images/logo-dark-small2x.png 2x" alt="logo-dark">
            </a>
        </div>
        <div class="nk-sidebar-element">
            <div class="nk-sidebar-body">
                <div class="nk-sidebar-content" data-simplebar>
                    <div class="nk-sidebar-menu">
                        <!-- Menu -->
                        <ul class="nk-menu apps-menu">
                            <li class="nk-menu-item active">
                                <a href="#" class="nk-menu-link nk-menu-switch" data-target="navPharmacy">
                                    <span class="nk-menu-icon"><em class="icon ni ni-capsule"></em></span>
                                </a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="#" class="nk-menu-link nk-menu-switch" data-target="navHospital">
                                    <span class="nk-menu-icon"><em class="icon ni ni-plus-medi"></em></span>
                                </a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="#" class="nk-menu-link nk-menu-switch" data-target="navDashboards">
                                    <span class="nk-menu-icon"><em class="icon ni ni-dashboard"></em></span>
                                </a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="#" class="nk-menu-link nk-menu-switch" data-target="navApps">
                                    <span class="nk-menu-icon"><em class="icon ni ni-menu-circled"></em></span>
                                </a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="#" class="nk-menu-link nk-menu-switch" data-target="navPages">
                                    <span class="nk-menu-icon"><em class="icon ni ni-files"></em></span>
                                </a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="#" class="nk-menu-link nk-menu-switch" data-target="navMisc">
                                    <span class="nk-menu-icon"><em class="icon ni ni-server"></em></span>
                                </a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="#" class="nk-menu-link nk-menu-switch" data-target="navError">
                                    <span class="nk-menu-icon"><em class="icon ni ni-alert-c"></em></span>
                                </a>
                            </li>
                            <li class="nk-menu-hr"></li>
                            <li class="nk-menu-item">
                                <a href="#" class="nk-menu-link nk-menu-switch" data-target="navComponents">
                                    <span class="nk-menu-icon"><em class="icon ni ni-layers"></em></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="nk-sidebar-footer">
                        <ul class="nk-menu nk-menu-md apps-menu">
                            <li class="nk-menu-item">
                                <a href="#" class="nk-menu-link" title="Settings">
                                    <span class="nk-menu-icon"><em class="icon ni ni-setting"></em></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="nk-sidebar-profile nk-sidebar-profile-fixed dropdown">
                    <a href="#" data-bs-toggle="dropdown" data-offset="50,-50">
                        <div class="user-avatar">
                            <span>AB</span>
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-md ml-4">
                        <div class="dropdown-inner user-card-wrap d-none d-md-block">
                            <div class="user-card">
                                <div class="user-avatar">
                                    <span>AB</span>
                                </div>
                                <div class="user-info">
                                    <span class="lead-text">Abu Bin Ishtiyak</span>
                                    <span class="sub-text text-soft">info@softnio.com</span>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown-inner">
                            <ul class="link-list">
                                <li><a href="html/user-profile-regular.html"><em class="icon ni ni-user-alt"></em><span>View Profile</span></a></li>
                                <li><a href="html/user-profile-setting.html"><em class="icon ni ni-setting-alt"></em><span>Account Setting</span></a></li>
                                <li><a href="html/user-profile-activity.html"><em class="icon ni ni-activity-alt"></em><span>Login Activity</span></a></li>
                            </ul>
                        </div>
                        <div class="dropdown-inner">
                            <ul class="link-list">
                                <li><a href="#"><em class="icon ni ni-signout"></em><span>Sign out</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="nk-sidebar-main is-light">
        <div class="nk-sidebar-inner" data-simplebar>
            <div class="nk-menu-content menu-active" data-content="navPharmacy">
                <h5 class="title">Pharmacy</h5>
                <ul class="nk-menu">
                    <li class="nk-menu-item">
                        <a href="<?php echo e(url('/home')); ?>" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-dashboard-fill"></em></span>
                            <span class="nk-menu-text">Dashboard</span>
                        </a>
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-icon"><em class="icon ni ni-users-fill"></em></span>
                            <span class="nk-menu-text">Customer</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a href="<?php echo e(url('/customer.addcustomer')); ?>" class="nk-menu-link"><span class="nk-menu-text">Add Customer</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="html/pharmacy/customer.html" class="nk-menu-link"><span class="nk-menu-text">Customer List</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="html/pharmacy/customer-ledger.html" class="nk-menu-link"><span class="nk-menu-text">Customer Ledger</span></a>
                            </li>
                        </ul><!-- .nk-menu-sub -->
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-icon"><em class="icon ni ni-capsule-fill"></em></span>
                            <span class="nk-menu-text">Medicine</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a href="html/pharmacy/add-medicine.html" class="nk-menu-link"><span class="nk-menu-text">Add Medicine</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="html/pharmacy/medicine-list.html" class="nk-menu-link"><span class="nk-menu-text">Medicine List</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="html/pharmacy/medicine-details.html" class="nk-menu-link"><span class="nk-menu-text">Medicine Details</span></a>
                            </li>
                        </ul><!-- .nk-menu-sub -->
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-icon"><em class="icon ni ni-home-fill"></em></span>
                            <span class="nk-menu-text">Manufacturer</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a href="html/pharmacy/manufacturer.html" class="nk-menu-link"><span class="nk-menu-text">Manufacturer List</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="html/pharmacy/manufacturer-ledger.html" class="nk-menu-link"><span class="nk-menu-text">Manufacturer Ledger</span></a>
                            </li>
                        </ul><!-- .nk-menu-sub -->
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-icon"><em class="icon ni ni-repeat"></em></span>
                            <span class="nk-menu-text">Return</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a href="html/pharmacy/add-wastage-return.html" class="nk-menu-link"><span class="nk-menu-text">Add Wastage Return</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="html/pharmacy/wastage-return.html" class="nk-menu-link"><span class="nk-menu-text">Wastage Return List</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="html/pharmacy/add-manufacturer-return.html" class="nk-menu-link"><span class="nk-menu-text">Add Manufacture Return</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="html/pharmacy/manufacturer-return.html" class="nk-menu-link"><span class="nk-menu-text">Manufacturer Return List</span></a>
                            </li>
                        </ul><!-- .nk-menu-sub -->
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-icon"><em class="icon ni ni-user-circle-fill"></em></span>
                            <span class="nk-menu-text">Human resource</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a href="html/pharmacy/member.html" class="nk-menu-link"><span class="nk-menu-text">Member</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="html/pharmacy/members-profile-regular.html" class="nk-menu-link"><span class="nk-menu-text">Members Profile</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="html/pharmacy/attendence.html" class="nk-menu-link"><span class="nk-menu-text">Attendence</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="html/pharmacy/salary.html" class="nk-menu-link"><span class="nk-menu-text">Salary</span></a>
                            </li>
                        </ul><!-- .nk-menu-sub -->
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-icon"><em class="icon ni ni-coin-alt-fill"></em></span>
                            <span class="nk-menu-text">Finance</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a href="html/pharmacy/income-list.html" class="nk-menu-link"><span class="nk-menu-text">Income</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="html/pharmacy/expense-list.html" class="nk-menu-link"><span class="nk-menu-text">Expence</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="html/pharmacy/invoice-list.html" class="nk-menu-link"><span class="nk-menu-text">Invoice List</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="html/pharmacy/invoice-details.html" class="nk-menu-link"><span class="nk-menu-text">Invoice Details</span></a>
                            </li>
                        </ul><!-- .nk-menu-sub -->
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-icon"><em class="icon ni ni-activity-round-fill"></em></span>
                            <span class="nk-menu-text">Report</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a href="html/pharmacy/sales-report.html" class="nk-menu-link"><span class="nk-menu-text">Sales Report</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="html/pharmacy/purchase-report.html" class="nk-menu-link"><span class="nk-menu-text">Purchase Report</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="html/pharmacy/stock-report.html" class="nk-menu-link"><span class="nk-menu-text">Stock Report</span></a>
                            </li>
                        </ul><!-- .nk-menu-sub -->
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item">
                        <a href="html/pharmacy/support.html" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-msg-fill"></em></span>
                            <span class="nk-menu-text">Support</span>
                        </a>
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item">
                        <a href="html/pharmacy/general-settings.html" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-setting-fill"></em></span>
                            <span class="nk-menu-text">Setting</span>
                        </a>
                    </li><!-- .nk-menu-item -->
                </ul><!-- .nk-menu -->
            </div>

        </div>
    </div>
</div>

<?php /**PATH D:\xampp\htdocs\laravel\pharmacy-by-laravel\resources\views/admin-layout/sidebar.blade.php ENDPATH**/ ?>