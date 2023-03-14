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
                           <h2>Customers</h2>

                         

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
                  @foreach($transactions as $transaction)
                  <tr>
                        <td>{{ $transaction->Name }}</td>
                        <td>{{ $transaction->Email }}</td>
                        <td>Customer</td>
                        <td>Action</td>

                       

                  </tr>
                  </tbody>


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