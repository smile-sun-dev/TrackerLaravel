@extends('layouts.main') 
@section('content')
                <div class="main-content">
                    <div class="container">
                    <div class="row">
                        <div class="heading">
                            <h1>Add Project</h1>
                            
                        </div>
                        <div class="col-md-9">
                        <div class="top-btn-row">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="btn2">
                                            <a  data-bs-toggle="modal" href="#duplicateFloorpopup" role="button">Duplicate</a>
                                            <a  data-bs-toggle="modal" href="#deleteFloor" role="button">Delete</a>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="btn2">
                                            <a data-bs-toggle="modal" href="#addroommodal" role="button">Add New Room</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="box row project-table"> 
                                    <div class="project-summry">
                                        <table>
                                            <tr>
                                                <th class="floor-col" colspan="2">Floors</th>

                                            </tr>
                                            <tr>
                                                <td rowspan="5" class="project-floors">1st</td>
                                                <td>Unit A</td>
                                                
                                            </tr>
                                            <tr>
                                                <td>Unit A</td>
                                            </tr>
                                            <tr>
                                                <td>Unit A</td>
                                            </tr>
                                            <tr>
                                                <td>Unit A</td>
                                            </tr>
                                            <tr>
                                                <td>Unit A</td>
                                            </tr>
                                            <tr>
                                                <td rowspan="5" class="project-floors">2nd</td>
                                                <td>Unit A</td>
                                            </tr>
                                            <tr>
                                                <td>Unit A</td>
                                            </tr>
                                            <tr>
                                                <td>Unit A</td>
                                            </tr>
                                            <tr>
                                                <td>Unit A</td>
                                            </tr>
                                            <tr>    
                                                <td>Unit A</td>
                                            </tr>
                                        </table>
                                        <div class="room-summry">
                                            <h5 class="th">Room</h5>
                                            <div class="kitchenSection">
                                            <table class="move">
                                            <tr class="head6"><td colspan="2"><i class="fas fa-grip-vertical"></i>Kitchen</td></tr>
                                                <tr>
                                                    <th>A</th>
                                                    
                                                </tr>
                                                <tr>
                                                    <td><a data-bs-toggle="modal" href="#subSection" role="button" class="add selected"><i class="fas fa-plus"></i></a></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td><a data-bs-toggle="modal" href="#subSection" role="button" class="add"><i class="fas fa-plus"></i></a></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td><a data-bs-toggle="modal" href="#subSection" role="button" class="add"><i class="fas fa-plus"></i></a></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td><a data-bs-toggle="modal" href="#subSection" role="button" class="add"><i class="fas fa-plus"></i></a></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td><a data-bs-toggle="modal" href="#subSection" role="button" class="add"><i class="fas fa-plus"></i></a></td>
                                                   
                                                </tr>
                                                <tr>
                                                    <td><a data-bs-toggle="modal" href="#subSection" role="button" class="add"><i class="fas fa-plus"></i></a></td>
                                                   
                                                </tr>
                                                <tr>
                                                    <td><a data-bs-toggle="modal" href="#subSection" role="button" class="add"><i class="fas fa-plus"></i></a></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td><a data-bs-toggle="modal" href="#subSection" role="button" class="add"><i class="fas fa-plus"></i></a></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td><a data-bs-toggle="modal" href="#subSection" role="button" class="add"><i class="fas fa-plus"></i></a></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td><a data-bs-toggle="modal" href="#subSection" role="button" class="add"><i class="fas fa-plus"></i></a></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td><a data-bs-toggle="modal" href="#subSection" role="button" class="add"><i class="fas fa-plus"></i></a></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td><a data-bs-toggle="modal" href="#subSection" role="button" class="add"><i class="fas fa-plus"></i></a></td>
                                                  
                                                </tr>
                                                
                                            </table>
                                            </div>
                                        </div>
                                    </div>
                            <div class="btn-row">
                                <!-- <button type="submit" class="btn btn-primary common-btn">Next</button> -->
                                <a href="#" class="btn btn-primary common-btn">Next</a>
                            </div>
                            </div>
                        </div>
                        <div class="col-md-3">  
                            <div class="right-img"><img src="assets/images/right-img.png"></div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>

    </div> 
@endsection 
@section('css')
@endsection 
@section('js') 
@endsection