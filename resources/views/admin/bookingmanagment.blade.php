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
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>150</h3>

                            <p>New Orders</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>53<sup style="font-size: 20px">%</sup></h3>

                            <p>Bounce Rate</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3>44</h3>

                            <p>User Registrations</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3>65</h3>

                            <p>Unique Visitors</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-pie-graph"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
            </div>
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
                            <table class="table table-striped table-valign-middle" id="booking-table">
                                <thead>
                                    <tr>
                                        <th>S. No</th>
                                        <th>Booking No.</th>
                                        <th>Booking Type</th>
                                        <th>Vehicle</th>
                                        <th>Miles</th>
                                        <th>Amount</th>
                                        <th>Status</th>
                                        <th>Created At</th>
                                        <th>Location<th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if($bookings)
                                    @foreach($bookings as $key => $booking)

                                    <tr>
                                        <td>{{++$key}}</td>
                                        <td>{{env('APP_SHORT_CODE') . $booking->id}} @if(date('Y-m-d' ,
                                            strtotime($booking->booking_date)) == date('Y-m-d'))
                                            <span class="badge bg-danger">NEW</span>
                                            @endif
                                        </td>
                                        <td>{{$booking->types->name}}</td>
                                        <td>{{$booking->get_vehicle->vehicle_class}}</td>
                                        <td>{{$booking->miles}}</td>
                                        <td>{{$booking->bill_amount}}</td>
                                        <td>{{$booking->is_paid}}</td>
                                        <td>{{$booking->created_at}}</td>
                                        <td>
                                            <a href="{{ route('map.view',$booking->id); }}" target="_blank">
                                            <button type="button" class="btn btn-default ">
                                                  <i class="fas fa-map-pin"></i>
                                            </button>
                                            </a>
                                          </td>






                                        <!-- <td>
                                            <img src="{{asset('admin/dist/img/default-150x150.png')}}" alt="{{$booking->user->name}}" class="img-circle img-size-32 mr-2" />
                                            Perfect Item
                                            
                                        </td> -->
                                        <!-- <td>$199 USD</td> -->

                                        <td>
                                            <button type="button" class="btn btn-default view-booking"
                                                data-name="{{$booking->types->name}}" data-vehicle="{{$booking->get_vehicle->vehicle_class}}" data-miles="{{$booking->miles}}" data-bill_amount="{{$booking->bill_amount}}">
                                                <i class="fas fa-search"></i>
                                            </button>
                                        </td>
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
<script>
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

})

$(document).ready( function () {
    $('#booking-table').DataTable();
} );

</script>

@endsection