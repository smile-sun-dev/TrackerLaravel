@extends('layouts.main') 
@section('content')
<div class="main-content">
    <div class="container">
        <div class="heading"><h1>Add Project</h1></div>
        <div class="row">
            <div class="col-md-9">
                <div class="add-project">
                    <form method="GET" action="{{route('add-floor')}}">
                        <div class="form-row">
                            <div class="form-group">
                                <label for="ProjectName">Project Name</label>
                                <input type="text" class="form-control" id="ProjectName" />
                            </div>
                            <div class="form-group">
                                <label for="Address">Address</label>
                                <input type="text" class="form-control" id="Address" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="Contractor">Contractor</label>
                            <input type="text" class="form-control" id="Contractor" />
                        </div>
                        <div class="form-group">
                            <label for="Owner">Owner</label>
                            <input type="text" class="form-control" id="Owner" />
                        </div>
                        <!-- <button type="submit" class="btn btn-primary common-btn">Next</button> -->
                        <button class="btn btn-primary common-btn" type="submit">Next</a>
                    </form>
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
