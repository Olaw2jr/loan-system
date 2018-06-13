@extends('layouts.app')

@section('content')
<div class="container">
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    <div class="row justify-content-center">
        <div class="col-md-3">
            <img src="{{ Auth::user()->avatar }}" alt="{{ Auth::user()->name }}" style="width:250px; height:250px;" class="img-thumbnail rounded-circle">
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Loan Details</div>

                <div class="card-body">

                    <div class="form-group row">
                        <label for="staticEmail2" class="col-sm-3 col-form-label">Name:</label>
                        <div class="col-sm-9">
                            <input type="text" readonly class="form-control-plaintext" value="{{ Auth::user()->name }}">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="staticEmail2" class="col-sm-3 col-form-label">Reg No:</label>
                        <div class="col-sm-9">
                            <input type="text" readonly class="form-control-plaintext" value="{{ Auth::user()->reg_no }}">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="staticEmail2" class="col-sm-3 col-form-label">Course Name:</label>
                        <div class="col-sm-9">
                            <input type="text" readonly class="form-control-plaintext" value="{{ Auth::user()->course_name }}">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="staticEmail2" class="col-sm-3 col-form-label">Bank:</label>
                        <div class="col-sm-9">
                            <input type="text" readonly class="form-control-plaintext pr-0" value="{{ Auth::user()->bank_name }}">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="staticEmail2" class="col-sm-3 col-form-label">Account No:</label>
                        <div class="col-sm-9">
                            <input type="text" readonly class="form-control-plaintext" value="{{ Auth::user()->account_no }}">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="staticEmail2" class="col-sm-3 col-form-label">Last Date Received:</label>
                        <div class="col-sm-9">
                            <input type="text" readonly class="form-control-plaintext" value="{{ $date }}">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="staticEmail2" class="col-sm-3 col-form-label">Amount Issued:</label>
                        <div class="col-sm-9">
                            <input type="text" readonly class="form-control-plaintext" value="650,000/=">
                        </div>
                    </div>

                    @if ($users->signed)
                        <div class="alert alert-primary" role="alert">
                            Thank You, You Have signed already. Wait in you bank Account.
                        </div>
                    @else
                        <form  method="POST" action="signed/{{ Auth::user()->id }}">
                            @csrf
                            @method('PATCH')

                            <div class="form-group row">
                                <label for="password" class="col-sm-3 col-form-label">Sign this field:</label>
                                <div class="col-sm-9">
                                    <div class="card" style="height: 10rem;">
                                        <canvas id="signature-pad" class="signature-pad" style="width=100%; height=auto;"></canvas>
                                    </div>

                                    <small id="passwordHelpBlock" class="form-text text-muted">
                                        By Entering Password and Submitting you agree for the system to sign the document on your behalf.
                                    </small>
                                </div>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary px-5">Submit</button>
                            </div>
                        </form>
                    @endif


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
