@extends('layouts/app')


@section('content')
 <!-- Main content -->
 <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                

              <!-- ADD MODAL BUTTON -->
              <!-- Button trigger modal -->
                          <h2>Users</h2>
                          <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModalCenter">
                            Add
                          </button>

                          <!-- Modal -->
                          <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-scrollable modal-dialog-centered" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalCenterTitle">Walk-in Booking</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                  <!-- FORMS FOR  RESERVATION -->
                                        <form>
                                          <div class="form-row">
                                            <div class="form-group col-md-6">
                                              <label for="inputEmail4">Customer Name</label>
                                              <input type="text" class="form-control" id="name">
                                            </div>
                                            <div class="form-group">
                                            <label for="inputAddress">Room Number</label>
                                            <input type="text" class="form-control" id="contactNumber" >
                                          </div>
                                        
                                          </div>
                                          <div class="form-group">
                                            <label for="inputAddress">Check-in Date</label>
                                            <input type="text" class="form-control" id="inputAddress" >
                                          </div>
                                          <div class="form-group">
                                            <label for="inputAddress">Check-out Date</label>
                                            <input type="date" class="form-control" id="inputAddress" >
                                          </div>
                                          <div class="form-group">
                                            <label for="inputAddress">Duration</label>
                                            <input type="text" class="form-control" id="inputAddress" >
                                          </div>
                                          <div class="form-group">
                                            <label for="inputAddress">Total Price</label>
                                            <input type="text" class="form-control" id="inputAddress" >
                                          </div>
                                          <div class="form-group">
                                            <label for="inputAddress">Paid</label>
                                            <input type="text" class="form-control" id="inputAddress" >
                                          </div>
                                          <div class="form-group">
                                            <label for="inputAddress">Action</label>
                                            <input type="date" class="form-control" id="inputAddress" >
                                          </div>
                                                                              
                                                                            
                                    
                                           
                                          
                                        </form>
                                  <!--END OF FORMS FOR  RESERVATION -->

                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-primary">Confirm</button>
                                </div>
                              </div>
                            </div>
                          </div>
              <!-- END OF ADD MODAL BUTTON -->


              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Action</th>




                  </tr>
                  </thead>
                  <tbody>
                 
                  @foreach ($users as $user)
                    <tr>
                      <td>{{ $user->name }}</td>
                      <td>{{ $user->email }}</td>
                      <td>{{ $user->name }}</td>
                      <td>Action</td>


                    </tr>
                  @endforeach

                 
                  </tbody>
                  <tfoot>
                  <tr>
                    
                       <th>Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Action</th>

                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
 

@endsection