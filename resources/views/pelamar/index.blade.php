@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-15">

            <div class="card">

                <div class="card-header">{{ __('Manage Data Register Applicant') }}</div>
                <div class="card text-center">
                    <div class="card-body">

                        <div class="table-responsive-sm">
                            <table class="table table-borderless table-sm">
                                <caption>List of users</caption>

                                <tr class="table-light">
                                    <th class="table-secondary">Full Name</th>
                                    <th class="table-secondary">ID Number</th>
                                    <th class="table-secondary">Email </th>
                                    <th class="table-secondary">Date of Birth</th>
                                    <th class="table-secondary">Phone Number</th>
                                    <th class="table-secondary">Gender</th>
                                    <th class="table-secondary">Address</th>
                                    <th class="table-secondary">Last Education </th>
                                    <th class="table-secondary" colspan="2"> Action </th>
                                </tr>
                                @foreach($datas as $key=>$value)
                                <tr>
                                    <td class="table-light">{{ $value->nama }}</td>
                                    <td class="table-light">{{ $value->no_ktp }} </td>
                                    <td class="table-light">{{ $value->email }} </td>
                                    <td class="table-light">{{ $value->tgl_lahir }} </td>
                                    <td class="table-light">{{ $value->no_hp }} </td>
                                    <td class="table-light">{{ $value->jenis_kelamin }} </td>
                                    <td class="table-light">{{ $value->alamat }} </td>
                                    <td class="table-light">{{ $value->pendidikan }} </td>

                                    <td class="table-light"> <a class="btn btn-success btn-sm" href="{{ url('pelamar/'.$value->id.'/edit') }}"> Update </td>
                                    <td class="table-light">
                                        <form action="{{  url('pelamar/'.$value->id)  }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                                        </form>
                                </tr>
                                </td>
                                @endforeach

                            </table>

                            <div class="card-body">
                                <a class="btn btn-primary" href="{{ url('pelamar/create') }}">Create</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection