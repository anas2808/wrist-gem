<!doctype html>
                        <html>
                            <head>
                                <meta charset='utf-8'>
                                <meta name='viewport' content='width=device-width, initial-scale=1'>
                                <title>Snippet - BBBootstrap</title>
                                <link href='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css' rel='stylesheet'>
                                <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet'>
                                <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
                                <style>::-webkit-scrollbar {
                                  width: 8px;
                                }
                                /* Track */
                                ::-webkit-scrollbar-track {
                                  background: #f1f1f1; 
                                }
                                 
                                /* Handle */
                                ::-webkit-scrollbar-thumb {
                                  background: #888; 
                                }
                                
                                /* Handle on hover */
                                ::-webkit-scrollbar-thumb:hover {
                                  background: #555; 
                                } .payment-info {
  background: blue;
  padding: 10px;
  border-radius: 6px;
  color: #fff;
  font-weight: bold;
}

.product-details {
  padding: 10px;
}

body {
  background: #eee;
}

.cart {
  background: #fff;
}

.p-about {
  font-size: 12px;
}

.table-shadow {
  -webkit-box-shadow: 5px 5px 15px -2px rgba(0,0,0,0.42);
  box-shadow: 5px 5px 15px -2px rgba(0,0,0,0.42);
}

.type {
  font-weight: 400;
  font-size: 10px;
}

label.radio {
  cursor: pointer;
}

label.radio input {
  position: absolute;
  top: 0;
  left: 0;
  visibility: hidden;
  pointer-events: none;
}

label.radio span {
  padding: 1px 12px;
  border: 2px solid #ada9a9;
  display: inline-block;
  color: #8f37aa;
  border-radius: 3px;
  text-transform: uppercase;
  font-size: 11px;
  font-weight: 300;
}

label.radio input:checked + span {
  border-color: #fff;
  background-color: blue;
  color: #fff;
}

.credit-inputs {
  background: rgb(102,102,221);
  color: #fff !important;
  border-color: rgb(102,102,221);
}

.credit-inputs::placeholder {
  color: #fff;
  font-size: 13px;
}

.credit-card-label {
  font-size: 9px;
  font-weight: 300;
}

.form-control.credit-inputs:focus {
  background: rgb(102,102,221);
  border: rgb(102,102,221);
}

.line {
  border-bottom: 1px solid rgb(102,102,221);
}

.information span {
  font-size: 12px;
  font-weight: 500;
}

.information {
  margin-bottom: 5px;
}

.items {
  -webkit-box-shadow: 5px 5px 4px -1px rgba(0,0,0,0.25);
  box-shadow: 5px 5px 4px -1px rgba(0, 0, 0, 0.08);
}

.spec {
  font-size: 11px;
}</style>
                                </head>
                                <body className='snippet-body'>
                                <div class="container mt-5 p-3 rounded cart">
        <div class="row no-gutters">
            <div class="col-md-8">
                <div class="product-details mr-2">
                    <div class="d-flex flex-row align-items-center col-md-4">
                    <a href="{{ url('index')}}" class="btn btn-xs btn-info pull-right"><i class="fa fa-long-arrow-left"></i><span class="ml-2">Continue Shopping</span></a></div>
                    <hr>
                    @php
                    $i=0;
                    $a=0;
                    $subtotal=0;
                    @endphp
                    <h6 class="mb-0">Shopping cart</h6>
                    <br/>
                    
                      @if(session()->has('success'))
                      <div class="alert alert-success"><span>
                      {{session()->get('success')}}
                      </span>                        
                    </div>
                      @endif
                    
                    @foreach($cartitem as $item)
                    @php
                    $i=$item->price * $item->quantity;
                    $a++;
                    @endphp
                    <div class="d-flex justify-content-between align-items-center mt-3 p-3 items rounded">
                        <div class="d-flex flex-row"><img class="rounded" src="{{URL::asset('uploads/products/'.$item->picture)}}" width="100px">
                            <div class="ml-5"><span class="font-weight-bold d-block">{{$item->product}}</span><span class="font-weight-bold d-block">₹{{$item->price}}</span></div>
                        </div>
                        <div class="d-flex flex-row ml-1 align-items-center">
                          <form action="{{URL::to('updatecart')}}" method="get">
                          <span class="d-block">
                            <i>Quantity</i><input type="number" class="form-control" name="quantity" min="1" max="{{$item->pquantity}}" value="{{$item->quantity}}">
                          <input name="id" value="{{$item->id}}" type="hidden">
                          <input name="update" type="submit" value="update" class="btn btn-success btn-block">
                          </span>
                          </form>
                        <span class="d-block ml-5 font-weight-bold">₹{{$item->price * $item->quantity}}</span>
                        <a href="{{URL::to('deletecartitem/'.$item->id)}}"><i class="fa fa-trash-o ml-3 text-black-50"></i></a></div>
                    </div>
                    @php
                    $subtotal=$subtotal+$i;
                    @endphp
                    @endforeach
                    
                </div>
            </div>
            @if($a>0)
            <div class="col-md-4">
                <div class="payment-info">
                    
                    <hr class="line">
                    <div class="d-flex justify-content-between information"><span>Subtotal</span><span>₹{{$subtotal}}</span></div>
                    <div class="d-flex justify-content-between information"><span>Total(Incl. taxes)</span><span>₹{{$subtotal}}</span></div>
                    <form action="{{URL::to('checkout')}}" method="get"> 
                          <input type="text" name="fullname" class="form-control mt-2" placeholder="Enter Fullname" required>
                          <input type="text" name="phone" class="form-control mt-2" placeholder="Enter Phone" required>
                          <input type="text" name="address" class="form-control mt-2" placeholder="Enter Address" required>
                          <input type="hidden" name="bill" class="form-control mt-2" value="{{$subtotal}}" required>
                          <input type="submit" name="checkout" class="btn btn-primary btn-block d-flex justify-content-between mt-3" value="Checkout">
                    </form>  
                  </div>
              </div>
              @endif
        </div>
    </div>
                                <script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js'></script>
                                <script type='text/javascript' src='#'></script>
                                <script type='text/javascript' src='#'></script>
                                <script type='text/javascript' src='#'></script>
                                <script type='text/javascript'>#</script>
                                <script type='text/javascript'>var myLink = document.querySelector('a[href="#"]');
                                myLink.addEventListener('click', function(e) {
                                  e.preventDefault();
                                });</script>
                            
                                </body>
                            </html>