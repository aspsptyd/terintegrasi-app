@extends('layouts.app_sneat')

@section('content')
<div class="container-fluid flex-grow-1 container-p-y">
    <div class="col-md-12">
        <div class="card">
            <h3 class="card-header">Data Siswa</h3>
    
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama Siswa</th>
                                <th>Email</th>
                                <th>No. WhatsApp</th>
                                <th>Akses</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($modeluser as $item)
                                <tr>
                                    <th>{{ $loop->iteration }}</th>
                                    <th>{{ $item->name }}</th>
                                    <th>{{ $item->email }}</th>
                                    <th>{{ $item->phone_number }}</th>
                                    <th>{{ $item->roles }}</th>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" style="text-align: center">Data siswa tidak ditemukan di database!  </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                    {!! $modeluser->links() !!}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
