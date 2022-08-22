<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{asset('backend/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{asset('backend/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{Auth()->user()->name}}</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                       with font-awesome or any other icon font library -->
                <li class="nav-item menu-open">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt" style="color:#fa79ba"></i>
                        <p>
                            Dashboard

                        </p>
                    </a>

                </li>
                @if(auth()->user()->roleId=== 1)

                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <!-- <i class="nav-icon fas fa-copy"></i> -->
                            <!-- <i class="fa-solid fa-list"></i> -->
                            <i class="nav-icon fa-solid fa-list" style="color:#3fff00"></i>
                            <p>
                                SALES
                                <i class="fas fa-angle-left right" style="color:#3fff00"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Category</i></p>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Total Sales</i></p>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Sales Return</i></p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <!-- <i class="nav-icon fas fa-copy"></i> -->
                            <i class="nav-icon fa-solid fa-bag-shopping" style="color:#fa79ba"></i>
                            <p>
                                PURCHASES
                                <i class="fas fa-angle-left right" style="color:#fa79ba"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('all-Project-Categories')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Purchase Proposal</i></p>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('add-project-category')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Approved Purchase Proposal</i></p>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('add-project-category')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p> New Purchase</i></p>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('add-project-category')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p> Total Purchase List</i></p>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('add-project-category')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Purchase Returns List</i></p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <!-- <i class="nav-icon fas fa-copy"></i> -->
                            <i class="nav-icon fa-brands fa-microsoft" style="color:#3fff00"></i>
                            <p>
                                CRM
                                <i class="fas fa-angle-left right" style="color:#3fff00"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Leeds<i class="fas fa-angle-left right"></i></p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="{{route('leeds')}}" class="nav-link">
                                            <i class="nav-icon"></i>
                                            <p>New Leeds</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{route('leedsList')}}" class="nav-link">
                                            <i class="nav-icon"></i>
                                            <p>All Leeds List</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{route('allLeedsGroup')}}" class="nav-link">
                                            <i class="nav-icon"></i>
                                            <p>Leeds Group</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('all-success-leeds')}}" class="nav-link">
                                    <i class="far fa-dot-circle nav-icon"></i>
                                    <p>Success Leeds</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/layout/boxed.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Clients<i class="fas fa-angle-left right"></i></p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="nav-icon"></i>
                                            <p>New Clients</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="nav-icon"></i>
                                            <p>All Clients List</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="nav-icon"></i>
                                            <p>Clients Group</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <!-- <i class="nav-icon fas fa-copy"></i> -->
                            <i class="nav-icon fa-brands fa-product-hunt" style="color:#fa79ba"></i>
                            <p>
                                PRODUCTS
                                <i class="fas fa-angle-left right" style="color:#fa79ba"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="/add-product-category" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Category</i></p>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('add-project-category')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p> Sub Category</i></p>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('add-project-category')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p> Units</i></p>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('add-project-category')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p> Brands</i></p>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('add-project-category')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p> Model</i></p>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('add-project-category')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p> Size</i></p>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('add-project-category')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p> Color </i></p>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('add-project-category')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p> Weight</i></p>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('add-project-category')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p> Add Products</i></p>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('add-project-category')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p> Products List</i></p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <!-- <i class="nav-icon fas fa-copy"></i> -->
                            <i class="nav-icon fa-solid fa-ticket" style="color:#3fff00"></i>
                            <p>
                                SUPPLIERS
                                <i class="fas fa-angle-left right" style="color:#3fff00"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('all-Project-Categories')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p> Category</i></p>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('add-project-category')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p> Sub Category</i></p>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('add-project-category')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p> Supplier Groups </i></p>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('add-project-category')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p> Add Supplier</i></p>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('add-project-category')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p> Suppliers List</i></p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <!-- <i class="nav-icon fas fa-copy"></i> -->
                            <i class="nav-icon fa-solid fa-list-check" style="color:#fa79ba"></i>
                            <p>
                                PROJECT MANAGEMENT
                                <i class="fas fa-angle-left right" style="color:#fa79ba"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('all-Project-Categories')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p> Category </i></p>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('add-project-category')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p> New Project </i></p>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('add-project-category')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p> All Project List </i></p>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('add-project-category')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p> Project Estimate </i></p>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('add-project-category')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p> Upcoming Project </i></p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <!-- <i class="nav-icon fas fa-copy"></i> -->
                            <i class="nav-icon fa-solid fa-anchor-lock" style="color:#3fff00"></i>
                            <p>
                                INVENTORY MANAGEMENT
                                <i class="fas fa-angle-left right" style="color:#3fff00"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('all-Project-Categories')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p> Stock List </i></p>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('add-project-category')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p> Stock Transfers </p>
                                    <i class="fas fa-angle-left right" style="color:#3fff00"></i>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="{{route('all-Project-Categories')}}" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p> Add Stock Transfer </i></p>
                                        </a>
                                    </li>
                                </ul>

                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="{{route('all-Project-Categories')}}" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p> All Stock Transfer List </i></p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('add-project-category')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p> Stock Adjustments</i></p>
                                    <i class="fas fa-angle-left right" style="color:#3fff00"></i>
                                </a>
                                <ul class="nav nav-treeview icon-left-padding">
                                    <li class="nav-item">
                                        <a href="{{route('all-Project-Categories')}}" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p> Add Stock Adjustment </i></p>
                                        </a>
                                    </li>
                                </ul>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="{{route('all-Project-Categories')}}" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p> All Stock Adjustments list </i></p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa-solid fa-file-invoice" style="color:#fa79ba"></i>
                            <p>
                                ACCOUNT
                                <i class="fas fa-angle-left right" style="color:#fa79ba"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Expenses</i></p>
                                    <i class="fas fa-angle-left right" style="color:#3fff00"></i>
                                </a>
                                <ul class="nav nav-treeview icon-left-padding">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p> Category </i></p>
                                        </a>
                                    </li>
                                </ul>
                                <ul class="nav nav-treeview icon-left-padding">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p> Add Expense </i></p>
                                        </a>
                                    </li>
                                </ul>
                                <ul class="nav nav-treeview icon-left-padding">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p> All Expenses List</i></p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p> Transfers</i></p>
                                    <i class="fas fa-angle-left right" style="color:#3fff00"></i>
                                </a>
                                <ul class="nav nav-treeview icon-left-padding">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p> New Transfer </i></p>
                                        </a>
                                    </li>
                                </ul>
                                <ul class="nav nav-treeview icon-left-padding">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p> All Transfers List</i></p>
                                        </a>
                                    </li>
                                </ul>

                            </li>
                        </ul>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p> Accounts </i></p>
                                    <i class="fas fa-angle-left right" style="color:#3fff00"></i>
                                </a>
                                <ul class="nav nav-treeview icon-left-padding">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p> Add Account </i></p>
                                        </a>
                                    </li>
                                </ul>
                                <ul class="nav nav-treeview icon-left-padding">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p> All Accounts List</i></p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p> Debit Voucher </i></p>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p> Credit Voucher </i></p>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p> Payment </i></p>
                                    <i class="fas fa-angle-left right" style="color:#3fff00"></i>
                                </a>
                                <ul class="nav nav-treeview icon-left-padding">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p> Suppliers Payment </i></p>
                                        </a>
                                    </li>
                                </ul>
                                <ul class="nav nav-treeview icon-left-padding">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="nav-icon fa-solid fa-arrow-right" style="color:#3fff00"></i>
                                            <p> Sales Payment </i></p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p> Profit and Loss Account </i></p>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p> Banks </i></p>
                                    <i class="fas fa-angle-left right" style="color:#3fff00"></i>
                                </a>
                                <ul class="nav nav-treeview icon-left-padding">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="nav-icon fa-solid fa-arrow-right" style="color:#3fff00"></i>
                                            <p> Bank Name </i></p>
                                        </a>
                                    </li>
                                </ul>
                                <ul class="nav nav-treeview icon-left-padding">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="nav-icon fa-solid fa-arrow-right" style="color:#3fff00"></i>
                                            <p> Deposit </i></p>
                                        </a>
                                    </li>
                                </ul>
                                <ul class="nav nav-treeview icon-left-padding">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="nav-icon fa-solid fa-arrow-right" style="color:#3fff00"></i>
                                            <p> Withdraw </i></p>
                                        </a>
                                    </li>
                                </ul>
                                <ul class="nav nav-treeview icon-left-padding">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="nav-icon fa-solid fa-arrow-right" style="color:#3fff00"></i>
                                            <p> Bank Balance </i></p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <!-- <i class="nav-icon fas fa-copy"></i> -->
                            <i class="nav-icon fa-solid fa-person-dress-burst" style="color:#3fff00"></i>
                            <p>
                                HRM
                                <i class="fas fa-angle-left right" style="color:#3fff00"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Designation</i></p>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Department</i></p>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Employee</i></p>
                                    <i class="fas fa-angle-left right" style="color:#fa79ba"></i>
                                </a>
                                <ul class="nav nav-treeview icon-left-padding">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="nav-icon fa-solid fa-arrow-right" style="color:#3fff00"></i>
                                            <p> Bank Name </i></p>
                                        </a>
                                    </li>
                                </ul>
                                <ul class="nav nav-treeview icon-left-padding">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="nav-icon fa-solid fa-arrow-right" style="color:#3fff00"></i>
                                            <p> Bank Name </i></p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Attendance</i></p>
                                    <i class="fas fa-angle-left right" style="color:#fa79ba"></i>
                                </a>
                                <ul class="nav nav-treeview icon-left-padding">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="nav-icon fa-solid fa-arrow-right" style="color:#3fff00"></i>
                                            <p> Bank Name </i></p>
                                        </a>
                                    </li>
                                </ul>
                                <ul class="nav nav-treeview icon-left-padding">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="nav-icon fa-solid fa-arrow-right" style="color:#3fff00"></i>
                                            <p> Bank Name </i></p>
                                        </a>
                                    </li>
                                </ul>
                                <ul class="nav nav-treeview icon-left-padding">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="nav-icon fa-solid fa-arrow-right" style="color:#3fff00"></i>
                                            <p> Bank Name </i></p>
                                        </a>
                                    </li>
                                </ul>
                                <ul class="nav nav-treeview icon-left-padding">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="nav-icon fa-solid fa-arrow-right" style="color:#3fff00"></i>
                                            <p> Bank Name </i></p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Payroll</i></p>
                                    <i class="fas fa-angle-left right" style="color:#fa79ba"></i>
                                </a>
                                <ul class="nav nav-treeview icon-left-padding">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="nav-icon fa-solid fa-arrow-right" style="color:#3fff00"></i>
                                            <p> Bank Name </i></p>
                                        </a>
                                    </li>
                                </ul>
                                <ul class="nav nav-treeview icon-left-padding">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="nav-icon fa-solid fa-arrow-right" style="color:#3fff00"></i>
                                            <p> Bank Name </i></p>
                                        </a>
                                    </li>
                                </ul>
                                <ul class="nav nav-treeview icon-left-padding">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="nav-icon fa-solid fa-arrow-right" style="color:#3fff00"></i>
                                            <p> Bank Name </i></p>
                                        </a>
                                    </li>
                                </ul>
                                <ul class="nav nav-treeview icon-left-padding">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="nav-icon fa-solid fa-arrow-right" style="color:#3fff00"></i>
                                            <p> Bank Name </i></p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Leaves</i></p>
                                    <i class="fas fa-angle-left right" style="color:#fa79ba"></i>
                                </a>
                                <ul class="nav nav-treeview icon-left-padding">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="nav-icon fa-solid fa-arrow-right" style="color:#3fff00"></i>
                                            <p> Bank Name </i></p>
                                        </a>
                                    </li>
                                </ul>
                                <ul class="nav nav-treeview icon-left-padding">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="nav-icon fa-solid fa-arrow-right" style="color:#3fff00"></i>
                                            <p> Bank Name </i></p>
                                        </a>
                                    </li>
                                </ul>
                                <ul class="nav nav-treeview icon-left-padding">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="nav-icon fa-solid fa-arrow-right" style="color:#3fff00"></i>
                                            <p> Bank Name </i></p>
                                        </a>
                                    </li>
                                </ul>
                                <ul class="nav nav-treeview icon-left-padding">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="nav-icon fa-solid fa-arrow-right" style="color:#3fff00"></i>
                                            <p> Bank Name </i></p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Recruitment</i></p>
                                    <i class="fas fa-angle-left right" style="color:#fa79ba"></i>
                                </a>
                                <ul class="nav nav-treeview icon-left-padding">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="nav-icon fa-solid fa-arrow-right" style="color:#3fff00"></i>
                                            <p> Bank Name </i></p>
                                        </a>
                                    </li>
                                </ul>
                                <ul class="nav nav-treeview icon-left-padding">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="nav-icon fa-solid fa-arrow-right" style="color:#3fff00"></i>
                                            <p> Bank Name </i></p>
                                        </a>
                                    </li>
                                </ul>
                                <ul class="nav nav-treeview icon-left-padding">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="nav-icon fa-solid fa-arrow-right" style="color:#3fff00"></i>
                                            <p> Bank Name </i></p>
                                        </a>
                                    </li>
                                </ul>
                                <ul class="nav nav-treeview icon-left-padding">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="nav-icon fa-solid fa-arrow-right" style="color:#3fff00"></i>
                                            <p> Bank Name </i></p>
                                        </a>
                                    </li>
                                </ul>
                                <ul class="nav nav-treeview icon-left-padding">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="nav-icon fa-solid fa-arrow-right" style="color:#3fff00"></i>
                                            <p> Bank Name </i></p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Loans</i></p>
                                    <i class="fas fa-angle-left right" style="color:#fa79ba"></i>
                                </a>
                                <ul class="nav nav-treeview icon-left-padding">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="nav-icon fa-solid fa-arrow-right" style="color:#3fff00"></i>
                                            <p> Bank Name </i></p>
                                        </a>
                                    </li>
                                </ul>
                                <ul class="nav nav-treeview icon-left-padding">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="nav-icon fa-solid fa-arrow-right" style="color:#3fff00"></i>
                                            <p> Bank Name </i></p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Awards</i></p>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Others</i></p>
                                    <i class="fas fa-angle-left right" style="color:#fa79ba"></i>
                                </a>
                                <ul class="nav nav-treeview icon-left-padding">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="nav-icon fa-solid fa-arrow-right" style="color:#3fff00"></i>
                                            <p> Transfers </i></p>
                                        </a>
                                    </li>
                                </ul>
                                <ul class="nav nav-treeview icon-left-padding">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="nav-icon fa-solid fa-arrow-right" style="color:#3fff00"></i>
                                            <p> Resignation</i></p>
                                        </a>
                                    </li>
                                </ul>
                                <ul class="nav nav-treeview icon-left-padding">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="nav-icon fa-solid fa-arrow-right" style="color:#3fff00"></i>
                                            <p> Promotions </i></p>
                                        </a>
                                    </li>
                                </ul>
                                <ul class="nav nav-treeview icon-left-padding">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="nav-icon fa-solid fa-arrow-right" style="color:#3fff00"></i>
                                            <p> Complaints </i></p>
                                        </a>
                                    </li>
                                </ul>
                                <ul class="nav nav-treeview icon-left-padding">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="nav-icon fa-solid fa-arrow-right" style="color:#3fff00"></i>
                                            <p>Warnings </i></p>
                                        </a>
                                    </li>
                                </ul>
                                <ul class="nav nav-treeview icon-left-padding">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="nav-icon fa-solid fa-arrow-right" style="color:#3fff00"></i>
                                            <p> Terminations </i></p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <!-- <i class="nav-icon fas fa-copy"></i> -->
                            <i class="nav-icon fa-regular fa-file" style="color:#fa79ba"></i>
                            <p>
                                REPORT
                                <i class="fas fa-angle-left right" style="color:#fa79ba"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Sale Payment Report </i></p>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Purchase Report </i></p>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Leeds Report</i></p>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Meeting Report </i></p>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Clients Report </i></p>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Project Report</i></p>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Profit & Loss Report</i></p>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Expense Report</i></p>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Due Report</i></p>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Transaction Report</i></p>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Employee Report</i></p>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Attendance Report</i></p>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Leave Report </i></p>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Grant Loan Report</i></p>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Loan Installment Report</i></p>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Payroll Report</i></p>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Sales Report</i></p>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Sale Payment Report</i></p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <!-- <i class="nav-icon fas fa-copy"></i> -->
                            <i class="nav-icon fa-solid fa-people-arrows" style="color:#3fff00"></i>
                            <p>
                                FOLLOW UP
                                <i class="fas fa-angle-left right" style="color:#3fff00"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>SMS</i></p>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Email</i></p>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Whatsapp</i></p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <!-- <i class="nav-icon fas fa-copy"></i> -->
                            <i class="nav-icon fa-solid fa-users" style="color:#fa79ba"></i>
                            <p>
                                USER MANAGEMENT
                                <i class="fas fa-angle-left right" style="color:#fa79ba"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('roleList')}}"  class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Role</i></p>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('userList')}}"  class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>User</i></p>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="#"  class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Menu Permission</i></p>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="#"  class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Manage Profile</i></p>
                                    <i class="fas fa-angle-left right" style="color:#fa79ba"></i>
                                </a>
                                <ul class="nav nav-treeview icon-left-padding">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="nav-icon fa-solid fa-arrow-right" style="color:#3fff00"></i>
                                            <p>Your Profile </i></p>
                                        </a>
                                    </li>
                                </ul>
                                <ul class="nav nav-treeview icon-left-padding">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="nav-icon fa-solid fa-arrow-right" style="color:#3fff00"></i>
                                            <p> Change Password </i></p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <!-- <i class="nav-icon fas fa-copy"></i> -->
                            <i class="nav-icon fa-solid fa-user-astronaut" style="color:#3fff00"></i>
                            <p>
                                COMMISSION MANAGEMENT
                                <i class="fas fa-angle-left right" style="color:#3fff00"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="#"  class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Sale Commission</p>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="#"  class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Join Commission</i></p>
                                </a>
                            </li>
                        </ul>
                    </li>





                @endif
                <li class="nav-item">
                    <a class="dropdown-item text-primary" href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}<i class="fas fa-lock nav-icon text-primary"></i>
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

