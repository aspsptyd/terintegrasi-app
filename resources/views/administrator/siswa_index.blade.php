@extends('layouts.app_sneat')

@section('content')
<div class="container-fluid flex-grow-1 container-p-y">
    <div class="col-md-12">
        <div class="card">
            <h3 class="card-header">Data Siswa</h3>
    
            <div class="card-body">
                <a href="{{ route('user.create') }}" class="btn btn-sm btn-primary mb-3">Tambah Data Siswa</a>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th style="text-align: center">No.</th>
                                <th>Nama Siswa</th>
                                <th>Email</th>
                                <th>No. WhatsApp</th>
                                <th>As Access</th>
                                <th>Register at</th>
                                <th style="text-align: center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($modeluser as $item)
                                <tr>
                                    <td style="text-align: center">{{ $loop->iteration + (($modeluser->currentPage() -1) * $modeluser->perPage())  }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ $item->phone_number }}</td>
                                    <td>{{ $item->roles }}</td>
                                    <td>{{ $item->created_at }}</td>
                                    <td style="text-align: center">
                                        {!! Form::open([
                                            'route' => ['user.destroy', $item->id],
                                            'method' => 'DELETE',
                                            'onsubmit' => 'return confirm("Yakin Anda ingin menghapus data ini?")',
                                        ]) !!}
                                        <a href="{{ route('user.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                        {!! Form::submit('Hapus', ['class' => 'btn btn-danger btn-sm']) !!}
                                        <a href="{{ route('user.show', $item->id) }}" class="btn btn-primary btn-sm">Details</a>
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" style="text-align: center">Data siswa tidak ditemukan di database!  </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                    <br />
                    {!! $modeluser->links() !!}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
