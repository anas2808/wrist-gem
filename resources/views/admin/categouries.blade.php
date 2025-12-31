<x-adminheader />
      <!-- partial -->
      
      <div class="main-panel">
        <div class="content-wrapper">

          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title mb-0">categouries</p>
                  <br>
                                      <!-- Button to Open the Modal -->
                                      <button type="button" class="btn btn-primary float-end" data-toggle="modal" data-target="#mymodel">
                     add categouries
                    </button>
                    <br>
                    <!-- The Modal -->
<div class="modal" id="mymodel">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">add categouries</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form action="{{URL::to('addcategouries')}}" method="POST" enctype="multipart/form-data">
          @csrf
          <label for="">categouriest</label>
          <input type="text" name="categouries" placeholder="enter categouries name" class="form-control mb-2" id="">
          <input type="submit" name="save" class="btn btn-success" value="Add" id="">
          
        </form>
      </div>

    

    </div>
  </div>
</div>
                  <div class="table-responsive">
                  <table class="table table-striped table-borderless">
                      <thead>
                        <tr>
                          <th>No.Categouries</th>
                          <th>Categouries</th>
                          <th>Edit Categouries</th>
                          <th>Delete Categouries</th>
                          
                        </tr>  
                      </thead>
                      <tbody>
                        @php
                        $i=0;
                        @endphp
                        @foreach($categouries as $item)
                        @php
                        $i++;
                        $a=$item->id;
                        @endphp
                        <tr>
                          <td>{{ $i}}</td>
                            <td>{{ $item->categouries}}</td>   
                            <input type="hidden" name="id" values="{{$item->id}}" id="">
                             <td>
                                    <!-- Button to Open the Modal -->
                            <button type="button" class="btn btn-primary float-end" data-toggle="modal" data-target="#mymodeledit{{$i}}">
                            Edit 
                            </button>
                            <br>
                            <!-- The Modal -->
                            <div class="modal" id="mymodeledit{{$i}}">
                              <div class="modal-dialog">
                                <div class="modal-content">

                                  <!-- Modal Header -->
                                  <div class="modal-header">
                                    <h4 class="modal-title">Edit categouries</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                  </div>

                                  <!-- Modal body -->
                                  <div class="modal-body">
                                    <form action="{{URL::to('/editcategouries/'.$a)}}" method="POST" enctype="multipart/form-data">
                                      @csrf
                                      <label for="">categouriest</label>
                                      
                                      <input type="text" name="categouries" placeholder="{{ $item->categouries}}" class="form-control mb-2" id="">
                                      <input type="submit" name="save" class="btn btn-success" value="Add" id="">
                                      
                                    </form>
                                  </div>

                                

                                </div>
                              </div>
                            </div>
                          </td>
                            <td>
                            <a href="{{URL::to('deletecategouries/'.$item->id)}}" class="btn btn-danger">Delete</a>
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