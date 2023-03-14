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
                         <h2>Room Status</h2>

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
                    <th>Code</th>
                    <th>Information</th>

                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                        <td>VACANT</td>
                        <td>V</td>
                        <td></td>
                  </tr>
                  <tr>
                        <td>OCCUPIED</td>
                        <td>O</td>
                        <td></td>

                  </tr> <tr>
                         <td>OCCUPIED CLEAN</td>
                        <td>OC</td>
                        <td></td>

                  </tr> <tr>
                         <td>OCCUPIED DIRTY</td>
                        <td>OD</td>
                        <td></td>
                  </tr>
                 
                  </tr> <tr>
                         <td>VACANT CLEAN INSPECTED</td>
                        <td>VCI</td>
                        <td></td>
                  </tr>
                
                  </tbody>
                  <tfoot>
                  <tr>
                    
                    <th>Name</th>
                    <th>Code</th>
                    <th>Information</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
 

@endsection