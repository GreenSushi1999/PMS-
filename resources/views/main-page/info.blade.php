@extends('layouts.app')

@section('title', 'Ratee Information')

@section('content')

    <div class="container">
        <div class="row d-flex justify-content-center align-items-center mt-5">
            <div class="col-lg-7 mt-5">
                <div class="card bg-white p-3 rounded shadow mt-5">
                    <div class="card-header bg-success text-white">
                        {{ $doc_type == 1 ? 'Rank and File Level' : 'Supervisory/Officer Level' }}
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for=""> Full Name</label>
                            <input type="text" class="form-control" placeholder="Last Name, First Name">
                        </div>
                        <div class="form-group">
                            <label for=""> Position</label>
                            <input type="text" class="form-control" placeholder="Position">
                        </div>
                        <div class="form-group">
                            <label for=""> Unit/Department</label>
                            <input type="text" class="form-control" placeholder="Unit/Department">
                        </div>
                        <div class="form-group">
                            <label for=""> Employee No.</label>
                            <input type="text" class="form-control" placeholder="Employee No.">
                        </div>
                        <div class="form-group">
                            <label for="">Period Covered</label>
                            <input type="text" class="form-control" placeholder="Period Covered">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
