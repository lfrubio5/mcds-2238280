
@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col col-md-10 offset-md-1">
            <caption class="caption"></caption>
            <table class="table table-striped table-condensed responsive-table table-dark">
                    <thead>
                        <tr>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th>Telefono</th>
                        <th>photo</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                        <tr>
                            <td> {{ $user->fullname }}</td>
                            <td> {{ $user->email }}</td>
                            <td>{{ $user->phone }}</td>
                            <td><img src="{{ asset($user->photo) }}" class="img-thumbnail rounded-circle" width="36px"></td>
                        </tr>
                        @endforeach
                    </tbody>
            </table>
        </div>
    </div>
</div>
@endsection