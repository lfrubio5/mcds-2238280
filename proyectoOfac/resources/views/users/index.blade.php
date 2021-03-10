
@extends('layouts.app')

@section('title', 'Module Users')

@section('content')
    <div class="container">
        <div class="col-md-10 offset-md-1">
            <h1><i class="fas fa-users">Mudile users</i></h1>
            <hr>
            <a hreft="" class="btn btn-success"><i class="fas -ga-plus">Add Users</i></a>
            <hr>
            <table class="table table-striped table-border table-hover">
                <thead>
                    <tr>
                        <th>Nombre Completo</th>
                        <th>Photo</th>
                        <th>Email</th>
                        <th>role</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $key => $user)
                    <tr>
                        <td>{{ $user->fullname }}</td>
                        <td><img src="{{ asset($user->photo) }}" width="36px" alt=""></td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->role }}</td>
                        <td class="text-center">

                            <a href="" class="btn btn-sm btn-larapp">
                                <i class="fas fa-search"></i>
                            </a>
                            <a href="" class="btn btn-sm btn-larapp">
                                <i class="fas fa-pen"></i>
                            </a>
                            <a href="" class="btn btn-sm btn-danger">
                                <i class="fas fa-trash"></i>
                            </a>
                        </td>
                    </tr> 
                    @endforeach
                </tbody>
            </table>
            {{ $users->links() }}
        </div>
    </div>
@endsection