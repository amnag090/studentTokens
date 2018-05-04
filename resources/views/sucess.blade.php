@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> <?php 
                    if($status == "exist") print_r('You have already registered.');
                     else print_r('Sucess!! Registered sucessfully.');
                    ?>
                    
                </div>
                    
            <div class="card-body">
                    <h3 align="center"><strong>{{$user->id}}</strong><h3>
<br><br><br>
                <strong>Name:</strong>{{$user->name}}<br>
                <strong>Email:</strong>{{$user->email}}<br>
                <strong>Phone:</strong>{{$user->phone}}<br>
                <strong>Roll No.:</strong>{{$user->rollno}}<br>



            </div>
               
            </div>
        </div>
    </div>
</div>
@endsection
