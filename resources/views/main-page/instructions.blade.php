@extends('layouts.app')

@section('title', 'Instructions')

@section('content')

    <div class="container">
        <div class="row d-flex justify-content-center align-items-center mt-5">
            <div class="col-lg-12 mt-5">
                <div class="card  rounded shadow mt-2">
                    <div class="card-header bg-success text-white">
                        <h3>Instructions</h3>
                    </div>
                    <div class="card-body">

                        <div class="card bg-primary p-2 text-white">
                            GRADE EQUIVALENT AND VERBAL INTERPRETATION
                        </div>
                        <div class="row m-0">
                            <div class="card col-lg-3" style="margin-left:5px;">
                                <div class="card-header bg-danger text-center text-white">
                                    <h6>{{ $grade1->verbal_interpretation }}</h6>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h4>{{ $grade1->grade_min }} % -
                                                {{ $grade1->grade_max }} % </h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body bg-white">
                                    <p>{{ $grade1->description }}</p>
                                </div>
                            </div>
                            <div class="card col-lg-3" style="margin-left:5px;">
                                <div class="card-header bg-primary text-center text-white">
                                    <h6>{{ $grade2->verbal_interpretation }}</h6>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h4>{{ $grade2->grade_min }} % -
                                                {{ $grade2->grade_max }} % </h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body bg-white">
                                    <p>{{ $grade2->description }}</p>
                                </div>
                            </div>
                            <div class="card col-lg-3" style="margin-left:5px;">
                                <div class="card-header bg-info text-center text-white">
                                    <h6>{{ $grade3->verbal_interpretation }}</h6>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h4>{{ $grade3->grade_min }} % -
                                                {{ $grade3->grade_max }} % </h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body bg-white">
                                    <p>{{ $grade3->description }}</p>
                                </div>
                            </div>

                            <div class="card col-lg-3" style="margin-left:5px;">
                                <div class="card-header bg-success text-center text-white">
                                    <h6>{{ $grade4->verbal_interpretation }}</h6>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h4>{{ $grade4->grade_min }} % -
                                                {{ $grade4->grade_max }} % </h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body bg-white">
                                    <p>{{ $grade4->description }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer bg-white text-right">
                        <button class="btn btn-success " type="submit">Start</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
