<div class="nk-sidebar" data-content="sidebarMenu">

    <div class="nk-sidebar-main is-light">
        <div class="nk-sidebar-inner" data-simplebar>
            <div class="nk-menu-content menu-active" data-content="navPharmacy">

                    <div class=" d-flex mx-auto">
                        <a href="{{ route('dashboard')}}" class="logo-link">
                            {{-- <img class="logo-light logo-img" src="./images/logo-small.png" srcset="./images/logo-small2x.png 2x" alt="logo"> --}}
                            <img class="logo-dark logo-img" src="./images/logo-dark-small.png" srcset="./images/logo-dark-small2x.png 2x" alt="logo-dark">

                        </a>
                        <h5 class="title">Pharmacy Management</h5>

                    </div>



                <ul class="nk-menu">
                    <li class="nk-menu-item">
                        <a href="{{ route('dashboard')}}" class="nk-menu-link">
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
                                <a href="{{ url('/customer.addcustomer')}}" class="nk-menu-link"><span class="nk-menu-text">Add Customer</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{ url('/customer.customerlist')}}" class="nk-menu-link"><span class="nk-menu-text">Customer List</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{ url('customer.customerledger')}}" class="nk-menu-link"><span class="nk-menu-text">Customer Ledger</span></a>
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
                                <a href="{{ url('medicine.addmedicine')}}" class="nk-menu-link"><span class="nk-menu-text">Add Medicine</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{ url('medicine.medicinelist')}}" class="nk-menu-link"><span class="nk-menu-text">Medicine List</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{ url('medicine.medicinedetails')}}" class="nk-menu-link"><span class="nk-menu-text">Medicine Details</span></a>
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
                                <a href="{{ url('manufacturer.addmanufacturer')}}" class="nk-menu-link"><span class="nk-menu-text">Add Manufacturer </span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{ url('manufacturer.manufacturerlist')}}" class="nk-menu-link"><span class="nk-menu-text">Manufacturer List</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{ url('manufacturer.manufacturerledger')}}" class="nk-menu-link"><span class="nk-menu-text">Manufacturer Ledger</span></a>
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
                                <a href="{{ url('returns.addwastagereturn')}}" class="nk-menu-link"><span class="nk-menu-text">Add Wastage Return</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{ url('returns.wastagereturnlist')}}" class="nk-menu-link"><span class="nk-menu-text">Wastage Return List</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{ url('returns.addmanufacturerreturn')}}" class="nk-menu-link"><span class="nk-menu-text">Add Manufacture Return</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{ url('returns.manufacturerreturnlist')}}" class="nk-menu-link"><span class="nk-menu-text">Manufacturer Return List</span></a>
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
                                <a href="{{ url('human-resource.employee')}}" class="nk-menu-link"><span class="nk-menu-text">Employee</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{ url('human-resource.employeesprofile')}}" class="nk-menu-link"><span class="nk-menu-text">Employee's Profile</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{ url('human-resource.attendance')}}" class="nk-menu-link"><span class="nk-menu-text">Attendence</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{ url('human-resource.salary')}}" class="nk-menu-link"><span class="nk-menu-text">Salary</span></a>
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
                                <a href="{{ url('finance.income')}}" class="nk-menu-link"><span class="nk-menu-text">Income</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{ url('finance.expense')}}" class="nk-menu-link"><span class="nk-menu-text">Expence</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{ url('finance.invoicelist')}}" class="nk-menu-link"><span class="nk-menu-text">Invoice List</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{ url('finance.invoicedetails')}}" class="nk-menu-link"><span class="nk-menu-text">Invoice Details</span></a>
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
                                <a href="{{ url('report.salesreport')}}" class="nk-menu-link"><span class="nk-menu-text">Sales Report</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{ url('report.purchasereport')}}" class="nk-menu-link"><span class="nk-menu-text">Purchase Report</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{ url('report.stockreport')}}" class="nk-menu-link"><span class="nk-menu-text">Stock Report</span></a>
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

