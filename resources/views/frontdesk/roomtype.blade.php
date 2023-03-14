

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
                    <th>SINGLE ROOM</th>
                    <th>DOUBLE ROOM</th>
                    <th>FAMILY ROOM</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>212</td>
                    <td>231
                    </td>
                    <td>232</td>
                  </tr>
                  <tr>
                    <td>212</td>
                    <td>231
                    </td>
                    <td>232</td>
                  </tr>
                 
                  </tbody>
                  <tfoot>
                  <tr>
                  <th>SINGLE ROOM</th>
                    <th>DOUBLE ROOM</th>
                    <th>FAMILY ROOM</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
 

@endsection