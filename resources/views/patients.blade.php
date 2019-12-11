@extends('layouts.app')


@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add new Patient<span class="float-right"><a href="/home" class="btn btn-secondary">Go Back</a></span></div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="post" action="/Patient">
                        @csrf
                        <div class="form-group">
                            <label for="forename">Forename</label>
                            <input type="text" class="form-control" name="forename" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter forename">
                        </div>
                        <div class="form-group">
                            <label for="surname">surname</label>
                            <input type="text" class="form-control" name="surname" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter surname">
                        </div>
                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" class="form-control" name="address" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter address">
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone Number</label>
                            <input type="number" class="form-control" name="phone_number" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter phone number">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

