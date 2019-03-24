   <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
     <div class="brand-logo">
      <a href="{{ url('/login')}}">
       <img src="{{ asset('admin') }}/assets/images/logo.png" class="logo-icon" alt="logo icon">
     </a>
	 </div>
	 <ul class="sidebar-menu do-nicescrol">
        <li><a href="{{ url('/login')}}" class="waves-effect">
          <i class="icon-home"></i> <span> Dashboard</span> <i class=""></i>
        </a></li>

      <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="ti-layout-accordion-list"></i>
          <span>Invoice</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
        <li><a href="{{ url('/invoice/new') }}"><i class="fa fa-circle-o"></i> New Invoice</a></li>
        <li><a href="{{ url('/invoice/manage') }}"><i class="fa fa-circle-o"></i> Manage Invoice</a></li>
        <li><a href="{{ url('/invoice/pos') }}"><i class="fa fa-circle-o"></i> POS Invoice</a></li>
        </ul>
      </li>  

      <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="ti-tag"></i>
          <span>Category</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
  		  <li><a href="{{ url('/category/save') }}"><i class="fa fa-circle-o"></i> Add Category</a></li>
  		  <li><a href="{{ url('/category/manage') }}"><i class="fa fa-circle-o"></i> Manage Category</a></li>
        </ul>
      </li>

      <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="ti-bag"></i>
          <span>Product</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
        <li><a href="{{ url('/product/add') }}"><i class="fa fa-circle-o"></i> Add Product</a></li>
        <li><a href="{{ url('/product/manage') }}"><i class="fa fa-circle-o"></i> Manage Product</a></li>
        </ul>
      </li>

      <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="fa fa-handshake-o"></i>
          <span>Customer</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
        <li><a href="{{ url('/customer/add')}}"><i class="fa fa-circle-o"></i> Add Customer</a></li>
        <li><a href="{{ url('/customer/manage')}}"><i class="fa fa-circle-o"></i> Manage Customer</a></li>
        <li><a href="{{ url('/customer/credit')}}"><i class="fa fa-circle-o"></i> Credit Customer</a></li>
        <li><a href="{{ url('/customer/paid')}}"><i class="fa fa-circle-o"></i> Paid Customer</a></li>
        </ul>
      </li>

      <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="fa fa-universal-access"></i>
          <span>Unit</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
        <li><a href="{{ url('/unit/add') }}"><i class="fa fa-circle-o"></i> Add Unit</a></li>
        <li><a href="{{ url('/unit/manage') }}"><i class="fa fa-circle-o"></i> Manage Unit</a></li>
        </ul>
      </li>

      <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="ti-user"></i>
          <span>Supplier</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
        <li><a href="{{ url('/supplier/add') }}"><i class="fa fa-circle-o"></i> Add Supplier</a></li>
        <li><a href="{{ url('/supplier/manage') }}"><i class="fa fa-circle-o"></i> Manage Supplier</a></li>
        <li><a href="{{ url('/supplier/credit')}}"><i class="fa fa-circle-o"></i> Supplier Ledger</a></li>
        <li><a href="{{ url('/supplier/paid')}}"><i class="fa fa-circle-o"></i> Supplier Sales Details</a></li>
        </ul>
      </li>

      <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="ti-shopping-cart"></i>
          <span>Purchase</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
        <li><a href="{{ url('/purchase/add') }}"><i class="fa fa-circle-o"></i> Add Purchase</a></li>
        <li><a href="{{ url('/purchase/manage') }}"><i class="fa fa-circle-o"></i> Manage Purchase</a></li>
        </ul>
      </li>

      <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="fa fa-retweet"></i>
          <span>Return</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
        <li><a href="{{ url('/return') }}"><i class="fa fa-circle-o"></i> Return</a></li>
        <li><a href="{{ url('/stock/return/list') }}"><i class="fa fa-circle-o"></i> Stock Return List</a></li>
        <li><a href="{{ url('/supplier/return/list') }}"><i class="fa fa-circle-o"></i> Supplier Return List</a></li>
        <li><a href="{{ url('/wastage/return/list') }}"><i class="fa fa-circle-o"></i> Wastage Return List</a></li>
        </ul>
      </li>

      <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="fa fa-money"></i>
          <span>Accounts</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
        <li><a href="{{ url('/account/create') }}"><i class="fa fa-circle-o"></i> Ceate Account</a></li>
        <li><a href="{{ url('/account/manage') }}"><i class="fa fa-circle-o"></i> Manage Account</a></li>
        <li><a href="{{ url('/supplier/payment') }}"><i class="fa fa-circle-o"></i> Payment</a></li>
        <li><a href="{{ url('/customer/receipt') }}"><i class="fa fa-circle-o"></i> Receipt</a></li>
        <li><a href="{{ url('/transaction/manage') }}"><i class="fa fa-circle-o"></i> Manage Transaction</a></li>
        <li><a href="#"><i class="fa fa-circle-o"></i> Closing</a></li>
        <li class="waves-effect"><a href="#" style="position: relative;"><i class="fa fa-circle-o"></i> Report <span class="pull-right-container"> </span>
        </a>

          <ul class="sidebar-submenu">
            <li><a href=""><i class="fa fa-circle-o"></i> Daily Summary</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Daily Cash Flow</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Closing Report</a></li>
          </ul>

        <li><a href="{{ url('/tax/add') }}"><i class="fa fa-circle-o"></i> Add Tax</a></li>
        <li><a href="{{ url('/tax/manage') }}"><i class="fa fa-circle-o"></i> Manage Tax</a></li>
        </ul>
      </li>

      <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="ti-book"></i>
          <span>Stock</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
        <li><a href="{{ url('/stock/report') }}"><i class="fa fa-circle-o"></i> Stock Report</a></li>
        <li><a href="{{ url('/supplier/stock/report') }}"><i class="fa fa-circle-o"></i> Stock Report (Supplier Wise)</a></li>
        <li><a href="{{ url('/product/stock/report') }}"><i class="fa fa-circle-o"></i> Stock Report (Product Wise)</a></li>
        </ul>
      </li>

      <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="ti-briefcase"></i>
          <span>Report</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
        <li><a href="#"><i class="fa fa-circle-o"></i> Todays Report</a></li>
        <li><a href="#"><i class="fa fa-circle-o"></i> Todays Customer Receipt</a></li>
        <li><a href="#"><i class="fa fa-circle-o"></i> Sales Report</a></li>
        <li><a href="#"><i class="fa fa-circle-o"></i> Purchase Report</a></li>
        <li><a href="#"><i class="fa fa-circle-o"></i> Purchase Report (Category Wise)</a></li>
        <li><a href="#"><i class="fa fa-circle-o"></i> Sales Report (Product Wise)</a></li>
        <li><a href="#"><i class="fa fa-circle-o"></i> Sales Report (Category Wise)</a></li>
        </ul>
      </li>

      <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="ti-layout-grid2"></i>
          <span>Bank</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
        <li><a href="#"><i class="fa fa-circle-o"></i> Add New Bank</a></li>
        <li><a href="#"><i class="fa fa-circle-o"></i> Bank Transaction</a></li>
        <li><a href="#"><i class="fa fa-circle-o"></i> Manage Bank</a></li>
        </ul>
      </li>

      <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="fa fa-university"></i>
          <span>Office Loan</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
        <li><a href="#"><i class="fa fa-circle-o"></i> Add Person</a></li>
        <li><a href="#"><i class="fa fa-circle-o"></i> Manage Loan</a></li>
        </ul>
      </li>

      <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="fa fa-user-circle"></i>
          <span>Personal Loan</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
        <li><a href="#"><i class="fa fa-circle-o"></i> Add Person</a></li>
        <li><a href="#"><i class="fa fa-circle-o"></i> Add Loan</a></li>
        <li><a href="#"><i class="fa fa-circle-o"></i> Add Payment</a></li>
        <li><a href="#"><i class="fa fa-circle-o"></i> Manage Loan</a></li>
        </ul>
      </li>

      <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="ti-reload"></i>
          <span>Data Synchronizer</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
        <li><a href="#"><i class="fa fa-circle-o"></i> Backup</a></li>
        </ul>
      </li>

      <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="ti-settings"></i>
          <span>Software Settings</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
        <li><a href="#"><i class="fa fa-circle-o"></i> Manage Company</a></li>
        <li><a href="#"><i class="fa fa-circle-o"></i> Add User</a></li>
        <li><a href="#"><i class="fa fa-circle-o"></i> Manage User</a></li>
        <li><a href="#"><i class="fa fa-circle-o"></i> Setting</a></li>
        </ul>
      </li>

    </ul>
	 
   </div>