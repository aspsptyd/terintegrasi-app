@extends('layouts.app_sneat')

@section('content')
<div class="container-fluid flex-grow-1 container-p-y">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">Hi, {{ auth()->user()->name }} your as <span class="fw-bold">{{ auth()->user()->roles === 'wali' ? 'Wali Murid' : 'Undefined!' }}</span></div>
    
            <div class="card-body">
                Welcome in <span class="fw-bold">Admin Template {{ env('TEMPLATE_ADMIN_VERSION') }}</span>, And you are logged in now!
            </div>
        </div>
    </div>
</div>

@endsection
