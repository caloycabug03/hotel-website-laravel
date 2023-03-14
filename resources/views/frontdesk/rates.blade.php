

@extends('layouts/app')


@section('content')
 <!-- Main content -->
 <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <button class=".btn-lg">Add</button>
                <button class=".btn-lg">Edit</button>

              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>ROOM TYPE</th>
                    <th>ROOM #</th>
                    <th>RATES</th>
                    <th>DURATION</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>SINGLE ROOM</td>
                    <td>212
                    </td>
                    <td>₱250</td>
                    <td> 24hrs.</td>
                  </tr>
                  <tr>
                    <td>SINGLE ROOM</td>
                    <td>212
                    </td>
                    <td>₱250</td>
                    <td> 24hrs.</td>
                  </tr>
                  <tr>
                    <td>SINGLE ROOM</td>
                    <td>212
                    </td>
                    <td>₱250</td>
                    <td> 24hrs.</td>
                  </tr>
                  <tr>
                    <td>SINGLE ROOM</td>
                    <td>212
                    </td>
                    <td>₱250</td>
                    <td> 24hrs.</td>
                  </tr>
                  <tr>
                    <td>SINGLE ROOM</td>
                    <td>212
                    </td>
                    <td>₱250</td>
                    <td> 24hrs.</td>
                  </tr>
                 
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>STATUS</th>
                    <th>CHECK IN</th>
                    <th>CHECK OUT</th>
                    <th>ADULT #</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
 

@endsection