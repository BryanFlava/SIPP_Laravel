@extends('layouts.app')

@section('content')
<br />
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Add Data Applicant') }}</div>
                <form method="POST" action="{{ url('pelamar') }}">
                    @csrf
                    <div class="card-body">
                        <div class="row mb-3">
                            <div class="mb-3">
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">@</span>
                                    <input id="nama" label for="exampleFormControlInput1" aria-describedby="basic-addon1" placeholder="Full Name" type="text" class="form-control @error('text') is-invalid @enderror" name="nama" value="{{ old('nama') }}" required autocomplete="nama" autofocus>
                                </div>
                                @error('nama')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label"> Id Number</label>
                                    <input class="form-control" type="text" placeholder="Id Number" name="no_ktp" aria-label="id_number">

                                    <div class="row g-3">
                                        <div class="col">
                                            <label for="exampleFormControlInput1" class="form-label"> Email</label>
                                            <input id="email" aria-describedby="basic-addon2" placeholder="name@example.com" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                            <span class="input-group-text" id="basic-addon2">@example.com</span>
                                        </div>

                                        <div class="col">
                                            <label for="exampleFormControlInput1" class="form-label"> Phone Number</label>
                                            <input class="form-control" type="text" placeholder="Phone Number" name="no_hp" aria-label="no_hp">
                                            <span class="input-group-text" id="basic-addon2">@example.com</span>
                                        </div>

                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label"> Date of Birth</label>
                                            <input id="date" class="form-control" type="text" placeholder="Date of Birth" name="tgl_lahir" aria-label="tgl_lahir"></input>

                                            <label for="exampleFormControlInput1" class="form-label"> Gender</label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="jenis_kelamin" id="exampleRadios1" value="Male" checked>
                                                <label class="form-check-label" for="exampleRadios1">
                                                    Male
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="jenis_kelamin" id="exampleRadios2" value="Female">
                                                <label class="form-check-label" for="exampleRadios2">
                                                    Female
                                                </label>
                                            </div>

                                            <div class="form-floating">
                                                <textarea class="form-control" placeholder="Address" id="floatingTextarea2" name="alamat" style="height: 100px"></textarea>
                                                <label for="floatingTextarea2">Address</label>
                                            </div>
                                            <br />

                                            <div class="input-group mb-3">
                                                <label class="input-group-text" for="inputGroupSelect01">Last Education</label>
                                                <select class="form-select" id="pendidikan" name="pendidikan" required autocomplete="pendidikan">
                                                    <option selected>Choose...</option>
                                                    <option value="S1">S1</option>
                                                    <option value="SMA">SMA</option>
                                                    <option value="SMP">SMP</option>
                                                    <option value="SD">SD</option>
                                                </select>
                                            </div>
                                            <br />
                                            <input class="btn btn-primary" type="submit" value="Submit">
                                        </div>
                                    </div>
                                </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
@endsection