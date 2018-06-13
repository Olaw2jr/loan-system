@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="reg_no" class="col-md-4 col-form-label text-md-right">{{ __('Reg No.') }}</label>

                            <div class="col-md-6">
                                <input id="reg_no" type="text" class="form-control{{ $errors->has('reg_no') ? ' is-invalid' : '' }}" name="reg_no" value="{{ old('reg_no') }}" required autofocus>

                                @if ($errors->has('reg_no'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('reg_no') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="course_name" class="col-md-4 col-form-label text-md-right">{{ __('Course Name') }}</label>

                            <div class="col-md-6">
                                <input id="course_name" type="text" class="form-control{{ $errors->has('course_name') ? ' is-invalid' : '' }}" name="course_name" value="{{ old('course_name') }}" required autofocus>

                                @if ($errors->has('course_name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('course_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Student Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Upload Profile Pic.') }}</label>

                            <div class="custom-file col-md-6">
                                <input type="file" class="custom-file-input form-control{{ $errors->has('avatar') ? ' is-invalid' : '' }}" name="avatar">
                                <label class="custom-file-label" for="avatar">Upload picture</label>
                                @if ($errors->has('avatar'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('avatar') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="bank_name" class="col-md-4 col-form-label text-md-right">{{ __('Bank Name') }}</label>

                            <div class="col-md-6">
                                <input id="bank_name" type="text" class="form-control{{ $errors->has('bank_name') ? ' is-invalid' : '' }}" name="bank_name" value="{{ old('bank_name') }}" required autofocus>

                                @if ($errors->has('bank_name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('bank_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="account_no" class="col-md-4 col-form-label text-md-right">{{ __('Account No.') }}</label>

                            <div class="col-md-6">
                                <input id="account_no" type="text" class="form-control{{ $errors->has('account_no') ? ' is-invalid' : '' }}" name="account_no" value="{{ old('account_no') }}" required autofocus>

                                @if ($errors->has('account_no'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('account_no') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
