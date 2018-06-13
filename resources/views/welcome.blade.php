@extends('layouts.app')

@section('content')
    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="title m-b-md">
                Loan Verification System
            </div>

            <div class="links">
                <a href="{{ route('login') }}">Students</a>
                <a href="{{ route('admin.login') }}">Administrator</a>
            </div>
        </div>
    </div>
@endsection
