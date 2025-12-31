<x-webheader />

  <!-- contact section -->
  <section class="contact_section layout_padding">
    <div class="container" >
      <div class="heading_container mx-auto">
        <h2>
          Contact Us
        </h2>
      </div>
      <div class="row">
        <div class="col-md-6 mx-auto">
          <div class="form_container">
            <form action="{{URL::to('contact')}}" method="get" enctype="multipart/form-data">
              <div>
                <input type="text" name="yourname" placeholder="Your Name" />
              </div>
              <div>
                <input type="text" name="phone" placeholder="Phone Number" />
              </div>
              <div>
                <input type="email" name="email" placeholder="Email" />
              </div>
              <div>
                <input type="text" name="message" class="message-box" placeholder="Message" />
              </div>
              <div class="btn_box">
                <button type="submit" name="save">
                  SEND
                </button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-6 ">
          <div class="map_container">
            <div class="map">
              <div id="googleMap"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end contact section -->


  

  <x-webfooter />