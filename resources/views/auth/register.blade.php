@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row">
                            <div class="col-6">
                                <h2 class="text-center">Driver Info</h2>
                                <hr>
                                <div class="row mb-3">
                                    <label for="type" class="col-md-4 col-form-label text-md-end">{{ __('Type') }}</label>
        
                                    <div class="col-md-6">
                                        <select id="type" class="form-control @error('type') is-invalid @enderror" name="type">
                                            <option value="1">Driver</option>
                                        </select>
                                        @error('type')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>
        
                                    <div class="col-md-6">
                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
        
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="username" class="col-md-4 col-form-label text-md-end">{{ __('User Name') }}</label>
        
                                    <div class="col-md-6">
                                        <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>
        
                                        @error('username')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="phonenumber" class="col-md-4 col-form-label text-md-end">{{ __('Phone Number') }}</label>
        
                                    <div class="col-md-6">
                                        <input id="phonenumber" type="number" class="form-control @error('phonenumber') is-invalid @enderror" name="phonenumber" value="{{ old('phonenumber') }}" required autocomplete="phonenumber" autofocus>
        
                                        @error('phonenumber')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="age" class="col-md-4 col-form-label text-md-end">{{ __('Age') }}</label>
        
                                    <div class="col-md-6">
                                        <input id="age" type="number" class="form-control @error('age') is-invalid @enderror" name="age" value="{{ old('age') }}" required autocomplete="age" autofocus>
        
                                        @error('age')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="gender" class="col-md-4 col-form-label text-md-end">{{ __('Gender') }}</label>
        
                                    <div class="col-md-6">
                                        <input id="gender" type="text" class="form-control @error('gender') is-invalid @enderror" name="gender" value="{{ old('gender') }}" required autocomplete="gender" autofocus>
        
                                        @error('gender')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="licence" class="col-md-4 col-form-label text-md-end">{{ __('Licence') }}</label>
        
                                    <div class="col-md-6">
                                        <input id="licence" type="text" class="form-control @error('licence') is-invalid @enderror" name="licence" value="{{ old('licence') }}" required autocomplete="licence" autofocus>
        
                                        @error('licence')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="date_of_birth" class="col-md-4 col-form-label text-md-end">{{ __('Date Of Birth') }}</label>
        
                                    <div class="col-md-6">
                                        <input id="date_of_birth" type="text" class="form-control @error('date_of_birth') is-invalid @enderror" name="date_of_birth" value="{{ old('date_of_birth') }}" required autocomplete="date_of_birth" autofocus>
        
                                        @error('date_of_birth')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="address" class="col-md-4 col-form-label text-md-end">{{ __('Address') }}</label>
        
                                    <div class="col-md-6">
                                        <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="address" autofocus>
        
                                        @error('address')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="bank_details" class="col-md-4 col-form-label text-md-end">{{ __('Bank Details') }}</label>
        
                                    <div class="col-md-6">
                                        <input id="bank_details" type="text" class="form-control @error('bank_details') is-invalid @enderror" name="bank_details" value="{{ old('bank_details') }}" required autocomplete="bank_details" autofocus>
        
                                        @error('bank_details')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="sort_code" class="col-md-4 col-form-label text-md-end">{{ __('Sort Code') }}</label>
        
                                    <div class="col-md-6">
                                        <input id="sort_code" type="text" class="form-control @error('sort_code') is-invalid @enderror" name="sort_code" value="{{ old('sort_code') }}" required autocomplete="sort_code" autofocus>
        
                                        @error('sort_code')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="a_number" class="col-md-4 col-form-label text-md-end">{{ __('A/Number') }}</label>
        
                                    <div class="col-md-6">
                                        <input id="a_number" type="text" class="form-control @error('a_number') is-invalid @enderror" name="a_number" value="{{ old('a_number') }}" required autocomplete="a_number" autofocus>
        
                                        @error('a_number')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="bac_number" class="col-md-4 col-form-label text-md-end">{{ __('Bac Number') }}</label>
        
                                    <div class="col-md-6">
                                        <input id="bac_number" type="text" class="form-control @error('bac_number') is-invalid @enderror" name="bac_number" value="{{ old('bac_number') }}" required autocomplete="bac_number" autofocus>
        
                                        @error('bac_number')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="sort_code" class="col-md-4 col-form-label text-md-end">{{ __('Sort Code') }}</label>
        
                                    <div class="col-md-6">
                                        <input id="sort_code" type="text" class="form-control @error('sort_code') is-invalid @enderror" name="sort_code" value="{{ old('sort_code') }}" required autocomplete="sort_code" autofocus>
        
                                        @error('sort_code')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>
        
                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
        
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
        
                                <div class="row mb-3">
                                    <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>
        
                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
        
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
        
                                <div class="row mb-3">
                                    <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>
        
                                    <div class="col-md-6">
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 border-left">
                                <h2 class="text-center">Vehicle Info</h2>
                                <hr>
                                <div class="row mb-3">
                                    <label for="vehicle_class" class="col-md-4 col-form-label text-md-end">{{ __('Class') }}</label>
        
                                    <div class="col-md-6">
                                        <input id="vehicle_class" type="text" class="form-control @error('vehicle_class') is-invalid @enderror" name="vehicle_class" value="{{ old('vehicle_class') }}" required autocomplete="vehicle_class" autofocus>
        
                                        @error('vehicle_class')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="vehicle_type" class="col-md-4 col-form-label text-md-end">{{ __('Type') }}</label>
        
                                    <div class="col-md-6">
                                        <input id="vehicle_type" type="text" class="form-control @error('vehicle_type') is-invalid @enderror" name="vehicle_type" value="{{ old('vehicle_type') }}" required autocomplete="vehicle_type" autofocus>
        
                                        @error('vehicle_type')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="no_of_passenger" class="col-md-4 col-form-label text-md-end">{{ __('No. of passenger') }}</label>
        
                                    <div class="col-md-6">
                                        <input id="no_of_passenger" type="number" class="form-control @error('no_of_passenger') is-invalid @enderror" name="no_of_passenger" value="{{ old('no_of_passenger') }}" required autocomplete="no_of_passenger" autofocus>
        
                                        @error('no_of_passenger')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="no_of_plate" class="col-md-4 col-form-label text-md-end">{{ __('Number Plate') }}</label>
        
                                    <div class="col-md-6">
                                        <input id="no_of_plate" type="text" class="form-control @error('no_of_plate') is-invalid @enderror" name="no_of_plate" value="{{ old('no_of_plate') }}" required autocomplete="no_of_plate" autofocus>
        
                                        @error('no_of_plate')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="make" class="col-md-4 col-form-label text-md-end">{{ __('Make') }}</label>
        
                                    <div class="col-md-6">
                                        <input id="make" type="text" class="form-control @error('make') is-invalid @enderror" name="make" value="{{ old('make') }}" required autocomplete="make" autofocus>
        
                                        @error('make')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="model" class="col-md-4 col-form-label text-md-end">{{ __('Model') }}</label>
        
                                    <div class="col-md-6">
                                        <input id="model" type="text" class="form-control @error('model') is-invalid @enderror" name="model" value="{{ old('model') }}" required autocomplete="model" autofocus>
        
                                        @error('model')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
        
                                <div class="row mb-3">
                                    <label for="year" class="col-md-4 col-form-label text-md-end">{{ __('Year') }}</label>
        
                                    <div class="col-md-6">
                                        <input id="year" type="number" class="form-control @error('year') is-invalid @enderror" name="year" value="{{ old('year') }}" required autocomplete="year" autofocus>
        
                                        @error('year')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
        
                                <div class="row mb-3">
                                    <label for="no_of_luggage" class="col-md-4 col-form-label text-md-end">{{ __('No. of luggage') }}</label>
        
                                    <div class="col-md-6">
                                        <input id="no_of_luggage" type="number" class="form-control @error('no_of_luggage') is-invalid @enderror" name="no_of_luggage" value="{{ old('no_of_luggage') }}" required autocomplete="no_of_luggage" autofocus>
        
                                        @error('no_of_luggage')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
        
                                <div class="row mb-3">
                                    <label for="taxi_badge" class="col-md-4 col-form-label text-md-end">{{ __('Taxi Badge') }}</label>
        
                                    <div class="col-md-6">
                                        <input id="taxi_badge" type="number" class="form-control @error('taxi_badge') is-invalid @enderror" name="taxi_badge" value="{{ old('taxi_badge') }}" required autocomplete="taxi_badge" autofocus>
        
                                        @error('taxi_badge')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
        
                                <div class="row mb-3">
                                    <label for="insurance" class="col-md-4 col-form-label text-md-end">{{ __('Insurance') }}</label>
        
                                    <div class="col-md-6">
                                        <input id="insurance" type="number" class="form-control @error('insurance') is-invalid @enderror" name="insurance" value="{{ old('insurance') }}" required autocomplete="insurance" autofocus>
        
                                        @error('insurance')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                
                            </div>
                            
                            <div class="col-md-12 text-center mt-2">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('css')
    <style>

    .border-left{
        border-left: 1px solid #dee2e6;
    }
    
    </style>
@endsection