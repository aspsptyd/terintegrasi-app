@extends('layouts.app_sneat')

@section('content')
<div class="col-md-12">
    <div class="card">
        <div class="card-header">Hi, {{ auth()->user()->name }} your as <span class="fw-bold">{{ auth()->user()->roles === 'administrator' ? 'Administrator' : 'Undefined!' }}</span></div>

        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            {{ __('You are logged in!') }}
        </div>
    </div>
</div>
@endsection
