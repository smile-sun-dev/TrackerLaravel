@extends('admin.layouts.main')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard v3</h1>

                </div>



                <!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard v3</li>
                    </ol>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="col-md-2">
        <td>

            <a href="{{route('vehicle.create')}}" type="button" class="btn btn-block btn-success btn-lg mx-2 my-2">Add
                Vehicle</a>
        </td>
    </div>
    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-header border-0">
                            <h3 class="card-title">Bookings</h3>
                            <div class="card-tools">
                                <a href="#" class="btn btn-tool btn-sm">
                                    <i class="fas fa-download"></i>
                                </a>
                                <a href="#" class="btn btn-tool btn-sm">
                                    <i class="fas fa-bars"></i>
                                </a>
                            </div>
                        </div>
                        <div class="card-body table-responsive p-0">
                            <table class="table table-striped table-valign-middle">
                                <thead>

                                    <tr>
                                        <th>Vehicle Class</th>
                                        <th>Vehicle Type</th>
                                        <th>No of Passenger</th>
                                        <th>Number Plate</th>
                                        <th>Number Of luggage</th>
                                        <th>Active</th>
                                        <th>Created At</th>
                                        <th>Action</th>


                                    </tr>
                                </thead>

                                <tbody>
                                    @if($vehicles)
                                    @foreach($vehicles as $key => $vehicle)
                                    <tr>
                                        <td>{{$vehicle->vehicle_class}}</td>
                                        <td>{{$vehicle->vehicle_type}}</td>
                                        <td>{{$vehicle->no_of_passenger}}</td>
                                        <td>{{$vehicle->no_of_plate}}</td>
                                        <td>{{$vehicle->no_of_luggage}}</td>
                                        <td>{{$vehicle->is_active}}</td>
                                        <td>{{$vehicle->created_at}}</td>
                                        <td><a href="{{route('vehicle.edit',$vehicle->id)}}">
                                                <i class="fas fa-edit"></i> Edit
                                            </a>
                                        <td>
                                    </tr>
                                    @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- /.card -->
                </div>

            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
@endsection
@section('css')
@endsection
@section('js')
<!-- <script>
$(".view-booking").click(function() {
    var id   = $(this).data('booking')
    var name = $(this).data('name')
    var vehicle = $(this).data('vehicle')
    var miles = $(this).data('miles')
    var bill_amount = $(this).data('bill_amount')
    $('#booking-no').text(id)
    $("#booking-name").text(name)
    $("#booking-vehicle").text(vehicle)
    $("#booking-miles").text(miles)
    $("#booking-amount").text(bill_amount)
    $("#modal-x2").modal("show")

})</script> -->
@endsection