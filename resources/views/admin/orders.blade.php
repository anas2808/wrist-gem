<x-adminheader />
      <!-- partial -->
      
      <div class="main-panel">
        <div class="content-wrapper">

          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title mb-0"> Our Orders</p>
                  <br>
                  <div class="table-responsive">
                  <table class="table table-striped table-borderless">
                      <thead>
                        <tr>
                            <th>Sr.</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Bill</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>Order Status</th>
                            <th>Order Date</th>
                            <th>products</th>
                            <th>Action</th>
                        </tr>  
                      </thead>
                      <tbody>
                        @php
                        $i=0;
                        @endphp
                        @foreach($orders as $item)
                        @php
                        $i++;
                        @endphp
                        
                        <tr>
                        <td>{{ $i}}</td>
                          <td>{{ $item->name}}</td>
                          <td class="font-weight-bold">{{$item->email}}</td>
                          <td>₹{{ $item->bill}}</td>
                          <td>{{$item->phone}}</td>
                          <td>{{$item->address}}</td>
                          <td class="font-weight-medium"><div class="badge badge-success">{{$item->status}}</div></td>
                          <td>{{$item->created_at}}</td>
                          <td>
                              <!-- Button to Open the Modal -->
                  <button type="button" class="btn btn-primary float-end" data-toggle="modal" data-target="#myModal{{$i}}">
                     Products
                    </button>
                    <br>
                    <!-- The Modal -->
                            <div class="modal" id="myModal{{$i}}">
                            <div class="modal-dialog">
                                <div class="modal-content">

                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h4 class="modal-title">Add new product</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>

                                <!-- Modal body -->
                                <div class="modal-body">
                                <table class="table table-responsive">
                                        <thead>
                                            <tr>
                                                <td>Product</td>
                                                <td>Picture</td>
                                                <td>Price/item</td>
                                                <td>Quantity</td>
                                                <td>Subtotal</td>
                                            </tr>  

                                        </thead>
                                        <tbody>
                                            @foreach($orderitems as $oitem)
                                            @if($oitem->orderId==$item->id)
                                            <tr>
                                                <td>{{$oitem->product}}</td>
                                                <td><img src="{{URL::asset('uploads/products/'.$oitem->picture)}}" width="100">}</td>
                                                <td>₹{{$oitem->price}}</td>
                                                <td>{{$oitem->quantity}}</td>
                                                <td>₹{{$oitem->quantity * $oitem->price}}</td>
                                            </tr>
                                            @endif
                                            @endforeach
                                        </tbody>
                                </table>           
                                </div>
                                </div>
                            </div>
                            </div>  
                          </td>
                          <td>
                            @if($item->status=='pending')
                            <a href="{{URL::to('/changeorderstatus/accepted/'.$item->id)}}" class="btn btn-danger">Accept</a>
                            <a href="{{URL::to('/changeorderstatus/rejected/'.$item->id)}}" class="btn btn-danger">Reject</a>
                            @elseif($item->status=='accepted')
                            <a href="{{URL::to('/changeorderstatus/delivered/'.$item->id)}}" class="btn btn-danger">Delivered</a>
                            @elseif($item->status=='delivered')
                            Alrady Completed
                            @else
                            <a href="{{URL::to('/changeorderstatus/accepted/'.$item->id)}}" class="btn btn-danger">Accepted</a>
                            @endif
                          </td>
                          <input type="hidden" name="id" values="{{$item->id}}" id="">
                        
                        </tr>
                        @endforeach
                     
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
 
          </div>
        </div>
        </div>
         
        
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
       <x-adminfooter />