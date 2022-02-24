@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-15">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <div class="card text-center">
                    <div class="card-body">
                        <h2 class="card-title">WELCOME TO SUKABACA </h2>
                        <p class="card-text">Register Manage Applicant SUKABACA WEBSITE</p>
                    </div>

                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Manage Data Apllicant</h5>
                                    <p class="card-text">You can manage applicants' data here. you want to manage data? If you want to manage data, please click the <b>Manage</b> button below.</p>
                                    <a href="{{ url('pelamar/') }}" class="btn btn-primary">Manage</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Manage Data User</h5>
                                    <p class="card-text">Manage your data user here. you want to manage data user? if you want to manage data user, please click the <b>Manage</b> button below.</p>
                                    <a href="{{ url('data/') }}" class="btn btn-primary">Manage</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
                            <p class="col-md-4 mb-0 text-muted">&copy; 2022 SUKABACA Company, Inc</p>

                            <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
                                <svg class="bi me-2" width="40" height="32">
                                    <use xlink:href="#bootstrap" />
                                </svg>
                            </a>

                            <ul class="nav col-md-4 justify-content-end">
                                <li class="nav-item"><a href="{{ url('home') }}" class="nav-link px-2 text-muted">Home</a></li>

                            </ul>
                        </footer>
                    </div>
                    @endsection