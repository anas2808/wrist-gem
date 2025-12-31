<x-adminheader />
      <!-- partial -->
      
      <div class="main-panel">
        <div class="content-wrapper">

          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title mb-0">Our Customers</p>
                  <br>
                  <div class="table-responsive">
                  <table class="table table-striped table-borderless">
                      <thead>
                        <tr>
                          <th>Sr.</th>
                          <th>Username</th>
                          <th>Email</th>
                          <th>Role</th>
                          <th>Regestration date</th>
                        </tr>  
                      </thead>
                      <tbody>
                        @php
                        $i=0;
                        @endphp
                        @foreach($customers as $item)
                        @php
                        $i++;
                        @endphp
                        
                        <tr>
                        <td>{{ $i}}</td>
                          <td>{{ $item->name}}</td>
                          <td class="font-weight-bold">{{$item->email}}</td>
                          <td>{{ $item->role}}</td>
                          <td>{{$item->created_at}}</td>
                          <input type="hidden" name="id" values="{{$item->id}}" id="">
                          <!--<td>
                            <a href="{{URL::to('deletecustomer/'.$item->id)}}" class="btn btn-danger">Delete</a>
                          </td>-->
                        
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