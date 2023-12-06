@extends('layouts.app')

@section('title', 'Home Page')

@section('content')
    <style>
        body {
            background-image: url('../img/mtc_bg.jpg');
            background-size: cover;
        }
    </style>
    <div class="container">
        <div class="row d-flex justify-content-center align-items-center mt-5">
            <div class="col-lg-5">
                <div class="card m-1 shadow rounded">
                    <div class="card-title text-center mt-3 p-4">
                        <img src="/img/logo.png" alt="" height="300;" width="300;">
                        <h1 class="card-title text-success">MTC Performance Management System</h1>
                    </div>
                    <div class="card-body bg-white p-5 m-1">
                        <div class='row justify-content-center'>
                            <button class="btn btn-primary col-lg-10 btn-lg" style="font-size:22px;">
                                Ratee</button>
                        </div>
                        <div class='row justify-content-center mt-2'>
                            <button class="btn btn-danger col-lg-10 btn-lg">Rater</button>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>
    </div>
@endsection
