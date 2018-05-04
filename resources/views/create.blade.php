@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">REGISTER FOR TOKEN</div>
                    
                <div class="card-body">
                    <form method="POST" action="{{action('UserController@store')}}" >
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-sm-4 col-form-label text-md-right">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label text-md-right">Email</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="phone" class="col-sm-4 col-form-label text-md-right">Phone Number</label>

                            <div class="col-md-6">
                                <input id="phone" type="tel" pattern="^\d{10}" class="form-control" name="phone" value="{{ old('phone') }}" required autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="rollno" class="col-sm-4 col-form-label text-md-right">Roll Number</label>

                            <div class="col-md-6">
                                <input id="rollno" type="text" class="form-control" name="rollno" value="{{ old('rollno') }}" required autofocus>
                            </div>
                        </div>

                      

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                        GET TOKEN
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
