@extends('layouts.main') 
@section('content')
<div class="main-content">
    <div class="container">
        <div class="row">
            <div class="heading">
                <h1>Add Project</h1>
            </div>
            <div class="col-md-9">
                <div class="box">
                    <div class="main-box">
                        <h2>Add Floors</h2>
                        <a data-bs-toggle="modal" href="#addfloormodal" role="button"><i class="fa-solid fa-plus"></i></a>
                    </div>
                    <div class="folder-icon">
                        <ul>
                            <li>
                                <span class="close">
                                    <a href=""><i class="far fa-times-circle"></i></a>
                                </span>
                                <i class="fa fa-folder" aria-hidden="true"></i> <small>1st Floor</small>
                            </li>
                            <li>
                                <span class="close">
                                    <a href=""><i class="far fa-times-circle"></i></a>
                                </span>
                                <i class="fa fa-folder" aria-hidden="true"></i> <small>2st Floor</small>
                            </li>
                            <li>
                                <span class="close">
                                    <a href=""><i class="far fa-times-circle"></i></a>
                                </span>
                                <i class="fa fa-folder" aria-hidden="true"></i> <small>3st Floor</small>
                            </li>
                            <li>
                                <span class="close">
                                    <a href=""><i class="far fa-times-circle"></i></a>
                                </span>
                                <i class="fa fa-folder" aria-hidden="true"></i> <small>4st Floor</small>
                            </li>
                        </ul>
                    </div>
                    <div class="btn-row">
                        <!-- <button type="submit" class="btn btn-primary common-btn">Next</button> -->
                        <a href="{{route('add-project')}}" class="btn btn-primary common-btn">Next</a>
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
