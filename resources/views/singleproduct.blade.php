<x-webheader />

  <!-- contact section -->
  <section class="contact_section layout_padding">
   <div class="container">
    <div class="col-lg-14 border-round p-3 main-section bg-white">
        
        <div class="row m-5">
            <div class="col-lg-7 left-side-product-box pb-3">
                <img src="{{URL::asset('uploads/products/'.$products->picture)}}" class="border-round p-2 m-0 col-lg-10">
            </div>
            <div class="col-lg-5 mx-auto">
                <div class="right-side-pro-detail border-round p-3 m-0">
                    <div class="row">
                        <div class="col-lg-12">
                            <h4>{{$products->product}}</h4>
                            
                        </div>
                        <div class="col-lg-12">
                            <p class="m-0 p-0 price-pro">₹{{$products->price}}</p>
                            <hr class="p-0 m-0">
                        </div>
                        <div class="col-lg-12 pt-2">
                            <h5>Description</h5>
                            <span>{{$products->description}}</span>
                            <hr class="m-0 pt-2 mt-2">
                        </div>
                        <div class="col-lg-12">
                            <p class="tag-section"><strong>Categourie:</strong>{{$products->categouries}}</p>
                        </div>
                        <form action="{{URL::to('addtocart')}}" methos="POST">
                            @csrf
                        <div class="col-lg-12">
                            <h6>Quantity :</h6>
                            <input type="number" min="1" max="{{$products->quantity}}" name="quantity" class="form-control text-center w-100" value="1">
                        </div>
                        <div class="col-lg-12 mt-3">
                            <div class="row">
                                <div class="col-lg-12 pb-2">
                                    <input type="hidden" name="id" value="{{$products->id}}"/>
                                    <button type="submit" name="addtocart" class="btn btn-success w-100">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
  </section>

  <!-- end info_section -->

  <x-webfooter />