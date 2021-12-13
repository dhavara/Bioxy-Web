@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <h1>Fill your Identity</h1>

        <!-- Content Row -->
        <div class="">
            <form action="{{ route('bioxyprof.update', $profile['profile_code']) }}" method="POST">
                @csrf
                <input type="hidden" name="_method" value="PATCH">
                <div class="form-group">
                    <label>Nama Lengkap: </label>
                    <input type="text" class="form-control" name="fullname" value="{{ $profile->fullname }}" required>
                </div>
                <br>
                <div class="form-group">
                    <label>Email: </label>
                    <input type="text" class="form-control" name="email" value="{{ $profile->contactperson }}" required>
                </div>
                <div class="form-group">
                    <label>Sekolah: </label>
                    <input type="text" class="form-control" name="age" value="{{ $profile->school }}" required>
                </div>
                <br>
                <div class="form-group">
                    <label>Kota: </label>
                    <input type="text" class="form-control" name="kota" value="{{ $profile->kota }}" required>
                </div>
                <br>
                <div class="col">
                    <label>Tanggal Lahir: </label>
                    <input type="date" class="form-control" placeholder="Tanggal Lahir" name="birthdate" value="{{ $profile->birthdate }}" required>
                  </div>
                <br>
                <br>
                <div class="text-center">
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </form>
        </div>

    </div>
</div>

@endsection