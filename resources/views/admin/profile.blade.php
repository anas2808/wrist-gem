<x-adminheader />
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">

          <div class="row mx-auto">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                    <div class="card">
                        <h5 class="card-title mb-0">Your Profile</h5>
                    <div class="card-body">
                        <div class="row ">
                        <div class="col-md-8 mb-4 ">
                              <a class="nav-link nav-profile dropdown-toggle" href="{{URL::to('profile')}}" data-toggle="dropdown" id="profileDropdown">
                              <img src="uploads/profile/admin.png" alt="profile"/>
                            </div>
                            <div class="col-md-8 mb-4 ml-6">
                                <p class="font-weight-bold">Name: {{$login->name}}</p>
                            </div>
                            <div class="col-md-8 mb-4">
                                <p class="font-weight-bold">Email: {{$login->email}}</p>
                            </div>
                            
                        
                     <!-- Button to Open the Modal -->
                  <!--<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#updateModal">
                     Edit
                    </button>
                    <br>
                    <!-- The Modal -->
<div class="modal" id="updateModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Edit Profile</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form action="{{URL::to('editprofile')}}" method="get" enctype="multipart/form-data">
          @csrf
          <label for="">Picture</label>
          <input type="file" name="file"  class="form-control mb-2" id="">
          <input type="submit" name="save" class="btn btn-success" value="Save Now" id="">
          
        </form>
      </div>

    

    </div>
  </div>
</div>
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