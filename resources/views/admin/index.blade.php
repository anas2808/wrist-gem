<x-adminheader />
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          
          <div class="row">
            @php
            $product=0;
            $order=0;
            $categourie=0;
            $customer=0;
            @endphp
            @foreach($products as $prod)
            @php
            $product++;
            @endphp
            <input type="hidden" name="pid" value="{{$prod->product}}" id="">
            @endforeach
            <div class="col-md-6 grid-margin transparent">
              <div class="row">
                <div class="col-md-6 mb-4 stretch-card transparent">
                  <div class="card card-tale">
                    <div class="card-body">
                      <p class="mb-4">Total Number Of Product</p>
                      <p class="fs-30 mb-2">{{$product}}</p>
                      <p>(30 days)</p>
                    </div>
                  </div>
                </div>
                @foreach($orders as $ord)
                @php
            $order++;
            @endphp
            <input type="hidden" name="oid" value="{{$ord->userid}}" id="">
            @endforeach
                <div class="col-md-6 mb-4 stretch-card transparent">
                  <div class="card card-dark-blue">
                    <div class="card-body">
                      <p class="mb-4">Total Orders</p>
                      <p class="fs-30 mb-2">{{$order}}</p>
                      <p>(30 days)</p>
                    </div>
                  </div>
                </div>
              </div>
              @foreach($customers as $cust)
              @php
            $customer++;
            @endphp
            <input type="hidden" name="cuid" value="{{$cust->id}}" id="">
            @endforeach
              <div class="row">
                <div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent">
                  <div class="card card-light-blue">
                    <div class="card-body">
                      <p class="mb-4">Total Number of Customers</p>
                      <p class="fs-30 mb-2">{{$customer}}</p>
                      <p>(30 days)</p>
                    </div>
                  </div>
                </div>
                @foreach($categouries as $categ)
                @php
            $categourie++;
            @endphp
            <input type="hidden" name="cid" value="{{$categ->id}}" id="">
            @endforeach
                <div class="col-md-6 stretch-card transparent">
                  <div class="card card-light-danger">
                    <div class="card-body">
                      <p class="mb-4">Total Number Categouries</p>
                      <p class="fs-30 mb-2">{{$categourie}}</p>
                      <p>(30 days)</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title mb-0">Top Sales Products</p>
                  <div class="table-responsive">
                    <table class="table table-striped table-borderless">
                      <thead>
                        <tr>
                          <th>Product</th>
                          <th>Price</th>
                          <th>picture</th>
                          <th>categories</th>
                        </tr>  
                      </thead>
                      <tbody>
                        @foreach($products as $product1)
                          @if($product1->type=='Top Sale Watches')
                        <tr>
                          <td>{{$product1->product}}</td>
                          <td class="font-weight-bold">₹{{$product1->price}}</td>
                          <td><img src="{{URL::asset('uploads/products/'.$product1->picture)}}" width="100"></td>
                          <td class="font-weight-medium"><div class="badge badge-success">{{$product1->categouries}}</div></td>
                        </tr>
                        @endif
                        @endforeach
                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <!--<div class="col-md-5 grid-margin stretch-card">
							<div class="card">
								<div class="card-body">
									<h4 class="card-title">To Do Lists</h4>
									<div class="list-wrapper pt-2">
										<ul class="d-flex flex-column-reverse todo-list todo-list-custom">
											<li>
												<div class="form-check form-check-flat">
													<label class="form-check-label">
														<input class="checkbox" type="checkbox">
														Meeting with Urban Team
													</label>
												</div>
												<i class="remove ti-close"></i>
											</li>
											<li class="completed">
												<div class="form-check form-check-flat">
													<label class="form-check-label">
														<input class="checkbox" type="checkbox" checked>
														Duplicate a project for new customer
													</label>
												</div>
												<i class="remove ti-close"></i>
											</li>
											<li>
												<div class="form-check form-check-flat">
													<label class="form-check-label">
														<input class="checkbox" type="checkbox">
														Project meeting with CEO
													</label>
												</div>
												<i class="remove ti-close"></i>
											</li>
											<li class="completed">
												<div class="form-check form-check-flat">
													<label class="form-check-label">
														<input class="checkbox" type="checkbox" checked>
														Follow up of team zilla
													</label>
												</div>
												<i class="remove ti-close"></i>
											</li>
											<li>
												<div class="form-check form-check-flat">
													<label class="form-check-label">
														<input class="checkbox" type="checkbox">
														Level up for Antony
													</label>
												</div>
												<i class="remove ti-close"></i>
											</li>
										</ul>
                  </div>
                  <div class="add-items d-flex mb-0 mt-2">
										<input type="text" class="form-control todo-list-input"  placeholder="Add new task">
										<button class="add btn btn-icon text-primary todo-list-add-btn bg-transparent"><i class="icon-circle-plus"></i></button>
									</div>
								</div>
							</div>
            </div>-->
          </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
       <x-adminfooter />