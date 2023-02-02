@extends('layouts.main') 
@section('content')
                <div class="main-content">
                    <div class="container">
                    <div class="row">
                        <div class="col-md-9">
                            <div class="heading">
                                <h1>Media</h1>                        
                            </div>
                            <div class="top-btn-row">
                                <div class="row">
                                    <div class="col-md-6">
                                       
                                    </div>
                                    <div class="col-md-6">
                                        <div class="btn2">
                                            <a data-bs-toggle="modal" href="#Upload" role="button">Add New</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="box row project-table dashboard media"> 
                                    <div class="dashboard-summry media-table">
                                        <table>
                                            <tr class="media-table-head">
                                                <th class="media-col">Date</th>
                                                <th class="media-col">Description</th>
                                                <th class="media-col">Image</th>
                                            </tr>
                                            <tr>
                                              <td>11/10/22</td>
                                              <td>Untitled 1</td>
                                              <td>
                                                  <div class="btn-row">
                                                    <button type="submit" class="btn btn-primary common-btn"  data-bs-toggle="modal" href="#deleteFloor" role="button">Delete</button>
                                                    <button type="submit" class="btn btn-primary common-btn">Download</button>
                                                    <button type="submit" class="btn btn-primary common-btn">View</button>
                                                  </div>
                                              </td>     
                                            </tr>
                                            <tr>
                                              <td>11/05/22</td>
                                              <td>Untitled 11</td>
                                              <td>
                                                    <div class="btn-row">
                                                      <button type="submit" class="btn btn-primary common-btn"  data-bs-toggle="modal" href="#deleteFloor" role="button">Delete</button>
                                                      <button type="submit" class="btn btn-primary common-btn">Download</button>
                                                      <button type="submit" class="btn btn-primary common-btn">View</button>
                                                    </div>
                                              </td>     
                                            </tr>
                                            <tr>
                                              <td>17/10/22</td>
                                              <td>Untitled 111</td>
                                              <td>
                                                   <div class="btn-row">
                                                      <button type="submit" class="btn btn-primary common-btn"  data-bs-toggle="modal" href="#deleteFloor" role="button">Delete</button>
                                                      <button type="submit" class="btn btn-primary common-btn">Download</button>
                                                      <button type="submit" class="btn btn-primary common-btn">View</button>
                                                    </div>
                                              </td>     
                                            </tr>
                                            <tr>
                                              <td>11/10/22</td>
                                              <td>Untitled 1111</td>
                                              <td>
                                                   <div class="btn-row">
                                                      <button type="submit" class="btn btn-primary common-btn"  data-bs-toggle="modal" href="#deleteFloor" role="button">Delete</button>
                                                      <button type="submit" class="btn btn-primary common-btn">Download</button>
                                                      <button type="submit" class="btn btn-primary common-btn">View</button>
                                                    </div>
                                              </td>     
                                            </tr>
                                            <tr>
                                              <td>16/10/22</td>
                                              <td>Untitled 12</td>
                                              <td>
                                                    <div class="btn-row">
                                                      <button type="submit" class="btn btn-primary common-btn"  data-bs-toggle="modal" href="#deleteFloor" role="button">Delete</button>
                                                      <button type="submit" class="btn btn-primary common-btn">Download</button>
                                                      <button type="submit" class="btn btn-primary common-btn">View</button>
                                                    </div>
                                              </td>     
                                            </tr>
                                            <tr>
                                              <td>15/10/22</td>
                                              <td>Untitled 112</td>
                                              <td>
                                                    <div class="btn-row">
                                                      <button type="submit" class="btn btn-primary common-btn"  data-bs-toggle="modal" href="#deleteFloor" role="button">Delete</button>
                                                      <button type="submit" class="btn btn-primary common-btn">Download</button>
                                                      <button type="submit" class="btn btn-primary common-btn">View</button>
                                                    </div>
                                              </td>     
                                            </tr>
                                           

                                        </table>
                                        
                                    </div>
                            </div>
                        </div>
                        <div class="col-md-3">  
                            <div class="right-img"><img src="assets/images/right-img.png"></div>
                        </div>
                    </div>
                    </div>
                </div>
                @endsection 
@section('css') 
@endsection 
@section('js') 
@endsection