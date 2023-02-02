@extends('layouts.main')
@section('content')
<div class="main-content">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="top-btn-row">
                    <div class="row">
                        <div class="col-md-6"></div>
                        <div class="col-md-6">
                            <div class="btn2 btn-row">
                                <a href="#" data-bs-toggle="modal" role="button"><i class="fa-solid fa-chart-column"></i>View Statictics</a>
                                <a href="#" role="button" class="btn-primary"><i class="fa-sharp fa-solid fa-upload"></i>Export List</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row all-projects">
                    <div class="col-md-4">
                        <div class="inner-box">
                            <h3>Open Projects</h3>
                            <span>9</span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="inner-box">
                            <h3>Complete Projects</h3>
                            <span>0</span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="inner-box">
                            <h3>Total Projects</h3>
                            <span>9</span>
                        </div>
                    </div>
                </div>
                <div class="box row project-table dashboard">
                    <div class="dashboard-summry">
                        <table>
                            <tr class="head-row">
                                <th class="dash-col1">Pro.#</th>
                                <th class="dash-col2">Contractor</th>
                                <th class="dash-col3">Project</th>
                                <th class="dash-col4">Status</th>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>Lorem Ipsum</td>
                                <td>540 Madison</td>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar" style="width: 14%;">14 % Complete (Success)</div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>12</td>
                                <td>Lorem Ipsum</td>
                                <td>378 WEA</td>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar" style="width: 40%;">40 % Complete (Success)</div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>13</td>
                                <td>Lorem Ipsum</td>
                                <td>540 Modisonuii</td>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar" style="width: 0%;">0 % Complete (Success)</div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>24</td>
                                <td>Lorem Ipsum</td>
                                <td>378 WEA77789998</td>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar" style="width: 0%;">0 % Complete (Success)</div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>32</td>
                                <td>Lorem Ipsum</td>
                                <td>Project Jhon Doe</td>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar" style="width: 50%;">50 % Complete (Success)</div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>33</td>
                                <td>Lorem Ipsum</td>
                                <td>378 WEA77789998</td>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar" style="width: 13%;">13 % Complete (Success)</div>
                                    </div>
                                </td>
                            </tr>
                        </table>
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
