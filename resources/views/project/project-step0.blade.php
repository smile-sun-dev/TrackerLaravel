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
                    <div class="col-md-6">
                        <div class="main-box">
                            <h2>Floors</h2>
                        </div>
                        <table style="width: 100%;">
                            <tr>
                                <th>1st Floors</th>
                                <td>
                                    <span class="close">
                                        <a href=""><i class="far fa-times-circle"></i></a>
                                    </span>
                                    <i class="fa fa-folder" aria-hidden="true"></i>
                                    <h5>Unit B</h5>
                                </td>
                                <td>
                                    <span class="close">
                                        <a href=""><i class="far fa-times-circle"></i></a>
                                    </span>
                                    <i class="fa fa-folder" aria-hidden="true"></i>
                                    <h5>Unit D</h5>
                                </td>
                            </tr>
                            <tr>
                                <th>2nd Floors</th>
                                <td>
                                    <span class="close">
                                        <a href=""><i class="far fa-times-circle"></i></a>
                                    </span>
                                    <i class="fa fa-folder" aria-hidden="true"></i>
                                    <h5>Unit A</h5>
                                </td>
                                <td>
                                    <span class="close">
                                        <a href=""><i class="far fa-times-circle"></i></a>
                                    </span>
                                    <i class="fa fa-folder" aria-hidden="true"></i>
                                    <h5>Unit D</h5>
                                </td>
                            </tr>
                            <tr>
                                <th>3rd Floors</th>
                                <td>
                                    <span class="close">
                                        <a href=""><i class="far fa-times-circle"></i></a>
                                    </span>
                                    <i class="fa fa-folder" aria-hidden="true"></i>
                                    <h5>Unit BC</h5>
                                </td>
                                <td>
                                    <span class="close">
                                        <a href=""><i class="far fa-times-circle"></i></a>
                                    </span>
                                    <i class="fa fa-folder" aria-hidden="true"></i>
                                    <h5>Unit DE</h5>
                                </td>
                            </tr>
                            <tr>
                                <th>4th Floors</th>
                                <td>
                                    <span class="close">
                                        <a href=""><i class="far fa-times-circle"></i></a>
                                    </span>
                                    <i class="fa fa-folder" aria-hidden="true"></i>
                                    <h5>Unit A</h5>
                                </td>
                                <td>
                                    <span class="close">
                                        <a href=""><i class="far fa-times-circle"></i></a>
                                    </span>
                                    <i class="fa fa-folder" aria-hidden="true"></i>
                                    <h5>Unit DE</h5>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-md-6">
                        <div class="main-box">
                            <h2>Unit</h2>
                        </div>
                        <table style="width: 100%;">
                            <tr>
                                <th>
                                    <a data-bs-toggle="modal" href="#addunitmodal" role="button" class="add"><i class="fas fa-plus"></i></a>
                                </th>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="close">
                                        <a href=""><i class="far fa-times-circle"></i></a>
                                    </span>
                                    <i class="fa fa-folder" aria-hidden="true"></i>
                                    <h5>Unit F</h5>
                                </td>
                                <td>
                                    <a data-bs-toggle="modal" href="#addunitmodal" role="button" class="add"><i class="fas fa-plus"></i></a>
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="close">
                                        <a href=""><i class="far fa-times-circle"></i></a>
                                    </span>
                                    <i class="fa fa-folder" aria-hidden="true"></i>
                                    <h5>Unit G</h5>
                                </td>
                                <td>
                                    <span class="close">
                                        <a href=""><i class="far fa-times-circle"></i></a>
                                    </span>
                                    <i class="fa fa-folder" aria-hidden="true"></i>
                                    <h5>Unit H</h5>
                                </td>
                                <th>
                                    <a data-bs-toggle="modal" href="#addunitmodal" role="button" class="add"><i class="fas fa-plus"></i></a>
                                </th>
                            </tr>
                            <tr>
                                <td>
                                    <span class="close">
                                        <a href=""><i class="far fa-times-circle"></i></a>
                                    </span>
                                    <i class="fa fa-folder" aria-hidden="true"></i>
                                    <h5>Unit F</h5>
                                </td>
                                <th>
                                    <a data-bs-toggle="modal" href="#addunitmodal" role="button" class="add"><i class="fas fa-plus"></i></a>
                                </th>
                                <td></td>
                            </tr>
                        </table>
                    </div>

                    <div class="btn-row">
                        <!-- <button type="submit" class="btn btn-primary common-btn">Next</button> -->
                        <a href="{{route('project-step1')}}" class="btn btn-primary common-btn">Next</a>
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