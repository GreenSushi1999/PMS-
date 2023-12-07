@extends('layouts.app')

@section('title', 'Ratee Information')

@section('content')

    <div class="container">
        <div class="row d-flex justify-content-center align-items-center mt-5">
            <div class="col-lg-7 mt-5">
                <div class="card bg-white  p-3   rounded shadow mt-5">
                    <div class="form-group">
                        <label for="">Name:</label>
                        <input type="text" class="form-control" placeholder= "Last Name,First Name M.I">

                    </div>
                    <div class="form-group">
                        <label for="">Position:</label>
                        <input type="text" class="form-control" placeholder="Position">
                    </div>

                    <div class="form-group">
                        <label for="">Department/unit:</label>
                        <input type="text" class="form-control" placeholder= "Department/Unit">
                    </div>

                    <div class="form-group">
                        <label for="">Name:</label>
                        <input type="text" class="form-control" placeholder= "Last Name,First Name M.I">
                    </div>

                    <div class="form-group">
                        <label for="">Name:</label>
                        <input type="text" class="form-control" placeholder= "Last Name,First Name M.I">
                        <input type="text" class="form-control" placeholder="Position">
                    </div>

                    <input type="text" class="form-control" placeholder="Employee No">
                    <input type="text" class="form-control" placeholder="Period Cover">
                </div>
            </div>
        </div>
    </div>


@endsection
