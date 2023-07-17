@extends('layouts.app_sneat')

@section('content')
    <div class="container-fluid flex-grow-1 container-p-y">
        <div class="col-md-12">
            <div class="card">
                <h3 class="card-header">Siswa <i class='bx bx-right-arrow-alt'></i> {{ $page_info }} Data Siswa</h3>

                <div class="card-body">
                    {!! Form::model($modeluser, ['route' => $route, 'method' => $method]) !!}
                    <div class="form-group">
                        <label for="name">Nama Siswa</label>
                        <div class="input-group input-group-merge">
                            <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                    class="bx bx-user"></i></span>
                            {!! Form::text('name', null, ['class' => 'form-control', 'autofocus', 'placeholder' => $hintfullname]) !!}
                        </div>
                        <span class="text-danger">{{ $errors->first('name') }}</span>
                    </div>
                    <div class="form-group mt-3">
                        <label for="email">Email Siswa</label>
                        <div class="input-group input-group-merge">
                            <span class="input-group-text"><i class="bx bx-envelope"></i></span>
                            {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => $hintemail]) !!}
                        </div>
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                    </div>
                    <div class="form-group mt-3">
                        <label for="password">Password Akses</label>
                        <div class="input-group input-group-merge">
                            <span class="input-group-text"><i class="bx bx-lock-alt"></i></span>
                            {!! Form::password('password', ['class' => 'form-control', 'placeholder' => $hintpassword]) !!}
                        </div>
                        <span class="text-danger">{{ $errors->first('password') }}</span>
                    </div>
                    <div class="form-group mt-3">
                        <label for="phone_number">Nomor WhatsApp</label>
                        <div class="input-group input-group-merge">
                            <span class="input-group-text"><i class="bx bx-phone"></i></span>
                            {!! Form::text('phone_number', null, ['class' => 'form-control', 'placeholder' => $hintnowa]) !!}
                        </div>
                        <span class="text-danger">{{ $errors->first('phone_number') }}</span>
                    </div>
                    <div class="form-group mt-3">
                        <label for="roles">Hak Akses</label>
                        <div class="input-group input-group-merge">
                            <span class="input-group-text"><i class="bx bx-target-lock"></i></span>                        {!! Form::select(
                                'roles',
                                [
                                    'siswa' => 'Pelajar',
                                ],
                                null,
                                ['class' => 'form-control'],
                            ) !!}
                        </div>
                        <span class="text-danger">{{ $errors->first('roles') }}</span>
                    </div>
                    {!! Form::submit($button, ['class' => 'btn btn-primary mt-3']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
