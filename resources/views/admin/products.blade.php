<x-adminheader />
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">

          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title mb-0">Top Products</p>
                  <br>
                  <!-- Button to Open the Modal -->
                  <button type="button" class="btn btn-primary float-end" data-toggle="modal" data-target="#myModal">
                     Add Product
                    </button>
                    <br>
                    <!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Add new product</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form action="{{URL::to('addnewproduct')}}" method="POST" enctype="multipart/form-data">
          @csrf
          <label for="">Product</label>
          <input type="text" name="product" placeholder="enter product name" class="form-control mb-2" id="">
          <label for="">price</label>
          <input type="text" name="price" placeholder="enter price" class="form-control mb-2" id="">
          <label for="">Picture</label>
          <input type="file" name="file"  class="form-control mb-2" id="">
          <label for="">discription</label>
          <input type="text" name="description" placeholder="enter product name" class="form-control mb-2" id="">
          <label for="">quantity</label>
          <input type="text" name="quantity" placeholder="enter product name" class="form-control mb-2" id="">
          <label for="">categouries</label>
          <select name="categouries" class="form-control mb-2" id="" >
          <option values="">Select type</option>
          @foreach($categouries as $ite)
            <option values="{{$ite->categouries}}">{{$ite->categouries}}</option>
            @endforeach
          </select>
          <label for="">type</label>
          <select name="type" class="form-control mb-2" id="">
            <option values="">Select type</option>
            <option values="Top Sale Watches">Top Sale Watches</option>
            <option values="Feature Watches">Feature Watches</option>
            <option values="New Arrivals ">New Arrivals</option>
          </select>
          <input type="submit" name="save" class="btn btn-success" value="Save Now" id="">
          
        </form>
      </div>

    

    </div>
  </div>
</div>
                  <div class="table-responsive">
                    <table class="table table-striped table-borderless">
                      <thead>
                        <tr>
                          <th>Sr.</th>
                          <th>product</th>
                          <th>Price</th>
                          <th>Picture</th>
                          <th>description</th>
                          <th>quantity</th>
                          <th>categouries</th>
                          <th>type</th>
                          <th>Update</th>
                          <th>Delete</th>
                        </tr>  
                      </thead>
                      <tbody>
                        @php
                        $i=0;
                        @endphp
                        @foreach($products as $item)
                        @php
                        $i++;
                        $a=$item->id;
                        @endphp
                        
                        <tr>
                        <td>{{ $i}}</td>
                          <td>{{ $item->product}}</td>
                          <td class="font-weight-bold">₹{{$item->price}}</td>
                            <td><img src="{{URL::asset('uploads/products/'.$item->picture)}}" width="100"></td>
                          <td>{{$item->description}}</td>
                          <td>{{ $item->quantity}}</td>
                          <td class="font-weight-medium"><div class="badge badge-success">{{$item->categouries}}</div></td>
                          <td class="font-weight-medium"><div class="badge badge-info">{{$item->type}}</div></td>
                          <td class="font-weight-medium">
                            <!-- Button to Open the Modal -->
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#updateModal{{$i}}">
                     Update
                    </button>
                    <br>
                    <!-- The Modal -->
<div class="modal" id="updateModal{{$i}}">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">update product</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form action="{{URL::to('updateproduct')}}" method="POST" enctype="multipart/form-data">
          @csrf
          <label for="">Product</label>
           <input type="hidden" name="id" value="{{$a}}" id="">
          <input type="text" name="product" value="{{$item->product}}" placeholder="enter product name" class="form-control mb-2" id="">
          <label for="">price</label>
          <input type="text" name="price" value="{{$item->price}}" placeholder="enter price" class="form-control mb-2" id="">
          <label for="">Picture</label>
          <input type="file" name="file"  class="form-control mb-2" id="">
          <label for="">discription</label>
          <input type="text" name="description" value="{{$item->description}}" placeholder="enter product name" class="form-control mb-2" id="">
          <label for="">quantity</label>
          <input type="text" name="quantity" value="{{$item->quantity}}" placeholder="enter product name" class="form-control mb-2" id="">
          <label for="">categouries</label>
          <select name="categouries" class="form-control mb-2" id="">
            <option value="{{$item->categouries}}">{{$item->categouries}}</option>
          @foreach($categouries as $ite)
            <option values="{{$ite->categouries}}">{{$ite->categouries}}</option>
            @endforeach
          </select>
          <label for="">type</label>
          <select name="type" class="form-control mb-2" id="">
            <option values="{{$item->type}}">{{$item->type}}e</option>
            <option values="Top Sale Watches">Top Sale Watches</option>
            <option values="Feature Watches">Feature Watches</option>
            <option values="New Arrivals ">New Arrivals</option>
          </select>
         
          <input type="submit" name="save" class="btn btn-success" value="Save Now" id="">
          
        </form>
      </div>

    

    </div>
  </div>
</div>
                          </td>
                         <td>
                            <a href="{{URL::to('/deleteproduct/'.$item->id)}}" class="btn btn-danger">Delete</a>
                          </td>
                        
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