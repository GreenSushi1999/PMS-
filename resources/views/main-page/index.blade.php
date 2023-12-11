@extends('layouts.app')

@section('title', 'Performance Management System')

@section('content')

    <div class="container">
        <div class="row d-flex justify-content-center align-items-center mt-5">
            <div class="col-lg-4 mt-5">
                <div class="card bg-white  p-3 text-center d-flex justify-content-center  rounded shadow mt-5">
                    <div class="d-flex justify-content-center mt-3">
                        <img src="../img/logo.png" alt="" height="150" width="150">
                    </div>
                    <h2 class="card-title p-1"> Performance Management System</h2>
                    <div class="card-body p-3 ">
                        <div class="row m-2">
                            <button class="btn btn-success" data-toggle="modal"
                                data-target="#exampleModalCenter">Ratee</button>
                        </div>
                        <div class="row
                                m-2">
                            <button class="btn btn-primary">Rater</button>
                        </div>
                        <div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-success">
                        <h5 class="modal-title text-white" id="exampleModalLongTitle">Choose your File</h5>
                        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" class="text-white">&times;</span>
                        </button>
                    </div>
<<<<<<< HEAD

                    <form action="{{ route('ratee-info') }}" method="POST">
                        @csrf
                        <div class="modal-body">
                            <p>
                                Choose your document type:
                            </p>
                            <select name="doc_type" id="doc_type" class="select2">
                                @foreach ($doc_type as $doc)
                                    <option value="{{ $doc->cid }}">{{ $doc->doc_name }}</option>
                                @endforeach

                            </select>
                        </div>

                        <div class="modal-footer ">
                            <button class="btn btn-success">Continue</button>
                        </div>
                    </form>
=======
                    <div class="modal-body">
                        <p class="text-white">
                            This form shall be accomplished at the end of each evaluation period. This form summarizes the
                            entire process of performance management and must objectively and honestly reflect the
                            evaluation based on facts and actual incidents identified through monitoring and coaching.
                        </p>
                    </div>

                    <div class="modal-footer bg-success">
                        <button class="btn bg-white">Continue</button>
                    </div>

>>>>>>> 1cbbd537fe19d81e5c3afe81be18a006508bccf1
                </div>
            </div>
        </div>

    </div>
    <script>
        $(document).ready(function() {
            $('#doc_type').select2();
        });
    </script>


@endsection
