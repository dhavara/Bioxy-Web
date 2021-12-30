@extends('layouts.app')
@section('content')

<div class="container p-5 bg-secondary text-white">
    <h1>Edit Profile</h1>
</div>

<div class="main-body">
    <div class="row justify-content-center">
        <div>
            <div class="card bg-primary">
                <div class="card-body">
                    <form action="{{ route('profileUpdate') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input id="id" type="hidden" class="form-control" name="id" value="{{ $user['id'] }}">
                
                        <div class="row mb-3">
                            <label for="username" class="text-white col-md-4 col-form-label text-md-right">{{ __('Nama Pengguna') }}</label>

                            <div class="col-md-6">
                                <input id="username" type="text" class="bg-secondary text-white form-control @error('username') is-invalid @enderror" name="username" value="{{ $user['username'] }}" required autocomplete="username" autofocus>

                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="name" class="text-white col-md-4 col-form-label text-md-right">{{ __('Nama Asli') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="bg-secondary text-white form-control @error('name') is-invalid @enderror" name="name" value="{{ $user['name'] }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="img" class="text-white col-md-4 col-form-label text-md-right">{{ __('Foto Profil') }}</label>

                            <div class="col-md-6">
                                <input id="img" type="file" class="bg-secondary text-white form-control" name="img" accept="image/*">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="text-white col-md-4 col-form-label text-md-right">{{ __('Alamat E-Mail') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="bg-secondary text-white form-control @error('email') is-invalid @enderror" name="email" value="{{ $user['email'] }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="school" class="text-white col-md-4 col-form-label text-md-right">{{ __('Asal Sekolah') }}</label>

                            <div class="col-md-6">
                                <input id="school" type="text" class="bg-secondary text-white form-control @error('school') is-invalid @enderror" name="school" value="{{ $user['school'] }}" required autocomplete="school">

                                @error('school')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="city" class="text-white col-md-4 col-form-label text-md-right">{{ __('Asal Kota') }}</label>

                            <div class="col-md-6">
                                <input id="city" type="text" class="bg-secondary text-white form-control @error('city') is-invalid @enderror" name="city" value="{{ $user['city'] }}" required autocomplete="city">

                                @error('city')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="birthdate" class="text-white col-md-4 col-form-label text-md-right">{{ __('Tanggal Lahir') }}</label>

                            <div class="col-md-6">
                                <input id="birthdate" type="date" class="bg-secondary text-white form-control @error('birthdate') is-invalid @enderror" name="birthdate" value="{{ date('Y-m-d', substr($user['birthdate'], 0, 10)) }}" required autocomplete="birthdate">

                                @error('birthdate')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="title" class="text-white col-md-4 col-form-label text-md-right">{{ __('Gelar') }}</label>

                            <div class="col-md-6">
                                <select class="form-control selectpicker bg-white" data-live-search="true" id="title" name="title">
                                    @foreach ($user->titles as $title)
                                        <option 
                                        @if ($title['title_id'] == $user->detail['user_title'])
                                            selected="selected"
                                        @endif
                                        value="{{ $title->item['id'] }}">{{ $title->item['title'] }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        {{-- frames --}}
                        <div class="row mb-3">
                            <label for="frame" class="text-white col-md-4 col-form-label text-md-right">{{ __('Bingkai') }}</label>

                            <div class="col-md-6">
                                <select class="form-control selectpicker bg-white" data-live-search="true" id="frame" name="frame">
                                    <option 
                                    @if ($user->detail['frame'] == null)
                                        selected="selected"
                                    @endif
                                    value=null>Tanpa Bingkai
                                    </option>

                                    @if ($user->frames != null)
                                    @foreach ($user->frames as $frame)
                                        <option 
                                        @if ($frame['frame_id'] == $user->detail['user_frame'])
                                            selected="selected"
                                        @endif
                                        value="{{ $frame->item['id'] }}">{{ $frame->item['name'] }}
                                        </option>
                                    @endforeach
                                    @endif
                                </select>
                            </div>
                        </div>

                        {{-- colors --}}
                        <div class="row mb-3">
                            <label for="color" class="text-white col-md-4 col-form-label text-md-right">{{ __('Warna') }}</label>

                            <div class="col-md-6">
                                <select class="form-control selectpicker bg-white" data-live-search="true" id="color" name="color">
                                    <option 
                                    @if ($user->detail['color'] == null)
                                        selected="selected"
                                    @endif
                                    value=null>Hitam
                                    </option>
                                    @if ($user->colors != null)
                                    @foreach ($user->colors as $color)
                                        <option 
                                        @if ($color['color_id'] == $user->detail['user_color'])
                                            selected="selected"
                                        @endif
                                        value="{{ $color->item['id'] }}" style="color: {{ $color->item['hex_code'] }}">{{ $color->item['name'] }}
                                        </option>
                                    @endforeach
                                    @endif
                                </select>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-secondary text-white ">
                                    {{ __('Perbarui') }}
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection