@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">About</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Registered users are:
                    @foreach ($users as $user)
                        <p> User name {{$user->name}}</p>

                        @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
