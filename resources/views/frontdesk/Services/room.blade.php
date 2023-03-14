@extends('layouts/app')


@section('content')
 <!-- Main content -->
 <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                

              <!-- Button trigger modal -->
                         
                          <h2>Room</h2>
                         <!-- ADD MODAL BUTTON -->
                          <!-- Button trigger modal -->
                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalScrollable">
                            Add
                          </button>

                          <!-- Modal -->
                          <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalScrollableTitle">Room</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                      <!-- walk-in customer booking forms -->
        <form action="room.store" method="POST">
            @csrf
              <div class="form-group col-md-6">
                <label for="inputEmail4">Room Number</label>
                <input type="number" class="form-control @error('RoomNumber') is-invalid @enderror" name="RoomNumber" value="{{ old('RoomNumber') }}"  autofocus
                        name="RoomNumber" aria-describedby="emailHelp">

                    @error('Name')
                         <span class="invalid-feedback" role="alert">
                             <strong>{{ $message }}</strong>
                         </span>
                     @enderror
                </div>
               <div class="form-group col-md-6">
                    <label for="inputPassword4">Status</label>
                    <input type="text" name="Status"  class="form-control" id="inputPassword4">
                    <span style="color:red">@error('Status'){{$message}}@enderror</span>

               </div>
               <div class="form-group">
                    <label for="inputAddress2">Type</label>
                    <input type="text" name="Type"  class="form-control" id="inputAddress2" >
                    <span style="color:red">@error('Type'){{$message}}@enderror</span>

                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputEmail4">Capacity</label>
                    <input type="number" name="Capacity"  class="form-control" id="inputEmail4">
                    <span style="color:red">@error('Capacity'){{$message}}@enderror</span>

                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputEmail4">Price</label>
                    <input type="number" name="Price"  class="form-control" id="inputEmail4">
                    <span style="color:red">@error('Price'){{$message}}@enderror</span>

                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputEmail4">Action</label>
                    <input type="text" name="Action"  class="form-control" id="inputEmail4">
                    <span style="color:red">@error('Action'){{$message}}@enderror</span>

                  </div>
                  
                  </div>

 
  
 
    
  
                  <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Save</button>
        </div>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> 



        </form>
                                </div>
                               
                              </div>
                            </div>
                          </div>

                        
                 
                         
              </div>
            <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Room Number</th>
                    <th>Status</th>
                    <th>Type</th>
                    <th>Capacity</th>
                    <th>Price</th>
                    <th>Action</th>
                   

                   
                  </tr>
                  </thead>
                  
      
                  <tbody>
                 
                  <tr>
                  @foreach($rooms as $room)
                  <tr>
                        <td>{{ $room->RoomNumber }}</td>
                        <td>{{ $room->Status }}</td>
                        <td>{{ $room->Type }}</td>
                        <td>{{ $room->Capacity }}</td>
                        <td>{{ $room->Price }}</td>
                        <td>{{ $room->Action }}</td>
                       

                  </tr>
                  </tbody>


                @endforeach




                 
                 
                  <tfoot>
                  <tr>
                  <th>Room Number</th>
                    <th>Status</th>
                    <th>Type</th>
                    <th>Capacity</th>
                    <th>Price</th>
                    <th>Action</th>
                   
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>


            
          

@endsection