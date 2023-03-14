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
                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
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
                                              <label for="inputEmail4">Name</label>
                                              <input type="text" class="form-control" id="name">
                                            </div>
                                            <div class="form-group">
                                            <label for="inputAddress">Contact Number</label>
                                            <input type="text" class="form-control" id="contactNumber" >
                                          </div>
                                        
                                          </div>
                                          <div class="form-group">
                                            <label for="inputAddress">Address</label>
                                            <input type="text" class="form-control" id="inputAddress" >
                                          </div>
                                          <div class="form-group">
                                            <label for="inputAddress">Check-out Date</label>
                                            <input type="date" class="form-control" id="inputAddress" >
                                          </div>
                                          <div class="form-group">
                                            <label for="inputAddress">Check-in Date</label>
                                            <input type="date" class="form-control" id="inputAddress" >
                                          </div>
                                          
                                                                              
                                                                            
                                            <div class="form-group col-md-6">
                                              <label for="inputState">Room Type</label>
                                              <select id="inputState" class="form-control">
                                                <option>Single Bedroom</option>
                                                <option>Double Bedroom</option>
                                                <option>Family Bedroom</option>

                                              </select>
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
                    <th>STATUS</th>
                    <th>CHECK IN</th>
                    <th>CHECK OUT</th>
                    <th>ADULT #</th>
                    <th>CHILDREN #</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>ACTIVE</td>
                    <td>12/12/2022
                    </td>
                    <td>12/12/2022</td>
                    <td> 4</td>
                    <td>2</td>
                  </tr>
                  <tr>
                    <td>ACTIVE</td>
                    <td>12/12/2022
                    </td>
                    <td>12/12/2022</td>
                    <td> 4</td>
                    <td>2</td>
                  </tr> <tr>
                    <td>ACTIVE</td>
                    <td>12/12/2022
                    </td>
                    <td>12/12/2022</td>
                    <td> 4</td>
                    <td>2</td>
                  </tr> <tr>
                    <td>ACTIVE</td>
                    <td>12/12/2022
                    </td>
                    <td>12/12/2022</td>
                    <td> 4</td>
                    <td>2</td>
                  </tr>
                 
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>STATUS</th>
                    <th>CHECK IN</th>
                    <th>CHECK OUT</th>
                    <th>ADULT #</th>
                    <th>CHILDREN #</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
 

@endsection