@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9">
                @if ($users)
                    <div class="card">
                        <div class="card-header">
                            Admin Dashboard
                            {{-- <a href="{{ route('register') }}"><span class="badge badge-secondary float-right px-4 py-2" style="font-weight: 100;">Add Student</span></a> --}}
                        </div>

                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                            @endif


                            @foreach ($users as $user)
                                <div class="media">
                                    <img class="mr-3 rounded-circle img-thumbnail" src="{{ $user->avatar }}" style="width: 70px; height: 70px;" alt="{{ $user->avatar }}">
                                    <div class="media-body">
                                        <h3 class="mt-1">{{ $user->name }}
                                            @if ($user->signed->signed)
                                                <span class="badge badge-success float-right px-3 py-1" style="font-size: 60%; font-weight: 100;">Signed</span>
                                            @else
                                                <span class="badge badge-danger float-right px-3 py-1" style="font-size: 60%; font-weight: 100;">Not Signed</span>
                                            @endif
                                        </h3>
                                        <ul class="list-inline">
                                            <li class="list-inline-item"><b>Reg No:</b> {{ $user->reg_no }}</li>
                                            <li class="list-inline-item"><b>Bank:</b> {{ $user->bank_name }}</li>
                                            <li class="list-inline-item"><b>Amount:</b> 650,000/=</li>
                                            <form action="admin/user/{{ $user->id }}/delete" method="POST" class="float-right">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" class="btn btn-sm btn-secondary px-4 py-2" style="font-weight: 100;">Delete Student</button>
                                            </form>
                                        </ul>
                                    </div>
                                </div>
                                <hr class="mt-3">
                            @endforeach
                        </div>
                    </div>
                @else
                <div class="card">
                        <div class="card-header">
                            Admin Dashboard
                        </div>

                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                            @endif

                            Sorry No Registered Student Currently
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
