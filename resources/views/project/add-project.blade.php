@extends('layouts.main') 
@section('content')
<div class="main-content">
    <div class="container">
        <div class="row">
            <div class="heading">
                <h1>Add Project</h1>
            </div>
            <div class="col-md-9">
                <div class="box row table-content">
                    <div class="col-md-6" style="padding:0%;">
                        <div class="main-box" style="display:flex;">
                            <div class="col-md-4">
                                <h2>Add Floors                                     
                                </h2>
                            </div>
                            <div class="col-md-8">
                                <a data-bs-toggle="modal" href="#addfloormodal" role="button" class="add">
                                        <i class="fas fa-plus"></i>
                                </a>
                            </div>
                        </div>

                        </div>
                        <table style="width: 100%;">
                            <tr>
                                <th>1st Floor</th>
                            <tr>
                                <th>2nd Floor</th>
                            </tr>
                            <tr>
                                <th>3rd Floor</th>
                            </tr>
                            <tr>
                                <th>4th Floor</th>
                            </tr>
                        </table>
                        <div class="btn-row">
                        <a href="{{route('project-step0')}}" class="btn btn-primary common-btn">Next</a>
                    </div>
                </div> 
             </div>
            <div class="col-md-3">
                <div class="right-img"><img src="{{asset('images/right-img.png')}}" /></div>
            </div>
        </div>
    </div>
</div>

@endsection 
@section('css') 
@endsection 
@section('js') 
@endsection
