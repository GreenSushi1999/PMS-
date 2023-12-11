@extends('layouts.app')

@section('title', 'Ratee Information')

@section('content')

    <div class="container">
        <div class="row d-flex justify-content-center align-items-center mt-5">
            <div class="col-lg-6 mt-5">
                <div class="card  rounded shadow mt-2">
                    <div class="card-header bg-success text-white">
                        <h3 class='h3'> {{ $doc_type == 1 ? 'Rank and File Level' : 'Supervisory/Officer Level' }}
                        </h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('save-info') }}" method="POST" role="form">
                            @csrf
                            <div class="row">
                                <input type="hidden" value="{{ $doc_type }}" name="doc_type">
                                <div class="form-group col-lg-6">
                                    <label for="" class="form-label">Full Name</label>
                                    <input type="text" name="name" class="form-control"
                                        placeholder="Last Name, First Name" required>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label for="" class="form-label"> Employee No.</label>
                                    <input type="text" name="emp_no" class="form-control" placeholder="Employee No."
                                        required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-lg-6">
                                    <label for="" class="form-label"> Position</label>
                                    <input type="text" name="position" class="form-control" placeholder="Position"
                                        required>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label for="" class="form-label">Period Covered</label>
                                    <input type="text" name="period_cover" class="form-control"
                                        placeholder="Period Covered" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="form-label"> Unit/Department</label>
                                <input type="text" name="department" class="form-control" placeholder="Unit/Department"
                                    required>
                            </div>
                    </div>
                    <div class="card-footer bg-white text-right">
                        <button class="btn btn-success " type="submit">Proceed</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection
