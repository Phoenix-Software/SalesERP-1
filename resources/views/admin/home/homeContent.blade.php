@extends('admin.master')

@section('title')
  Dashboard
@endsection

@section('mainContent')
	    <div class="container-fluid">

      <!--Start Dashboard Content-->
	  
      <div class="row mt-3">
        <div class="col-12 col-lg-6 col-xl-3">
          <div class="card bg-pattern-primary">
            <div class="card-body">
              <div class="media">
              <div class="media-body text-left">
                <h4 class="text-white">4500</h4>
                <span class="text-white">Total Orders</span>
              </div>
              <div class="align-self-center w-circle-icon rounded-circle bg-contrast">
                <i class="icon-basket-loaded text-white"></i></div>
             </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-6 col-xl-3">
          <div class="card bg-pattern-danger">
            <div class="card-body">
              <div class="media">
               <div class="media-body text-left">
                <h4 class="text-white">7850</h4>
                <span class="text-white">Total Expenses</span>
              </div>
               <div class="align-self-center w-circle-icon rounded-circle bg-contrast">
                <i class="icon-wallet text-white"></i></div>
            </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-6 col-xl-3">
          <div class="card bg-pattern-success">
            <div class="card-body">
              <div class="media">
              <div class="media-body text-left">
                <h4 class="text-white">87.5%</h4>
                <span class="text-white">Total Revenue</span>
              </div>
              <div class="align-self-center w-circle-icon rounded-circle bg-contrast">
                <i class="icon-pie-chart text-white"></i></div>
            </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-6 col-xl-3">
          <div class="card bg-pattern-warning">
            <div class="card-body">
              <div class="media">
              <div class="media-body text-left">
                <h4 class="text-white">8400</h4>
                <span class="text-white">New Users</span>
              </div>
              <div class="align-self-center w-circle-icon rounded-circle bg-contrast">
                <i class="icon-user text-white"></i></div>
            </div>
            </div>
          </div>
        </div>
      </div><!--End Row-->
		  
		  
     

      <div class="row">
        <div class="col-lg-12">
          <div class="card bg-primary">
		  <div class="card-header bg-transparent text-white border-0">
                Recent Orders
				<div class="card-action">
				 <div class="dropdown">
				 <a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown">
				  <i class="icon-options text-white"></i>
				 </a>
				    <div class="dropdown-menu dropdown-menu-right">
						<a class="dropdown-item" href="javascript:void();">Action</a>
						<a class="dropdown-item" href="javascript:void();">Another action</a>
						<a class="dropdown-item" href="javascript:void();">Something else here</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="javascript:void();">Separated link</a>
					 </div>
				  </div>
                 </div>
                </div>
               <div class="table-responsive">
                 <table class="table align-items-center table-flush table-primary">
                  <thead>
                   <tr>
                     <th>Product</th>
                     <th>Photo</th>
                     <th>Product ID</th>
                     <th>Status</th>
                     <th>Amount</th>
                     <th>Date</th>
                     <th>Shipping</th>
                   </tr>
                   </thead>
                   <tbody>
                   <tr>
                    <td>Iphone 5</td>
                    <td><img src="https://via.placeholder.com/1000x903" class="product-img" alt="product img"></td>
                    <td>#9405822</td>
                    <td><span class="badge gradient-quepal text-white shadow">Paid</span></td>
                    <td>$ 1250.00</td>
                    <td>03 Aug 2017</td>
					<td><div class="progress shadow" style="height: 6px;">
                          <div class="progress-bar gradient-quepal" role="progressbar" style="width: 100%"></div>
                        </div></td>
                   </tr>

                   <tr>
                    <td>Earphone GL</td>
                    <td><img src="https://via.placeholder.com/1000x903" class="product-img" alt="product img"></td>
                    <td>#9405820</td>
                    <td><span class="badge gradient-blooker text-white shadow">Pending</span></td>
                    <td>$ 1500.00</td>
                    <td>03 Aug 2017</td>
					<td><div class="progress shadow" style="height: 6px;">
                          <div class="progress-bar gradient-blooker" role="progressbar" style="width: 60%"></div>
                        </div></td>
                   </tr>

                   <tr>
                    <td>HD Hand Camera</td>
                    <td><img src="https://via.placeholder.com/1000x903" class="product-img" alt="product img"></td>
                    <td>#9405830</td>
                    <td><span class="badge gradient-bloody text-white shadow">Failed</span></td>
                    <td>$ 1400.00</td>
                    <td>03 Aug 2017</td>
					<td><div class="progress shadow" style="height: 6px;">
                          <div class="progress-bar gradient-bloody" role="progressbar" style="width: 70%"></div>
                        </div></td>
                   </tr>

                   <tr>
                    <td>Clasic Shoes</td>
                    <td><img src="https://via.placeholder.com/1000x903" class="product-img" alt="product img"></td>
                    <td>#9405825</td>
                    <td><span class="badge gradient-quepal text-white shadow">Paid</span></td>
                    <td>$ 1200.00</td>
                    <td>03 Aug 2017</td>
					<td><div class="progress shadow" style="height: 6px;">
                          <div class="progress-bar gradient-quepal" role="progressbar" style="width: 100%"></div>
                        </div></td>
                   </tr>

                   <tr>
                    <td>Hand Watch</td>
                    <td><img src="https://via.placeholder.com/1000x903" class="product-img" alt="product img"></td>
                    <td>#9405840</td>
                    <td><span class="badge gradient-bloody text-white shadow">Failed</span></td>
                    <td>$ 1800.00</td>
                    <td>03 Aug 2017</td>
					<td><div class="progress shadow" style="height: 6px;">
                          <div class="progress-bar gradient-bloody" role="progressbar" style="width: 40%"></div>
                        </div></td>
                   </tr>
                   </tbody>
                 </table>
               </div>
          </div>
        </div>
      </div><!--End Row-->
    </div>
@endsection
  
@section('footer')
  Copyright © 2019 Phoenix Software. All rights reserved.
@endsection