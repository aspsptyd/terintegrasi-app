@extends('layouts.app_sneat')

@section('content')
    <div class="container-fluid flex-grow-1 container-p-y">
        <div class="col-md-12">
            <div class="card">
                <h3 class="card-header">Form Data Siswa</h3>

                <div class="card-body">
                    {!! Form::model($modeluser, ['route' => $route, 'method' => $method]) !!}
                    <div class="form-group">
                        <label for="name">Nama Siswa</label>
                        {!! Form::text('name', null, ['class' => 'form-control', 'autofocus']) !!}
                        <span class="text-danger">{{ $errors->first('name') }}</span>
                    </div>
                    <div class="form-group mt-3">
                        <label for="email">Email Siswa</label>
                        {!! Form::text('email', null, ['class' => 'form-control']) !!}
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                    </div>
                    <div class="form-group mt-3">
                        <label for="password">Password Akses</label>
                        {!! Form::password('password', ['class' => 'form-control', 'placeholder' => $hintpassword]) !!}
                        <span class="text-danger">{{ $errors->first('password') }}</span>
                    </div>
                    <div class="form-group mt-3">
                        <label for="phone_number">Nomor WhatsApp</label>
                        {!! Form::text('phone_number', null, ['class' => 'form-control']) !!}
                        <span class="text-danger">{{ $errors->first('phone_number') }}</span>
                    </div>
                    <div class="form-group mt-3">
                        <label for="roles">Hak Akses</label>
                        {!! Form::select(
                            'roles', 
                            [
                                'siswa' => 'Pelajar'
                            ],
                            null,
                            ['class' => 'form-control']) 
                        !!}
                        <span class="text-danger">{{ $errors->first('roles') }}</span>
                    </div>
                    {!! Form::submit($button, ['class' => 'btn btn-primary mt-3']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
