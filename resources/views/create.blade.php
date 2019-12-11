@extends('layouts.app')


@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Create Appointment<span class="float-right"><a href="/home" class="btn btn-secondary">Go Back</a></span></div>
            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                    <form method="post" action="/Appointment">
                        @csrf
                        <div class="form-group">
                            <label for="patientnumber">Patient Number</label>
                            <input type="text" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter number">
                        </div>
                        <div class="form-group">
                            <label for="Appointmentdate">Appointment Date</label>
                            <input type="text" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter date">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
            </div>
        </div>
    </div>
</div>
@endsection

