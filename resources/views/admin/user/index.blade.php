@extends('layouts.app')
@section('content')

    <div class="container p-5 bg-secondary text-white">
        <h1>Dashboard</h1>
    </div>

    <div class="main-body">

        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <div class="row gutters-sm pt-5">
            <div class="container">
                <div class="card bg-primary">
                    <div class="fs-4 ms-3 mt-3">
                        <h3 class="text-white">User</h3>
                    </div>
                    <hr>
                    <div class="row justify-content-center ms-2 me-2">
                        <table class="table table-light table-default">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Nama Pengguna</th>
                                    <th scope="col">Alamat Email</th>
                                    <th scope="col">Tanggal Pendaftaran</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <td>
                                            {{ $user->id }}
                                        </td>
                                        <td>
                                            {{ $user->username }}
                                        </td>
                                        <td>
                                            {{ $user->email }}
                                        </td>
                                        <td>
                                            {{ date_format($user['created_at'], 'd-m-Y') }}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
