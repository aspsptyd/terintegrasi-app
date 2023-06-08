@extends('layouts.app_sneat')

@section('content')
<div class="col-md-12">
    <div class="card">
        <h4 class="card-header">Hi, {{ auth()->user()->name }} your as <span class="fw-bold">{{ auth()->user()->roles === 'administrator' ? 'Administrator' : 'Undefined!' }}</span></h4>

        <div class="card-body">
            Welcome in <span class="fw-bold">Admin Template {{ env('TEMPLATE_ADMIN_VERSION') }}</span>, And you are logged in now!
        </div>
    </div>
</div>
@endsection
