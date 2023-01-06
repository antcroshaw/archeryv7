@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Menu') }}</div>

                <div class="list-group">
                    <a href="/" class="list-group-item ">
                     Home
                    </a>
                    <a href="#" class="list-group-item list-group-item-action list-group-item-action active">About</a>
                    <a href="#" class="list-group-item list-group-item-action">Contact Us</a>
                    
                  </div>

            </div>
            <hr>
            <div class="card">

                    <div class="card-header">
                        About us
                    </div>
                    <div class="card-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius beatae consectetur deleniti modi quia, quas culpa excepturi accusamus exercitationem, harum aspernatur. Totam similique, animi deserunt earum vero numquam consectetur vel!</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
