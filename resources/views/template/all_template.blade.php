@extends('layouts.main')
@section('content')
	 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6" style="display: flex;">
            <div class="col-md-4">
            	<h1>Templates</h1>
            </div>
            <div class="col-md-6">
	           <div class="form-inline">
		        <div class="input-group" data-widget="sidebar-search">
		          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
		          <div class="input-group-append">
		            <button class="btn btn-sidebar">
		              <i class="fas fa-search fa-fw"></i>
		            </button>
		            <button type="button" class="plus-button" data-toggle="modal" data-target="#modal-default">
		          </div>
		        </div>
		      </div>
         </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover text-center">
                  <thead>
                  <tr>
                    <th>Name</th>
                    <th></th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>Cars in English</td>
                    <td>
                      <div class="btn-group">
                          <a class="btn btn-info btn-sm" href="#">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit
                          </a>
                          <a class="btn btn-danger btn-sm" href="#">
                              <i class="fas fa-trash">
                              </i>
                              Remove
                          </a>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>Bicycles short term</td>
                    <td>
                          <a class="btn btn-info btn-sm" href="#">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit
                          </a>
                          <a class="btn btn-danger btn-sm" href="#">
                              <i class="fas fa-trash">
                              </i>
                              Remove
                          </a>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>Mile John</td>
                    <td >
                      <div class="btn-group">
                          <a class="btn btn-info btn-sm" href="#">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit
                          </a>
                          <a class="btn btn-danger btn-sm" href="#">
                              <i class="fas fa-trash">
                              </i>
                              Remove
                          </a>
                      </div>
                    </td>
                  </tr>
                  </tbody>
                  <tfoot>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>

    <!---modal dialog-->
    <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">ADD TEMPLATES</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col-sm-12">
                   <div class="form-group">
                      <label>Templated Name</label>
                        <input type="text" class="form-control" placeholder="Enter here the name of template">
                    </div>
                </div>
              <div class="col-sm-12">
                   <div class="form-group">
                      <label>Template</label>
                        <input type="text" class="form-control" placeholder="{autofilled, cahngeable based on shortcode name}">
                    </div>
                </div>
              </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">STORE TEMPLATE</button>
            </div>
        </div>
    </div>
   </div>
  </div>
@endsection