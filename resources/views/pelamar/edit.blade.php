@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Update Data Applicant') }}</div>
                <form method="POST" action="{{ url('pelamar/'.$model->id) }}">
                    @csrf
                    <div class="card-body">
                        <input type="hidden" name="_method" value="PATCH">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Full Name</label>
                            <input class="form-control" type="text" placeholder="What's ur Name?" name="nama" aria-label="Nama" value="{{ $model->nama }}"></input>

                            <div class="row g-3">
                                <div class="col">
                                    <label for="exampleFormControlInput1" class="form-label"> Email</label>
                                    <input class="form-control" type="text" placeholder="What's ur Email?" name="email" aria-label="email" value="{{ $model->email }}"></input>
                                </div>
                                <div class="col">
                                    <label for="exampleFormControlInput1" class="form-label"> Phone Number</label>
                                    <input class="form-control" type="text" placeholder="What's ur Phone Number?" name="no_hp" aria-label="no_hp" value="{{ $model->no_hp }}"></input>
                                </div>

                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label"> Date of Birth</label>
                                    <input id="date" class="form-control" type="text" placeholder="Date of Birth" name="tgl_lahir" aria-label="tgl_lahir" value="{{ $model->tgl_lahir }}"></input>

                                    <label for="exampleFormControlInput1" class="form-label"> Gender</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="exampleRadios1" value="Male" <?php if ($model->jenis_kelamin == 'Male') {
                                                                                                                                                echo 'checked';
                                                                                                                                            } ?>>
                                        <label class="form-check-label" for="exampleRadios1">
                                            Male
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="exampleRadios2" value="Female" <?php if ($model->jenis_kelamin == 'Female') {
                                                                                                                                                    echo 'checked';
                                                                                                                                                } ?>>
                                        <label class="form-check-label" for="exampleRadios2">
                                            Female
                                        </label>
                                    </div>

                                    <br />
                                    <div class="form-floating">
                                        <input class="form-control" placeholder="Address" id="alamat" type="text" value="{{$model->alamat}}" name="alamat" style="height: 100px"></input>
                                        <label for="alamat">Address</label>
                                    </div>
                                    <br />
                                    <div class="input-group mb-3">
                                        <label class="input-group-text" for="inputGroupSelect01">Last Education</label>
                                        <select class="form-select" id="pendidikan" name="pendidikan" required>
                                            <option value=" S1" <?php if ($model->pendidikan == 'S1') {
                                                                    echo 'selected';
                                                                } ?>>S1</option>
                                            <option value="SMA" <?php if ($model->pendidikan == 'SMA') {
                                                                    echo 'selected';
                                                                } ?>>SMA</option>
                                            <option value="SMP" <?php if ($model->pendidikan == 'SMP') {
                                                                    echo 'selected';
                                                                } ?>>SMP</option>
                                            <option value="SD" <?php if ($model->pendidikan == 'SD') {
                                                                    echo 'selected';
                                                                } ?>>SD</option>
                                        </select>
                                        <br />
                                    </div>
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