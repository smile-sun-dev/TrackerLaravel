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

    <!-- Main content -->
    <div class="col-md-12">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Quick Example</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form method="post" action="{{route('vehicle.create.submit')}}">
              @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="vehicle_class">Vehicle Class</label>
                        <input type="text" name="vehicle_class" class="form-control" id="vehicle_class" placeholder="Vehicle Class">
                    </div>
                    <div class="form-group">
                        <label for="vehicle_type">Vehicle Type</label>
                        <input type="text" name="vehicle_type" class="form-control" id="vehicle_type" placeholder="Vehicle Type">
                    </div>

                    <div class="form-group">
                        <label for="no_of_passenger">Number of Passenger</label>
                        <input type="number" name="no_of_passenger" class="form-control" id="no_of_passenger" placeholder="Passenger">
                    </div>

                    <div class="form-group">
                        <label for="no_of_plate">Number of Plates</label>
                        <input type="number" name="no_of_plate" class="form-control" id="no_of_plate" placeholder="Number Plates">
                    </div>

                    <div class="form-group">
                        <label for="no_of_luggage">Number of Luggage</label>
                        <input type="number" name="no_of_luggage" class="form-control" id="no_of_luggage" placeholder="Luggage">
                    </div>


                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
        <!-- /.content -->
    </div>
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