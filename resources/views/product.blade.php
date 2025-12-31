<x-webheader />

  <!-- product section -->

  <section class="product_section ">
    <div class="container">
      <div class="product_heading">
        <h2>
          Top Sale Watches
        </h2>
      </div>
      <div class="product_container">
      @foreach($products as $item)
      @if($item->type=='Top Sale Watches')
        <div class="box">
          <div class="box-content">
            <div class="img-box">
              <a href="{{URL::to('proddisp/'.$item->id)}}"><img src="{{URL::asset('uploads/products/'.$item->picture)}}" alt=""></a>
            </div>
            <div class="detail-box">
              <div class="text">
                <h6>
                  {{$item->product}}
                  
                </h6>
                <h5>
                  <span>₹</span> {{$item->price}}
                </h5>
              </div>
              <div class="like">
                <h6>
                  Like
                </h6>
                <div class="star_container">
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                </div>
              </div>
            </div>
          </div>
          <div class="btn-box">
            <form action="{{URL::to('addtocart')}}" methos="POST">
          @csrf
          
            <input type="hidden" name="quantity" value="1">
            <input type="hidden" name="id" value="{{$item->id}}"/>
            <button type="submit" name="addtocart" class="btn btn-success w-150">Add To Cart</button>
             </form>
          </div>
        </div>
        @endif
        @endforeach
        
       
      </div>
    </div>
  </section>

  <!-- end product section -->


  <!-- product section -->

  <section class="product_section ">
    <div class="container">
      <div class="product_heading">
        <h2>
          Feature Watches
        </h2>
      </div>
      <div class="product_container">
      @foreach($products as $item)
      @if($item->type=='Feature Watches')
        <div class="box">
          <div class="box-content">
            <div class="img-box">
              <a href="{{URL::to('proddisp/'.$item->id)}}"><img src="{{URL::asset('uploads/products/'.$item->picture)}}" alt=""></a>
            </div>
            <div class="detail-box">
              <div class="text">
                <h6>
                  {{$item->product}}
                  
                </h6>
                <h5>
                  <span>₹</span> {{$item->price}}
                </h5>
              </div>
              <div class="like">
                <h6>
                  Like
                </h6>
                <div class="star_container">
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                </div>
              </div>
            </div>
          </div>

          <div class="btn-box">
            <form action="{{URL::to('addtocart')}}" methos="POST">
          @csrf
          
            <input type="hidden" name="quantity" value="1">
            <input type="hidden" name="id" value="{{$item->id}}"/>
            <button type="submit" name="addtocart" class="btn btn-success w-150">Add To Cart</button>
             </form>
          </div>
        </div>
        @endif
        @endforeach
      </div>
    </div>
  </section>


  <!-- end product section -->


  <!-- product section -->

  <section class="product_section ">
    <div class="container">
      <div class="product_heading">
        <h2>
          New Arrivals
        </h2>
      </div>
      <div class="product_container">
      @foreach($products as $item)
      @if($item->type=='New Arrivals')
        <div class="box">
          <div class="box-content">
            <div class="img-box">
              <a href="{{URL::to('proddisp/'.$item->id)}}"><img src="{{URL::asset('uploads/products/'.$item->picture)}}" alt=""></a>
            </div>
            <div class="detail-box">
              <div class="text">
                <h6>
                  {{$item->product}}
                  
                </h6>
                <h5>
                  <span>₹</span> {{$item->price}}
                </h5>
              </div>
              <div class="like">
                <h6>
                  Like
                </h6>
                <div class="star_container">
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                </div>
              </div>
            </div>
          </div>
          <div class="btn-box">
          <form action="{{URL::to('addtocart')}}" methos="POST">
          @csrf
          
            <input type="hidden" name="quantity" value="1">
            <input type="hidden" name="id" value="{{$item->id}}"/>
            <button type="submit" name="addtocart" class="btn btn-success w-150">Add To Cart</button>
             </form>
        </div>
        </div>
        @endif
        @endforeach
      </div>
    </div>
  </section>


  <!-- end product section -->

  

  <x-webfooter />