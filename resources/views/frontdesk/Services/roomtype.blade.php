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
                           <h2>Room Type</h2>

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
            <form >
            @csrf
              <div class="form-group col-md-6">
                <label for="inputEmail4">Name</label>
                <input type="text" class="form-control @error('Name') is-invalid @enderror" name="Name" value="{{ old('Name') }}"  autofocus
                        name="Name" aria-describedby="emailHelp">

                    @error('Name')
                         <span class="invalid-feedback" role="alert">
                             <strong>{{ $message }}</strong>
                         </span>
                     @enderror
                </div>
               <div class="form-group col-md-6">
                    <label for="inputPassword4">Information</label>
                    <input type="text" name="Information"  class="form-control" id="inputPassword4">
                    <span style="color:red">@error('Information'){{$message}}@enderror</span>

               </div>
              
                  
                  </div>

 
    
  
                  <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Save</button>
        </div>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> 



        </form>
                                  <!--END OF FORMS FOR  RESERVATION -->

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
                    <th>Information</th>


                  </tr>
                  </thead>
                  <tbody>
                
                  <tr>
                        <td></td>
                        <td></td>
                       

                  </tr>
                  </tbody>


                  <tfoot>
                  <tr>
                    
                    <th>Name</th>
                    <th>Information</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
 

@endsection