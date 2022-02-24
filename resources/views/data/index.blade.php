@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-15">

            <div class="card">

                <div class="card-header">{{ __('Manage Data User') }}</div>
                <div class="card text-center">
                    <div class="card-body">

                        <div class="table-responsive-sm">
                            <table class="table table-borderless table-sm">
                                <caption>List of users</caption>
                                <tr class="table-light">

                                    <th class="table-secondary"> Username</th>
                                    <th class="table-secondary">Email </th>
                                    <th class="table-secondary"> Action </th>
                                </tr>
                                @foreach($datas as $key=>$value)
                                <tr>
                                    <td class="table-light">{{ $value->name }}</td>
                                    <td class="table-light">{{ $value->email }} </td>
                                    <td class="table-light">
                                        <form action="{{  url('data/'.$value->id)  }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                                        </form>
                                </tr>
                                </td>
                                @endforeach
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection