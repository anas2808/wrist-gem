<x-webheader />

  <!-- client section -->
  <section class-="contant spad">
   <div class="container">
        <div class="content-wrapper mt-5 mb-5">

          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title mb-0"><b> Our Orders</b></p>
                  <br>
                  <div class="table-responsive">
                  <table class="table table-striped table-borderless">
                      <thead>
                        <tr>
                            <th>Sr.</th>
                            <th>Fullname</th>
                            <th>Bill</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>Order Status</th>
                            <th>Order Date</th>
                            <th>products</th>
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
                          <td>{{ $item->fullname}}</td>
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
         

  <!-- end info_section -->

  <x-webfooter />