@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>

            </div>
            <hr>
            <div class="card">

                    <div class="card-header">
                        Admin Menu
                    </div>
                    <div class="card-body">
                        <div class="list-group">
                            <a href="/Categories" class="list-group-item list-group-item-action">Categories</a>
                            <a href="/Rounds" class="list-group-item list-group-item-action">Rounds</a>
                            <a href="#" class="list-group-item list-group-item-action">Scores</a>

                          </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
